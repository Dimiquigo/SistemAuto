<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=systemauto",
			            "root",
			            "");

		$link->exec("set names utf8");

		return $link;

	}

}