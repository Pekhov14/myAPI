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

	public function select_one($table, $column, $value) {
		$sql = "SELECT $column FROM $table WHERE $column = :value";
		$statement = $this->db->prepare($sql);
		$statement->bindParam(':value', $value);
		$statement->execute();
		return $result = $statement->fetch(PDO::FETCH_ASSOC);
	}

	public function select($table) {
		$sql = "SELECT * FROM $table";
		$statement = $this->db->prepare($sql);
		$statement->execute();
		return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
	}

	public function select_join() {
		$sql = "SELECT f.id AS id, f.name AS name, r.rate AS rating
					FROM films AS f
				        INNER JOIN rating AS r
				        	ON f.id = r.id_film"
		;

		$statement = $this->db->prepare($sql);
		$statement->execute();
		return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
	}

	public function insert($table, $name, $pass, $token) {
		$data = [
			'name'  => $name,
			'pass'  => $pass,
			'token' => $token,
		];

//		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO $table (name, pass, token) VALUES (:name, :pass, :token)";
		$statement = $this->db->prepare($sql);
		return $result = $statement->execute($data);
	}
}