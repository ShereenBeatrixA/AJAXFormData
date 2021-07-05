<div class="table-responsive col-sm-10 col-sm-offset-1">
			<h2>List Data Anggota</h2>
<table class="table table-striped ">
	<thead>
		<tr>
        <th>NIDN</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Telepon</th>
                    <th>Pendidikan</th>
                    <th>Jenis Kelamin</th>
                    <th>Keahlian</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Tunjangan Golongan</th>
                    <th>Tunjangan Pangkat</th>
                    <th>Pengalaman</th>
                    <th>Gaji Pokok</th>
                    <th>Total Gaji</th>
		</tr>
	</thead>
	<tbody>
<?php
	include "koneksi.php";
	
	$atribut = $_POST['searchby'];
	$nilai = $_POST['key'];
	$queryanggota = mysqli_query($connect, "SELECT * FROM tabel_anggota WHERE $atribut LIKE '%$nilai%'");
	while ($anggota = mysqli_fetch_array($queryanggota))
	{
?>
	<tr>
    <td><?=$anggota['nidn']?></td>
                        <td><?=$anggota['nama']?></td>
                        <td><?=$anggota['tempat']?></td>
                        <td><?=$anggota['lahir']?></td>
                        <td><?=$anggota['telepon']?></td>
                        <td><?=$anggota['pendidikan']?></td>
                        <td><?=$anggota['jenis_kelamin']?></td>
                        <td><?=$anggota['keahlian']?></td>
                        <td><?=$anggota['username']?></td>
                        <td><?=$anggota['password']?></td>
                        <td><?=$anggota['tunjangan_golongan']?></td>
                        <td><?=$anggota['tunjangan_pangkat']?></td>
                        <td><?=$anggota['pengalaman']?></td>
                        <td><?=$anggota['gaji_pokok']?></td>
                        <td><?=$anggota['total']?></td>
		<td><button type="button" id="btnedit" name="btnedit" class="btn btn-sm btn-info" onClick="editData('<?=$anggota['nidn']?>')"><span class="glyphicon glyphicon glyphicon-edit"></span> Edit</button></a></td>
		<td><button type="button" id="btnhapus" name="btnhapus" class="btn btn-sm btn-danger" onClick="hapusData('<?=$anggota['nidn']?>')"><span class="glyphicon glyphicon-trash"></span> Hapus</button></a></td>
	</tr>
<?php
	}
?>
	</tbody>
</table>
</div>