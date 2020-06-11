<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">

    <title>Tavolo #</title>
  </head>
  <body>
    

  <div id="accordion">
  <nav class="navbar navbar-dark fixed-bottom bg-dark"style="height:10%;">
  <a class="nav-item " style="color:white;"><b>Totale<h4></a>
  </nav>

  <div class="menuHead">
  </div>

  <h2 class="menuTitle"><b>MenuTitle</b></h2>
      
      <?php 

      function piatti()
      {
        for($i=0;$i<10;$i++)
        {
            echo  "<li class=\"list-group-item d-flex justify-content-between lh-condensed\" style=\"border:none; border-bottom:1px solid lightgrey; padding-top:10%;padding-bottom:10%;\">
                    <div class=\"imgCard\">
                    
                    </div>
                     <div style=\"margin:20px; margin-top:5px;\">
                         <h5 class=\"my-0\">Dish Name</h5>
                         <small class=\"text-muted\">Dish Description</small>
                         <br>
                         <a class=\"ingrediente\"data-toggle=\"collapse\" href=\"#collapseExample\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                          <small class=\"text-muted\">Ingredienti: 

                          <div class=\"collapse\" id=\"collapseExample\">
                            <div class=\"card card-body\" style=\"border:none;\">
                              <ul class=\"ingrediente\">
                                <li class=\"ingrediente\">Ingrediente1</li>
                                <li class=\"ingrediente\">Ingrediente2</li>
                                <li class=\"ingrediente\">Ingrediente3</li> 
                                <li class=\"ingrediente\">Ingrediente1</li>
                                <li class=\"ingrediente\">Ingrediente2</li>
                                <li class=\"ingrediente\">Ingrediente3</li> 
                                <li class=\"ingrediente\">Ingrediente1</li>
                                <li class=\"ingrediente\">Ingrediente2</li>
                                <li class=\"ingrediente\">Ingrediente3</li> 
                              </ul>
                            </div>
                          </div>
                          </small>
                         </a>
                     </div>
                     <span class=\"text-muted\">$12</span>
                 </li>";
        }
      }
      
      for($i=0;$i<10;$i++)
      {
         echo "<div class=\"card\">
              <div class=\"card-header catHead\" id=\"headingOne\">
                <h5 class=\"mb-0\">
                    <button class=\"btn btn-link catHead\" data-toggle=\"collapse\" data-target=\"#collapse".$i."\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                    "."<b>Category Name</b>"."
                    </button>
                </h5>
            </div>

            <div id=\"collapse".$i."\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordion\">
                <div class=\"card-body\"><ul style='margin:0px; padding:0px;'>";
                echo piatti();
                echo "</ul>
                </div>
            </div>";
      }

      
        
    ?>
  </div>

  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>