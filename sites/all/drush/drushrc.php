<?php 


$options['sites'] = array (
  0 => 'devshop.local.computer',
);
$options['profiles'] = array (
  0 => 'devmaster',
  1 => 'standard',
  2 => 'minimal',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'aggregator' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'aggregator.test',
          ),
          'configure' => 'admin/config/services/aggregator/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'aggregator.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'version' => '7.65',
      ),
      'contact' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
        'info' => 
        array (
          'name' => 'Contact',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contact.test',
          ),
          'configure' => 'admin/structure/contact',
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.65',
      ),
      'block' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
        'info' => 
        array (
          'name' => 'Block',
          'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'block.test',
          ),
          'configure' => 'admin/structure/block',
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'version' => '7.65',
      ),
      'menu' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
        'info' => 
        array (
          'name' => 'Menu',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'menu.test',
          ),
          'configure' => 'admin/structure/menu',
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.65',
      ),
      'tracker' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'tracker',
        'info' => 
        array (
          'name' => 'Tracker',
          'description' => 'Enables tracking of recent content for users.',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tracker.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.65',
      ),
      'file' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/file/file.module',
        'basename' => 'file.module',
        'name' => 'file',
        'info' => 
        array (
          'name' => 'File',
          'description' => 'Defines a file field type.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'tests/file.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.65',
      ),
      'search' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
        'info' => 
        array (
          'name' => 'Search',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'search.extender.inc',
            1 => 'search.test',
          ),
          'configure' => 'admin/config/search/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'search.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.65',
      ),
      'rdf' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/rdf/rdf.module',
        'basename' => 'rdf.module',
        'name' => 'rdf',
        'info' => 
        array (
          'name' => 'RDF',
          'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rdf.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.65',
      ),
      'update' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
        'info' => 
        array (
          'name' => 'Update manager',
          'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
          'version' => '7.65',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'update.test',
          ),
          'configure' => 'admin/reports/updates/settings',
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.65',
      ),
      'shortcut' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/shortcut/shortcut.module',
        'basename' => 'shortcut.module',
        'name' => 'shortcut',
        'info' => 
        array (
          'name' => 'Shortcut',
          'description' => 'Allows users to manage customizable lists of shortcut links.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'shortcut.test',
          ),
          'configure' => 'admin/config/user-interface/shortcut',
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.65',
      ),
      'help' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
        'info' => 
        array (
          'name' => 'Help',
          'description' => 'Manages the display of online help.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'help.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.65',
      ),
      'dashboard' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/dashboard/dashboard.module',
        'basename' => 'dashboard.module',
        'name' => 'dashboard',
        'info' => 
        array (
          'name' => 'Dashboard',
          'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.65',
          'files' => 
          array (
            0 => 'dashboard.test',
          ),
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'configure' => 'admin/dashboard/customize',
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.65',
      ),
      'syslog' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'syslog.test',
          ),
          'configure' => 'admin/config/development/logging',
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.65',
      ),
      'system' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
        'info' => 
        array (
          'name' => 'System',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system.archiver.inc',
            1 => 'system.mail.inc',
            2 => 'system.queue.inc',
            3 => 'system.tar.inc',
            4 => 'system.updater.inc',
            5 => 'system.test',
          ),
          'required' => true,
          'configure' => 'admin/config/system',
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7081',
        'version' => '7.65',
      ),
      'book' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
        'info' => 
        array (
          'name' => 'Book',
          'description' => 'Allows users to create and organize related content in an outline.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'book.test',
          ),
          'configure' => 'admin/content/book/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'book.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.65',
      ),
      'color' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
        'info' => 
        array (
          'name' => 'Color',
          'description' => 'Allows administrators to change the color scheme of compatible themes.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'color.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.65',
      ),
      'options' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/field/modules/options/options.module',
        'basename' => 'options.module',
        'name' => 'options',
        'info' => 
        array (
          'name' => 'Options',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'options.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.65',
      ),
      'field_sql_storage' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/field/modules/field_sql_storage/field_sql_storage.module',
        'basename' => 'field_sql_storage.module',
        'name' => 'field_sql_storage',
        'info' => 
        array (
          'name' => 'Field SQL storage',
          'description' => 'Stores field data in an SQL database.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_sql_storage.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.65',
      ),
      'text' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/field/modules/text/text.module',
        'basename' => 'text.module',
        'name' => 'text',
        'info' => 
        array (
          'name' => 'Text',
          'description' => 'Defines simple text field types.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'text.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.65',
      ),
      'number' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/field/modules/number/number.module',
        'basename' => 'number.module',
        'name' => 'number',
        'info' => 
        array (
          'name' => 'Number',
          'description' => 'Defines numeric field types.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'number.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.65',
      ),
      'list' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/field/modules/list/list.module',
        'basename' => 'list.module',
        'name' => 'list',
        'info' => 
        array (
          'name' => 'List',
          'description' => 'Defines list field types. Use with Options to create selection lists.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'tests/list.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.65',
      ),
      'field' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/field/field.module',
        'basename' => 'field.module',
        'name' => 'field',
        'info' => 
        array (
          'name' => 'Field',
          'description' => 'Field API to add fields to entities like nodes and users.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field.module',
            1 => 'field.attach.inc',
            2 => 'field.info.class.inc',
            3 => 'tests/field.test',
          ),
          'dependencies' => 
          array (
            0 => 'field_sql_storage',
          ),
          'required' => true,
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'theme/field.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'version' => '7.65',
      ),
      'image' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/image/image.module',
        'basename' => 'image.module',
        'name' => 'image',
        'info' => 
        array (
          'name' => 'Image',
          'description' => 'Provides image manipulation tools.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'files' => 
          array (
            0 => 'image.test',
          ),
          'configure' => 'admin/config/media/image-styles',
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'version' => '7.65',
      ),
      'node' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
        'info' => 
        array (
          'name' => 'Node',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'node.module',
            1 => 'node.test',
          ),
          'required' => true,
          'configure' => 'admin/structure/types',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'node.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7016',
        'version' => '7.65',
      ),
      'statistics' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'description' => 'Logs access statistics for your site.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'statistics.test',
          ),
          'configure' => 'admin/config/system/statistics',
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.65',
      ),
      'locale' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
        'info' => 
        array (
          'name' => 'Locale',
          'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'locale.test',
          ),
          'configure' => 'admin/config/regional/language',
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'version' => '7.65',
      ),
      'path' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
        'info' => 
        array (
          'name' => 'Path',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'path.test',
          ),
          'configure' => 'admin/config/search/path',
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.65',
      ),
      'contextual' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/contextual/contextual.module',
        'basename' => 'contextual.module',
        'name' => 'contextual',
        'info' => 
        array (
          'name' => 'Contextual links',
          'description' => 'Provides contextual links to perform actions related to elements on a page.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contextual.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.65',
      ),
      'blog' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
        'info' => 
        array (
          'name' => 'Blog',
          'description' => 'Enables multi-user blogs.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'blog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.65',
      ),
      'dblog' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
        'info' => 
        array (
          'name' => 'Database logging',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'dblog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.65',
      ),
      'comment' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
        'info' => 
        array (
          'name' => 'Comment',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'text',
          ),
          'files' => 
          array (
            0 => 'comment.module',
            1 => 'comment.test',
          ),
          'configure' => 'admin/content/comment',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'comment.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'version' => '7.65',
      ),
      'taxonomy' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'options',
          ),
          'files' => 
          array (
            0 => 'taxonomy.module',
            1 => 'taxonomy.test',
          ),
          'configure' => 'admin/structure/taxonomy',
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'php' => '5.2.4',
        ),
        'schema_version' => '7011',
        'version' => '7.65',
      ),
      'field_ui' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/field_ui/field_ui.module',
        'basename' => 'field_ui.module',
        'name' => 'field_ui',
        'info' => 
        array (
          'name' => 'Field UI',
          'description' => 'User interface for the Field API.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_ui.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.65',
      ),
      'filter' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
        'info' => 
        array (
          'name' => 'Filter',
          'description' => 'Filters content in preparation for display.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'filter.test',
          ),
          'required' => true,
          'configure' => 'admin/config/content/formats',
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'version' => '7.65',
      ),
      'openid' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
        'info' => 
        array (
          'name' => 'OpenID',
          'description' => 'Allows users to log into your site using OpenID.',
          'version' => '7.65',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'openid.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.65',
      ),
      'overlay' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/overlay/overlay.module',
        'basename' => 'overlay.module',
        'name' => 'overlay',
        'info' => 
        array (
          'name' => 'Overlay',
          'description' => 'Displays the Drupal administration interface in an overlay.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.65',
      ),
      'translation' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/translation/translation.module',
        'basename' => 'translation.module',
        'name' => 'translation',
        'info' => 
        array (
          'name' => 'Content translation',
          'description' => 'Allows content to be translated into different languages.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'translation.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.65',
      ),
      'forum' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'forum',
        'info' => 
        array (
          'name' => 'Forum',
          'description' => 'Provides discussion forums.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'forum.test',
          ),
          'configure' => 'admin/structure/forum',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'forum.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'php' => '5.2.4',
        ),
        'schema_version' => '7012',
        'version' => '7.65',
      ),
      'trigger' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
        'info' => 
        array (
          'name' => 'Trigger',
          'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'trigger.test',
          ),
          'configure' => 'admin/structure/trigger',
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.65',
      ),
      'php' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/php/php.module',
        'basename' => 'php.module',
        'name' => 'php',
        'info' => 
        array (
          'name' => 'PHP filter',
          'description' => 'Allows embedded PHP code/snippets to be evaluated.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'php.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.65',
      ),
      'user' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
        'info' => 
        array (
          'name' => 'User',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'user.module',
            1 => 'user.test',
          ),
          'required' => true,
          'configure' => 'admin/config/people',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'user.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7019',
        'version' => '7.65',
      ),
      'simpletest' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/simpletest/simpletest.module',
        'basename' => 'simpletest.module',
        'name' => 'simpletest',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Provides a framework for unit and functional testing.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'simpletest.test',
            1 => 'drupal_web_test_case.php',
            2 => 'tests/actions.test',
            3 => 'tests/ajax.test',
            4 => 'tests/batch.test',
            5 => 'tests/boot.test',
            6 => 'tests/bootstrap.test',
            7 => 'tests/cache.test',
            8 => 'tests/common.test',
            9 => 'tests/database_test.test',
            10 => 'tests/entity_crud.test',
            11 => 'tests/entity_crud_hook_test.test',
            12 => 'tests/entity_query.test',
            13 => 'tests/error.test',
            14 => 'tests/file.test',
            15 => 'tests/filetransfer.test',
            16 => 'tests/form.test',
            17 => 'tests/graph.test',
            18 => 'tests/image.test',
            19 => 'tests/lock.test',
            20 => 'tests/mail.test',
            21 => 'tests/menu.test',
            22 => 'tests/module.test',
            23 => 'tests/pager.test',
            24 => 'tests/password.test',
            25 => 'tests/path.test',
            26 => 'tests/registry.test',
            27 => 'tests/schema.test',
            28 => 'tests/session.test',
            29 => 'tests/tablesort.test',
            30 => 'tests/theme.test',
            31 => 'tests/unicode.test',
            32 => 'tests/update.test',
            33 => 'tests/xmlrpc.test',
            34 => 'tests/upgrade/upgrade.test',
            35 => 'tests/upgrade/upgrade.comment.test',
            36 => 'tests/upgrade/upgrade.filter.test',
            37 => 'tests/upgrade/upgrade.forum.test',
            38 => 'tests/upgrade/upgrade.locale.test',
            39 => 'tests/upgrade/upgrade.menu.test',
            40 => 'tests/upgrade/upgrade.node.test',
            41 => 'tests/upgrade/upgrade.taxonomy.test',
            42 => 'tests/upgrade/upgrade.trigger.test',
            43 => 'tests/upgrade/upgrade.translatable.test',
            44 => 'tests/upgrade/upgrade.upload.test',
            45 => 'tests/upgrade/upgrade.user.test',
            46 => 'tests/upgrade/update.aggregator.test',
            47 => 'tests/upgrade/update.trigger.test',
            48 => 'tests/upgrade/update.field.test',
            49 => 'tests/upgrade/update.user.test',
          ),
          'configure' => 'admin/config/development/testing/settings',
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.65',
      ),
      'toolbar' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/toolbar/toolbar.module',
        'basename' => 'toolbar.module',
        'name' => 'toolbar',
        'info' => 
        array (
          'name' => 'Toolbar',
          'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.65',
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.65',
      ),
      'poll' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
        'info' => 
        array (
          'name' => 'Poll',
          'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'poll.test',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'poll.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'version' => '7.65',
      ),
      'hosting_remote_import' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_remote_import/hosting_remote_import.module',
        'basename' => 'hosting_remote_import.module',
        'name' => 'hosting_remote_import',
        'info' => 
        array (
          'name' => 'Hosting remote import',
          'description' => 'Helps to import sites from remote Hostmasters',
          'core' => '7.x',
          'package' => 'Hosting',
          'files' => 
          array (
            0 => 'hosting_remote_import.service.inc',
          ),
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => NULL,
      ),
      'aegir_digitalocean' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/aegir_cloud/providers/digitalocean/aegir_digitalocean.module',
        'basename' => 'aegir_digitalocean.module',
        'name' => 'aegir_digitalocean',
        'info' => 
        array (
          'name' => 'Aegir Cloud: DigitalOcean',
          'description' => 'Launches servers on DigitalOcean.',
          'core' => '7.x',
          'package' => 'Aegir Cloud',
          'dependencies' => 
          array (
            0 => 'aegir_cloud',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'aegir_softlayer' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/aegir_cloud/providers/softlayer/aegir_softlayer.module',
        'basename' => 'aegir_softlayer.module',
        'name' => 'aegir_softlayer',
        'info' => 
        array (
          'name' => 'Aegir Cloud: SoftLayer',
          'description' => 'Launches servers in softlayer.',
          'core' => '7.x',
          'package' => 'Aegir Cloud',
          'dependencies' => 
          array (
            0 => 'aegir_cloud',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'aegir_cloud_packet' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/aegir_cloud/providers/packet/aegir_cloud_packet.module',
        'basename' => 'aegir_cloud_packet.module',
        'name' => 'aegir_cloud_packet',
        'info' => 
        array (
          'name' => 'Aegir Cloud: Packet',
          'description' => 'Launches servers in Packet.',
          'core' => '7.x',
          'package' => 'Aegir Cloud',
          'dependencies' => 
          array (
            0 => 'aegir_cloud',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'aegir_cloud' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/aegir_cloud/aegir_cloud.module',
        'basename' => 'aegir_cloud.module',
        'name' => 'aegir_cloud',
        'info' => 
        array (
          'name' => 'Aegir Cloud',
          'description' => 'Connects to cloud hosting providers to provision servers for use with Aegir.',
          'core' => '7.x',
          'package' => 'Aegir Cloud',
          'dependencies' => 
          array (
            0 => 'hosting_server',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => NULL,
      ),
      'hosting_logs_git' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_logs/hosting_logs_git/hosting_logs_git.module',
        'basename' => 'hosting_logs_git.module',
        'name' => 'hosting_logs_git',
        'info' => 
        array (
          'name' => 'Hosting Logs Git',
          'description' => 'Provides a site or platforms Git commit log to hostmaster front end.',
          'core' => '7.x',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting_site',
            1 => 'hosting_logs',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_logs' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_logs/hosting_logs.module',
        'basename' => 'hosting_logs.module',
        'name' => 'hosting_logs',
        'info' => 
        array (
          'name' => 'Hosting Logs',
          'description' => 'Provides a site\'s error and watchdog logs to hostmaster front end.',
          'core' => '7.x',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting_site',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => NULL,
      ),
      'hosting_filemanager' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_filemanager/hosting_filemanager.module',
        'basename' => 'hosting_filemanager.module',
        'name' => 'hosting_filemanager',
        'info' => 
        array (
          'name' => 'Hosting Filemanager',
          'description' => 'File manager for aegir sites.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'hosting_site',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'aegir_ssh' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/aegir_ssh/aegir_ssh.module',
        'basename' => 'aegir_ssh.module',
        'name' => 'aegir_ssh',
        'info' => 
        array (
          'name' => 'Aegir SSH',
          'description' => 'Allows users to upload their SSH keys to Hostmaster to get access to server_master.',
          'core' => '7.x',
          'package' => 'Aegir',
          'dependencies' => 
          array (
            0 => 'sshkey',
            1 => 'hosting_server',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'ansible_services' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/aegir_ansible/ansible_services/ansible_services.module',
        'basename' => 'ansible_services.module',
        'name' => 'ansible_services',
        'info' => 
        array (
          'name' => 'Aegir Ansible Services',
          'description' => 'Provision Apache and MySQL with Ansible.',
          'package' => 'Aegir Ansible',
          'dependencies' => 
          array (
            0 => 'hosting_server',
            1 => 'hosting_https',
            2 => 'aegir_ansible_core',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'src/hostingService_db_ansible_mysql.php',
            1 => 'src/hostingService_http_ansible_apache.php',
            2 => 'src/hostingService_http_ansible_nginx.php',
            3 => 'src/hostingService_http_ansible_haproxy.php',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'ansible_variables' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/aegir_ansible/ansible_variables/ansible_variables.module',
        'basename' => 'ansible_variables.module',
        'name' => 'ansible_variables',
        'info' => 
        array (
          'name' => 'Aegir Ansible Variables',
          'description' => 'Stores extra ansible variables for servers.',
          'package' => 'Aegir Ansible',
          'dependencies' => 
          array (
            0 => 'hosting_server',
            1 => 'aegir_ansible_core',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'ansible_playbooks' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/aegir_ansible/ansible_playbooks/ansible_playbooks.module',
        'basename' => 'ansible_playbooks.module',
        'name' => 'ansible_playbooks',
        'info' => 
        array (
          'name' => 'Aegir Ansible Playbooks',
          'description' => 'Run ansible playbooks on your servers.',
          'package' => 'Aegir Ansible',
          'dependencies' => 
          array (
            0 => 'hosting_server',
            1 => 'aegir_ansible_core',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'aegir_ansible_inventory' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/aegir_ansible/aegir_ansible_inventory/aegir_ansible_inventory.module',
        'basename' => 'aegir_ansible_inventory.module',
        'name' => 'aegir_ansible_inventory',
        'info' => 
        array (
          'name' => 'Aegir Ansible Inventory',
          'package' => 'Aegir Ansible',
          'description' => 'Ansible Dynamic Inventory endpoint for aegir servers.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'hosting_server',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'ansible_roles' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/aegir_ansible/ansible_roles/ansible_roles.module',
        'basename' => 'ansible_roles.module',
        'name' => 'ansible_roles',
        'info' => 
        array (
          'name' => 'Aegir Ansible Roles',
          'description' => 'Manage your servers with Ansible Roles',
          'package' => 'Aegir Ansible',
          'dependencies' => 
          array (
            0 => 'hosting_server',
            1 => 'aegir_ansible_core',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'src/hostingService_ansible_roles_custom.php',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'aegir_ansible_core' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/aegir_ansible/aegir_ansible_core.module',
        'basename' => 'aegir_ansible_core.module',
        'name' => 'aegir_ansible_core',
        'info' => 
        array (
          'name' => 'Aegir Ansible Core',
          'package' => 'Aegir Ansible',
          'description' => 'Base module for the other Aegir Ansible modules.',
          'core' => '7.x',
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_db_server' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/db_server/hosting_db_server.module',
        'basename' => 'hosting_db_server.module',
        'name' => 'hosting_db_server',
        'info' => 
        array (
          'name' => 'Database Server',
          'description' => 'Allow Hostmaster to configure database servers.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_db_server.service.inc',
            1 => 'hosting_db_server_handler_filter_db_server_type.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '6001',
        'version' => NULL,
      ),
      'hosting_signup' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/signup/hosting_signup.module',
        'basename' => 'hosting_signup.module',
        'name' => 'hosting_signup',
        'info' => 
        array (
          'name' => 'Signup form',
          'description' => 'A simple signup form that allows users to sign up for a new site.',
          'package' => 'Hosting',
          'core' => '7.x',
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_clone' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/clone/hosting_clone.module',
        'basename' => 'hosting_clone.module',
        'name' => 'hosting_clone',
        'info' => 
        array (
          'name' => 'Site cloning',
          'description' => 'Clone sites between platforms, performing upgrades when necessary.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting',
            1 => 'hosting_migrate',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_cron' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/cron/hosting_cron.module',
        'basename' => 'hosting_cron.module',
        'name' => 'hosting_cron',
        'info' => 
        array (
          'name' => 'Hosting Cron',
          'description' => 'Allow the hosting system to cron all the installed sites on a schedule.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting_site',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_task_gc' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/task_gc/hosting_task_gc.module',
        'basename' => 'hosting_task_gc.module',
        'name' => 'hosting_task_gc',
        'info' => 
        array (
          'name' => 'Hosting task garbage collection',
          'description' => 'Removes old tasks and task logs.',
          'core' => '7.x',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting_site',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_nginx_ssl' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/web_server/nginx/ssl/hosting_nginx_ssl.module',
        'basename' => 'hosting_nginx_ssl.module',
        'name' => 'hosting_nginx_ssl',
        'info' => 
        array (
          'name' => 'Nginx +SSL servers',
          'description' => 'Allow hostmaster to configure NGINX web servers with SSL support. (LEGACY, see hosting_https)',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting_web_server',
            1 => 'hosting_ssl',
            2 => 'hosting_nginx',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_nginx_ssl.service.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_nginx' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/web_server/nginx/hosting_nginx.module',
        'basename' => 'hosting_nginx.module',
        'name' => 'hosting_nginx',
        'info' => 
        array (
          'name' => 'Nginx servers',
          'description' => 'Allow hostmaster to configure NGINX web servers.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting_web_server',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_nginx.service.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_ssl' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/web_server/ssl/hosting_ssl.module',
        'basename' => 'hosting_ssl.module',
        'name' => 'hosting_ssl',
        'info' => 
        array (
          'name' => 'SSL support',
          'description' => 'Allow hostmaster to configure web servers with SSL support. (LEGACY, see hosting_https)',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting',
            1 => 'hosting_web_server',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_ssl.service.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_web_server' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/web_server/hosting_web_server.module',
        'basename' => 'hosting_web_server.module',
        'name' => 'hosting_web_server',
        'info' => 
        array (
          'name' => 'Web Server',
          'description' => 'Allow hostmaster to configure web servers.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_web_server.service.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '6002',
        'version' => NULL,
      ),
      'hosting_queued' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/queued/hosting_queued.module',
        'basename' => 'hosting_queued.module',
        'name' => 'hosting_queued',
        'info' => 
        array (
          'name' => 'Hosting queue daemon',
          'description' => 'Allows the hosting queue to be run in a daemon.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '6201',
        'version' => NULL,
      ),
      'hosting_site' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/site/hosting_site.module',
        'basename' => 'hosting_site.module',
        'name' => 'hosting_site',
        'info' => 
        array (
          'name' => 'Sites',
          'description' => 'Allow Aegir to manage of hosted sites.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting',
            1 => 'hosting_client',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/views/handlers/hosting_site_handler_field_language.inc',
            1 => 'includes/views/handlers/hosting_site_handler_field_status.inc',
            2 => 'includes/views/plugins/hosting_site_plugin_access.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7301',
        'version' => NULL,
      ),
      'hosting_migrate' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/migrate/hosting_migrate.module',
        'basename' => 'hosting_migrate.module',
        'name' => 'hosting_migrate',
        'info' => 
        array (
          'name' => 'Site migration',
          'description' => 'Migrate sites between platforms, performing upgrades when necessary.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting',
            1 => 'hosting_site',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_migrate.batch.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_subdirs' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/subdirs/hosting_subdirs.module',
        'basename' => 'hosting_subdirs.module',
        'name' => 'hosting_subdirs',
        'info' => 
        array (
          'name' => 'Subdirectories',
          'description' => 'Allow hostmaster to install sites in subdirectories.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting',
            1 => 'hosting_alias',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting.feature.subdirs.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_alias' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/alias/hosting_alias.module',
        'basename' => 'hosting_alias.module',
        'name' => 'hosting_alias',
        'info' => 
        array (
          'name' => 'Site aliases',
          'description' => 'Maintain domain aliases for sites.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting_site',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '6204',
        'version' => NULL,
      ),
      'hosting_platform' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/platform/hosting_platform.module',
        'basename' => 'hosting_platform.module',
        'name' => 'hosting_platform',
        'info' => 
        array (
          'name' => 'Platforms',
          'description' => 'Allow Hostmaster to keep track of multiple instances of Drupal.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting',
            1 => 'hosting_package',
          ),
          'files' => 
          array (
            0 => 'includes/views/handlers/hosting_platform_handler_field_release.inc',
            1 => 'includes/views/handlers/hosting_platform_handler_field_sites.inc',
            2 => 'includes/views/handlers/hosting_platform_handler_field_status.inc',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '6208',
        'version' => NULL,
      ),
      'hosting_web_cluster' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/web_cluster/hosting_web_cluster.module',
        'basename' => 'hosting_web_cluster.module',
        'name' => 'hosting_web_cluster',
        'info' => 
        array (
          'name' => 'Web Cluster',
          'description' => 'Allow hostmaster to configure web clusters.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting_web_server',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_web_cluster.service.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_server' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/server/hosting_server.module',
        'basename' => 'hosting_server.module',
        'name' => 'hosting_server',
        'info' => 
        array (
          'name' => 'Server',
          'description' => 'Allow hostmaster to configure servers.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_server.service.inc',
            1 => 'hosting_server.test',
            2 => 'includes/views/handlers/hosting_server_handler_field_services.inc',
            3 => 'includes/views/handlers/hosting_server_handler_field_human_name.inc',
            4 => 'includes/views/handlers/hosting_server_handler_field_status.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7302',
        'version' => NULL,
      ),
      'hosting_quota' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/quota/hosting_quota.module',
        'basename' => 'hosting_quota.module',
        'name' => 'hosting_quota',
        'info' => 
        array (
          'name' => 'Client Quota',
          'description' => 'Allow Hostmaster to configure quotas.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting',
            1 => 'hosting_client',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_client' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/client/hosting_client.module',
        'basename' => 'hosting_client.module',
        'name' => 'hosting_client',
        'info' => 
        array (
          'name' => 'Client',
          'description' => 'Allow Hostmaster to configure clients.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_client.access.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => NULL,
      ),
      'hosting_task' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/task/hosting_task.module',
        'basename' => 'hosting_task.module',
        'name' => 'hosting_task',
        'info' => 
        array (
          'name' => 'Hosting tasks',
          'description' => 'Allow Hostmaster to keep track of tasks that have been processed on the servers.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/views/handlers/hosting_task_handler_field_status.inc',
            1 => 'includes/views/handlers/hosting_task_handler_filter_type.inc',
            2 => 'includes/views/handlers/hosting_task_handler_filter_status.inc',
            3 => 'includes/views/handlers/hosting_task_handler_sort_default.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7301',
        'version' => NULL,
      ),
      'hosting_server_data' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/example/server_data/hosting_server_data.module',
        'basename' => 'hosting_server_data.module',
        'name' => 'hosting_server_data',
        'info' => 
        array (
          'name' => 'server_data',
          'description' => 'Example implementation of saving data into a server context.',
          'package' => 'Hosting Examples',
          'dependencies' => 
          array (
            0 => 'hosting_server',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_site_data' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/example/site_data/hosting_site_data.module',
        'basename' => 'hosting_site_data.module',
        'name' => 'hosting_site_data',
        'info' => 
        array (
          'name' => 'site_data',
          'description' => 'Example implementation of saving data into a site context.',
          'package' => 'Hosting Examples',
          'dependencies' => 
          array (
            0 => 'hosting_site',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_example' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/example/example_service/hosting_example.module',
        'basename' => 'hosting_example.module',
        'name' => 'hosting_example',
        'info' => 
        array (
          'name' => 'Hosting example',
          'description' => 'Contains example implementations of the Hosting API.',
          'package' => 'Hosting Examples',
          'dependencies' => 
          array (
            0 => 'hosting',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_example.service.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_web_pack' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/web_pack/hosting_web_pack.module',
        'basename' => 'hosting_web_pack.module',
        'name' => 'hosting_web_pack',
        'info' => 
        array (
          'name' => 'Web Pack',
          'description' => 'Allow hostmaster to configure web "packs", which have masters and slaves.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting_web_server',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_web_pack.service.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_package' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/package/hosting_package.module',
        'basename' => 'hosting_package.module',
        'name' => 'hosting_package',
        'info' => 
        array (
          'name' => 'Package management',
          'description' => 'Allow Hostmaster to keep track which packages have been installed.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/views/handlers/hosting_package_handler_field_site_count.inc',
            1 => 'includes/views/handlers/hosting_package_handler_field_status.inc',
            2 => 'includes/views/handlers/hosting_package_handler_filter_status.inc',
            3 => 'includes/views/handlers/hosting_package_handler_filter_type.inc',
            4 => 'includes/views/handlers/hosting_package_handler_sort_site_count.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7301',
        'version' => NULL,
      ),
      'hosting' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/hosting.module',
        'basename' => 'hosting.module',
        'name' => 'hosting',
        'info' => 
        array (
          'name' => 'Hosting',
          'description' => 'Allow this Drupal site to deploy hosted sites.',
          'package' => 'Hosting',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'views_bulk_operations',
          ),
          'files' => 
          array (
            0 => 'includes/views/handlers/hosting_field_handler_interval.inc',
            1 => 'includes/views/handlers/hosting_field_handler_status.inc',
            2 => 'hosting.test',
          ),
          'configure' => 'admin/hosting',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7303',
        'version' => NULL,
      ),
      'hosting_git_commit' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_git/commit/hosting_git_commit.module',
        'basename' => 'hosting_git_commit.module',
        'name' => 'hosting_git_commit',
        'info' => 
        array (
          'name' => 'Git Commit Task',
          'description' => 'Allows Aegir users to commit code from the web front-end.',
          'package' => 'Aegir Git',
          'dependencies' => 
          array (
            0 => 'hosting_site',
            1 => 'hosting_git',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_git_tag' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_git/tag/hosting_git_tag.module',
        'basename' => 'hosting_git_tag.module',
        'name' => 'hosting_git_tag',
        'info' => 
        array (
          'name' => 'Git Tag',
          'description' => 'Create and push git tags.',
          'package' => 'Aegir Git',
          'dependencies' => 
          array (
            0 => 'hosting_site',
            1 => 'hosting_git',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_git_pull' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_git/pull/hosting_git_pull.module',
        'basename' => 'hosting_git_pull.module',
        'name' => 'hosting_git_pull',
        'info' => 
        array (
          'name' => 'Git pull tasks',
          'description' => 'Allows access to the pull task',
          'package' => 'Aegir Git',
          'dependencies' => 
          array (
            0 => 'hosting_site',
            1 => 'hosting_git',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7300',
        'version' => NULL,
      ),
      'hosting_git_checkout' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_git/checkout/hosting_git_checkout.module',
        'basename' => 'hosting_git_checkout.module',
        'name' => 'hosting_git_checkout',
        'info' => 
        array (
          'name' => 'Git checkout tasks',
          'description' => 'Allows access to the checkout task',
          'package' => 'Aegir Git',
          'dependencies' => 
          array (
            0 => 'hosting_site',
            1 => 'hosting_git',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_git' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_git/hosting_git.module',
        'basename' => 'hosting_git.module',
        'name' => 'hosting_git',
        'info' => 
        array (
          'name' => 'Git integration',
          'description' => 'Allows Hostmaster managed sites and platforms to use Git.',
          'package' => 'Aegir Git',
          'dependencies' => 
          array (
            0 => 'hosting_site',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7301',
        'version' => NULL,
      ),
      'devel_generate' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/devel/devel_generate/devel_generate.module',
        'basename' => 'devel_generate.module',
        'name' => 'devel_generate',
        'info' => 
        array (
          'name' => 'Devel generate',
          'description' => 'Generate dummy users, nodes, and taxonomy terms.',
          'package' => 'Development',
          'core' => '7.x',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'configure' => 'admin/config/development/generate',
          'files' => 
          array (
            0 => 'devel_generate.test',
          ),
          'version' => '7.x-1.7',
          'project' => 'devel',
          'datestamp' => '1550852892',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.7',
      ),
      'devel' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/devel/devel.module',
        'basename' => 'devel.module',
        'name' => 'devel',
        'info' => 
        array (
          'name' => 'Devel',
          'description' => 'Various blocks, pages, and functions for developers.',
          'package' => 'Development',
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'files' => 
          array (
            0 => 'devel.test',
            1 => 'devel.mail.inc',
          ),
          'version' => '7.x-1.7',
          'project' => 'devel',
          'datestamp' => '1550852892',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7008',
        'version' => '7.x-1.7',
      ),
      'devel_node_access' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/devel/devel_node_access.module',
        'basename' => 'devel_node_access.module',
        'name' => 'devel_node_access',
        'info' => 
        array (
          'name' => 'Devel node access',
          'description' => 'Developer blocks and page illustrating relevant node_access records.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'menu',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '7.x-1.7',
          'project' => 'devel',
          'datestamp' => '1550852892',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.7',
      ),
      'hosting_letsencrypt' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_https/submodules/letsencrypt/hosting_letsencrypt.module',
        'basename' => 'hosting_letsencrypt.module',
        'name' => 'hosting_letsencrypt',
        'info' => 
        array (
          'name' => 'Aegir Let\'s Encrypt Service',
          'description' => 'A service to generate Let\'s Encrypt certificates for Aegir-hosted sites.',
          'package' => 'Aegir HTTPS',
          'dependencies' => 
          array (
            0 => 'hosting_https',
            1 => 'hosting_certificate',
            2 => 'hosting_web_server',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_letsencrypt.service.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7300',
        'version' => NULL,
      ),
      'hosting_nginx_https' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_https/submodules/nginx_https/hosting_nginx_https.module',
        'basename' => 'hosting_nginx_https.module',
        'name' => 'hosting_nginx_https',
        'info' => 
        array (
          'name' => 'Aegir HTTPS Nginx',
          'description' => 'A service to support the NGINX web server with HTTPS functionality.',
          'package' => 'Aegir HTTPS',
          'dependencies' => 
          array (
            0 => 'hosting_https',
            1 => 'hosting_nginx',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_nginx_https.service.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_certificate' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_https/submodules/certificate/hosting_certificate.module',
        'basename' => 'hosting_certificate.module',
        'name' => 'hosting_certificate',
        'info' => 
        array (
          'name' => 'Aegir Certificate Service',
          'description' => 'A service to generate HTTPS certificates for Aegir-hosted sites.',
          'package' => 'Aegir HTTPS',
          'dependencies' => 
          array (
            0 => 'hosting',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_certificate.service.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_apache_https' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_https/submodules/apache_https/hosting_apache_https.module',
        'basename' => 'hosting_apache_https.module',
        'name' => 'hosting_apache_https',
        'info' => 
        array (
          'name' => 'Aegir HTTPS Apache',
          'description' => 'A service to support the Apache web server with HTTPS functionality.',
          'package' => 'Aegir HTTPS',
          'dependencies' => 
          array (
            0 => 'hosting_https',
            1 => 'hosting_web_server',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_apache_https.service.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_self_signed' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_https/submodules/self_signed/hosting_self_signed.module',
        'basename' => 'hosting_self_signed.module',
        'name' => 'hosting_self_signed',
        'info' => 
        array (
          'name' => 'Aegir Self-signed Service',
          'description' => 'A service to generate self-signed certificates for Aegir-hosted sites.',
          'package' => 'Aegir HTTPS',
          'dependencies' => 
          array (
            0 => 'hosting_https',
            1 => 'hosting_certificate',
            2 => 'hosting_web_server',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_self_signed.service.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_https' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_https/hosting_https.module',
        'basename' => 'hosting_https.module',
        'name' => 'hosting_https',
        'info' => 
        array (
          'name' => 'Aegir HTTPS',
          'description' => 'Adds HTTPS support to Aegir sites.',
          'package' => 'Aegir HTTPS',
          'dependencies' => 
          array (
            0 => 'hosting_web_server',
            1 => 'hosting_certificate',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_https.service.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7300',
        'version' => NULL,
      ),
      'hosting_drush_alias' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_tasks_extra/hosting_drush_alias/hosting_drush_alias.module',
        'basename' => 'hosting_drush_alias.module',
        'name' => 'hosting_drush_alias',
        'info' => 
        array (
          'name' => 'Hosting Drush Alias',
          'description' => 'Generates drush aliases for sites.',
          'package' => 'Aegir Extras',
          'dependencies' => 
          array (
            0 => 'hosting',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'fix_ownership' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_tasks_extra/fix_ownership/fix_ownership.module',
        'basename' => 'fix_ownership.module',
        'name' => 'fix_ownership',
        'info' => 
        array (
          'name' => 'Fix Ownership',
          'description' => 'Fix file ownership of Drupal platforms and sites.',
          'package' => 'Aegir Extras',
          'dependencies' => 
          array (
            0 => 'hosting_site',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'fix_permissions' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_tasks_extra/fix_permissions/fix_permissions.module',
        'basename' => 'fix_permissions.module',
        'name' => 'fix_permissions',
        'info' => 
        array (
          'name' => 'Fix Permissions',
          'description' => 'Fix file permissions of Drupal platforms and sites.',
          'package' => 'Aegir Extras',
          'dependencies' => 
          array (
            0 => 'hosting_site',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_http_basic_auth' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_tasks_extra/http_basic_auth/hosting_http_basic_auth.module',
        'basename' => 'hosting_http_basic_auth.module',
        'name' => 'hosting_http_basic_auth',
        'info' => 
        array (
          'name' => 'HTTP Basic Authentication',
          'description' => 'Allows admins to specify HTTP basic authentication for sites.',
          'package' => 'Aegir Extras',
          'dependencies' => 
          array (
            0 => 'hosting_site',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7300',
        'version' => NULL,
      ),
      'hosting_sync' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_tasks_extra/hosting_sync/hosting_sync.module',
        'basename' => 'hosting_sync.module',
        'name' => 'hosting_sync',
        'info' => 
        array (
          'name' => 'Hosting Sync',
          'description' => 'Allows database and files to be synchronized between Aegir sites (frontend).',
          'core' => '7.x',
          'package' => 'Aegir Extras',
          'dependencies' => 
          array (
            0 => 'hosting',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_tasks_extra' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_tasks_extra/hosting_tasks_extra.module',
        'basename' => 'hosting_tasks_extra.module',
        'name' => 'hosting_tasks_extra',
        'info' => 
        array (
          'name' => 'Hosting tasks extra',
          'description' => 'Adds additional tasks to Aegir.',
          'package' => 'Aegir Extras',
          'dependencies' => 
          array (
            0 => 'hosting_site',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'devshop_stats' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/devshop_stats/devshop_stats.module',
        'basename' => 'devshop_stats.module',
        'name' => 'devshop_stats',
        'info' => 
        array (
          'name' => 'DevShop Stats',
          'description' => 'Provides usage statistics for OpenDevShop on Drupal.org',
          'core' => '7.x',
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'aegir_config' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/aegir_config/aegir_config.module',
        'basename' => 'aegir_config.module',
        'name' => 'aegir_config',
        'info' => 
        array (
          'name' => 'Aegir Config Management',
          'description' => 'Tools for managing Drupal 8 config with Aegir.',
          'package' => 'Aegir',
          'dependencies' => 
          array (
            0 => 'hosting_site',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_backup_window' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_site_backup_manager/hosting_backup_window/hosting_backup_window.module',
        'basename' => 'hosting_backup_window.module',
        'name' => 'hosting_backup_window',
        'info' => 
        array (
          'name' => 'Backup window',
          'description' => 'Allows restricting the backup queue to only run at certain times',
          'core' => '7.x',
          'package' => 'Aegir Backup',
          'dependencies' => 
          array (
            0 => 'hosting_site',
            1 => 'hosting_site_backup_manager',
            2 => 'hosting_backup_queue',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_backup_queue' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_site_backup_manager/hosting_backup_queue/hosting_backup_queue.module',
        'basename' => 'hosting_backup_queue.module',
        'name' => 'hosting_backup_queue',
        'info' => 
        array (
          'name' => 'Backup queue',
          'description' => 'Allows hourly/daily/weekly scheduled backups of Aegir sites.',
          'core' => '7.x',
          'package' => 'Aegir Backup',
          'dependencies' => 
          array (
            0 => 'hosting_site',
            1 => 'hosting_site_backup_manager',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '6100',
        'version' => NULL,
      ),
      'hosting_site_backup_manager' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_site_backup_manager/hosting_site_backup_manager.module',
        'basename' => 'hosting_site_backup_manager.module',
        'name' => 'hosting_site_backup_manager',
        'info' => 
        array (
          'name' => 'Hosting Site Backup Manager',
          'description' => 'Provides a user interface to manage site backups.',
          'package' => 'Aegir Backup',
          'dependencies' => 
          array (
            0 => 'hosting_site',
            1 => 'hosting_task',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '6201',
        'version' => NULL,
      ),
    ),
    'themes' => 
    array (
      'seven' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/themes/seven/seven.info',
        'basename' => 'seven.info',
        'name' => 'Seven',
        'info' => 
        array (
          'name' => 'Seven',
          'description' => 'A simple one-column, tableless, fluid width administration theme.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'reset.css',
              1 => 'style.css',
            ),
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '1',
          ),
          'regions' => 
          array (
            'content' => 'Content',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'sidebar_first' => 'First sidebar',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
        ),
        'version' => '7.65',
      ),
      'bartik' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/themes/bartik/bartik.info',
        'basename' => 'bartik.info',
        'name' => 'Bartik',
        'info' => 
        array (
          'name' => 'Bartik',
          'description' => 'A flexible, recolorable theme with many regions.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/layout.css',
              1 => 'css/style.css',
              2 => 'css/colors.css',
            ),
            'print' => 
            array (
              0 => 'css/print.css',
            ),
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'highlighted' => 'Highlighted',
            'featured' => 'Featured',
            'content' => 'Content',
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'triptych_first' => 'Triptych first',
            'triptych_middle' => 'Triptych middle',
            'triptych_last' => 'Triptych last',
            'footer_firstcolumn' => 'Footer first column',
            'footer_secondcolumn' => 'Footer second column',
            'footer_thirdcolumn' => 'Footer third column',
            'footer_fourthcolumn' => 'Footer fourth column',
            'footer' => 'Footer',
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '0',
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
        ),
        'version' => '7.65',
      ),
      'garland' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
        'info' => 
        array (
          'name' => 'Garland',
          'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'style.css',
            ),
            'print' => 
            array (
              0 => 'print.css',
            ),
          ),
          'settings' => 
          array (
            'garland_width' => 'fluid',
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
        ),
        'version' => '7.65',
      ),
      'stark' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/themes/stark/stark.info',
        'basename' => 'stark.info',
        'name' => 'Stark',
        'info' => 
        array (
          'name' => 'Stark',
          'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
          'package' => 'Core',
          'version' => '7.65',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'layout.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
        ),
        'version' => '7.65',
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '7.65',
        'description' => 'This platform is running Drupal 7.65',
      ),
    ),
    'profiles' => 
    array (
      'devmaster' => 
      array (
        'name' => 'devmaster',
        'info' => 
        array (
          'name' => 'OpenDevShop DevMaster',
          'description' => 'Web interface for OpenDevShop.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'help',
            2 => 'menu',
            3 => 'node',
            4 => 'system',
            5 => 'user',
            6 => 'update',
            7 => 'hosting',
            8 => 'hosting_task',
            9 => 'hosting_client',
            10 => 'hosting_db_server',
            11 => 'hosting_site',
            12 => 'hosting_package',
            13 => 'hosting_platform',
            14 => 'hosting_web_server',
            15 => 'hosting_server',
            16 => 'hosting_clone',
            17 => 'hosting_cron',
            18 => 'hosting_migrate',
            19 => 'hosting_git_checkout',
            20 => 'hosting_git_tag',
            21 => 'hosting_git_commit',
            22 => 'hosting_alias',
            23 => 'hosting_queued',
            24 => 'hosting_http_basic_auth',
            25 => 'hosting_sync',
            26 => 'hosting_filemanager',
            27 => 'hosting_logs',
            28 => 'hosting_tasks_extra',
            29 => 'hosting_backup_queue',
            30 => 'hosting_site_backup_manager',
            31 => 'hosting_https',
            32 => 'hosting_apache_https',
            33 => 'navbar',
            34 => 'betterlogin',
            35 => 'chosen',
            36 => 'composer_manager',
            37 => 'views',
            38 => 'views_bulk_operations',
            39 => 'actions_permissions',
            40 => 'r4032login',
            41 => 'jquery_update',
            42 => 'module_filter',
            43 => 'hosting_letsencrypt',
            44 => 'devshop_hosting',
            45 => 'devshop_dothooks',
            46 => 'devshop_projects',
            47 => 'devshop_pull',
            48 => 'devshop_github',
            49 => 'devshop_testing',
            50 => 'aegir_ssh',
            51 => 'aegir_download',
            52 => 'aegir_update',
            53 => 'aegir_config',
            54 => 'devshop_permissions',
            55 => 'devshop_stats',
            56 => 'devshop_remotes',
            57 => 'devshop_support_network_client',
          ),
          'version' => NULL,
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'filename' => './profiles/devmaster/devmaster.info',
        'version' => '7.65',
      ),
      'standard' => 
      array (
        'name' => 'standard',
        'info' => 
        array (
          'name' => 'Standard',
          'description' => 'Install with commonly used features pre-configured.',
          'version' => '7.65',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'color',
            2 => 'comment',
            3 => 'contextual',
            4 => 'dashboard',
            5 => 'help',
            6 => 'image',
            7 => 'list',
            8 => 'menu',
            9 => 'number',
            10 => 'options',
            11 => 'path',
            12 => 'taxonomy',
            13 => 'dblog',
            14 => 'search',
            15 => 'shortcut',
            16 => 'toolbar',
            17 => 'overlay',
            18 => 'field_ui',
            19 => 'file',
            20 => 'rdf',
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
          'old_short_name' => 'default',
        ),
        'filename' => './profiles/standard/standard.info',
        'version' => '7.65',
      ),
      'minimal' => 
      array (
        'name' => 'minimal',
        'info' => 
        array (
          'name' => 'Minimal',
          'description' => 'Start with only a few modules enabled.',
          'version' => '7.65',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'dblog',
          ),
          'project' => 'drupal',
          'datestamp' => '1553100118',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'filename' => './profiles/minimal/minimal.info',
        'version' => '7.65',
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
      'hosting_remote_import' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_remote_import/hosting_remote_import.module',
        'basename' => 'hosting_remote_import.module',
        'name' => 'hosting_remote_import',
        'info' => 
        array (
          'name' => 'Hosting remote import',
          'description' => 'Helps to import sites from remote Hostmasters',
          'core' => '7.x',
          'package' => 'Hosting',
          'files' => 
          array (
            0 => 'hosting_remote_import.service.inc',
          ),
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => NULL,
      ),
      'aegir_digitalocean' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/aegir_cloud/providers/digitalocean/aegir_digitalocean.module',
        'basename' => 'aegir_digitalocean.module',
        'name' => 'aegir_digitalocean',
        'info' => 
        array (
          'name' => 'Aegir Cloud: DigitalOcean',
          'description' => 'Launches servers on DigitalOcean.',
          'core' => '7.x',
          'package' => 'Aegir Cloud',
          'dependencies' => 
          array (
            0 => 'aegir_cloud',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'aegir_softlayer' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/aegir_cloud/providers/softlayer/aegir_softlayer.module',
        'basename' => 'aegir_softlayer.module',
        'name' => 'aegir_softlayer',
        'info' => 
        array (
          'name' => 'Aegir Cloud: SoftLayer',
          'description' => 'Launches servers in softlayer.',
          'core' => '7.x',
          'package' => 'Aegir Cloud',
          'dependencies' => 
          array (
            0 => 'aegir_cloud',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'aegir_cloud_packet' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/aegir_cloud/providers/packet/aegir_cloud_packet.module',
        'basename' => 'aegir_cloud_packet.module',
        'name' => 'aegir_cloud_packet',
        'info' => 
        array (
          'name' => 'Aegir Cloud: Packet',
          'description' => 'Launches servers in Packet.',
          'core' => '7.x',
          'package' => 'Aegir Cloud',
          'dependencies' => 
          array (
            0 => 'aegir_cloud',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'aegir_cloud' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/aegir_cloud/aegir_cloud.module',
        'basename' => 'aegir_cloud.module',
        'name' => 'aegir_cloud',
        'info' => 
        array (
          'name' => 'Aegir Cloud',
          'description' => 'Connects to cloud hosting providers to provision servers for use with Aegir.',
          'core' => '7.x',
          'package' => 'Aegir Cloud',
          'dependencies' => 
          array (
            0 => 'hosting_server',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => NULL,
      ),
      'hosting_logs_git' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_logs/hosting_logs_git/hosting_logs_git.module',
        'basename' => 'hosting_logs_git.module',
        'name' => 'hosting_logs_git',
        'info' => 
        array (
          'name' => 'Hosting Logs Git',
          'description' => 'Provides a site or platforms Git commit log to hostmaster front end.',
          'core' => '7.x',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting_site',
            1 => 'hosting_logs',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_logs' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_logs/hosting_logs.module',
        'basename' => 'hosting_logs.module',
        'name' => 'hosting_logs',
        'info' => 
        array (
          'name' => 'Hosting Logs',
          'description' => 'Provides a site\'s error and watchdog logs to hostmaster front end.',
          'core' => '7.x',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting_site',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => NULL,
      ),
      'hosting_filemanager' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_filemanager/hosting_filemanager.module',
        'basename' => 'hosting_filemanager.module',
        'name' => 'hosting_filemanager',
        'info' => 
        array (
          'name' => 'Hosting Filemanager',
          'description' => 'File manager for aegir sites.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'hosting_site',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'aegir_ssh' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/aegir_ssh/aegir_ssh.module',
        'basename' => 'aegir_ssh.module',
        'name' => 'aegir_ssh',
        'info' => 
        array (
          'name' => 'Aegir SSH',
          'description' => 'Allows users to upload their SSH keys to Hostmaster to get access to server_master.',
          'core' => '7.x',
          'package' => 'Aegir',
          'dependencies' => 
          array (
            0 => 'sshkey',
            1 => 'hosting_server',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'ansible_services' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/aegir_ansible/ansible_services/ansible_services.module',
        'basename' => 'ansible_services.module',
        'name' => 'ansible_services',
        'info' => 
        array (
          'name' => 'Aegir Ansible Services',
          'description' => 'Provision Apache and MySQL with Ansible.',
          'package' => 'Aegir Ansible',
          'dependencies' => 
          array (
            0 => 'hosting_server',
            1 => 'hosting_https',
            2 => 'aegir_ansible_core',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'src/hostingService_db_ansible_mysql.php',
            1 => 'src/hostingService_http_ansible_apache.php',
            2 => 'src/hostingService_http_ansible_nginx.php',
            3 => 'src/hostingService_http_ansible_haproxy.php',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'ansible_variables' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/aegir_ansible/ansible_variables/ansible_variables.module',
        'basename' => 'ansible_variables.module',
        'name' => 'ansible_variables',
        'info' => 
        array (
          'name' => 'Aegir Ansible Variables',
          'description' => 'Stores extra ansible variables for servers.',
          'package' => 'Aegir Ansible',
          'dependencies' => 
          array (
            0 => 'hosting_server',
            1 => 'aegir_ansible_core',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'ansible_playbooks' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/aegir_ansible/ansible_playbooks/ansible_playbooks.module',
        'basename' => 'ansible_playbooks.module',
        'name' => 'ansible_playbooks',
        'info' => 
        array (
          'name' => 'Aegir Ansible Playbooks',
          'description' => 'Run ansible playbooks on your servers.',
          'package' => 'Aegir Ansible',
          'dependencies' => 
          array (
            0 => 'hosting_server',
            1 => 'aegir_ansible_core',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'aegir_ansible_inventory' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/aegir_ansible/aegir_ansible_inventory/aegir_ansible_inventory.module',
        'basename' => 'aegir_ansible_inventory.module',
        'name' => 'aegir_ansible_inventory',
        'info' => 
        array (
          'name' => 'Aegir Ansible Inventory',
          'package' => 'Aegir Ansible',
          'description' => 'Ansible Dynamic Inventory endpoint for aegir servers.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'hosting_server',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'ansible_roles' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/aegir_ansible/ansible_roles/ansible_roles.module',
        'basename' => 'ansible_roles.module',
        'name' => 'ansible_roles',
        'info' => 
        array (
          'name' => 'Aegir Ansible Roles',
          'description' => 'Manage your servers with Ansible Roles',
          'package' => 'Aegir Ansible',
          'dependencies' => 
          array (
            0 => 'hosting_server',
            1 => 'aegir_ansible_core',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'src/hostingService_ansible_roles_custom.php',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'aegir_ansible_core' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/aegir_ansible/aegir_ansible_core.module',
        'basename' => 'aegir_ansible_core.module',
        'name' => 'aegir_ansible_core',
        'info' => 
        array (
          'name' => 'Aegir Ansible Core',
          'package' => 'Aegir Ansible',
          'description' => 'Base module for the other Aegir Ansible modules.',
          'core' => '7.x',
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_db_server' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/db_server/hosting_db_server.module',
        'basename' => 'hosting_db_server.module',
        'name' => 'hosting_db_server',
        'info' => 
        array (
          'name' => 'Database Server',
          'description' => 'Allow Hostmaster to configure database servers.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_db_server.service.inc',
            1 => 'hosting_db_server_handler_filter_db_server_type.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '6001',
        'version' => NULL,
      ),
      'hosting_signup' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/signup/hosting_signup.module',
        'basename' => 'hosting_signup.module',
        'name' => 'hosting_signup',
        'info' => 
        array (
          'name' => 'Signup form',
          'description' => 'A simple signup form that allows users to sign up for a new site.',
          'package' => 'Hosting',
          'core' => '7.x',
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_clone' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/clone/hosting_clone.module',
        'basename' => 'hosting_clone.module',
        'name' => 'hosting_clone',
        'info' => 
        array (
          'name' => 'Site cloning',
          'description' => 'Clone sites between platforms, performing upgrades when necessary.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting',
            1 => 'hosting_migrate',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_cron' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/cron/hosting_cron.module',
        'basename' => 'hosting_cron.module',
        'name' => 'hosting_cron',
        'info' => 
        array (
          'name' => 'Hosting Cron',
          'description' => 'Allow the hosting system to cron all the installed sites on a schedule.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting_site',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_task_gc' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/task_gc/hosting_task_gc.module',
        'basename' => 'hosting_task_gc.module',
        'name' => 'hosting_task_gc',
        'info' => 
        array (
          'name' => 'Hosting task garbage collection',
          'description' => 'Removes old tasks and task logs.',
          'core' => '7.x',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting_site',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_nginx_ssl' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/web_server/nginx/ssl/hosting_nginx_ssl.module',
        'basename' => 'hosting_nginx_ssl.module',
        'name' => 'hosting_nginx_ssl',
        'info' => 
        array (
          'name' => 'Nginx +SSL servers',
          'description' => 'Allow hostmaster to configure NGINX web servers with SSL support. (LEGACY, see hosting_https)',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting_web_server',
            1 => 'hosting_ssl',
            2 => 'hosting_nginx',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_nginx_ssl.service.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_nginx' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/web_server/nginx/hosting_nginx.module',
        'basename' => 'hosting_nginx.module',
        'name' => 'hosting_nginx',
        'info' => 
        array (
          'name' => 'Nginx servers',
          'description' => 'Allow hostmaster to configure NGINX web servers.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting_web_server',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_nginx.service.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_ssl' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/web_server/ssl/hosting_ssl.module',
        'basename' => 'hosting_ssl.module',
        'name' => 'hosting_ssl',
        'info' => 
        array (
          'name' => 'SSL support',
          'description' => 'Allow hostmaster to configure web servers with SSL support. (LEGACY, see hosting_https)',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting',
            1 => 'hosting_web_server',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_ssl.service.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_web_server' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/web_server/hosting_web_server.module',
        'basename' => 'hosting_web_server.module',
        'name' => 'hosting_web_server',
        'info' => 
        array (
          'name' => 'Web Server',
          'description' => 'Allow hostmaster to configure web servers.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_web_server.service.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '6002',
        'version' => NULL,
      ),
      'hosting_queued' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/queued/hosting_queued.module',
        'basename' => 'hosting_queued.module',
        'name' => 'hosting_queued',
        'info' => 
        array (
          'name' => 'Hosting queue daemon',
          'description' => 'Allows the hosting queue to be run in a daemon.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '6201',
        'version' => NULL,
      ),
      'hosting_site' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/site/hosting_site.module',
        'basename' => 'hosting_site.module',
        'name' => 'hosting_site',
        'info' => 
        array (
          'name' => 'Sites',
          'description' => 'Allow Aegir to manage of hosted sites.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting',
            1 => 'hosting_client',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/views/handlers/hosting_site_handler_field_language.inc',
            1 => 'includes/views/handlers/hosting_site_handler_field_status.inc',
            2 => 'includes/views/plugins/hosting_site_plugin_access.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7301',
        'version' => NULL,
      ),
      'hosting_migrate' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/migrate/hosting_migrate.module',
        'basename' => 'hosting_migrate.module',
        'name' => 'hosting_migrate',
        'info' => 
        array (
          'name' => 'Site migration',
          'description' => 'Migrate sites between platforms, performing upgrades when necessary.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting',
            1 => 'hosting_site',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_migrate.batch.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_subdirs' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/subdirs/hosting_subdirs.module',
        'basename' => 'hosting_subdirs.module',
        'name' => 'hosting_subdirs',
        'info' => 
        array (
          'name' => 'Subdirectories',
          'description' => 'Allow hostmaster to install sites in subdirectories.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting',
            1 => 'hosting_alias',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting.feature.subdirs.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_alias' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/alias/hosting_alias.module',
        'basename' => 'hosting_alias.module',
        'name' => 'hosting_alias',
        'info' => 
        array (
          'name' => 'Site aliases',
          'description' => 'Maintain domain aliases for sites.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting_site',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '6204',
        'version' => NULL,
      ),
      'hosting_platform' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/platform/hosting_platform.module',
        'basename' => 'hosting_platform.module',
        'name' => 'hosting_platform',
        'info' => 
        array (
          'name' => 'Platforms',
          'description' => 'Allow Hostmaster to keep track of multiple instances of Drupal.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting',
            1 => 'hosting_package',
          ),
          'files' => 
          array (
            0 => 'includes/views/handlers/hosting_platform_handler_field_release.inc',
            1 => 'includes/views/handlers/hosting_platform_handler_field_sites.inc',
            2 => 'includes/views/handlers/hosting_platform_handler_field_status.inc',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '6208',
        'version' => NULL,
      ),
      'hosting_web_cluster' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/web_cluster/hosting_web_cluster.module',
        'basename' => 'hosting_web_cluster.module',
        'name' => 'hosting_web_cluster',
        'info' => 
        array (
          'name' => 'Web Cluster',
          'description' => 'Allow hostmaster to configure web clusters.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting_web_server',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_web_cluster.service.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_server' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/server/hosting_server.module',
        'basename' => 'hosting_server.module',
        'name' => 'hosting_server',
        'info' => 
        array (
          'name' => 'Server',
          'description' => 'Allow hostmaster to configure servers.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_server.service.inc',
            1 => 'hosting_server.test',
            2 => 'includes/views/handlers/hosting_server_handler_field_services.inc',
            3 => 'includes/views/handlers/hosting_server_handler_field_human_name.inc',
            4 => 'includes/views/handlers/hosting_server_handler_field_status.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7302',
        'version' => NULL,
      ),
      'hosting_quota' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/quota/hosting_quota.module',
        'basename' => 'hosting_quota.module',
        'name' => 'hosting_quota',
        'info' => 
        array (
          'name' => 'Client Quota',
          'description' => 'Allow Hostmaster to configure quotas.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting',
            1 => 'hosting_client',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_client' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/client/hosting_client.module',
        'basename' => 'hosting_client.module',
        'name' => 'hosting_client',
        'info' => 
        array (
          'name' => 'Client',
          'description' => 'Allow Hostmaster to configure clients.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_client.access.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => NULL,
      ),
      'hosting_task' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/task/hosting_task.module',
        'basename' => 'hosting_task.module',
        'name' => 'hosting_task',
        'info' => 
        array (
          'name' => 'Hosting tasks',
          'description' => 'Allow Hostmaster to keep track of tasks that have been processed on the servers.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/views/handlers/hosting_task_handler_field_status.inc',
            1 => 'includes/views/handlers/hosting_task_handler_filter_type.inc',
            2 => 'includes/views/handlers/hosting_task_handler_filter_status.inc',
            3 => 'includes/views/handlers/hosting_task_handler_sort_default.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7301',
        'version' => NULL,
      ),
      'hosting_server_data' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/example/server_data/hosting_server_data.module',
        'basename' => 'hosting_server_data.module',
        'name' => 'hosting_server_data',
        'info' => 
        array (
          'name' => 'server_data',
          'description' => 'Example implementation of saving data into a server context.',
          'package' => 'Hosting Examples',
          'dependencies' => 
          array (
            0 => 'hosting_server',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_site_data' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/example/site_data/hosting_site_data.module',
        'basename' => 'hosting_site_data.module',
        'name' => 'hosting_site_data',
        'info' => 
        array (
          'name' => 'site_data',
          'description' => 'Example implementation of saving data into a site context.',
          'package' => 'Hosting Examples',
          'dependencies' => 
          array (
            0 => 'hosting_site',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_example' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/example/example_service/hosting_example.module',
        'basename' => 'hosting_example.module',
        'name' => 'hosting_example',
        'info' => 
        array (
          'name' => 'Hosting example',
          'description' => 'Contains example implementations of the Hosting API.',
          'package' => 'Hosting Examples',
          'dependencies' => 
          array (
            0 => 'hosting',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_example.service.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_web_pack' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/web_pack/hosting_web_pack.module',
        'basename' => 'hosting_web_pack.module',
        'name' => 'hosting_web_pack',
        'info' => 
        array (
          'name' => 'Web Pack',
          'description' => 'Allow hostmaster to configure web "packs", which have masters and slaves.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting_web_server',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_web_pack.service.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_package' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/package/hosting_package.module',
        'basename' => 'hosting_package.module',
        'name' => 'hosting_package',
        'info' => 
        array (
          'name' => 'Package management',
          'description' => 'Allow Hostmaster to keep track which packages have been installed.',
          'package' => 'Hosting',
          'dependencies' => 
          array (
            0 => 'hosting',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/views/handlers/hosting_package_handler_field_site_count.inc',
            1 => 'includes/views/handlers/hosting_package_handler_field_status.inc',
            2 => 'includes/views/handlers/hosting_package_handler_filter_status.inc',
            3 => 'includes/views/handlers/hosting_package_handler_filter_type.inc',
            4 => 'includes/views/handlers/hosting_package_handler_sort_site_count.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7301',
        'version' => NULL,
      ),
      'hosting' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting/hosting.module',
        'basename' => 'hosting.module',
        'name' => 'hosting',
        'info' => 
        array (
          'name' => 'Hosting',
          'description' => 'Allow this Drupal site to deploy hosted sites.',
          'package' => 'Hosting',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'views_bulk_operations',
          ),
          'files' => 
          array (
            0 => 'includes/views/handlers/hosting_field_handler_interval.inc',
            1 => 'includes/views/handlers/hosting_field_handler_status.inc',
            2 => 'hosting.test',
          ),
          'configure' => 'admin/hosting',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7303',
        'version' => NULL,
      ),
      'hosting_git_commit' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_git/commit/hosting_git_commit.module',
        'basename' => 'hosting_git_commit.module',
        'name' => 'hosting_git_commit',
        'info' => 
        array (
          'name' => 'Git Commit Task',
          'description' => 'Allows Aegir users to commit code from the web front-end.',
          'package' => 'Aegir Git',
          'dependencies' => 
          array (
            0 => 'hosting_site',
            1 => 'hosting_git',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_git_tag' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_git/tag/hosting_git_tag.module',
        'basename' => 'hosting_git_tag.module',
        'name' => 'hosting_git_tag',
        'info' => 
        array (
          'name' => 'Git Tag',
          'description' => 'Create and push git tags.',
          'package' => 'Aegir Git',
          'dependencies' => 
          array (
            0 => 'hosting_site',
            1 => 'hosting_git',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_git_pull' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_git/pull/hosting_git_pull.module',
        'basename' => 'hosting_git_pull.module',
        'name' => 'hosting_git_pull',
        'info' => 
        array (
          'name' => 'Git pull tasks',
          'description' => 'Allows access to the pull task',
          'package' => 'Aegir Git',
          'dependencies' => 
          array (
            0 => 'hosting_site',
            1 => 'hosting_git',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7300',
        'version' => NULL,
      ),
      'hosting_git_checkout' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_git/checkout/hosting_git_checkout.module',
        'basename' => 'hosting_git_checkout.module',
        'name' => 'hosting_git_checkout',
        'info' => 
        array (
          'name' => 'Git checkout tasks',
          'description' => 'Allows access to the checkout task',
          'package' => 'Aegir Git',
          'dependencies' => 
          array (
            0 => 'hosting_site',
            1 => 'hosting_git',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_git' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_git/hosting_git.module',
        'basename' => 'hosting_git.module',
        'name' => 'hosting_git',
        'info' => 
        array (
          'name' => 'Git integration',
          'description' => 'Allows Hostmaster managed sites and platforms to use Git.',
          'package' => 'Aegir Git',
          'dependencies' => 
          array (
            0 => 'hosting_site',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7301',
        'version' => NULL,
      ),
      'devel_generate' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/devel/devel_generate/devel_generate.module',
        'basename' => 'devel_generate.module',
        'name' => 'devel_generate',
        'info' => 
        array (
          'name' => 'Devel generate',
          'description' => 'Generate dummy users, nodes, and taxonomy terms.',
          'package' => 'Development',
          'core' => '7.x',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'configure' => 'admin/config/development/generate',
          'files' => 
          array (
            0 => 'devel_generate.test',
          ),
          'version' => '7.x-1.7',
          'project' => 'devel',
          'datestamp' => '1550852892',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.7',
      ),
      'devel' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/devel/devel.module',
        'basename' => 'devel.module',
        'name' => 'devel',
        'info' => 
        array (
          'name' => 'Devel',
          'description' => 'Various blocks, pages, and functions for developers.',
          'package' => 'Development',
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'files' => 
          array (
            0 => 'devel.test',
            1 => 'devel.mail.inc',
          ),
          'version' => '7.x-1.7',
          'project' => 'devel',
          'datestamp' => '1550852892',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7008',
        'version' => '7.x-1.7',
      ),
      'devel_node_access' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/devel/devel_node_access.module',
        'basename' => 'devel_node_access.module',
        'name' => 'devel_node_access',
        'info' => 
        array (
          'name' => 'Devel node access',
          'description' => 'Developer blocks and page illustrating relevant node_access records.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'menu',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '7.x-1.7',
          'project' => 'devel',
          'datestamp' => '1550852892',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.7',
      ),
      'hosting_letsencrypt' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_https/submodules/letsencrypt/hosting_letsencrypt.module',
        'basename' => 'hosting_letsencrypt.module',
        'name' => 'hosting_letsencrypt',
        'info' => 
        array (
          'name' => 'Aegir Let\'s Encrypt Service',
          'description' => 'A service to generate Let\'s Encrypt certificates for Aegir-hosted sites.',
          'package' => 'Aegir HTTPS',
          'dependencies' => 
          array (
            0 => 'hosting_https',
            1 => 'hosting_certificate',
            2 => 'hosting_web_server',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_letsencrypt.service.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7300',
        'version' => NULL,
      ),
      'hosting_nginx_https' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_https/submodules/nginx_https/hosting_nginx_https.module',
        'basename' => 'hosting_nginx_https.module',
        'name' => 'hosting_nginx_https',
        'info' => 
        array (
          'name' => 'Aegir HTTPS Nginx',
          'description' => 'A service to support the NGINX web server with HTTPS functionality.',
          'package' => 'Aegir HTTPS',
          'dependencies' => 
          array (
            0 => 'hosting_https',
            1 => 'hosting_nginx',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_nginx_https.service.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_certificate' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_https/submodules/certificate/hosting_certificate.module',
        'basename' => 'hosting_certificate.module',
        'name' => 'hosting_certificate',
        'info' => 
        array (
          'name' => 'Aegir Certificate Service',
          'description' => 'A service to generate HTTPS certificates for Aegir-hosted sites.',
          'package' => 'Aegir HTTPS',
          'dependencies' => 
          array (
            0 => 'hosting',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_certificate.service.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_apache_https' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_https/submodules/apache_https/hosting_apache_https.module',
        'basename' => 'hosting_apache_https.module',
        'name' => 'hosting_apache_https',
        'info' => 
        array (
          'name' => 'Aegir HTTPS Apache',
          'description' => 'A service to support the Apache web server with HTTPS functionality.',
          'package' => 'Aegir HTTPS',
          'dependencies' => 
          array (
            0 => 'hosting_https',
            1 => 'hosting_web_server',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_apache_https.service.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_self_signed' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_https/submodules/self_signed/hosting_self_signed.module',
        'basename' => 'hosting_self_signed.module',
        'name' => 'hosting_self_signed',
        'info' => 
        array (
          'name' => 'Aegir Self-signed Service',
          'description' => 'A service to generate self-signed certificates for Aegir-hosted sites.',
          'package' => 'Aegir HTTPS',
          'dependencies' => 
          array (
            0 => 'hosting_https',
            1 => 'hosting_certificate',
            2 => 'hosting_web_server',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_self_signed.service.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_https' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_https/hosting_https.module',
        'basename' => 'hosting_https.module',
        'name' => 'hosting_https',
        'info' => 
        array (
          'name' => 'Aegir HTTPS',
          'description' => 'Adds HTTPS support to Aegir sites.',
          'package' => 'Aegir HTTPS',
          'dependencies' => 
          array (
            0 => 'hosting_web_server',
            1 => 'hosting_certificate',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hosting_https.service.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7300',
        'version' => NULL,
      ),
      'hosting_drush_alias' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_tasks_extra/hosting_drush_alias/hosting_drush_alias.module',
        'basename' => 'hosting_drush_alias.module',
        'name' => 'hosting_drush_alias',
        'info' => 
        array (
          'name' => 'Hosting Drush Alias',
          'description' => 'Generates drush aliases for sites.',
          'package' => 'Aegir Extras',
          'dependencies' => 
          array (
            0 => 'hosting',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'fix_ownership' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_tasks_extra/fix_ownership/fix_ownership.module',
        'basename' => 'fix_ownership.module',
        'name' => 'fix_ownership',
        'info' => 
        array (
          'name' => 'Fix Ownership',
          'description' => 'Fix file ownership of Drupal platforms and sites.',
          'package' => 'Aegir Extras',
          'dependencies' => 
          array (
            0 => 'hosting_site',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'fix_permissions' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_tasks_extra/fix_permissions/fix_permissions.module',
        'basename' => 'fix_permissions.module',
        'name' => 'fix_permissions',
        'info' => 
        array (
          'name' => 'Fix Permissions',
          'description' => 'Fix file permissions of Drupal platforms and sites.',
          'package' => 'Aegir Extras',
          'dependencies' => 
          array (
            0 => 'hosting_site',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_http_basic_auth' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_tasks_extra/http_basic_auth/hosting_http_basic_auth.module',
        'basename' => 'hosting_http_basic_auth.module',
        'name' => 'hosting_http_basic_auth',
        'info' => 
        array (
          'name' => 'HTTP Basic Authentication',
          'description' => 'Allows admins to specify HTTP basic authentication for sites.',
          'package' => 'Aegir Extras',
          'dependencies' => 
          array (
            0 => 'hosting_site',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '7300',
        'version' => NULL,
      ),
      'hosting_sync' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_tasks_extra/hosting_sync/hosting_sync.module',
        'basename' => 'hosting_sync.module',
        'name' => 'hosting_sync',
        'info' => 
        array (
          'name' => 'Hosting Sync',
          'description' => 'Allows database and files to be synchronized between Aegir sites (frontend).',
          'core' => '7.x',
          'package' => 'Aegir Extras',
          'dependencies' => 
          array (
            0 => 'hosting',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_tasks_extra' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_tasks_extra/hosting_tasks_extra.module',
        'basename' => 'hosting_tasks_extra.module',
        'name' => 'hosting_tasks_extra',
        'info' => 
        array (
          'name' => 'Hosting tasks extra',
          'description' => 'Adds additional tasks to Aegir.',
          'package' => 'Aegir Extras',
          'dependencies' => 
          array (
            0 => 'hosting_site',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'devshop_stats' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/devshop_stats/devshop_stats.module',
        'basename' => 'devshop_stats.module',
        'name' => 'devshop_stats',
        'info' => 
        array (
          'name' => 'DevShop Stats',
          'description' => 'Provides usage statistics for OpenDevShop on Drupal.org',
          'core' => '7.x',
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'aegir_config' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/aegir_config/aegir_config.module',
        'basename' => 'aegir_config.module',
        'name' => 'aegir_config',
        'info' => 
        array (
          'name' => 'Aegir Config Management',
          'description' => 'Tools for managing Drupal 8 config with Aegir.',
          'package' => 'Aegir',
          'dependencies' => 
          array (
            0 => 'hosting_site',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_backup_window' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_site_backup_manager/hosting_backup_window/hosting_backup_window.module',
        'basename' => 'hosting_backup_window.module',
        'name' => 'hosting_backup_window',
        'info' => 
        array (
          'name' => 'Backup window',
          'description' => 'Allows restricting the backup queue to only run at certain times',
          'core' => '7.x',
          'package' => 'Aegir Backup',
          'dependencies' => 
          array (
            0 => 'hosting_site',
            1 => 'hosting_site_backup_manager',
            2 => 'hosting_backup_queue',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'hosting_backup_queue' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_site_backup_manager/hosting_backup_queue/hosting_backup_queue.module',
        'basename' => 'hosting_backup_queue.module',
        'name' => 'hosting_backup_queue',
        'info' => 
        array (
          'name' => 'Backup queue',
          'description' => 'Allows hourly/daily/weekly scheduled backups of Aegir sites.',
          'core' => '7.x',
          'package' => 'Aegir Backup',
          'dependencies' => 
          array (
            0 => 'hosting_site',
            1 => 'hosting_site_backup_manager',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '6100',
        'version' => NULL,
      ),
      'hosting_site_backup_manager' => 
      array (
        'filename' => '/var/aegir/devmaster-1.x/sites/all/modules/aegir/hosting_site_backup_manager/hosting_site_backup_manager.module',
        'basename' => 'hosting_site_backup_manager.module',
        'name' => 'hosting_site_backup_manager',
        'info' => 
        array (
          'name' => 'Hosting Site Backup Manager',
          'description' => 'Provides a user interface to manage site backups.',
          'package' => 'Aegir Backup',
          'dependencies' => 
          array (
            0 => 'hosting_site',
            1 => 'hosting_task',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => '6201',
        'version' => NULL,
      ),
    ),
    'themes' => 
    array (
    ),
  ),
  'profiles' => 
  array (
    'devmaster' => 
    array (
      'modules' => 
      array (
        'devshop_extra_users' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/devshop/devshop_extra_users/devshop_extra_users.module',
          'basename' => 'devshop_extra_users.module',
          'name' => 'devshop_extra_users',
          'info' => 
          array (
            'name' => 'DevShop Extra Install',
            'description' => 'Example module for loading extra info for an install profile.',
            'core' => '7.x',
            'package' => 'DevShop',
            'dependencies' => 
            array (
            ),
            'version' => NULL,
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => NULL,
        ),
        'devshop_acquia' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/devshop/devshop_acquia/devshop_acquia.module',
          'basename' => 'devshop_acquia.module',
          'name' => 'devshop_acquia',
          'info' => 
          array (
            'name' => 'DevShop Acquia Integration',
            'description' => 'Allows for Acquia Cloud Hooks to be used as deploy hooks in DevShop.',
            'core' => '7.x',
            'package' => 'DevShop',
            'dependencies' => 
            array (
              0 => 'devshop_hosting',
            ),
            'version' => NULL,
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => NULL,
        ),
        'aegir_download' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/devshop/aegir_download/aegir_download.module',
          'basename' => 'aegir_download.module',
          'name' => 'aegir_download',
          'info' => 
          array (
            'name' => 'Aegir Download',
            'description' => 'Adds the ability to download packages to aegir hosted sites.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'hosting_site',
            ),
            'version' => NULL,
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => NULL,
        ),
        'aegir_update' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/devshop/aegir_update/aegir_update.module',
          'basename' => 'aegir_update.module',
          'name' => 'aegir_update',
          'info' => 
          array (
            'name' => 'Aegir Update',
            'description' => 'Adds the ability to update your Drupal site using Aegir.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'hosting_site',
            ),
            'version' => NULL,
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => NULL,
        ),
        'devshop_dothooks' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/devshop/devshop_dothooks/devshop_dothooks.module',
          'basename' => 'devshop_dothooks.module',
          'name' => 'devshop_dothooks',
          'info' => 
          array (
            'name' => 'DevShop .hooks integration',
            'description' => 'Allows the usage of a .hooks file when running tasks on environments.',
            'core' => '7.x',
            'package' => 'DevShop',
            'dependencies' => 
            array (
              0 => 'devshop_projects',
            ),
            'version' => NULL,
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => NULL,
        ),
        'devshop_pull' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/devshop/devshop_pull/devshop_pull.module',
          'basename' => 'devshop_pull.module',
          'name' => 'devshop_pull',
          'info' => 
          array (
            'name' => 'DevShop Pull',
            'description' => 'Provides a variety of methods to trigger a Pull Code task on DevShop projects.',
            'core' => '7.x',
            'package' => 'DevShop',
            'dependencies' => 
            array (
              0 => 'devshop_projects',
            ),
            'version' => NULL,
            'php' => '5.2.4',
          ),
          'schema_version' => '6002',
          'version' => NULL,
        ),
        'devshop_remotes' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/devshop/devshop_remotes/devshop_remotes.module',
          'basename' => 'devshop_remotes.module',
          'name' => 'devshop_remotes',
          'info' => 
          array (
            'name' => 'DevShop Remotes',
            'description' => 'Manage remote environments with devshop.',
            'core' => '7.x',
            'package' => 'DevShop',
            'dependencies' => 
            array (
              0 => 'devshop_projects',
            ),
            'version' => NULL,
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'version' => NULL,
        ),
        'devshop_permissions' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/devshop/devshop_permissions/devshop_permissions.module',
          'basename' => 'devshop_permissions.module',
          'name' => 'devshop_permissions',
          'info' => 
          array (
            'name' => 'DevShop Permissions',
            'description' => 'Default user permissions for devshop.',
            'core' => '7.x',
            'package' => 'Features',
            'dependencies' => 
            array (
              0 => 'aegir_config',
              1 => 'aegir_download',
              2 => 'aegir_update',
              3 => 'devshop_projects',
              4 => 'devshop_pull',
              5 => 'devshop_remotes',
              6 => 'devshop_testing',
              7 => 'features',
              8 => 'hosting',
              9 => 'hosting_alias',
              10 => 'hosting_backup_queue',
              11 => 'hosting_client',
              12 => 'hosting_clone',
              13 => 'hosting_filemanager',
              14 => 'hosting_git_checkout',
              15 => 'hosting_git_commit',
              16 => 'hosting_git_pull',
              17 => 'hosting_git_tag',
              18 => 'hosting_https',
              19 => 'hosting_logs',
              20 => 'hosting_migrate',
              21 => 'hosting_package',
              22 => 'hosting_platform',
              23 => 'hosting_server',
              24 => 'hosting_site',
              25 => 'hosting_site_backup_manager',
              26 => 'hosting_sync',
              27 => 'hosting_task',
              28 => 'hosting_tasks_extra',
              29 => 'node',
              30 => 'sshkey',
            ),
            'features' => 
            array (
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'user_permission' => 
              array (
                0 => 'access content',
                1 => 'access content overview',
                2 => 'access disabled sites',
                3 => 'access filemanager',
                4 => 'access hosting logs',
                5 => 'access hosting wizard',
                6 => 'access task logs',
                7 => 'access test results',
                8 => 'add remote aliases to projects',
                9 => 'administer SSH public keys',
                10 => 'administer clients',
                11 => 'administer content types',
                12 => 'administer hosting',
                13 => 'administer hosting aliases',
                14 => 'administer hosting backup queue',
                15 => 'administer hosting features',
                16 => 'administer hosting queues',
                17 => 'administer hosting settings',
                18 => 'administer hosting site backup manager',
                19 => 'administer nodes',
                20 => 'administer platforms',
                21 => 'administer projects',
                22 => 'administer sites',
                23 => 'administer tasks',
                24 => 'bypass node access',
                25 => 'cancel own tasks',
                26 => 'change site domain name',
                27 => 'configure devshop pull',
                28 => 'create backup schedules',
                29 => 'create backup task',
                30 => 'create backup-delete task',
                31 => 'create client',
                32 => 'create clone task',
                33 => 'create config_export task',
                34 => 'create config_import task',
                35 => 'create delete task',
                36 => 'create devshop-delete task',
                37 => 'create devshop-deploy task',
                38 => 'create disable task',
                39 => 'create download task',
                40 => 'create enable task',
                41 => 'create features_revert_all task',
                42 => 'create features_update_all task',
                43 => 'create flush_cache task',
                44 => 'create flush_drush_cache task',
                45 => 'create git-pull task',
                46 => 'create lock task',
                47 => 'create login-reset task',
                48 => 'create migrate task',
                49 => 'create package',
                50 => 'create platform',
                51 => 'create platform git-checkout task',
                52 => 'create platform git-commit task',
                53 => 'create platform git-pull task',
                54 => 'create platform git-tag task',
                55 => 'create project',
                56 => 'create project content',
                57 => 'create rebuild_registry task',
                58 => 'create restore task',
                59 => 'create run_cron task',
                60 => 'create server',
                61 => 'create site',
                62 => 'create site aliases',
                63 => 'create site git-checkout task',
                64 => 'create site git-commit task',
                65 => 'create site git-tag task',
                66 => 'create sites on locked platforms',
                67 => 'create sync task',
                68 => 'create test task',
                69 => 'create unlock task',
                70 => 'create update task',
                71 => 'create update_drupal task',
                72 => 'create update_translations task',
                73 => 'create verify task',
                74 => 'delete any project content',
                75 => 'delete own client',
                76 => 'delete own project content',
                77 => 'delete package',
                78 => 'delete platform',
                79 => 'delete projects',
                80 => 'delete revisions',
                81 => 'delete server',
                82 => 'delete site',
                83 => 'edit any project content',
                84 => 'edit client uname',
                85 => 'edit client users',
                86 => 'edit own client',
                87 => 'edit own project content',
                88 => 'edit package',
                89 => 'edit platform',
                90 => 'edit project',
                91 => 'edit server',
                92 => 'edit site',
                93 => 'manage any SSH public keys',
                94 => 'manage own SSH public keys',
                95 => 'manage site HTTPS settings',
                96 => 'remove remote aliases from projects',
                97 => 'retry failed tasks',
                98 => 'revert revisions',
                99 => 'update status of tasks',
                100 => 'view any SSH public keys',
                101 => 'view client',
                102 => 'view locked platforms',
                103 => 'view own SSH public keys',
                104 => 'view own tasks',
                105 => 'view own unpublished content',
                106 => 'view package',
                107 => 'view platform',
                108 => 'view project',
                109 => 'view projects',
                110 => 'view revisions',
                111 => 'view server',
                112 => 'view site',
                113 => 'view task',
              ),
            ),
            'version' => NULL,
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => NULL,
        ),
        'devshop_projects' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/devshop/devshop_projects/devshop_projects.module',
          'basename' => 'devshop_projects.module',
          'name' => 'devshop_projects',
          'info' => 
          array (
            'name' => 'DevShop Projects',
            'description' => 'A DevShop module to sites/platforms together into projects.',
            'core' => '7.x',
            'package' => 'DevShop',
            'files' => 
            array (
              0 => 'inc/create/create.inc',
              1 => 'inc/create/step-1.inc',
              2 => 'inc/create/step-2.inc',
              3 => 'inc/create/step-3.inc',
              4 => 'inc/create/step-4.inc',
              5 => 'inc/admin.inc',
              6 => 'inc/create-wizard.inc',
              7 => 'inc/forms.inc',
              8 => 'inc/logs.inc',
              9 => 'inc/nodes.inc',
              10 => 'inc/queue.inc',
              11 => 'inc/tasks-ajax.inc',
              12 => 'inc/ui.inc',
              13 => 'tasks/commit.inc',
              14 => 'tasks/create.inc',
              15 => 'tasks/deploy.inc',
              16 => 'tasks/pull.inc',
              17 => 'tasks/tasks.inc',
            ),
            'dependencies' => 
            array (
              0 => 'hosting',
              1 => 'hosting_alias',
              2 => 'hosting_package',
              3 => 'hosting_git',
              4 => 'hosting_git_pull',
              5 => 'ctools',
            ),
            'version' => NULL,
            'php' => '5.2.4',
          ),
          'schema_version' => '7009',
          'version' => NULL,
        ),
        'devshop_testing' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/devshop/devshop_testing/devshop_testing.module',
          'basename' => 'devshop_testing.module',
          'name' => 'devshop_testing',
          'info' => 
          array (
            'name' => 'DevShop Testing',
            'description' => 'Allow simpletests to be run easily on your DevShop projects.',
            'core' => '7.x',
            'package' => 'DevShop',
            'files' => 
            array (
              0 => 'pages.inc',
            ),
            'dependencies' => 
            array (
              0 => 'devshop_projects',
            ),
            'version' => NULL,
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'version' => NULL,
        ),
        'devshop_support_network_client' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/devshop/devshop_support/devshop_support_network_client.module',
          'basename' => 'devshop_support_network_client.module',
          'name' => 'devshop_support_network_client',
          'info' => 
          array (
            'name' => 'DevShop Support Network Client',
            'description' => 'Connects your DevShop server to the DevShop.Support system.',
            'package' => 'DevShop',
            'core' => '7.x',
            'configure' => 'admin/devshop/support',
            'dependencies' => 
            array (
            ),
            'version' => NULL,
            'php' => '5.2.4',
          ),
          'schema_version' => '7002',
          'version' => NULL,
        ),
        'devshop_github' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/devshop/devshop_github/devshop_github.module',
          'basename' => 'devshop_github.module',
          'name' => 'devshop_github',
          'info' => 
          array (
            'name' => 'DevShop GitHub',
            'description' => 'Integration with GitHub',
            'core' => '7.x',
            'package' => 'DevShop',
            'files' => 
            array (
              0 => 'includes/add-key.inc',
              1 => 'includes/admin.inc',
            ),
            'dependencies' => 
            array (
              0 => 'devshop_projects',
              1 => 'composer_manager',
            ),
            'version' => NULL,
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'version' => NULL,
        ),
        'devshop_bitbucket' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/devshop/devshop_bitbucket/devshop_bitbucket.module',
          'basename' => 'devshop_bitbucket.module',
          'name' => 'devshop_bitbucket',
          'info' => 
          array (
            'name' => 'DevShop BitBucket',
            'description' => 'Support for BitBucket Webhooks',
            'core' => '7.x',
            'package' => 'DevShop',
            'files' => 
            array (
              0 => 'includes/add-key.inc',
              1 => 'includes/admin.inc',
            ),
            'dependencies' => 
            array (
              0 => 'devshop_projects',
            ),
            'version' => NULL,
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'version' => NULL,
        ),
        'devshop_hosting' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/devshop/devshop_hosting.module',
          'basename' => 'devshop_hosting.module',
          'name' => 'devshop_hosting',
          'info' => 
          array (
            'name' => 'DevShop Hosting',
            'description' => 'Provides the streamlined DevShop user interface and experience.  NOTE: This module alters some of of the UI of Aegir Hostmaster.',
            'core' => '7.x',
            'package' => 'DevShop',
            'dependencies' => 
            array (
              0 => 'hosting',
            ),
            'version' => NULL,
            'php' => '5.2.4',
          ),
          'schema_version' => '7106',
          'version' => NULL,
        ),
        'intercomio' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/intercomio/intercomio.module',
          'basename' => 'intercomio.module',
          'name' => 'intercomio',
          'info' => 
          array (
            'name' => 'Intercom.io Integration',
            'description' => 'Integration with the intercom.io web service.',
            'core' => '7.x',
            'package' => 'Other',
            'configure' => 'admin/config/services/intercomio',
            'dependencies' => 
            array (
              0 => 'composer_manager',
            ),
            'files' => 
            array (
              0 => 'src/IntercomioController.php',
            ),
            'version' => '7.x-1.0-beta2',
            'project' => 'intercomio',
            'datestamp' => '1544578383',
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'version' => '7.x-1.0-beta2',
        ),
        'overlay_paths_ui' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/overlay_paths/overlay_paths_ui/overlay_paths_ui.module',
          'basename' => 'overlay_paths_ui.module',
          'name' => 'overlay_paths_ui',
          'info' => 
          array (
            'name' => 'Overlay paths UI',
            'description' => 'Provides a UI for overlay paths, allow site builders to select paths that should appear in the overlay.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'overlay_paths',
            ),
            'configure' => 'admin/config/system/overlay_paths_ui',
            'version' => '7.x-1.3',
            'project' => 'overlay_paths',
            'datestamp' => '1388699909',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.3',
        ),
        'overlay_paths' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/overlay_paths/overlay_paths.module',
          'basename' => 'overlay_paths.module',
          'name' => 'overlay_paths',
          'info' => 
          array (
            'name' => 'Overlay paths',
            'description' => 'Allows other developers to define paths that should use the overlay, but not an admin theme',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'overlay',
            ),
            'version' => '7.x-1.3',
            'project' => 'overlay_paths',
            'datestamp' => '1388699909',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.3',
        ),
        'admin_menu_toolbar' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
          'basename' => 'admin_menu_toolbar.module',
          'name' => 'admin_menu_toolbar',
          'info' => 
          array (
            'name' => 'Administration menu Toolbar style',
            'description' => 'A better Toolbar.',
            'package' => 'Administration',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'admin_menu',
            ),
            'version' => '7.x-3.0-rc6',
            'project' => 'admin_menu',
            'datestamp' => '1543859284',
            'php' => '5.2.4',
          ),
          'schema_version' => '6300',
          'version' => '7.x-3.0-rc6',
        ),
        'admin_devel' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/admin_menu/admin_devel/admin_devel.module',
          'basename' => 'admin_devel.module',
          'name' => 'admin_devel',
          'info' => 
          array (
            'name' => 'Administration Development tools',
            'description' => 'Administration and debugging functionality for developers and site builders.',
            'package' => 'Administration',
            'core' => '7.x',
            'scripts' => 
            array (
              0 => 'admin_devel.js',
            ),
            'version' => '7.x-3.0-rc6',
            'project' => 'admin_menu',
            'datestamp' => '1543859284',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-3.0-rc6',
        ),
        'admin_menu' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/admin_menu/admin_menu.module',
          'basename' => 'admin_menu.module',
          'name' => 'admin_menu',
          'info' => 
          array (
            'name' => 'Administration menu',
            'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
            'package' => 'Administration',
            'core' => '7.x',
            'configure' => 'admin/config/administration/admin_menu',
            'dependencies' => 
            array (
              0 => 'system (>7.10)',
            ),
            'files' => 
            array (
              0 => 'tests/admin_menu.test',
            ),
            'version' => '7.x-3.0-rc6',
            'project' => 'admin_menu',
            'datestamp' => '1543859284',
            'php' => '5.2.4',
          ),
          'schema_version' => '7304',
          'version' => '7.x-3.0-rc6',
        ),
        'sshkey_blacklist' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/sshkey/sshkey_blacklist/sshkey_blacklist.module',
          'basename' => 'sshkey_blacklist.module',
          'name' => 'sshkey_blacklist',
          'info' => 
          array (
            'name' => 'SSH key blacklist checking',
            'description' => 'Validates SSH keys using the ssh-vulnkey blacklist.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'sshkey',
            ),
            'version' => '7.x-2.0',
            'project' => 'sshkey',
            'datestamp' => '1347551755',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.0',
        ),
        'sshkey' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/sshkey/sshkey.module',
          'basename' => 'sshkey.module',
          'name' => 'sshkey',
          'info' => 
          array (
            'name' => 'SSH public keys',
            'description' => 'Allows users to associated public keys with their user accounts.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'sshkey.test',
              1 => 'views/sshkey.views.inc',
              2 => 'views/sshkey_handler_field_sshkey_operations.inc',
              3 => 'views/sshkey_handler_field_sshkey_link.inc',
              4 => 'views/sshkey_handler_field_sshkey_link_edit.inc',
              5 => 'views/sshkey_handler_field_sshkey_link_delete.inc',
            ),
            'version' => '7.x-2.0',
            'project' => 'sshkey',
            'datestamp' => '1347551755',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.0',
        ),
        'entity' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/entity/entity.module',
          'basename' => 'entity.module',
          'name' => 'entity',
          'info' => 
          array (
            'name' => 'Entity API',
            'description' => 'Enables modules to work with any entity type and to provide entities.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'entity.features.inc',
              1 => 'entity.i18n.inc',
              2 => 'entity.info.inc',
              3 => 'entity.rules.inc',
              4 => 'entity.test',
              5 => 'includes/entity.inc',
              6 => 'includes/entity.controller.inc',
              7 => 'includes/entity.ui.inc',
              8 => 'includes/entity.wrapper.inc',
              9 => 'views/entity.views.inc',
              10 => 'views/handlers/entity_views_field_handler_helper.inc',
              11 => 'views/handlers/entity_views_handler_area_entity.inc',
              12 => 'views/handlers/entity_views_handler_field_boolean.inc',
              13 => 'views/handlers/entity_views_handler_field_date.inc',
              14 => 'views/handlers/entity_views_handler_field_duration.inc',
              15 => 'views/handlers/entity_views_handler_field_entity.inc',
              16 => 'views/handlers/entity_views_handler_field_field.inc',
              17 => 'views/handlers/entity_views_handler_field_numeric.inc',
              18 => 'views/handlers/entity_views_handler_field_options.inc',
              19 => 'views/handlers/entity_views_handler_field_text.inc',
              20 => 'views/handlers/entity_views_handler_field_uri.inc',
              21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
              22 => 'views/handlers/entity_views_handler_relationship.inc',
              23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
            ),
            'version' => '7.x-1.9',
            'project' => 'entity',
            'datestamp' => '1518620551',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7003',
          'version' => '7.x-1.9',
        ),
        'entity_token' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/entity/entity_token.module',
          'basename' => 'entity_token.module',
          'name' => 'entity_token',
          'info' => 
          array (
            'name' => 'Entity tokens',
            'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'entity_token.tokens.inc',
              1 => 'entity_token.module',
            ),
            'dependencies' => 
            array (
              0 => 'entity',
            ),
            'version' => '7.x-1.9',
            'project' => 'entity',
            'datestamp' => '1518620551',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.9',
        ),
        'cas_ldap' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/cas_attributes/cas_ldap.module',
          'basename' => 'cas_ldap.module',
          'name' => 'cas_ldap',
          'info' => 
          array (
            'name' => 'CAS LDAP Tokens',
            'description' => 'Provides tokens for LDAP attributes for CAS users.',
            'core' => '7.x',
            'package' => 'Central Authentication Service',
            'dependencies' => 
            array (
              0 => 'cas_attributes',
              1 => 'ldap_servers',
            ),
            'configure' => 'admin/config/people/cas/attributes',
            'version' => '7.x-1.0-rc3',
            'project' => 'cas_attributes',
            'datestamp' => '1384309134',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-rc3',
        ),
        'cas_attributes' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/cas_attributes/cas_attributes.module',
          'basename' => 'cas_attributes.module',
          'name' => 'cas_attributes',
          'info' => 
          array (
            'name' => 'CAS Attribute Tokens',
            'description' => 'Provides tokens for CAS attributes and an interface for token replacement in user account and profile fields.',
            'core' => '7.x',
            'package' => 'Central Authentication Service',
            'dependencies' => 
            array (
              0 => 'cas',
              1 => 'token',
            ),
            'files' => 
            array (
              0 => 'cas_attributes.test',
            ),
            'configure' => 'admin/config/people/cas/attributes',
            'version' => '7.x-1.0-rc3',
            'project' => 'cas_attributes',
            'datestamp' => '1384309134',
            'php' => '5.2.4',
          ),
          'schema_version' => '7101',
          'version' => '7.x-1.0-rc3',
        ),
        'libraries' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/libraries/libraries.module',
          'basename' => 'libraries.module',
          'name' => 'libraries',
          'info' => 
          array (
            'name' => 'Libraries',
            'description' => 'Allows version-dependent and shared usage of external libraries.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'system (>=7.11)',
            ),
            'files' => 
            array (
              0 => 'tests/LibrariesAdminWebTest.test',
              1 => 'tests/LibrariesLoadWebTest.test',
              2 => 'tests/LibrariesUnitTest.test',
              3 => 'tests/LibrariesWebTestBase.test',
            ),
            'version' => '7.x-2.5',
            'project' => 'libraries',
            'datestamp' => '1538770685',
            'php' => '5.2.4',
          ),
          'schema_version' => '7202',
          'version' => '7.x-2.5',
        ),
        'hosting_statsd' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/hosting_statsd/hosting_statsd.module',
          'basename' => 'hosting_statsd.module',
          'name' => 'hosting_statsd',
          'info' => 
          array (
            'name' => 'Aegir Hosting StatsD',
            'description' => 'Provides Aegir statistics to StatsD servers.',
            'core' => '7.x',
            'configure' => 'admin/config/development/statsd/hosting',
            'dependencies' => 
            array (
              0 => 'statsd',
            ),
            'version' => '7.x-1.0-beta1',
            'project' => 'hosting_statsd',
            'datestamp' => '1544578386',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-beta1',
        ),
        'features' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/features/features.module',
          'basename' => 'features.module',
          'name' => 'features',
          'info' => 
          array (
            'name' => 'Features',
            'description' => 'Provides feature management for Drupal.',
            'core' => '7.x',
            'package' => 'Features',
            'files' => 
            array (
              0 => 'tests/features.test',
            ),
            'test_dependencies' => 
            array (
              0 => 'image',
              1 => 'strongarm',
              2 => 'taxonomy',
              3 => 'views',
            ),
            'configure' => 'admin/structure/features/settings',
            'version' => '7.x-2.11',
            'project' => 'features',
            'datestamp' => '1541050686',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7200',
          'version' => '7.x-2.11',
        ),
        'betterlogin' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/betterlogin/betterlogin.module',
          'basename' => 'betterlogin.module',
          'name' => 'betterlogin',
          'info' => 
          array (
            'name' => 'Better Login',
            'description' => 'Make the login screens better :)',
            'package' => 'User interface',
            'core' => '7.x',
            'version' => '7.x-1.5',
            'project' => 'betterlogin',
            'datestamp' => '1525940286',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.5',
        ),
        'distro_update' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/distro_update/distro_update.module',
          'basename' => 'distro_update.module',
          'name' => 'distro_update',
          'info' => 
          array (
            'name' => 'Distribution Update Status Manager',
            'description' => 'Provides an alternative Update Manager interface to limit status updates for modules/themes managed by a distribution\'s or module\'s .make file.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'update',
            ),
            'configure' => 'admin/reports/updates/settings',
            'version' => '7.x-1.0-beta4',
            'project' => 'distro_update',
            'datestamp' => '1413825230',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-beta4',
        ),
        'module_filter' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/module_filter/module_filter.module',
          'basename' => 'module_filter.module',
          'name' => 'module_filter',
          'info' => 
          array (
            'name' => 'Module filter',
            'description' => 'Filter the modules list.',
            'core' => '7.x',
            'package' => 'Administration',
            'files' => 
            array (
              0 => 'module_filter.install',
              1 => 'module_filter.module',
              2 => 'module_filter.admin.inc',
              3 => 'module_filter.theme.inc',
              4 => 'css/module_filter.css',
              5 => 'css/module_filter_tab.css',
              6 => 'js/module_filter.js',
              7 => 'js/module_filter_tab.js',
            ),
            'configure' => 'admin/config/user-interface/modulefilter',
            'version' => '7.x-2.2',
            'project' => 'module_filter',
            'datestamp' => '1553698385',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7201',
          'version' => '7.x-2.2',
        ),
        'timeago' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/timeago/timeago.module',
          'basename' => 'timeago.module',
          'name' => 'timeago',
          'info' => 
          array (
            'name' => 'Timeago',
            'description' => 'Converts dynamic timetamps to a \'time ago\' format using jQuery with graceful degredation.',
            'core' => '7.x',
            'configure' => 'admin/config/user-interface/timeago',
            'files' => 
            array (
              0 => 'timeago.install',
              1 => 'timeago.module',
            ),
            'version' => '7.x-2.3',
            'project' => 'timeago',
            'datestamp' => '1415314687',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.3',
        ),
        'views_export' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/views/views_export/views_export.module',
          'basename' => 'views_export.module',
          'name' => 'views_export',
          'info' => 
          array (
            'dependencies' => 
            array (
            ),
            'description' => '',
            'version' => NULL,
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => NULL,
        ),
        'views' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/views/views.module',
          'basename' => 'views.module',
          'name' => 'views',
          'info' => 
          array (
            'name' => 'Views',
            'description' => 'Create customized lists and queries from your database.',
            'package' => 'Views',
            'core' => '7.x',
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'css/views.css',
              ),
            ),
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'files' => 
            array (
              0 => 'handlers/views_handler_area.inc',
              1 => 'handlers/views_handler_area_messages.inc',
              2 => 'handlers/views_handler_area_result.inc',
              3 => 'handlers/views_handler_area_text.inc',
              4 => 'handlers/views_handler_area_text_custom.inc',
              5 => 'handlers/views_handler_area_view.inc',
              6 => 'handlers/views_handler_argument.inc',
              7 => 'handlers/views_handler_argument_date.inc',
              8 => 'handlers/views_handler_argument_formula.inc',
              9 => 'handlers/views_handler_argument_many_to_one.inc',
              10 => 'handlers/views_handler_argument_null.inc',
              11 => 'handlers/views_handler_argument_numeric.inc',
              12 => 'handlers/views_handler_argument_string.inc',
              13 => 'handlers/views_handler_argument_group_by_numeric.inc',
              14 => 'handlers/views_handler_field.inc',
              15 => 'handlers/views_handler_field_counter.inc',
              16 => 'handlers/views_handler_field_boolean.inc',
              17 => 'handlers/views_handler_field_contextual_links.inc',
              18 => 'handlers/views_handler_field_ctools_dropdown.inc',
              19 => 'handlers/views_handler_field_custom.inc',
              20 => 'handlers/views_handler_field_date.inc',
              21 => 'handlers/views_handler_field_entity.inc',
              22 => 'handlers/views_handler_field_links.inc',
              23 => 'handlers/views_handler_field_markup.inc',
              24 => 'handlers/views_handler_field_math.inc',
              25 => 'handlers/views_handler_field_numeric.inc',
              26 => 'handlers/views_handler_field_prerender_list.inc',
              27 => 'handlers/views_handler_field_time_interval.inc',
              28 => 'handlers/views_handler_field_serialized.inc',
              29 => 'handlers/views_handler_field_machine_name.inc',
              30 => 'handlers/views_handler_field_url.inc',
              31 => 'handlers/views_handler_filter.inc',
              32 => 'handlers/views_handler_filter_boolean_operator.inc',
              33 => 'handlers/views_handler_filter_boolean_operator_string.inc',
              34 => 'handlers/views_handler_filter_combine.inc',
              35 => 'handlers/views_handler_filter_date.inc',
              36 => 'handlers/views_handler_filter_equality.inc',
              37 => 'handlers/views_handler_filter_entity_bundle.inc',
              38 => 'handlers/views_handler_filter_group_by_numeric.inc',
              39 => 'handlers/views_handler_filter_in_operator.inc',
              40 => 'handlers/views_handler_filter_many_to_one.inc',
              41 => 'handlers/views_handler_filter_numeric.inc',
              42 => 'handlers/views_handler_filter_string.inc',
              43 => 'handlers/views_handler_filter_fields_compare.inc',
              44 => 'handlers/views_handler_relationship.inc',
              45 => 'handlers/views_handler_relationship_groupwise_max.inc',
              46 => 'handlers/views_handler_sort.inc',
              47 => 'handlers/views_handler_sort_date.inc',
              48 => 'handlers/views_handler_sort_formula.inc',
              49 => 'handlers/views_handler_sort_group_by_numeric.inc',
              50 => 'handlers/views_handler_sort_menu_hierarchy.inc',
              51 => 'handlers/views_handler_sort_random.inc',
              52 => 'includes/base.inc',
              53 => 'includes/handlers.inc',
              54 => 'includes/plugins.inc',
              55 => 'includes/view.inc',
              56 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
              57 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
              58 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
              59 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
              60 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
              61 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
              62 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
              63 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
              64 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
              65 => 'modules/book/views_plugin_argument_default_book_root.inc',
              66 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
              67 => 'modules/comment/views_handler_field_comment.inc',
              68 => 'modules/comment/views_handler_field_comment_depth.inc',
              69 => 'modules/comment/views_handler_field_comment_link.inc',
              70 => 'modules/comment/views_handler_field_comment_link_approve.inc',
              71 => 'modules/comment/views_handler_field_comment_link_delete.inc',
              72 => 'modules/comment/views_handler_field_comment_link_edit.inc',
              73 => 'modules/comment/views_handler_field_comment_link_reply.inc',
              74 => 'modules/comment/views_handler_field_comment_node_link.inc',
              75 => 'modules/comment/views_handler_field_comment_username.inc',
              76 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
              77 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
              78 => 'modules/comment/views_handler_field_node_comment.inc',
              79 => 'modules/comment/views_handler_field_node_new_comments.inc',
              80 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
              81 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
              82 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
              83 => 'modules/comment/views_handler_filter_node_comment.inc',
              84 => 'modules/comment/views_handler_sort_comment_thread.inc',
              85 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
              86 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
              87 => 'modules/comment/views_plugin_row_comment_rss.inc',
              88 => 'modules/comment/views_plugin_row_comment_view.inc',
              89 => 'modules/contact/views_handler_field_contact_link.inc',
              90 => 'modules/field/views_handler_field_field.inc',
              91 => 'modules/field/views_handler_relationship_entity_reverse.inc',
              92 => 'modules/field/views_handler_argument_field_list.inc',
              93 => 'modules/field/views_handler_filter_field_list_boolean.inc',
              94 => 'modules/field/views_handler_argument_field_list_string.inc',
              95 => 'modules/field/views_handler_filter_field_list.inc',
              96 => 'modules/filter/views_handler_field_filter_format_name.inc',
              97 => 'modules/locale/views_handler_field_node_language.inc',
              98 => 'modules/locale/views_handler_filter_node_language.inc',
              99 => 'modules/locale/views_handler_argument_locale_group.inc',
              100 => 'modules/locale/views_handler_argument_locale_language.inc',
              101 => 'modules/locale/views_handler_field_locale_group.inc',
              102 => 'modules/locale/views_handler_field_locale_language.inc',
              103 => 'modules/locale/views_handler_field_locale_link_edit.inc',
              104 => 'modules/locale/views_handler_filter_locale_group.inc',
              105 => 'modules/locale/views_handler_filter_locale_language.inc',
              106 => 'modules/locale/views_handler_filter_locale_version.inc',
              107 => 'modules/locale/views_handler_sort_node_language.inc',
              108 => 'modules/node/views_handler_argument_dates_various.inc',
              109 => 'modules/node/views_handler_argument_node_language.inc',
              110 => 'modules/node/views_handler_argument_node_nid.inc',
              111 => 'modules/node/views_handler_argument_node_type.inc',
              112 => 'modules/node/views_handler_argument_node_vid.inc',
              113 => 'modules/node/views_handler_argument_node_uid_revision.inc',
              114 => 'modules/node/views_handler_field_history_user_timestamp.inc',
              115 => 'modules/node/views_handler_field_node.inc',
              116 => 'modules/node/views_handler_field_node_link.inc',
              117 => 'modules/node/views_handler_field_node_link_delete.inc',
              118 => 'modules/node/views_handler_field_node_link_edit.inc',
              119 => 'modules/node/views_handler_field_node_revision.inc',
              120 => 'modules/node/views_handler_field_node_revision_link.inc',
              121 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
              122 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
              123 => 'modules/node/views_handler_field_node_path.inc',
              124 => 'modules/node/views_handler_field_node_type.inc',
              125 => 'modules/node/views_handler_field_node_version_count.inc',
              126 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
              127 => 'modules/node/views_handler_filter_node_access.inc',
              128 => 'modules/node/views_handler_filter_node_status.inc',
              129 => 'modules/node/views_handler_filter_node_type.inc',
              130 => 'modules/node/views_handler_filter_node_uid_revision.inc',
              131 => 'modules/node/views_handler_filter_node_version_count.inc',
              132 => 'modules/node/views_handler_sort_node_version_count.inc',
              133 => 'modules/node/views_plugin_argument_default_node.inc',
              134 => 'modules/node/views_plugin_argument_validate_node.inc',
              135 => 'modules/node/views_plugin_row_node_rss.inc',
              136 => 'modules/node/views_plugin_row_node_view.inc',
              137 => 'modules/profile/views_handler_field_profile_date.inc',
              138 => 'modules/profile/views_handler_field_profile_list.inc',
              139 => 'modules/profile/views_handler_filter_profile_selection.inc',
              140 => 'modules/search/views_handler_argument_search.inc',
              141 => 'modules/search/views_handler_field_search_score.inc',
              142 => 'modules/search/views_handler_filter_search.inc',
              143 => 'modules/search/views_handler_sort_search_score.inc',
              144 => 'modules/search/views_plugin_row_search_view.inc',
              145 => 'modules/statistics/views_handler_field_accesslog_path.inc',
              146 => 'modules/statistics/views_handler_field_node_counter_timestamp.inc',
              147 => 'modules/statistics/views_handler_field_statistics_numeric.inc',
              148 => 'modules/system/views_handler_argument_file_fid.inc',
              149 => 'modules/system/views_handler_field_file.inc',
              150 => 'modules/system/views_handler_field_file_extension.inc',
              151 => 'modules/system/views_handler_field_file_filemime.inc',
              152 => 'modules/system/views_handler_field_file_uri.inc',
              153 => 'modules/system/views_handler_field_file_status.inc',
              154 => 'modules/system/views_handler_filter_file_status.inc',
              155 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
              156 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
              157 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
              158 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_join.inc',
              159 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
              160 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
              161 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
              162 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
              163 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
              164 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
              165 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
              166 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
              167 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth_join.inc',
              168 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
              169 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
              170 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
              171 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
              172 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
              173 => 'modules/tracker/views_handler_argument_tracker_comment_user_uid.inc',
              174 => 'modules/tracker/views_handler_filter_tracker_comment_user_uid.inc',
              175 => 'modules/tracker/views_handler_filter_tracker_boolean_operator.inc',
              176 => 'modules/system/views_handler_filter_system_type.inc',
              177 => 'modules/translation/views_handler_argument_node_tnid.inc',
              178 => 'modules/translation/views_handler_field_node_link_translate.inc',
              179 => 'modules/translation/views_handler_field_node_translation_link.inc',
              180 => 'modules/translation/views_handler_filter_node_tnid.inc',
              181 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
              182 => 'modules/translation/views_handler_relationship_translation.inc',
              183 => 'modules/user/views_handler_argument_user_uid.inc',
              184 => 'modules/user/views_handler_argument_users_roles_rid.inc',
              185 => 'modules/user/views_handler_field_user.inc',
              186 => 'modules/user/views_handler_field_user_language.inc',
              187 => 'modules/user/views_handler_field_user_link.inc',
              188 => 'modules/user/views_handler_field_user_link_cancel.inc',
              189 => 'modules/user/views_handler_field_user_link_edit.inc',
              190 => 'modules/user/views_handler_field_user_mail.inc',
              191 => 'modules/user/views_handler_field_user_name.inc',
              192 => 'modules/user/views_handler_field_user_permissions.inc',
              193 => 'modules/user/views_handler_field_user_picture.inc',
              194 => 'modules/user/views_handler_field_user_roles.inc',
              195 => 'modules/user/views_handler_filter_user_current.inc',
              196 => 'modules/user/views_handler_filter_user_name.inc',
              197 => 'modules/user/views_handler_filter_user_permissions.inc',
              198 => 'modules/user/views_handler_filter_user_roles.inc',
              199 => 'modules/user/views_plugin_argument_default_current_user.inc',
              200 => 'modules/user/views_plugin_argument_default_user.inc',
              201 => 'modules/user/views_plugin_argument_validate_user.inc',
              202 => 'modules/user/views_plugin_row_user_view.inc',
              203 => 'plugins/views_plugin_access.inc',
              204 => 'plugins/views_plugin_access_none.inc',
              205 => 'plugins/views_plugin_access_perm.inc',
              206 => 'plugins/views_plugin_access_role.inc',
              207 => 'plugins/views_plugin_argument_default.inc',
              208 => 'plugins/views_plugin_argument_default_php.inc',
              209 => 'plugins/views_plugin_argument_default_fixed.inc',
              210 => 'plugins/views_plugin_argument_default_raw.inc',
              211 => 'plugins/views_plugin_argument_validate.inc',
              212 => 'plugins/views_plugin_argument_validate_numeric.inc',
              213 => 'plugins/views_plugin_argument_validate_php.inc',
              214 => 'plugins/views_plugin_cache.inc',
              215 => 'plugins/views_plugin_cache_none.inc',
              216 => 'plugins/views_plugin_cache_time.inc',
              217 => 'plugins/views_plugin_display.inc',
              218 => 'plugins/views_plugin_display_attachment.inc',
              219 => 'plugins/views_plugin_display_block.inc',
              220 => 'plugins/views_plugin_display_default.inc',
              221 => 'plugins/views_plugin_display_embed.inc',
              222 => 'plugins/views_plugin_display_extender.inc',
              223 => 'plugins/views_plugin_display_feed.inc',
              224 => 'plugins/views_plugin_display_page.inc',
              225 => 'plugins/views_plugin_exposed_form_basic.inc',
              226 => 'plugins/views_plugin_exposed_form.inc',
              227 => 'plugins/views_plugin_exposed_form_input_required.inc',
              228 => 'plugins/views_plugin_localization_core.inc',
              229 => 'plugins/views_plugin_localization.inc',
              230 => 'plugins/views_plugin_localization_none.inc',
              231 => 'plugins/views_plugin_pager.inc',
              232 => 'plugins/views_plugin_pager_full.inc',
              233 => 'plugins/views_plugin_pager_mini.inc',
              234 => 'plugins/views_plugin_pager_none.inc',
              235 => 'plugins/views_plugin_pager_some.inc',
              236 => 'plugins/views_plugin_query.inc',
              237 => 'plugins/views_plugin_query_default.inc',
              238 => 'plugins/views_plugin_row.inc',
              239 => 'plugins/views_plugin_row_fields.inc',
              240 => 'plugins/views_plugin_row_rss_fields.inc',
              241 => 'plugins/views_plugin_style.inc',
              242 => 'plugins/views_plugin_style_default.inc',
              243 => 'plugins/views_plugin_style_grid.inc',
              244 => 'plugins/views_plugin_style_list.inc',
              245 => 'plugins/views_plugin_style_jump_menu.inc',
              246 => 'plugins/views_plugin_style_mapping.inc',
              247 => 'plugins/views_plugin_style_rss.inc',
              248 => 'plugins/views_plugin_style_summary.inc',
              249 => 'plugins/views_plugin_style_summary_jump_menu.inc',
              250 => 'plugins/views_plugin_style_summary_unformatted.inc',
              251 => 'plugins/views_plugin_style_table.inc',
              252 => 'tests/handlers/views_handlers.test',
              253 => 'tests/handlers/views_handler_area_text.test',
              254 => 'tests/handlers/views_handler_argument_null.test',
              255 => 'tests/handlers/views_handler_argument_string.test',
              256 => 'tests/handlers/views_handler_field.test',
              257 => 'tests/handlers/views_handler_field_boolean.test',
              258 => 'tests/handlers/views_handler_field_custom.test',
              259 => 'tests/handlers/views_handler_field_counter.test',
              260 => 'tests/handlers/views_handler_field_date.test',
              261 => 'tests/handlers/views_handler_field_file_extension.test',
              262 => 'tests/handlers/views_handler_field_file_size.test',
              263 => 'tests/handlers/views_handler_field_math.test',
              264 => 'tests/handlers/views_handler_field_url.test',
              265 => 'tests/handlers/views_handler_field_xss.test',
              266 => 'tests/handlers/views_handler_filter_combine.test',
              267 => 'tests/handlers/views_handler_filter_date.test',
              268 => 'tests/handlers/views_handler_filter_equality.test',
              269 => 'tests/handlers/views_handler_filter_in_operator.test',
              270 => 'tests/handlers/views_handler_filter_numeric.test',
              271 => 'tests/handlers/views_handler_filter_string.test',
              272 => 'tests/handlers/views_handler_sort_random.test',
              273 => 'tests/handlers/views_handler_sort_date.test',
              274 => 'tests/handlers/views_handler_sort.test',
              275 => 'tests/test_handlers/views_test_area_access.inc',
              276 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
              277 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
              278 => 'tests/test_plugins/views_test_plugin_style_test_mapping.inc',
              279 => 'tests/plugins/views_plugin_display.test',
              280 => 'tests/styles/views_plugin_style_jump_menu.test',
              281 => 'tests/styles/views_plugin_style.test',
              282 => 'tests/styles/views_plugin_style_base.test',
              283 => 'tests/styles/views_plugin_style_mapping.test',
              284 => 'tests/styles/views_plugin_style_unformatted.test',
              285 => 'tests/views_access.test',
              286 => 'tests/views_analyze.test',
              287 => 'tests/views_basic.test',
              288 => 'tests/views_ajax.test',
              289 => 'tests/views_argument_default.test',
              290 => 'tests/views_argument_validator.test',
              291 => 'tests/views_exposed_form.test',
              292 => 'tests/field/views_fieldapi.test',
              293 => 'tests/views_glossary.test',
              294 => 'tests/views_groupby.test',
              295 => 'tests/views_handler_filter.test',
              296 => 'tests/views_handlers.test',
              297 => 'tests/views_module.test',
              298 => 'tests/views_pager.test',
              299 => 'tests/views_plugin_localization_test.inc',
              300 => 'tests/views_translatable.test',
              301 => 'tests/views_query.test',
              302 => 'tests/views_upgrade.test',
              303 => 'tests/views_test.views_default.inc',
              304 => 'tests/comment/views_handler_argument_comment_user_uid.test',
              305 => 'tests/comment/views_handler_filter_comment_user_uid.test',
              306 => 'tests/node/views_node_revision_relations.test',
              307 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
              308 => 'tests/user/views_handler_field_user_name.test',
              309 => 'tests/user/views_user_argument_default.test',
              310 => 'tests/user/views_user_argument_validate.test',
              311 => 'tests/user/views_user.test',
              312 => 'tests/views_cache.test',
              313 => 'tests/views_view.test',
              314 => 'tests/views_ui.test',
            ),
            'version' => '7.x-3.21',
            'project' => 'views',
            'datestamp' => '1552486703',
            'php' => '5.2.4',
          ),
          'schema_version' => '7302',
          'version' => '7.x-3.21',
        ),
        'views_ui' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/views/views_ui.module',
          'basename' => 'views_ui.module',
          'name' => 'views_ui',
          'info' => 
          array (
            'name' => 'Views UI',
            'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
            'package' => 'Views',
            'core' => '7.x',
            'configure' => 'admin/structure/views',
            'dependencies' => 
            array (
              0 => 'views',
            ),
            '# @codingStandardsIgnoreLine
files' => 
            array (
              0 => 'views_ui.module',
            ),
            'files' => 
            array (
              0 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
            ),
            'version' => '7.x-3.21',
            'project' => 'views',
            'datestamp' => '1552486703',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-3.21',
        ),
        'cas_server' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/cas/cas_server.module',
          'basename' => 'cas_server.module',
          'name' => 'cas_server',
          'info' => 
          array (
            'name' => 'CAS Server',
            'package' => 'Central Authentication Service',
            'core' => '7.x',
            'description' => 'Provides protocol compliant CAS Server',
            'configure' => 'admin/config/people/cas_server',
            'version' => '7.x-1.7',
            'project' => 'cas',
            'datestamp' => '1518448970',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7102',
          'version' => '7.x-1.7',
        ),
        'cas' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/cas/cas.module',
          'basename' => 'cas.module',
          'name' => 'cas',
          'info' => 
          array (
            'name' => 'CAS',
            'package' => 'Central Authentication Service',
            'core' => '7.x',
            'description' => 'Provides single sign-on Central Authentication Services (CAS)',
            'configure' => 'admin/config/people/cas',
            'files' => 
            array (
              0 => 'cas.test',
              1 => 'includes/views/handlers/cas_handler_field_cas_name.inc',
            ),
            'version' => '7.x-1.7',
            'project' => 'cas',
            'datestamp' => '1518448970',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7104',
          'version' => '7.x-1.7',
        ),
        'navbar' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/navbar/navbar.module',
          'basename' => 'navbar.module',
          'name' => 'navbar',
          'info' => 
          array (
            'name' => 'Navbar',
            'description' => 'A very simple mobile friendly navigation toolbar that lets you switch between frontend and backend.',
            'core' => '7.x',
            'package' => 'Administration',
            'dependencies' => 
            array (
              0 => 'libraries (>=2.0)',
            ),
            'version' => '7.x-1.7',
            'project' => 'navbar',
            'datestamp' => '1449520443',
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'version' => '7.x-1.7',
        ),
        'statsd' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/statsd/statsd.module',
          'basename' => 'statsd.module',
          'name' => 'statsd',
          'info' => 
          array (
            'name' => 'StatsD',
            'description' => 'Logs and records system events to Graphite via StatsD',
            'core' => '7.x',
            'php' => '5.3',
            'configure' => 'admin/config/development/statsd',
            'files' => 
            array (
              0 => 'includes/statsd.inc',
            ),
            'version' => '7.x-1.1',
            'project' => 'statsd',
            'datestamp' => '1461556440',
            'dependencies' => 
            array (
            ),
          ),
          'schema_version' => 0,
          'version' => '7.x-1.1',
        ),
        'r4032login' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/r4032login/r4032login.module',
          'basename' => 'r4032login.module',
          'name' => 'r4032login',
          'info' => 
          array (
            'name' => 'Redirect 403 to User Login',
            'description' => 'Redirect anonymous users from 403 Access Denied pages to the /user/login page.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'r4032login.install',
              1 => 'r4032login.module',
            ),
            'configure' => 'admin/config/system/site-information',
            'version' => '7.x-1.8',
            'project' => 'r4032login',
            'datestamp' => '1407782030',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'version' => '7.x-1.8',
        ),
        'jquery_update' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/jquery_update/jquery_update.module',
          'basename' => 'jquery_update.module',
          'name' => 'jquery_update',
          'info' => 
          array (
            'name' => 'jQuery Update',
            'description' => 'Update jQuery and jQuery UI to a more recent version.',
            'package' => 'User interface',
            'core' => '7.x',
            'configure' => 'admin/config/development/jquery_update',
            'version' => '7.x-3.0-alpha5',
            'project' => 'jquery_update',
            'datestamp' => '1490805187',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'version' => '7.x-3.0-alpha5',
        ),
        'chosen' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/chosen/chosen.module',
          'basename' => 'chosen.module',
          'name' => 'chosen',
          'info' => 
          array (
            'name' => 'Chosen',
            'description' => 'Makes select elements more user-friendly using <a href="http://harvesthq.github.com/chosen/">Chosen</a>.',
            'package' => 'User interface',
            'configure' => 'admin/config/user-interface/chosen',
            'core' => '7.x',
            'version' => '7.x-2.1',
            'project' => 'chosen',
            'datestamp' => '1490260386',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7204',
          'version' => '7.x-2.1',
        ),
        'composer_manager_sa' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/composer_manager/composer_manager_sa/composer_manager_sa.module',
          'basename' => 'composer_manager_sa.module',
          'name' => 'composer_manager_sa',
          'info' => 
          array (
            'name' => 'Composer Manager Security Advisories',
            'description' => 'Check for known security issues in Composer libraries from FriendsOfPHP/security-advisories.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'composer_manager',
            ),
            'version' => '7.x-1.8',
            'project' => 'composer_manager',
            'datestamp' => '1446212041',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.8',
        ),
        'composer_manager' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/composer_manager/composer_manager.module',
          'basename' => 'composer_manager.module',
          'name' => 'composer_manager',
          'info' => 
          array (
            'name' => 'Composer Manager',
            'description' => 'Provides consolidated management of third-party, Composer-compatible packages that are required by contributed modules.',
            'package' => 'Other',
            'core' => '7.x',
            'php' => '5.3',
            'configure' => 'admin/config/system/composer-manager',
            'version' => '7.x-1.8',
            'project' => 'composer_manager',
            'datestamp' => '1446212041',
            'dependencies' => 
            array (
            ),
          ),
          'schema_version' => '7100',
          'version' => '7.x-1.8',
        ),
        'ctools_access_ruleset' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
          'basename' => 'ctools_access_ruleset.module',
          'name' => 'ctools_access_ruleset',
          'info' => 
          array (
            'name' => 'Custom rulesets',
            'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
            'core' => '7.x',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'version' => '7.x-1.15',
            'project' => 'ctools',
            'datestamp' => '1549603691',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.15',
        ),
        'term_depth' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/ctools/term_depth/term_depth.module',
          'basename' => 'term_depth.module',
          'name' => 'term_depth',
          'info' => 
          array (
            'name' => 'Term Depth access',
            'description' => 'Controls access to context based upon term depth',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'package' => 'Chaos tool suite',
            'version' => '7.x-1.15',
            'project' => 'ctools',
            'datestamp' => '1549603691',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.15',
        ),
        'stylizer' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/ctools/stylizer/stylizer.module',
          'basename' => 'stylizer.module',
          'name' => 'stylizer',
          'info' => 
          array (
            'name' => 'Stylizer',
            'description' => 'Create custom styles for applications such as Panels.',
            'core' => '7.x',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'color',
            ),
            'version' => '7.x-1.15',
            'project' => 'ctools',
            'datestamp' => '1549603691',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.15',
        ),
        'bulk_export' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/ctools/bulk_export/bulk_export.module',
          'basename' => 'bulk_export.module',
          'name' => 'bulk_export',
          'info' => 
          array (
            'name' => 'Bulk Export',
            'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'package' => 'Chaos tool suite',
            'version' => '7.x-1.15',
            'project' => 'ctools',
            'datestamp' => '1549603691',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.15',
        ),
        'ctools_custom_content' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/ctools/ctools_custom_content/ctools_custom_content.module',
          'basename' => 'ctools_custom_content.module',
          'name' => 'ctools_custom_content',
          'info' => 
          array (
            'name' => 'Custom content panes',
            'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
            'core' => '7.x',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'version' => '7.x-1.15',
            'project' => 'ctools',
            'datestamp' => '1549603691',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.15',
        ),
        'ctools_ajax_sample' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
          'basename' => 'ctools_ajax_sample.module',
          'name' => 'ctools_ajax_sample',
          'info' => 
          array (
            'name' => 'Chaos Tools (CTools) AJAX Example',
            'description' => 'Shows how to use the power of Chaos AJAX.',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'core' => '7.x',
            'version' => '7.x-1.15',
            'project' => 'ctools',
            'datestamp' => '1549603691',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.15',
        ),
        'ctools_plugin_example' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/ctools/ctools_plugin_example/ctools_plugin_example.module',
          'basename' => 'ctools_plugin_example.module',
          'name' => 'ctools_plugin_example',
          'info' => 
          array (
            'name' => 'Chaos Tools (CTools) Plugin Example',
            'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'panels',
              2 => 'page_manager',
              3 => 'advanced_help',
            ),
            'core' => '7.x',
            'version' => '7.x-1.15',
            'project' => 'ctools',
            'datestamp' => '1549603691',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.15',
        ),
        'views_content' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/ctools/views_content/views_content.module',
          'basename' => 'views_content.module',
          'name' => 'views_content',
          'info' => 
          array (
            'name' => 'Views content panes',
            'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'views',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
              1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
              2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
            ),
            'version' => '7.x-1.15',
            'project' => 'ctools',
            'datestamp' => '1549603691',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.15',
        ),
        'page_manager' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/ctools/page_manager/page_manager.module',
          'basename' => 'page_manager.module',
          'name' => 'page_manager',
          'info' => 
          array (
            'name' => 'Page manager',
            'description' => 'Provides a UI and API to manage pages within the site.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'package' => 'Chaos tool suite',
            'files' => 
            array (
              0 => 'tests/head_links.test',
            ),
            'version' => '7.x-1.15',
            'project' => 'ctools',
            'datestamp' => '1549603691',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.15',
        ),
        'ctools' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/ctools/ctools.module',
          'basename' => 'ctools.module',
          'name' => 'ctools',
          'info' => 
          array (
            'name' => 'Chaos tools',
            'description' => 'A library of helpful tools by Merlin of Chaos.',
            'core' => '7.x',
            'package' => 'Chaos tool suite',
            'files' => 
            array (
              0 => 'includes/context.inc',
              1 => 'includes/css-cache.inc',
              2 => 'includes/math-expr.inc',
              3 => 'includes/stylizer.inc',
              4 => 'tests/context.test',
              5 => 'tests/css.test',
              6 => 'tests/css_cache.test',
              7 => 'tests/ctools.plugins.test',
              8 => 'tests/ctools.test',
              9 => 'tests/math_expression.test',
              10 => 'tests/math_expression_stack.test',
              11 => 'tests/object_cache.test',
              12 => 'tests/object_cache_unit.test',
              13 => 'tests/page_tokens.test',
            ),
            'version' => '7.x-1.15',
            'project' => 'ctools',
            'datestamp' => '1549603691',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7003',
          'version' => '7.x-1.15',
        ),
        'actions_permissions' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/views_bulk_operations/actions_permissions.module',
          'basename' => 'actions_permissions.module',
          'name' => 'actions_permissions',
          'info' => 
          array (
            'name' => 'Actions permissions (VBO)',
            'description' => 'Provides permission-based access control for actions. Used by Views Bulk Operations.',
            'package' => 'Administration',
            'core' => '7.x',
            'version' => '7.x-3.5',
            'project' => 'views_bulk_operations',
            'datestamp' => '1525821486',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-3.5',
        ),
        'views_bulk_operations' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/views_bulk_operations/views_bulk_operations.module',
          'basename' => 'views_bulk_operations.module',
          'name' => 'views_bulk_operations',
          'info' => 
          array (
            'name' => 'Views Bulk Operations',
            'description' => 'Provides a way of selecting multiple rows and applying operations to them.',
            'dependencies' => 
            array (
              0 => 'entity',
              1 => 'views (>=3.12)',
            ),
            'package' => 'Views',
            'core' => '7.x',
            'php' => '5.2.9',
            'files' => 
            array (
              0 => 'plugins/operation_types/base.class.php',
              1 => 'views/views_bulk_operations_handler_field_operations.inc',
            ),
            'version' => '7.x-3.5',
            'project' => 'views_bulk_operations',
            'datestamp' => '1525821486',
          ),
          'schema_version' => 0,
          'version' => '7.x-3.5',
        ),
        'adminrole' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/adminrole/adminrole.module',
          'basename' => 'adminrole.module',
          'name' => 'adminrole',
          'info' => 
          array (
            'name' => 'Admin Role',
            'description' => 'Automatically assign all permissions to an admin role.',
            'package' => 'Administration',
            'core' => '7.x',
            'version' => '7.x-1.1',
            'project' => 'adminrole',
            'datestamp' => '1448993658',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.1',
        ),
        'token' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/token/token.module',
          'basename' => 'token.module',
          'name' => 'token',
          'info' => 
          array (
            'name' => 'Token',
            'description' => 'Provides a user interface for the Token API and some missing core tokens.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'token.test',
            ),
            'version' => '7.x-1.7',
            'project' => 'token',
            'datestamp' => '1485316088',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'version' => '7.x-1.7',
        ),
        'openidadmin' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/openidadmin/openidadmin.module',
          'basename' => 'openidadmin.module',
          'name' => 'openidadmin',
          'info' => 
          array (
            'name' => 'OpenID Admin',
            'description' => 'Allows bulk operations for OpenID administration.',
            'dependencies' => 
            array (
              0 => 'openid',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'openidadmin.module',
            ),
            'version' => '7.x-1.0',
            'project' => 'openidadmin',
            'datestamp' => '1284569742',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0',
        ),
      ),
      'themes' => 
      array (
        'boots' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/themes/boots/boots.info',
          'basename' => 'boots.info',
          'name' => 'Boots',
          'info' => 
          array (
            'name' => 'Boots',
            'description' => 'Bootstrap-powered theme for devshop.',
            'core' => '7.x',
            'engine' => 'phptemplate',
            'base theme' => 'bootstrap',
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'boots.css',
                1 => 'fontawesome/css/font-awesome.min.css',
              ),
            ),
            'scripts' => 
            array (
              0 => 'js/jquery.matchHeight.js',
              1 => 'js/jquery.timeago.js',
              2 => 'js/boots.js',
            ),
            'settings' => 
            array (
              'toggle_logo' => '1',
              'bootstrap_fluid_container' => '1',
              'bootstrap_navbar_position' => 'static-top',
              'bootstrap_navbar_inverse' => '1',
              'bootstrap_region_well-sidebar_first' => '0',
              'bootstrap_cdn_provider' => 'custom',
              'bootstrap_cdn_custom_css' => '/profiles/devmaster/themes/boots/bootstrap/css/bootstrap.css',
              'bootstrap_cdn_custom_css_min' => '/profiles/devmaster/themes/boots/bootstrap/css/bootstrap.min.css',
              'bootstrap_cdn_custom_js' => '/profiles/devmaster/themes/boots/bootstrap/js/bootstrap.js',
              'bootstrap_cdn_custom_js_min' => '/profiles/devmaster/themes/boots/bootstrap/js/bootstrap.min.js',
              'bootstrap_forms_smart_descriptions_limit' => '40',
            ),
          ),
          'version' => NULL,
        ),
        'eldir' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/themes/contrib/eldir/eldir.info',
          'basename' => 'eldir.info',
          'name' => 'Eldir',
          'info' => 
          array (
            'name' => 'Eldir',
            'description' => 'Companion theme for the Aegir hosting system.',
            'version' => '7.x-3.170',
            'core' => '7.x',
            'engine' => 'phptemplate',
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'style.css',
              ),
            ),
            'stylesheets-conditional' => 
            array (
              'lt IE 7' => 
              array (
                'all' => 
                array (
                  0 => 'ie6.css',
                ),
              ),
            ),
            'regions' => 
            array (
              'sidebar_first' => 'Sidebar top',
              'sidebar_second' => 'Sidebar bottom',
              'content' => 'Content',
              'content_bottom' => 'Content bottom',
              'header' => 'Header',
              'footer' => 'Footer',
              'help' => 'Help',
            ),
            'project' => 'eldir',
            'datestamp' => '1545248021',
          ),
          'version' => '7.x-3.170',
        ),
        'bootstrap' => 
        array (
          'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/themes/contrib/bootstrap/bootstrap.info',
          'basename' => 'bootstrap.info',
          'name' => 'Bootstrap',
          'info' => 
          array (
            'name' => 'Bootstrap',
            'description' => 'Built to use Bootstrap, a sleek, intuitive, and powerful front-end framework for faster and easier web development.',
            'core' => '7.x',
            'php' => '5.3.0',
            'simplytest_dependencies' => 
            array (
              0 => 'jquery_update',
            ),
            'regions' => 
            array (
              'navigation' => 'Navigation',
              'header' => 'Top Bar',
              'highlighted' => 'Highlighted',
              'help' => 'Help',
              'content' => 'Content',
              'sidebar_first' => 'Primary',
              'sidebar_second' => 'Secondary',
              'footer' => 'Footer',
              'page_top' => 'Page top',
              'page_bottom' => 'Page bottom',
            ),
            'settings' => 
            array (
              'bootstrap_fluid_container' => '0',
              'bootstrap_button_size' => '',
              'bootstrap_button_colorize' => '1',
              'bootstrap_button_iconize' => '1',
              'bootstrap_image_shape' => '',
              'bootstrap_image_responsive' => '1',
              'bootstrap_table_bordered' => '0',
              'bootstrap_table_condensed' => '0',
              'bootstrap_table_hover' => '1',
              'bootstrap_table_striped' => '1',
              'bootstrap_table_responsive' => '-1',
              'bootstrap_breadcrumb' => '1',
              'bootstrap_breadcrumb_home' => '0',
              'bootstrap_breadcrumb_title' => '1',
              'bootstrap_navbar_position' => '',
              'bootstrap_navbar_inverse' => '0',
              'bootstrap_pager_first_and_last' => '1',
              'bootstrap_region_well-navigation' => '',
              'bootstrap_region_well-header' => '',
              'bootstrap_region_well-highlighted' => '',
              'bootstrap_region_well-help' => '',
              'bootstrap_region_well-content' => '',
              'bootstrap_region_well-sidebar_first' => 'well',
              'bootstrap_region_well-sidebar_second' => '',
              'bootstrap_region_well-footer' => '',
              'bootstrap_anchors_fix' => '0',
              'bootstrap_anchors_smooth_scrolling' => '0',
              'bootstrap_forms_required_has_error' => '0',
              'bootstrap_forms_has_error_value_toggle' => '1',
              'bootstrap_forms_smart_descriptions' => '1',
              'bootstrap_forms_smart_descriptions_limit' => '250',
              'bootstrap_forms_smart_descriptions_allowed_tags' => 'b, code, em, i, kbd, span, strong',
              'bootstrap_popover_enabled' => '1',
              'bootstrap_popover_animation' => '1',
              'bootstrap_popover_html' => '0',
              'bootstrap_popover_placement' => 'right',
              'bootstrap_popover_selector' => '',
              'bootstrap_popover_trigger' => 
              array (
                '\'hover\'' => '0',
                '\'focus\'' => '0',
                '\'click\'' => 'click',
              ),
              'bootstrap_popover_trigger_autoclose' => '1',
              'bootstrap_popover_title' => '',
              'bootstrap_popover_content' => '',
              'bootstrap_popover_delay' => '0',
              'bootstrap_popover_container' => 'body',
              'bootstrap_tooltip_enabled' => '1',
              'bootstrap_tooltip_animation' => '1',
              'bootstrap_tooltip_html' => '0',
              'bootstrap_tooltip_placement' => 'auto left',
              'bootstrap_tooltip_selector' => '',
              'bootstrap_tooltip_trigger' => 
              array (
                '\'hover\'' => 'hover',
                '\'focus\'' => 'focus',
                '\'click\'' => '0',
              ),
              'bootstrap_tooltip_delay' => '0',
              'bootstrap_tooltip_container' => 'body',
              'bootstrap_cdn_provider' => 'jsdelivr',
              'bootstrap_cdn_custom_css' => 'https://cdn.jsdelivr.net/npm/bootstrap@3.4.0/dist/css/bootstrap.css',
              'bootstrap_cdn_custom_css_min' => 'https://cdn.jsdelivr.net/npm/bootstrap@3.4.0/dist/css/bootstrap.min.css',
              'bootstrap_cdn_custom_js' => 'https://cdn.jsdelivr.net/npm/bootstrap@3.4.0/dist/js/bootstrap.js',
              'bootstrap_cdn_custom_js_min' => 'https://cdn.jsdelivr.net/npm/bootstrap@3.4.0/dist/js/bootstrap.min.js',
              'bootstrap_cdn_jsdelivr_version' => '3.4.0',
              'bootstrap_cdn_jsdelivr_theme' => 'bootstrap',
              'toggle_name' => '1',
              'toggle_search' => '1',
              'jquery_update_jquery_version' => '2.1',
            ),
            'exclude' => 
            array (
              'css' => 
              array (
                0 => 'misc/vertical-tabs.css',
                1 => 'modules/aggregator/aggregator.css',
                2 => 'modules/book/book.css',
                3 => 'modules/comment/comment.css',
                4 => 'modules/dblog/dblog.css',
                5 => 'modules/file/file.css',
                6 => 'modules/filter/filter.css',
                7 => 'modules/forum/forum.css',
                8 => 'modules/help/help.css',
                9 => 'modules/menu/menu.css',
                10 => 'modules/openid/openid.css',
                11 => 'modules/poll/poll.css',
                12 => 'modules/search/search.css',
                13 => 'modules/statistics/statistics.css',
                14 => 'modules/syslog/syslog.css',
                15 => 'modules/system/maintenance.css',
                16 => 'modules/system/system.maintenance.css',
                17 => 'modules/system/system.menus.css',
                18 => 'modules/system/system.messages.css',
                19 => 'modules/system/system.theme.css',
                20 => 'modules/taxonomy/taxonomy.css',
                21 => 'modules/tracker/tracker.css',
                22 => 'modules/update/update.css',
                23 => 'modules/user/user.css',
              ),
            ),
            'breakpoints' => 
            array (
              'screen-xs-max' => '(max-width: 767px)',
              'screen-sm-min' => '(min-width: 768px)',
              'screen-sm-max' => '(max-width: 991px)',
              'screen-md-min' => '(min-width: 992px)',
              'screen-md-max' => '(max-width: 1199px)',
              'screen-lg-min' => '(min-width: 1200px)',
            ),
            'multipliers' => 
            array (
              'screen-xs-max' => 
              array (
                0 => '1.5x',
                1 => '2x',
              ),
              'screen-sm-min' => 
              array (
                0 => '1.5x',
                1 => '2x',
              ),
              'screen-sm-max' => 
              array (
                0 => '1.5x',
                1 => '2x',
              ),
              'screen-md-min' => 
              array (
                0 => '1.5x',
                1 => '2x',
              ),
              'screen-md-max' => 
              array (
                0 => '1.5x',
                1 => '2x',
              ),
              'screen-lg-min' => 
              array (
                0 => '1.5x',
                1 => '2x',
              ),
            ),
            'version' => '7.x-3.23',
            'project' => 'bootstrap',
            'datestamp' => '1548102185',
          ),
          'version' => '7.x-3.23',
        ),
      ),
    ),
    'standard' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'minimal' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
  ),
);