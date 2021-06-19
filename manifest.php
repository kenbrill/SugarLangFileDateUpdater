<?php
$manifest = array(
    'acceptable_sugar_flavors' => array('CE','PRO','CORP','ENT','ULT'),
    'acceptable_sugar_versions' => array(
        'exact_matches' => array(),
        'regex_matches' => array('(.*?)\.(.*?)\.(.*?)$'),
    ),
    'author' => 'Kenneth Brill',
    'description' => 'Adds a repair that touches needed language files',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'SugarLangFileDateUpdater',
    'published_date' => '2021-06-19 03:44:42',
    'type' => 'module',
    'version' => '1.0'
);

$installdefs =array (
  'id' => 'SugarLangFileDateUpdater1',
  'language' => array(
      array(
          'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Language/en_us.langFileDateRepair.php',
          'to_module' => 'Administration',
          'language' => 'en_us'
      )
  ),
  'copy' =>
  array (
    0 =>
    array (
      'from' => '<basepath>/custom/modules/Administration/Upgrade.php',
      'to' => 'custom/modules/Administration/Upgrade.php',
    ),
    1 =>
    array (
      'from' => '<basepath>/custom/modules/Administration/langFileDateRepair.php',
      'to' => 'custom/modules/Administration/langFileDateRepair.php',
    ),
  ),
  'pre_execute' =>
  array (
  ),
);
