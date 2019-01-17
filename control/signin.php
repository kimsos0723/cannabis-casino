<?php
include_once ('./creat_token.php');
include_once ('../vendor/autoload.php');
$id = $_POST["id"];
$passwordH = $_POST["password"];

if(!($id and $passwordH)){
    echo  "<script> alert('ID와 Password를 입력해 주세요..'); history.back()</script>";
    die();
}

$connect = new mysqli('13.59.174.126', 'root','1234','cannabis');
if ($connect->connect_errno) {
    echo  "<script> history.back()</script>";
    die();
}
$result = $connect->query("SELECT * FROM Users WHERE id='{$id}'");
$data = $result->fetch_array();
if($id === $data['id']){
    if($passwordH === $data['password']){
        $Token = new Token(time()+60*60,5000, $data['nickname']);
        header("Authorization: {$Token->getToken()}");

    }else{
        echo  "<script> alert('ID와 Password가 틀립니다..'); history.back()</script>";
        die();
    }
}else{
    echo  "<script> alert('ID와 Password가 틀립니다..'); history.back()</script>";
    die();
}

