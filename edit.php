<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Warga</title>
</head>
<body>
	<h1 class="style3"> Masukkan Data warga </h1>
	
	<h3>Edit Data Warga</h3>
	
	<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
	
	//include atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	$nik = $_GET['nik'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysql_query("SELECT * FROM tbl_warga, tbl_matrik WHERE tbl_matrik.nik=tbl_warga.nik and tbl_matrik.nik='$nik'");
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysql_num_rows($show) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo '<script>window.history.back()</script>';
		
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$data = mysql_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	
	}
	?>
	
	<form action="edit-proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>NIK</td>
				<td>:</td>
				<td><input type="text" name="nik" value="<?php echo $data['nik']; ?>" required></td>	<!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input type="text" name="nama1" size="30" value="<?php echo $data['nama']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Address</td>
				<td>:</td>
				<td><input type="text" name="alamat1" size="30" value="<?php echo $data['alamat']; ?>" required></td>
			</tr>
			<tr>
				<td>Nationality</td>
				<td>:</td>
				<td><input type="text" name="kewarganegaraan" size="30" value="<?php echo $data['kewarganegaraan']; ?>" required></td>
				</tr>
			<tr>
				<td>Business Fields</td>
				<td>:</td>
				<td><input type="text" name="bidangusaha" size="30" value="<?php echo $data['bidangusaha']; ?>" required></td>
				</tr>
<tr>
    <div class="form-group">
    <td>Receive Kredit Usaha Rakyat ( KUR )</td>
    <td>:</td>
    <td><select class="form-control" name="kriteria1" required>
    <option value="">Option</option>
    <option value="90">Yes</option>
    <option value="10">No</option>
    </td>
    </select>
  </div>
    </tr>
 <tr>
   <div class="form-group">
    <td>Receive Surat Keterangan Usaha ( SKU )</td>
    <td>:</td>
    <td><select class="form-control" name="kriteria2" required>
  <option value="">Option</option>
  <option value="80">Yes</option>
  <option value="10">No</option>
  </select>
  </td>
</div>
  </tr>
  <tr>
   <div class="form-group">
    <td>Revenue</td>
    <td>:</td>
    <td><select class="form-control" name="kriteria3" required>
    <option value="">Option</option>
    <option value="10">< Rp. 5.000.000</option>
    <option value="70">>Rp. 5.000.000</option>
      </select>
    </td>
  </div>
    </tr>
    <tr>
   <div class="form-group">
    <td>Expenditure</td>
    <td>:</td>
    <td><select class="form-control" name="kriteria4" required>
    <option value="">Option</option>
    <option value="10">< Rp. 5.000.000</option>
    <option value="70">>Rp. 5.000.000</option>
      </select>
    </td>
  </div>
    </tr>
   <tr>
   <div class="form-group">
    <td>Civil Serpant</td>
    <td>:</td>
    <td><select class="form-control" name="kriteria5" required>
  <option value="">Option</option>
  <option value="60">Yes</option>
  <option value="10">No</option>

  </select>
	</td>
  </tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>