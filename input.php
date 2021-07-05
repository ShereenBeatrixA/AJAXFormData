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


<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Perancangan Sistem IV - AJAX</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="bootstrap.min.css">
  	<script src="jquery.min.js"></script>
 	<script src="bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script> 
		function resetForm()
		{
			//kalau ada tombol reset
			$("#reset").click();

			//kalau tidak ada, hilangkan komentar di bawah ini
	
			/*$("#txtnama").val(""); 
			$("#jenis1").prop("checked", true)
			$("#txtemail").val("");
			$("#txtpesan").val("");*/
		}

		function loadForm()
		{
			$.ajax({
				type:"POST",
				url:"form_input.php",    
				success: function(output){                 
					$("#isiForm").html(output);
					resetForm();
				},
				error: function(){
					$("#info").html("Terjadi Kesalahan. Silahkan Coba Lagi");
				}
			});
		}
		
		function editData(nidn)
		{
			$.ajax({
				type:"POST",
				url:"form_edit.php",    
				data: "nidn=" + nidn,
				success: function(output){                 
					$("#isiForm").html(output);
					resetForm();
				},
				error: function(){
					$("#info").html("Terjadi Kesalahan. Silahkan Coba Lagi");
				}
			});		
		}
		
		function hapusData(nidn)
		{
			$.ajax({
				type:"POST",
				url:"proses_ajax.php",    
				data: "btndel=Delete&nidn=" + nidn,
				success: function(output){                 
					$("#info").html(output);
					loadForm();
					$("#btnview").click();
				},
				error: function(){
					$("#info").html("Terjadi Kesalahan. Silahkan Coba Lagi");
				}
			});		
		}
	</script>
	
</head>
<body onLoad="loadForm()">

	<div class="container" id="isiForm">

	</div>
	<div class="container">
		<div class="row">
			<label class="control-label col-sm-2 text-right" for="txtnama">Cari</label>
			<div class="col-sm-4" class="form-group">          
        		<select id='searchby' class="form-control">
					<option value='nama'>Cari Nama</option>
					<option value='jenis_kelamin'>Cari Jenis Kelamin</option>
					<option value='username'>Cari Email</option>
				</select>
      		</div>
			<div class="col-sm-5" class="form-group">          
        		<input type="text" class="form-control" id="key" placeholder="Masukkan Kata Pencarian" name="key">
      		</div>
			<div class="col-sm-1" class="form-group">    
				<button type="button" id="btncari" name="btncari" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> Cari</button>
			</div>
		</div>
	</div>
	<BR>
	<div class="container">
		<div class="row" id="info">
		<div class="jumbotron text-center">
			<h2><b>Tampilan Info</b></h2>
		</div>
		</div>
	</div>
</body>
</html>