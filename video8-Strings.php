<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <style>
            .resaltar{
                color: red;
                font-weight: bold;
            }
            
            
        </style>
            
            
            
            
    </head>
    <body>
        <?php
            echo "<p class='resaltar'>Esto es un ejemplo de frase</p>";  //coge los estilos declarados antes como .reslatar
        
            $nombre="alex";
            echo "Hola $nombre";
            
            echo"<br>";
            
            $variable1="CASA";
            $variable2="CASA";
            
            $resultado1 = strcasecmp($variable1, $variable2); //devuelve 1 si no son iguales. 0 si son iguales
            if ($resultado1==false) {
                 echo "Las cadenas coinciden"; 
            }  else {
                echo "Las cadenas no coinciden";  
            }
            //echo "el resultado es $resultado1";
            
            //$resultado2 = strcasecmp($variable1, $variable2);
            //echo "<br>el resultado es $resultado2";

        
        ?>
    </body>
</html>
