<?php
if (isset($_SEVER['PHP_AUTH_USER']) &&
isset($_SEVER['PHP_AUTH_PW']))
{
	ECHO "Welcome User: " . $_SEVER['PHP_AUTH_USER'] .
		"Password: " . $_SEVER['PHP_AUTH_PW'];
}
else
{
	header('WWW-Authenticate: Basic realm="Restricted Section"');
	header('HTTP/1.0 401 Unauthorized');
	die("Please enter your username and password");
}
?>