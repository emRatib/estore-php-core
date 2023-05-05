<?php

include 'navbar.php';


if(isset($_SESSION['errors2']))
{
    foreach($_SESSION['errors2'] as $error)
    {
        echo "
        <div class='alert alert-danger' role='alert'>
            ".$error."
        </div>
        ";
    }
}

?>


<div class="container mt-5">


    <form class="fotm-group" method="post" action="handleRegister.php">
        <input class="form-control" type="text" name="userName" placeholder="Enter your username"><br>
        <input class="form-control" type="text" name="email" placeholder="Enter your email"><br>
        <input class="form-control" type="password" name="password" placeholder="Enter your password"><br>
        <input class="form-control" type="text" name="phone" placeholder="Enter your phone"><br>
        <input class="form-control" type="text" name="facebook" placeholder="Enter your facebook"><br>
        <input class="form-control" type="text" name="twitter" placeholder="Enter your twitter"><br>
        <input class="form-control" type="text" name="instagram" placeholder="Enter your instagram"><br>

        <input class="btn btn-success" type="submit" value="update" name="submit">
    </form>
</div>