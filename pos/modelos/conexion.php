<?php
class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=localhost:8889;dbname=pos",
			            "rootPos",
			            "");

		$link->exec("set names utf8");

		return $link;

	}

}