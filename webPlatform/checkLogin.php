<?php 
     $connR=mysqli_connect('127.0.0.1','root','','utenze');

     function checkLogin()
     {
         global $connR;
         $s=mysqli_query($connR,"select email,md5 from utenti where email='".trim($_POST['email'])."' and md5='".trim(md5($_POST['pw']))."';");
         return $s;
     }
    
    if($_POST)
    {
        if(checkLogin()){
            session_start();
             $_SESSION['login'] = "ok";
             header('location: ./dashboard.php');
        }
            
        else
             header('location: ./login.php');
    }
?>