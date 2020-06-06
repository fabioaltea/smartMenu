<?php
      $connL=mysqli_connect('127.0.0.1','root','','ristotemplate');

      $connR=mysqli_connect('127.0.0.1','root','','ristotemplate');

      if($_POST)
      {
          mysqli_query($connL,"insert into cucine(nome) values(\"".$_POST['kitchenName']."\");");
          echo $_POST['kitchenName'];
      }

      header('location: ./creaCucina.php');
?>