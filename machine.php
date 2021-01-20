<?php 
include("doll.php");
	$dollmachine = new doll();

	echo "\n+===== DAFTAR BONEKA YANG TERSEDIA =====+\n";
	echo "1. Beruang \n";
	echo "2. Elang \n";
	echo "3. Harimau \n";
	echo "4. Naga \n";
	echo "5. Singa \n";
	$inputDoll = readline("Masukkan Pilihan Boneka (1/2/3/4/5): ");

	if($inputDoll > 5){
		echo "Invalid menu.";
		exit();
	}else{
		$dollmachine->setDoll($inputDoll);
	}

	echo "\n";
	$sumAccessories = readline("Jumlah aksesoris yang ingin ditambahkan: ");
	if($sumAccessories < 1){
		echo "Jumlah minimal aksesoris yang bisa ditambahkan 1.\n";
		echo "\n";
		$sumAccessories = readline("Jumlah aksesoris yang ingin ditambahkan: ");
	}else
		$dollmachine->setsumAccessories($sumAccessories);

	if($sumAccessories > 3){
		echo "Jumlah maksimal aksesoris yang bisa ditambahkan adalah 3.\n";
		echo "\n";
		$sumAccessories = readline("Jumlah aksesoris yang ingin ditambahkan: ");
	}else{
		$dollmachine->setsumAccessories($sumAccessories);
	}
	for ($i=1; $i <= $sumAccessories; $i++){
		echo "\n+==== DAFTAR AKSESORIS BONEKA YANG TERSEDIA =====+\n";
		echo "1. Topi - Rp. 30.000,- \n";
		echo "2. Tongkat - Rp. 20.000- \n";
		echo "3. Pedang - Rp. 50.000,- \n";
		echo "4. Perisai - Rp. 40.000,- \n";
		echo "5. Cincin Sakti - Rp. 120.000,- \n";
		echo "6. Sayap Malaikat - Rp. 100.000,- \n";
		$inputAccessories = readline("Masukkan Aksesoris (".$i."/".$sumAccessories.") : ");
		$dollmachine->addAccessories($inputAccessories);
	}
	$dollmachine->countTotal();
?>