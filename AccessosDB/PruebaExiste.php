<?php
session_start();
            $user=$_POST['usuario'];
            $pass=$_POST['password'];
            
            $res=authorize($user, $pass);
/*Funcion que verifica que el usuario pertenece a la base de datos*/
                function authorize($usuario,$password)
                    {
                    
                    $dbcnx = mysqli_connect("localhost","root","","probando") or
                    die("Problemas con la conexión");

                    $query = "SELECT * from alumnos WHERE ALU_CODIGO='$usuario' AND ALU_PASSWORD='$password'";
                    $result = mysqli_query($dbcnx,$query);
                  
                    if(!mysqli_num_rows($result))
                    {
                        echo "Intrduzca su Usuario y Contrasena";
                        session_destroy();
                        exit();
                        
                    }
                    else {
                        $query_data = mysqli_fetch_row($result);
                        $_SESSION['codigo'] = $query_data[0];
                        $_SESSION['cedula'] = $query_data[1];
                        $_SESSION['nombres'] = $query_data[2];
                        echo "Usted a ingresado con el nombre ".$_SESSION['nombres']." con cedula ".$_SESSION['cedula'];
                        }
                    }
?>
