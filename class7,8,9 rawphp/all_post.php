<?php
include"./database/env.php";
$querry="SELECT * FROM `post_system`";

$result = mysqli_query($conn,$querry);
$fetch =mysqli_fetch_all($result ,1);
echo"$id";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALL POSTS</title>
       <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Post System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav m-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Add Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./all_post.php">All Posts</a>
        </li>
      
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-5">
    <h2>ALL POSTS</h2>

        <table class="table table-responsive">
            <tr>
                <th>#</th>
                <th>Post name</th>
                <th>post Detail</th>
                <th>post email</th>
                <th>password</th>
                <th>Actions</th>
            </tr>

           <?php
           foreach($fetch as $key=> $fetchs){

            ?>
            <tr>
            <td><?++$key?></td>
            <td><?=$fetchs['name']?></td>
            <td><?=strlen($fetchs['detail']) >50 ? substr($fetchs['detail'],0,50).'....' :$fetchs['detail']?></td>
            <td><?=$fetchs['email']?></td>
            <td><?=$fetchs['password']?></td>

            <td>
                <div class="btn-group">
                    <a href="./show_post.php?id=<?=$fetchs['id']?>" class="btn btn-primary">Show</a>
                    <a href="./edit_post.php?id=<?=$fetchs['id']?>" class="btn btn-warning">Edit</a>
                    <a href="./controller/post_delete.php?id=<?=$fetchs['id']?>" class="btn btn-danger">Delete</a>


                </div>
            </td>
        </tr>

<?php
           }
           
           
           ?>     



           




        </table>









</div>
    








<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>
</html