<?php

$kon = mysqli_connect('db', 'uim', 'uim123', 'kursus');

if (!$kon) {
	die("ERROR: Tidak dapat terhubung dengan database!!");
}

function crossite($val)
{
	return strip_tags($val);
}