<?php
	include("conexion.php");
	
	$plan = "";
	if (isset($_GET["id"])) {
		$plan = $_GET["id"];
	}
	
	$rsbuscar = mysql_query("SELECT P.id, PG.plan, P.link_foto_partido_presidente, P.nombre, C.nombres, C.apellidos 
	FROM partidos as P 
	INNER JOIN plan_gobierno as PG on PG.id_partido = P.id 
	INNER JOIN candidatos as C on C.idpartido = P.id 
	WHERE P.id = '$plan'");
	$encontrado = mysql_fetch_array($rsbuscar);
	$plan_full = $encontrado["plan"];
	
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
              <h2 class="small-space">PLAN DE GOBIERNO</h2>
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
            <div class="col-md-9 col-md-push-3 sep-top-2x">
				<?php 
				echo utf8_encode($encontrado["plan"]);
				?>
				<br/><br/><hr>
				<p>Portal de Datos Abiertos - Jurado Nacional de Elecciones (2016).[base de datos en línea]. Fecha de consulta: marzo del 2016. Disponible en: http://www.jnedatosabiertos.pe</p>
				
            </div>
            <!--end main content-->
			
            <!-- start sidebar-->
            <div class="col-md-3 col-md-pull-9 sep-top-2x">
			  <div class="icon-box icon-horizontal icon-lg sep-bottom-md">
			    <a href="plan.php?id=<?php echo $encontrado['id'] ?>" title="VER RESUMEN DEL PLAN">
				<img src="<?php echo $encontrado['link_foto_partido_presidente'] ?>" />
                <div class="icon-box-content">
                  <h5 class="upper"><?php echo utf8_encode($encontrado['nombre']) ?></h5>
                </div>
				</a>
              </div>
              <h5 class="widget-title upper">PRESIDENTE</h5>
              <p><a href="candidato.php?id=<?php echo $encontrado['id'] ?>"><?php echo utf8_encode($encontrado['nombres'])." ".utf8_encode($encontrado['apellidos']) ?></a></p><br/>
              <h5 class="widget-title upper sep-bottom-xs">PLANCHA PRESIDENCIAL</h5>
              <ul class="widget widget-media sep-bottom-lg">
			  
			  <?php $queryvicepresidente = "SELECT * FROM vicepresidentes WHERE id_partido = '".$plan."'";
				  $rowvice = mysql_query($queryvicepresidente);
				  while($rsconsultavice = mysql_fetch_array($rowvice)) {?>
				  				  
                <li class="media media-bordered clearfix"><a href="#" class="pull-left"><img src="<?php echo $rsconsultavice['link_imagen_vicepresidente']?>" alt="" class="media-object"></a>
                  <div class="media-body">
                    <h6 class="media-heading"><a href="#"><?php echo utf8_encode($rsconsultavice['nombres_vicepresidente'])?></a></h6><small class="upper">
					 <?php if ($rsconsultavice['cargo_vicepresidente']==1) {
				  	echo "Primer Vicepresidente";
				  }else{
				  	echo "Segundo Vicepresidente";
				  }?></small>
                  </div>
                </li>
				<?php } ?>
              </ul>
            </div>
            <!-- end sidebar-->
          </div>
        </div>
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