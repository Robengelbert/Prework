<?php
function sanitizestring($var)
{
	$var = stripslashes($var);
	$var = strip_tags($var);
	$var = htmlentities($var);
	return $var;
}

function sanitizemySQL($connection, $var)
{
	$var = $connection->real_escape_string($var);
	$var = sanitizeString($var);
	return $var;
}
?>