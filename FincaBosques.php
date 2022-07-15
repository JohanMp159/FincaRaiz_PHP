<?php
    include("Conexion.php");

    $enviar = $_POST["enviar"];

    if($enviar=="Enviar")
        {
            $nombre=$_POST['txtnombre'];
            $codigo=$_POST['txtcodigo'];
            $telefono=$_POST['txttel'];
            $Vinicial=$_POST['txtVIni'];
            $Vrest=$_POST['txtVRest'];
            $FIng=$_POST['txtFIng'];
            $FRet=$_POST['txtFRet'];
           
            /*Ejecutamos la consulta:
            Creamos una variable que será quien contendra la consulta realizada $sqlguardar. */
            $sqlguardar="SELECT nombre FROM FincaBosques WHERE nombre = '$nombre' ORDER BY nombre";
            /*Especificamos el procedimiento mysqli_query() para ejecutar la consulta
            1er parametro: conexion... ($MySQLiconexion)
            2do parametro: consulta... (Quienes tienen el permiso "$sqlguardar" */
            if($result=mysqli_query($MySQLiconexion,$sqlguardar))
            {
                $nroregistros=mysqli_num_rows($result);
                if($nroregistros > 0)
                {
                    echo "<script>alert('El usuario ya existe!');</script>";
                } else {
                    $guardado = $MySQLiconexion->query("insert into FincaBosques(nombre,codigo,telefono,Val_Inicial,Val_Restante,Fecha_Ingreso,Fecha_Retiro) values ('$nombre','$codigo','$telefono','$Vinicial','$Vrest','$FIng','$FRet')");
                    if(!$guardado)
                    {
                        echo $MySQLiconexion->error;
                    } else {
                        echo "<script>alert('Se envió correctamente!');</script>";
                    }
                }
            }
        } 
    
?>    


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>FincasRaiz</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-cale=1.0, maximun-scale=3.0, minium-scala=1.0">
    <link rel="stylesheet" href="CSS/Css.css">
    <link rel="stylesheet" type="text/css" href="CSS/font.css">
</head>
<body>
    <header class="main-header">
		<div class="container container--flex">
			<div class="logo-container column column--50">
				<h1 class="logo">FincaRaiz</h1>	
			</div>
			<div class="main-header__contactInfo column column--50">
				<p class="main-header__contactinfo__phone">
					<span class="icon-telephone">555-99-44</span>
				</p>
				<p class="main-header__contactInfo__address">
					<span class="icon-location">Sabaneta - Ant, Colombia</span>
				</p>
			</div>
		</div>
	</header>
	<nav class="main-nav">
		<div class="container container--flex">	
			<span class="icon-bars" id="btnmenu"></span>
			<ul class="menu" id="menu">
			    
				<li class="menu__item"> <a href="VillaMaria.php" class="menu__link">Finca Villa Maria</a></li>
				<li class="menu__item"> <a href="AguaClara.php" class="menu__link ">Finca Agua Clara</a></li>
				<li class="menu__item"> <a href="FincaBoques.php" class="menu__link menu__link--select">Finca Bosques</a></li>
				<li class="menu__item"> <a href="VillaSol.php" class="menu__link">Finca Villa Sol</a></li>
			</ul>
			<div class="social-icon">
				<a href="" class="social-icon__link"> <span class="icon-facebook"> </span></a>
				<a href="" class="social-icon__link"> <span class="icon-twitter"> </span></a>
				<a href="" class="social-icon__link"> <span class="icon-mail"> </span></a>
			</div>
		</div>
    </nav>
	<section class="banner" class="container--flex">
		<img src="Images/Finc6.jpg" alt ="" class="banner__img">
		<div class="banner__content" >
           <div>
           <h2>Bossques</h2>
           <h6>$1'600.000</h6><br>
            <h4>El ambiente más limpio en  <br>
            el departamento de Antioquia. </h4>
           </div>
            <img src="Images/Finc6_1.jpg" alt ="" class="img_cuad" height="170px;" width="200px" >
            <img src="Images/Finc5.jpg" alt ="" class="img_cuad" height="170px;" width="200px" >
            <img src="Images/Finc2.jpg" alt ="" class="img_cuad" height="170px;" width="200px" >
            <img src="Images/Finc4.png" alt ="" class="img_cuad" height="170px;" width="200px" >
        </div>
    </section>
    <section class="group group--color">
			<div class="container">
				<h2 class="main__title"> Bienvenido a Finca Raiz </h2>
				<p class="main__txt"> Estamos para brindarte la mejor experiencia y comodidad compartiendo en los lugares más increibles, verdes y amplios </p>
			</div>
    </section>
    
    
    <div class="contener_flexbox">
        <section class="group main__about__description item1">
			<div class="container container--flex">
				<div    class="column column--50" >
					<img src="Images/Finc4.png" alt="">
				</div>
				<div class="column column--50">
				    <form action="" method="post" class="formAlq">
                        <h1 class="h1form">Diligenciar Formulario de Alquiler </h1>
                        <input type="text" placeholder="NOMBRE: " name="txtnombre">
				        <input type="text" placeholder="CÓDIGO: " name="txtcodigo"> 
				        <input type="text" placeholder="TELÉFONO: " name="txttel"> 
				        <input type="text" placeholder="VALOR INICIAL: " name="txtVIni">
				        <input type="text" placeholder="VALOR RESTANTE: " name="txtVRest">
				        <input type="date" placeholder="FECHA INGRESO: " name="txtFIng">
				        <input type="date" placeholder="FECHA RETIRO: " name="txtFRet"> 
				        <input type="submit" name="enviar" value="Enviar">
				    </form>
				
				
				
				
				
				
				
					<!-- <h3 class="column__title">Expertos en espacios verdes </h3>
					<p class="column__txt"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. </p>
					<a href="" class="btn btn--contact">Alquilar</a> -->
				</div>
			</div>
		</section>
		<!-- <section class="group main__about__description ">
			<div class="container container--flex">
				<div class="column column--50 item1" >
					<img src="Images/Finc4.png" alt="">
				</div>
				<div class="column column--50 item2">
					<h3 class="column__title">Expertos en espacios verdes </h3>
					<p class="column__txt"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. </p>
					<a href="" class="btn btn--contact">Alquilar</a>
				</div>
			</div>
		</section> -->
		<!-- 
		<section class="group main__about__description ">
			<div class="container container--flex">
				<div    class="column column--50" >
					<img src="Images/Finc5.jpg" alt="" >
				</div>
				<div class="column column--50">
					<h3 class="column__title">Expertos en espacios verdes </h3>
					<p class="column__txt"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. </p>
					<a href="" class="btn btn--contact">Alquilar</a>
				</div>
			</div>
		</section>
		<section class="group main__about__description ">
			<div class="container container--flex">
				<div    class="column column--50 item1" >
					<img src="Images/Finc4.png" alt="">
				</div>
				<div class="column column--50 item2">
					<h3 class="column__title">Expertos en espacios verdes </h3>
					<p class="column__txt"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. </p>
					<a href="" class="btn btn--contact">Alquilar</a>
				</div>
			</div>
		</section>
           -->
    </div>
		

</body>
</html>