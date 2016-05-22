<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Panel Admin</title>
<link href="cssMinPanel.css" rel="stylesheet" type="text/css" />
<script src="../_assets/js/jquery.js" type="text/javascript"></script>
</head>
<?php include("../kons.php");
if (!isset($_SESSION)) {
	session_start();
}


?>
<body>
<?php
	if(empty($_SESSION['u'])){
		include('login.php');
	}else{
	$ex = explode(",",$_SESSION['detail']);
	$namaL = $ex[0];
	$imgPath = $ex[1];	
?>
    <div id="section" class="section-menu"><!-- MENU -->
        <strong style="padding-right:30px;">Personality Admin Panel </strong>
        <a id="home" href="./"> Home </a> 
        <a id="addPost" href="?nfile=addNew"> Add New Post </a> 
        <a id="allPost" href="?nfile=postView"> All Post </a>
        <a id="delComm" href="?nfile=delComm"> Delete Comment</a>
        <a href="logout.php"> Logout </a>
    </div>
    
    <div id="section" style="padding-top:40px;"> <!-- Konten -->
    	<?php
			$nfile = $_GET[nfile];
			if(!empty($nfile)){
				include ("inc/".$nfile.".php");
			}else{
				include("inc/home.php");
			}
		?>
    </div>
<?php }; // tutup else(session)?>    
</body>
</html>
