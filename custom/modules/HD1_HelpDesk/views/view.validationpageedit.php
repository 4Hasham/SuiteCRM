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

                var prev = null;

                function AnotherField(b) {
                    var par = document.querySelector('div[data-label="LBL_ANOTHER_FIELD"]').parentNode;
                    var par_ = document.querySelector('div[data-label="LBL_ANOTHER_FIELD_"]').parentNode;
                    if(b == true) {
                        par.style.display = "block";
                        par_.style.display = "block";
                        console.log(prev);
                        changeField(prev.value);
                    }
                    else {
                        par.style.display = "none";
                        par_.style.display = "none";
                        changeField(null);
                    }

                }

                function changeField(b) {
                    var par1 = document.querySelector('div[data-label="LBL_ANOTHER_FIELD_1"]').parentNode;
                    var par2 = document.querySelector('div[data-label="LBL_ANOTHER_FIELD_2"]').parentNode;
                    if(parseInt(b) == 1) {
                        par1.style.display = "block";
                        par2.style.display = "none";
                    }
                    else if(parseInt(b) == 2) {
                        par1.style.display = "none";
                        par2.style.display = "block";
                    }
                    else {
                        par1.style.display = "none";
                        par2.style.display = "none";
                    }
                }

                var e = document.querySelectorAll('[id=field_checkbox]');
                AnotherField(false);
                e.forEach(function(element) {
                    element.addEventListener('click', event => {
                        if(element.checked == true) {
                            AnotherField(true);
                        }
                        else {
                            AnotherField(false);
                        }
                    });
                });

                var f = document.querySelectorAll('[type="radio"]');
                prev = null;
                changeField(null);
                f.forEach(function(element) {
                    element.addEventListener('change', function() {
                        prev = this;
                        changeField(this.value);
                    });
                });

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