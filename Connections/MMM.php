<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_MMM = "sql100.infinityfree.com";
$database_MMM = "if0_39366363_Emma";
$username_MMM = "if0_39366363";
$password_MMM = "A3fCR45nHdCj";
$MMM = mysql_pconnect($hostname_MMM, $username_MMM, $password_MMM) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
