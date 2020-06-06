<?php
  $conn=mysqli_connect('127.0.0.1','root','','ristotemplate');
   
  
  function setState()
   {

     if (isset($_POST['0'])) {
      $state=0;
      }
      if (isset($_POST['1'])) {
        $state=1;
        }
      if (isset($_POST['2'])) {
          $state=2;
        }
          
      return $state;
   }


  if($_POST)
  {

    $setstate="update portate 
              set stato=".setState()."
              where idPortata= (select idPortata
                                from portate, ordini 
                                where ordini.idOrdine=portate.idOrdine
                                and idPortata=".$_POST['idPortata']."
                                and portate.idOrdine=".$_POST['idOrdine']."
                                and ordini.data=(SELECT max(data) 
                                                  from ordini));";

  
    mysqli_query($conn,$setstate);

    
  }

  if($_POST)
  {
    echo "<script type=\"text/javascript\"> showDiv(".$_POST['idTavolo'].");</script>";
  }
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
    
      <div class="midDiv">
        <div class="row">
        <?php 

          

          $tavoli=mysqli_query($conn, "select * from tavoli;");
          $c=0;

          while($row = mysqli_fetch_array($tavoli, MYSQLI_BOTH))
          {
              if($c>3)
              {
                echo "</div><div class=\"row\">";
                $c=0;
              }
              
              echo "<div class=\"card card-body kitchenTable\">".$row[0]."<input type=\"button\" class=\" kitchenTable".$row[2]." visible\" name=\"answer\" onclick=\"showDiv(".$row[0].")\"></input></div>";
                    
              $c=$c+1;
              
          }
          while($c<4)
          {
              echo  "<a class=\"col-sm kitchenTable0 invisible\"><div class=\"col-sm kitchenTableH\"></div></a>";
              $c=$c+1;
          }
 
        ?>
        </div>    
      </div>
      <div class="midDiv" id="right">
          
      

      <?php  

          
            
            function checkState($actual,$state)
            {
              if ($actual!=$state)
                return "btn-outline";
              else
                return "btn";
            }

            $tavoli=mysqli_query($conn, "select * from tavoli;");
            while($row = mysqli_fetch_array($tavoli, MYSQLI_BOTH))
            {
              
              echo "<div id=\"".$row[0]."\" class=\"coll\" style=\"display:none; border:1px solid black\">
                    <div class=\"card card-body \" style=\"height:600px; border:1px solid green;\">
                    <h4>Tavolo ".$row[0]." - Riepilogo ordine:</h4>";

                    $qord="select piatti.nomePiatto, portate.quantita, portate.stato, portate.idPortata, ordini.idOrdine
                            from portate, ordini, tavoli, piatti 
                            WHERE portate.idPiatto=piatti.idPiatto 
                            and ordini.idOrdine=portate.idOrdine 
                            and ordini.idTavolo=tavoli.idTavolo 
                            and tavoli.idTavolo=".$row[0]." 
                            and ordini.data=(SELECT max(data) from ordini);";


            
              

              $ordine = mysqli_query($conn, $qord);
              while($portata=mysqli_fetch_array($ordine, MYSQLI_BOTH))
              {
                  
                  echo "<div class=\"colOrdine\" style=\"margin-top:30px;\">
                        <h6>
                          <div class=\"row\" >
                            <div class=\"col-sm\">
                              <b>".$portata[0]."</b>
                            </div>
                            <div class=\"col-\">
                              x".$portata[1]."
                            </div>
                          </div>

                          <div class=\"row\" style=\"margin-top:5px;\">
                            <div class=\"col-md\">
                                Stato:  
                                        <form method=\"post\" action=\"cucina.php\" style=\"width:300px; float:right;\">
                                          <input type=\"hidden\" name=\"idPortata\" value=\"".$portata[3]."\">
                                          <input type=\"hidden\" name=\"idTavolo\" value=\"".$row[0]."\">
                                          <input type=\"hidden\" name=\"idOrdine\" value=\"".$portata[4]."\">
                                          

                                           <label value=\"In attesa\" class=\"btn ".checkState($portata[2],0)."-danger btn-sm\">
                                             <input type=\"submit\" name=\"0\" style=\"margin-left:5px; margin-right:5px; display:none;\">
                                            In Attesa</label>

                                            <label value=\"In attesa\" class=\"btn ".checkState($portata[2],1)."-warning btn-sm\">
                                             <input type=\"submit\" name=\"1\" style=\"margin-left:5px; margin-right:5px; display:none;\">
                                            In preparazione</label>

                                            <label value=\"In attesa\" class=\"btn ".checkState($portata[2],2)."-success btn-sm\">
                                             <input type=\"submit\" name=\"2\" style=\"margin-left:5px; margin-right:5px; display:none\">
                                            Uscito</label>
                                           
                                        </form>
                            </div>
                          </div></h6>
                          </div>";
                    
              }
              echo  "</div> </div>";
             

            }
              
              
            
          
          ?>
          </div>

      

<script type="text/javascript">
function showDiv(toggle){
  
  var x = document.getElementsByClassName("coll");
  var i;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  } 

  document.getElementById(toggle).style.display='block';

}
</script>





      






    <!-- Optional JavaScript -->

    


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    

    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>