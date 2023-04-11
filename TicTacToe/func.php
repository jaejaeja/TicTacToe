<?php 

	function tutup($a,$b){
		global $arr_x;
		global $arr_o;
		global $arr_tabel;
		global $val_arr;

		$val_x = "as";
		$js = null;
		if (count($arr_x) != count($arr_o)) {
			
			foreach ($arr_x as $val) {
				if (in_array($val + $a, $arr_x)) {
					if (!in_array($val + $b, $arr_x)) {
						if (!in_array($val + $b, $arr_o)) {	
							if (in_array($val + $b, $arr_tabel)) {
									$val_arr = $_GET['arr']."-".$val + $b;
									$val_x = "button".$val+$b;
									echo "<script> document.getElementById('$val_x').click();</script>";

								}
						}
								
					}
				}
			}
		}
		return;
	}

	function giliran(){
		global $arr_x;
		global $arr_o;
		global $arr_tabel;
		global $val_arr;

		$val_x = "as";
		$js = null;
		if (count($arr_x) != count($arr_o)) {
			
			foreach ($arr_x as $val) {
				if (!in_array($val + 1, $arr_x)) {
					$rand_tabel = array_rand($arr_tabel);
						if (!in_array($arr_tabel[$rand_tabel], $arr_x) && !in_array($arr_tabel[$rand_tabel], $arr_o)) {

							$val_arr = $_GET['arr']."-".$rand_tabel;
							$val_x = "button".$rand_tabel;
							$val_x= "button".$arr_tabel[$rand_tabel];
							echo $val_x;
							echo "<script> document.getElementById('$val_x').click();</script>";
						}
				}
			}

		}
		return;
	}

	function serang($a,$b){
		global $arr_x;
		global $arr_o;
		global $arr_tabel;
		global $val_arr;

		$val_o = "as";
		if (count($arr_x) != count($arr_o)) {
			
			foreach ($arr_o as $val) {
				if (in_array($val + $a, $arr_o)) {
					if (!in_array($val + $b, $arr_o)) {
						if (!in_array($val + $b, $arr_x)) {	
							if (in_array($val + $b, $arr_tabel)) {
									$val_arr = $_GET['arr']."-".$val + $b;
									$val_o = "button".$val+$b;
									echo "<script> document.getElementById('$val_o').click();</script>";
								}
						}
								
					}
				}
			}
		}
		return;
	}

 ?>