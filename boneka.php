<?php 
$jenisboneka = array('Beruang' =>900,'elang'=>900,'harimau'=>900,'naga'=>900,'singa'=>900 );

$aksesoris =  array('topi' =>30 ,'tongkat'=>20,'pedang'=>50, 'perisa' =>40, 'cincin sakti'=>120, 'sayap malaikat'=>100);

foreach ($jenisboneka as $x => $x_value) {
	echo 'jenis boneka' .$x . ',harga=' . $x_value;
	echo '<br>';
}
?>