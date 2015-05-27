<?php


$resArray['status'] = "ok";
$resArray['data'] = array();

$products = [
	array(
		'name' => 'Puma men shoe',
		'value' => '',
		'brands' => 'puma',
		'price' => '',
		'category' => '',
		'image' => '',
		'news' => ''
		 ),
	array(
		'name' => 'addidas men shoe',
		'value' => '',
		'brands' => 'addidas',
		'price' => '',
		'category' => '',
		'image' => '',
		'news' => ''
		 ),
	array(
		'name' => 'puma men shirt',
		'value' => '',
		'brands' => 'puma',
		'price' => '',
		'category' => '',
		'image' => '',
		'news' => ''
		 )
];

if(isset($_GET['q'])){
	$val = strtolower ($_GET['q']);
	foreach ($products as $key => $value) {
       if ( strpos(strtolower ($value['name']) , $val) !== false || strpos(strtolower ($value['brands']) , $val) !== false || strpos(strtolower ($value['category']) , $val) !== false || strpos(strtolower ($value['news']) , $val)) {
           $resArray['data']['products'][] = $products[$key];
           $resArray['data']['categories'][] = $products[$key]['category'];
           $resArray['data']['news'][] = $products[$key]['news'];
           $resArray['data']['brands'][] = $products[$key]['brands'];
       }
   }
}

header('Content-Type: application/json');
echo json_encode($resArray)	

?>