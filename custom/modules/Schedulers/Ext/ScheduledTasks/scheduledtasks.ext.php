<?php 
 //WARNING: The contents of this file are auto-generated



class testCronJob implements RunnableSchedulerJob {
    public function run($arguments) {
        $arguments = html_entity_decode($arguments);
        $arguments = json_decode($arguments, 1);

        if(isset($arguments)) {
            write_to_log($arguments, "Job Completed.");
        }
    }

    public function setJob(SchedulerJob $job) {
        $this->job = $job;
    }
}


?>