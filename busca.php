<?php
	include("conexion.php");
	
	$palabra = "";
	if (isset($_GET["palabra"])) {
		$palabra = $_GET["palabra"];
	}
	
	$sql = "SELECT id, link_foto, nombres, apellidos FROM candidatos ORDER BY id asc";     
    $consulta = mysql_query ($sql);  
      
	$num_candidatos = mysql_num_rows ($consulta); 
	if ($num_candidatos > 0)  
	{  
		for ($i=0; $i<$num_candidatos; $i++)  
		{  
			$campo = mysql_fetch_array($consulta);  
			$valor[$i] = $campo["id"];  
			$candidato[$valor[$i]] = $campo["link_foto"];   
			$candidato_nombres[$valor[$i]] = $campo["nombres"];  
			$candidato_apellidos[$valor[$i]] = $campo["apellidos"];  
		}  
				  
	}
	
	$busqueda = $palabra;
	$sql = mysql_query("SELECT PG.id, PG.id_partido, PG.plan, P.link_foto_partido, P.nombre
	FROM plan_gobierno as PG
	INNER JOIN partidos as P on P.id = PG.id_partido
	WHERE PG.plan like '%".$busqueda."%'");
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
      <section style="background-image: url('img/intro-home9.jpg');" class="header-section fading-title parallax">
        <div class="section-shade sep-top-4x sep-bottom-2x">
          <div class="container">
            <div class="section-title upper light">
              <h2 class="small-space">Busqueda</h2>
            </div>
          </div>
        </div>
      </section>
      <!-- End header Section-->
      <!-- Start Portfolio Detail section-->
      <section class="sep-bottom-2x">
        <div class="container">
          <div class="row">
            <!-- start main content-->
            <div class="col-md-10 col-md-offset-1 sep-top-2x">
              <!-- start search form-->
			  <form action="busca.php" method="get" autocomplete="off">
				<div class="input-group theme-form-group">
					<span class="input-group-btn">
					<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-search fa-2x"></i></button></span>
					<input type="text" name="palabra" placeholder="Buscar en el sitio" class="form-control input-lg">
                </div>
			  </form>
              <!-- end search form-->
              <div class="sep-top-md">
				<p class="lead text-muted">Resultado(s) de búsqueda para:&nbsp;<strong><?php echo $busqueda?></strong></p>
              </div>
              <!-- start accordion group-->
              <div class="sep-top-xs">
                <div class="accordion-group">
                  <!-- start accordion item-->
				  <?php
				  $i=1;
				  while($rsplan = mysql_fetch_array($sql)) { 
				   $referencia=$rsplan['plan'];
				   $resultado_busqueda1 = str_replace($busqueda, "<b>".$busqueda."</b>", $referencia); 
				   $result_busq = "<b>".$busqueda."</b>";           
				   $frase = explode($busqueda,  $referencia);
				   if (strlen($frase[0])<=140){ $rest1 = $frase[0]; }else{
				   $rest1 = "...".substr($frase[0], -140);} 
				   if (strlen($frase[1])<=140){ $rest2 = $frase[1]; }else{
				   $rest2= substr($frase[1], 0,140)."..."; }
				   $concatena = $rest1." ".$result_busq." ".$rest2; 
				  ?>
                  <div class="accordion-item panel">
                    <h5 class="accordion-heading"><a href="plan_gobierno.php?id=<?php echo $rsplan['id_partido'] ?>">PLAN DE GOBIERNO DE <?php echo $rsplan['nombre'] ?><span class="accordion-icon primary"><?php echo $i; ?></span></a></h5>
                    <div class="sep-top-xs">
                    <div class="accordion-body">
                      <p class="lead">
                      <?php echo utf8_encode($concatena);?>
                      </p>
                    </div>
                  </div>
				  </div>
				  <?php $i++; } ?>
              </div>
              <!-- end accordion group-->
			  <!--Inicio GPS Electoral -->
			  <?php
					$i = 1;
					$sql1 = "SELECT *
					FROM gpselectoral
					WHERE pregunta like '%$palabra%'";
					$rs = mysql_query($sql1);
					if(mysql_num_rows(@$rs) != 0){
			  ?>
			  <div class="section-title sep-top-3x">
				<div class="section-title">
					<div class="bordered-left">
						<h4 class="upper small-space">GPS<span class="label-colored"> ELECTORAL</span></h4>
					</div><br/>
				</div>
				<div id="accordion" class="accordion-group">
				<?php
						while($gpselectoral = mysql_fetch_array($rs)) { 
						$candidatos_deacuerdo = $gpselectoral["candidatos_deacuerdo"];
						$deacuerdo = explode("|", $candidatos_deacuerdo);
						
						$candidatos_neutral = $gpselectoral["candidatos_neutral"];
						$neutral = explode("|", $candidatos_neutral);
						
						$candidatos_desacuerdo = $gpselectoral["candidatos_desacuerdo"];
						$desacuerdo = explode("|", $candidatos_desacuerdo);
						
					?>
					
					<div class="accordion-item panel">
						<div class="accordion-heading"><a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $gpselectoral['id'] ?>" class="accordion-toggle"><?php echo str_replace ($palabra, '<strong>'.$palabra.'</strong>', utf8_encode($gpselectoral['pregunta'])) ?><i class="accordion-icon fa <?php if($i==1){ echo "fa-minus";} else{ echo "fa-plus"; }?>"></i></a></div>
						<div id="collapse<?php echo $gpselectoral['id'] ?>" class="accordion-body panel-collapse <?php if($i==1){ echo "in";} else{ echo "collapse"; }?>">
							<ul class="widget widget-media rounded sep-bottom-md"><br>
								<li class="media media-bordered clearfix text-left"><a href="#" class="pull-left"><img src="img/deacuerdo.png" title="DEACUERDO" class="img-circle" width="90px"></a><br>
								  <div class="media-body">
								  <?php
									$longitud = count($deacuerdo);
									if ($gpselectoral["candidatos_deacuerdo"] != ""){
									for($i=0; $i<$longitud; $i++)
									{
									?>
										<img class="text-left" src="<?php echo $candidato[$deacuerdo[$i]];?>" width="80px"title="<?php echo $candidato_nombres[$deacuerdo[$i]]."".$candidato_apellidos[$deacuerdo[$i]]?>"/>
									<?php } } else { ?><p>Ningún candidato en este grupo</p><?php } ?>
								  </div>
								</li>
								<li class="media media-bordered clearfix text-left"><a href="#" class="pull-left"><img src="img/neutral.png" title="NEUTRAL" class="img-circle" width="90px"></a><br>
								  <div class="media-body">
									<?php
									$longitud = count($neutral);
									if ($gpselectoral["candidatos_neutral"] != ""){
									for($i=0; $i<$longitud; $i++)
									{
									?>
										<img class="text-left" src="<?php echo $candidato[$neutral[$i]];?>" width="80px"title="<?php echo $candidato_nombres[$neutral[$i]]."".$candidato_apellidos[$neutral[$i]]?>"/>
									<?php } } else { ?><p>Ningún candidato en este grupo</p><?php } ?>
								  </div>
								</li>
								<li class="media media-bordered clearfix text-left"><a href="#" class="pull-left"><img src="img/desacuerdo.png" title="DESACUERDO" class="img-circle" width="90px"></a><br>
								 <div class="media-body">
								  <?php
									$longitud = count($desacuerdo);
									if ($gpselectoral["candidatos_desacuerdo"] != ""){
									for($i=0; $i<$longitud; $i++)
									{
									?>
										<img class="text-left" src="<?php echo $candidato[$desacuerdo[$i]];?>" width="80px"title="<?php echo $candidato_nombres[$desacuerdo[$i]]."".$candidato_apellidos[$desacuerdo[$i]]?>"/>
									<?php } } else { ?><p>Ningún candidato en este grupo</p><?php } ?>
								 </div>
								</li>
							</ul>
						</div>
					</div>
					<?php $i++; } ?>
				
				
				  </div>
              </div>
			  <?php } ?>
			  <!--Fin GPS Electoral -->
			  
			  
			  
            </div>
			</div>
            <!--end main content-->
			
          </div>
        </div>
      </section>
      <!-- Start Footer section-->
      <footer id="footer">
        <div class="inner sep-top-md sep-bottom-md">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center"><img src="img/logo-white.png" alt="" class="logo"><small class="sep-top-xs">There are many variations of passages of Lorem Ipsum available</small>
                <ul class="social-icon sep-top-sm">
                  <li><a href="#" class="fa fa-github fa-2x"></a></li>
                  <li><a href="#" class="fa fa-twitter fa-2x"></a></li>
                  <li><a href="#" class="fa fa-facebook fa-2x"></a></li>
                  <li><a href="#" class="fa fa-google-plus fa-2x"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright sep-top-xs sep-bottom-xs">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center"><small>Copyright 2014 © Kleis Communication Technologies srl. All rights reserved.</small></div>
            </div>
          </div>
        </div>
      </footer>
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