<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login | AxQuiredApps Personality</title>
</head>
<style>
body {
	background-color:#F8E8FF;
	margin:0;
	font:14px 'Segoe UI';
}
div.section{
	width:100%; 
	background-color: #F7AEFF; 
	border:#999999 1px solid;
	position:fixed;
}
	.header{
	padding:20px;
	top:0;
	color:#FFF;
	font:bold 20px 'Segoe UI';
	}
	.footer{
	padding:5px;
	bottom:0;
	color:#FFF;
	font:11px 'tahoma';
	}
	div#formConten{
		margin-top:100px;
		padding:20px;
		font:16px 'segoe ui';
		}
		div#formConten input, button{
			-moz-transition: all 0.26s ease-in;			
			-webkit-transition: all 0.26s ease-in;			
			-o-transition: all 0.26s ease-in;			
			-ms-transition: all 0.26s ease-in;			
			padding:15px;
			margin:10px;
			font:20px 'segoe ui';
			display:block;
		}
		input[type='text'], input[type='password']{
			opacity: 0.5;
		}
		input[type='text']:focus, input[type='password']:focus{
			-moz-transition: all 0.26s ease-out;
			-webkit-transition: all 0.26s ease-out;
			-o-transition: all 0.26s ease-out;
			-ms-transition: all 0.26s ease-out;
			opacity: 1.0;
		}
		
				
</style>

<body>
<div class="section header">
AxQuiredApps / Personality | LOGIN
</div>
<div align="center">
    <div id="formConten">
        <form method="post">
            <input type="text" name="usR" placeholder="Username" required>
            <input type="password" name="pasS" placeholder="Password" required>
            <input type="password" name="secR" placeholder="Who's Special girls in Albert's Life ?" required>
            <button type="submit" name="In">Login &rarr;</button>
            <a style="text-decoration:none;" href="../"><input type="button" name="In" value="&larr; Go Back" ></a>
        </form>
    </div>
</div>
<div class="section footer">
	&copy; 2013 AxQuiredApps | Personality by AxQuired24
</div>

<div style="visibility:hidden">
<?php
	if($_POST[usR]){
	  $user=$_POST[usR];
	  $pass=$_POST[pasS];
	  $valid = $_POST[secR];
	  $log = new dBase;
	  $query = $log->addQuery("SELECT * from log_ad where userLog='$user' && passLog='$pass'");
	  $cek = $log->listRow();
	  $pilih=$log->addArray();
	  
	  if($valid == 'Lelly'){		  
		  if($cek > 0){ //Menentukan kesalahan & buat session
				$_SESSION['detail'] = $pilih[detailLog];
				$_SESSION['u'] = $pilih[userLog];
				session_register('detail');
				session_register('u');
				session_register('p');
				echo "<meta http-equiv='refresh' content='0;url=./?' />";
			}else{
				$gagal_login=1;
			}//tutup menentukan kesalahan
			
	  } else{ // tutup if($valid)
		echo "<script>alert('Who`s Special girls in Albert`s Life ? > jawaban anda: [ $valid ] | Salah, anda bukan Albert :p')</script>";
		echo "<meta http-equiv='refresh' content='0;url=./' />";		
		}
	}//tutup if pertama

	if($gagal_login==1){ 
			echo "<script>alert('Anda gagal login | Kombinasi username dan password anda salah')</script>";
			echo "<meta http-equiv='refresh' content='0;url=./' />";	
	}  	
?>
</div>
</body>
</html>
