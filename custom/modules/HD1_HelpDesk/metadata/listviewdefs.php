<?php
    if (!defined('sugarEntry') || !sugarEntry) {
        die('Not A Valid Entry Point');
    }

    $module_name = 'HD1_HelpDesk';
    $listViewDefs[$module_name] = array(
        'NAME' => array(
            'width' => '32',
            'label' => 'LBL_NAME',
            'default' => true,
            'link' => true
        ),
        'ASSIGNED_USER_NAME' => array(
            'width' => '9',
            'label' => 'LBL_ASSIGNED_TO_NAME',
            'module' => 'Employees',
            'id' => 'ASSIGNED_USER_ID',
            'default' => true
        ),
        'RANDOM_FIELD_C' => array (
            'label' => 'Random Label',
            'width' => '9',
            'default' => true
        ),
    );
?>