<?php 
if(isset($_GET['cari'])){
	$nama_brg = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$nama_brg."</b>";
}
?>
 
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$nama_brg = $_GET['cari'];
		$data = mysql_query("select * from mhs where nama like '%".$nama_brg."%'");				
	}else{
		$data = mysql_query("select * from nama_brg");		
	}
	$no = 1;
	while($d = mysql_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['nama']; ?></td>
	</tr>
	<?php } ?>
</table>