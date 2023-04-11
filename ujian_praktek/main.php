<?php 

require 'func.php';
$js=2;

if (!isset($_GET['jum_tabel']) || isset($_GET['jum_tabel']) && $_GET['jum_tabel'] == null) {
	$jum_tab = 3;
	$place_holder = "jumlah tabel (angka)";
}else if($_GET['jum_tabel'] < 3){
	echo "<script>alert('Tabel nya kurang bos')</script>";
	$jum_tab = 3;
	$place_holder = "jumlah tabel (angka)";

}else if($_GET['jum_tabel'] > 9) {
	echo "<script>alert('Tabel nya belebih bos')</script>";
	$jum_tab = 3;
	$place_holder = "jumlah tabel (angka)";
}else{
	$jum_tab = $_GET['jum_tabel'];
	$place_holder = $_GET['jum_tabel']." X ".$_GET['jum_tabel'];
}

if (isset($_GET['arr'])) {
	$get_arr = $_GET['arr'];
}else{
	$get_arr=null;
}

$arr_x = [];
$arr_o = [];

if (isset($_GET['r-c'])) {
		$exp_arr = explode("-", $_GET['arr']);
		for ($i=0; $i <= count($exp_arr)-1 ; $i = $i+2) { 
			$arr_x[] = $exp_arr[$i];
		}

		for ($i=1; $i <= count($exp_arr)-1 ; $i = $i+2) { 
			$arr_o[] = $exp_arr[$i];
		}
	
	echo "arr_x  : ";
	print_r($arr_x);
	echo "<br>";
	echo "arr_o  : ";
	print_r($arr_o);
	echo "<br><br>";
}
if ($arr_x > $arr_o) {
	$pemain = "o";
	echo "arr-x > arr-o";
}else{
	$pemain = "x";
	echo "arr-x = arr-o";
}
echo "<br>";
echo "pemain : ".$pemain;
echo "<br><br>";


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Uprak</title>

	<style type="text/css">
		
		table{
			border-spacing: 0;
			margin: auto;
		}
		td{
			border: 1px solid black;
			width: 50px;
			height: 20px;
			padding: 0;
			margin-bottom: 0px;
		}
		.tbl_btn{
			width: 120px;
			height: 120px;
			margin-bottom: 0;
			background-color: white;
			font-size: 100px;
			color: darkgreen;
		}
		.btn_reset{
			width: 100px;
			height: 50px;
			border-radius: 10px;
			font-size: 20px;
			margin: auto;
			display: block;
			margin-right: 200px;
			background-color: yellow;

		}
		form{
			margin-bottom: 0;
		}

	</style>
</head>
<body>

	<!-- form jumlah tabel -->

	<form method="get">
		
		<input type="number" name="jum_tabel" value="$jum_tabel" placeholder="<?=$place_holder?>">
		<input type="submit" name="sub_jum_tabel" value="submit">
		

	</form>

	<form method="get">
		<input type="hidden" name="jum_tabel" value="<?=$jum_tab ?>" placeholder="<?=$place_holder?>">
		<button class="btn_reset" type="submit" name="reset" value="reset">reset</button>

	</form>

	<table>
		
		<?php for ($r=1; $r <= $jum_tab; $r++) { ?>
				
			<tr>
				<?php for ($c=1; $c <= $jum_tab ; $c++) {?>
					<td>
						
						<form action="" method="get">
							<!-- <input type="hidden" name="diklik_pemain" value=""> -->
							<?php 

								if(in_array($r.$c, $arr_x)){
									$diklik = "x";
								}else if (in_array($r.$c,$arr_o)) {
									$diklik = "o";
								}else{
									$diklik = null;
								}


								// CEK ARR
								if (isset($exp_arr)) {
									if (in_array($r.$c, $exp_arr)) {
									$val_arr = $get_arr;
									}else{
									$val_arr = $get_arr."-".$r.$c;
									}		
								}else{
									$val_arr = $r.$c;
								}
								
								
								
							 ?>

							<input type="hidden" name="jum_tabel" value="<?=$jum_tab ?>">


							<button class="tbl_btn" id="<?="button".$r.$c ?>" type="submit" name="r-c" value="<?=$val_arr?>"><?= $diklik ?></button>


							
							
							<input type="hidden" name="arr" value="<?= $val_arr?>">
							<input type="hidden" name="pemain" value="<?=$pemain ?>">
							<?php 
								$arr_tabel[] = $r.$c;

								
								
								

								

							 ?>
						</form>

					</td>

				<?php 
					
					
					

				} ?>
			</tr>


		<?php } ?>
		


	</table>

	<?php 



	serang(1,2);
	serang(2,1);
	serang(-1,-2);
	serang(10,20);
	serang(20,10);
	serang(-10,-20);
	serang(11,22);
	serang(22,11);
	serang(-11,-22);
	serang(9,18);
	serang(18,9);
	serang(-9,-18);
	

								
	tutup(1,2);
	tutup(2,1);
	tutup(-1,-2);
	tutup(10,20);
	tutup(20,10);
	tutup(-10,-20);
	tutup(11,22);
	tutup(22,11);
	tutup(-11,-22);
	tutup(9,18);
	tutup(18,9);
	tutup(-9,-18);

	

	giliran();

	// echo "<form>
	// <button class='btn_reset' type='submit' name='reset' value='reset'>Reset</button>
	// </form>";

	if ($jum_tab <= 4) {
			// code...
			
		foreach ($arr_x as $key ) {
			$x_mng = "<script>alert('menang') ;</script>";
			if (in_array($key+1, $arr_x) && in_array($key+2, $arr_x)) {
				echo $x_mng;
			}else if (in_array($key+10, $arr_x) && in_array($key+20, $arr_x)) {
				echo $x_mng;
			} else if(in_array($key+11, $arr_x) && in_array($key+22, $arr_x)) {
				echo $x_mng;
			}else if(in_array($key+9, $arr_x) && in_array($key+18, $arr_x)){
				echo $x_mng;
			}


			
			
		} 


		foreach ($arr_o as $key) {

			$o_mng = "<script>alert('kalah ama bot')</script>";
			
			// Cek o
			if (in_array($key+1, $arr_o) && in_array($key+2, $arr_o)) {
				echo $o_mng;
			}else if (in_array($key+10, $arr_o) && in_array($key+20, $arr_o)) {
				echo $o_mng;
			} else if(in_array($key+11, $arr_o) && in_array($key+22, $arr_o)) {
				echo $o_mng;
			}else if(in_array($key+9, $arr_o) && in_array($key+18, $arr_o)){
				echo $o_mng;
			}
		}

	}else{
		foreach ($arr_x as $key ) {
			$x_mng = "<script>alert('menang') ;</script>";
			if (in_array($key+1, $arr_x) && in_array($key+2, $arr_x)  && in_array($key+3, $arr_x)) {
				echo $x_mng;
			}else if (in_array($key+10, $arr_x) && in_array($key+20, $arr_x) && in_array($key+30, $arr_x)) {
				echo $x_mng;
			} else if(in_array($key+11, $arr_x) && in_array($key+22, $arr_x) && in_array($key+33, $arr_x)) {
				echo $x_mng;
			}else if(in_array($key+9, $arr_x) && in_array($key+18, $arr_x) && in_array($key+27, $arr_x)){
				echo $x_mng;
			}


			
			
		} 


		foreach ($arr_o as $key) {

			$o_mng = "<script>alert('kalah ama bot')</script>";
			
			// Cek o
			if (in_array($key+1, $arr_o) && in_array($key+2, $arr_o) && in_array($key+3, $arr_o)) {
				echo $o_mng;
			}else if (in_array($key+10, $arr_o) && in_array($key+20, $arr_o) && in_array($key+30, $arr_o)) {
				echo $o_mng;
			} else if(in_array($key+11, $arr_o) && in_array($key+22, $arr_o) && in_array($key+33, $arr_o)) {
				echo $o_mng;
			}else if(in_array($key+9, $arr_o) && in_array($key+18, $arr_o) && in_array($key+27, $arr_o)){
				echo $o_mng;
			}
		}
	}	

	// print_r($arr_tabel);

	?>
	<br>

	
	

</body>
</html>