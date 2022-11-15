<?php
session_start();
include'../database/env.php';

if(isset($_POST['name'])){
    $errors =[];   
    
    $id =$_POST['id'];
    $name =$_POST['name'];
    $detail =$_POST['detail'];
    $email =$_POST['email'];
    $password =$_POST['password'];
}

if(empty($name)){
    $msg="plz insert your name";
    $errors['name'] =$msg;
}

if(empty($detail)){
    $msg="plz insert your detail";
    $errors['detail'] =$msg;
}

if(empty($email)){
    $msg="plz insert your email";
    $errors['email'] =$msg;
}

if(empty($password)){
    $msg="plz insert your password";
    $errors['password'] =$msg;
}
if(count($errors) > 0){


    $querry="UPDATE `post_system` SET`name`='[$name]',`detail`='[$detail]',`email`='[$email]',`password`='[$password]',WHERE id=$id";
    $update=mysqli_query($conn,$querry);
    header("location:../all_post.php" );


}else{
    
    $_SESSION['errors']=$errors;
    
  header("location:../edit_post.php");
}