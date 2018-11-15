
<?php 
echo "<!DOCTYPE html>\n"; 
echo "<html>\n";
echo " <head>\n"; 
echo " <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n"; 
echo " <title>JSP Page</title>\n"; 
echo " <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\"/>\n"; 
echo " <link href=\"css/newcss.css\" rel=\"stylesheet\" type=\"text/css\"/>\n"; 
echo " </head>\n";
echo " <body background=\"imagenes/fondo2.jpg\"> \n";
echo " <div class=\"container well\"id=\"login\"> \n"; 
echo " <form>\n"; 
echo " <div class=\"form-group\">\n"; 
echo " <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Email\">\n"; 
echo " </div>\n"; 
echo " <div class=\"form-group\">\n"; 
echo " <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">\n";
echo " </div>\n"; 
echo " <center> <button type=\"submit\" class=\"btn btn-primary\"id=\"iniciar\">Iniciar sesión</button></center>\n"; 
echo " <text>¿No tienes una cuenta? </text>\n"; 
echo "<a href=\"registrar.php\" >Registrate</a>\n"; 
echo "</form> \n"; 
echo " </div>\n"; 
echo " </body>\n"; 
echo "</html>\n"; ?>
