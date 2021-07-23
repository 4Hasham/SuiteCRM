<?php
    $hook_version = 1; 
    $hook_array = Array();

    $hook_array['after_save'] = Array();
    $hook_array['after_save'][] = Array(
        1,
        'After Save Logic Hook Test',
        'custom/modules/Beta_Beta/executables/TestHook.php',
        'TestHook',
        'TestHook_Method'
    );
    $hook_array['after_save'][] = Array(
        2,
        'After Save Logic Hook Test 1',
        'custom/modules/Beta_Beta/executables/TestHook.php',
        'TestHook',
        'TestHook_Method_'
    );
?>