<?php

 include 'navbar.php';

  
 //display errors
 if(isset($_SESSION['errors']))
 {
    foreach($_SESSION['errors'] as $error){
        echo "<div class='alert alert-danger' role='alert'>
        ".$error."
        </div>";
    }
 }

 //if user have an aacount 
 if(isset($_SESSION['email']))
 {
    header('location: register.php');
 }

?>
<form class="form-group mt-4" action="handleAccount.php" method="post">
    <input class="form-control" type="text" placeholder="Enter your email" name="email"><br>
    <input class="form-control" type="password" placeholder="Enter your password" name="password"><br>
    <input class="btn btn-success" type="submit" value="login" name="submit">
</form>