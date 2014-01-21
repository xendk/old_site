<?php

$aliases['common'] = array(
  'uri' => 'default',
  'remote-host' => 'xen.dk',
  'remote-user' => 'root',
  'path-aliases' => array(
    '%drush' => '/root/drush',
    '%drush-script' => '/root/drush/drush',
  ),
);

$aliases['stg'] = array(
  'parent' => '@xen.common',
  'uri' => 'stg.xen.dk',
  'root' => '/var/www/stg.xen.dk',
  'deployotron' => array(
    'branch' => 'master',
  ),
);

$aliases['live'] = array(
  'parent' => '@xen.common',
  'uri' => 'xen.dk',
  'root' => '/var/www/xen.dk',
  'deployotron' => array(
    'branch' => 'master',
  ),
);
