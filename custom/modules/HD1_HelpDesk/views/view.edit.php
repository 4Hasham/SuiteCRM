<?php
    if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
    
    require_once 'include/MVC/View/views/view.edit.php';
    
    class HD1_HelpDeskViewEdit extends ViewEdit
    {
        public function display() {
            $js = <<<JS
                function Uneditable(id) {
                    var d = document.getElementById(id);
                    d.disabled = true;
                    d.style.backgroundColor = '#CCCCCC';
                }
            JS;
            parent::display();
            echo "<script type=\"text/javascript\">".$js."
            
            Uneditable('name');
            </script>";
        }
    }
    
?>