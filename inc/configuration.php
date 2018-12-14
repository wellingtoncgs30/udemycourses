<?php
session_start();

//início do código PHP
	class Sql{ /*chama a classe SQL do PHP para criar uma conexão do banco de dados*/

		public $conn;

		public function __construct/*função que executa uma ação de forma automática*/(){

			return $this->conn = mysqli_connect("127.0.0.1", "root", "", "hcode_shop");

		}

		public function query($string_query)/*função que executa consultas no banco de dados*/{

			return mysqli_query($this->conn, $string_query);

		}

		public function select($string_query){

			$result = $this->query($string_query);
			
			$data = array();

			while ($row = mysqli_fetch_array($result)) {

				foreach($row as $key => $value) {
					$row[$key] = utf8_encode($value);
				}

				array_push($data, $row);

			}

			unset($result);

			return $data;
		}

		public function __destruct(){

			mysqli_close($this->conn);

		}
	}
?>
