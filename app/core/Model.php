<?php 

namespace App\Core;
use PDO;

class Model {

	protected object $db;

	public function __construct() {

		try {

			$this->db = new PDO ("mysql:host=localhost;dbname=db_tiket", "root", "solo1234");
		} catch (Exception $e) {
			die ("error! " . $e->getMessage());
		}
	}
}