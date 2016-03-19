<?php
	include("conexion.php");
	
	$id = "";
	if (isset($_GET["id"])) {
		$id = $_GET["id"];
	}
	
	$rsbuscar=mysql_query("SELECT C.id, C.nombres, C.apellidos, C.experiencia, C.link_cv, C.link_foto, C.cargo, C.dni, C.sexo, C.pais, C.departamento, C.provincia, C.distrito, C.ingreso_anual, C.inmuebles, C.muebles, C.link_infogob, C.estado, P.nombre, P.link_archivo, P.id as id_partido
	FROM candidatos AS C
	INNER JOIN partidos as P on P.id = C.idpartido
	WHERE C.id = '$id'");
	$encontrado=mysql_fetch_array($rsbuscar);
	$id_candidato = $encontrado["id"];
	$id_partido = $encontrado["id_partido"];
	$experiencia = $encontrado["experiencia"];
	$factor = 0; if($experiencia != 0){ $factor = round(100/(16/$experiencia));}
	$ingreso_anual = $encontrado["ingreso_anual"];
	$inmuebles = $encontrado["inmuebles"];
	$muebles = $encontrado["muebles"];
?>

<!DOCTYPE html>
<html class="no-js">
  
<!-- Mirrored from ottavio.kleis.agency/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Mar 2016 03:27:31 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VotoSmart</title>
    <meta name="description" content="One Page Layout">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,300,400,600,700">
    <link rel="stylesheet" href="styles/vendor.css">
    <link rel="stylesheet" href="styles/bootstrap.css">
    <link rel="stylesheet" href="styles/main.css">
    <link id="primary_color_scheme" rel="stylesheet" href="styles/theme_meadow.css">
    <link rel="stylesheet" href="styles/themes_panel.css">
    <script src="scripts/vendor/modernizr.js"></script>
    <noscript>
      <link rel="stylesheet" href="styles/styleNoJs.css">
    </noscript>
  </head>
  <body>
    <div id="load"></div><!--[if lt IE 9]>
    <p class="browsehappy">You are using an strong outdated browser. <br>Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="page">
      <!-- Start Nav Section MENU ------------------------------------------------------------------------------------------------->
      <nav id="main-navigation" role="navigation" class="navbar navbar-fixed-top navbar-standard"><a href="javascript:void(0)" class="search_button"><i class="fa fa-search"></i></a>
        <form action="busca.php" method="get" role="search" class="h_search_form" autocomplete="off">
          <div class="container">
            <div class="h_search_form_wrapper">
              <div class="input-group"><span class="input-group-btn">
					<button type="submit" class="btn btn-sm"><i class="fa fa-search fa-lg"></i></button></span>
					<input type="text" placeholder="Buscar palabras clave" name="palabra" class="form-control">
              </div>
              <div class="h_search_close"><a href="#"><i class="fa fa-times"></i></a></div>
            </div>
          </div>
        </form>
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle"><i class="fa fa-align-justify fa-lg"></i></button><a href="index.php" class="navbar-brand"><img src="img/logo-white.png" alt="" class="logo-white"><img src="img/logo-dark.png" alt="" class="logo-dark"></a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right service-nav">
                <li><a id="dropdownMenuCart"  href="qindex.php" class="dropdown-toggle"><img src="img/quechua.png" width="36px"/>&nbsp;<span class="badge">Quechua</span></a>
              </li>
            </ul>
            <button type="button" class="navbar-toggle"><i class="fa fa-close fa-lg"></i></button>
            <ul id="one-page-menu" role="menu" class="nav navbar-nav navbar-left">
              <li><a href="candidatos.php" title="Presidente" data-ref="home"><img src="http://votoinformado.pe/voto/img/candidatos/img_tituCand.png" width="36px"/>&nbsp;&nbsp;Presidente</a>
              </li>
              <li><a href="planes.php" title="Planes de Gobierno" data-ref="about"><img src="http://votoinformado.pe/voto/img/plan_gobierno/img_titu_plan_gobierno.png" width="36px"/>&nbsp;&nbsp;Planes de Gobierno </a>
              </li>
              <li><a href="congreso.php" title="Congreso" data-ref="portfolio"><img src="http://votoinformado.pe/voto/img/menu/menu3.png" width="36px"/>&nbsp;&nbsp;Congreso</a>
              </li>
              <li><a href="parlamento.php" title="Parlamento Andino" data-ref="shop"><img src="http://votoinformado.pe/voto/img/menu/menu4.png" width="36px"/>&nbsp;&nbsp;Parlamento Andino</a>
              </li>
              </li>
            </ul>
          </div>
        </div>
      </nav>
	  <!-- End Nav Section MENU ------------------------------------------------------------------------------------------------->
      <!-- Start header Section-->
      <section style="background-image: url('img/fondos/palacio.jpg');" class="header-section fading-title parallax">
        <div class="section-shade sep-top-3x sep-bottom-2x">
          <div class="section-title text-upper text-center upper light">
			<img src="http://votoinformado.pe/voto/img/img_hoja_vida.png" />
            <p class="lead">Conoce a tu candidato presidencial</p>
          </div>
        </div>
      </section>
	  <!-- End header Section ------------------------------------------------------------------------->
      <section class="sep-top-2x sep-bottom-md">
        <div class="container">
          <div class="row" class="sep-bottom-x3">
		    <div class="col-md-6 sep-bottom-md">
			  <div class="text-center">
			  <img src="<?php echo $encontrado["link_foto"]; ?>" />
              <h5 class="upper"><?php echo $encontrado["nombres"]." ".$encontrado["apellidos"]; ?></h5>
			  <p><?php echo $encontrado["nombre"]; ?></p>
			  </div>
			</div>
			<div id="charts-wrapper">
                <div class="col-md-6 text-center sep-bottom-md">
                  <div data-percent='<?php echo $factor; ?>' style="display:none" class="chart dark"><span><b data-from="0" data-to='<?php echo $encontrado["experiencia"]; ?>' class="counter">0</b><em>Años</em></span></div>
                  <p class="subtitle">Experiencia en Cargos de Elección Popular</p>
				  <br/>
				  <a href="<?php echo $encontrado["link_cv"]; ?>" target="_blank" title="Ver hoja de Vida"><button type="button" class="btn btn-primary"><i class="fa fa-floppy-o"></i>&nbsp;Ver Hoja de Vida</button></a>
				  <a href="<?php echo $encontrado["link_archivo"]; ?>" target="_blank" title="Descarga Plan de Gobierno"><button type="button" class="btn btn-success"><i class="fa fa-check-circle-o"></i>&nbsp;Plan de Gobierno</button></a>
				  <a href="<?php echo $encontrado["link_infogob"]; ?>" target="_blank" title="Ver Datos electorales en INFOGOB"><button type="button" class="btn btn-info"><i class="fa fa-thumbs-o-up"></i>&nbsp;INFOGOB Datos</button></a>
				</div>
			</div>
			</div>
			<br/>
			<div class="row">
            <div class="col-md-6 sep-bottom-md">
			 <div class="text-left">
              <p><strong>Cargo al que postula: </strong><?php echo $encontrado["cargo"]; ?></p>
			  <p><strong>Estado del candidato(a): </strong><?php echo $encontrado["estado"]; ?></p>
              <p><strong>DNI Nº: </strong><?php echo $encontrado["dni"]; ?></p><br/>
              <p><strong>Lugar de Nacimiento: </strong><?php echo $encontrado["distrito"].", ".$encontrado["departamento"].", ".$encontrado["pais"]; ?></p>
			  
             </div> 
            </div>
			
            <div class="col-md-6 text-left">
				  <?php $queryvicepresidente = "SELECT * FROM vicepresidentes WHERE id_partido = '".$id_partido."'";
				  $rowvice = mysql_query($queryvicepresidente);
				  while($rsconsultavice = mysql_fetch_array($rowvice)) {?>
				  <table width="100%">
				  <tr>
				  <td width="110px"><img src="<?php echo $rsconsultavice['link_imagen_vicepresidente']?>" width="90px" /></td>
				  <td cellspacing="10px"><p><strong>
				  <?php if ($rsconsultavice['cargo_vicepresidente']==1) {
				  	echo "Primer Vicepresidente";
				  }else{
				  	echo "Segundo Vicepresidente";
				  }?></strong><br/><?php echo utf8_encode($rsconsultavice['nombres_vicepresidente'])?></p></td>
				  </tr>
				  </table><br/>
				  <?php } ?>
			</div>
          </div>
        </div>
      </section>
      <!-- Start Counter section-->
      <div class="bg-primary">
        <div class="container">
          <div id="timer-wrapper" class="row">
            <div class="col-md-4 text-center sep-top-md sep-bottom-md">
				<?php if($ingreso_anual != 0){ ?>
				<h2 class="light"><span class="light">S/ </span><?php echo number_format($ingreso_anual, 0, '', ','); ?></h2>
				<?php } else { ?>
				<h2 class="light">No declaró</h2>
				<?php } ?>
				<p class="lead x2 light upper timer-title">Ingreso Anual</p>
            </div>
			<div class="col-md-4 text-center sep-top-md sep-bottom-md">
				<?php if($muebles != 0){ ?>
				<h2 class="light"><span class="light">S/ </span><?php echo number_format($muebles, 0, '.', ','); ?></h2>
				<?php } else { ?>
				<h2 class="light">No declaró</h2>
				<?php } ?>
				<p class="lead x2 light upper timer-title">Bienes Inmuebles</p>
            </div>
			<div class="col-md-4 text-center sep-top-md sep-bottom-md">
				<?php if($inmuebles != 0){ ?>
				<h2 class="light"><span class="light">S/ </span><?php echo number_format($inmuebles, 0, '', ','); ?></h2>
				<?php } else { ?>
				<h2 class="light">No declaró</h2>
				<?php } ?>
				<p class="lead x2 light upper timer-title">Bienes Muebles</p>
            </div>
          </div>
        </div>
      </div>
      <!-- End Counter section-->
      <!-- Start About section-->
      <section class="sep-top-lg sep-bottom-md">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h5 class="upper sep-bottom-xs"><img src="http://votoinformado.pe/voto/img/ico_HV_Hombre.png" width="45px"/> &nbsp; &nbsp;Hoja de Vida del Candidato(a)</h5>
              <div id="accordion" class="accordion-group">
                <div class="accordion-item panel">
                  <div class="accordion-heading upper"><a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="accordion-toggle">EXPERIENCIA LABORAL<i class="accordion-icon fa fa-minus"></i></a></div>
                  <div id="collapse1" class="accordion-body panel-collapse in">
                    <?php
						$query = "SELECT * FROM experiencia
						WHERE id_candidato='$id_candidato'
						ORDER by LEFT(periodo, 4) desc";
						$rs = mysql_query($query);
						while($rsconsulta = mysql_fetch_array($rs)) {
					?>
						<br>
						  <div class="icon-box icon-xs">
							<div class="icon-content img-circle"><i class="fa fa-lightbulb-o"></i></div>
							<div class="icon-box-content">
							  <h5><?php echo utf8_encode($rsconsulta['centro']) ?></h5>
							  <p>
								<?php echo utf8_encode($rsconsulta['cargo'])." (".$rsconsulta['periodo'].")" ?>
							  </p>
							</div>
						  </div>
						<br>
					<?php } if(mysql_num_rows(@$rs) == 0){ ?>
						<br><p>No Declaró información</p><br>
					<?php } ?>
                  </div>
                </div>
                <div class="accordion-item panel">
                  <div class="accordion-heading upper"><a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="accordion-toggle">FORMACIÓN ACADÉMICA<i class="accordion-icon fa fa-plus"></i></a></div>
                  <div id="collapse2" class="accordion-body panel-collapse collapse">
                    <!-- PRIMARIA  ----------------------------->
					<br>
						  <div class="icon-box icon-xs">
							<div class="icon-content img-circle"><i class="fa fa-lightbulb-o"></i></div>
							<div class="icon-box-content">
							  <h5>PRIMARIA</h5>
							<?php
								$query = "SELECT * FROM edu_primaria
								WHERE id_candidato='$id_candidato'
								ORDER by LEFT(periodo, 4) desc";
								$rs = mysql_query($query);
								while($rsconsulta = mysql_fetch_array($rs)) {
							?>
							  <p><?php echo utf8_encode($rsconsulta['centro'])." (".$rsconsulta['periodo'].")" ?></p>
							
							<?php } if(mysql_num_rows(@$rs) == 0){ ?>
							  <p>No Declaró información</p>
							<?php } ?>
							</div>
						  </div>
						<br>
					<!-- SECUNDARIA  ----------------------------->
					<br>
						  <div class="icon-box icon-xs">
							<div class="icon-content img-circle"><i class="fa fa-lightbulb-o"></i></div>
							<div class="icon-box-content">
							  <h5>SECUNDARIA</h5>
							<?php
								$query = "SELECT * FROM edu_secundaria
								WHERE id_candidato='$id_candidato'
								ORDER by LEFT(periodo, 4) desc";
								$rs = mysql_query($query);
								while($rsconsulta = mysql_fetch_array($rs)) {
							?>
							  <p><?php echo utf8_encode($rsconsulta['centro'])." (".$rsconsulta['periodo'].")" ?></p>
							
							<?php } if(mysql_num_rows(@$rs) == 0){ ?>
							  <p>No Declaró información</p>
							<?php } ?>
							</div>
						  </div>
						<br>
					<!-- ESTUDIOS TÉCNICOS  ----------------------------->
					<br>
						  <div class="icon-box icon-xs">
							<div class="icon-content img-circle"><i class="fa fa-lightbulb-o"></i></div>
							<div class="icon-box-content">
							  <h5>ESTUDIOS TÉCNICOS</h5>
							<?php
								$query = "SELECT * FROM edu_tecnico
								WHERE id_candidato='$id_candidato'
								ORDER by LEFT(periodo, 4) desc";
								$rs = mysql_query($query);
								while($rsconsulta = mysql_fetch_array($rs)) {
							?>
							  <p><strong>CENTRO DE ESTUDIOS: </strong><?php echo utf8_encode($rsconsulta['centro']) ?></p>
							  <p><strong>CURSO: </strong><?php echo utf8_encode($rsconsulta['curso']) ?></p>
							  <p><strong>PERIODO: </strong><?php echo $rsconsulta['periodo'] ?></p>
							  <p><strong>CONCLUIDO: </strong><?php echo $rsconsulta['concluido'] ?></p>
							  <hr>
							<?php } if(mysql_num_rows(@$rs) == 0){ ?>
								 <p>No Declaró información</p>
							<?php } ?>
							</div>
						  </div>
						<br>
					<!-- ESTUDIOS NO UNIVERSITARIOS  ----------------------------->
					<br>
						  <div class="icon-box icon-xs">
							<div class="icon-content img-circle"><i class="fa fa-lightbulb-o"></i></div>
							<div class="icon-box-content">
							  <h5>ESTUDIOS NO UNIVERSITARIOS</h5>
							<?php
								$query = "SELECT * FROM edu_nouniversitario
								WHERE id_candidato='$id_candidato'
								ORDER by LEFT(periodo, 4) desc";
								$rs = mysql_query($query);
								while($rsconsulta = mysql_fetch_array($rs)) {
							?>
							  <p><strong>CENTRO DE ESTUDIOS: </strong><?php echo $rsconsulta['centro'] ?></p>
							  <p><strong>CURSO: </strong><?php echo $rsconsulta['curso'] ?></p>
							  <p><strong>PERIODO: </strong><?php echo $rsconsulta['periodo'] ?></p>
							  <p><strong>CONCLUIDO: </strong><?php echo $rsconsulta['concluido'] ?></p>
							  <hr>
							<?php } if(mysql_num_rows(@$rs) == 0){ ?>
								 <p>No Declaró información</p>
							<?php } ?>
							</div>
						  </div>
						<br>
					<!-- ESTUDIOS UNIVERSITARIOS  ----------------------------->
					<br>
						  <div class="icon-box icon-xs">
							<div class="icon-content img-circle"><i class="fa fa-lightbulb-o"></i></div>
							<div class="icon-box-content">
							  <h5>ESTUDIOS UNIVERSITARIOS</h5>
							<?php
								$query = "SELECT * FROM edu_universitario
								WHERE id_candidato='$id_candidato'
								ORDER by LEFT(periodo, 4) desc";
								$rs = mysql_query($query);
								while($rsconsulta = mysql_fetch_array($rs)) {
							?>
							  <p><strong>UNIVERSIDAD: </strong><?php echo utf8_encode($rsconsulta['centro']) ?></p>
							  <p><strong>CARRERA: </strong><?php echo utf8_encode($rsconsulta['carrera']) ?></p>
							  <p><strong>GRADO - SUNEDU: </strong><?php echo utf8_encode($rsconsulta['grado']) ?></p>
							  <p><strong>TITULO - SUNEDU: </strong><?php echo $rsconsulta['titulo'] ?></p>
							  <p><strong>PERIODO: </strong><?php echo $rsconsulta['periodo'] ?></p>
							  <p><strong>CONCLUIDO: </strong><?php echo $rsconsulta['concluido'] ?></p>
							  <hr>
							<?php } if(mysql_num_rows(@$rs) == 0){ ?>
								 <p>No Declaró información</p>
							<?php } ?>
							</div>
						  </div>
						<br>
					<!-- ESTUDIOS POSTGRADO  ----------------------------->
					<br>
						  <div class="icon-box icon-xs">
							<div class="icon-content img-circle"><i class="fa fa-lightbulb-o"></i></div>
							<div class="icon-box-content">
							  <h5>ESTUDIOS POSTGRADO</h5>
							<?php
								$query = "SELECT * FROM edu_postgrado
								WHERE id_candidato='$id_candidato'
								ORDER by LEFT(periodo, 4) desc";
								$rs = mysql_query($query);
								while($rsconsulta = mysql_fetch_array($rs)) {
							?>
							  <p><strong>CENTRO DE ESTUDIOS: </strong><?php echo utf8_encode($rsconsulta['centro']) ?></p>
							  <p><strong>CURSO / ESPECIALIDAD: </strong><?php echo utf8_encode($rsconsulta['curso']) ?></p>
							  <p><strong>GRADO OBTENIDO: </strong><?php echo utf8_encode($rsconsulta['grado']) ?></p>
							  <p><strong>PERIODO: </strong><?php echo $rsconsulta['periodo'] ?></p>
							  <p><strong>CONCLUIDO: </strong><?php echo $rsconsulta['concluido'] ?></p>
							  <hr>
							<?php } if(mysql_num_rows(@$rs) == 0){ ?>
								 <p>No Declaró información</p>
							<?php } ?>
							</div>
						  </div>
						<br>
					<!-- FIN ESTUDIOS  ----------------------------->
                  </div>
                </div>
                <div class="accordion-item panel">
                  <div class="accordion-heading upper"><a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="accordion-toggle">RELACIÓN DE SENTENCIAS<i class="accordion-icon fa fa-plus"></i></a></div>
                  <div id="collapse3" class="accordion-body panel-collapse collapse">
                    <?php
						$query = "SELECT * FROM sentencias
						WHERE id_candidato='$id_candidato' ";
						$rs = mysql_query($query);
						while($rsconsulta = mysql_fetch_array($rs)) {
					?>
						<br>
						  <div class="icon-box icon-xs">
							<div class="icon-content img-circle"><i class="fa fa-lightbulb-o"></i></div>
							<div class="icon-box-content">
							  <h5><?php echo utf8_encode($rsconsulta['materia']) ?></h5>
							  <p>
								<?php echo utf8_encode($rsconsulta['fallo']) ?>
							  </p>
							</div>
						  </div>
						<br>
					<?php } if(mysql_num_rows(@$rs) == 0){ ?>
						<br><p>No Declaró información</p><br>
					<?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section-->
      <!-- Start call to action section-->
      <section class="call-to-action bg-primary sep-top-md sep-bottom-md">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <h5 class="action-title upper light"><img src="http://www.votoinformado.pe/voto/img/icono-verplan.png" width="50px"/> &nbsp;&nbsp;Resumen del Plan de Gobierno</h5>
            </div>
			<div class="col-md-3 text-right"><a href="plan.php?id=<?php echo $id_partido?>" class="btn btn-light btn-bordered btn-lg">Ver Resumen</a></div>
          </div>
        </div>
      </section>
      <!-- End call to action section-->
	  <!-- Start About section-->
      <section id="presidente" class="sep-top-2x sep-bottom-2x">
        <div class="container">
          <div class="row">
			<div class="col-md-12">
				<div class="row text-center">
                  <div data-wow-delay=".5s" class="wow bounceInDown">
                    <div class="section-title">
                    <h2 class="upper">GPS<span> ELECTORAL</span></h2>
					<p class="lead wow flipInX">Posición del candidato ante los siguientes temas</p><br/>
					</div>
                  </div>
                </div>
				<div class="row">
				<?php
					$sql1 = "SELECT *
					FROM gpselectoral";
					$rs = mysql_query($sql1);
					while($consulta = mysql_fetch_array($rs)) { 
					
					$candidatos_deacuerdo = $consulta["candidatos_deacuerdo"];
					$deacuerdo = explode("|", $candidatos_deacuerdo);
					
					$candidatos_neutral = $consulta["candidatos_neutral"];
					$neutral = explode("|", $candidatos_neutral);
					
					$candidatos_desacuerdo = $consulta["candidatos_desacuerdo"];
					$desacuerdo = explode("|", $candidatos_desacuerdo);
						
				?>
					<table border="0" width="100%"><tr>
					<td width="10px"></td>
					<td width="50px" align="top">
						<?php 
						if (in_array($id_candidato, $deacuerdo)) { ?>
							<img src="img/deacuerdo.png" title="DEACUERDO" width="40px">
						<?php } 
						if (in_array($id_candidato, $neutral)) { ?> 
							<img src="img/neutral.png" title="NEUTRAL" width="40px">
						<?php } 
						if (in_array($id_candidato, $desacuerdo)) { ?> 
							<img src="img/desacuerdo.png" title="DEACUERDO" width="40px">
						<?php } ?>
					</td>
					<td><p class="text-left"><?php echo $consulta['id'].". ".utf8_encode($consulta['pregunta']) ?></p></td>
					<td width="10px"></td>
					</tr></table>
					<hr>
				<?php } ?>
                </div>
			</div>
          </div>
		  <br/><br/><hr>
				<p>Portal de Datos Abiertos - Jurado Nacional de Elecciones (2016).[base de datos en línea]. Fecha de consulta: marzo del 2016. Disponible en: http://www.jnedatosabiertos.pe</p>
        </div>
      </section>
      <!-- End About section-->
	  
      <!-- Start Footer section-->
        <?php
	include("inc.botom.php"); ?>
      <!-- End Footer section-->
      <div id="back_to_top"><a href="#" class="fa fa-arrow-up fa-lg"></a></div>
      <!--if lt IE 7
      p.browsehappy
        | You are using an
        strong outdated
        | browser. Please
        a(href='http://browsehappy.com/') upgrade your browser
        | to improve your experience.
      -->
    </div>
    <script src="scripts/vendor/vendor.js"></script>
    <script src="scripts/vendor/bootstrap.js"></script>
    <script src="scripts/vendor/bootstrap-extend.js"></script>
    <script src="scripts/main.js"></script>
    <script src="scripts/themes_panel.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-38221152-28', 'auto');
      ga('send', 'pageview');
    </script>
  </body>

<!-- Mirrored from ottavio.kleis.agency/footer-alternative-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Mar 2016 03:36:12 GMT -->
</html>