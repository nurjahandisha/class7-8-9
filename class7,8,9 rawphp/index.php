<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST SYSTEM</title>
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
          <a class="nav-link active" aria-current="page" href="#">Add Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./all_post.php">All Posts</a>
        </li>
      
      </ul>
    </div>
  </div>
</nav>
<?php
	if (isset($_SESSION["success"])) {
		?>
		<div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" style="position:absolute; bottom: 20px;right: 20px;">
  <div class="toast-header">
    
    <strong class="me-auto">POST SYSTEM</strong>
    
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    <?=$_SESSION["success"]?>
  </div>
</div>
	<?php	// code...
	}
?>
	
<div class="container">
    <div class="col-6 mx-auto mt-5 ">

<div class="card">
<div class="card-header">
    <strong>Add Post</strong>
</div>


<form action="./controller/post_store.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NAME</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="<?= isset($_SESSION['old_data']['name'])?$_SESSION['old_data']['name']:''?>">
    <?php
        if(isset( $_SESSION['errors']['name'])){
            ?>
        
            <span class="text-danger">

            <?php
                echo $_SESSION['errors']['name']
            
                ?>
            </span>
            
    <?php
        }
        
        ?>
        
     

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">DETAIL</label>
        <textarea name="detail" class="from-control"><?= isset($_SESSION['old_data']['detail'])?$_SESSION['old_data']['detail']:''?></textarea>

        <?php
        if(isset( $_SESSION['errors']['detail'])){
            ?>
        
            <span class="text-danger">

            <?php
                echo $_SESSION['errors']['detail']
            
                ?>
            </span>
            
    <?php
        }
        
        ?>
        
     
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">E-mail</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= isset($_SESSION['old_data']['email'])?$_SESSION['old_data']['email']:''?>">
   
    <?php
        if(isset( $_SESSION['errors']['email'])){
            ?>
        
            <span class="text-danger">

            <?php
                echo $_SESSION['errors']['email']
            
                ?>
            </span>
            
    <?php
        }
        
        ?>
        
     >

  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Password</label>
    <input type="text" name="password" class="form-control" id="exampleInputEmail1" value="<?= isset($_SESSION['old_data']['password'])?$_SESSION['old_data']['password']:''?>">
    <?php
        if(isset( $_SESSION['errors']['password'])){
            ?>
        
            <span class="text-danger">

            <?php
                echo $_SESSION['errors']['password']
            
                ?>
            </span>
            
    <?php
        }
        
        ?>
        
     

  </div>
  
  <button type="submit" name="submit" value="submited" class="btn btn-primary w-100">Submit</button>
</form>

</div>

    </div>
</div>





<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>

<?php
session_unset();
?>