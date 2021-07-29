<?php

function print_wholesome_msg($bean) {
    return "<span>Have a nice day!</span>";
}

function printHi() {
    return "Hi";
}

function fetch_random_name() {
    return 'A random name for the row.';
}

function write_to_log($arr, $str, $email = false) {

    date_default_timezone_set('America/New_York');
    $time_stamp = date("Y-m-d h:i:sa");

    // If the $arr is an object then convert it into an array first
    if(is_object($arr)) {
        $arr = serialize($arr);
        $arr = unserialize($arr);
        $txt = $str.PHP_EOL.PHP_EOL;
        $txt.= "<pre>".print_r($arr, true)."</pre>".PHP_EOL.PHP_EOL;
        file_put_contents('custom/log.txt', PHP_EOL.PHP_EOL, FILE_APPEND);
        file_put_contents('custom/log.txt', $txt, FILE_APPEND);
        file_put_contents('custom/log.txt', PHP_EOL.PHP_EOL, FILE_APPEND);
        return;
    }

    if(!empty($arr)) {

        // Get readable stacktrace info that will go into the array
        $content = unserialize(serialize(debug_backtrace()));
        $content = parse_into_string($content);

        $arr["Date_time"]  = $time_stamp; /* This date goes into the txt file only */
        $arr["StackTrace"] = $content;
        $txt = $str.":".PHP_EOL;
        $txt.= "<pre>".print_r($arr, true)."</pre>".PHP_EOL.PHP_EOL;

    } else {

        $txt = $str.PHP_EOL."(".$time_stamp.")".PHP_EOL.PHP_EOL;

    }

    file_put_contents('custom/log.txt', $txt, FILE_APPEND);

    # Now email
    if($email == true)
        email_update($txt, $str);
}

function email_update($msg, $title, $to = NULL) {

    if(!isset($to)) {
        $to = "hasham82ali@gmail.com";
    }

    $from = "SUITECRM <hasham82ali@gmail.com>";
    $headers = "From: SUITECRM <hasham82ali@gmail.com>\r\n";
    $headers .= 'MIME-Version: 1.0' . "\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; #now mail

    try {
        mail($to, $title, $msg, $headers);
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}

// Will take the content of the stack trace and parse it into a more manageable array
function parse_into_string($stackTrace) {

    $ignore = array(
      "custom_utils.ext.php",
    );

    $report = "";

    foreach ($stackTrace as $s) {

        // Skip any system file we wish to ignore
        if(isset($s["file"]) AND in_array(basename($s["file"]), $ignore) !== false) {
            continue;
        }

        if(isset($s["class"]))
            $report .= "Class: ".$s["class"]." ";

        if(isset($s["function"]))
            $report .= "Function/method: ".$s["function"]."() ";

        if(isset($s["file"]))
            $report .= "File: ".str_replace("/var/www/html/SuiteCRM/", "", $s["file"])." ";
//          $report .= "File: ".basename($s["file"])." ";

        if(isset($s["line"]))
            $report .= "on line: ".$s["line"]." ";

        $report .= " | ";

        // UNCOMMENT BELOW FOR FULL STACK TRACE
        break;

    }

    return $report;

}
?>