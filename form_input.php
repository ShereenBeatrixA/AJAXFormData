<?php
include "koneksi.php";
error_reporting (E_ALL ^ E_NOTICE);
$username = $_COOKIE['username'];
$password = $_COOKIE['password'];
	
	if (!isset($username))
	{
		?>
		<script>
			alert('Cookie Habis');
			document.location='login.php';
		</script>
		<?php
		exit;
	}
?>
<script>
	$(document).ready(function(){
	$("#btnkirim").click(function(){
	   // ambil value data dari form
		var nidn = $("#nidn").val();
		var nama  = $("#nama").val(); 
		var lahir  = $("#lahir").val(); 
		var date  = $("#date").val(); 
		var tel  = $("#tel").val(); 
		var pendidikan  = $("#pendidikan").val(); 
		var jenis = $('input:radio[name=jk]:checked').val();
		var keahlian = "";
		if ($('#keahlian1').is(":checked"))
		{
			keahlian += $('#keahlian1').val() + ",";
		}
		if ($('#keahlian2').is(":checked"))
		{
			keahlian += $('#keahlian2').val() + ",";
		}
		if ($('#keahlian3').is(":checked"))
		{
			keahlian += $('#keahlian3').val() + ",";
		}
		if ($('#keahlian4').is(":checked"))
		{
			keahlian += $('#keahlian4').val() + ",";
		}
		var username  = $("#username").val(); 
		var password  = $("#password").val(); 
        var tg = $('input:radio[name=tg]:checked').val();
        var tp = $('input:radio[name=tp]:checked').val();
		var pengalaman = $("#pengalaman").val();
		var gaji = $("#gaji").val();
		// kirim dengan metode POST ke proses.php 
		$.ajax({
			cache: false,
			type:"POST",
			url:"proses_ajax.php",    
			data: "btnkirim=kirim&nidn=" + nidn + "&nama=" + nama + "&lahir=" + lahir + "&date=" + date + "&tel=" + tel + "&pendidikan=" + pendidikan + "&jenis=" + jenis + "&keahlian=" + keahlian + "&username=" + username + "&password=" + password + "&tg=" + tg + "&tp=" + tp + "&pengalaman=" + pengalaman + "&gaji=" + gaji,
			success: function(output){                 
				$("#info").html(output);
				resetForm();
			},
			error: function(){
				$("#info").html("Terjadi Kesalahan. Silahkan Coba Lagi");
			}
		});
	});
	
	$("#btnupdate").click(function(){
	   // ambil value data dari form
	   var nidn = $("#nidn").val();
		var nama  = $("#nama").val(); 
		var lahir  = $("#lahir").val(); 
		var date  = $("#date").val(); 
		var tel  = $("#tel").val(); 
		var pendidikan  = $("#pendidikan").val(); 
		var jenis = $('input:radio[name=jk]:checked').val();
		var keahlian = "";
		if ($('#keahlian1').is(":checked"))
		{
			keahlian += $('#keahlian1').val() + ",";
		}
		if ($('#keahlian2').is(":checked"))
		{
			keahlian += $('#keahlian2').val() + ",";
		}
		if ($('#keahlian3').is(":checked"))
		{
			keahlian += $('#keahlian3').val() + ",";
		}
		if ($('#keahlian4').is(":checked"))
		{
			keahlian += $('#keahlian4').val() + ",";
		}
		var username  = $("#username").val(); 
		var password  = $("#password").val(); 
        var tg = $('input:radio[name=tg]:checked').val();
        var tp = $('input:radio[name=tp]:checked').val();
		var pengalaman = $("#pengalaman").val();
		var gaji = $("#gaji").val();
		alert('aa' + no);
		
		// kirim dengan metode POST ke proses.php 
		$.ajax({
			cache: false,
			type:"POST",
			url:"proses_ajax.php",    
			data: "btnupdate=Update&nama=" + nama + "&lahir=" + lahir + "&date=" + date + "&tel=" + tel + "&pendidikan=" + pendidikan + "&jenis=" + jenis + "&keahlian=" + keahlian + "&username=" + username + "&password=" + password + "&tg=" + tg + "&tp=" + tp + "&pengalaman=" + pengalaman + "&gaji=" + gaji,
			success: function(output){                 
				$("#info").html(output);
				resetForm();
			},
			error: function(){
				$("#info").html("Terjadi Kesalahan. Silahkan Coba Lagi");
			}
		});
	});
	
	$("#btnview").click(function(){
		// kirim dengan metode POST ke view.php 
		$.ajax({
			cache: false,
			type:"POST",
			url:"view.php",    
			success: function(output){                 
				$("#info").html(output);
			},
			error: function(){
				$("#info").html("Terjadi Kesalahan. Silahkan Coba Lagi");
			}
		});
	});
	
	$("#btncari").click(function(){
		key = $("#key").val();
		searchby = $("#searchby").val();
		// kirim dengan metode POST ke view.php 
		$.ajax({
			cache: false,
			type:"POST",
			url:"cari.php", 
			data: "key=" + key + "&searchby=" + searchby,
			success: function(output){                 
				$("#info").html(output);
			},
			error: function(){
				$("#info").html("Terjadi Kesalahan. Silahkan Coba Lagi");
			}
		});
	});
});
</script>

<!DOCTYPE html>
<html lang="en">
<head>
 <title>Perancangan Sistem IV - AJAX</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initialscale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
</head>
<body>
	<div class="container">
	<h2>Input Data Anggota</h2>

	<form class="form-horizontal" method="post" action="input.php">
    <div class="form-group">
            <label class="control-label col-sm-2" for="nidn">NIDN:</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="nidn" placeholder="Masukkan NIDN" name="nidn">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="nama">Nama:</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2"  for="tempat">Tempat Lahir:</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="lahir" placeholder="Masukkan Tempat Lahir" name="tempat">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="lahir">Tanggal Lahir:</label>
            <div class="col-sm-4">
            <input type="date" class="form-control" id="date" placeholder="Masukkan Tanggal Lahir" name="lahir">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="telepon">Nomor Telepon:</label>
            <div class="col-sm-4"> 
            <input type="tel" class="form-control" id="tel" placeholder="Masukkan Nomor Telepon" name="telepon">
            </div>
        </div>
        
        <div class="form-group"> 
            <label class="control-label col-sm-2" for="pendidikan">Pendidikan Terakhir:</label>
            <div class="col-sm-10"> 
            <select class="form-control" id="pendidikan" name="pendidikan">
            <option value='-'>--Masukkan Pendidikan--</option>
                <option value='S1'>S1</option>
                <option value='S2'>S2</option>
                <option value='S3'>S3</option>
                <option value='lainnya'>Lainnya</option>
            </select>
            </div>
        </div>

        <div class="form-group"> 
            <label class="control-label col-sm-2" for="jk">Jenis Kelamin:</label>
            <div class="col-sm-10"> 
            <label class="radio-inline" ><input type="radio" id="jk" name="jk" value="Pria"> Pria</label>
            <label class="radio-inline"><input type="radio" id="jk" name="jk" value="Wanita"> Wanita</label>
            </div>
        </div>
        
        <div class="form-group"> 
            <label class="control-label col-sm-2" for="ahli">Keahlian:</label>
            <div class="col-sm-10"> 
            <label class="checkbox-inline" >
                <input type='checkbox' name='keahlian[]' value='Programming' id="keahlian1"> Programming</label>
            <label class="checkbox-inline" >
                <input type='checkbox' name='keahlian[]' value='Networking' id="keahlian2"> Networking</label>
            <label class="checkbox-inline" >
                <input type='checkbox' name='keahlian[]' value='Database' id="keahlian3"> Database</label>
            <label class="checkbox-inline" >
                <input type='checkbox' name='keahlian[]' value='Analysis' id="keahlian4"> Analysis</label>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="username">Username:</label>
            <div class="col-sm-4">
            <input type="email" class="form-control" name="username" placeholder="Input Username" id="username">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="password">Password:</label>
            <div class="col-sm-4"> 
            <input type="password" class="form-control" name="password" placeholder="Input Password" id="password">
            </div>
        </div>

        <div class="form-group"> 
            <label class="control-label col-sm-2" for="tg">Tunjangan Golongan:</label>
            <div class="col-sm-10"> 
            <label class="radio-inline"><input type="radio" id="tg" name="tg" value="3A"> 3A</label>
            <label class="radio-inline"><input type="radio" id="tg" name="tg" value="3B"> 3B</label>
            <label class="radio-inline"><input type="radio" id="tg" name="tg" value="3C"> 3C</label>
            <label class="radio-inline"><input type="radio" id="tg" name="tg" value="4A"> 4A</label>
            <label class="radio-inline"><input type="radio" id="tg" name="tg" value="4B"> 4B</label>
            <label class="radio-inline"><input type="radio" id="tg" name="tg" value="4C"> 4C</label>
            </div>
        </div>

        <div class="form-group"> 
            <label class="control-label col-sm-2" for="tp">Tunjangan Pangkat:</label>
            <div class="col-sm-10"> 
            <label class="radio-inline"><input type="radio" id="tp" name="tp" value="AA"> AA</label>
            <label class="radio-inline"><input type="radio" id="tp" name="tp" value="L"> L</label>
            <label class="radio-inline"><input type="radio" id="tp" name="tp" value="LK"> LK</label>
            <label class="radio-inline"><input type="radio" id="tp" name="tp" value="GB"> GB</label>
            </div>
        </div>

        <div class="form-group"> 
            <label class="control-label col-sm-2" for="pengalaman">Pengalaman Kerja:</label>
            <div class="col-sm-10"> 
            <textarea class="form-control" rows="5" style="resize: none" id="pengalaman" name="pengalaman"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="gp">Gaji Pokok:</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="gaji" name="gp">
            </div>
        </div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
			<button type="button" id="btnkirim" name="btnkirim" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-save"></span> Submit</button>
			<button type="button" id="btnview" name="btnview" class="btn btn-success"> <span class="glyphicon glyphicon-check"></span> Lihat</button>
			<button type="reset"  id='reset' class="btn btn-danger"> <span class="glyphicon glyphicon-off"></span> Reset</button>
			<a href="logout.php" class="btn btn-primary"><span class="glyphicon glyphicon-log-out"> Logout</a>
</div>
</div>
 </div>
</form>

</div>
</div>
</body>
</html>