<?php
      $connL=mysqli_connect('127.0.0.1','root','','ristotemplate');

      $connR=mysqli_connect('127.0.0.1','root','','ristotemplate');

      function checkID()
      {   global $connL;
          $max=0;
          $q="select idCategoria from categorie;";
          $piatti=mysqli_query($connL,$q);
          while($row=mysqli_fetch_array($piatti))
          {
          
                  if((int)$row[0]>=$max)
                  {
                      $max=(int)$row[0]+1;
                  }
          }
          return strval($max);
      }

      if($_POST)
      {
          mysqli_query($connL,"insert into categorie(idCategoria, nomeCategoria) values(\"".checkID()."\",\"".$_POST['catName']."\");");
          echo $_POST['kitchenName'];
      }

      header('location: ./categorie.php');
?>