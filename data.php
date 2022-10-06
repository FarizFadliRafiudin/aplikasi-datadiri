<?php
    include "koneksimysql.php";
?>
<table width="600" border="1">
    <tr>
        <th>NIS</th>
        <th>NAMA</th>
        <th>KELAS</th>
    </tr>
    <?php
$sql = $conn -> query("select * from siswa");
while($rs = $sql -> fetch_object()){
?>
    <tr>
        <td><?php echo $rs->nis;?></td>
        <td><?php echo $rs->nama;?></td>
        <td><?php echo $rs->kelas;?></td>
    </tr>
    <?php } ?>
</table>