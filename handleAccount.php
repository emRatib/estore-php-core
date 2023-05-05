<?php
session_start();
// getting data 
if(isset($_POST['submit']))
{
         $email=$_POST['email'];
         $password=$_POST['password'];

         // clean data
         function cleanData($input)
         {
            return trim(htmlspecialchars($input));
         }
         $email=cleanData($email);
         $password=cleanData($password);

         // validation
         $errors=[] ;
         $valid=true;
         
            if(!filter_var($email,FILTER_VALIDATE_EMAIL))
            {
            $errors['email']='Not Valid Email';
            $valid=false;
            }
            if($password="" || !filter_var($password, 
            FILTER_VALIDATE_REGEXP,
            array( "options"=> array( "regexp" => "/.{6,25}/"))))
            {
            $errors['password']='Not Valid Password';
            $valid=false;
            }

         // sessions

         $_SESSION['errors']=$errors; //store errors

         if(isset($errors)) //لو عندك ايرورز
         {
            header('location: account.php');
         }
         if($valid===true) // لو كله تمام 
         {
         // encryption 
            $password=sha1($password);
         // store data of user
            $_SESSION['email']=$email;
            $_SESSION['password']=$password;
            header('location: products.php');
         }

}