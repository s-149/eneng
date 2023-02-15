<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['Submit'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	
	$nik=$_POST['nik'];
	$nama1=$_POST['nama1'];
	$alamat1=$_POST['alamat1'];
	$kewarganegaraan=$_POST['kewarganegaraan'];
	$bidangusaha=$_POST['bidangusaha'];
	$kriteria1=$_POST['kriteria1'];
	$kriteria2=$_POST['kriteria2'];
	$kriteria3=$_POST['kriteria3'];
	$kriteria4=$_POST['kriteria4'];
	$kriteria5=$_POST['kriteria5'];
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input1 = mysql_query("INSERT INTO tbl_matrik VALUES(NULL, '$nik','$kriteria1','$kriteria2','$kriteria3','$kriteria4','$kriteria5')")or die(mysql_error());
	$input = mysql_query("INSERT INTO tbl_warga VALUES('$nik','$nama1', '$alamat1','$kewarganegaraan','$bidangusaha')") or die(mysql_error());
	//jika query input sukses
	if($input && $input1){
		
		echo 'Data berhasil di tambahkan! ';		//Pesan jika proses tambah sukses
		echo '<a href="input.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="input.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>