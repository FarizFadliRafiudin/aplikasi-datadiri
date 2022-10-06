<?php
include "koneksimysql.php";
$conn -> query("insert into siswa(nis,nama,kelas) values('".$_POST['nis']."','".$_POST['nama']."', '".$_POST['kelas']."')");
?>