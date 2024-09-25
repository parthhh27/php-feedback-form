<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1); //to show up any error right at the start

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];
$time=date('y-m-d h:i:s');
$line="time: $time, name: $fullname, email: $email, feedback: $feedback";
$file="feedback.txt";
file_put_contents($file, $line, FILE_APPEND | LOCK_EX);//used cmd command sudo chmod -r 777 feedback.txt

echo "Thank you for your feedback ", "$fullname<br>";

$play = new mysqli('localhost', 'root', '', database: 'forform');

if ($play->connect_error) {
    die("Connection failed: " . $play->connect_error);//did not display die error message
}
$nav = $play->prepare("INSERT INTO seva(fullname, email, feedback) VALUES (?, ?, ?)");//QUERY COMMANDS ARE CASE SENSITIVE
$nav->bind_param("sss", $fullname, $email, $feedback);//dont know what sss is
$nav->execute();
$nav->close();
$play->close();
