<?php
    echo $_SERVER['REQUEST_METHOD'];
    //var_dump($_POST);
    echo "<br>".$_POST['mandar'];
    $llego = explode('|',$_POST['mandar']);
    echo count($llego);
    for ($i=0; $i<count($llego);$i++)
    {
        echo "<br>".$i;
        if ($llego[$i]=="0")
        {
            echo 'adentro';
            echo "<br>".$llego[$i]."<br>";
            unset($llego[$i]);
        }
        else
        {
            echo 'salio';
            echo "<br>".$llego[$i]."<br>";
            //var_dump($llego);
        }
      }
?>
