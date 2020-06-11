<?php
      $connL=mysqli_connect('127.0.0.1','root','','ristotemplate');

      $connR=mysqli_connect('127.0.0.1','root','','ristotemplate');


      function checkID()
        {   global $connL;
            $max=0;
            $q="select idTavolo from tavoli;";
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

      
          $query="insert into tavoli(idTavolo, urlTavolo, status) values(\"".checkID()."\",\"none\",'0');";
          if(mysqli_query($connL,$query))
             header('location: ./tavoli.php');
          else
             echo "Error: " . $query . "<br>" . mysqli_error($connL);
             //echo $_POST['kitchenName'];
      

      
?>