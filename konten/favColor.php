<script src='_assets/js/jquery.js'></script>
<script>
	$("document").ready(function(){
		$("#favColor").addClass("active");
	});
</script>
<div class="row-fluid">
    <div class="span6 hero-unit">
        <h1> Favorite Colors</h1><br />
        <p>Pilihlah satu warna paling kamu sukai dari kelompok warna primer dan skunder di samping ini, 
        <p><em>Kemudian </em>cocokkan apakah arti dari warna pilihanmu sesuai dengan kepribadianmu dan bagaimana mengembangkannya supaya kamu bisa menjadi orang yang <strong>berkepribadian istimewa.</strong><br />
        <a href="#" class="btn btn-large btn-warning"> Try it now >> </a>
    </div>

    <div id="colorSwatch" class="span6">
    <div class="row-fluid">
    	<div class="span12 well">
        	<a href="#" class="btn btn-warning"> Cara : </a> <code>Klik salah satu kombinasi warna  yang kamu suka , dan taraaa :D </code>
        </div>
    </div>
    <div class="row-fluid">	
        <?php
        $optFav = new dBase;
        $optFav->addQuery("SELECT * FROM konten WHERE specialCats ='2' && generalCats ='favColor' ORDER BY idKonten ASC LIMIT 0,4");
        while($tampFav=$optFav->addArray()){
        echo "
				
					<div class='span2'>
					<a href='#myModal".$tampFav[idKonten]."' role='button' data-toggle='modal'> <!-- LINK Modal -->
						<img src='imgS/favColor/".$tampFav[picture]."' hspace='10' vspace='10' height='190' width='190'  /><br>
						<a href='#myModal".$tampFav[idKonten]."' class='btn' role='button' data-toggle='modal'>".$tampFav[judul]."</a>						
					</a>
					</div>
					            	                    
            <!-- Modal -->
            <div id='myModal".$tampFav[idKonten]."' class='modal hide fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
                    <h3 id='myModalLabel'>".$tampFav[judul]."</h3>
                </div>
                <div class='modal-body'>
                    <p><img src='imgS/favColor/".$tampFav[picture]."' hspace='10' vspace='10' height='190' width='190'  />".$tampFav[isi]."</p>
                </div>
                <div class='modal-footer'>
                    <button class='btn btn-warning' data-dismiss='modal' aria-hidden='true'>Tutup</button>
                </div>
            </div>			
            ";
        };	// tutup while
        ?>
    </div> <?php // tutup row fluid ?>    

    <div class='row-fluid'>	
        <?php
        $optiFav = new dBase;
        $optiFav->addQuery("SELECT * FROM konten WHERE specialCats ='2' && generalCats ='favColor' ORDER BY idKonten ASC LIMIT 4,5");
        while($tampFavor=$optiFav->addArray()){
        echo "
				
					<div class='span2'>
					<a href='#myModal".$tampFavor[idKonten]."' role='button' data-toggle='modal'> <!-- LINK Modal -->
						<img src='imgS/favColor/".$tampFavor[picture]."' hspace='10' vspace='10' height='190' width='190'  /><br>
						<a href='#myModal".$tampFavor[idKonten]."' class='btn btn-warning' role='button' data-toggle='modal'>".$tampFavor[judul]."</a>
					</a>
					</div>
					            	                    
            <!-- Modal -->
            <div id='myModal".$tampFavor[idKonten]."' class='modal hide fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
                    <h3 id='myModalLabel'>".$tampFavor[judul]."</h3>
                </div>
                <div class='modal-body'>
                    <p><img src='imgS/favColor/".$tampFavor[picture]."' hspace='10' vspace='10' height='190' width='190'  />".$tampFavor[isi]."</p>
                </div>
                <div class='modal-footer'>
                    <button class='btn btn-warning' data-dismiss='modal' aria-hidden='true'>Tutup</button>
                </div>
            </div>			
            ";
        };	// tutup while
        ?>
    </div> <?php // tutup row fluid ?>    

    </div> 
</div>  