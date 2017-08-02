<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/clg_Sections/Ext/Vardefs/clg_disciplines_clg_sections_1_clg_Sections.php

// created: 2017-08-02 12:27:13
$dictionary["clg_Sections"]["fields"]["clg_disciplines_clg_sections_1"] = array (
  'name' => 'clg_disciplines_clg_sections_1',
  'type' => 'link',
  'relationship' => 'clg_disciplines_clg_sections_1',
  'source' => 'non-db',
  'module' => 'clg_Disciplines',
  'bean_name' => 'clg_Disciplines',
  'side' => 'right',
  'vname' => 'LBL_CLG_DISCIPLINES_CLG_SECTIONS_1_FROM_CLG_SECTIONS_TITLE',
  'id_name' => 'clg_disciplines_clg_sections_1clg_disciplines_ida',
  'link-type' => 'one',
);
$dictionary["clg_Sections"]["fields"]["clg_disciplines_clg_sections_1_name"] = array (
  'name' => 'clg_disciplines_clg_sections_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CLG_DISCIPLINES_CLG_SECTIONS_1_FROM_CLG_DISCIPLINES_TITLE',
  'save' => true,
  'id_name' => 'clg_disciplines_clg_sections_1clg_disciplines_ida',
  'link' => 'clg_disciplines_clg_sections_1',
  'table' => 'clg_disciplines',
  'module' => 'clg_Disciplines',
  'rname' => 'name',
);
$dictionary["clg_Sections"]["fields"]["clg_disciplines_clg_sections_1clg_disciplines_ida"] = array (
  'name' => 'clg_disciplines_clg_sections_1clg_disciplines_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CLG_DISCIPLINES_CLG_SECTIONS_1_FROM_CLG_SECTIONS_TITLE_ID',
  'id_name' => 'clg_disciplines_clg_sections_1clg_disciplines_ida',
  'link' => 'clg_disciplines_clg_sections_1',
  'table' => 'clg_disciplines',
  'module' => 'clg_Disciplines',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/clg_Sections/Ext/Vardefs/clg_sections_clg_students_1_clg_Sections.php

// created: 2017-08-02 12:27:46
$dictionary["clg_Sections"]["fields"]["clg_sections_clg_students_1"] = array (
  'name' => 'clg_sections_clg_students_1',
  'type' => 'link',
  'relationship' => 'clg_sections_clg_students_1',
  'source' => 'non-db',
  'module' => 'clg_Students',
  'bean_name' => 'clg_Students',
  'vname' => 'LBL_CLG_SECTIONS_CLG_STUDENTS_1_FROM_CLG_SECTIONS_TITLE',
  'id_name' => 'clg_sections_clg_students_1clg_sections_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/clg_Sections/Ext/Vardefs/clg_sections_clg_faculty_1_clg_Sections.php

// created: 2017-08-02 12:28:16
$dictionary["clg_Sections"]["fields"]["clg_sections_clg_faculty_1"] = array (
  'name' => 'clg_sections_clg_faculty_1',
  'type' => 'link',
  'relationship' => 'clg_sections_clg_faculty_1',
  'source' => 'non-db',
  'module' => 'clg_Faculty',
  'bean_name' => 'clg_Faculty',
  'vname' => 'LBL_CLG_SECTIONS_CLG_FACULTY_1_FROM_CLG_FACULTY_TITLE',
  'id_name' => 'clg_sections_clg_faculty_1clg_faculty_idb',
);

?>
