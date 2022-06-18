<?php 
require_once('../Connections/ecocera.php');
include('menu_en.php');
?>
<?php
$ref=$_GET['ref'];
mysql_select_db($database_ecocera, $ecocera);
$query_buscados = "SELECT `ref`, fam_en, foto_es, descripcion_listado_en, econombre_en, texto_en FROM productos WHERE ref='$ref'";
$buscados = mysql_query($query_buscados, $ecocera) or die(mysql_error());
$row_buscados = mysql_fetch_assoc($buscados);
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
<table width="100%" border="0" cellspacing="0" >
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
            <td width="21%"><div id="direccionweb"><a href="../index.html">www.eco-cera.es</a></div></td>
            <td width="26%"><div id="ruta"><a href="index_en.php">Home</a> &gt; Search - details <br />
            </div></td>
            <td width="32%"><div class="volverListadoBoton">
                <div align="right"><a href="javascript:history.back(-1);">Back to Search - results</a></div>
            </div></td>
            <td width="21%" valign="bottom"><div id="fecha">
                <script
language="JavaScript1.2" type="text/javascript">
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
    <td style="width:60%; vertical-align:top;"><table style="width:100%; border:none;" align="center">
	    <tr>
	      <td style="width:60%; vertical-align:top;">
        <table style="width:100%; border:none;" align="center">
	    <tr>
	      <td style="text-align:center;">
        
        <?php if($row_buscados['econombre_en']!='')
		  { echo "<br /><br /><h2>".$row_buscados['econombre_en']."</h2>";}
		  ?>
        <?php if ($row_buscados['foto_es']!=''){?>
        <br />
        <br />
        <img src='../fotos/imagenes/<?php echo $row_buscados['foto_es']; ?>' alt="<?php echo $row_buscados['descripcion_listado_en']; ?>" border="0" id="foto"/>
                <?php }?>
      </td>
	    </tr>
	  </table>

        <?php do { ?>
		<br />
        <?php echo $row_buscados['texto_en']; ?> <br />
        <br />
        <br />
    
                <table width="0%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td><div id="boton" align="center" style="cursor:hand; font-weight:bold; width:100px; background-color:#000099; color:#FFFFFF; height: 20px;" onclick="history.back(-1);">Volver a listado</div></td>
                </tr>
    </table>
                <br />
                <br />
  
      <?php } while ($row_buscados = mysql_fetch_assoc($buscados)); ?>
</td>
	    </tr>
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

<!--end content -->
<div id="siteInfo">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><a href="contacto_en.php">Contact  Us</a> |<a href="avisolegal_en.html" onclick="window.open(this.href,'self', 'width=300,height=220'); return false;"> eco - cera &reg; 2006</a>
  | <a href="contacto_webmaster_en.php">Webmaster</a> | <a class="validacion" href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.eco-cera.es%2Feng%2FdetallesBusqueda_en.php" target="_blank">xhtml</a> | <a href="http://jigsaw.w3.org/css-validator/validator?uri=http://www.eco-cera.es/3col_leftNav.css" class="validacion" target="_blank">css</a></td>
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
mysql_free_result($buscados);
?>