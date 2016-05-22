<?php
$idH = $_GET[hpus];
$delQ = new dBase;
$delQ->addQuery("DELETE FROM konten WHERE idKonten = '$idH'");
echo "<h1>Terhapus</h1>
<meta http-equiv='refresh' content='1;url=./?nfile=postView' />
";
?>