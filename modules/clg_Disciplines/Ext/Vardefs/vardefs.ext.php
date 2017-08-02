<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/clg_Disciplines/Ext/Vardefs/clg_programs_clg_disciplines_1_clg_Disciplines.php

// created: 2017-08-02 12:26:35
$dictionary["clg_Disciplines"]["fields"]["clg_programs_clg_disciplines_1"] = array (
  'name' => 'clg_programs_clg_disciplines_1',
  'type' => 'link',
  'relationship' => 'clg_programs_clg_disciplines_1',
  'source' => 'non-db',
  'module' => 'clg_Programs',
  'bean_name' => 'clg_Programs',
  'side' => 'right',
  'vname' => 'LBL_CLG_PROGRAMS_CLG_DISCIPLINES_1_FROM_CLG_DISCIPLINES_TITLE',
  'id_name' => 'clg_programs_clg_disciplines_1clg_programs_ida',
  'link-type' => 'one',
);
$dictionary["clg_Disciplines"]["fields"]["clg_programs_clg_disciplines_1_name"] = array (
  'name' => 'clg_programs_clg_disciplines_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CLG_PROGRAMS_CLG_DISCIPLINES_1_FROM_CLG_PROGRAMS_TITLE',
  'save' => true,
  'id_name' => 'clg_programs_clg_disciplines_1clg_programs_ida',
  'link' => 'clg_programs_clg_disciplines_1',
  'table' => 'clg_programs',
  'module' => 'clg_Programs',
  'rname' => 'name',
);
$dictionary["clg_Disciplines"]["fields"]["clg_programs_clg_disciplines_1clg_programs_ida"] = array (
  'name' => 'clg_programs_clg_disciplines_1clg_programs_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CLG_PROGRAMS_CLG_DISCIPLINES_1_FROM_CLG_DISCIPLINES_TITLE_ID',
  'id_name' => 'clg_programs_clg_disciplines_1clg_programs_ida',
  'link' => 'clg_programs_clg_disciplines_1',
  'table' => 'clg_programs',
  'module' => 'clg_Programs',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/clg_Disciplines/Ext/Vardefs/clg_disciplines_clg_sections_1_clg_Disciplines.php

// created: 2017-08-02 12:27:13
$dictionary["clg_Disciplines"]["fields"]["clg_disciplines_clg_sections_1"] = array (
  'name' => 'clg_disciplines_clg_sections_1',
  'type' => 'link',
  'relationship' => 'clg_disciplines_clg_sections_1',
  'source' => 'non-db',
  'module' => 'clg_Sections',
  'bean_name' => 'clg_Sections',
  'vname' => 'LBL_CLG_DISCIPLINES_CLG_SECTIONS_1_FROM_CLG_DISCIPLINES_TITLE',
  'id_name' => 'clg_disciplines_clg_sections_1clg_disciplines_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
