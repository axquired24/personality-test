<script src='_assets/js/jquery.js'></script>
<script>
	$("document").ready(function(){
		$("#number").addClass("active");
	});
</script>
<div class="row-fluid">
	<div class="span4 well" align="justify">
    	<h1>Numbers</h1>
        <p>Ayo, lihat apa benar angka kelahiranmu bisa digunakan untuk membaca <code>personality</code>mu.<br /><br /> </p>
        <p><a href="#" class="btn btn-large btn-inverse">Start Now</a>
        <a href='#petunjuk_' class="btn btn-large" role='button' data-toggle='modal'>Petunjuk ?</a></p>
    </div>
    
    <div class="span8">
    	<form method="post">
            <div class="well">
                <div class="row-fluid">
                    <div class="span3 offset1">
                        <p> Tanggal Lahirmu </p>
                        <input class="span12" type="text" name="tglL" placeholder="24" maxlength="2" required>
                    </div>
                    <div class="span1">
                        <p> + </p>
                        <h1>+</h1>
                    </div>
                    <div class="span3">
                        <p> Bulan Lahir </p>
                        <input class="span12" type="text" name="umurL" placeholder="9" maxlength="2" required>
                    </div>
                    <div class="span1">
                        <p> + </p>
                        <h1>+</h1>
                    </div>
                    <div class="span3">
                        <p> This Year </p>
                        <h1><?php echo date('Y'); ?></h1>
                    </div>
                </div>
                
                <div class="row-fluid">
                    <div class="form-actions">
                        <input id="klikHasil" type="submit" name="resNum" class="btn btn-inverse" value="Lihat Hasil" />
                        <input type="reset" class="btn" value="Ulangi" />
                    </div>            
                </div>            
                            
            </div> <!-- End WELL -->
		</form>           
                        
    </div> <!-- End SPAN8 -->
</div>  <!-- End 1st row-fluid -->

<div class="row-fluid">
	<div class="span12">    
        <ul class="media-list">
			<?php
			$numShow = new dBase;
			$numShow->addQuery("SELECT * FROM konten WHERE specialCats ='2' && generalCats ='number' ORDER BY judul ASC");
			while($tamP=$numShow->addArray()){
			echo"
				<li class='media well well-small'>
					<a class='pull-left btn btn-inverse' href='#show".$tamP[judul][1]."' role='button' data-toggle='modal'> 
						<h1>".$tamP[judul]."</h1><i class='icon-info-sign icon-white'></i>
					</a>
					<div class='media-body'>
						<h4 class='media-heading'><i class='icon-gift'></i> What happen on you at ".date('Y')."?</h4>
						<p>".$tamP[isi]."</p>
					</div>
				</li>
			"; // end echo
			} // tutup while
			?>        
		</ul>
    </div>
</div>
<?php
	$showHasil = new dBase; //tampil hasil
	$showHasil->addQuery("SELECT * FROM konten WHERE specialCats ='2' && generalCats ='number' ORDER BY idKonten ASC");
	while($resNum=$showHasil->addArray()){
	echo("
            <!-- Modal -->
            <div id='show".$resNum[judul][1]."' class='modal hide fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
                    <h3 id='myModalLabel'>Angka-mu tahun ini adalah: </strong></h3>
                </div>
                <div class='modal-body'>
                    <a class='btn btn-inverse btn-large' href='#'><h1>".$resNum[judul]."</h1></a>
					<p><br> <i class='icon-star-empty'></i> <strong>What happen on you at ".date('Y')." ?</strong> <br>						
						".$resNum[isi]."
					</p>
                </div>
                <div class='modal-footer'>
                    <button class='btn btn-inverse' data-dismiss='modal' aria-hidden='true'>Tutup</button>
                </div>
            </div>
	");
	} // end WHILE resNUM


//execute tanggal
include("konten/numbersFunctionPart.php"); // file berisi function

if($_POST[resNum]){
	$tgl = $_POST[tglL];
	$umur = $_POST[umurL];
	$thn = date('Y');
	
	$jmlnya = $tgl + $umur + $thn;
	$hasil = jmlAll($jmlnya);
	echo("
    <script src='_assets/js/bootstrap-transition.js'></script>
    <script src='_assets/js/bootstrap-modal.js'></script>	
	<script>
    	$('#show".$hasil."').modal('show')
	</script>						
	");

} // end IF resNum

?>
            <!-- Modal -->
            <div id='petunjuk_' class='modal hide fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
                    <h3 id='myModalLabel'>Petunjuk </h3>
                </div>
                <div class='modal-body'>
                    <p>
                    	<h1> Petunjuk</h1>
							Langsung aja, mudah kok. Kamu tinggal masukkan <strong>Tanggal lahir</strong> dan <strong>Bulan Lahir</strong> kamu ke dalam kotak, dan klik <code> LIHAT HASIL</code>, lihat angka berapa yang kamu dapatkan. Kemudian cocokkan dengan situasi yang digambarkan pada bacaan dibawah ini.                        
					</p>
                </div>
                <div class='modal-footer'>
                    <button class='btn btn-inverse' data-dismiss='modal' aria-hidden='true'>Tutup</button>
                </div>
            </div>
