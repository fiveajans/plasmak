<?php

$app->router->notFound(function () {
	header('Location: ' . site_url());
	exit;
});

$app->router->get('/', 'Client.Home@index');

$app->router->get('/plasmakconnect', 'Connect.Login@index');

$app->router->group('/plasmak-dunyasi', function ($router) {

	$router->get('/kisaca-plasmak', 'Client.PlasmakWorld@plasmakInShort');

});

$app->router->group('/admin', function ($router) {

	$router->get('/', function () {
		header('Location: ' . site_url('admin/dashboard'));
		exit;
	});

	$router->any('/login', 'Admin.Auth.Login@index');
	$router->any('/logout', 'Admin.Auth.Logout@index');

	//$router->get('/dashboard', 'Admin.Dashboard@index');

	$router->get('/dashboard', function() {
		header('Location: ' . site_url('admin/products/approved'));
		exit;
	});

	$router->group('/products', function ($router) {

		$router->get('/', function () {
			header('Location: ' . site_url('admin/products/approved'));
			exit;
		});

		$router->get('/approved', 'Admin.Products@approved');
		$router->get('/unapproved', 'Admin.Products@unapproved');
		$router->any('/create', 'Admin.Products@create');
		$router->any('/update/:id', 'Admin.Products@update');

		$router->get('/delete/:id', 'Admin.Products@delete');
		$router->get('/restore/:id', 'Admin.Products@restore');

	});

}, ['before' => 'UserCheckAuth']);

$app->router->group('/api', function ($router) {

	$router->group('/messages', function ($router) {
		$router->post('/send', 'Api.Messages@send');
	});

	$router->group('/products', function ($router) {
		$router->post('/image', 'Api.Products@image');
	});

});
