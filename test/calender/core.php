<?php
require_once 'config.php';

session_start();

if (isset($_POST["title"])) {
    $query = "
 INSERT INTO events 
 (title, start_event, end_event,user_name) 
 VALUES (:title, :start_event, :end_event, :user_name)
 ";
    $statement = $connect->prepare($query);
    $statement->execute(
        array(
            ':title'  => $_SESSION['user']['name'],
            ':start_event' => $_POST['start'],
            ':end_event' => $_POST['end'],
            ':user_name' => $_SESSION['user']['name']
        )
    );
}

if (isset($_POST["id"])) {
    $query = "
 UPDATE events 
 SET title=:title, start_event=:start_event, end_event=:end_event 
 WHERE id=:id
 ";
    $statement = $connect->prepare($query);
    $statement->execute(
        array(
            ':title'  => $_POST['title'],
            ':start_event' => $_POST['start'],
            ':end_event' => $_POST['end'],
            ':id'   => $_POST['id']
        )
    );
}

if (isset($_POST["id"])) {
    $connect = new PDO('mysql:host=localhost;dbname=testing', 'root', '');
    $query = "
 DELETE from events WHERE id=:id
 ";
    $statement = $connect->prepare($query);
    $statement->execute(
        array(
            ':id' => $_POST['id']
        )
    );
}
