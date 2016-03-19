<?php 
include("conexion.php");

	$i=1;
	$query1="SELECT * FROM partidos where id='".$_POST['get_option']."'";
	$query = " SELECT * FROM parlamento where id_partido = '".$_POST['get_option']."' order by numero asc";
	$query;
	$rs = mysql_query($query);
	$rs1=mysql_query($query1);
	while($rsconsulta1 = mysql_fetch_array($rs1)) {
	?>
	<center><h4><?php echo $rsconsulta1['nombre'] ?></h4></center><br/><br/>
	<?php }
	while($rsconsulta = mysql_fetch_array($rs)) {?>
	
	<table border="0" width="100%"><tr>
	<td width="10px"></td>
	<td width="50px" align="top">
	<p class="text-left"><img src="<?php echo $rsconsulta['link_foto']?>" title="<?php echo $rsconsulta['nombre']?>" style="height:52px;" class="img-circle img-responsive"></p>
	</td>
	<td width="10px"></td>
	<td width="50px" align="top">
	<p class="text-left"><h4><?php echo $rsconsulta['numero']?></h4></p>
	</td>
	<td><p class="text-left"><?php echo utf8_encode($rsconsulta['nombre']) ?></p></td>
	<td width="50px"><p class="text-left"><a href='<?php echo $rsconsulta['link_cv']?>' target="_blank"><span class="glyphicon glyphicon-search"></span></a></td>
	</tr></table>
	<hr>

<?php $i++;} ?>