
<html>
<head>
   <title>Materiales de Laboratorio</title>
   <link rel="stylesheet" href="Estilos/PageU.css"/>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script>
   var array=[];
       
   $(document).ready(function()
   {
       $('#prue').click(function()
       {
           if ($('#can')[0].selectedIndex==0 || $('#SelComp')[0].selectedIndex==0)
           {
               alert("No puede elegir esta opcion!!!!!");
           }
           else{
               array.push([$('#SelComp').val(),$('#can').val()]);
               alert(" Usted eligio el componente: "+$('#SelComp').val()+" y la cantidad: "+$('#can').val());   
               $('#conteo').html(' Cart: '+array.length).fadeIn(500);
               //alert(array);
            }
        });
        
        $('#envio').click(function(){
            
            function implode(ar)
            {
            var imploded=ar[0];
            for (i=1; i<ar.length; i++)imploded += '|' + ar[i];
            return imploded
                    }
            //alert(implode(array))
            $('#arreglo').val(implode(array));
            
            //alert($('#arreglo').val());
            document.getElementById('myform').submit();
        });
   });
   </script>

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
                  <form id="myform" action="Cart.php" method="post">
                      <a href="#"  id="envio" class="btn btn-info btn-lg">
                      <span  class="glyphicon glyphicon-shopping-cart" ><p style="display:inline" id="conteo"> Cart: 0</p></span>
                      <input id="arreglo" type="hidden" name="arreglo" value="" />
                      </a>
                      
                </form>
              </div>
            </div>

          <div id="nav">
              <span id="urhere"><a href="Login.php">BACK</a></span>
          </div> <!-- end div "nav" -->

          <div id="content">
              <br>
            <?php
                include_once './AccessosDB/PruebaExiste.php';
            ?>
              <br>
              </br>
                  <table width="100%">
                      <tr>    
                          <td align="left">
                            <select id="SelComp">
                                <?php
                                  include_once './AccessosDB/SeleccionarComponente.php';
                                ?>
                            </select>
                          </td>
                          <td align="center">
                            <select id="can">
                                <option>
                                    --Cantidad--
                                </option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                          </td>
                          <td align="right">
                              <input id="prue" type="button" value="Add to Cart" class="btn btn-info btn-sm">
                          </td>    
                      </tr>
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
