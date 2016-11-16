<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Materiales de Laboratorio</title>
        <link rel="stylesheet" href="Estilos/PageU.css"/>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
    </head>
    <body>
        <div id="container">
            <div id="banner">
               <div style="display: inline-block; width: 737px; text-align: center">
                   <br>
                <p> Materiales de Laboratorio para estudiantes de Ingenieria Electronica<p/> 
              </div>
                <!--BOTON DE SHOPPING CART-->
              <div style="display: inline-block; float: right ; clear:right;" >
                  <a href="aqui" class="btn btn-info btn-lg">
                <span class="glyphicon glyphicon-shopping-cart" > Cart: 0</span> 
                </a>
              </div>
            </div>

          <div id="nav">
              <span id="urhere"><a href="index.php">BACK</a></span>
          </div> <!-- end div "nav" -->

          <div id="content">
            <p>Tabla Recuperada.</p>
            <br>
            
            <!--Se crea la Tabla donde iran los datos de la Base -->
            <table  border="black">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Codigo</th>
                    <th>Materia</th>
                </tr> 
            <?php
                include_once './AccessosDB/Tabla.php';
            ?>    
            </table>
          
          </div> <!-- end div "content" -->
          <div id="footer">
            <ul>
                <li><a href="">Web </a></li>
                <li><a href="">Careers </a></li>
                <li><a href="">Help </a></li>
                <li><a href="">Contact us </a></li>
            </ul>
            &copy; 2016 Materiales de Laboratorio. All Rights Reserved.<br />
            <!-- this is your copyright statement - change the date here -->
          </div> <!-- end div "footer" -->

        </div>
    </body>
</html>
