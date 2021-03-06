<?php 
 $GLOBALS["dictionary"]["HD1_HelpDesk"]=array (
  'table' => 'hd1_helpdesk',
  'audited' => true,
  'inline_edit' => true,
  'duplicate_merge' => true,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'comment' => 'Unique identifier',
      'inline_edit' => false,
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'link' => true,
      'dbType' => 'varchar',
      'len' => 255,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'required' => true,
      'importable' => 'required',
      'duplicate_merge' => 'enabled',
      'merge_filter' => 'selected',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
      'popupHelp' => 'LBL_DATE_ENTERED',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => 6,
      'cols' => 80,
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'hd1_helpdesk_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'hd1_helpdesk_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'reportable' => true,
      'isnull' => 'false',
      'dbType' => 'id',
      'audited' => true,
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'rname' => 'user_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'hd1_helpdesk_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
    ),
    'SecurityGroups' => 
    array (
      'name' => 'SecurityGroups',
      'type' => 'link',
      'relationship' => 'securitygroups_hd1_helpdesk',
      'module' => 'SecurityGroups',
      'bean_name' => 'SecurityGroup',
      'source' => 'non-db',
      'vname' => 'LBL_SECURITYGROUPS',
    ),
    'wholesome_message_field_c' => 
    array (
      'name' => 'wholesome_message_field_c',
      'vname' => 'LBL_WHOLESOME_MSG',
      'function' => 
      array (
        'name' => 'print_wholesome_msg',
        'params' => 
        array (
        ),
      ),
      'type' => 'varchar',
      'source' => 'non-db',
      'len' => '100',
      'inline_edit' => '',
      'labelValue' => 'LBL_WHOLESOME_MSG',
    ),
    'another_field_c_' => 
    array (
      'name' => 'another_field_c_',
      'vname' => 'LBL_ANOTHER_FIELD_',
      'function' => 
      array (
        'name' => '',
        'params' => 
        array (
        ),
      ),
      'type' => 'varchar',
      'source' => 'non-db',
      'len' => '100',
      'inline_edit' => '',
      'labelValue' => 'LBL_ANOTHER_FIELD_',
    ),
    'another_field_child_1' => 
    array (
      'name' => 'another_field_child_1',
      'vname' => 'LBL_ANOTHER_FIELD_1',
      'function' => 
      array (
        'name' => '',
        'params' => 
        array (
        ),
      ),
      'type' => 'varchar',
      'source' => 'non-db',
      'len' => '100',
      'inline_edit' => '',
      'labelValue' => 'LBL_ANOTHER_FIELD_1',
    ),
    'another_field_child_2' => 
    array (
      'name' => 'another_field_child_2',
      'vname' => 'LBL_ANOTHER_FIELD_2',
      'function' => 
      array (
        'name' => '',
        'params' => 
        array (
        ),
      ),
      'type' => 'varchar',
      'source' => 'non-db',
      'len' => '100',
      'inline_edit' => '',
      'labelValue' => 'LBL_ANOTHER_FIELD_2',
    ),
    'another_field_c' => 
    array (
      'name' => 'another_field_c',
      'vname' => 'LBL_ANOTHER_FIELD',
      'function' => 
      array (
        'name' => '',
        'params' => 
        array (
        ),
      ),
      'type' => 'varchar',
      'source' => 'non-db',
      'len' => '100',
      'inline_edit' => '',
      'labelValue' => 'LBL_ANOTHER_FIELD',
    ),
    'show_more_field_c' => 
    array (
      'name' => 'show_more_field_c',
      'vname' => 'LBL_MORE_CHECKBOX',
      'function' => 
      array (
        'name' => '',
        'params' => 
        array (
        ),
      ),
      'type' => 'varchar',
      'source' => 'non-db',
      'len' => '100',
      'inline_edit' => '',
      'labelValue' => 'LBL_MORE_CHECKBOX',
    ),
  ),
  'relationships' => 
  array (
    'hd1_helpdesk_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'HD1_HelpDesk',
      'rhs_table' => 'hd1_helpdesk',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'hd1_helpdesk_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'HD1_HelpDesk',
      'rhs_table' => 'hd1_helpdesk',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'hd1_helpdesk_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'HD1_HelpDesk',
      'rhs_table' => 'hd1_helpdesk',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'securitygroups_hd1_helpdesk' => 
    array (
      'lhs_module' => 'SecurityGroups',
      'lhs_table' => 'securitygroups',
      'lhs_key' => 'id',
      'rhs_module' => 'HD1_HelpDesk',
      'rhs_table' => 'hd1_helpdesk',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'securitygroups_records',
      'join_key_lhs' => 'securitygroup_id',
      'join_key_rhs' => 'record_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'HD1_HelpDesk',
    ),
  ),
  'optimistic_locking' => true,
  'unified_search' => true,
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'hd1_helpdeskpk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'templates' => 
  array (
    'security_groups' => 'security_groups',
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);