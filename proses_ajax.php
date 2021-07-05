<?php
	include "koneksi.php";
	
	if (isset($_POST['btnkirim']))
	{
		$nidn = $_POST['nidn'];
            $nama = $_POST['nama'];
            $tempat = $_POST['lahir'];
            $lahir = $_POST['date'];
            $telepon = $_POST['tel'];
            $pendidikan = $_POST['pendidikan'];
            $jk = $_POST['jenis'];
            $keahlian = $_POST['keahlian'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $tg = $_POST['tg'];
            if ($tg == '3A' || $tg == '3B'){
                $tugol = 500000;
            }
            elseif($tg == '3C'){
                $tugol = 750000;
            }
            elseif($tg == '4A' || $tg == '4B'){
                $tugol = 1000000;
            }
            else{
                $tugol = 1500000;
            }
           
            $tp = $_POST['tp'];
            if ($tp == 'AA'){
                $tupang = 375000;
            }
            elseif($tp == 'L'){
                $tupang = 750000;
            }
            elseif($tp == 'LK'){
                $tupang = 1500000;
            }
            else{
                $tupang = 7500000;
            }

            $pengalaman = $_POST['pengalaman'];
            $gaji = $_POST['gaji'];
            $total = $tugol + $tupang + $gaji;
            date_default_timezone_set('Asia/Kuala_Lumpur');
            $waktu = date("Y-m-d H:i:s");


            $queryinsert = mysqli_query($connect, "INSERT INTO tabel_anggota VALUES ('$nidn','$nama','$tempat','$lahir','$telepon','$pendidikan','$jk','$keahlian','$username','$password','$tg','$tp','$pengalaman','$gaji','$total')");
		if ($queryinsert)
		{
			
			?>
			<div class="container">
		<div class="panel-group">
			<div class="panel panel-success">
				<div class="panel-heading">Hasil Penginputan Data</div>
				<div class="panel-body">Data Berhasil Dimasukkan ke Database</div>
			</div>
		</div>
			</div>
			<?php
		}
		else
		{
			?>
			<div class="container">
		<div class="panel-group">
			<div class="panel panel-danger">
				<div class="panel-heading">Hasil Penginputan Data</div>
				<div class="panel-body">Data Gagal Dimasukkan ke Database</div>
			</div>
		</div>
			</div>
			<?php
		}
	}
	
	if (isset($_POST['btnupdate']))
	{
		$nidn = $_POST['nidn'];
            $nama = $_POST['nama'];
            $tempat = $_POST['lahir'];
            $lahir = $_POST['date'];
            $telepon = $_POST['tel'];
            $pendidikan = $_POST['pendidikan'];
            $jk = $_POST['jk'];
            $keahlian = $_POST['keahlian'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $tg = $_POST['tg'];
            if ($tg == '3A' || $tg == '3B'){
                $tugol = 500000;
            }
            elseif($tg == '3C'){
                $tugol = 750000;
            }
            elseif($tg == '4A' || $tg == '4B'){
                $tugol = 1000000;
            }
            else{
                $tugol = 1500000;
            }
           
            $tp = $_POST['tp'];
            if ($tp == 'AA'){
                $tupang = 375000;
            }
            elseif($tp == 'L'){
                $tupang = 750000;
            }
            elseif($tp == 'LK'){
                $tupang = 1500000;
            }
            else{
                $tupang = 7500000;
            }

            $pengalaman = $_POST['pengalaman'];
            $gaji = $_POST['gaji'];
            $total = $tugol + $tupang + $gaji;
date_default_timezone_set('Asia/Kuala_Lumpur');
$waktu = date("Y-m-d H:i:s");

$queryedit = mysqli_query($connect, "UPDATE tabel_anggota SET nama='$nama', tempat='$tempat', lahir='$lahir',telepon='$telepon', pendidikan='$pendidikan', jenis_kelamin='$jk',keahlian='$keahlian',username='$username',password='$password',tunjangan_golongan='$tg',tunjangan_pangkat='$tp',gaji_pokok='$gaji',total='$total',pengalaman='$pengalaman' WHERE nidn='$nidn'");
if ($queryedit)
		{
			
			?>
			<div class="container">
		<div class="panel-group">
			<div class="panel panel-success">
				<div class="panel-heading">Hasil Edit Data</div>
				<div class="panel-body">Data Berhasil Diedit</div>
			</div>
		</div>
			</div>
			<?php
		}
		else
		{echo $nidn;

			?>
			<div class="container">
		<div class="panel-group">
			<div class="panel panel-danger">
				<div class="panel-heading">Hasil Edit Data</div>
				<div class="panel-body">Data Gagal Diedit</div> 
			</div>
		</div>
			</div>
			<?php
		}
	}
	
	if (isset($_POST['btndel']))
	{
		$nidn = $_POST['nidn'];
		$insertdb = mysqli_query($connect, "DELETE FROM tabel_anggota WHERE nidn='$nidn'");
		if ($insertdb)
		{
			?>
			<div class="container">
		<div class="panel-group">
			<div class="panel panel-success">
				<div class="panel-heading">Hasil Hapus Data</div>
				<div class="panel-body">Data Berhasil Dihapus</div>
			</div>
		</div>
			</div>
			<?php
		}
		else
		{
			?>
			<div class="container">
		<div class="panel-group">
			<div class="panel panel-danger">
				<div class="panel-heading">Hasil Hapus Data</div>
				<div class="panel-body">Data Gagal Dihapus</div>
			</div>
		</div>
			</div>
			<?php
		}
	}
?>
