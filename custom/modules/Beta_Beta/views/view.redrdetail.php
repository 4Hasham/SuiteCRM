<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'include/MVC/View/views/view.detail.php';

class Beta_BetaViewRedrDetail extends ViewDetail
{
    public function display() {
        $this->ss->assign("CUSTOM_VAR", "Random Stuff");
        parent::display();
    }
}