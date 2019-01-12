<?php

	$nama = "Anan";
	$gender = "Laki-laki";
	$age = 21;
	const ADDRESS = 'Pamekasan';
	$number = [1,2,3,4,5,6,[3,4,5,6]];
	$contact = [
		'contact1' => ['nama' => 'Agus', 'addres'=>'Pamekasan'],
		'contact2' => ['nama' => 'Agus', 'addres'=>'Pamekasan'],
		'contact3' => ['nama' => 'Agus', 'addres'=>'Pamekasan'],
		'contact4' => ['nama' => 'Agus', 'addres'=>'Pamekasan'],
	];

	echo "string ".$nama."<br/>";
	echo "Nama saya {$nama} jenis kelamin {$gender} <br/>";

	$bil1 = 2;
	$bil2 = 6;

	echo $bil1*$bil2;

	var_dump($bil1 == $bil2);
	var_dump($bil1 === $bil2);
	var_dump($bil1 != $bil2);
	var_dump($bil1 <> $bil2);
	var_dump($bil1 !== $bil2);
	var_dump($bil1 < $bil2);
	var_dump($bil1 > $bil2);
	var_dump($bil1 <= $bil2);
	var_dump($bil1 >= $bil2);

	while ($bil1 != 0) {
		echo $bil1;
		$bil1--;
	}

	$d = 10;

	echo $d+=$bil2;

	$nama = "anDi dan Sandi sedang belajar PHP";
	echo "<br/> {$nama} <br/>";
	echo strtolower($nama)."<br/>";
	echo strtoupper($nama)."<br/>";
	echo ucfirst($nama)."<br/>";
	echo ucwords($nama)."<br/>";

	//expload konversi string ke array
	$k_array = explode(" ", $nama);
	
	echo $k_array[2];
	var_dump($k_array);

	//imploade konversi array ke string
	$k_string = implode(" ", $k_array);
	echo "<br/>".$k_string."<br/>";

	//Pemformatan number
	$uang = 100000000;
	$format_uang = number_format($uang, 2, ",", ".");
	echo "<br/>Saya memiliki uang Rp {$format_uang} <br/>";

	//fungsi

	function arimatik(int $bil1, $bil2 = 4) :int
	{
		return $bil1+$bil2;
	}

	echo arimatik(3,6)."<br/>";

	function fullName(string $fisrname, string $lastname)
	{
		//global $fullname;
		$fullname = $fisrname." ".$lastname;
		return ucwords($fullname);
	}


	echo "Nama lengkap saya adalah ".fullName("andi", "wardana")."<br/>";
	//echo "Nama saya ".$fullname;

	//Static Variabel

	function counter()
	{
		static $a  = 0;
		$a +=1;
		return "Ini pemanggilan fungsi ke-{$a}<br/>";
	}

	echo counter();
	echo counter();
	echo counter();
	echo counter();
	echo counter();
	echo counter();
	echo counter();
	echo counter();
	echo counter();

?>