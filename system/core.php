<?php

include "config.php";
include "helper.php";

class core
{
	private $db;

	public function __construct()
	{
		try {
			$db = new PDO('mysql:host=localhost;dbname=toko_baju', 'root', '');
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

			$this->db = $db;
		} catch (PDOException $e) {
			echo "\nfailed to connect to database!!\n";
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
		$sql		= "insert into ".$to."(".implode(', ',$fields).") values(";

		$c = 1;
		foreach($fields as $f) {
			$sql .= ":".$f;
			if ($c != count($fields)) {
				$sql .=", ";
			}
			$c++;
		}

		$sql .= ");";

		try{
			$stmt = $this->db->prepare($sql);
			foreach($fields as $f){
				$stmt->bindValue(':'.$f, $data[$f]);
			}
			$stmt->execute();
		} catch(PDOException $e){
			return false;
		}

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
		$sql		= "update ".$to." set ";

		$c = 1;
		foreach($fields as $f) {
			$sql .= ":".$f;
			if ($c != count($fields)) {
				$sql .=" = :" .$f. ", ";
			}
			$c++;
		}

		$sql .= "where "

		try{
			$stmt = $this->db->prepare($sql);
			foreach($fields as $f){
				$stmt->bindValue(':'.$f, $data[$f]);
			}
			$stmt->execute();
		} catch(PDOException $e){
			return false;
		}

		return $stmt;
	}

	public function __destruct()
	{
		$this->db = null;
	}
}
