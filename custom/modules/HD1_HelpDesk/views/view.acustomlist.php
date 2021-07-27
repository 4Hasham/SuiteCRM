<?php
    if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
    
    require_once 'include/MVC/View/views/view.list.php';
    
    class HD1_HelpDeskViewaCustomList extends ViewList
    {
        public function listViewProcess() {
            $this->params['custom_where'] = " AND hd1_helpdesk.name != '' ";
            $this->lv->setup($this->seed,
            "custom/modules/HD1_HelpDesk/tpls/ListViewGenericNoCheckbox.tpl", $this->where, $this->params);
            echo $this->lv->display();
        }
    }
?>