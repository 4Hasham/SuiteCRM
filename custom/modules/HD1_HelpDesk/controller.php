<?php
    require_once("custom/modules/HD1_HelpDesk/HD1_HelpDesk.php");

    class HD1_HelpDeskController extends SugarController {
        
        public function action_acustomlist() {
            $this->view = 'acustomlist';
            $this->bean = new HD1_HelpDesk_c();
        }
    }
?>