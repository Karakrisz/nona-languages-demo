<?php

include_once 'dbConfig.php';

session_start();

$pEvent = filter_input(INPUT_POST, "event", FILTER_SANITIZE_SPECIAL_CHARS);
$start_time = filter_input(INPUT_POST, "start-time", FILTER_SANITIZE_SPECIAL_CHARS);
$end_time = filter_input(INPUT_POST, "end-time", FILTER_SANITIZE_SPECIAL_CHARS);

/*
 * karaKirsz if start
 */
if ($pEvent == "sendDateTime") {
    recordingDateForClass($db, $start_time, $end_time);
}
/*
 * karaKirsz if end
 */

/*
 * karaKirsz function start
 */
function recordingDateForClass($db, $start_time, $end_time)
{
    $title = $_SESSION['user']['name'];
    $teacher = $_SESSION["teachers"]["name"];
    $date = date("Y-m-d");
    $status = 0;
    if ($statement = mysqli_prepare($db, 'INSERT INTO events (title, teacher, date, created, modified, status) VALUES (?,?,?,?,?,?)')) {
        mysqli_stmt_bind_param($statement, 'sssssi', $title, $teacher, $date, $start_time, $end_time, $status);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
    }
}

/*
 * karaKirsz function end
 */
