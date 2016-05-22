<div id="formConten">
<strong>Edit Post</strong><br /> <br  />
	<?php
	include("editor_mce.php");
    $id = $_GET[idEd];
    $editValue = new dBase;
    $editValue->addQuery("SELECT * FROM konten WHERE idKonten = '$id'");
    while($ed=$editValue->addArray()){
    
		$fEdit = new formA('post','');
		echo("Judul: ");
		$fEdit->textBox('required','text','judul',50,'',$ed[judul]);
		echo("<div style='position:absolute; top:100px; left:650px;'><img src='../imgS/".$ed[generalCats]."/".$ed[picture]."' hspace='10' vspace='10' height='190' width='190'  /> ".$fEdit->textBox('','text','gbrLama','','',$ed[picture])." </div>");
		//echo("<br>Ganti gambar ? "); $fEdit->textBox('','file','pict','','Pilih Gambar','');
		echo "<br>Isi: "; 
		$fEdit->textArea('','isiPost','46','5','',$ed[isi]);
		echo "	<br>Kategori :<select name='generalCats'>
				<option value='".$ed['generalCats']."'> ".$ed['generalCats']." </option>
				";
				$tampilCat = new dBase();
				$pilih = $tampilCat->addQuery('SELECT * FROM post_category ORDER BY idCat ASC');
				while($rowTampil= $tampilCat->addArray()){
				echo "
					<option value='".$rowTampil['nameCat']."'> ".$rowTampil['NB']." </option>";
				}; //tutupnya while			
		echo " </select><br><br>";
		echo "Position:	<select name='specialCats'>
					<option value='".$ed['specialCats']."'> ".$ed['specialCats']." </option>
					<option value='1'> Konten VIP </option>
					<option value='2'> Konten Standart </option>
					<option value='3'> Konten Economic </option>
				</select><br><br>";
		$fEdit->submitReset('Update','editPost','Reset all form');				
		$fEdit->closeFormA();
	}; //tutup while pertama
	
	if($_POST[editPost]){
			$judul = htmlentities($_POST[judul]);
			$isi = $_POST[isiPost];
			$generalCats = htmlentities($_POST[generalCats]);
			$specialCats = htmlentities($_POST[specialCats]);
				$nama_p=$_POST[gbrLama];				
				$edPost = new dBase;
				$ed = $edPost->addQuery("UPDATE konten SET judul = '$judul', isi = '$isi', picture = '$nama_p', generalCats = '$generalCats', specialCats = '$specialCats' WHERE idKonten = '$id' ");
				if($ed){
					echo "<script>alert('Posting berhasil di edit')</script>
					<meta http-equiv='refresh' content='0;url=./' />
					";
				}; //tutup => if($puft){
	}; // tutup if editPost
	
    ?>
</div>	