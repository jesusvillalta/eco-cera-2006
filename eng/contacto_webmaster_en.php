<?php include('menu_en.php'); ?>
<?php if(isset($_POST['nombre']) && $_POST['nombre']!=""){

	$para = "vierkof1@excite.com";
	$asunto ="eco-cera - ". $_POST['asunto'];
	/* $comentario = $_POST['comentarios']; */
	$comentario = "Mensaje enviado por ".$_POST['nombre']."<br />\r\n".$_POST['comentarios'];
	
	/* Para enviar correo HTML, puede definir la cabecera Content-type. */
	$cabecera  = "MIME-Version: 1.0\r\n";
	$cabecera .= "Content-type: text/html; charset=iso-8859-1\r\n";

	/* cabeceras adicionales */
	$cabecera .= "To: vierkof1@excite.com\r\n";
	/* $cabecera .= "From:". $_POST['nombre']."<". $_POST['correo'].">\r\n."; */
	$cabecera .= "From:".$_POST['correo']."\r\n";

	$resultado = @mail($para,$asunto,$comentario,$cabecera);

	}
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
  <tr style="background-image:url(../fotos/boca2.jpg);">
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
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
            <td width="215" height="16"><div id="direccionweb"><a href="../index.html">www.eco-cera.es</a></div></td>
            <td width="52%"><div id="ruta"><a href="index_en.php">Home</a> &gt; Contacto &gt; Webmaster<br />
            </div></td>
            <td width="27%" valign="bottom"><div id="fecha">
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
    <td style="width:60%; vertical-align:top;">
            <br />
          <?php 
          if(isset($_POST['nombre']) && $_POST['nombre']!=""){  
          if($resultado) {
		echo '<p style="text-align:center;"> Su correo ha sido enviado correctamente, gracias.</p>';
		}
		else{
			echo '<p style="font-size:12px; text-align:center;";>An error occurred while sending mail. Please check the recepients and try again.</p><br /><br /><br />
			<table width="0%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td><div id="boton" align="center" style="cursor:hand; font-weight:bold; width:100px; background-color:#000099; color:#FFFFFF; height: 35px; font-size:12px;" onclick="history.back(-1);">Back and try again please</div></td>
                </tr>
    </table> ';
		}
		}
           ?>
	<?php if (!isset($_POST['nombre']))
		{
            echo '<form action="contacto_webmaster_en.php" method="post" name="formcontacto">
	<table align="center">
	  <tr>
	    <td>Name<br />
	        <input name="nombre" type="text" class="inputbox" size="35" /></td>
	    </tr>
	  <tr>
        <td><br />
          E-mail<br />
        <input name="correo" type="text" class="inputbox" size="35" /></td></tr>
	  <tr>
        <td><br />
          Subject<br />
        <input name="asunto" type="text" class="inputbox" size="35" /></td></tr>
	  <tr>
        <td>
          <br />
          Comments<br />
          <textarea name="comentarios" cols="45" rows="10" class="inputbox"></textarea></td></tr>
    <tr>
      <td><div align="center">
        <p><br />
        <input name="enviar" type="submit" class="buttons" value="Send" />
          </p></div></td>
      </tr>
</table>
    <span class="feature"><br />
    <br />
    </span>
          </form>';}
	if (isset($_POST['nombre']) && $_POST['nombre']=="")
			{
			echo '<p style="font-size:12px; text-align:center;";>An error occurred while sending mail. Please check the recepients and try again.</p><br /><br /><br />
			
			<table width="0%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td><div id="boton" align="center" style="cursor:hand; font-weight:bold; width:100px; background-color:#000099; color:#FFFFFF; height: 35px; font-size:12px;" onclick="history.back(-1);">Back and try again please</div></td>
                </tr>
    </table>';
		}
	?>
		  </td>
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
  | <a href="contacto_webmaster_en.php">Webmaster</a> | <a class="validacion" href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.eco-cera.es%2Feng%2Fcontacto_webmaster_en.php" target="_blank">xhtml</a> | <a href="http://jigsaw.w3.org/css-validator/validator?uri=http://www.eco-cera.es/3col_leftNav.css" class="validacion" target="_blank">css</a></td>
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
