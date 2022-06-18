<?php require_once('../Connections/ecocera.php'); ?>
<?php include('menu_es.php'); ?>
<?php
$fam_es=$_GET['fam_es'];
/*
$fam_es = str_replace("á","&aacute;",$fam_es);
$fam_es = str_replace("é","&eacute;",$fam_es);
$fam_es = str_replace("í","&iacute;",$fam_es);
$fam_es = str_replace("ó","&oacute;",$fam_es);
$fam_es = str_replace("ú","&uacute;",$fam_es);
*/
$pageNum_productos = 0;
mysql_select_db($database_ecocera, $ecocera);
$query_productos = "SELECT fam_es, foto_mini_es, descripcion_listado_es FROM productos WHERE fam_es='$fam_es'";
$productos = mysql_query($query_productos, $ecocera) or die(mysql_error());
$row_productos = mysql_fetch_assoc($productos);
$totalRows_productos = mysql_num_rows($productos);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Fabricante y distribuidor de aparatos y material dental y odontol&oacute;gico :: eco - cera</title>
<meta name="keywords" content="ecocera, eco-cera, preformas, ceras, bebederos, planchas, retenciones, rejillas, ganchos, líquidos, espaciadores, pinceles, instrumental, porta fresas, aparatos, resinas, colados, esqueleticos, esqueléticos, agente, reductor, separador, barniz, grafito, laca, texturador, muñones, polimerizadora" />
<meta name="Description" content="eco-cera es un fabricante y distribuidor de material dental. Suministramos topo tipo de productos odontológicos para su laboratorio dental. Consulte nuestro catálogo de productos de odontología." />
<link rel="stylesheet" href="../3col_leftNav.css" type="text/css" />
<script type="text/javascript" src="../funciones.js"></script>
</head>
<body>
<table border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="fondocuerpo">
<table width="100%" border="0" cellspacing="0">
  <tr>
    <td style="background-image:url(../fotos/boca2.jpg);"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td style="width:54%; height:70px;"><div id="masthead" class="masterhead"> eco - cera <span class="registrada">&reg;</span><span class="subtitulo"> aparatos y material dental </span></div></td>
        <td style="width:46%;"><table style="width:99%; border=0px; float:right;" cellpadding="0" cellspacing="0">
          <tr>
            <td style="width:238px; height:50px; vertical-align:bottom;" id="direccionPostal">APARTADO DE CORREOS 88<br />
              E-18140 LA ZUBIA - GRANADA - 
              ESPA&Ntilde;A<br />
              Tel/Fax: +34 958308230 - info@eco-cera.es</td>
            <td style="width:81px; vertical-align:bottom;"><div style="width:100%; float:right;"><a href="index_es.php"><img src="../fotos/spanien.gif" alt="espa&ntilde;ol" style="border:0px; width:16px; height:10px;" /> </a><a href="../eng/index_en.php"><img src="../fotos/uk.gif" alt="english" style="border:0px; width:16px; height:10px;" /></a> <img src="../fotos/france.gif" alt="francais" style="border:0px; width:16px; height:10px;" />  <a href="../ale/index_ale.php"><img src="../fotos/germany.gif" alt="deutsch" style="border:0px; width:16px; height:10px;" /></a> </div></td>
          </tr>
        </table></td>
      </tr>
    </table>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td style="width:21%; height:16px;"><div id="direccionweb"><a href="../index.html">www.eco-cera.es</a></div></td>
            <td style="width:52%;"><div id="ruta"><a href="index_es.php">Inicio </a>&gt; <a href="#"><?php echo $row_productos['fam_es']; ?></a><br />
            </div></td>
            <td width="27%" valign="bottom"><div id="fecha">
                <script language="JavaScript1.2" type="text/javascript">
fecha_es();
        </script>
            </div></td>
          </tr>
      </table></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="vertical-align:top; width:20%;"><div id="navBar">
  <div id="sectionLinks">
    <h3>Productos</h3>
      <br /><?php menu_es();?>
  </div>
</div></td>
    <td style="width:60%; vertical-align:top;"><table width="80%" align="center">
        <?php do { ?>
        <tr>
          <td width="100%" height="67" valign="bottom"><a href="detalles.php?fam_es=<?php echo $row_productos['fam_es'];?>&amp;pageNum_productos=<?php echo $pageNum_productos; ?>
		  "><?php echo $row_productos['descripcion_listado_es']." ..."; ?></a></td>
          <?php 
		  if ($row_productos['foto_mini_es']!=''){?>
		  <td width="0%" valign="bottom"><div class="imagListado">
            <div align="center"><a href="detalles.php?fam_es=<?php echo $row_productos['fam_es'];?>&amp;pageNum_productos=<?php echo $pageNum_productos; ?>"><img src='../fotos/imagenes/miniaturas/<?php echo $row_productos['foto_mini_es']; ?>' alt="<?php echo $row_productos['descripcion_listado_es']; ?>" height="40" border="0" /></a></div>
          </div></td>
 <?php }else{ ?>
  <td width="0%">&nbsp;</td>
  <?php }?>
		</tr>
		<tr>
    		<td colspan="2"><hr style="color:#000099; width:100%;" size="1px"  /></td>
  		</tr>
        <?php $pageNum_productos++;
		} while ($row_productos = mysql_fetch_assoc($productos)); ?>
    </table>
    <br />
<br /></td>
    <td style="vertical-align:top; width:20%; background-image:url(../fotos/fondoprincipal.jpg); background-repeat:repeat-x;"><div id="headlines">
      <table style="float:right; width:95%;">
        <tr>
          <td><h3>Buscador</h3>
              <div id="search">
                <form id="buscador" action="busqueda.php" method="get">
                  <input name="searchFor" type="text" class="inputbox" size="20" />
                  <br />
                  <br />
                  <input class="buttons" name="goButton" type="submit" value="Buscar" />
                </form>
              </div>
            <br />
            <p><a href="distribuidores.php">Distribuidores de <br />
              ECO-CERA en Espa&ntilde;a</a> </p>
            <?php novedades_es(); ?>
              <br />
              <br />
            <a class="ofertas" href="ofertas_es.php">OFERTAS</a>
		  </td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
<div id="siteInfo">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><a href="contacto_es.php">Contactar</a> |<a href="avisolegal.html" onclick="window.open(this.href,'self', 'width=300,height=220'); return false;"> eco - cera &reg; 2006</a>
  | <a href="contacto_webmaster_es.php">Webmaster</a> | <a class="validacion" href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.eco-cera.es%2Fesp%2Flistado.php" target="_blank">xhtml</a> | <a href="http://jigsaw.w3.org/css-validator/validator?uri=http://www.eco-cera.es/3col_leftNav.css" class="validacion" target="_blank">css</a></td>
      <td><div style="text-align:right;" onclick="print();"><a href="javascript:void(0);"><img src="../fotos/imprimir.gif" alt="imprimir" width="18" height="17" /> Imprimir</a></div></td>
    </tr>
  </table>
</div>
<br />
</td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($productos);
?>
