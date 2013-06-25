<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php


if(isset($_POST['inputnombre'])){
   $hostname_cnx = "localhost:8889";
   $database_cnx = "toddycl";
   $username_cnx = "toddycl";
   $password_cnx = "pepsico";

   $cnx = mysql_pconnect($hostname_cnx, $username_cnx, $password_cnx) or trigger_error(mysql_error(),E_USER_ERROR);
   mysql_select_db($database_cnx, $cnx);

	$query = mysql_query("INSERT INTO toddy_suiza (`nombre` , 
												`apellido` ,  
												`rut` ,
												`email`, 
												`celular`,
												`direccion` ,
												`comuna` , 
												`region` ,
												`boleta` ,
												`ip` 
												) VALUES (
												'".utf8_decode(ucwords(strtolower($_POST['inputnombre'])))."',
												'".utf8_decode(ucwords(strtolower($_POST['inputApellido'])))."',
												'".utf8_decode(strtolower($_POST['inputRut']))."',
												'".utf8_decode(strtolower($_POST['inputEmail']))."',
												'".utf8_decode(ucwords(strtolower($_POST['inputCelular'])))."',
												'".utf8_decode(ucwords(strtolower($_POST['inputDirec'])))."',
												'".utf8_decode(ucwords(strtolower($_POST['inputComuna'])))."',
												'".utf8_decode(ucwords(strtolower($_POST['inputRegion'])))."',
												'".utf8_decode(ucwords(strtolower($_POST['inputDato'])))."',
												'".$_SERVER['REMOTE_ADDR']."')");
	header( 'Location: form_exito.php' );

}


?>

<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Toddy</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="bootstrap/css/master_suiza.css">
	<link rel="stylesheet" href="css/internas.css">

	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
	
	<!--[if lt IE 9]>
		<script src="bootstrap/js/html5shiv.js"></script>
	<![endif]-->
</head>
<body>
	
	<div class="container-fluid">

		<!--botonera toddy-->
		<div id="botonera_int" class="hidden-phone hidden-tablet">
			<div id="navegacion_int">
				<div id="mover">
					<a href="index.html">
						<img border="0" src="images/logo-int-trans.png" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader (src='imgaes/logo-int-trans',sizingMethod='scale');" />
					</a>
					<a href="productos.html" id="btn1"></a>
					<a href="juegos.html" id="btn2"></a>
					<a href="comics.html" id="btn3"></a>
					<div id="share">
						<a href="http://twitter.com/toddy_cl" target="_blank" id="share1"></a>
						<a href="http://www.facebook.com/ToddyChile" target="_blank" id="share2"></a>
						<a href="http://www.youtube.com/user/toddychile?feature=watch" target="_blank" id="share3"></a>
					</div>
				</div>
			</div>
		</div>

		<div class="row-fluid hidden-desktop" style="background-image:url('images/top-int-trans.png');position:relative;z-index:99;background-repeat:repeat-x;height:80px;">
			
			<img border="0" src="images/logo-int-trans.png" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader (src='imgaes/logo-int-trans',sizingMethod='scale');" />

		</div>
		
		<div class="row-fluid">
			
			<div class="span12 text-center">

				<img class="headers" src="images/tit_suiza.gif" alt="Gana un viaje Suiza"/>
				
				<div class="row-fluid bg-w">
					
					<div class="span6 offset6 text-right text_prin">
						
						<p>Suiza está muy cerca, sólo debes comprar Toddy pa’ la leche en <img src="images/desta_tit.gif"/>, llenar este formulario y ya estarás participando por un viaje para 2 personas!</p>

					</div>

					<div class="span6 vaca">
						
						<img src="images/toddy_less.gif"/>

					</div>

					<div class="row-fluid">
						
						<div class="span11 form well-small">
						
							<form action="" id="formulario">
							
								<div class="error text-center well-small hide">
									No seai pollo, revisa los campos en rojo.
								</div>

								<div class="span6 text-left">

													
									<div class="control-group">											
										<label class="control-label pull-left" for="inputNombre">nombre</label>
										<div class="controls">
											<input type="text" id="inputnombre" class="campo" name="inputNombre"  placeholder="Toddy">
											</div>

										</div>
										
										<div class="control-group">

											<label class="control-label pull-left" for="inputApellido">apellido</label>
											<div class="controls">
												<input type="text" id="inputApellido" class="campo" name="inputApellido" placeholder="Vacuno" >
											</div>
											
										</div>
										
										<div class="control-group">

											<label class="control-label pull-left" for="inputRut">rut</label>
											<div class="controls">
												<input type="text" id="inputRut" class="campo" name="inputRut" placeholder="Rut" >
											</div>
											
										</div>
										
										<div class="control-group">

											<label class="control-label pull-left" for="inputEmail">e-mail</label>
											<div class="controls">
												<input type="text" id="inputEmail" class="campo" name="inputEmail" placeholder="Toddy@vacuno.cl" >
											</div>
											
										</div>
										
										<div class="control-group">

											<label class="contrl-label pull-left" for="inputCelular">celular</label>
											<div class="controls">
												<input type="text" id="inputCelular" class="campo" name="inputCelular" placeholder="Celular" >
											</div>
											
										</div>
										
										<div class="control-group">

											<label class="control-label pull-left" for="inputDirec">direccion</label>
											<div class="controls">
												<input type="text" id="inputDirec" class="campo" name="inputDirec" placeholder="Direccion">
											</div>
											
										</div>
										
										<div class="control-group">

											<label class="control-label pull-left" for="inputComuna">comuna</label>
											<div class="controls">
												<select id="inputComuna" class="campo" name="inputComuna">
													
													<option value="santiago">Santiago</option>

												</select>
											</div>
											
										</div>
										
											
										<div class="control-group">

											<label class="control-label pull-left" for="inputRegion">region</label>
											<div class="controls">
												<select id="inputRegion" class="campo" name="inputRegion" >
													
								

												</select>
											</div>
											
										</div>
													
								</div>

								<div class="span5 text-left">
									
									<div class="control-group">

											<label class="control-label" for="inputDato">nº boleta</label>
											<div class="controls">
												<input type="text" id="inputDato" class="campo" name="inputDato" placeholder="xxxxxx" style="height:45px;width:90%;" class="text-center" >
											</div>

										</div>

										<p style="margin-bottom:30px;margin-top:20px;">Términos y condiciones La información entregada es de uso exclusivo de Evercrisp S.A. Tus datos serán tratados de forma confidencial y bajo ningún motivo serán utilizados con fines ajenos a la promoción, ni entregados a terceros.</p>
										
										<div class="control-group" style="margin-bottom:30px">

											<div class="controls">
												
												<input type="checkbox" id="mayor" class="campo" name="mayor" class="check pull-left" >
												<label class="checkbox control-label pull-left">
												Declaro ser mayor de 18 años y <a href="">acepto las bases de inscripción.</a>
												</label>

											</div>
											
										</div>
										
										<div style="margin-bottom:30px" class="control-group text-center">

											<div class="controls">
												<input class="btn_parti" type="button" value="participar">	
											</div>
											
										</div>

										<p id="legal" class="pull-left">Promoción válida desde el 27 de Junio al 27 de Agosto del 2013. Bases en notaría Musalem.</p>
										<div class="pull-left">
											
											<img style="margin-left:4px" src="images/logo_jumbo.gif"/>

										</div>

									<div class="clearfix"></div>

								</div>

							</form>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>


	<footer class="footer-fix container-fluid text-center">® Copyright PepsiCo 2013 - Todos los derechos reservados.</footer>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="js/form.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>