<?php

include "config.php";
include "helper.php";

class core
{
	public $db;
	private $query;

	/**
		constructor
	**/
	public function __construct()
	{
		try {
			$db = new PDO('mysql:host=localhost;dbname=toko_baju', 'root', '');
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

			$this->db = $db;
		} catch (PDOException $e) {
			echo "\nfailed to connect to database!!".PHP_EOL;
			echo $e->getMessage(); die();
		}
	}

	/**
		get db connection
	**/
	public function db(){
		return $this->db;
	}

	/**
		get data produk from database
	**/
	public function get_produk($limit = null, $offset = 0)
	{
		$sql = "select * from produk";

		if ($limit !== null && $offset === 0)
			$sql .= " limit ". $limit;
		elseif ($limit !== null && $offset !== 0)
			$sql .= "limit ". $offset. ', '. $limit;

		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll();
	}

	/**
		get data produk from datababse with parameter
	**/
	public function get_produk_where($field, $val, $limit = null, $offset = 0)
	{
		$sql = "select * from produk where ". $field ." = :value ";

		if ($limit !== null && $offset === 0)
			$sql .= "limit ". $limit;
		elseif ($limit !== null && $offset !== 0)
			$sql .= "limit ". $offset. ', '. $limit;

		$stmt = $this->db->prepare($sql);
		$stmt->bindValue(':value', $val);
		$stmt->execute();

		return $stmt->fetchAll();
	}

	/**
		insert data to database
		$data is associative array with keys as field
	**/
	public function insert($to, $data) {
		$fields = array_keys($data);
		$sql 		= "insert into ".$to."(".implode(', ',$fields).") values(";

		$this->append_query($sql);

		$c = 1;
		foreach($fields as $f) {
			$this->append_query(":". $f);

			if ($c != count($fields))
				$this->append_query(", ");

			$c++;
		}

		$this->append_query(")");

		try{
			$stmt = $this->db->prepare($this->query);
			foreach($fields as $f){
				$stmt->bindValue(':'.$f, $data[$f]);
			}
			$stmt->execute();
		} catch(PDOException $e){
			return false;
		}

		$this->reset_query();
		return $stmt;
	}

	/**
		update data
		$where is assosiative array
		$data is assosiative array
	**/
	public function update($to, $where, $data)
	{
		$fields = array_keys($data);
		$this->append_query("update ". $to ." set ");

		$c = 1;
		foreach($fields as $f) {
			$this->append_query($f ." = :". $f);

			if ($c != count($fields)) {
				$this->append_query(', ');
			}
			$c++;
		}

		$this->append_query(" where ");

		$c = 1;
		foreach($where as $k => $v) {
			$this->append_query($k ." = :". $k);

			if ($c != count($fields)) {
				$this->append_query(', ');
			}
			$c++;
		}

		try{
			$stmt = $this->db->prepare($this->query);

			foreach($where as $k => $v){
				$stmt->bindValue(':'.$k, $v);
			}

			foreach($fields as $f){
				$stmt->bindValue(':'.$f, $data[$f]);
			}

			$stmt->execute();
		} catch(PDOException $e){
			echo $e->getMessage();
			return false;
		}

		$this->reset_query();
		return $stmt;
	}

	private function append_query($sql)
	{
		$this->query .= $sql;
	}

	private function reset_query() {
		$this->query = '';
	}

	public function __destruct()
	{
		$this->db = null;
	}
}
