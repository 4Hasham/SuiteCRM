<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'include/MVC/View/views/view.edit.php';

class Beta_BetaViewCustomredrEdit extends ViewEdit
{
    public function preDisplay() {
        $metadatafile = "custom/modules/Beta_Beta/metadeta/customredreditviewdefs.php";
        $this->ev = new EditView();
        $this->ev->ss = $this->ss;
        $this->ev->view = "customredredit";
        $this->ev->setup($this->module, $this->bean, $metadatafile,
        "include/EditView/EditView.tpl", true, "customredreditviewdefs");
    }
}