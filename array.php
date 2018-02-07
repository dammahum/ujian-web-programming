<?php
	$satu =  "The solution is to do this after each time you do a session_start()";
	$dua = "one,two,three,four";
	$tiga = "1-2-3|4-5|6:7-8-9-0|1,2:3-4|5";
	
	$pecah_satu = explode(" ",$satu);
	$pecah_dua = explode(",",$dua);
	$pecah_tiga = explode("|",$tiga);
	
	var_dump($pecah_satu);
	var_dump($pecah_dua);
	var_dump($pecah_tiga);
	
?>