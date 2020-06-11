<?php 
    $connL=mysqli_connect('127.0.0.1','root','','ristotemplate');

    $connR=mysqli_connect('127.0.0.1','root','','ristotemplate');

    function checkID()
    {   global $connL;
        //$id=randomID();
        $max=0;
        $q="select idPiatto from piatti;";
        $piatti=mysqli_query($connL,$q);
        while($row=mysqli_fetch_array($piatti))
        {
            //if($id==$row[0]){
              //  $id=randomID();}

                $max=0;
                if((int)$row[0]>=$max)
                {
                    $max=$row[0]+1;
                }
        }
        return strval($max);
    }

    function randomID()
    {
        $str=null;
        for($i=0;$i<3;$i++)
        {
            $str=strval($str.rand(0,9));
        }

        return $str;
    }



    if($_POST)
    {
        $query= "insert into piatti (idPiatto,nomePiatto,descPiatto,idCategoria,imgPath,prezzo,idCucina) values('".checkID()."','".$_POST['nomePiatto']."','".$_POST['descPiatto']."','".$_POST['descPiatto']."','none',".$_POST['price'].",'".$_POST['cucina']."');";
        if(mysqli_query($connL, $query))
        {
           header('location: ./mieiPiatti.php');

        }
        else
        {
            //echo "Error: " . $query . "<br>" . mysqli_error($connL);
            header('location: ./404.html');
        }
    }

   
?>