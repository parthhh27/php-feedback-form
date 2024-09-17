<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

echo ("my name is "),"$fullname<br>";
echo ("my email is "),"$email<br>";
echo ("my feedback is "),"$feedback<br>";

$play = new mysqli('localhost', 'root', '', 'forform');

if ($play->connect_error) {
    die("Connection failed: " . $play->connect_error);
}
$nav = $play->prepare("INSERT INTO seva(fullname, email, feedback) VALUES (?, ?, ?)");
$nav->bind_param("sss", $fullname, $email, $feedback);
$nav->execute();
$nav->close();
$play->close();
