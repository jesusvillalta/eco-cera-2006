<?php require_once('../Connections/ecocera.php'); ?>
<?php include('menu_es.php'); ?>
<?php
$familia=$_GET['fam_es'];

/*
$familia = str_replace("á","&aacute;",$familia);
$familia = str_replace("é","&eacute;",$familia);
$familia = str_replace("í","&iacute;",$familia);
$familia = str_replace("ó","&oacute;",$familia);
$familia = str_replace("ú","&uacute;",$familia);
*/

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_productos = 1;
$pageNum_productos = 0;
if (isset($_GET['pageNum_productos'])) {
  $pageNum_productos = $_GET['pageNum_productos'];
}
$startRow_productos = $pageNum_productos * $maxRows_productos;

mysql_select_db($database_ecocera, $ecocera);
$query_productos = "SELECT `ref`, fam_es, foto_es, descripcion_listado_es, econombre_es, texto_es FROM productos WHERE fam_es='$familia'";
$query_limit_productos = sprintf("%s LIMIT %d, %d", $query_productos, $startRow_productos, $maxRows_productos);
$productos = mysql_query($query_limit_productos, $ecocera) or die(mysql_error());
$row_productos = mysql_fetch_assoc($productos);

if (isset($_GET['totalRows_productos'])) {
  $totalRows_productos = $_GET['totalRows_productos'];
} else {
  $all_productos = mysql_query($query_productos);
  $totalRows_productos = mysql_num_rows($all_productos);
}
$totalPages_productos = ceil($totalRows_productos/$maxRows_productos)-1;

$queryString_productos = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_productos") == false && 
        stristr($param, "totalRows_productos") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_productos = "&amp;" . htmlentities(implode("&", $newParams));
  }
}
$queryString_productos = sprintf("&amp;totalRows_productos=%d%s", $totalRows_productos, $queryString_productos);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Fabricante y distribuidor de aparatos y material dental y odontol&oacute;gico :: eco - cera</title>
<meta name="keywords" content="ecocera, eco-cera, preformas, ceras, bebederos, planchas, retenciones, rejillas, ganchos, líquidos, espaciadores, pinceles, instrumental, porta fresas, aparatos, resinas, colados, esqueleticos, esqueléticos, agente, reductor, separador, barniz, grafito, laca, texturador, muñones, polimerizadora" />
<meta name="Description" content="<?php echo $row_productos['descripcion_listado_es'];?> - eco-cera es un fabricante y distribuidor de material dental. Suministramos topo tipo de productos odontológicos para su laboratorio dental. Consulte nuestro catálogo de productos de odontología." />
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
            <td width="21%"><div id="direccionweb"><a href="../index.html">www.eco-cera.es</a></div></td>
            <td width="26%"><div id="ruta"><a href="index_es.php">Inicio</a> &gt; <a href="listado.php?fam_es=<?php echo $row_productos['fam_es']; ?>"><?php echo $row_productos['fam_es']; ?></a><br />
            </div></td>
            <td width="32%"><div id="rutaBarraNavegacion">
                  <?php if ($pageNum_productos > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_productos=%d%s", $currentPage, 0, $queryString_productos); ?>"><img src="../fotos/primero.jpg" alt="primero" width="31" height="15" border="0" /></a>
                  <?php } // Show if not first page ?>
                  <?php if ($pageNum_productos > 0) { // Show if not first page ?>
                  <a href="<?php printf("%s?pageNum_productos=%d%s", $currentPage, max(0, $pageNum_productos - 1), $queryString_productos); ?>"><img src="../fotos/atras.jpg" alt="anterior" width="31" height="15" border="0" /></a>
                  <?php } // Show if not first page ?>
                  <?php if ($pageNum_productos < $totalPages_productos) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_productos=%d%s", $currentPage, min($totalPages_productos, $pageNum_productos + 1), $queryString_productos); ?>"><img src="../fotos/adelante.jpg" alt="siguiente" width="31" height="15" border="0" /></a>
                  <?php } // Show if not last page ?>
                  <?php if ($pageNum_productos < $totalPages_productos) { // Show if not last page ?>
                  <a href="<?php printf("%s?pageNum_productos=%d%s", $currentPage, $totalPages_productos, $queryString_productos); ?>"><img src="../fotos/ultimo.jpg" alt="ultimo" width="31" height="15" border="0" /></a>
                  <?php } // Show if not last page ?>
                </div></td>
            <td width="21%" valign="bottom"><div id="fecha">
                <script
language="JavaScript1.2" type="text/javascript">
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
    <td style="width:60%; vertical-align:top;"><?php do { ?>
      <table style="width:100%; border:none;" align="center">
	    <tr>
	      <td style="text-align:center;">
        <?php if($row_productos['econombre_es']!='')
		  { echo "<br /><br /><h2>".$row_productos['econombre_es']."</h2>";}
		  ?>
        <?php if ($row_productos['foto_es']!=''){?>
        <br />
        <br />
        <img src='../fotos/imagenes/<?php echo $row_productos['foto_es']; ?>' alt="<?php echo $row_productos['descripcion_listado_es']; ?>" border="0" id="foto"/>
                <?php }?>
                <br />
                <br />
                </td>
	    </tr>
	  </table>
      <?php echo $row_productos['texto_es']; ?> <br />
          <br />
          <?php } while ($row_productos = mysql_fetch_assoc($productos)); ?>
          <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><p style="text-align:left;"><span style="font-weight:bold;">Particulares:</span> Si est&aacute; interesado en un producto anote su referencia y contacte con <a style="font-weight:bold;" href="distribuidores.php">su distribuidor de ECO-CERA m&aacute;s cercano</a> o con <a style="font-weight:bold;" href="contacto_es.php">nosotros </a>si no lo hay en su provincia.<br />
                  <br />
                <span style="font-weight:bold;">Distribuidores: <a href="distribuidores.php">Distribuidores de 
          ECO-CERA en Espa&ntilde;a.</a></span><br />
              <br />
              </p></td>
            </tr>
          </table>
          </td>
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
              ECO-CERA en Espa&ntilde;a</a></p>
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

<!--end content -->
<div id="siteInfo">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><a href="contacto_es.php">Contactar</a> |<a href="avisolegal.html" onclick="window.open(this.href,'self', 'width=300,height=220'); return false;"> eco - cera &reg; 2006</a>
  | <a href="contacto_webmaster_es.php">Webmaster</a> | <a class="validacion" href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.eco-cera.es%2Fesp%2Fdetalles.php" target="_blank">xhtml </a>| <a href="http://jigsaw.w3.org/css-validator/validator?uri=http://www.eco-cera.es/3col_leftNav.css" class="validacion" target="_blank">css</a></td>
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
<?php /*?><?php
mysql_free_result($productos);
?><?php */?>
