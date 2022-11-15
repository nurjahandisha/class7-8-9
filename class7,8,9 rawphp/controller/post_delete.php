<?php
session_start();
include_once'../database/env.php';
$id=$_GET['id'];
$querry="DELETE FROM `post_system` WHERE id=$id";
$delete=mysqli_query($conn,$querry);
if($delete){
$_SESSION['success']='your post delete';
header("location../all_post.php");


}else{
    echo"no";


}