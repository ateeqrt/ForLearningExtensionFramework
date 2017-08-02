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
$relationships = array (
  'clg_disciplines_modified_user' => 
  array (
    'name' => 'clg_disciplines_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'clg_Disciplines',
    'rhs_table' => 'clg_disciplines',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'clg_disciplines_modified_user',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'clg_disciplines_created_by' => 
  array (
    'name' => 'clg_disciplines_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'clg_Disciplines',
    'rhs_table' => 'clg_disciplines',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'clg_disciplines_created_by',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'clg_disciplines_activities' => 
  array (
    'name' => 'clg_disciplines_activities',
    'lhs_module' => 'clg_Disciplines',
    'lhs_table' => 'clg_disciplines',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'clg_Disciplines',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
    'readonly' => true,
    'relationship_name' => 'clg_disciplines_activities',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'clg_disciplines_following' => 
  array (
    'name' => 'clg_disciplines_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'clg_Disciplines',
    'rhs_table' => 'clg_disciplines',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'clg_Disciplines',
    'user_field' => 'created_by',
    'readonly' => true,
    'relationship_name' => 'clg_disciplines_following',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'clg_disciplines_favorite' => 
  array (
    'name' => 'clg_disciplines_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'clg_Disciplines',
    'rhs_table' => 'clg_disciplines',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'clg_Disciplines',
    'user_field' => 'created_by',
    'readonly' => true,
    'relationship_name' => 'clg_disciplines_favorite',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'clg_disciplines_assigned_user' => 
  array (
    'name' => 'clg_disciplines_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'clg_Disciplines',
    'rhs_table' => 'clg_disciplines',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'clg_disciplines_assigned_user',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'clg_programs_clg_disciplines_1' => 
  array (
    'name' => 'clg_programs_clg_disciplines_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'clg_programs_clg_disciplines_1' => 
      array (
        'lhs_module' => 'clg_Programs',
        'lhs_table' => 'clg_programs',
        'lhs_key' => 'id',
        'rhs_module' => 'clg_Disciplines',
        'rhs_table' => 'clg_disciplines',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'clg_programs_clg_disciplines_1_c',
        'join_key_lhs' => 'clg_programs_clg_disciplines_1clg_programs_ida',
        'join_key_rhs' => 'clg_programs_clg_disciplines_1clg_disciplines_idb',
      ),
    ),
    'table' => 'clg_programs_clg_disciplines_1_c',
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
      'clg_programs_clg_disciplines_1clg_programs_ida' => 
      array (
        'name' => 'clg_programs_clg_disciplines_1clg_programs_ida',
        'type' => 'id',
      ),
      'clg_programs_clg_disciplines_1clg_disciplines_idb' => 
      array (
        'name' => 'clg_programs_clg_disciplines_1clg_disciplines_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'clg_programs_clg_disciplines_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'clg_programs_clg_disciplines_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'clg_programs_clg_disciplines_1clg_programs_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'clg_programs_clg_disciplines_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'clg_programs_clg_disciplines_1clg_disciplines_idb',
        ),
      ),
    ),
    'lhs_module' => 'clg_Programs',
    'lhs_table' => 'clg_programs',
    'lhs_key' => 'id',
    'rhs_module' => 'clg_Disciplines',
    'rhs_table' => 'clg_disciplines',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'clg_programs_clg_disciplines_1_c',
    'join_key_lhs' => 'clg_programs_clg_disciplines_1clg_programs_ida',
    'join_key_rhs' => 'clg_programs_clg_disciplines_1clg_disciplines_idb',
    'readonly' => true,
    'relationship_name' => 'clg_programs_clg_disciplines_1',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'clg_disciplines_clg_sections_1' => 
  array (
    'rhs_label' => 'Sections',
    'lhs_label' => 'Disciplines',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'clg_Disciplines',
    'rhs_module' => 'clg_Sections',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'clg_disciplines_clg_sections_1',
  ),
);