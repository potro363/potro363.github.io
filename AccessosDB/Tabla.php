

<?php
$conexion= mysqli_connect("localhost","root","","probando") or
                   die("Problemas con la conexión");

                $registros=  mysqli_query($conexion,"select * from alumnos")
                or die("Problemas en el select ".mysqli_error($conexion));
                
                while ($reg= mysqli_fetch_array($registros))
                {
                    echo "<tr><td>".htmlentities($reg["ALU_CODIGO"])."</td>";
                    echo "<td>".htmlentities($reg["ALU_NOMBRES"])."</td>";
                    echo "<td>".htmlentities($reg["ALU_CEDULA"])."</td>";
                    echo "<td>".htmlentities($reg["ALU_DIRECCION"])."</td></tr>\n";
                }
                mysqli_close($conexion);
?>