<?php


$resArray['status'] = "ok";
$resArray['data'] = array('quaries'=>'');

function my_sort($a,$b)
{
if ($a==$b) return 0;
return ($a>$b)?-1:1;
}

$products = [
	array(
		'name' => 'Puma Men\'s Storm 3.5 Mesh Running Shoes',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'men shoes',
		'image' => 'images/1.jpg',
		'quaries' => ['men shoes','puma shoes', 'shoes', 'branded shoes', 'puma','casual shoe']
		 ),
	array(
		'name' => 'Puma Men\'s Limnos CAT Ind. Mesh Boat Shoes',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'men shoes',
		'image' => 'images/3.jpg',
		'quaries' => ['men shoes','puma shoes', 'shoes', 'branded shoes', 'puma']
		 ),
	array(
		'name' => 'Puma Men\'s Tez Hero Dp Running Shoes',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'men shoes',
		'image' => 'images/4.jpg',
		'quaries' => ['men shoes','puma shoes', 'shoes', 'branded shoes', 'puma']
		 ),
	array(
		'name' => 'Puma Men\'s 917 Mid 2.0 Mesh Boat Shoes',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'men shoes',
		'image' => 'images/5.jpg',
		'quaries' => ['men shoes','puma shoes', 'shoes', 'branded shoes', 'puma']
		 ),
	array(
		'name' => 'UNISEX ORIGINALS KIDS VULCANIZED SHOES',
		'brands' => 'addidas',
		'price' => 'x.xx',
		'category' => 'men shoes',
		'image' => 'images/6.jpg',
		'quaries' => ['men shoes','addidas shoes', 'shoes', 'branded shoes', 'addidas']
		 ),
	array(
		'name' => 'UNISEX ORIGINALS KIDS VULCANIZED SHOES',
		'brands' => 'addidas',
		'price' => 'x.xx',
		'category' => 'men shoes',
		'image' => 'images/7.jpg',
		'quaries' => ['men shoes','addidas shoes', 'shoes', 'branded shoes', 'addidas']
		 ),
	array(
		'name' => 'UNISEX ORIGINALS KIDS VULCANIZED SHOES',
		'brands' => 'addidas',
		'price' => 'x.xx',
		'category' => 'men shoes',
		'image' => 'images/8.jpg',
		'quaries' => ['men shoes','addidas shoes', 'shoes', 'branded shoes', 'addidas']
		 ),
	array(
		'name' => 'AFC Away Replica Shirt',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'men shirts',
		'image' => 'images/9.jpg',
		'quaries' => ['men shirts','puma shirts', 'shirts', 'branded shirts', 'puma']
		 ),
	array(
		'name' => 'AFC T7 Anthem Jacket with Spon',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'men shirts',
		'image' => 'images/10.jpg',
		'quaries' => ['men shirts','puma shirts', 'shirts', 'branded shirts', 'puma']
		 ),
	array(
		'name' => 'Arsenal Medium Bag',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'bags',
		'image' => 'images/11.jpg',
		'quaries' => ['bags']
		 ),
	array(
		'name' => 'PUMA Echo Sports Bag black',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'bags',
		'image' => 'images/12.jpg',
		'quaries' => ['bags']
		 )
];

if(isset($_GET['q'])){
	$val = strtolower ($_GET['q']);
	foreach ($products as $key => $value) {
       if ( strpos(strtolower ($value['name']) , $val) !== false || strpos(strtolower ($value['brands']) , $val) !== false || strpos(strtolower ($value['category']) , $val) !== false) {
           $resArray['data']['products'][] = $products[$key];
           $resArray['data']['categories'][] = $products[$key]['category'];
           //$resArray['data']['news'][] = $products[$key]['news'];
           $resArray['data']['brands'][] = $products[$key]['brands'];
           $resArray['data']['quaries'] .= implode(",", $products[$key]['quaries']).',';
       }
   }
   
       $resArray['data']['categories'] = array_unique($resArray['data']['categories']);
       $resArray['data']['brands'] = array_unique($resArray['data']['brands']);
       $resArray['data']['quaries'] = array_diff(array_unique(explode(',',$resArray['data']['quaries'])), $resArray['data']['categories']);
       array_pop($resArray['data']['quaries']);
       //uasort($resArray['data']['quaries'],"my_sort");
}

header('Content-Type: application/json');
echo json_encode($resArray)	

?>