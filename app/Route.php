<?php

$app->router->notFound(function () {
	header('Location: ' . site_url());
	exit;
});

$app->router->get('/', 'Client.Home@index');

$app->router->group('/plasmak-dunyasi', function ($router) {

	$router->get('/kisaca-plasmak', 'Client.PlasmakWorld@plasmakInShort');

	$router->group('/yonetim-kurulu', function ($router) {
		$router->get('/', 'Client.PlasmakWorld@boardOfDirectors');
		$router->get('/:slug', 'Client.PlasmakWorld@director');
	});

	$router->get('/plasmak-perfect', 'Client.PlasmakWorld@plasmakPerfect');

});

$app->router->group('/yetkinliklerimiz', function ($router) {

	$router->get('/uretim', 'Client.Competencies@production');
	$router->get('/ar-ge', 'Client.Competencies@arge');
	$router->get('/teknoloji', 'Client.Competencies@technology');
	$router->get('/dagitim', 'Client.Competencies@distribution');

});

$app->router->group('/urunlerimiz', function ($router) {

	$router->get('/', 'Client.Products@list');
	$router->get('/:slug', 'Client.Products@detail');

});

$app->router->group('/kurumsal', function ($router) {

	$router->group('/guncel-haberler', function ($router) {
		$router->get('/', 'Client.Corporate@recentNews');
		$router->get('/haber/:slug', 'Client.Corporate@recentNewsDetail');
	});

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

$app->router->group('/plasmakconnect', function ($router) {

	$router->get('/', function () {
		header('Location: ' . site_url('plasmakconnect/login'));
		exit;
	});

	$router->get('/login', 'Connect.Auth.Login@index');
	$router->get('/register', 'Connect.Auth.Register@index');

});

$app->router->group('/api', function ($router) {

	$router->group('/products', function ($router) {
		$router->post('/image', 'Api.Products@image');
	});

});
