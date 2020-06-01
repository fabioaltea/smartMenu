<?php
  $conn=mysqli_connect('127.0.0.1','root','','ristotemplate');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">

    <title>Cucina</title>
  </head>
  <body>

  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" >Restaurant Name - Kitchen Name</a>
    <a class="navbar-brand form-inline my-2 my-lg-0" >
    <?php 
    

    $now = new DateTime();
    echo $now->format('d-m-Y H:i');  
    ?>
    </a>
  </nav>

    
    <div class="container">
      <div class="row">
      <?php 

        function clear()
        {
          for($i=0;$i<=$n;$i++)
          {
              "<a data-toggle=\"collapse\" class=\"col-sm kitchenTable0 invisible collapsed\" href=\"#collapse".$n."\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                  <div class=\"col-sm card card-body kitchenTable".$row[2]." visible\"><center>". $row[0]."
                  </center>
                  </div>
                </a>";
          }
        }

        $tavoli=mysqli_query($conn, "select * from tavoli;");
        $c=0;
        $n=mysqli_num_rows($tavoli);
        while($row = mysqli_fetch_array($tavoli, MYSQLI_BOTH))
        {
            if($c>4)
            {
              echo "</div><div class=\"row\">";
              $c=0;
            }
            echo "<a data-toggle=\"collapse\" style=\"\"class=\"col-sm kitchenTable0 invisible\" href=\"#collapse".$row[0]."\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                    <div class=\"col-sm card card-body kitchenTable".$row[2]." visible\"><center>". $row[0]."
                    </center>
                    </div>
                  </a>";
                  
            $c=$c+1;
            
           
            
            echo "<div class=\"tableInfo\"><div class=\"collapse\" id=\"collapse".$row[0]."\">
                    <div class=\"card card-body tableInfo\" style=\"height:600px;\">
                    ".$row[0]."
                    <button type=\"button\" class=\"close\"  data-target=\"#collapse".$row[0]."\" data-dismiss=\"alert\">
                    </div>
                 </div></div>";
        }
        while($c<5)
        {
            echo  "<a class=\"col-sm kitchenTable0 invisible\"><div class=\"col-sm kitchenTableH\"></div></a>";
            $c=$c+1;
        }
        
        
        
        
      ?>
      </div>    
    </div>

    

    </div>

    <!-- Optional JavaScript -->
    <script type="text/javascript">
      function clear(id)
      {
          var string=concat("collapse",id.toString());
          var div=document.getElementById(string);
          div.style.visibility='hidden';
      }
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>