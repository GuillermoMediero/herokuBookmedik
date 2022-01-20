<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b2d6bd22f3985c";$this->pass="3e4cf249";$this->host="u-cdbr-west-02.cleardb.net";$this->ddbb="heroku_e3da7515fb0a2dd";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
