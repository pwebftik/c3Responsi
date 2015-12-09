<?php


$host = "localhost";
$user = "root";
$pass = "";
$db_name = "db_praktikum";

if(!$koneksi = mysqli_connect($host,$user,$pass,$db_name)){
	die("koneksi putus karena : ".mysqli_connect_error());
}
// perintah menambahkan data 

		$sql = "SELECT * FROM user";
		if($query = mysqli_query($koneksi,$sql)){
		//yang akan muncul ketika query berhasil
			if(mysqli_num_rows($query)>0){
				echo "Username | Nama ";
			while ($data = mysqli_fetch_assoc($query)){
				echo $data['username']."|".$data['nama']."<br>";
				# code...
			}
				}else{
					//pesan yang akan muncul ketika query gagal di eksekusi
					echo "oh shit gagal !".mysqli_error($koneksi);
				}	
	
	}else {
		echo "salah alamat bro coba cek sini :";
}


?>