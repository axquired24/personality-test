<script src='_assets/js/jquery.js'></script>
<script>
	$("document").ready(function(){
		$("#home").addClass("active");
	});
</script>
<div class="row-fluid">
	<div class="span9">
<div class="hero-unit">
<h1> Personality&trade;</h1>
<p>Here you can check your personality, and its truth to yourself. This is easy to use. Have fun. Any Question ? Go to <a href="#">Feedback</a> page OR you can contact me privately at <a href="#">axquired24@gmail.com</a></p>
<a href="#" class="btn btn-large btn-primary"> Try it now >> </a>
</div>
<div class="row-fluid">
    <div align="justify" class="span6 well">
        <h1>Favorite Colors <i class="icon-star"></i> </h1>
        <p>Nah, disini kamu bisa <code>cek kepribadian kamu</code> berdasarkan <code>warna</code> kesukaanmu. Sebenarnya tipe orang seperti apa si kamu. Penasaran ? Langsung aja go to TKP bro.</p>
        <p><a href="#" class="btn btn-warning">ke TKP >></a></p>
    </div>
    <div align="justify" class="span6 well">
        <h1>Numbers <i class="icon-filter"></i></h1>
        <p>Kalo yang ini sih. Bisa percaya atau ngga percaya sih. <strong>Kok bisa gitu ?</strong> lha, penasaran ? coba aja deh. Klik dibawah ini lihat kepribadianmu dengan metode <code>angka</code> ini. Tenang bro, tes ini ngga kayak MTK kok.</p>
        <p><a href="?h=numbers" title="Klik Aja tombol ini bro | jangan ragu** lagi" class="btn btn-inverse">Go >></a></p>
    </div>
</div>                    
<div class="row-fluid">
    <div align="justify" class="span6 well">
        <h1>Nature Elements <i class="icon-leaf"></i></h1>
        <p>Nature Elements? <code><em>Avatar Aang</em></code> maksud lo? <strong>bukan</strong> dong, ini asli elemen - elemen natural yang mencerminkan kepribadian kita. Ngga percaya? dicoba aja dulu sist/bro .</p>
        <p><a href="?h=natureEl" class="btn btn-success">Langsung Coba >></a></p>
    </div>
    <div align="justify" class="span6 well">
        <h1>Head or Heart ? <i class="icon-heart"></i></h1>
        <!-- <p>Kepala atau Hati ? no no no, bukan itu maksudnya. Jelas kita memilih kepala ya daripada hati, karena kepala kan organ vital sist.</p> -->
        <p>Nah, didalam cek <code>Head or Heart ?</code> ini, kamu bisa tau, sebenarnya tipe logis(pemikir) atau tipe prasangka(perasaan) sih kamu itu sebenarnya.</p>
        <p><a href="?h=hOh" class="btn btn-danger">Coba Yuk >></a></p>
    </div>
</div>    
    </div>
    
    <!-- SPAN 3-->
    <div class="span3">
            <div class="well well-large sidebar-nav">
                <ul class="nav nav-list">
                    <li class="nav-header">P&trade; Menus</li>
                    <li class="active"><a href="#"><i class="icon-home"> </i> Home</a></li>
                    <li><a href="#"><i class="icon-info-sign"> </i> About Personality&trade;</a></li>
                    <li><a href="#"><i class="icon-user"> </i> About Me</a></li>
                    <li><a href="?h=feedBack"><i class="icon-comment"> </i> FeedBack</a></li>
                    <li class="nav-header">Another Apps</li>
                    <li><a href="?h=develop"><i class="icon-tag"> </i> AxQuiredApps-store</a></li>
                    <li><a href="?h=develop"><i class="icon-tag"> </i> Task Management</a></li>
                    <li><a href="?h=develop"><i class="icon-tag"> </i> Online Shop</a></li>
                    <li><a href="?h=develop"><i class="icon-tag"> </i> Finance Notes</a></li>
                    <li><a href="?h=develop"><i class="icon-tags"> </i> View all</a></li>
                </ul>
            </div>
            <div class="well">
                <fieldset>
                <legend title="Kritik dan Sarannya ya bro. Supaya apps ini bisa lebih baik lagi"><i class="icon-gift"></i> Kritik / Saran :</legend>
                    <form id="formKritik" method="post" name="kritikSaran" enctype="multipart/form-data" action="./?h=feedBack">
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
        </div><!-- End Span3 -->
</div>
