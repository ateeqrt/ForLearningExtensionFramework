<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  'built_in_version' => '7.7.1.2',
  'acceptable_sugar_versions' => 
  array (
    0 => '',
  ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'PRO',
    1 => 'CORP',
    2 => 'ENT',
    3 => 'ULT',
  ),
  'readme' => '',
  'key' => 'clg',
  'author' => 'Administrator',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'College',
  'published_date' => '2017-08-02 07:11:29',
  'type' => 'module',
  'version' => 1501657890,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'College',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'clg_Students',
      'class' => 'clg_Students',
      'path' => 'modules/clg_Students/clg_Students.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'clg_Sections',
      'class' => 'clg_Sections',
      'path' => 'modules/clg_Sections/clg_Sections.php',
      'tab' => true,
    ),
    2 => 
    array (
      'module' => 'clg_Disciplines',
      'class' => 'clg_Disciplines',
      'path' => 'modules/clg_Disciplines/clg_Disciplines.php',
      'tab' => true,
    ),
    3 => 
    array (
      'module' => 'clg_Programs',
      'class' => 'clg_Programs',
      'path' => 'modules/clg_Programs/clg_Programs.php',
      'tab' => true,
    ),
    4 => 
    array (
      'module' => 'clg_Faculty',
      'class' => 'clg_Faculty',
      'path' => 'modules/clg_Faculty/clg_Faculty.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
  ),
  'relationships' => 
  array (
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/clg_Students',
      'to' => 'modules/clg_Students',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/clg_Sections',
      'to' => 'modules/clg_Sections',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/clg_Disciplines',
      'to' => 'modules/clg_Disciplines',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/modules/clg_Programs',
      'to' => 'modules/clg_Programs',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/modules/clg_Faculty',
      'to' => 'modules/clg_Faculty',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
);