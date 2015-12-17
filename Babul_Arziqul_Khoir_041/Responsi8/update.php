<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "FTIK";
if(!$koneksi = mysqli_connect($host,$user,$pass,$db_name)){
	die("koneksi putus karena : ".mysqli_connect_error());
}
// perintah menambahkan data 
if(isset($_GET['id'])){
	if( $_GET['id']=== 'update'){
		//perintah dasar update data
		$id = $_GET['id'];
		$sql = "UPDATE user SET username = 'jaka',nama='sembung' where id='1'";
		
		if(mysqli_query($koneksi,$sql)){
			//pesan yang akan muncul ketika query berhasil
			echo "yes,data berhasil di input broooooo!!!!";
				}else{
					//pesan yang akan muncul ketika query gagal di eksekusi
					echo "oh shit gagal !".mysqli_error($koneksi);
				}	
	
	}else {
		echo "salah alamat bro coba cek sini :";
}
}
?>