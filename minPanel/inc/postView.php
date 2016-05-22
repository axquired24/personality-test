<script>
	$("document").ready(function(){
		$("#allPost").addClass("active");
	});
</script>
<style>
	table{
		border:#333 1px solid;
	}	
	th, td{
		width:25%;
		padding:5px;
		text-align:center;
	}
	thead, tbody{
		-moz-transition: all 0.26s ease-in;
		-webkit-transition: all 0.26s ease-in;
	}
	thead th, tbody tr{
		background:#CCC;
		background-image:-moz-linear-gradient(bottom, #CCC,#FFF);		
		background-image:-webkit-linear-gradient(bottom, #CCC,#FFF);		
	}	
	tbody tr:hover{
		background-image:-moz-linear-gradient(top, #506def,#2041DE);		
		background-image:-webkit-linear-gradient(top, #506def,#2041DE);		
		cursor:pointer;		
	}
</style>
<br><br>
<div id="formConten">
<form method="post">
Urutkan Berdasarkan : <select name="order" style="display:inline">
<option value="idKonten"> ID </option>
<option value="judul"> JUDUL </option>
<option value="generalCats"> Kategori </option>
<option value="specialCats"> Posisi </option>
</select>
<input type="submit" name="subOrder" value="Urutkan">
</form>
</div>
<table width="900" border="0" cellpadding="0" cellspacing="0">
<thead>
    <th>Opsi</th>
	<th>ID</th>
	<th>Judul</th>
	<th>Kategori</th>
	<th>Posisi</th>
</thead>
<tbody>
<?php
	if($_POST[subOrder]){
		$order = $_POST[order];
		$allpost = new dBase;
		$allpost->addQuery("SELECT * FROM konten ORDER BY $order ASC");
	}else{
		$order = $_POST[order];
		$allpost = new dBase;
		$allpost->addQuery("SELECT * FROM konten ORDER BY idKonten DESC");	
	}		
		while($tampil=$allpost->addArray()){
		echo"
		<tr>
			<td>
				<a href='?nfile=delPost&hpus=$tampil[idKonten]' onclick='return confirm(Hapus Posting $tampil[judul] ?)'><button> Hapus </button>
				</a>			
				<a href='?nfile=editPost&idEd=$tampil[idKonten]'><button>Edit</button></a> 
			</td>
			<td>".$tampil[idKonten]."</td>
			<td>".$tampil[judul]."</td>
			<td>".$tampil[generalCats]."</td>
			<td>".$tampil[specialCats]."</td>
		</tr>
		"; //end echo
		}; // end while
	//}; // end if $_POST[subOrder]


?>
</tbody>
</table>
