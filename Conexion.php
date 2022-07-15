<?php
    /* define('_HOST_NAME','localhost');
     define('_DATABASE_NAME','bdfacturacion');
     define('_DATABASE_USER_NAME','root');
     define('_DATABASE_PASSWORD','');*/
     
 	$servidor='localhost';
    $basedatos='bdFincaRaiz';
    $usuario='root';
    $contrasena='';
     /*$MySQLiconn = new MySQLi(_HOST_NAME,_DATABASE_USER_NAME,_DATABASE_PASSWORD,_DATABASE_NAME);*/
     $MySQLiconexion = new MySQLi($servidor,$usuario,$contrasena,$basedatos);
  
     if($MySQLiconexion->connect_error)
     {
       die("ERROR: -> ".$MySQLiconexion->connect_error);
     }


?>