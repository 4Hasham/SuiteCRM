<?php
$module_name = 'HD1_HelpDesk';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'description',
        ),
        2 => array (
          0 => array (
            'name' => 'wholesome_message_field_c',
            'label' => 'LBL_WHOLESOME_MSG',
          ),
        ),
        3 => array (
          0 => array (
            'name' => 'show_more_field_c',
            'label' => 'LBL_MORE_CHECKBOX',
            'customCode' => '<input type="checkbox" value="Show another field" id="field_checkbox" />',
          ),
        ),
        4 => array (
          0 => array (
            'name' => 'another_field_c',
            'label' => 'LBL_ANOTHER_FIELD',
            'customCode' => '<input type="radio" value="1" name="af" id="another_field" />',
          ),
        ),
        5=> array (
          0 => array (
            'name' => 'another_field_c_',
            'label' => 'LBL_ANOTHER_FIELD_',
            'customCode' => '<input type="radio" value="2" name="af" id="another_field_" />',
          ),
        ),
        6 => array (
          0 => array (
            'name' => 'another_field_child_1',
            'label' => 'LBL_ANOTHER_FIELD_1',
            'customCode' => '<input type="text" id="another_field_c1" />',
          ),
        ),
        7 => array (
          0 => array(
            'name' => 'another_field_child_2',
            'label' => 'LBL_ANOTHER_FIELD_2',
            'customCode' => '<input type="text" id="another_field_c2" />',
          ),
        )
      ),
    ),
  ),
);
?>
