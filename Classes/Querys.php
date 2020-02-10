<?php


class Querys {
	private $db;

	public function __construct(PDO $pdo) {
		$this->db = $pdo;
	}

	public function	input_and_selection($table, $login_name, $login_pass) {
		$sql = "SELECT * FROM $table WHERE name = :login_name";
		$statement = $this->db->prepare($sql);
		$statement->bindParam(':login_name', $login_name);
		$statement->execute();
		$result = $statement->fetch(PDO::FETCH_ASSOC);

		if (password_verify($login_pass, $result['pass'])) {
			$_SESSION['token'] = $result['token'];
			$_SESSION['user_name'] = $login_name;
			return $result;
		} else {
			return 'Пароль неправильный.';
		}
	}

//	public function select_one($table, $value, $column, $name) {
//		$sql = "SELECT $column FROM $table WHERE name = :login_name";
//		$statement = $this->db->prepare($sql);
//		$statement->bindParam(':login_name', $login_name);
//		$statement->execute();
//		$result = $statement->fetch(PDO::FETCH_ASSOC);
//	}


	public function insert($table, $name, $pass, $token) {
		$data = [
			'name' => $name,
			'pass' => $pass,
			'token' => $token,
		];

//		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO $table (name, pass, token) VALUES (:name, :pass, :token)";
		$statement = $this->db->prepare($sql);
		return $result = $statement->execute($data);
	}
}