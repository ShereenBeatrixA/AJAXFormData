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
$nidn = $_POST['nidn'];
	
	$querydata = mysqli_query($connect, "SELECT * FROM tabel_anggota WHERE nidn='$nidn'");
	$info = mysqli_fetch_array($querydata);
?>


<script>
	$(document).ready(function(){
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
		
		// kirim dengan metode POST ke proses.php 
		$.ajax({
			cache: false,
			type:"POST",
			url:"proses_ajax.php",    
			data: "btnupdate=Update&nidn=" + nidn + "&nama=" + nama + "&lahir=" + lahir + "&date=" + date + "&tel=" + tel + "&pendidikan=" + pendidikan + "&jk=" + jenis + "&keahlian=" + keahlian + "&username=" + username + "&password=" + password + "&tg=" + tg + "&tp=" + tp + "&pengalaman=" + pengalaman + "&gaji=" + gaji,
			success: function(output){                 
				$("#info").html(output);
				loadForm();
			},
			error: function(){
				$("#info").html("Terjadi Kesalahan. Silahkan Coba Lagi");
			}
		});
	});
	});
</script>
</script>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Perancangan Sistem IV - AJAX</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initialscale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h2>Edit Data Anggota</h2>
<form class="form-horizontal" method="post" action="form_edit.php">
        <div class="form-group">
            
            <div class="col-sm-4">
            <input type="hidden" class="form-control" id="nidn" placeholder="Masukkan NIDN" name="nidn" value="<?=$info['nidn']?>">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="nama">Nama:</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value=" <?=$info['nama']?>">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2"  for="tempat">Tempat Lahir:</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="lahir" placeholder="Masukkan Tempat Lahir" name="tempat" value="<?=$info['tempat']?>">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="lahir">Tanggal Lahir:</label>
            <div class="col-sm-4">
            <input type="date" class="form-control" id="date" placeholder="Masukkan Tanggal Lahir" name="lahir" value="<?=$info['lahir']?>">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="telepon">Nomor Telepon:</label>
            <div class="col-sm-4"> 
            <input type="tel" class="form-control" id="tel" placeholder="Masukkan Nomor Telepon" name="telepon" value="<?=$info['telepon']?>">
            </div>
        </div>

        
        <div class="form-group"> 
            <label class="control-label col-sm-2" for="pendidikan">Pendidikan:</label>
            <div class="col-sm-10">  <select class="form-control" id="pendidikan" name="pendidikan">
                <option value='-' <?php if 
                   ($info['pendidikan'] == "-") echo "selected"; ?>>--Masukkan Pendidikan--</option>
                <option value='S1' <?php if 
                    ($info['pendidikan'] == "S1") echo "selected"; ?>>S1</option>
                <option value='S2' <?php if 
                    ($info['pendidikan'] == "S2") echo "selected"; ?>>S2</option>
                <option value='S3' <?php if 
                    ($info['pendidikan'] == "S3") echo "selected"; ?>>S3</option>
                <option value='lainnya' <?php if 
                    ($info['pendidikan'] == "lainnya") echo "selected"; 
                ?>>Lainnya</option>
                </select>
            </div>
        </div>
        
        <div class="form-group"> 
            <label class="control-label col-sm-2" for="jk">Jenis Kelamin:</label>
            <div class="col-sm-10"> 
            <label class="radio-inline" ><input type="radio" id="jk" name="jk" value="Pria" <?php if 
                ($info['jenis_kelamin'] == "Pria") echo "checked"; ?>> Pria</label>
            <label class="radio-inline"><input type="radio" id="jk" name="jk" value="Wanita" <?php if 
                ($info['jenis_kelamin'] == "Wanita") echo "checked"; ?>> Wanita</label>
            </div>
        </div>

        <div class="form-group"> 
            <label class="control-label col-sm-2" for="ahli">Spesialisasi:</label>
            <div class="col-sm-10"> 
                <label class="checkbox-inline" ><input type='checkbox' name='keahlian[]' value='Programming' id="keahlian1" 
                    <?php if (preg_match("/Programming/", $info['keahlian'])) echo "checked"; ?>> Programming</label>
                <label class="checkbox-inline" ><input type='checkbox' name='keahlian[]' value='Networking' id="keahlian2" 
                    <?php if (preg_match("/Networking/", $info['keahlian'])) echo "checked"; ?>> Networking</label>
                <label class="checkbox-inline" ><input type='checkbox' name='keahlian[]' value='Database' id="keahlian3" 
                    <?php if (preg_match("/Database/", $info['keahlian'])) echo "checked"; ?>> Database</label>
                <label class="checkbox-inline" ><input type='checkbox' name='keahlian[]' value='Analysis' id="keahlian4" 
                <?php if (preg_match("/System/", $info['keahlian'])) echo "checked"; ?>> Analysis</label>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="username">Username:</label>
            <div class="col-sm-4">
            <input type="email" class="form-control" name="username" placeholder="Input Username" id="username" value="<?=$info['username']?>">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="password">Password:</label>
            <div class="col-sm-4"> 
            <input type="password" class="form-control" name="password" placeholder="Input Password" id="password" value="<?=$info['password']?>">
            </div>
        </div>

        <div class="form-group"> 
            <label class="control-label col-sm-2" for="tg">Tunjangan Golongan:</label>
            <div class="col-sm-10"> 
            <label class="radio-inline" ><input type="radio" id="tg" name="tg" value="3A" <?php if 
                ($info['tunjangan_golongan'] == "3A") echo "checked"; ?>> 3A</label>
            <label class="radio-inline"><input type="radio" id="tg" name="tg" value="3B" <?php if 
                ($info['tunjangan_golongan'] == "3B") echo "checked"; ?>> 3B</label>
            <label class="radio-inline"><input type="radio" id="tg" name="tg" value="3C" <?php if 
                ($info['tunjangan_golongan'] == "3C") echo "checked"; ?>> 3C</label>
            <label class="radio-inline" ><input type="radio" id="tg" name="tg" value="4A" <?php if 
                ($info['tunjangan_golongan'] == "4A") echo "checked"; ?>> 4A</label>
            <label class="radio-inline"><input type="radio" id="tg" name="tg" value="4B" <?php if 
                ($info['tunjangan_golongan'] == "4B") echo "checked"; ?>> 4B</label>
            <label class="radio-inline"><input type="radio" id="tg" name="tg" value="4C" <?php if 
                ($info['tunjangan_golongan'] == "4C") echo "checked"; ?>> 4C</label>
            </div>
        </div>

        <div class="form-group"> 
            <label class="control-label col-sm-2" for="tp">Tunjangan Pangkat:</label>
            <div class="col-sm-10"> 
            <label class="radio-inline" ><input type="radio" id="tp" name="tp" value="AA" <?php if 
                ($info['tunjangan_pangkat'] == "AA") echo "checked"; ?>> AA</label>
            <label class="radio-inline" ><input type="radio" id="tp" name="tp" value="L" <?php if 
                ($info['tunjangan_pangkat'] == "L") echo "checked"; ?>> L</label>
            <label class="radio-inline" ><input type="radio" id="tp" name="tp" value="LK" <?php if 
                ($info['tunjangan_pangkat'] == "LK") echo "checked"; ?>> LK</label>
            <label class="radio-inline" ><input type="radio" id="tp" name="tp" value="GB" <?php if 
                ($info['tunjangan_pangkat'] == "GB") echo "checked"; ?>> GB</label>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="gp">Gaji Pokok:</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="gaji" name="gp" value="<?=$info['gaji_pokok']?>">
            </div>
        </div>
        
        <div class="form-group"> 
            <label class="control-label col-sm-2" for="pengalaman">Pengalaman:</label>
            <div class="col-sm-10"> 
            <textarea class="form-control" rows="5" style="resize: none" id="pengalaman" name="pengalaman"><?=$info['pengalaman']?></textarea>
            </div>
        </div>


        <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
            <button type="button" id="btnupdate" name="btnupdate" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-save"></span> Edit</button>
            
            </div>
        </div>
    </div>
    </form>
<div class="col-sm-10 col-sm-offset-1">


</div>
</div>
</body>
</html>