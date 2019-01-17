<?php

$kon = mysqli_connect('db', 'uim', 'uim123', 'final_project');

if (!$kon) {
	die("ERROR: Tidak dapat terhubung dengan database!!");
}

function crossite($val)
{
	return strip_tags($val);
}

?>