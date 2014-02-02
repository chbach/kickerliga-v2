<?php

class KLSeason {

	private $resourceUrl = "http://tabelle.kickerliga-paderborn.de/";

	function getTable() {
		$jsonString = file_get_contents($this->resourceUrl."?format=json");
		$jsonObjects = json_decode($jsonString);

		return $jsonObjects;
	}

	function getMatches() {
		$jsonString = file_get_contents($this->resourceUrl."?do=matches&format=json");
		$jsonObjects = json_decode($jsonString);

		return $jsonObjects;
	}
}
?>
