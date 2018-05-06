<?php
 abstract class Kendaraan{
	
	public abstract function  bergerak();
	public abstract function berhenti();
	public abstract function  belok ($belok);
	
	
	
	
}

class Mobil extends Kendaraan{
	public $totalKM,$belok,$kecepatan,$kecAwal;
   public $asRoda;
	
 
	
	public function bergerak (){
		$bergerak = $this->kecepatan;
		
		if ($this->kecepatan > 0 ) {
		  $this->asRoda = new AsRoda;
		$this->asRoda->berputar();
		echo "Kecepatan Awal Mobil : ".$this->kecepatan." Kpj";
		}
		else {
			echo "Mobil berhenti, Roda tidak Beputar";
		}
		
	}
	
	public function berhenti(){
	$this->kecepatan = 0;
	echo "Mobil Berhenti";
			}
	
	public function belok ($belok){
		$this->belok = $belok;
		echo "Mobil sedang belok kecepatan dikurangi sebesar : ".$this->belok." Kpj";
			$this->kecepatan =$this->kecepatan   - $this->belok;
		echo "<br>";
	
			
	}
	
	public function setKecepatanKpj($kecepatan){
		
			$this->kecepatan = $kecepatan;
	
		
	}
	
	public function getKecepatanKpj(){
		return $this->kecepatan;
	}
	
	
		public function getKecepatanMph(){
		return $kecepatanMph = $this->getKecepatanKpj() * 0.6213711922;
	}
	
	 public function setTotalKm($totalKm){
		$this->$totalKm += totalKm;
	 }
	
}

 class AsRoda {

	
	public function tambahRoda(){
		echo "Roda Telah Ditambahkan, ";
		
	}
	
	public function berputar(){
	 $Roda = new Roda;
		$Roda->berputar();
		
	}
}

class Roda {

	public function berputar(){
			echo "Roda Berputar, ";
		
	}
	
}

 class MobilBalap extends Mobil{
		
	public function InjakKopling (){
		echo "Kopling diinjak, Gigi di set";
		
	}
	
	public function gunakanNos(){
	$this->kecepatan = $this->kecepatan * 5;
		echo "NOS digunakan kecepatan bertambah 5 kali sebelumnya";
	
			
	}
	
	
	
}


 class SUV extends Mobil{
	public function bukaPintuBelakang(){
		echo "Pintu belakang dibuka";
	}
}


class SepatuRoda{
	public $kecepatan,$belok;
public function Bergerak (){
	if ($this->kecepatan >0){
		echo "Sepatu Bergerak";
			}
	else {
		echo "Sepatu Berhenti";
	}
}

public function setKecepatan($kecepatan){
	$this->kecepatan = $kecepatan; 
}
public function getKecepatan(){
	return $this->kecepatan;
}

	public function berhenti(){
	$this->kecepatan = 0;
	echo "Anda Berhenti";
			}
			
				public function belok ($belok){
		$this->belok = $belok;
		echo "Anda sedang belok kecepatan dikurangi sebesar : ".$this->belok." m/h";
			$this->kecepatan =$this->kecepatan   - $this->belok;
		echo "<br>";
	
			
	}

	
}

class Sepeda{
	public $kecepatan,$belok;
public function Bergerak (){
	if ($this->kecepatan >0){
		echo "Sepeda Bergerak";
			}
	else {
		echo "Sepeda Berhenti";
	}
}

public function setKecepatan($kecepatan){
	$this->kecepatan = $kecepatan; 
}
public function getKecepatan(){
	return $this->kecepatan;
}

	public function berhenti(){
	$this->kecepatan = 0;
	echo "Anda Berhenti";
			}
			
				public function belok ($belok){
		$this->belok = $belok;
		echo "Anda sedang belok kecepatan dikurangi sebesar : ".$this->belok." m/h";
			$this->kecepatan =$this->kecepatan   - $this->belok;
		echo "<br>";
	
			
	}

	
}
