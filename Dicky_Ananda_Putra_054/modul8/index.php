<?php


$host = "localhost";
$user = "root";
$pass = "";
$db_name = "db_praktikum";

if(!$koneksi = mysqli_connect($host,$user,$pass,$db_name)){
	die("koneksi putus karena : ".mysqli_connect_error());
}
// perintah menambahkan data 
if(isset($_GET['p'])){
	if( $_GET['p']=== 'tambah'){
		$sql = "INSERT INTO user (nama,username,password) VALUES";
		//data yang akan di input
		$sql.="('Dody','doddy.netter','1234567')";
		//data yang akan di input
		$sql.=",('Hilmy','amaterasi','7654321')";
		//eksekusi perintah sql dengan perintah mysqli_query
		if(mysqli_query($koneksi,$sql)){
			//pesan yang akan muncul ketika query berhasil
			echo "yes,data berhasil di input broooooo!!!!";
				}else{
					//pesan yang akan muncul ketika query gagal di eksekusi
					echo "oh shit gagal !".mysqli_error($koneksi);
				}	
	}
}
//cara akses dengan localhost/koneksi/?p=tambah
?>