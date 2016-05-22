<script>
	$("document").ready(function(){
		$("#delComm").addClass("active");
	});
</script>
<style>
.tampilComm{
	margin-left:30px;
	margin-top:10px;
}
</style>
<div class="tampilComm">
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
				echo("<form method=post><input type=submit name=delIni value='Hapus yang ditandai' />'");
				while($saran=$sr->addArray()){
					echo("
						<li class=media>
							<div class=media-body>
								<h4 title='On $saran[waktu]' class=media-heading><input type=checkbox value=$saran[idSaran] name=delID[]> $saran[nama]</h4>
								<p>$saran[email] <br>$saran[saran]</p><hr>
							</div>
						</li>
					");
				} //tutup while1
				echo("</form>");
				$sr2 = new dBase;
				$totalResult = mysql_result($sr2->addQuery("SELECT COUNT(*) as NUM FROM $tabel"),0);
				$totalHal = ceil(totalResult / $batas);
				echo("<ul class=pager>");
				if($hal == 1){
					$next = $hal + 1;
					echo("
						<li class=next>
							<a href='?nfile=delComm&hal=".$next."'>Saran lama &rArr;</a>							
						</li>						
					");
				}elseif($hal >= $totalHal){
					$prev = $hal - 1;
					echo("
						<li class=previous>
							<a href='?nfile=delComm&hal=".$prev."'>&lArr; Saran baru</a>							
						</li>						
					");
				}else{
					$prev = $hal - 1;
					$next = $hal + 1;
					echo("
						<li class=previous>
							<a href='?nfile=delComm&hal=".$prev."'>&lArr; Saran baru</a>							
						</li>						
						<li class=next>
							<a href='?nfile=delComm&hal=".$next."'>Saran lama &rArr;</a>							
						</li>						
					");				
				}
				echo("</ul>");

//hapus ~
$delID = $_POST[delID];
$jml = count($delID);
if($_POST[delIni]){
	if($jml ==0){
		echo("<script>alert('Maaf, belum ada data yang dicentang')</script>");
	}else{	
		for($j=0; $j<$jml; $j++){
			$deLL = new dBase;
			$code = "DELETE FROM $tabel WHERE idSaran=$delID[$j]";
			$deLL->addQuery($code);
		} //tutup FOR
	echo("
		<script>alert('Comment** pilihan berhasil dihapus..')</script>
		<meta http-equiv='refresh' content='0;url=./?nfile=delComm' />
	");	
	} // tutup else
}					

?>
</div>
