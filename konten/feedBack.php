<script src='_assets/js/jquery.js'></script>
<script>
	$("document").ready(function(){
		$("#feedBacks").addClass("active");
	});
</script>
<div class="row-fluid">
	<div class="span12 well">
    	<h1> FeedBack <i class="icon-comment"></i></h1> Masukkan dan sarannya ya bro, supaya aplikasi ini lebih baik lagi nantinya.
    </div>
</div>
<div class="row-fluid">    
    <div class="span3 well">
        <fieldset>
        <legend title="Kritik dan Sarannya ya bro. Supaya apps ini bisa lebih baik lagi"><i class="icon-gift"></i> Kritik / Saran :</legend>
            <form id="formKritik" method="post" name="kritikSaran" enctype="multipart/form-data">
                <div class="input-prepend">
                    <span class="add-on btn-warning"><i class="icon-user"></i></span>
                    <input name="nama" id="prependedInput" type="text" placeholder="Nama ..." required>
                </div>                       

                <div class="input-prepend">
                    <span class="add-on btn-warning"><i class="icon-envelope"></i></span>
                    <input name="email" id="prependedInput" type="email" placeholder="Email (yang aktif ya bro) ..." required>
                </div>                       

                <div class="input-prepend">
                    <span class="add-on btn-warning"><i class="icon-comment"></i></span>
                    <textarea name="saran" rows="5" placeholder="Kritik, saran, caci maki juga bleh bro/sist .."  required></textarea>
                </div>                       
                
                <div class="input-prepend input-append">
                    <button name="inSaran" class="btn btn-warning" type="submit"><i class="icon-share-alt"></i> Kirim Pesan</button>
                    <button class="btn btn-danger" type="reset"><i class="icon-fire"></i> Reset Ulang</button>
                </div>                       
            </form>
        </fieldset>
    </div>
    <div class="span9 well">
        <legend title="Kritik dan Sarannya ya bro. Supaya apps ini bisa lebih baik lagi.">
        <i class="icon-folder-open"></i> Kritik / Saran yang sudah masuk :</legend>
            <ul class="media-list">
            <?php
				$tabel = "saran";
				$hal = $_GET[hal];
				if(!isset($hal)){
					$hal = 1;
				}else{			
					$hal = $_GET[hal];
				}
				$batas = 4;
				$mulai = ($hal * $batas) - $batas;			
				$sr = new dBase;				
				$sr->addQuery("SELECT * from $tabel ORDER by idSaran DESC LIMIT $mulai,$batas");
				while($saran=$sr->addArray()){
					echo("
						<li class=media>
							<a class=pull-left href=# title='On $saran[waktu]'>
							<img class=media-object src=imgS/appsPersonalityLogo.png width=70 height=70>
							</a>
							<div class=media-body>
								<h4 class=media-heading>$saran[nama] <i class=icon-ok></i></h4>
								<p>$saran[saran]</p><hr>
							</div>
						</li>
					");
				} //tutup while1
				$sr2 = new dBase;
				$totalResult = mysql_result($sr2->addQuery("SELECT COUNT(*) as NUM FROM $tabel"),0);
				$totalHal = ceil(totalResult / $batas);
				echo("<ul class=pager>");
				if($hal == 1){
					$prev = $hal - 1;
					$next = $hal + 1;
					echo("
						<li class='previous disabled'>
							<a href='#'>&lArr; Saran baru</a>							
						</li>						
						<li class=next>
							<a href='?h=feedBack&hal=".$next."'>Saran lama &rArr;</a>							
						</li>						
					");
				}elseif($hal >= $totalHal){
					$prev = $hal - 1;
					$next = $hal + 1;
					echo("
						<li class=previous>
							<a href='?h=feedBack&hal=".$prev."'>&lArr; Saran baru</a>							
						</li>						
						<li class='next disabled'>
							<a href='#'>Saran lama &rArr;</a>							
						</li>						
					");
				}else{
					$prev = $hal - 1;
					$next = $hal + 1;
					echo("
						<li class=previous>
							<a href='?h=feedBack&hal=".$prev."'>&lArr; Saran baru</a>							
						</li>						
						<li class=next>
							<a href='?h=feedBack&hal=".$next."'>Saran lama &rArr;</a>							
						</li>						
					");				
				}
				echo("</ul>");
				
				//INSERT SARAN to DB
				if($_POST[nama]){
					$nama = htmlentities($_POST[nama]);
					$email = htmlentities($_POST[email]);
					$saran = htmlentities($_POST[saran]);
					$waktu = date("Y-m-d");
					$saranIN = new dBase;
					$srIn = $saranIN->addQuery("INSERT INTO $tabel VALUES('','$nama','$email','$saran','$waktu')");
					if($srIn){
						echo("
							<script>alert('Terimakasih atas sarannya $nama. Harap tunggu ...')</script>
							<meta http-equiv='refresh' content='0;url=?h=feedBack' />							
						");
					}
					
				}			
			?>
</div>
