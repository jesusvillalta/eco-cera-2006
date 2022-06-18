<?php function menu_es(){?>
<?php include('../Connections/ecocera.php'); ?>
<?php
mysql_select_db($database_ecocera, $ecocera);
$query_menu = "SELECT distinct fam_es FROM productos";
$menu = mysql_query($query_menu, $ecocera) or die(mysql_error());
$row_menu = mysql_fetch_assoc($menu);
$totalRows_menu_familias = mysql_num_rows($menu);
?>
  <?php do { ?>

<?php 
/*
$row_menu['fam_es'] = str_replace("á","&aacute;",$row_menu['fam_es']);
$row_menu['fam_es'] = str_replace("é","&eacute;",$row_menu['fam_es']);
$row_menu['fam_es'] = str_replace("í","&iacute;",$row_menu['fam_es']);
$row_menu['fam_es'] = str_replace("ó","&oacute;",$row_menu['fam_es']);
$row_menu['fam_es'] = str_replace("ú","&uacute;",$row_menu['fam_es']);
*/ 
?>
 
     <?php echo '<a href="listado.php?fam_es='. $row_menu['fam_es'].'">';?>
	 <img src="../fotos/flecha-naranja.gif" alt="flecha" width="11" height="8" border="0" /> <?php echo $row_menu['fam_es'].'</a>'; ?>
    <?php } while ($row_menu = mysql_fetch_assoc($menu)); ?>

<?php
mysql_free_result($menu);
?>
<?php }?>


<?php function novedades_es(){?>
<?php include('../Connections/ecocera.php'); ?>
<?php
mysql_select_db($database_ecocera, $ecocera);
$query_novedades_fam_es = "SELECT distinct fam_es FROM productos WHERE foto_novedades_es!=''";
$novedades_fam_es = mysql_query($query_novedades_fam_es, $ecocera) or die(mysql_error());
$row_novedades_fam_es = mysql_fetch_assoc($novedades_fam_es);
if(isset($row_novedades_fam_es['fam_es']))
	{$capaNovedades='si';echo '<br />
  <h3>NOVEDADES</h3>
  <div id="advert">';}
//bucle de familias con novedades -novedades_fam-
?> 
  <?php do { 
$pageNum_productos=0;
$fami_es=$row_novedades_fam_es['fam_es'];
$query_novedades = "SELECT fam_es, foto_novedades_es, descripcion_listado_es FROM productos WHERE fam_es='$fami_es'";
$novedades = mysql_query($query_novedades, $ecocera) or die(mysql_error());
$row_novedades = mysql_fetch_assoc($novedades);
$totalRows_novedades = mysql_num_rows($novedades);
?>
   <?php do { ?> <?php 
		  if ($row_novedades['foto_novedades_es']!=''){// inicio bucle if?>
		  <?php echo '<br /><br /><a href="detalles.php?fam_es='.$row_novedades['fam_es'].'&amp;pageNum_productos='. $pageNum_productos.'">'; ?><?php echo "<img src='../fotos/imagenes/novedades/". $row_novedades['foto_novedades_es']."' alt='". $row_novedades['descripcion_listado_es']."' border='0' /></a>";?>
       <?php echo '<br /><br /><a href="detalles.php?fam_es='. $row_novedades['fam_es'].'&amp;pageNum_productos='. $pageNum_productos.'">'; ?>
		  <?php echo $row_novedades['descripcion_listado_es']." ...</a><br />"; ?>
		<?php } // fin bucle if?>
		<?php $pageNum_productos++;?>
		<?php } while ($row_novedades = mysql_fetch_assoc($novedades)); ?>
		
 <?php } while ($row_novedades_fam_es = mysql_fetch_assoc($novedades_fam_es));?>
 <?php if($capaNovedades=='si')
 	{echo '</div>';}?>
 <?php }?>
 
 <?php function ofertas_es(){?>
<?php include('../Connections/ecocera.php'); ?>
<?php
mysql_select_db($database_ecocera, $ecocera);
$query_ofertas_fam_es = "SELECT distinct fam_es FROM productos WHERE texto_ofertas_es!=''";
$ofertas_fam_es = mysql_query($query_ofertas_fam_es, $ecocera) or die(mysql_error());
$row_ofertas_fam_es = mysql_fetch_assoc($ofertas_fam_es);

if(isset($row_ofertas_fam_es['fam_es']))
	{$capaOfertas='si';echo '<br />
';}

else {echo "<br /><br /><p class='texto_ofertas'>No existen ofertas actualmente</p>";}

//bucle de familias con ofertas -ofertas_fam-
?> 
  <?php do { 
$pageNum_productos=0;
$fami_es=$row_ofertas_fam_es['fam_es'];
$query_ofertas = "SELECT fam_es, econombre_es, foto_ofertas_es, texto_ofertas_es, descripcion_listado_es FROM productos WHERE fam_es='$fami_es'";
$ofertas = mysql_query($query_ofertas, $ecocera) or die(mysql_error());
$row_ofertas = mysql_fetch_assoc($ofertas);
$totalRows_ofertas = mysql_num_rows($ofertas);
?>
   <?php do { ?> <?php 
		  if ($row_ofertas['texto_ofertas_es']!=''){// inicio bucle if?>
		  		  <?php if($row_ofertas['texto_ofertas_es']!='')
		  { echo "<p class='texto_ofertas'>".$row_ofertas['texto_ofertas_es']."</p>";}
		  ?>
		  <?php if($row_ofertas['econombre_es']!='')
		  { echo "<h2>".$row_ofertas['econombre_es']."</h2>";}
		  ?>
		  <?php if($row_ofertas['foto_ofertas_es']!='')
		  {?> 
		  <?php echo '<br /><a href="detalles.php?fam_es='.$row_ofertas['fam_es'].'&amp;pageNum_productos='. $pageNum_productos.'">'; ?><?php echo "<img src='../fotos/imagenes/ofertas/". $row_ofertas['foto_ofertas_es']."' alt='". $row_ofertas['descripcion_listado_es']."' border='0' /></a>";?>
		  <?php } ?>
       <?php echo '<br /><br /><a href="detalles.php?fam_es='. $row_ofertas['fam_es'].'&amp;pageNum_productos='. $pageNum_productos.'">'; ?>
		  <?php echo $row_ofertas['descripcion_listado_es']." ...</a><br />"; ?>
		  
		  <br /><hr style="color:#000099; width:80%;" size="1px"  /><br /><br />
		<?php } // fin bucle if?>
		<?php $pageNum_productos++;?>
		<?php } while ($row_ofertas = mysql_fetch_assoc($ofertas)); ?>
		
 <?php } while ($row_ofertas_fam_es = mysql_fetch_assoc($ofertas_fam_es));?>
 <?php if($capaOfertas=='si')
 	{echo '<br />';}?>
 <?php }?>