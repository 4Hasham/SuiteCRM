<?php
    require_once('include/SugarQueue/SugarJobQueue.php');

    $scheduledJob = new SchedulerJob();
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
?>