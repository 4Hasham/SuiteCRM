<?php
    if(!defined('sugarEntry') || !sugarEntry)
        die('Not A Valid Entry Point');

    $res = array();

    if(isset($_POST['func'])) {
        switch($_POST['func']) {
            case 'printHi':
                $res['res'] = printHi();
            break;
            default:

            break;
        }
    }
    else {
        $res['error'] = "No function specified.";
    }
    echo json_encode($res);
?>