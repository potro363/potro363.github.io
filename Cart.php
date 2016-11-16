<html>
    <head>
        <meta charset="UTF-8">
        <title>Materiales de Laboratorio</title>
        <link rel="stylesheet" href="Estilos/PageU.css"/>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function()
                {
                    alert('ready');
                    var data = <?php echo json_encode($_POST['arreglo']) ?>;
                    tratar = data.split("|");
                    alert(tratar);
                    
                    $("button").click(function() 
                        {
                            function implode(ar)
                            {
                                var imploded=ar[0];
                                for (i=1; i<ar.length; i++)imploded += '|' + ar[i];
                                return imploded
                            }
                            if(this.id=="pedido")
                            {
                                alert('esta aqui');
                                $('#mandar').val(implode(tratar));
                                document.getElementById('checkout').submit();
                            }
                            else
                            {
                                alert(this.id); // or alert($(this).attr('id'));
                                tratar.splice(this.id,1,"0");
                                alert(tratar);
                                $(this).closest('tr').remove();
                                var elem = document.getElementById(this.id);
                                elem.parentNode.removeChild(elem);
                                
                            }   
                        });
                });
        </script>
    </head>
    <body>
        <div id="container">
            <div id="banner">
               <div style="display: inline-block;width: 870px; text-align: center">
                   <br>
                <p> Materiales de Laboratorio para estudiantes de Ingenieria Electronica<p/> 
              </div>
            </div>
            
          <div id="nav">
              <span id="urhere"><a href="index.php">BACK</a></span>
          </div> <!-- end div "nav" -->

          <div id="content">
            <p>Usted posee estos items en su carrito.</p>
            <br>
            <table style="width:80%; text-align: center; vertical-align:middle; outline: 2px solid" border="1px" >
                <thead>
                    <tr>
                        <th style="text-align:center;" height="25"> Descripcion </th>
                        <th style="text-align:center;" height="25"> Cantidad </th>
                    </tr>
                </thead>
                
                <tbody height="25">
                    <?php
                        $dbcnx = mysqli_connect("localhost","root","","probando") or
                        die("Problemas con la conexión");
                        $materiales =$_POST['arreglo'];
                        $tuVector = explode('|',$materiales);
    //                    print_r($tuVector);
    //                    for ($i=0; $i<count($tuVector);$i++)
    //                         echo "<br>".$tuVector[$i]."<br>"; 
                        $i=0;
                         foreach ($tuVector as &$value)
                         {
                             $value=  explode(',', $value);
                             $query = "SELECT * from componentes WHERE COM_CODIGO='$value[0]'";
                             $result = mysqli_query($dbcnx,$query);

                             $query_data = mysqli_fetch_row($result);
                             echo  "<tr><td>".$query_data[2]."</td>".
                                   "<td>  ".$value[1]."</td>";
                             echo '<td width=80>';
                             echo '<button class="btn btn-danger" id="'.$i++.'">Delete</button>';
                             echo '</td></tr>';
                         }
                    ?>
                </tbody>
            </table>
            <br>
            <form id="checkout" method="post" action="prueba.php">
                <button style="min-width: 120px;" class="btn btn-success" id="pedido" >Realizar Pedido</button>
                <input id="mandar" type="hidden" name="mandar" value="" />
            </form>
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
