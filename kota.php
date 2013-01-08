<?php
/** 
* Daftar kota di Indonesia
* @contributor: hehe,hehe,hehe, (silakan masukkan nama agan disini)
*/
$indonesia = Array(
	'provinsi' => Array(
		'Nanggroe Aceh Darussalam' => Array('kota' => Array(
										'Banda Aceh',
										'Langsa',
										'Lhokseumawe',
										'Takengon',
										'Tapaktuan',
										'Meulaboh',
										'Sigli',
										'Kutacane',
										'Singkil',
										'Subulussalam'
									)),
		'Sumatera Utara'          => Array('kota' => Array(
										'Medan',
										'Binjai',
										'Stabat',
										'Tebing Tinggi'
							
		)),
		
		'Jawa Tengah'		=> Array('kota' => Array(
										'Banjarnegara',
										'Banyumas',
										'Batang',
										'Blora',
										'Boyolali',
										'Brebes',
										'Cilacap',
										'Demak',
										'Grobogan',
										'Jepara',
										'Karanganyar',
										'Kebumen',
										'Kendal',
										'Klaten',
										'Kudus',
										'Magelang',
										'Pati',
										'Pekalongan',
										'Pemalang',
										'Purbalingga',
										'Purworejo',
										'Rembang',
										'Semarang',
										'Sragen',
										'Sukoharjo',
										'Tegal',
										'Temanggung',
										'Wonogiri',
										'Wonosobo',
										'Kota Magelang',
										'Kota Pekalongan',
										'Kota Salatiga',
										'Kota Semarang',
										'Kota Surakarta',
										'Kota Tegal'
		))
	)
);
$output = isset($_GET['output']) ? $_GET['output'] : '';
switch($output) :
	case 'json':
		header('Content-type: text/json');
		header('Content-type: application/json');
		echo json_encode($indonesia);
	break;
	
	case 'xml':
		//xml here
	break;
	
	case 'sql':
		//sql output here
	break;
	
	case 'table':
		//table output here
	break;
	
	default :
		echo '<pre>';
		print_r($indonesia);
		echo '</pre>';
		echo '<hr>';
	break;
endswitch;
if(isset($_GET['outp'])) {
	
}

else {
	
}
?>
