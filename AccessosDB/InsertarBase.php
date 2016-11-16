
<?php
    $conexion= mysqli_connect("localhost","root","","probando") or
                    die("Problemas con la conexión");

                mysqli_query($conexion,"insert into alumnos(nombre,codigo,materia) values 
                       ('$_REQUEST[nombre]',$_REQUEST[codigo],'$_REQUEST[materia]')")
                or die("Problemas en el select ".mysqli_error($conexion));

                mysqli_close($conexion);
                $mostrarDatos = "Su nombre es: ".$_REQUEST['nombre']." con codigo: ".$_REQUEST['codigo']." y materia: ".$_REQUEST['materia'];
                echo $mostrarDatos;
?>
