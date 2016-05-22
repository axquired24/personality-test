<script src='_assets/js/jquery.js'></script>
<script>
	$("document").ready(function(){
		$("#hOh").addClass("active");
		$(".sifat1").click(function(){
			$("#ho49").modal("show");
		});
		$(".sifat2").click(function(){
			$("#ho48").modal("show");
		});
		$(".sifat3").click(function(){
			$("#ho47").modal("show");
		});
	});
</script>
<style>
	ol.sifat li:hover{
		cursor:pointer;
		color: #BF0647;
	}
</style>

<div class="row-fluid">
	<div class="span3">
    	<div class="hero-unit">
        	<h1> <p>Head</p> <p><code>OR</code></p> <p>Heart</p> </h1>
            <a href="#helpHOH_" class="btn btn-danger" role="button" data-toggle="modal"> Baca petunjuk dulu bro </a>
        </div>
        
        <div class="well">
        	<div class="alert alert-danger">Kategori Sifat :</div>
            <ol type="1" class="sifat">
            	<li class="sifat1">Bijaksana (<strong>Head</strong> and <code>Heart</code>)</li>
                <li class="sifat2">Pemikir (<strong>Head</strong>)</li>
                <li class="sifat3">Perasa (<code>Heart</code>)</li>
            </ol>
        </div>
    </div>

    <div class="span9">
    	<div class="well">
        	<div class="alert alert-info"><p>Beri <strong>checklist</strong> (<input type="checkbox" checked="checked" readonly="readonly" />) pada pernyataan dibawah ini jika sesuai denganmu ya :</p></div>
            <hr>
            <?php
				echo ("<form method=post>");
				$cList = new dBase;
				$cList->addQuery("SELECT * FROM konten WHERE generalCats='HeadOrs' && specialCats='2' ORDER BY idKonten ASC LIMIT 0,5");
				$i = 1;
				while($cL = $cList->addArray()){
					echo("						
						<div class=row-fluid>						
							<div class=span1><input type=checkbox name=hOh1[] value=$cL[judul] /></div>							
							<div class=span1><span class='badge badge-important'>".$i++.".</span></div>
							<div class=span10>$cL[isi]</div>
						</div>
						<hr>
					");
				}; // tutup while1
				
				$cList2 = new dBase;
				$cList2->addQuery("SELECT * FROM konten WHERE generalCats='HeadOrs' && specialCats='2' ORDER BY idKonten ASC LIMIT 5,5");
				$i_ = 6;
				while($cL2 = $cList2->addArray()){
					echo("
						<div class=row-fluid>
							<div class=span1><input type=checkbox name=hOh2[] value=$cL2[judul] /></div>							
							<div class=span1><span class='badge badge-important'>".$i++.".</span></div>
							<div class=span10>$cL2[isi]</div>
						</div>
						<hr>
					");
				}; // tutup while2
			?>
                <div class="row-fluid">
                    <div class="form-actions">
                        <input type="submit" name="hohResult" class="btn btn-danger" value="Yup n Go!" />
                        <input type="reset" class="btn" value="Hilangkan Semua Ceklist" onclick="return confirm('Yakin ingin menghapus semua checklist? Kamu akan mengulangnya dari awal')" />
                    </div>            
                </div>            
            </form>
        </div>
    </div>
</div>

            <!--Petunjuk HoH-->
            <div id='helpHOH_' class='modal hide fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
                    <h3 id='myModalLabel'>Deskripsi & Petunjuk </h3>
                </div>
              <div class='modal-body'>
                    <p>
               	<h1> Head or Heart</h1>
							<strong>Pemikir</strong> ataukah <strong>Perasa</strong> kamu ini , nah untuk membuktikannya kamu bisa coba dengan tes di bawah ini. caranya gampang, <br />
							1. disini terdapat <code>10 pernyataan</code>, <br />
							2. Klik <code>ceklistnya</code> di depan pernyataan yang menggambarkan pribadimu saat ini<br />
							3. kemudian klik &quot; <code>Yup n Go</code>&quot;. Selesai
						  </p>
                </div>
                <div class='modal-footer'>
                    <button class='btn btn-inverse' data-dismiss='modal' aria-hidden='true'>Tutup</button>
                </div>
            </div>
            
<?php
// Modal | Perasa, Pemikir or Bijaksana
$hOh3 = new dBase;
$hOh3->addQuery("SELECT * FROM konten WHERE generalCats='HeadOrs' && specialCats='3' ORDER BY idKonten ASC");
while($h=$hOh3->addArray()){
	echo("
            <!-- Modal -->
            <div id='ho".$h[idKonten]."' class='modal hide fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
                    <h3 id='myModalLabel'>Menurut tes ini, kamu adalah: </strong></h3>
                </div>
                <div class='modal-body'>
                    <a class='btn btn-danger' href='#'><h3> ".$h[judul]." </h3></a>
					<p><br>".$h[isi]."</p>
                </div>
                <div class='modal-footer'>
                    <button class='btn btn-danger' data-dismiss='modal' aria-hidden='true'>Tutup</button>
                </div>
            </div>
	");
} // tutup WHILE

//hitung hasilnya_
if($_POST[hohResult]){
	$hoh1 = count($_POST[hOh1]);
	$hoh2 = count($_POST[hOh2]);
	$result = (($hoh1) * 2) + ($hoh2);
	echo(" 
		<script src='_assets/js/bootstrap-transition.js'></script>
		<script src='_assets/js/bootstrap-modal.js'></script>
	");	//panggil JS untuk mengaktifkan script modal dibawah
	
	if($result ==0){
		echo("<script>alert('Centang minimal 1 pernyataan')</script>");
	}elseif($result <= 5){
		echo("
			<script>
				$('#ho47').modal('show')
			</script>
		");	
	}elseif($result <= 7){
		echo("
			<script>
				$('#ho48').modal('show')
			</script>
		");	
	}else{
		echo("
			<script>
				$('#ho49').modal('show')
			</script>
		");	
	}
} //end IF hoh result

?> 

					
