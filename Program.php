<?php 

require_once ("Kendaraan.php");


echo "---MOBIL BALAP---";
echo "<br>";
$mobilBalap = new MobilBalap();
echo "<BR>";
$mobilBalap->injakKopling();
echo "<BR>";
$mobilBalap->setKecepatanKpj(100);
$mobilBalap->bergerak();


echo "<BR>";
echo "Kecepatan Mobil dalam satuan Mph : ".$mobilBalap->getKecepatanMph()." Mph";
echo "<br>";
$mobilBalap->belok(40);
echo "Kecepatan Mobil Setalah Berbelok : ".$mobilBalap->getKecepatanKpj()." Kpj";
echo "<br>";
$mobilBalap->gunakanNos();
echo "<br>";
$kecepatan = $mobilBalap->getKecepatanKpj();
echo "Kecepatan Mobil saat Ini : $kecepatan Kpj";
echo "<br>";
echo "Kecepatan Mobil dalam satuan Mph : ".$mobilBalap->getKecepatanMph()." Mph";
echo "<br>";
$mobilBalap->berhenti();
echo "<br>";
echo "Kecepatan Mobil saat Ini : ".$mobilBalap->getKecepatanKpj()." Kpj";
echo "<br>";
$mobilBalap->bergerak();


echo "<br>";
echo "<br>";
echo "---MOBIL SUV---";
echo "<br>";
echo "<br>";
$suv = new SUV;
$mobilBalap->injakKopling();
echo "<BR>";
$suv->setKecepatanKpj(80);
$suv->bergerak();
echo "<BR>";
echo "Kecepatan Mobil dalam satuan Mph : ".$suv->getKecepatanMph()." Mph";
echo "<br>";
$suv->belok(50);
echo "Kecepatan Mobil Setelah Berbelok : ".$suv->getKecepatanKpj()." Kpj";

echo "<br>";
$kecepatan = $suv->getKecepatanKpj();
echo "Kecepatan Mobil saat Ini : $kecepatan Kpj";
echo "<br>";
echo "Kecepatan Mobil dalam satuan Mph : ".$suv->getKecepatanMph()." Mph";
echo "<br>";
$suv->berhenti();
echo "<br>";
echo "Kecepatan Mobil saat Ini : ".$mobilBalap->getKecepatanKpj()." Kpj";
echo "<br>";
$suv->bergerak();

echo "<BR><br><br>";

echo "---SEPATU RODA---";
echo "<BR><br>";
$SR = new SepatuRoda;
$SR->setKecepatan(40);
echo "Kecepatan Sepatu Roda : ".$SR->getKecepatan()." m/h";
echo "<BR>";
$SR->belok(10);
echo "Kecepatan Sepatu Roda : ".$SR->getKecepatan()." m/h";
ECHO "<br>";
$SR->berhenti();
echo "<br>";
echo "Kecepatan Sepatu Roda : ".$SR->getKecepatan()." m/h";

echo "<BR><br><br>";

echo "---SEPEDA---";
echo "<BR><br>";
$SP = new Sepeda;
$SP->setKecepatan(40);
echo "Kecepatan Sepeda : ".$SP->getKecepatan()." m/h";
echo "<BR>";
$SP->belok(30);
echo "Kecepatan Sepeda : ".$SP->getKecepatan()." m/h";
ECHO "<br>";
$SP->berhenti();
echo "<br>";
echo "Kecepatan Sepeda : ".$SP->getKecepatan()." m/h";




