<script>
	$("document").ready(function(){
		$("#addPost").addClass("active");
	});
</script>
<div id="formConten">
<strong>Tambah Post Baru</strong><br /> <br  />
	<?php
		include("editor_mce.php");
		$newPost = new formA('post','');
		echo "Judul: "; 
		$newPost->textBox('required','text','judul',50,'Judul Posting','');
		echo "Gambar post: "; 
		$newPost->textBox('','file','pict','','Pilih Gambar','');
		echo "Isi: "; 
		$newPost->textArea('','isiPost','46','5','Isi posting ...','');
		echo "Kategory: "; 
		echo "	<select name='generalCats'>";
				$tampilCat = new dBase();
				$pilih = $tampilCat->addQuery('SELECT * FROM post_category ORDER BY idCat ASC');
				while($rowTampil= $tampilCat->addArray()){
				echo "
					<option value='".$rowTampil['nameCat']."'> ".$rowTampil['NB']." </option>";
				}; //tutupnya while			
		echo " </select><br><br>";
		echo "Position:	<select name='specialCats'>					
					<option value='2'> Konten Standart </option>
					<option value='3'> Konten Economic </option>
					<option value='1'> Konten VIP </option>
				</select><br><br>";
		$newPost->submitReset('Add','addNewPost','Ulangi');
		$newPost->closeFormA;
		
		if($_POST[addNewPost]){
			$judul = htmlentities($_POST[judul]);
			$isi = $_POST[isiPost];
			$generalCats = htmlentities($_POST[generalCats]);
			$specialCats = htmlentities($_POST[specialCats]);
				$nama_p=$_FILES['pict'] ['name'];
				$lokasi_p=$_FILES['pict'] ['tmp_name'];
				$type_p=$_FILES['pict'] ['type_name'];
				$size_p=$_FILES['pict'] ['size_name'];
				$folder="../imgS/$generalCats/$nama_p";
				$pictMov=move_uploaded_file($lokasi_p,"$folder");
				
				$addPost = new dBase;
				$puft = $addPost->addQuery("INSERT INTO konten(judul, isi, picture, generalCats, specialCats) VALUES('$judul','$isi','$nama_p','$generalCats','$specialCats')");
				if($puft){
					echo "<script>alert('Posting berhasil')</script>
					<meta http-equiv='refresh' content='0;url=./?nfile=postView' />
					";
				}; //tutup => if($puft){
			}; // tutup => if($_POST[addNewPost]){
					
    ?>
</div>