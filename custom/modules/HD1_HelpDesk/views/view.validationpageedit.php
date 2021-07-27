<?php
    if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
    
    require_once 'include/MVC/View/views/view.edit.php';
    
    class HD1_HelpDeskViewValidationpageEdit extends ViewEdit
    {
        public function display() {
            parent::display();

            $js = <<<JS
                function validateForm(viewName) {
                    var d = document.getElementById('name').value;
                    if(d.trim() != '') {
                        if(d.trim().length > 1) {
                            SUGAR.ajaxUI.showLoadingPanel();
                            return check_form('EditView');
                        }
                        else {
                            alert('The name should be longer than that.');
                            return false;
                        }
                    }
                    else {
                        alert("Can't have an empty name.");
                    }
                }

                var s = document.querySelectorAll('[id=SAVE]');
                s.forEach(function(element) {
                    element.removeAttribute('onclick');
                    element.form.addEventListener('submit', event => {
                        var d = document.getElementById('name').value;
                        if(d.trim() != '') {
                            if(d.trim().length > 1) {
                                SUGAR.ajaxUI.showLoadingPanel();
                                var _form = document.getElementById('EditView');
                                _form.action.value='Save';
                                if(check_form('EditView'))
                                    SUGAR.ajaxUI.submitForm(_form);
                                
                                event.preventDefault();
                                return false;
                            }
                            else {
                                alert('The name should be longer than that.');
                                event.preventDefault();
                                return false;
                            }
                        }
                        else {
                            alert("Can't have an empty name.");
                            event.preventDefault();
                            return false;
                        }
                    });
                }) 
            JS;

            echo '<script type="text/javascript">'.$js.'</script>';
        }
    }
?>