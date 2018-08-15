<?php
require_once './vendor/autoload.php';

class MongodbDatabase
 {
 	
 	function __construct()
 	{
 		$client  = new MongoDB\Client();
 	if($client){
   echo "Database mydb selected";
}

	/*CREATE DATABASE*/


	$db = $client->RELEARN;


/*	$result = $collection->createCollection('qwerty');
	var_dump($result);*/


	/*	DISPLAY COLLECTION */

	/*foreach ($collection->listCollections() as $collection) {
		var_dump($collection);
	}*/


	/*CREATE COLLECTION*/

	$collection = $db->users;

	/*🅸🅽🆂🅴🆁🆃 🆂🅸🅽🅶🅻🅴 🅳🅰🆃🅰*/

/*	$insertOneResult = $collection->insertOne(['name'=>'sarthak',
												'age'=>'20',
												'city'=>'bareilly']);
	var_dump($insertOneResult->getInsertedId());*/

	/*🅸🅽🆂🅴🆁🆃 🅼🆄🅻🆃🅸🅿🅻🅴 🅳🅰🆃🅰*/

/*	$insertManyResult = $collection->insertMany([['name'=>'sarthak',
												'age'=>'20',
												'city'=>'bareilly'],
												['name'=>'uday',
												'age'=>'20',
												'city'=>'Roorkee'],
												['name'=>'aakash',
												'age'=>'20',
												'city'=>'bareilly']]);
	var_dump($insertManyResult->getInsertedIds());*/

	/*🆀🆄🅴🆁🆈 🅳🅾🅲🆄🅼🅴🅽🆃🆂 🆂🅸🅽🅶🅻🅴*/

/*	$document = $collection->findOne(['name'=>'uday']);
	var_dump($document);*/


	/*🆀🆄🅴🆁🆈 🅳🅾🅲🆄🅼🅴🅽🆃🆂 🅼🆄🅻🆃🅸🅿🅻🅴*/

/*	$document = $collection->find(['city'=>'bareilly']);
	foreach($document as $doc){
		var_dump($doc);
	}*/


	/*🅿🆁🅾🅹🅴🅲🆃🅸🅾🅽*/
/*
	$document = $collection->find(['city'=>'bareilly'],['projection'=>['_id'=>0,'name'=>1]]);
	foreach($document as $doc){
		var_dump($doc);
	}
*/

	/*🆄🅿🅳🅰🆃🅴 🅼🅰🅽🆈 🅳🅾🅲🆄🅼🅴🅽🆃*/
/*	$document = $collection->updateMany(['name'=>'sarthak'],['$set'=>['city'=>'ghaziabad']]);
	$render = $collection->find(['city'=>'ghaziabad']);
	foreach($render as $doc){
		var_dump($doc);
	}*/

/*	🆄🅿🅳🅰🆃🅴 🆂🅸🅽🅶🅻🅴 🅳🅾🅲🆄🅼🅴🅽🆃 */
	/*$document = $collection->updateOne(['name'=>'uday'],['$set'=>['city'=>'bareilly']]);
	$render = $collection->find(['city'=>'bareilly']);
	foreach($render as $doc){
		var_dump($doc);
	}*/


	/*🅻🅸🅼🅸🆃 🆂🅺🅸🅿 🆂🅾🆁🆃*/

/*	$document = $collection->find([],['limit'=>2,'skip'=>2,'sort'=>['city'=>-1]]);
	foreach($document as $doc){
		var_dump($doc);
	}*/


	/*🅳🅴🅻🅴🆃🅴 🆂🅸🅽🅶🅻🅴 🅳🅾🅲🆄🅼🅴🅽🆃*/

	/*$deleteResult = $collection->deleteOne(['city'=>'ghaziabad']);
	printf('Deleted Document %d',$deleteResult->getDeletedCount());*/


	/*🅳🅴🅻🅴🆃🅴 🅼🆄🅻🆃🅸🅿🅻🅴 🅳🅾🅲🆄🅼🅴🅽🆃*/
/*	$deleteResult = $collection->deleteMany(['city'=>'ghaziabad']);
	printf('Deleted Document %d',$deleteResult->getDeletedCount());*/
// .
}
}
?>