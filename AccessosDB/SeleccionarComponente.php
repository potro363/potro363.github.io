<?php
$conexion= mysqli_connect("localhost","root","","probando") or
         die("Problemas con la conexión");

     echo "<option>--Seleccione Componente--</option>";
     $sql = mysqli_query($conexion, "SELECT * FROM componentes");
     while ($row = $sql->fetch_assoc())
      {
        echo "<option value=\"".$row['COM_CODIGO']."\">" . $row['COM_NOMBRE'] ."   ".$row['COM_DESCRIPCION']. "</option>";
      }
?>      

