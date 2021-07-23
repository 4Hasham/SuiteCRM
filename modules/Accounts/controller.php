<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class AccountsController extends SugarController
{
    public function action_echo(){
        $GLOBALS['log']->debug("Echo called with request: ".print_r($_REQUEST,1));
        SugarApplication::redirect('index.php');
    }
}