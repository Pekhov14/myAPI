<?php

class Connection {
	public static function make() {
		return new PDO("mysql:host=localhost;dbname=api", 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
	}
}