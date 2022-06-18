<?php require_once('../Connections/ecocera.php'); ?>
<?php include('menu_ale.php'); ?>
<?php
$fam_ale=$_GET['fam_ale'];
/*
$fam_ale = str_replace("á","&aacute;",$fam_ale);
$fam_ale = str_replace("é","&eacute;",$fam_ale);
$fam_ale = str_replace("í","&iacute;",$fam_ale);
$fam_ale = str_replace("ó","&oacute;",$fam_ale);
$fam_ale = str_replace("ú","&uacute;",$fam_ale);
*/
$pageNum_productos = 0;
mysql_select_db($database_ecocera, $ecocera);
$query_productos = "SELECT fam_ale, foto_mini_es, descripcion_listado_ale FROM productos WHERE fam_ale='$fam_ale'";
$productos = mysql_query($query_productos, $ecocera) or die(mysql_error());
$row_productos = mysql_fetch_assoc($productos);
$totalRows_productos = mysql_num_rows($productos);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dentalgeräte und material :: eco - cera</title>
<meta name="keywords" content="ecocera, eco-cera, produkte, wachsfertigteile, preformes, wachse, cires, wachsdraht , plattenwachs , wachsretentionen , wachsgitter, wachsklammern, flüssigkeiten, stumpflacke, keramikpinsel, instrumente, fräsenständer, geräte, kunststoffe, wachsprofile, laborzubehöhr" />
<meta name="Description" content="eco-cera: dentalgeräte und material." />
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
        <td style="width:54%; height:70px;"><div id="masthead_ale"> eco - cera  <span class="registrada"> &reg;</span><span class="subtitulo">dentalger&auml;te und material</span></div></td>
        <td style="width:46%;"><table style="width:99%; border=0px; float:right;" cellpadding="0" cellspacing="0">
          <tr>
            <td style="width:238px; height:50px; vertical-align:bottom;" id="direccionPostal">CALLE  DORNAJO, N&ordm; 5.<br />
E-18193 - BARRIO DE MONACHIL - GRANADA - 
                ESPA&Ntilde;A<br />
              Tel/Fax: +34 958308230 - info@eco-cera.es</td>
            <td style="width:81px; vertical-align:bottom;"><div style="width:100%; float:right;"><a href="../esp/index_es.php"><img src="../fotos/spanien.gif" alt="espa&ntilde;ol" style="border:0px; width:16px; height:10px;" /> </a><a href="../eng/index_en.php"><img src="../fotos/uk.gif" alt="english" style="border:0px; width:16px; height:10px;" /></a> <img src="../fotos/france.gif" alt="francais" style="border:0px; width:16px; height:10px;" />  <a href="../ale/index_ale.php"><img src="../fotos/germany.gif" alt="deutsch" style="border:0px; width:16px; height:10px;" /></a> </div></td>
          </tr>
        </table></td>
      </tr>
    </table>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td style="width:21%; height:16px;"><div id="direccionweb"><a href="../index.html">www.eco-cera.es</a></div></td>
            <td style="width:52%;"><div id="ruta"><a href="index_ale.php">Startseite</a> &gt; <a href="#"><?php echo $row_productos['fam_ale']; ?></a><br />
            </div></td>
            <td width="27%" valign="bottom"><div id="fecha">
                <script language="JavaScript1.2" type="text/javascript">
fecha_ale();
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
      <br /><?php menu_ale();?>
  </div>
</div></td>
    <td style="width:60%; vertical-align:top;"><table width="80%" align="center">
        <?php do { ?>
        <tr>
          <td width="100%" height="67" valign="bottom"><a href="detalles_ale.php?fam_ale=<?php echo $row_productos['fam_ale'];?>&amp;pageNum_productos=<?php echo $pageNum_productos; ?>
		  "><?php echo $row_productos['descripcion_listado_ale']." ..."; ?></a></td>
          <?php 
		  if ($row_productos['foto_mini_es']!=''){?>
		  <td width="0%" valign="bottom"><div class="imagListado">
            <div align="center"><a href="detalles_ale.php?fam_ale=<?php echo $row_productos['fam_ale'];?>&amp;pageNum_productos=<?php echo $pageNum_productos; ?>"><img src='../fotos/imagenes/miniaturas/<?php echo $row_productos['foto_mini_es']; ?>' alt="<?php echo $row_productos['descripcion_listado_ale']; ?>" height="40" border="0" /></a></div>
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
          <td><h3>Sucher</h3>
              <div id="search">
                <form id="buscador" action="busqueda_ale.php" method="get">
                  <input name="searchFor" type="text" class="inputbox" size="20" />
                  <br />
                  <br />
                  <input class="buttons" name="goButton" type="submit" value="Suche" />
                </form>
              </div>
            <br />
            <p><a href="distribuidores_ale.php">H&auml;ndler</a></p>
            <?php novedades_es(); ?>
              <br />
              <br />
            <a class="ofertas" href="ofertas_ale.php">Oferten</a>
		  </td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
<div id="siteInfo">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><a href="contacto_ale.php">Kontakt</a> |<a href="avisolegal_ale.html" onclick="window.open(this.href,'self', 'width=300,height=220'); return false;"> eco - cera &reg; 2006</a>
  | <a href="contacto_webmaster_ale.php">Webmaster</a> | <a class="validacion" href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.eco-cera.es%2Feng%2Flistado_ale.php" target="_blank">xhtml</a> | <a href="http://jigsaw.w3.org/css-validator/validator?uri=http://www.eco-cera.es/3col_leftNav.css" class="validacion" target="_blank">css</a></td>
      <td><div style="text-align:right;" onclick="print();"><a href="javascript:void(0);"><img src="../fotos/imprimir.gif" alt="print" width="18" height="17" /> Drucken</a></div></td>
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
