<?php 
echo "<!DOCTYPE html>\n"; 
echo "<html>\n"; 
echo " <head>\n"; 
echo " <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n"; 
echo " <title>Login</title>\n"; 
echo " <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\"/>\n"; 
echo " <link href=\"css/newcss.css\" rel=\"stylesheet\" type=\"text/css\"/>\n"; 
echo " </head>\n"; 
echo " <body background=\"imagenes/fondo2.jpg\" > \n"; 
echo " <center><img style=\"float:top; margin:1px;\" alt=\"\" src=\"imagenes/mapa5.png\" width=\"70\" height=\"70\" />\n"; 
echo " </center> <font face=\"SimSun-ExtB\" size=\"7\" color=\"black\"> <center id=\"titulo1\">PackTex</center></font>\n"; 
echo " <div class=\"container well\"id=\"login\"> \n"; 
echo " <form>\n"; 
echo " <div class=\"form-group\">\n";
echo " <input type=\"email\" class=\"form-control input-lg\" id=\"exampleInputEmail1\" placeholder=\"E-mail\">\n"; 
echo " </div>\n"; 
echo " <div class=\"form-group\">\n"; 
echo " <input type=\"password\" class=\"form-control input-lg\" id=\"exampleInputPassword1\" placeholder=\"Clave\">\n"; 
echo " </div>\n"; 
echo " <center> <button type=\"submit\" class=\"btn btn-primary btn-lg\"id=\"iniciar\">Iniciar sesión</button></center>\n"; 
echo " <text>¿No tienes una cuenta? </text>\n"; 
echo "<a href=\"https://packtex.herokuapp.com/registrar\" >Registrate</a>\n"; 
echo "</form> \n"; 
echo " </div>\n"; 
echo " </body>\n";
echo "</html>\n"; ?>
