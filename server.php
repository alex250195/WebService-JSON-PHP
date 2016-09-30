<?php
	init();

	function init(){
		$flag = $_GET['flag'];

		switch ($flag) {
			case '1':
				teste1();
				break;
			case '2':
				teste2();
				break;
		}
	}

	function teste1(){
		$array = "Davi Salles Amaral:40:M";
		print(json_encode($array));
	}

	function teste2(){
		$array = "Alex Alves Silva:21:M";
		print(json_encode($array));
	}
?>