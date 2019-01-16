<?php
$id = $_POST['id'];
$realName = $_POST['realName'];
$password =  $_POST['password'];
$confirm = $_POST['confirm'];
$nickname = $_POST['nickname'];
$email = $_POST['email'];

if(!($id and $realName and $password and $confirm and $nickname and $email)){
    header('location:'."{$_SERVER['HTTP_REFERER']}");
    die();
}
if($password !== $confirm){
    header('location:'."{$_SERVER['HTTP_REFERER']}");
    die();
}
unset($confirm);

$connect = new mysqli('127.0.0.1','root','so621313','cannabis');
$result = $connect->query("INSERT INTO Users VALUES('{$id}','{$password}','{$nickname}','{$email}','{$realName}',10000,1,1)");
$connect->close();

if(!$result){
    echo  "<script>alert('이미 사용중인 ID 입니다.');history.back()</script>";
}else{
    echo "<script> alert('회원가입에 성공했습니다');history.back()</script>";
    $_SESSION['user'] = new User($username, $password, $nickname);
    header("Location: ../login/login.php");
}