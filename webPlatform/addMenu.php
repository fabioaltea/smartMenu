<?php 
    $connL=mysqli_connect('127.0.0.1','root','','ristotemplate');

    $connR=mysqli_connect('127.0.0.1','root','','ristotemplate');

    function checkID($table)
    {   global $connL;
        $max=0;
        $q="select idMenu from ".$table.";";
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

    $menuID=checkID("menus");

    function insertInMenu()
    {
        global $menuID;
        global $connL;
        $q="select * from piatti;";
        $piatti=mysqli_query($connL,$q);
        $nPiatti=mysqli_num_rows($piatti);
        for($i=0;$i<$nPiatti-1;$i++)
        {
            if($_POST['check'.$i])
            {
                $inmenu="insert into neimenu (id,idMenu,idPiatto) values('".checkID("neiMenu")."','".$menuID."',".$i.");";
                if(mysqli_query($connL,$inmenu))
                {
                    //echo "query ok";
                }
                else
                {
                    //echo "Error: " . $inmenu . "<br>" . mysqli_error($connL);
                }
            }
        }
    }



    if($_POST)
    {
        $query= "insert into menus (idMenu,nomeCarta,descCart,imgPath) values('".$menuID."','".$_POST['nomeMenu']."','".$_POST['descMenu']."','none');";
        if(mysqli_query($connL, $query))
        {
            insertInMenu();
            header('location: ./mieiMenu.php');

        }
        else
        {
           echo "Error: " . $query . "<br>" . mysqli_error($connL);
            //header('location: ./404.html');
        }
    }

   
?>