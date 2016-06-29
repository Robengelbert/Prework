<?php
$temp = "The date is ";
echo $temp . longdate(time());

function longdate($timestamp)
{
	return date("l f js y", $timestamp);
}
?>