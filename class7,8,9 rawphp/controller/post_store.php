<?php
session_start();
include'../database/env.php';

if(isset($_POST['submit'])){

 $errors =[];   
$_request=$_POST;
$name =$_request['name'];
$detail =$_request['detail'];
$email =$_request['email'];
$password =$_request['password'];

if(empty($name)){
    $msg="plz insert your name";
    $errors['name'] =$msg;
}

if(empty($detail)){
    $msg="plz insert your detail";
    $errors['detail'] =$msg;
}

if(empty($email)){
    $msg ="plz insert your email";
    $errors['email']=$msg;
}

if(empty($password)){
    $msg="plz insert your password";
    $errors['password'] =$msg;
}


if(count($errors) > 0){


    $_SESSION['errors']=$errors;
    $_SESSION['old_data']=$_request;
  header("location:../index.php");


}else{
   $querry =" INSERT INTO post_system( name, detail, email, password) VALUES ('$name','$detail','$email','$password')";

    $store=mysqli_query($conn,$querry);
    if($store){
        header("location:../index.php");
        $_SESSION['success']="your information added successfully!";
    }else{
        echo"something wrong";
    }



}
























}else{
    echo"you forget to submit your data";
}