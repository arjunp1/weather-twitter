<?php 
	
	class placesny	{
		private $id;
		private $name;
		private $address;
		private $info;
		private $clickme;
		private $wplink;
		private $lat;
		private $lng;
		private $conn;
		private $tableName = "placesny";

		function setId($id) { $this->id = $id; }
		function getId() { return $this->id; }
		function setName($name) { $this->name = $name; }
		function getName() { return $this->name; }
		function setAddress($address) { $this->address = $address; }
		function getAddress() { return $this->address; }
		function setInfo($info) { $this->info = $info; }
        function getInfo() { return $this->info; }
		function setClickme($clickme) { $this->clickme = $clickme; }
        function getClickme() { return $this->clickme; }
        function setWplink($wplink) { $this->wplink = $wplink; }
        function getWplink() { return $this->wplink; }
		function setLat($lat) { $this->lat = $lat; }
		function getLat() { return $this->lat; }
		function setLng($lng) { $this->lng = $lng; }
		function getLng() { return $this->lng; }

		public function __construct() {
			require_once('db/DbConnect.php');
			$conn = new DbConnect;
			$this->conn = $conn->connect();
		}

		public function getPOIBlankLatLng() {
			$sql = "SELECT * FROM $this->tableName WHERE lat IS NULL AND lng IS NULL";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getAllPOI() {
			$sql = "SELECT * FROM $this->tableName";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

	}

?>