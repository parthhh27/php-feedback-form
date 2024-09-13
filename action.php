<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$feedback = $_POST['feed'];

$ren = new mysqli('localhost','root','','test');
if($ren->connect_error){
    die('error :(');
}else{
    $notren = $con->prepare("insert into registration'TIME','Fullname','email','feedback')
    values(?,?,?,?)");
}
$notren->bind_param("isss",$TIME,$Fullname,$email,$feedback);
$notren->execute();
echo"thanks";
$notren->close();
$ren->close();
?>
