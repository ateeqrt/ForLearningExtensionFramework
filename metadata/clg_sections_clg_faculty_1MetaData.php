<?php
// created: 2017-08-02 12:28:16
$dictionary["clg_sections_clg_faculty_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'clg_sections_clg_faculty_1' => 
    array (
      'lhs_module' => 'clg_Sections',
      'lhs_table' => 'clg_sections',
      'lhs_key' => 'id',
      'rhs_module' => 'clg_Faculty',
      'rhs_table' => 'clg_faculty',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'clg_sections_clg_faculty_1_c',
      'join_key_lhs' => 'clg_sections_clg_faculty_1clg_sections_ida',
      'join_key_rhs' => 'clg_sections_clg_faculty_1clg_faculty_idb',
    ),
  ),
  'table' => 'clg_sections_clg_faculty_1_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'clg_sections_clg_faculty_1clg_sections_ida' => 
    array (
      'name' => 'clg_sections_clg_faculty_1clg_sections_ida',
      'type' => 'id',
    ),
    'clg_sections_clg_faculty_1clg_faculty_idb' => 
    array (
      'name' => 'clg_sections_clg_faculty_1clg_faculty_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'clg_sections_clg_faculty_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'clg_sections_clg_faculty_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'clg_sections_clg_faculty_1clg_sections_ida',
        1 => 'clg_sections_clg_faculty_1clg_faculty_idb',
      ),
    ),
  ),
);