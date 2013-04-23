<?php
$m = new Mongo();
$c = $m->selectDB("test")->selectCollection("ceny");
// �rednia cena wszystkich produkt�w w ka�dym roku. Liczone od 2003 roku, poniewa� we wcze�niejszych latach jest du�o mniej towar�w.
$ops = array(
	array(
		'$match' => array(
			"rok" => array('$gte' => 2003),
		)
	),
	array(
		'$group' => array(
			"_id" => '$rok',
			"srednia_cena" => array('$avg' => '$cena'),
		)
	),
	array(
		'$project' => array(
			"_id" => 0,
			"rok" => '$_id',
			"srednia_cena" => 1,
		)
	),
	array(
		'$sort' => array(
			"rok" => 1
		)
	)
));
$results = $c->aggregate($ops);
var_dump($results);

//----------------------------------------------------

$c = $m->selectDB("test")->selectCollection("census1881");
// 5 religii, kt�rzych �rednia liczba wyznawc�w jest najwy�sza.
$ops = array(
	array(
		'$group' => array(
			"_id" => '$religion',
			"sredni_wiek" => array('$avg' => '$age'),
		)
	),
	array(
		'$sort' => array(
			"sredni_wiek" => -1
		)
	),
	array(
		'$project' => array(
			"_id" => 0,
			"religia" => '$_id',
			"sredni_wiek" => 1,
		)
	),
	array(
		'$limit' => 5
		)
	)
));
$results = $c->aggregate($ops);
var_dump($results);

//----------------------------------------------------

$c = $m->selectDB("test")->selectCollection("car_market");
// Lista 5 najdro�szych aut, kt�re zmieszcz� si� w moim ma�ym gara�u.
$ops = array(
	array(
		'$match' => array(
			"height" => array('$lte' => 85),
			"length" => array('$lte' => 165),
			"width" => array('$lte' => 75),
		)
	),
	array(
		'$project' => array(
			"_id" => 0,
			"make" => 1,
			"model" => 1,
			"price" => 1,
			"length" => 1,
			"width" => 1,
			"height" => 1,
		)
	),
	array(
		'$sort' => array(
			"price" => -1
		)
	),
	array(
		'$limit' => 5
		)
	)
));
$results = $c->aggregate($ops);
var_dump($results);
?>