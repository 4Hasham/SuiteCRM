<?php
    class TestHook {
        public function TestHook_Method($bean, $event, $arguments) {
            if(!isset($bean->recur_flag) || !$bean->recur_flag) {
                $bean->recur_flag = true;
                write_to_log(array(), "Inside the first logic hook");
                $bean->save();
            }
        }

        public function TestHook_Method_($bean, $event, $arguments) {
            if(!isset($bean->recur_flag1) || !$bean->recur_flag1) {
                $bean->recur_flag1 = true;
                write_to_log(array(), "Inside the second logic hook");
            }
        }
    }
?>