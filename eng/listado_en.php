<?php require_once('../Connections/ecocera.php'); ?>
<?php include('menu_en.php'); ?>
<?php
$fam_en=$_GET['fam_en'];
/*
$fam_en = str_replace("á","&aacute;",$fam_en);
$fam_en = str_replace("é","&eacute;",$fam_en);
$fam_en = str_replace("í","&iacute;",$fam_en);
$fam_en = str_replace("ó","&oacute;",$fam_en);
$fam_en = str_replace("ú","&uacute;",$fam_en);
*/
$pageNum_productos = 0;
mysql_select_db($database_ecocera, $ecocera);
$query_productos = "SELECT fam_en, foto_mini_es, descripcion_listado_en FROM productos WHERE fam_en='$fam_en'";
$productos = mysql_query($query_productos, $ecocera) or die(mysql_error());
$row_productos = mysql_fetch_assoc($productos);
$totalRows_productos = mysql_num_rows($productos);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="EN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Equipments and dental material :: eco - cera</title>
<meta name="keywords" content="ecocera, eco-cera, wax patterns, waxes, wax wires, wax plates, wax retainers, wax meshes, wax clasps, liquids, die spacers, ceramic brushes, acrylics, instruments, accessories, equipments, wax profiles" />
<meta name="Description" content="eco-cera: equipments and dental material." />
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
        <td style="width:54%; height:70px;"><div id="masthead_eng"> eco - cera  <span class="registrada"> &reg;</span><span class="subtitulo"> equipments and dental material</span></div></td>
        <td style="width:46%;"><table style="width:99%; border=0px; float:right;" cellpadding="0" cellspacing="0">
          <tr>
            <td style="width:238px; height:50px; vertical-align:bottom;" id="direccionPostal">POST OFFICE BOX 88<br />
              E-18140 LA ZUBIA - GRANADA - 
              SPAIN<br />
              Tel/Fax: +34 958308230 - info@eco-cera.es</td>
            <td style="width:81px; vertical-align:bottom;"><div style="width:100%; float:right;"><a href="../esp/index_es.php"><img src="../fotos/spanien.gif" alt="espa&ntilde;ol" style="border:0px; width:16px; height:10px;" /> </a><img src="../fotos/uk.gif" alt="english" style="border:0px; width:16px; height:10px;" /> <img src="../fotos/france.gif" alt="francais" style="border:0px; width:16px; height:10px;" />  <a href="../ale/index_ale.php"><img src="../fotos/germany.gif" alt="deutsch" style="border:0px; width:16px; height:10px;" /></a> </div></td>
          </tr>
        </table></td>
      </tr>
    </table>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td style="width:21%; height:16px;"><div id="direccionweb"><a href="../index.html">www.eco-cera.es</a></div></td>
            <td style="width:52%;"><div id="ruta"><a href="index_en.php">Home</a> &gt; <a href="#"><?php echo $row_productos['fam_en']; ?></a><br />
            </div></td>
            <td width="27%" valign="bottom"><div id="fecha">
                <script language="JavaScript1.2" type="text/javascript">
fecha_en();
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
    <h3>Products</h3>
      <br /><?php menu_en();?>
  </div>
</div></td>
    <td style="width:60%; vertical-align:top;"><table width="80%" align="center">
        <?php do { ?>
        <tr>
          <td width="100%" height="67" valign="bottom"><a href="detalles_en.php?fam_en=<?php echo $row_productos['fam_en'];?>&amp;pageNum_productos=<?php echo $pageNum_productos; ?>
		  "><?php echo $row_productos['descripcion_listado_en']." ..."; ?></a></td>
          <?php 
		  if ($row_productos['foto_mini_es']!=''){?>
		  <td width="0%" valign="bottom"><div class="imagListado">
            <div align="center"><a href="detalles_en.php?fam_en=<?php echo $row_productos['fam_en'];?>&amp;pageNum_productos=<?php echo $pageNum_productos; ?>"><img src='../fotos/imagenes/miniaturas/<?php echo $row_productos['foto_mini_es']; ?>' alt="<?php echo $row_productos['descripcion_listado_en']; ?>" height="40" border="0" /></a></div>
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
          <td><h3>Search</h3>
              <div id="search">
                <form id="buscador" action="busqueda_en.php" method="get">
                  <input name="searchFor" type="text" class="inputbox" size="20" />
                  <br />
                  <br />
                  <input class="buttons" name="goButton" type="submit" value="Go" />
                </form>
              </div>
            <br />
            <p><a href="distribuidores_en.php">Partners for Spain<br />

              and Europe</a></p>
            <?php novedades_es(); ?>
              <br />
              <br />
            <a class="ofertas" href="ofertas_en.php">OFFERS</a>
		  </td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
<div id="siteInfo">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><a href="contacto_en.php">Contact  Us</a> |<a href="avisolegal_en.html" onclick="window.open(this.href,'self', 'width=300,height=220'); return false;"> eco - cera &reg; 2006</a>
  | <a href="contacto_webmaster_en.php">Webmaster</a> | <a class="validacion" href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.eco-cera.es%2Feng%2Flistado_en.php" target="_blank">xhtml</a> | <a href="http://jigsaw.w3.org/css-validator/validator?uri=http://www.eco-cera.es/3col_leftNav.css" class="validacion" target="_blank">css</a></td>
      <td><div style="text-align:right;" onclick="print();"><a href="javascript:void(0);"><img src="../fotos/imprimir.gif" alt="print" width="18" height="17" /> Print</a></div></td>
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
