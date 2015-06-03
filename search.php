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
		'image' => 'http://ecx.images-amazon.com/images/I/51-fugtyI3L.jpg',
		'quaries' => ['men shoes','puma shoes', 'shoes', 'branded shoes', 'puma','casual shoe']
		 ),
	array(
		'name' => 'Puma Men\'s Limnos CAT Ind. Mesh Boat Shoes',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'men shoes',
		'image' => 'http://ecx.images-amazon.com/images/I/51wROi9qCaL._UL1500_.jpg',
		'quaries' => ['men shoes','puma shoes', 'shoes', 'branded shoes', 'puma']
		 ),
	array(
		'name' => 'Puma Men\'s Tez Hero Dp Running Shoes',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'men shoes',
		'image' => 'http://ecx.images-amazon.com/images/I/81FT2du8PHL._UL1500_.jpg',
		'quaries' => ['men shoes','puma shoes', 'shoes', 'branded shoes', 'puma']
		 ),
	array(
		'name' => 'Puma Men\'s 917 Mid 2.0 Mesh Boat Shoes',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'men shoes',
		'image' => 'http://ecx.images-amazon.com/images/I/81QrG8qHkjL._UL1500_.jpg',
		'quaries' => ['men shoes','puma shoes', 'shoes', 'branded shoes', 'puma']
		 ),
	array(
		'name' => 'UNISEX ORIGINALS KIDS VULCANIZED SHOES',
		'brands' => 'addidas',
		'price' => 'x.xx',
		'category' => 'men shoes',
		'image' => 'https://content.adidas.co.in/static/Product-M20610/Unisex_ORIGINALS_Kids_VULCANIZED_SHOES_LOW_M20610_1.jpg.zoom',
		'quaries' => ['men shoes','addidas shoes', 'shoes', 'branded shoes', 'addidas']
		 ),
	array(
		'name' => 'UNISEX ORIGINALS KIDS VULCANIZED SHOES',
		'brands' => 'addidas',
		'price' => 'x.xx',
		'category' => 'men shoes',
		'image' => 'https://content.adidas.co.in/static/Product-M25257/Unisex_ORIGINALS_Kids_VULCANIZED_SHOES_MID_M25257_1.jpg.zoom',
		'quaries' => ['men shoes','addidas shoes', 'shoes', 'branded shoes', 'addidas']
		 ),
	array(
		'name' => 'UNISEX ORIGINALS KIDS VULCANIZED SHOES',
		'brands' => 'addidas',
		'price' => 'x.xx',
		'category' => 'men shoes',
		'image' => 'https://content.adidas.co.in/static/Product-M25261/Unisex_ORIGINALS_Kids_VULCANIZED_SHOES_LOW_M25261_1.jpg.zoom',
		'quaries' => ['men shoes','addidas shoes', 'shoes', 'branded shoes', 'addidas']
		 ),
	array(
		'name' => 'AFC Away Replica Shirt',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'men shirts',
		'image' => 'http://in.puma.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/7/4/74644908.jpg',
		'quaries' => ['men shirts','puma shirts', 'shirts', 'branded shirts', 'puma']
		 ),
	array(
		'name' => 'AFC T7 Anthem Jacket with Spon',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'men shirts',
		'image' => 'http://in.puma.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/7/4/74658101.jpg',
		'quaries' => ['men shirts','puma shirts', 'shirts', 'branded shirts', 'puma']
		 ),
	array(
		'name' => 'Arsenal Medium Bag',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'bags',
		'image' => 'http://in.puma.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/7/2/7288101a.jpg',
		'quaries' => ['bags']
		 ),
	array(
		'name' => 'PUMA Echo Sports Bag black',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'bags',
		'image' => 'http://in.puma.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/0/7/07296001a.jpg',
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