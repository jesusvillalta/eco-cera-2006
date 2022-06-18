<?php function buscar_ale($buscador){?>
<?php include('../Connections/ecocera.php'); ?>
<?php
mysql_select_db($database_ecocera, $ecocera);
$buscador = str_replace("á","&aacute;",$buscador);
$buscador = str_replace("é","&eacute;",$buscador);
$buscador = str_replace("í","&iacute;",$buscador);
$buscador = str_replace("ó","&oacute;",$buscador);
$buscador = str_replace("ú","&uacute;",$buscador);
if ($buscador<>''){ 
   //CUENTA EL NUMERO DE PALABRAS 
   $trozos=explode(" ",$buscador); 
   $numero=count($trozos); 
  if ($numero==1) {
   //SI SOLO HAY UNA PALABRA DE BUSQUEDA SE ESTABLECE UNA INSTRUCION CON LIKE 
$query_menu="SELECT  ref, texto_ale,fam_ale, foto_mini_es,descripcion_listado_ale FROM productos WHERE texto_ale LIKE '%$buscador%' LIMIT 50"; 
  } else if ($numero>1) { 
  
$query_menu = "SELECT  ref, texto_ale,fam_ale, foto_mini_es,descripcion_listado_ale, MATCH ( texto_ale)
      AGAINST ('$buscador') AS Score FROM productos WHERE
      MATCH ( texto_ale ) AGAINST ('$buscador') ORDER  BY fam_ale LIMIT 50";
 }
$menu = mysql_query($query_menu, $ecocera) or die(mysql_error());

if (!$row_menu = mysql_fetch_assoc($menu)){
echo '<table>
       	<tr>
         <td width="100%">No se han encontrado resultados</td>
		</tr>
   	  </table>';}
else {?>

 <table width="80%" align="center">
	
        <?php do { ?>
        <tr>
          <td style="width:100%; height:67px; vertical-align:bottom;"><a href="detallesBusqueda_ale.php?ref=<?php echo $row_menu['ref'];?>
		  "><?php echo $row_menu['descripcion_listado_ale']." ..."; ?></a></td>
          <?php 
		  if ($row_menu['foto_mini_es']!=''){?>
		  <td style="width:0%; vertical-align:bottom;"><div class="imagListado">
            <div align="center"><a href="detallesBusqueda_ale.php?ref=<?php echo $row_menu['ref'];?>"><img src='../fotos/imagenes/miniaturas/<?php echo $row_menu['foto_mini_es']; ?>' alt="<?php echo $row_menu['descripcion_listado_ale']; ?>" style="height:40px; border:0px" /></a></div>
          </div></td>
 <?php }else{ ?>
  <td style="width:0%;">&nbsp;</td>
  <?php }?>
		</tr>
		<tr>
    		<td colspan="2"><hr style="color:#000099; width:100%;" size="1px"  /></td>
  		</tr>
        <?php $pageNum_productos++;
		} while ($row_menu = mysql_fetch_assoc($menu)); ?>
    </table>
<?php /*fin if row_menu = mysql_fetch_assoc($menu)) */}?> 
<?php }
 else {echo '<table>
       		  <tr>
         		<td style="width:100%;">Kein Ergebnis Gefunden.</td>
			  </tr>
   			 </table>';}
?>
<?php }?>