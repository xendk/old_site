<?php

$options['sites'] = array (
  0 => 'xen.dk',
);
$options['profiles'] = array (
  0 => 'default',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'user' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
        'info' => 
        array (
          'name' => 'User',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core - required',
          'version' => '6.14',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'upload' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/upload/upload.module',
        'basename' => 'upload.module',
        'name' => 'upload',
        'info' => 
        array (
          'name' => 'Upload',
          'description' => 'Allows users to upload and attach files to content.',
          'package' => 'Core - optional',
          'version' => '6.14',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'update' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
        'info' => 
        array (
          'name' => 'Update status',
          'description' => 'Checks the status of available updates for Drupal and your installed modules and themes.',
          'version' => '6.14',
          'package' => 'Core - optional',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'trigger' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
        'info' => 
        array (
          'name' => 'Trigger',
          'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
          'package' => 'Core - optional',
          'version' => '6.14',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'translation' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/translation/translation.module',
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
          'package' => 'Core - optional',
          'version' => '6.14',
          'core' => '6.x',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'tracker' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'tracker',
        'info' => 
        array (
          'name' => 'Tracker',
          'description' => 'Enables tracking of recent posts for users.',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'package' => 'Core - optional',
          'version' => '6.14',
          'core' => '6.x',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'throttle' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/throttle/throttle.module',
        'basename' => 'throttle.module',
        'name' => 'throttle',
        'info' => 
        array (
          'name' => 'Throttle',
          'description' => 'Handles the auto-throttling mechanism, to control site congestion.',
          'package' => 'Core - optional',
          'version' => '6.14',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'taxonomy' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core - optional',
          'version' => '6.14',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'system' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
        'info' => 
        array (
          'name' => 'System',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core - required',
          'version' => '6.14',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6053',
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'syslog' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core - optional',
          'version' => '6.14',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'statistics' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'description' => 'Logs access statistics for your site.',
          'package' => 'Core - optional',
          'version' => '6.14',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'search' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
        'info' => 
        array (
          'name' => 'Search',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core - optional',
          'version' => '6.14',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'profile' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/profile/profile.module',
        'basename' => 'profile.module',
        'name' => 'profile',
        'info' => 
        array (
          'name' => 'Profile',
          'description' => 'Supports configurable user profiles.',
          'package' => 'Core - optional',
          'version' => '6.14',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'poll' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
        'info' => 
        array (
          'name' => 'Poll',
          'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
          'package' => 'Core - optional',
          'version' => '6.14',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'ping' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/ping/ping.module',
        'basename' => 'ping.module',
        'name' => 'ping',
        'info' => 
        array (
          'name' => 'Ping',
          'description' => 'Alerts other sites when your site has been updated.',
          'package' => 'Core - optional',
          'version' => '6.14',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'php' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/php/php.module',
        'basename' => 'php.module',
        'name' => 'php',
        'info' => 
        array (
          'name' => 'PHP filter',
          'description' => 'Allows embedded PHP code/snippets to be evaluated.',
          'package' => 'Core - optional',
          'version' => '6.14',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'path' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
        'info' => 
        array (
          'name' => 'Path',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core - optional',
          'version' => '6.14',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'openid' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
        'info' => 
        array (
          'name' => 'OpenID',
          'description' => 'Allows users to log into your site using OpenID.',
          'version' => '6.14',
          'package' => 'Core - optional',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'node' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
        'info' => 
        array (
          'name' => 'Node',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core - required',
          'version' => '6.14',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'menu' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
        'info' => 
        array (
          'name' => 'Menu',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core - optional',
          'version' => '6.14',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'locale' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
        'info' => 
        array (
          'name' => 'Locale',
          'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
          'package' => 'Core - optional',
          'version' => '6.14',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6005',
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'help' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
        'info' => 
        array (
          'name' => 'Help',
          'description' => 'Manages the display of online help.',
          'package' => 'Core - optional',
          'version' => '6.14',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'forum' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'forum',
        'info' => 
        array (
          'name' => 'Forum',
          'description' => 'Enables threaded discussions about general topics.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'comment',
          ),
          'package' => 'Core - optional',
          'version' => '6.14',
          'core' => '6.x',
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'filter' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
        'info' => 
        array (
          'name' => 'Filter',
          'description' => 'Handles the filtering of content in preparation for display.',
          'package' => 'Core - required',
          'version' => '6.14',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'dblog' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
        'info' => 
        array (
          'name' => 'Database logging',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core - optional',
          'version' => '6.14',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'contact' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
        'info' => 
        array (
          'name' => 'Contact',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core - optional',
          'version' => '6.14',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'comment' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
        'info' => 
        array (
          'name' => 'Comment',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core - optional',
          'version' => '6.14',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6003',
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'color' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
        'info' => 
        array (
          'name' => 'Color',
          'description' => 'Allows the user to change the color scheme of certain themes.',
          'package' => 'Core - optional',
          'version' => '6.14',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'book' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
        'info' => 
        array (
          'name' => 'Book',
          'description' => 'Allows users to structure site pages in a hierarchy or outline.',
          'package' => 'Core - optional',
          'version' => '6.14',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'blogapi' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/blogapi/blogapi.module',
        'basename' => 'blogapi.module',
        'name' => 'blogapi',
        'info' => 
        array (
          'name' => 'Blog API',
          'description' => 'Allows users to post content using applications that support XML-RPC blog APIs.',
          'package' => 'Core - optional',
          'version' => '6.14',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'blog' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
        'info' => 
        array (
          'name' => 'Blog',
          'description' => 'Enables keeping easily and regularly updated user web pages or blogs.',
          'package' => 'Core - optional',
          'version' => '6.14',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'block' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
        'info' => 
        array (
          'name' => 'Block',
          'description' => 'Controls the boxes that are displayed around the main content.',
          'package' => 'Core - required',
          'version' => '6.14',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'aggregator' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
          'package' => 'Core - optional',
          'version' => '6.14',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.14',
      ),
    ),
    'themes' => 
    array (
      'pushbutton' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/themes/pushbutton/pushbutton.info',
        'basename' => 'pushbutton.info',
        'name' => 'Pushbutton',
        'info' => 
        array (
          'name' => 'Pushbutton',
          'description' => 'Tabled, multi-column theme in blue and orange tones.',
          'version' => '6.14',
          'core' => '6.x',
          'engine' => 'phptemplate',
        ),
        'owner' => '/var/www/aegir/drupal-6.x/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'minnelli' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/themes/garland/minnelli/minnelli.info',
        'basename' => 'minnelli.info',
        'name' => 'Minnelli',
        'info' => 
        array (
          'name' => 'Minnelli',
          'description' => 'Tableless, recolorable, multi-column, fixed width theme.',
          'version' => '6.14',
          'core' => '6.x',
          'base theme' => 'garland',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'minnelli.css',
            ),
          ),
        ),
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'garland' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
        'info' => 
        array (
          'name' => 'Garland',
          'description' => 'Tableless, recolorable, multi-column, fluid width theme (default).',
          'version' => '6.14',
          'core' => '6.x',
          'engine' => 'phptemplate',
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
        ),
        'owner' => '/var/www/aegir/drupal-6.x/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'marvin' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/themes/chameleon/marvin/marvin.info',
        'basename' => 'marvin.info',
        'name' => 'Marvin',
        'info' => 
        array (
          'name' => 'Marvin',
          'description' => 'Boxy tabled theme in all grays.',
          'regions' => 
          array (
            'left' => 'Left sidebar',
            'right' => 'Right sidebar',
          ),
          'version' => '6.14',
          'core' => '6.x',
          'base theme' => 'chameleon',
        ),
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'chameleon' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/themes/chameleon/chameleon.info',
        'basename' => 'chameleon.info',
        'name' => 'Chameleon',
        'info' => 
        array (
          'name' => 'Chameleon',
          'description' => 'Minimalist tabled theme with light colors.',
          'regions' => 
          array (
            'left' => 'Left sidebar',
            'right' => 'Right sidebar',
          ),
          'features' => 
          array (
            0 => 'logo',
            1 => 'favicon',
            2 => 'name',
            3 => 'slogan',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'style.css',
              1 => 'common.css',
            ),
          ),
          'version' => '6.14',
          'core' => '6.x',
        ),
        'project' => 'drupal',
        'version' => '6.14',
      ),
      'bluemarine' => 
      array (
        'filename' => '/storage/www/aegir/drupal-6.x/themes/bluemarine/bluemarine.info',
        'basename' => 'bluemarine.info',
        'name' => 'Bluemarine',
        'info' => 
        array (
          'name' => 'Bluemarine',
          'description' => 'Table-based multi-column theme with a marine and ash color scheme.',
          'version' => '6.14',
          'core' => '6.x',
          'engine' => 'phptemplate',
        ),
        'owner' => '/var/www/aegir/drupal-6.x/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
        'project' => 'drupal',
        'version' => '6.14',
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '6.14',
        'description' => 'This platform is running Drupal 6.14',
      ),
    ),
    'profiles' => 
    array (
      'default' => 
      array (
        'name' => 'default',
        'filename' => '/storage/www/aegir/drupal-6.x/profiles/default/default.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Drupal',
          'description' => 'Select this profile to enable some basic Drupal functionality and the default theme.',
          'languages' => 
          array (
            0 => 'en',
          ),
          'version' => '6.14',
        ),
        'version' => '6.14',
      ),
    ),
  ),
  'profiles' => 
  array (
    'default' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
  ),
  'sites' => 
  array (
    'xen.dk' => 
    array (
      'modules' => 
      array (
        'mollom' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/mollom/mollom.module',
          'basename' => 'mollom.module',
          'name' => 'mollom',
          'info' => 
          array (
            'name' => 'Mollom',
            'description' => 'Protects against comment and contact form spam.',
            'core' => '6.x',
            'dependencies' => 
            array (
            ),
            'version' => '6.x-1.10',
            'php' => '4.3.5',
          ),
          'schema_version' => '4',
          'project' => 'mollom',
          'version' => '6.x-1.10',
        ),
        'cvs_deploy' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/cvs_deploy/cvs_deploy.module',
          'basename' => 'cvs_deploy.module',
          'name' => 'cvs_deploy',
          'info' => 
          array (
            'name' => 'CVS Deploy',
            'description' => 'Helps sites that are deployed directly from a CVS workspace.',
            'core' => '6.x',
            'dependencies' => 
            array (
            ),
            'version' => '6.x-1.1',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'cvs_deploy',
          'version' => '6.x-1.1',
        ),
        'geshifilter' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/geshifilter/geshifilter.module',
          'basename' => 'geshifilter.module',
          'name' => 'geshifilter',
          'info' => 
          array (
            'name' => 'GeSHi Filter',
            'description' => 'Provides a filter to highlight source code using the GeSHi library (Generic Syntax Highlighter)',
            'package' => 'Filters',
            'core' => '6.x',
            'dependencies' => 
            array (
            ),
            'version' => '6.x-1.2',
            'php' => '4.3.5',
          ),
          'schema_version' => '1',
          'project' => 'geshifilter',
          'version' => '6.x-1.2',
        ),
        'geshinode' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/geshifilter/geshinode.module',
          'basename' => 'geshinode.module',
          'name' => 'geshinode',
          'info' => 
          array (
            'name' => 'GeSHi node',
            'description' => 'Provides source code node with GeSHi syntax highlighting.',
            'package' => 'Filters',
            'dependencies' => 
            array (
              0 => 'geshifilter',
            ),
            'core' => '6.x',
            'version' => '6.x-1.2',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'geshifilter',
          'version' => '6.x-1.2',
        ),
        'googleanalytics' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/google_analytics/googleanalytics.module',
          'basename' => 'googleanalytics.module',
          'name' => 'googleanalytics',
          'info' => 
          array (
            'name' => 'Google Analytics',
            'description' => 'Adds Google Analytics javascript tracking code to all your site\'s pages.',
            'core' => '6.x',
            'package' => 'Statistics',
            'dependencies' => 
            array (
            ),
            'version' => '6.x-2.2',
            'php' => '4.3.5',
          ),
          'schema_version' => '6200',
          'project' => 'google_analytics',
          'version' => '6.x-2.2',
        ),
        'performance' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/devel/performance/performance.module',
          'basename' => 'performance.module',
          'name' => 'performance',
          'info' => 
          array (
            'name' => 'Performance Logging',
            'description' => 'Logs detailed and/or summary page generation time and memory consumption for page requests.',
            'package' => 'Development',
            'core' => '6.x',
            'dependencies' => 
            array (
            ),
            'version' => '6.x-1.18',
            'php' => '4.3.5',
          ),
          'schema_version' => '2',
          'project' => 'devel',
          'version' => '6.x-1.18',
        ),
        'devel' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/devel/devel.module',
          'basename' => 'devel.module',
          'name' => 'devel',
          'info' => 
          array (
            'name' => 'Devel',
            'description' => 'Various blocks, pages, and functions for developers.',
            'package' => 'Development',
            'dependencies' => 
            array (
              0 => 'menu',
            ),
            'core' => '6.x',
            'version' => '6.x-1.18',
            'php' => '4.3.5',
          ),
          'schema_version' => '6002',
          'project' => 'devel',
          'version' => '6.x-1.18',
        ),
        'devel_generate' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/devel/devel_generate.module',
          'basename' => 'devel_generate.module',
          'name' => 'devel_generate',
          'info' => 
          array (
            'name' => 'Devel generate',
            'description' => 'Generate dummy users, nodes, and taxonomy terms.',
            'package' => 'Development',
            'core' => '6.x',
            'dependencies' => 
            array (
            ),
            'version' => '6.x-1.18',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'devel',
          'version' => '6.x-1.18',
        ),
        'devel_node_access' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/devel/devel_node_access.module',
          'basename' => 'devel_node_access.module',
          'name' => 'devel_node_access',
          'info' => 
          array (
            'name' => 'Devel node access',
            'description' => 'Developer block and page illustrating relevant node_access records.',
            'package' => 'Development',
            'core' => '6.x',
            'dependencies' => 
            array (
            ),
            'version' => '6.x-1.18',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'devel',
          'version' => '6.x-1.18',
        ),
        'devel_themer' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/devel/devel_themer.module',
          'basename' => 'devel_themer.module',
          'name' => 'devel_themer',
          'info' => 
          array (
            'name' => 'Theme developer',
            'description' => 'Essential theme API information for theme developers',
            'package' => 'Development',
            'dependencies' => 
            array (
              0 => 'devel',
            ),
            'core' => '6.x',
            'version' => '6.x-1.18',
            'php' => '4.3.5',
          ),
          'schema_version' => '6001',
          'project' => 'devel',
          'version' => '6.x-1.18',
        ),
        'img_assist' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/img_assist/img_assist.module',
          'basename' => 'img_assist.module',
          'name' => 'img_assist',
          'info' => 
          array (
            'name' => 'Image assist',
            'description' => 'This module allows users to upload and insert inline images into posts. It automatically generates an Add image link under the textarea fields of your choice.',
            'dependencies' => 
            array (
              0 => 'image',
              1 => 'views',
            ),
            'package' => 'Image',
            'core' => '6.x',
            'version' => '6.x-2.0-alpha4',
            'php' => '4.3.5',
          ),
          'schema_version' => '6200',
          'project' => 'img_assist',
          'version' => '6.x-2.0-alpha4',
        ),
        'image_import' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/image/contrib/image_import/image_import.module',
          'basename' => 'image_import.module',
          'name' => 'image_import',
          'info' => 
          array (
            'name' => 'Image Import',
            'description' => 'Allows batches of images to be imported from a directory on the server.',
            'package' => 'Image',
            'dependencies' => 
            array (
              0 => 'image',
            ),
            'core' => '6.x',
            'version' => '6.x-1.0-beta3',
            'php' => '4.3.5',
          ),
          'schema_version' => '1',
          'project' => 'image',
          'version' => '6.x-1.0-beta3',
        ),
        'image_im_advanced' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/image/contrib/image_im_advanced/image_im_advanced.module',
          'basename' => 'image_im_advanced.module',
          'name' => 'image_im_advanced',
          'info' => 
          array (
            'name' => 'ImageMagick Advanced Options',
            'description' => 'Adds advanced options to the ImageMagick image toolkit.',
            'package' => 'Image',
            'core' => '6.x',
            'dependencies' => 
            array (
            ),
            'version' => '6.x-1.0-beta3',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'image',
          'version' => '6.x-1.0-beta3',
        ),
        'image_gallery' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/image/contrib/image_gallery/image_gallery.module',
          'basename' => 'image_gallery.module',
          'name' => 'image_gallery',
          'info' => 
          array (
            'name' => 'Image Gallery',
            'description' => 'Allows sorting and displaying of image galleries based on categories.',
            'package' => 'Image',
            'dependencies' => 
            array (
              0 => 'image',
              1 => 'taxonomy',
            ),
            'core' => '6.x',
            'version' => '6.x-1.0-beta3',
            'php' => '4.3.5',
          ),
          'schema_version' => '6101',
          'project' => 'image',
          'version' => '6.x-1.0-beta3',
        ),
        'image_attach' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/image/contrib/image_attach/image_attach.module',
          'basename' => 'image_attach.module',
          'name' => 'image_attach',
          'info' => 
          array (
            'name' => 'Image Attach',
            'description' => 'Allows easy attaching of image nodes to other content types.',
            'package' => 'Image',
            'dependencies' => 
            array (
              0 => 'image',
            ),
            'core' => '6.x',
            'version' => '6.x-1.0-beta3',
            'php' => '4.3.5',
          ),
          'schema_version' => '6103',
          'project' => 'image',
          'version' => '6.x-1.0-beta3',
        ),
        'image' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/image/image.module',
          'basename' => 'image.module',
          'name' => 'image',
          'info' => 
          array (
            'name' => 'Image',
            'description' => 'Allows uploading, resizing and viewing of images.',
            'package' => 'Image',
            'core' => '6.x',
            'dependencies' => 
            array (
            ),
            'version' => '6.x-1.0-beta3',
            'php' => '4.3.5',
          ),
          'schema_version' => '6103',
          'project' => 'image',
          'version' => '6.x-1.0-beta3',
        ),
        'path_redirect' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/path_redirect/path_redirect.module',
          'basename' => 'path_redirect.module',
          'name' => 'path_redirect',
          'info' => 
          array (
            'name' => 'Path redirect',
            'description' => 'Redirect users from one URL to another.',
            'core' => '6.x',
            'enhances' => 
            array (
              0 => 'pathauto',
            ),
            'suggests' => 
            array (
              0 => 'global_redirect',
            ),
            'dependencies' => 
            array (
            ),
            'version' => '6.x-1.0-beta4',
            'php' => '4.3.5',
          ),
          'schema_version' => '6101',
          'project' => 'path_redirect',
          'version' => '6.x-1.0-beta4',
        ),
        'pathauto' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/pathauto/pathauto.module',
          'basename' => 'pathauto.module',
          'name' => 'pathauto',
          'info' => 
          array (
            'name' => 'Pathauto',
            'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
            'dependencies' => 
            array (
              0 => 'path',
              1 => 'token',
            ),
            'suggests' => 
            array (
              0 => 'path_redirect',
            ),
            'core' => '6.x',
            'version' => '6.x-1.2',
            'php' => '4.3.5',
          ),
          'schema_version' => '7',
          'project' => 'pathauto',
          'version' => '6.x-1.2',
        ),
        'token' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/token/token.module',
          'basename' => 'token.module',
          'name' => 'token',
          'info' => 
          array (
            'name' => 'Token',
            'description' => 'Provides a shared API for replacement of textual placeholders with actual data.',
            'core' => '6.x',
            'dependencies' => 
            array (
            ),
            'version' => '6.x-1.12',
            'php' => '4.3.5',
          ),
          'schema_version' => '1',
          'project' => 'token',
          'version' => '6.x-1.12',
        ),
        'token_actions' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/token/token_actions.module',
          'basename' => 'token_actions.module',
          'name' => 'token_actions',
          'info' => 
          array (
            'name' => 'Token actions',
            'description' => 'Provides enhanced versions of core Drupal actions using the Token module.',
            'dependencies' => 
            array (
              0 => 'token',
            ),
            'core' => '6.x',
            'version' => '6.x-1.12',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'token',
          'version' => '6.x-1.12',
        ),
        'tokenSTARTER' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/token/tokenSTARTER.module',
          'basename' => 'tokenSTARTER.module',
          'name' => 'tokenSTARTER',
          'info' => 
          array (
            'name' => 'TokenSTARTER',
            'description' => 'Provides additional tokens and a base on which to build your own tokens.',
            'dependencies' => 
            array (
              0 => 'token',
            ),
            'core' => '6.x',
            'version' => '6.x-1.12',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'token',
          'version' => '6.x-1.12',
        ),
        'views_export' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/views/views_export/views_export.module',
          'basename' => 'views_export.module',
          'name' => 'views_export',
          'info' => 
          array (
            'name' => 'Views exporter',
            'description' => 'Allows exporting multiple views at once.',
            'package' => 'Views',
            'dependencies' => 
            array (
              0 => 'views',
            ),
            'core' => '6.x',
            'version' => '6.x-2.6',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'views',
          'version' => '6.x-2.6',
        ),
        'views' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/views/views.module',
          'basename' => 'views.module',
          'name' => 'views',
          'info' => 
          array (
            'name' => 'Views',
            'description' => 'Create customized lists and queries from your database.',
            'package' => 'Views',
            'core' => '6.x',
            'dependencies' => 
            array (
            ),
            'version' => '6.x-2.6',
            'php' => '4.3.5',
          ),
          'schema_version' => '6006',
          'project' => 'views',
          'version' => '6.x-2.6',
        ),
        'views_ui' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/views/views_ui.module',
          'basename' => 'views_ui.module',
          'name' => 'views_ui',
          'info' => 
          array (
            'name' => 'Views UI',
            'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
            'package' => 'Views',
            'core' => '6.x',
            'dependencies' => 
            array (
              0 => 'views',
            ),
            'version' => '6.x-2.6',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'views',
          'version' => '6.x-2.6',
        ),
        'i18ntaxonomy' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/i18n/i18ntaxonomy/i18ntaxonomy.module',
          'basename' => 'i18ntaxonomy.module',
          'name' => 'i18ntaxonomy',
          'info' => 
          array (
            'name' => 'Taxonomy translation',
            'description' => 'Enables multilingual taxonomy.',
            'dependencies' => 
            array (
              0 => 'i18n',
              1 => 'taxonomy',
              2 => 'i18nstrings',
            ),
            'package' => 'Multilanguage',
            'core' => '6.x',
            'version' => '6.x-1.1',
            'php' => '4.3.5',
          ),
          'schema_version' => '6002',
          'project' => 'i18n',
          'version' => '6.x-1.1',
        ),
        'i18nsync' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/i18n/i18nsync/i18nsync.module',
          'basename' => 'i18nsync.module',
          'name' => 'i18nsync',
          'info' => 
          array (
            'name' => 'Synchronize translations',
            'description' => 'Synchronizes taxonomy and fields accross translations of the same content.',
            'dependencies' => 
            array (
              0 => 'i18n',
            ),
            'package' => 'Multilanguage',
            'core' => '6.x',
            'version' => '6.x-1.1',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'i18n',
          'version' => '6.x-1.1',
        ),
        'i18nstrings' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/i18n/i18nstrings/i18nstrings.module',
          'basename' => 'i18nstrings.module',
          'name' => 'i18nstrings',
          'info' => 
          array (
            'name' => 'String translation',
            'description' => 'Provides support for translation of user defined strings.',
            'dependencies' => 
            array (
              0 => 'locale',
            ),
            'package' => 'Multilanguage',
            'core' => '6.x',
            'version' => '6.x-1.1',
            'php' => '4.3.5',
          ),
          'schema_version' => '6003',
          'project' => 'i18n',
          'version' => '6.x-1.1',
        ),
        'i18nprofile' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/i18n/i18nprofile/i18nprofile.module',
          'basename' => 'i18nprofile.module',
          'name' => 'i18nprofile',
          'info' => 
          array (
            'name' => 'Profile translation',
            'description' => 'Enables multilingual profile fields.',
            'dependencies' => 
            array (
              0 => 'profile',
              1 => 'i18nstrings',
            ),
            'package' => 'Multilanguage',
            'core' => '6.x',
            'version' => '6.x-1.1',
            'php' => '4.3.5',
          ),
          'schema_version' => '3',
          'project' => 'i18n',
          'version' => '6.x-1.1',
        ),
        'i18npoll' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/i18n/i18npoll/i18npoll.module',
          'basename' => 'i18npoll.module',
          'name' => 'i18npoll',
          'info' => 
          array (
            'name' => 'Poll aggregate',
            'description' => 'Aggregates poll results for all translations.',
            'dependencies' => 
            array (
              0 => 'translation',
              1 => 'poll',
            ),
            'package' => 'Multilanguage',
            'core' => '6.x',
            'version' => '6.x-1.1',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'i18n',
          'version' => '6.x-1.1',
        ),
        'i18nmenu' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/i18n/i18nmenu/i18nmenu.module',
          'basename' => 'i18nmenu.module',
          'name' => 'i18nmenu',
          'info' => 
          array (
            'name' => 'Menu translation',
            'description' => 'Supports translatable custom menu items.',
            'dependencies' => 
            array (
              0 => 'i18n',
              1 => 'menu',
              2 => 'i18nblocks',
              3 => 'i18nstrings',
            ),
            'package' => 'Multilanguage',
            'core' => '6.x',
            'version' => '6.x-1.1',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'i18n',
          'version' => '6.x-1.1',
        ),
        'i18ncontent' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/i18n/i18ncontent/i18ncontent.module',
          'basename' => 'i18ncontent.module',
          'name' => 'i18ncontent',
          'info' => 
          array (
            'name' => 'Content type translation',
            'description' => 'Translates content type related strings: name, description, help text...',
            'dependencies' => 
            array (
              0 => 'i18n',
              1 => 'i18nstrings',
            ),
            'package' => 'Multilanguage',
            'core' => '6.x',
            'version' => '6.x-1.1',
            'php' => '4.3.5',
          ),
          'schema_version' => '6002',
          'project' => 'i18n',
          'version' => '6.x-1.1',
        ),
        'i18nblocks' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/i18n/i18nblocks/i18nblocks.module',
          'basename' => 'i18nblocks.module',
          'name' => 'i18nblocks',
          'info' => 
          array (
            'name' => 'Block translation',
            'description' => 'Enables multilingual blocks and block translation.',
            'dependencies' => 
            array (
              0 => 'i18n',
              1 => 'i18nstrings',
            ),
            'package' => 'Multilanguage',
            'core' => '6.x',
            'version' => '6.x-1.1',
            'php' => '4.3.5',
          ),
          'schema_version' => '3',
          'project' => 'i18n',
          'version' => '6.x-1.1',
        ),
        'i18n' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/i18n/i18n.module',
          'basename' => 'i18n.module',
          'name' => 'i18n',
          'info' => 
          array (
            'name' => 'Internationalization',
            'description' => 'Extends Drupal support for multilingual features.',
            'dependencies' => 
            array (
              0 => 'locale',
              1 => 'translation',
            ),
            'package' => 'Multilanguage',
            'core' => '6.x',
            'version' => '6.x-1.1',
            'php' => '4.3.5',
          ),
          'schema_version' => '10',
          'project' => 'i18n',
          'version' => '6.x-1.1',
        ),
        'admin_menu' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/modules/admin_menu/admin_menu.module',
          'basename' => 'admin_menu.module',
          'name' => 'admin_menu',
          'info' => 
          array (
            'name' => 'Administration menu',
            'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
            'package' => 'Administration',
            'core' => '6.x',
            'dependencies' => 
            array (
            ),
            'version' => '6.x-1.5',
            'php' => '4.3.5',
          ),
          'schema_version' => '6001',
          'project' => 'admin_menu',
          'version' => '6.x-1.5',
        ),
      ),
      'themes' => 
      array (
        'painted' => 
        array (
          'filename' => '/storage/www/aegir/drupal-6.x/sites/xen.dk/themes/painted/painted.info',
          'basename' => 'painted.info',
          'name' => 'Painted Wall',
          'info' => 
          array (
            'name' => 'Painted Wall',
            'description' => 'Like paint on a wall',
            'screenshot' => 'screenshot.png',
            'version' => '2.0 dev',
            'core' => '6.x',
            'engine' => 'phptemplate',
            'regions' => 
            array (
              'left' => 'Left sidebar',
              'right' => 'Right sidebar',
              'content_top' => 'Content Top',
              'content_bottom' => 'Content Bottom',
            ),
            'features' => 
            array (
              0 => 'logo',
              1 => 'name',
              2 => 'slogan',
              3 => 'mission',
              4 => 'node_user_picture',
              5 => 'comment_user_picture',
              6 => 'favicon',
              7 => 'primary_links',
              8 => 'secondary_links',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'css/style.css',
                1 => 'css/layout.css',
              ),
              'print' => 
              array (
                0 => 'css/print.css',
              ),
            ),
            'settings' => 
            array (
              'painted_header' => '1',
            ),
          ),
          'project' => 'painted',
          'version' => '2.0 dev',
        ),
      ),
    ),
  ),
);
$options['master_url'] = 'http://aegir.xen.dk';
$options['publish_path'] = '/var/www/aegir/drupal-6.x';
$options['web_host'] = 'aegir.xen.dk';
$options['web_ip'] = '90.184.128.110';
$options['web_group'] = 'www-data';
$options['script_user'] = 'aegir';
$options['restart_cmd'] = 'sudo /usr/sbin/apache2ctl graceful';
$options['backup_path'] = '/var/www/aegir/backups';
$options['config_path'] = '/var/www/aegir/config';
$options['master_db'] = 'mysqli://aegir:Oo0Cahth@localhost';
