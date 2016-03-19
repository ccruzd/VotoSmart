<?php
	include("conexion.php"); 
	
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
?>

<!DOCTYPE html>
<html class="no-js">
  
<!-- Mirrored from ottavio.kleis.agency/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Mar 2016 03:27:31 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8"> 
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
      <!-- Start Home Section-->
      <section id="home" class="demo-1">
        <!--     Codrops top bar-->
        <div id="slider" class="sl-slider-wrapper">
          <div class="sl-slider">
            <!-- start slide-->
            <div data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2" class="sl-slide">
              <div style="background-image: url(img/intro-home9.jpg);" class="sl-slide-inner">
                <div class="slide-container">
                  <div class="slide-content text-center"><img src="img/logo-white.png" alt="" class=""><br/><br/><br/>
                    <h2 class="main-title">Hackathon <span class="text-primary">Electoral</span></h2>
                    <blockquote>
                      <p>SmartAction Perú</p><a href="http://smartactionperu.com" target="_blank" class="btn btn-primary btn-lg">SmartAction Perú</a>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
            <!-- end slide-->
            <!-- start slide-->
            <div data-orientation="horizontal" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5" class="sl-slide">
              <div style="background-image: url(img/intro-home1.jpg);" class="sl-slide-inner">
                <div class="slide-container">
                  <div class="slide-content text-center"><br/><br/>
                    <h2 class="main-title">Jurado Nacional de <span class="text-primary">Elecciones</span></h2>
                    <blockquote>
                      <p>Desde 1931, por la Gobernabilidad y la Democracia</p><a href="http://www.jne.gob.pe/" target="_blank" class="btn btn-light btn-bordered btn-lg">Ver Web</a>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
            <!-- end slide-->
          </div>
          <!--       /sl-slider-->
          <nav id="nav-arrows" class="nav-arrows"><span class="nav-arrow-prev">Previous</span><span class="nav-arrow-next">Next</span></nav>
          <nav id="nav-dots" class="nav-dots"><span class="nav-dot-current"></span><span></span><span></span></nav>
        </div>
        <!--     /slider-wrapper-->
      </section>
      <!-- End Home Section-->
      <!-- Start About section-->
      <section id="about" class="sep-top-2x sep-bottom-2x">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="">
                <div class="section-title">
                  <h2 class="upper wow flipInX">Elecciones Generales <span class="label-colored">2016</span></h2>
                </div>
                <a href="" target="_blank" data-wow-delay=".5s" class="btn btn-primary btn-lg wow bounceInLeft">Consulte si es miembro de mesa</a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 sep-top-md">
              <div data-wow-delay=".3s" class="icon-box icon-horizontal icon-lg wow bounceInUp" >
				<a href="candidatos.php">
				<img src="http://votoinformado.pe/voto/images/bot-menu-candidatos.png"/>
                <div class="icon-box-content">
                  <h5 class="upper">Candidatos Presidenciales</h5>
                  <p>Conoce a tus candidatos presidenciales y sus vicepresidentes. Accede a sus hojas de vida y compáralos</p>
                </div>
				</a>
              </div>
            </div>
            <div class="col-md-3 sep-top-md">
              <div data-wow-delay=".4s" class="icon-box icon-horizontal icon-lg wow bounceInUp">
			  <a href="planes.php">
				<img src="http://votoinformado.pe/voto/images/bot-menu-planes.png"/>
                <div class="icon-box-content">
                  <h5 class="upper">Planes de Gobierno</h5>
                  <p>Aquí podrás informarte sobre los planes de gobierno de tus candidatos presidenciales. Acceder al formato resumen y comparar sus propuestas</p>
                </div>
				</a>
              </div>
            </div>
            <div class="col-md-3 sep-top-md">
              <div data-wow-delay=".5s" class="icon-box icon-horizontal icon-lg wow bounceInUp">
			  <a href="congreso.php">
				<img src="http://votoinformado.pe/voto/images/icono-congreso-on.png"/>
                <div class="icon-box-content">
                  <h5 class="upper">Candidatos al Congreso</h5>
                  <p>Conoce a tus candidatos al Congreso, a qué departamento postulan. Compara sus hojas de vida</p>
                </div>
				</a>
              </div>
            </div>
            <div class="col-md-3 sep-top-md">
              <div data-wow-delay=".6s" class="icon-box icon-horizontal icon-lg wow bounceInUp">
			  <a href="parlamento.php">
				<img src="http://votoinformado.pe/voto/images/bot-parlamento-12.png"/>
                <div class="icon-box-content">
                  <h5 class="upper">Candidatos al Parlamento Andino</h5>
                  <p>Infórmate sobre las principales propuestas de tus candidatos al Parlamento Andino y sobre sus Hojas de Vida</p>
                </div>
				</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End About section-->
      <!-- Start Parallax section-->
      <div id="parallax2" style="background-image: url(img/intro-home9.jpg);" class="parallax">
        <div class="section-shade sep-top-md sep-bottom-md">
          <div class="container">
            <div class="row">
			
			<div class="col-md-5 text-right">
                <div class="section-title"><br/>
                  <div class="bordered-right light">
                    <h2 class="upper small-space">Voto<span class="label-colored"> Electrónico</span></h2>
                    <p class="lead">En solo seis pasos la ‪#‎ONPE‬ te enseña a votar con el sistema de ‪#‎votoelectrónico‬, que se aplicará en 30 distritos de Lima Metropolitana y Callao para las ‪#‎Elecciones2016‬ del próximo 10 de abril.</p>
					
                  </div>
				  <div class="sep-top-xs"><a href="https://www.web.onpe.gob.pe/eg-2016/vep-eg" target="_blank" data-wow-delay=".5s" class="btn btn-primary btn-lg wow bounceInLeft">Verifica si en tu distrito habrá voto electrónico</a></div>
                </div>
              </div>
            <div class="col-md-7">
              <div data-device="macbook" data-orientation="landscape" data-color="black" class="device-mockup">
                <div class="device">
                  <div class="screen">
				  <iframe width="560" height="315" src="https://www.youtube.com/embed/-DRkZQwLJvQ" frameborder="0" allowfullscreen></iframe>
				  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Parallax section-->
      <!-- Start Intro Shop preview section-->
      <section id="shop" class="sep-top-2x sep-bottom-2x">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="section-title">
                <div class="row text-center">
                  <div data-wow-delay=".3s" class="wow bounceInUp">
                    <h2 class="upper">GPS<span> ELECTORAL</span></h2>
					<p class="lead wow flipInX">Un resumen de los temas más importantes</p><br/>
                  </div>
                </div>
				<div id="accordion" data-wow-delay=".3s" class="accordion-group wow bounceInUp">
				<?php
						$i=1;
						$sql1 = "SELECT *
						FROM gpselectoral";
						$rs = mysql_query($sql1);
						while($gpselectoral = mysql_fetch_array($rs)) { 
						$candidatos_deacuerdo = $gpselectoral["candidatos_deacuerdo"];
						$deacuerdo = explode("|", $candidatos_deacuerdo);
						
						$candidatos_neutral = $gpselectoral["candidatos_neutral"];
						$neutral = explode("|", $candidatos_neutral);
						
						$candidatos_desacuerdo = $gpselectoral["candidatos_desacuerdo"];
						$desacuerdo = explode("|", $candidatos_desacuerdo);
						
					?>
					
					<div class="accordion-item panel">
						<div class="accordion-heading"><a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $gpselectoral['id'] ?>" class="accordion-toggle"><?php echo $gpselectoral['id'].". ".utf8_encode($gpselectoral['pregunta']) ?><i class="accordion-icon fa <?php if($i==1){ echo "fa-minus";} else{ echo "fa-plus"; }?>"></i></a></div>
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
										<img class="text-left" src="<?php echo $candidato[$deacuerdo[$i]];?>" width="80px" title="<?php echo $candidato_nombres[$deacuerdo[$i]]."".$candidato_apellidos[$deacuerdo[$i]]?>"/>
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
				  <br/><br/><hr>
				<p>GPS ELECTORAL, Fuente: hhtp://gpselectoral.pe/test/</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Intro Shop preview section-->
	  <!-- Start Parallax section-->
      <div id="parallax2" style="background-image: url(img/intro-home9.jpg);" class="parallax">
        <div class="section-shade sep-top-md sep-bottom-md">
          <div class="container">
            <div class="row">
			<div class="col-md-5 text-right">
                <div class="section-title"><br/>
                  <div class="bordered-right light">
                    <h2 class="upper small-space">Ingresos<span class="label-colored"> Anuales</span></h2>
                    <p class="lead">Los ingresos anuales son un primer punto. En primer lugar figura Pedro Pablo Kuczynski de Peruanos por el Kambio con casi 2 millones y medio de soles. Puedes ver con mayor detalle los ingresos anuales de cada candidato en el siguiente interactivo:</p>
                  </div>
				  <div class="sep-top-xs"><a href="http://rpp.pe/politica/elecciones/compara-los-ingresos-y-bienes-de-cada-candidato-presidencial-noticia-929415#" target="_blank" data-wow-delay=".5s" class="btn btn-primary btn-lg wow bounceInLeft">Ver Fuente</a></div>
                </div>
            </div>
			<div class="col-md-7">
              <img style="max-width:100%" src="//cdn.thinglink.me/api/image/767518442495410176/1024/10/scaletowidth#tl-767518442495410176;1043138249'" class="alwaysThinglink"/><script async charset="utf-8" src="//cdn.thinglink.me/jse/embed.js"></script>
            </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Parallax section-->
      <!-- Start About section-->
      <section id="bienes" class="sep-top-2x sep-bottom-2x">
        <div class="container">
            <div class="row">
			<div class="col-md-5 text-right">
                <div class="section-title"><br/>
                  <div class="bordered-right">
                    <h2 class="upper small-space">Bienes<span class="label-colored"> Inmuebles y Muebles</span></h2>
                    <p class="lead">Respecto a bienes inmuebles y muebles, Alan García de Alianza Popular, Keiko Fujimori de Fuerza Popular han declarado tener solo una vivienda o un vehículo. Y un menaje de hogar en el caso de Alejandro Toledo por Perú Posible.</p>
                  </div>
				  <div class="sep-top-xs"><a href="http://rpp.pe/politica/elecciones/compara-los-ingresos-y-bienes-de-cada-candidato-presidencial-noticia-929415#" target="_blank" data-wow-delay=".5s" class="btn btn-primary btn-lg wow bounceInLeft">Ver Fuente</a></div>
                </div>
            </div>
			<div class="col-md-7">
              <img style="max-width:100%" src="//cdn.thinglink.me/api/image/767560262977847297/1024/10/scaletowidth#tl-767560262977847297;1043138249'" class="alwaysThinglink"/><script async charset="utf-8" src="//cdn.thinglink.me/jse/embed.js"></script>
            </div>
            </div>
          </div>
      </section>
      <!-- End About section-->
      <!-- Start map section-->
      <section>
        <!--include _partial/gmap-->
      </section>
    <?php
	include("inc.botom.php"); ?>
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