<?php


class Connection {
	public static function make() {
		return new PDO("mysql:host=localhost;dbname=api", 'root', '');
	}
}