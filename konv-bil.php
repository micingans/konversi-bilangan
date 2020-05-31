<?php 

$opsi = [
	"1.  Desimal ke Biner",
	"2.  Desimal ke Oktal",
	"3.  Desimal ke Hexadesimal",
	"4.  Biner ke Desimal",
	"5.  Oktal ke Desimal",
	"6.  Hexadesimal ke Desimal",
	"7.  Biner ke Oktal",
	"8.  Oktal ke Biner",
	"9.  Biner ke Hexadesimal",
	"10. Hexadesimal ke Biner",
	"11. Oktal ke Hexadesimal",
	"12. Hexadesimal ke Oktal"
];
	echo "#################################\n";
    echo "#      Kopnversi Bilangan       #\n";
    echo "#        Create By Micin        #\n";
    echo "#################################\n";
	for ($j=0; $j < 12; $j++) { 
		echo "".$opsi[$j]."\n";
	}
	echo "Pilih : ";
	$pil = trim(fgets(STDIN));
	if ($pil == "1") {
		system(clear);
		echo "Ketik bilangan : ";
		$bin = trim(fgets(STDIN));
		system(clear);
		$hasil = base_convert($bin,10,2);
		echo "Hasil = ".$hasil."\n";
	} if ($pil == "2") {
		system(clear);
		echo "Ketik bilangan : ";
		$bin = trim(fgets(STDIN));
		system(clear);
		$hasil = base_convert($bin, 10,8);
		echo "Hasil = ".$hasil."\n";
	} if ($pil == "3") {
		system(clear);
		echo "Ketik bilangan : ";
		$bin = trim(fgets(STDIN));
		system(clear);
		$hasil = base_convert($bin,10,16);
		echo "Hasil = ".$hasil."\n";
	} if ($pil == "4") {
		system(clear);
		echo "Ketik bilangan : ";
		$bin = trim(fgets(STDIN));
		system(clear);
		$hasil = base_convert($bin,2,10);
		echo "Hasil = ".$hasil."\n";
	} if ($pil == "5") {
		system(clear);
		echo "Ketik bilangan : ";
		$bin = trim(fgets(STDIN));
		system(clear);
		$hasil = base_convert($bin,8,10);
		echo "Hasil = ".$hasil."\n";
	} if ($pil == "6") {
		system(clear);
		echo "Ketik bilangan : ";
		$bin = trim(fgets(STDIN));
		system(clear);
		$hasil = base_convert($bin,16,10);
		echo "Hasil = ".$hasil."\n";
	} if ($pil == "7") {
		system(clear);
		echo "Ketik bilangan : ";
		$bin = trim(fgets(STDIN));
		system(clear);
		$hasil = base_convert($bin,2,8);
		echo "Hasil = ".$hasil."\n";
	} if ($pil == "8") {
		system(clear);
		echo "Ketik bilangan : ";
		$bin = trim(fgets(STDIN));
		system(clear);
		$hasil = base_convert($bin,8,2);
		echo "Hasil = ".$hasil."\n";
	} if ($pil == "9") {
		system(clear);
		echo "Ketik bilangan : ";
		$bin = trim(fgets(STDIN));
		system(clear);
		$hasil = base_convert($bin,2,16);
		echo "Hasil = ".$hasil."\n";
	} if ($pil == "10") {
		system(clear);
		echo "Ketik bilangan : ";
		$bin = trim(fgets(STDIN));
		system(clear);
		$hasil = base_convert($bin,16,2);
		echo "Hasil = ".$hasil."\n";
	} if ($pil == "11") {
		system(clear);
		echo "Ketik bilangan : ";
		$bin = trim(fgets(STDIN));
		system(clear);
		$hasil = base_convert($bin,8,16);
		echo "Hasil = ".$hasil."\n";
	} if ($pil == "12") {
		system(clear);
		echo "Ketik bilangan : ";
		$bin = trim(fgets(STDIN));
		system(clear);
		$hasil = base_convert($bin,16,8);
		echo "Hasil = ".$hasil."\n";
	} elseif ($pil < 13) {
		system(exit);
	}

?>