<?php

    require_once('include/SugarQueue/SugarJobQueue.php');


    class TestHook {
        public function TestHook_Method($bean, $event, $arguments) {
            if(!isset($bean->recur_flag) || !$bean->recur_flag) {
                $bean->recur_flag = true;
                                
                $scheduledJob = new SchedulersJob();
                $scheduledJob->name = 'Log into /custom/log.txt';
                $scheduledJob->assigned_user_id = '1';
                $scheduledJob->data = json_encode(array(
                    'inf' => 'My very resource intensive job.'
                ));
                $scheduledJob->target = "class::testCronJob";
            
                $queue = new SugarJobQueue();
                if($queue->submitJob($scheduledJob)) {
                    write_to_log(array(), "Job successfully submitted in the jobs queue.");
                }

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

        public function TestHook_Before_Delete($bean, $event, $arguments) {
            $bean->set_do_not_delete = 1;
        }
    }
?>