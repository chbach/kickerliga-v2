<?php

class KLSeason {

	private $resourceUrl = "https://anmeldung.kickerliga-paderborn.de";
	// private $resourceUrl = "http://localhost:3000";

	private $seasonId = "";

	function __construct($seasonId) {
		$this->seasonId = $seasonId;
	}

	function getTable() {
		$url = $this->resourceUrl."/seasons/" . $this->seasonId . "/table.json";
		$jsonString = file_get_contents($url);
		$jsonObjects = json_decode($jsonString);

		return $jsonObjects;
	}

	function getMatches() {
		$jsonString = file_get_contents($this->resourceUrl."/seasons/" . $this->seasonId . "/matches.json");
		$jsonObjects = json_decode($jsonString);

		return $jsonObjects;
	}
}
?>
