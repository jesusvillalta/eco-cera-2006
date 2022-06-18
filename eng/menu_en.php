<?php function menu_en(){?>
<?php include('../Connections/ecocera.php'); ?>
<?php
mysql_select_db($database_ecocera, $ecocera);
$query_menu = "SELECT distinct fam_en FROM productos";
$menu = mysql_query($query_menu, $ecocera) or die(mysql_error());
$row_menu = mysql_fetch_assoc($menu);
$totalRows_menu_familias = mysql_num_rows($menu);
?>
  <?php do { ?>
     <?php echo '<a href="listado_en.php?fam_en='. $row_menu['fam_en'].'">';?>
	 <img src="../fotos/flecha-naranja.gif" alt="flecha" width="11" height="8" border="0" /> <?php echo $row_menu['fam_en'].'</a>'; ?>
    <?php } while ($row_menu = mysql_fetch_assoc($menu)); ?>

<?php
mysql_free_result($menu);
?>
<?php }?>


<?php function novedades_es(){?>
<?php include('../Connections/ecocera.php'); ?>
<?php
mysql_select_db($database_ecocera, $ecocera);
$query_novedades_fam_en = "SELECT distinct fam_en FROM productos WHERE foto_novedades_es!=''";
$novedades_fam_en = mysql_query($query_novedades_fam_en, $ecocera) or die(mysql_error());
$row_novedades_fam_en = mysql_fetch_assoc($novedades_fam_en);
if(isset($row_novedades_fam_en['fam_en']))
	{$capaNovedades='si';echo '<br />
  <h3>NEW FEATURES</h3>
  <div id="advert">';}
//bucle de familias con novedades -novedades_fam-
?> 
  <?php do { 
$pageNum_productos=0;
$fami_es=$row_novedades_fam_en['fam_en'];
$query_novedades = "SELECT fam_en, foto_novedades_es, descripcion_listado_en FROM productos WHERE fam_en='$fami_es'";
$novedades = mysql_query($query_novedades, $ecocera) or die(mysql_error());
$row_novedades = mysql_fetch_assoc($novedades);
$totalRows_novedades = mysql_num_rows($novedades);
?>
   <?php do { ?> <?php 
		  if ($row_novedades['foto_novedades_es']!=''){// inicio bucle if?>
		  <?php echo '<br /><br /><a href="detalles_en.php?fam_en='.$row_novedades['fam_en'].'&amp;pageNum_productos='. $pageNum_productos.'">'; ?><?php echo "<img src='../fotos/imagenes/novedades/". $row_novedades['foto_novedades_es']."' alt='". $row_novedades['descripcion_listado_en']."' border='0' /></a>";?>
       <?php echo '<br /><br /><a href="detalles_en.php?fam_en='. $row_novedades['fam_en'].'&amp;pageNum_productos='. $pageNum_productos.'">'; ?>
		  <?php echo $row_novedades['descripcion_listado_en']." ...</a><br />"; ?>
		<?php } // fin bucle if?>
		<?php $pageNum_productos++;?>
		<?php } while ($row_novedades = mysql_fetch_assoc($novedades)); ?>
		
 <?php } while ($row_novedades_fam_en = mysql_fetch_assoc($novedades_fam_en));?>
 <?php if($capaNovedades=='si')
 	{echo '</div>';}?>
 <?php }?>
 
 <?php function ofertas_es(){?>
<?php include('../Connections/ecocera.php'); ?>
<?php
mysql_select_db($database_ecocera, $ecocera);
$query_ofertas_fam_en = "SELECT distinct fam_en FROM productos WHERE texto_ofertas_en!=''";
$ofertas_fam_en = mysql_query($query_ofertas_fam_en, $ecocera) or die(mysql_error());
$row_ofertas_fam_en = mysql_fetch_assoc($ofertas_fam_en);

if(isset($row_ofertas_fam_en['fam_en']))
	{$capaOfertas='si';echo '<br />
';}

else {echo "<br /><br /><p class='texto_ofertas'>No offers available</p>";}

//bucle de familias con ofertas -ofertas_fam-
?> 
  <?php do { 
$pageNum_productos=0;
$fami_es=$row_ofertas_fam_en['fam_en'];
$query_ofertas = "SELECT fam_en, econombre_en, foto_ofertas_es, texto_ofertas_en, descripcion_listado_en FROM productos WHERE fam_en='$fami_es'";
$ofertas = mysql_query($query_ofertas, $ecocera) or die(mysql_error());
$row_ofertas = mysql_fetch_assoc($ofertas);
$totalRows_ofertas = mysql_num_rows($ofertas);
?>
   <?php do { ?> <?php 
		  if ($row_ofertas['texto_ofertas_en']!=''){// inicio bucle if?>
		  
		  <?php if($row_ofertas['econombre_en']!='')
		  { echo "<h2>".$row_ofertas['econombre_en']."</h2>";}
		  ?>
		  <?php if($row_ofertas['foto_ofertas_es']!='')
		  {?> 
		  <?php echo '<br /><br /><a href="detalles_en.php?fam_en='.$row_ofertas['fam_en'].'&amp;pageNum_productos='. $pageNum_productos.'">'; ?><?php echo "<img src='../fotos/imagenes/ofertas/". $row_ofertas['foto_ofertas_es']."' alt='". $row_ofertas['descripcion_listado_en']."' border='0' /></a>";?>
		  <?php } ?>
       <?php echo '<br /><br /><a href="detalles_en.php?fam_en='. $row_ofertas['fam_en'].'&amp;pageNum_productos='. $pageNum_productos.'">'; ?>
		  <?php echo $row_ofertas['descripcion_listado_en']." ...</a><br />"; ?>
		  <br /><br />
		  		  <?php if($row_ofertas['texto_ofertas_en']!='')
		  { echo "<p class='texto_ofertas'>".$row_ofertas['texto_ofertas_en']."</p>";}
		  ?>
		  <br /><hr style="color:#000099; width:80%;" size="1px"  />
		<?php } // fin bucle if?>
		<?php $pageNum_productos++;?>
		<?php } while ($row_ofertas = mysql_fetch_assoc($ofertas)); ?>
		
 <?php } while ($row_ofertas_fam_en = mysql_fetch_assoc($ofertas_fam_en));?>
 <?php if($capaOfertas=='si')
 	{echo '<br />';}?>
 <?php }?>