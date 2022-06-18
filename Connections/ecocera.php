<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_ecocera = "localhost";
$database_ecocera = "ecocera";
$username_ecocera = "ecocera";
$password_ecocera = "ecocera";
$ecocera = mysql_pconnect($hostname_ecocera, $username_ecocera, $password_ecocera) or trigger_error(mysql_error(),E_USER_ERROR); 
?>