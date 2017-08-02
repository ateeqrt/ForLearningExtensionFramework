<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/clg_Students/Ext/Vardefs/clg_sections_clg_students_1_clg_Students.php

// created: 2017-08-02 12:27:46
$dictionary["clg_Students"]["fields"]["clg_sections_clg_students_1"] = array (
  'name' => 'clg_sections_clg_students_1',
  'type' => 'link',
  'relationship' => 'clg_sections_clg_students_1',
  'source' => 'non-db',
  'module' => 'clg_Sections',
  'bean_name' => 'clg_Sections',
  'side' => 'right',
  'vname' => 'LBL_CLG_SECTIONS_CLG_STUDENTS_1_FROM_CLG_STUDENTS_TITLE',
  'id_name' => 'clg_sections_clg_students_1clg_sections_ida',
  'link-type' => 'one',
);
$dictionary["clg_Students"]["fields"]["clg_sections_clg_students_1_name"] = array (
  'name' => 'clg_sections_clg_students_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CLG_SECTIONS_CLG_STUDENTS_1_FROM_CLG_SECTIONS_TITLE',
  'save' => true,
  'id_name' => 'clg_sections_clg_students_1clg_sections_ida',
  'link' => 'clg_sections_clg_students_1',
  'table' => 'clg_sections',
  'module' => 'clg_Sections',
  'rname' => 'name',
);
$dictionary["clg_Students"]["fields"]["clg_sections_clg_students_1clg_sections_ida"] = array (
  'name' => 'clg_sections_clg_students_1clg_sections_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CLG_SECTIONS_CLG_STUDENTS_1_FROM_CLG_STUDENTS_TITLE_ID',
  'id_name' => 'clg_sections_clg_students_1clg_sections_ida',
  'link' => 'clg_sections_clg_students_1',
  'table' => 'clg_sections',
  'module' => 'clg_Sections',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
