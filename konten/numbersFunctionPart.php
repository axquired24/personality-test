<?php
function intToStr($intG){ // convert integer values to string
	return "$intG";
}
function jmlAll($angka){ // menjumlahkan semua angka jadi 1 digit | 2046 => 2+0+4+6 = 12 => 1+2 = 3
	$n = intToStr($angka);
	$jmlIn = $n[0] + $n[1] + $n[2] + $n[3];
	if ($jmlIn <= 9){ // jika langsung ketemu 1 digit
		return intToStr($jmlIn);
	}else{ // jika hasil akhir masih 2 digit, maka dijadikan 1 digit
		$jmlIn = intToStr($jmlIn);
		$jmlEx = $jmlIn[0] + $jmlIn[1];
		return intToStr($jmlEx);
	}
}

?>
