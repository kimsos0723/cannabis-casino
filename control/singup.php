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

$connect = new mysqli('13.59.174.126', 'root','1234','cannabis');
if ($connect->connect_errno) {
    echo  "<script>alert('연결 실패');history.back()</script>";
}
$result = $connect->query("INSERT INTO Users(id,password,nickname,realname,email) VALUES('{$id}','{$password}','{$nickname}','{$realName}','{$email}')");
$connect->close();
if(!$result){
    echo  "<script>alert('이미 사용중인 ID 입니다.');history.back()</script>";
}else{
    echo "<script> alert('회원가입에 성공했습니다');history.back()</script>";
}

