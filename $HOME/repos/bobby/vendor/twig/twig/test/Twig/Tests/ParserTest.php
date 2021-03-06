<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
class Twig_Tests_ParserTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @expectedException Twig_Error_Syntax
     */
    public function testSetMacroThrowsExceptionOnReservedMethods()
    {
        $parser = $this->getParser();
        $parser->setMacro('parent', $this->getMockBuilder('Twig_Node_Macro')->disableOriginalConstructor()->getMock());
    }

    /**
     * @expectedException        Twig_Error_Syntax
     * @expectedExceptionMessage Unknown "foo" tag. Did you mean "for" at line 1?
     */
    public function testUnknownTag()
    {
        $stream = new Twig_TokenStream([
            new Twig_Token(Twig_Token::BLOCK_START_TYPE, '', 1),
            new Twig_Token(Twig_Token::NAME_TYPE, 'foo', 1),
            new Twig_Token(Twig_Token::BLOCK_END_TYPE, '', 1),
            new Twig_Token(Twig_Token::EOF_TYPE, '', 1),
        ]);
        $parser = new Twig_Parser(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
        $parser->parse($stream);
    }

    /**
     * @expectedException        Twig_Error_Syntax
     * @expectedExceptionMessage Unknown "foobar" tag at line 1.
     */
    public function testUnknownTagWithoutSuggestions()
    {
        $stream = new Twig_TokenStream([
            new Twig_Token(Twig_Token::BLOCK_START_TYPE, '', 1),
            new Twig_Token(Twig_Token::NAME_TYPE, 'foobar', 1),
            new Twig_Token(Twig_Token::BLOCK_END_TYPE, '', 1),
            new Twig_Token(Twig_Token::EOF_TYPE, '', 1),
        ]);
        $parser = new Twig_Parser(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
        $parser->parse($stream);
    }

    /**
     * @dataProvider getFilterBodyNodesData
     */
    public function testFilterBodyNodes($input, $expected)
    {
        $parser = $this->getParser();

        $this->assertEquals($expected, $parser->filterBodyNodes($input));
    }

    public function getFilterBodyNodesData()
    {
        return [
            [
                new Twig_Node([new Twig_Node_Text('   ', 1)]),
                new Twig_Node([]),
            ],
            [
                $input = new Twig_Node([new Twig_Node_Set(false, new Twig_Node(), new Twig_Node(), 1)]),
                $input,
            ],
            [
                $input = new Twig_Node([new Twig_Node_Set(true, new Twig_Node(), new Twig_Node([new Twig_Node([new Twig_Node_Text('foo', 1)])]), 1)]),
                $input,
            ],
        ];
    }

    /**
     * @dataProvider getFilterBodyNodesDataThrowsException
     * @expectedException Twig_Error_Syntax
     */
    public function testFilterBodyNodesThrowsException($input)
    {
        $parser = $this->getParser();

        $parser->filterBodyNodes($input);
    }

    public function getFilterBodyNodesDataThrowsException()
    {
        return [
            [new Twig_Node_Text('foo', 1)],
            [new Twig_Node([new Twig_Node([new Twig_Node_Text('foo', 1)])])],
        ];
    }

    /**
     * @dataProvider getFilterBodyNodesWithBOMData
     */
    public function testFilterBodyNodesWithBOM($emptyNode)
    {
        $this->assertNull($this->getParser()->filterBodyNodes(new Twig_Node_Text(chr(0xEF).chr(0xBB).chr(0xBF).$emptyNode, 1)));
    }

    public function getFilterBodyNodesWithBOMData()
    {
        return [
            [' '],
            ["\t"],
            ["\n"],
            ["\n\t\n   "],
        ];
    }

    public function testParseIsReentrant()
    {
        $twig = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock(), [
            'autoescape' => false,
            'optimizations' => 0,
        ]);
        $twig->addTokenParser(new TestTokenParser());

        $parser = new Twig_Parser($twig);

        $parser->parse(new Twig_TokenStream([
            new Twig_Token(Twig_Token::BLOCK_START_TYPE, '', 1),
            new Twig_Token(Twig_Token::NAME_TYPE, 'test', 1),
            new Twig_Token(Twig_Token::BLOCK_END_TYPE, '', 1),
            new Twig_Token(Twig_Token::VAR_START_TYPE, '', 1),
            new Twig_Token(Twig_Token::NAME_TYPE, 'foo', 1),
            new Twig_Token(Twig_Token::VAR_END_TYPE, '', 1),
            new Twig_Token(Twig_Token::EOF_TYPE, '', 1),
        ]));

        $this->assertNull($parser->getParent());
    }

    public function testGetVarName()
    {
        $twig = new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock(), [
            'autoescape' => false,
            'optimizations' => 0,
        ]);

        $twig->parse($twig->tokenize(new Twig_Source(<<<EOF
{% from _self import foo %}

{% macro foo() %}
    {{ foo }}
{% endmacro %}
EOF
        , 'index')));

        // The getVarName() must not depend on the template loaders,
        // If this test does not throw any exception, that's good.
        // see https://github.com/symfony/symfony/issues/4218
        $this->addToAssertionCount(1);
    }

    protected function getParser()
    {
        $parser = new TestParser(new Twig_Environment($this->getMockBuilder('Twig_LoaderInterface')->getMock()));
        $parser->setParent(new Twig_Node());
        $parser->stream = new Twig_TokenStream([]);

        return $parser;
    }
}

class TestParser extends Twig_Parser
{
    public $stream;

    public function filterBodyNodes(Twig_NodeInterface $node)
    {
        return parent::filterBodyNodes($node);
    }
}

class TestTokenParser extends Twig_TokenParser
{
    public function parse(Twig_Token $token)
    {
        // simulate the parsing of another template right in the middle of the parsing of the current template
        $this->parser->parse(new Twig_TokenStream([
            new Twig_Token(Twig_Token::BLOCK_START_TYPE, '', 1),
            new Twig_Token(Twig_Token::NAME_TYPE, 'extends', 1),
            new Twig_Token(Twig_Token::STRING_TYPE, 'base', 1),
            new Twig_Token(Twig_Token::BLOCK_END_TYPE, '', 1),
            new Twig_Token(Twig_Token::EOF_TYPE, '', 1),
        ]));

        $this->parser->getStream()->expect(Twig_Token::BLOCK_END_TYPE);

        return new Twig_Node([]);
    }

    public function getTag()
    {
        return 'test';
    }
}
