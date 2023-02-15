<?php
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
	
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
		//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	
	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
	$update = mysql_query("UPDATE tbl_matrik SET kriteria1='$kriteria1', kriteria2='$kriteria2',kriteria3='$kriteria3',kriteria4='$kriteria4',kriteria5='$kriteria5' 
		WHERE nik='$nik'") or die(mysql_error());

	$update1 = mysql_query("UPDATE tbl_warga SET nama='$nama1', alamat='$alamat1', kewarganegaraan='$kewarganegaraan', bidangusaha='$bidangusaha' WHERE nik='$nik'") or die(mysql_error());
	
	//jika query update sukses
	if($update && $update1){
		
		echo 'Data berhasil di simpan! ';		//Pesan jika proses simpan sukses
		echo '<a href="view.php">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}else{
		
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}

}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}
?>