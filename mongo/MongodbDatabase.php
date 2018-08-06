<?php 
require_once './vendor/autoload.php';

 class MongodbDatabase
 {
 	
 	function __construct()
 	{
 		$this->db=(new MongoDB\Client)->videoPlaylists->videos;
 	}
 	public function insertNewItem($itemInfo = [])
 	{
 		if(empty($itemInfo)){
 			return false;
 		}

 		$insertable = $this->db->insertOne([
 			'videoTitle' => $itemInfo['videoTitle'],
 			'videoLink' => $itemInfo['videoLink'],
 			'videoID' => $itemInfo['videoID'],
 			'videoArtist' => $itemInfo['videoArtist']]);

 		return $insertable->getInsertedId();
 	}
 } ?>