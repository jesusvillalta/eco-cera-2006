<?php include('menu_es.php'); ?>
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
  <tr style="background-image:url(../fotos/boca2.jpg);">
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
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
            <td width="215" height="16"><div id="direccionweb"><a href="../index.html">www.eco-cera.es</a></div></td>
            <td width="52%"><div id="ruta"><a href="index_es.php">Inicio</a> &gt; Contacto &gt; Webmaster<br />
            </div></td>
            <td width="27%" valign="bottom"><div id="fecha">
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
    <td style="width:60%; vertical-align:top;">
            <br />
          <?php 
          if(isset($_POST['nombre']) && $_POST['nombre']!=""){  
          if($resultado) {
		echo '<p style="text-align:center;"> Su correo ha sido enviado correctamente, gracias.</p>';
		}
		else{
			echo '<p style="font-size:12px; text-align:center;";>Su correo no se ha podido enviar, inténtelo de nuevo, gracias.</p><br /><br /><br />
			<table width="0%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td><div id="boton" align="center" style="cursor:hand; font-weight:bold; width:100px; background-color:#000099; color:#FFFFFF; height: 35px; font-size:12px;" onclick="history.back(-1);">Volver a Formulario</div></td>
                </tr>
    </table> ';
		}
		}
           ?>
	<?php if (!isset($_POST['nombre']))
		{
            echo '<form action="contacto_webmaster_es.php" method="post" name="formcontacto">
	<table align="center">
	  <tr>
	    <td>Nombre<br />
	        <input name="nombre" type="text" class="inputbox" size="35" /></td>
	    </tr>
	  <tr>
        <td><br />
          Correo<br />
        <input name="correo" type="text" class="inputbox" size="35" /></td></tr>
	  <tr>
        <td><br />
          Asunto<br />
        <input name="asunto" type="text" class="inputbox" size="35" /></td></tr>
	  <tr>
        <td>
          <br />
          Comentarios<br />
          <textarea name="comentarios" cols="45" rows="10" class="inputbox"></textarea></td></tr>
    <tr>
      <td><div align="center">
        <p><br />
        <input name="enviar" type="submit" class="buttons" value="Enviar" />
          </p></div></td>
      </tr>
</table>
    <span class="feature"><br />
    <br />
    </span>
          </form>';}
	if (isset($_POST['nombre']) && $_POST['nombre']=="")
			{
			echo '<p style="font-size:12px; text-align:center;";>Su correo no se ha podido enviar, inténtelo de nuevo, gracias.</p><br /><br /><br />
			
			<table width="0%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td><div id="boton" align="center" style="cursor:hand; font-weight:bold; width:100px; background-color:#000099; color:#FFFFFF; height: 35px; font-size:12px;" onclick="history.back(-1);">Volver a Formulario</div></td>
                </tr>
    </table>';
		}
	?>
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
<div id="siteInfo">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><a href="contacto_es.php">Contactar</a> |<a href="avisolegal.html" onclick="window.open(this.href,'self', 'width=300,height=220'); return false;"> eco - cera &reg; 2006</a>
  | <a href="contacto_webmaster_es.php">Webmaster</a> | <a class="validacion" href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.eco-cera.es%2Fesp%2Fcontacto_webmaster_es.php" target="_blank">xhtml</a> | <a href="http://jigsaw.w3.org/css-validator/validator?uri=http://www.eco-cera.es/3col_leftNav.css" class="validacion" target="_blank">css</a></td>
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
