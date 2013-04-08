<?php

require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();

// GET route
$app->get('/', function () {
    $template = <<<EOT
<h1>Forbidden!<h1>
EOT;
    echo $template;
});

$app->get('/deal/home/', function () {
    require_once "../includes/models/Deals.php";
    $hpDeal=new Deals();
    echo json_encode($hpDeal->getHomePageDeal());
    
});

$app->get('/products/home/', function () {
	require_once "../includes/models/DB.php";
    require_once "../includes/models/Products.php";
    $Products = new Product();
    echo json_encode($Products->getHomePageProducts(4));
    //var_dump($Products->getHomePageProducts(4));
    
});

$app->get('/search/:query', function ($query) use($app) {
			$arr = array(
				'keyword'     => $query,
				'state'       => '',
				'suburb'      => '',
				'postal_code' => '',
				'supplier'    => '0',
				'product'     => '1',
				'location_id' => '1'
				);
	require_once "../includes/models/DB.php";				
    require_once "../includes/models/Search.php";
    $objSearch = new Search();
    echo json_encode($objSearch->doSearch($arr));
    
});

$app->get('/products/:id', function ($id) use($app) {
	require_once "../includes/models/DB.php";
	require_once "../includes/models/Products.php";
	$Products = new Product();
	echo json_encode($Products->getProductsByID($id));
    
});

// POST route
$app->post('/post', function () {
    echo 'This is a POST route';
});

// PUT route
$app->put('/put', function () {
    echo 'This is a PUT route';
});

// DELETE route
$app->delete('/delete', function () {
    echo 'This is a DELETE route';
});

$app->run();
