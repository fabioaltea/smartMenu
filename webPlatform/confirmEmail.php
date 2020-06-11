<?php 
    $connR=mysqli_connect('127.0.0.1','root','','utenze');

    if($_POST){
        $pw=null;
        if($_POST['pw']==$_POST['pwr'])
        {
            $pw=md5($_POST['pw']);
            $q="insert into utenti values ('".$_POST['name']."','".$_POST['iva']."','".$_POST['email']."','".$pw."','".$_POST['username']."','127.0.0.1','root','')";
            if(mysqli_query($connR, $q)){header('location: ./login.php' );}

        }
        
    }
?>