<?php

error_reporting(0);

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
		'image' => 'images/51-fugtyI3L.jpg',
		'quaries' => ['men shoes','puma shoes', 'shoes', 'branded shoes', 'puma','casual shoe']
		 ),
	array(
		'name' => 'Puma Men\'s Limnos CAT Ind. Mesh Boat Shoes',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'men shoes',
		'image' => 'images/51wROi9qCaL._UL1500_.jpg',
		'quaries' => ['men shoes','puma shoes', 'shoes', 'branded shoes', 'puma']
		 ),
	array(
		'name' => 'Puma Men\'s Tez Hero Dp Running Shoes',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'men shoes',
		'image' => 'images/81FT2du8PHL._UL1500_.jpg',
		'quaries' => ['men shoes','puma shoes', 'shoes', 'branded shoes', 'puma']
		 ),
	array(
		'name' => 'Puma Men\'s 917 Mid 2.0 Mesh Boat Shoes',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'men shoes',
		'image' => 'images/81QrG8qHkjL._UL1500_.jpg',
		'quaries' => ['men shoes','puma shoes', 'shoes', 'branded shoes', 'puma']
		 ),
	array(
		'name' => 'UNISEX ORIGINALS KIDS VULCANIZED SHOES',
		'brands' => 'adidas',
		'price' => 'x.xx',
		'category' => 'men shoes',
		'image' => 'images/Unisex_ORIGINALS_Kids_VULCANIZED_SHOES_LOW_M20610_1.jpg',
		'quaries' => ['men shoes','adidas shoes', 'shoes', 'branded shoes', 'adidas']
		 ),
	array(
		'name' => 'UNISEX ORIGINALS KIDS VULCANIZED SHOES',
		'brands' => 'adidas',
		'price' => 'x.xx',
		'category' => 'men shoes',
		'image' => 'images/Unisex_ORIGINALS_Kids_VULCANIZED_SHOES_MID_M25257_1.jpg',
		'quaries' => ['men shoes','adidas shoes', 'shoes', 'branded shoes', 'adidas']
		 ),
	array(
		'name' => 'UNISEX ORIGINALS KIDS VULCANIZED SHOES',
		'brands' => 'adidas',
		'price' => 'x.xx',
		'category' => 'men shoes',
		'image' => 'images/Unisex_ORIGINALS_Kids_VULCANIZED_SHOES_LOW_M25261_1.jpg',
		'quaries' => ['men shoes','adidas shoes', 'shoes', 'branded shoes', 'adidas']
		 ),
	array(
		'name' => 'Red Satin Shoes',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'women shoes',
		'image' => 'images/1424-Michael-Antonio-Torio-Red-Satin-Shoes-for-Women-2.jpg',
		'quaries' => ['women shoes','puma shoes', 'shoes', 'branded shoes', 'puma']
		 ),
	array(
		'name' => 'zoom black Shoes',
		'brands' => 'adidas',
		'price' => 'x.xx',
		'category' => 'women shoes',
		'image' => 'images/9136_578_zoom.jpg',
		'quaries' => ['women shoes','adidas shoes', 'shoes', 'branded shoes', 'adidas']
		 ),
	array(
		'name' => 'luxury heels',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'women shoes',
		'image' => 'images/luxury-heels-womens-shoes-30092395-800-525.jpg',
		'quaries' => ['women shoes','puma shoes', 'shoes', 'branded shoes', 'puma']
		 ),
	array(
		'name' => 'Winter-Boots',
		'brands' => 'adidas',
		'price' => 'x.xx',
		'category' => 'women shoes',
		'image' => 'images/Winter-Boots-for-Women-2015-3.jpg',
		'quaries' => ['women shoes','adidas shoes', 'shoes', 'branded shoes', 'adidas']
		 ),
	array(
		'name' => 'fancy heels',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'women shoes',
		'image' => 'images/ZPRM172_MAIN_LG.jpg',
		'quaries' => ['women shoes','puma shoes', 'shoes', 'branded shoes', 'puma']
		 ),
	array(
		'name' => 'AFC Away Replica Shirt',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'men shirts',
		'image' => 'images/74644908.jpg',
		'quaries' => ['men shirts','puma shirts', 'shirts', 'branded shirts', 'puma']
		 ),
	array(
		'name' => 'Arsenal Medium Bag',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'bags',
		'image' => 'images/9df78eab33525d08d6e5fb8d27136e95/7/2/7288101a.jpg',
		'quaries' => ['bags']
		 ),
	array(
		'name' => 'PUMA Echo Sports Bag black',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'bags',
		'image' => 'images/9df78eab33525d08d6e5fb8d27136e95/0/7/07296001a.jpg',
		'quaries' => ['bags']
		 ),
	array(
		'name' => 'puma women Pants',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'women pants',
		'image' => 'images/31UMfwqKwAL._SL246_SX190_CR0,0,190,246_.jpg',
		'quaries' => ['women pants','puma pants', 'pants', 'branded pants', 'puma']
		 ),
	array(
		'name' => 'xxx Pants',
		'brands' => 'adidas',
		'price' => 'x.xx',
		'category' => 'women pants',
		'image' => 'images/654dccbf84509c19501d0701c0642039.jpg',
		'quaries' => ['women pants','adidas pants', 'pants', 'branded pants', 'adidas']
		 ),
	array(
		'name' => 'awesome men Pants',
		'brands' => 'adidas',
		'price' => 'x.xx',
		'category' => 'men pants',
		'image' => 'images/220934_ts.jpg',
		'quaries' => ['men pants','adidas pants', 'pants', 'branded pants', 'adidas']
		 ),
	array(
		'name' => 'faded women Pants',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'women pants',
		'image' => 'images/1244894_fpx.jpg',
		'quaries' => ['women pants','puma pants', 'pants', 'branded pants', 'puma']
		 ),
	array(
		'name' => 'faded Pants',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'men pants',
		'image' => 'images/apparel-fox-racing-casual-pants-men-denim-baseline-jean-roughed-up-rinse.jpg',
		'quaries' => ['men pants','puma pants', 'pants', 'branded pants', 'puma']
		 ),
	array(
		'name' => 'casual men Pants',
		'brands' => 'adidas',
		'price' => 'x.xx',
		'category' => 'men pants',
		'image' => 'images/carhartt-washed-twill-work-pants-for-men-in-dark-khaki-p-3657w_03-1500.3.jpg',
		'quaries' => ['men pants','adidas pants', 'pants', 'branded pants', 'adidas']
		 ),
	array(
		'name' => 'party women Shirt',
		'brands' => 'adidas',
		'price' => 'x.xx',
		'category' => 'women shirts',
		'image' => 'images/DDB3EC92.jpg',
		'quaries' => ['women shirts','adidas shirts', 'shirts', 'branded shirts', 'adidas']
		 ),
	array(
		'name' => 'formal men Shirt',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'men shirts',
		'image' => 'images/easybranches-07.jpg',
		'quaries' => ['men shirts','puma shirts', 'shirts', 'branded shirts', 'puma']
		 ),
	array(
		'name' => 'partywear Shirt',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'men shirts',
		'image' => 'images/easybranches-10.jpg',
		'quaries' => ['men shirts','puma shirts', 'shirts', 'branded shirts', 'puma']
		 ),
	array(
		'name' => 'Occassions men Shirt',
		'brands' => 'adidas',
		'price' => 'x.xx',
		'category' => 'men shirts',
		'image' => 'images/easybranches-10.jpg',
		'quaries' => ['men shirts','adidas shirts', 'shirts', 'branded shirts', 'adidas']
		 ),
	array(
		'name' => 'fetival men Shirt',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'men shirts',
		'image' => 'images/genesis-blue-men-shirt-8gsh12942.jpg',
		'quaries' => ['men shirts','puma shirts', 'shirts', 'branded shirts', 'puma']
		 ),
	array(
		'name' => 'sports men Shirt',
		'brands' => 'adidas',
		'price' => 'x.xx',
		'category' => 'men shirts',
		'image' => 'images/i_0___selected.jpg',
		'quaries' => ['men shirts','adidas shirts', 'shirts', 'branded shirts', 'adidas']
		 ),
	array(
		'name' => 'sports women Shirt',
		'brands' => 'adidas',
		'price' => 'x.xx',
		'category' => 'women shirts',
		'image' => 'images/LS6.jpg',
		'quaries' => ['women shirts','adidas shirts', 'shirts', 'branded shirts', 'adidas']
		),
	array(
		'name' => 'track men Pants',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'men pants',
		'image' => 'images/m-4-agent.jpg',
		'quaries' => ['men pants','puma pants', 'pants', 'branded pants', 'puma']
		),
	array(
		'name' => 'stripped men Pants',
		'brands' => 'adidas',
		'price' => 'x.xx',
		'category' => 'men pants',
		'image' => 'images/men_s-solid-black-pants.jpg',
		'quaries' => ['men pants','adidas pants', 'pants', 'branded pants', 'adidas']
		),
	array(
		'name' => 'puma men Shirt',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'men shirts',
		'image' => 'images/Men-s-Shirt.jpg',
		'quaries' => ['men shirts','puma shirts', 'shirts', 'branded shirts', 'puma']
		),
	array(
		'name' => 'royal blue Shirt',
		'brands' => 'adidas',
		'price' => 'x.xx',
		'category' => 'men shirts',
		'image' => 'images/pepe-royal-blue-checkered-men-shirt.jpg',
		'quaries' => ['men shirts','adidas shirts', 'shirts', 'branded shirts', 'adidas']
		),
	array(
		'name' => 'men-s-Shirt',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'men shirts',
		'image' => 'images/pKCP-4704956v275.jpg',
		'quaries' => ['men pants','puma shirts', 'pants', 'branded pants', 'puma']
		),
	array(
		'name' => 'sherpa samaya shirt',
		'brands' => 'adidas',
		'price' => 'x.xx',
		'category' => 'women shirts',
		'image' => 'images/sherpa-samaya-shirt-aru-women.jpg',
		'quaries' => ['women shirts','adidas shirts', 'shirts', 'branded shirts', 'adidas']
		),
	array(
		'name' => 'Valle Maggia Grey Womens Shirt For Work',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'women shirts',
		'image' => 'images/Valle-Maggia-Grey-Womens-Shirt-For-Work.jpg',
		'quaries' => ['women shirts','puma shirts', 'shirts', 'branded shirts', 'puma']
		),
	array(
		'name' => 'Grey Work Pants',
		'brands' => 'adidas',
		'price' => 'x.xx',
		'category' => 'women pants',
		'image' => 'images/women_cloths-1371557745-66-Grey-Work-Pants.jpg',
		'quaries' => ['women pants','adidas pants', 'pants', 'branded pants', 'adidas']
		),
	array(
		'name' => 'skinny khakis classic navy',
		'brands' => 'puma',
		'price' => 'x.xx',
		'category' => 'women pants',
		'image' => 'images/womens-the-diva-skinny-khakis-classic-navy.jpg',
		'quaries' => ['women pants','puma pants', 'pants', 'branded pants', 'puma']
		)
	];

if(isset($_GET['q'])){
	$val = strtolower ($_GET['q']);
	foreach ($products as $key => $value) {
       if ( strpos(strtolower ($value['name']) , $val) !== false || strpos(strtolower ($value['brands']) , $val) !== false || strpos(strtolower ($value['category']) , $val) !== false) {
           //$resArray['data']['products'][] = $products[$key];
       	   $resArray['data']['products'][$products[$key]['category']][] = $products[$key];
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