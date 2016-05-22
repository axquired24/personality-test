<?php
define('host','localhost');
define('usr','root');
define('pasw','root');
define('dbName','apps_personality');

class dBase{
	var $koneksi;
	var $db;
	var $query;
	var $queryHasil;
	var $numHasil;
	var $rowHasil;
	
	function __construct(){
		$this->koneksi = mysql_connect(host,usr,pasw) or die ("gagal koneksi");
		$this->db = mysql_select_db(dbName) or die ("DBname tidak ditemukan");
	}
	
	function addQuery($qCode){
		$this->queryHasil = mysql_query($qCode,$this->koneksi);
		return $this->queryHasil;
	}

	function addArray(){
		$this->rowHasil = mysql_fetch_array($this->queryHasil);
		return $this->rowHasil;
	}
	function listRow(){
		$this->numHasil = mysql_num_rows($this->queryHasil);
		return $this->numHasil;
	}
}

class formA{
	function __construct($method,$act){
		$this->method = $method;
		$this->act = $act;
		
		echo ("<form method='".$this->method."' action='".$this->act."' enctype='multipart/form-data'>");
	}
	
	function textBox($require,$type,$name,$size,$placeHolder,$val){
		$this->req = $require;
		$this->type = $type;
		$this->name = $name;
		$this->size = $size;
		$this->pHold = $placeHolder;
		$this->val = $val;
		
		echo("<input type='".$this->type."' name='".$this->name."' size='".$this->size."' placeholder='".$this->pHold."' value='".$this->val."' ".$this->req." /> ");
	}
	
	function textArea($require,$name,$cols,$rows,$pHold,$val){
		$this->req = $require;
		$this->name = $name;
		$this->cols = $cols;
		$this->rows = $rows;
		$this->pHold = $pHold;
		$this->val = $val;
		
		echo ("<textarea ".$this->req." name='".$this->name."' cols='".$this->cols."' rows='".$this->rows."' placeholder='".$this->pHold."'>".$this->val."</textarea>");
	}	
		
	function submitReset($valueSubmit,$nameSubmit,$valueReset){
		$this->valS = $valueSubmit;
		$this->valR = $valueReset;
		$this->nameSub = $nameSubmit;
		
		echo("<input type='submit' name='".$this->nameSub."' value='".$this->valS."' /> ");
		echo("<input type='reset' value='".$this->valR."' /> ");
	}
	
	function closeFormA(){
		echo("</form>");	
	}
}

class popUP{
	function __construct($tipe){
		$this->tipe = $tipe;
		echo($this->tipe."('");
	}
	function buat($psn){
		$this->psn = $psn;
		echo($this->psn."')");
	}

}
?>