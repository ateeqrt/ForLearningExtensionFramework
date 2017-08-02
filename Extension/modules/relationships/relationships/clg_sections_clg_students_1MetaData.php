<?php
// created: 2017-08-02 12:27:46
$dictionary["clg_sections_clg_students_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'clg_sections_clg_students_1' => 
    array (
      'lhs_module' => 'clg_Sections',
      'lhs_table' => 'clg_sections',
      'lhs_key' => 'id',
      'rhs_module' => 'clg_Students',
      'rhs_table' => 'clg_students',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'clg_sections_clg_students_1_c',
      'join_key_lhs' => 'clg_sections_clg_students_1clg_sections_ida',
      'join_key_rhs' => 'clg_sections_clg_students_1clg_students_idb',
    ),
  ),
  'table' => 'clg_sections_clg_students_1_c',
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
    'clg_sections_clg_students_1clg_sections_ida' => 
    array (
      'name' => 'clg_sections_clg_students_1clg_sections_ida',
      'type' => 'id',
    ),
    'clg_sections_clg_students_1clg_students_idb' => 
    array (
      'name' => 'clg_sections_clg_students_1clg_students_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'clg_sections_clg_students_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'clg_sections_clg_students_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'clg_sections_clg_students_1clg_sections_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'clg_sections_clg_students_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'clg_sections_clg_students_1clg_students_idb',
      ),
    ),
  ),
);