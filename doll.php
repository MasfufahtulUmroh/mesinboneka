<?php 
class doll{
	public $doll;
	public $sumAccessories = 0;
	public $accessories = array();
	public $accessoriesCost = 0;

	//method untuk menentukan jenis boneka
	public function setDoll($new_doll){
		if($new_doll == 1){
			$this->doll = "Beruang";
		}elseif($new_doll == 2){
			$this->doll = "Elang";
		}elseif($new_doll == 3){
			$this->doll = "Harimau";
		}elseif($new_doll == 4){
			$this->doll = "Naga";
		}elseif($new_doll == 5){
			$this->doll = "Singa";
		}
	}
	//method menentukan jumlah aksesoris
	public function setsumAccessories($total_input){
		$this->sumAccessories = $total_input;
	}
	//method menambahkan daftar aksesoris yang dipasang
	public function addAccessories($object){
		if($object ==1){
			$object = "Topi";
			$this->accessoriesCost += 30000;
		}elseif($object == 2){
			$object = "Tongkat";
			$this->accessoriesCost += 20000;
		}elseif($object == 3){
			$object = "Pedang";
			$this->accessoriesCost += 50000;
		}elseif($object == 4){
			$object = "Perisai";
			$this->accessoriesCost += 40000;
		}elseif($object == 5){
			$object = "Cincin Sakti";
			$this->accessoriesCost += 120000;
		}elseif($object == 6){
			$object = "Sayap Malaikat";
			$this->accessoriesCost += 100000;
		}
		//untuk menambahkan array
		array_push($this->accessories,$object);
	}
	//method untuk mencetak ketersediaan aksesoris pada array
	public function isAccessoriesAvailable($param){
		if(in_array($param, $this->accessories)){
			return true;
		}else{
			return false;
		}
	}
	//method menghitung total pembelian
	public function countTotal(){
		//inisialisasi biaya pemasangan
		$installation =  0;
		//menghitung total biaya
		$finalCost = 900000 + $this->accessoriesCost;

		if($this->isAccessoriesAvailable("Pedang")&& $this->isAccessoriesAvailable("Perisai")){
			$installation = ($this->accessoriesCost)*10/100;
			$finalCost += $installation;
		}else if($this->isAccessoriesAvailable("Topi")&& $this->isAccessoriesAvailable("Sayap Malaikat")){
			$installation = ($this->accessoriesCost)*13/100;
			$finalCost += $installation;
		}else if(count($this->accessories) == 3 ){
			if($this->accessories[2] == "Cincin Sakti"){
				$installation = ($this->accessoriesCost)*20/100;
				$finalCost += $installation;
			}else{
				$finalCost;
			}
		}else{
			$finalCost;
		}
		echo "\n\n\n+====================== NOTA PEMBELIAN ========================+\n";
		echo "\n Jenis Boneka \t\t\t: ".$this->doll;
		echo "\n Daftar Aksesoris \t\t: ";
		for ($i=0; $i < count($this->accessories); $i++){
			echo $this->accessories[$i];
			if($i < count($this->accessories)-1){
				echo ", ";
			}else{
				echo ".";
			}
		}
		echo "\n Harga Boneka \t\t\t: Rp. 900,000";
		echo "\n Total Harga Aksesoris \t\t: Rp. ".number_format($this->accessoriesCost);
		echo "\n Biaya Pemasangan Aksesoris \t: Rp. ".number_format($installation);
		echo "\n Total Pembayaran \t\t: Rp. ".number_format($finalCost);
		echo "\n\n+====================== NOTA PEMBELIAN =======================+\n\n\n";
	}
}
?>