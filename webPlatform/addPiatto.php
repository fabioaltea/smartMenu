<?php 
    $connL=mysqli_connect('127.0.0.1','root','','ristotemplate');

    $connR=mysqli_connect('127.0.0.1','root','','ristotemplate');

    if($_POST)
    {
        mysqli_query($connL, "INSERT INTO `piatti`(`idPiatto`, `nomePiatto`, `descPiatto`, `idCategoria`, `imgPath`, `prezzo`, `idCucina`) VALUES (,[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])")
    }
?>