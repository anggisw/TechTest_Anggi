<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "logical_test";
 
$koneksi = mysqli_connect($host,$user,$password,$database);
 
if($koneksi->connect_error){
	die("Koneksi gagal");
}

$sql = mysqli_query($koneksi,"SELECT tb_mahasiswa.mhs_id as id, mhs_nama, mk_nama, max(nilai) as nilai FROM `tb_mahasiswa` 
JOIN tb_mahasiswa_nilai ON tb_mahasiswa.mhs_id=tb_mahasiswa_nilai.mhs_id
JOIN tb_matakuliah ON tb_mahasiswa_nilai.mk_id=tb_matakuliah.mk_id
WHERE mk_kode = 'MK303' ");

foreach ($sql as $value) {
    echo 'Nama : '.$value['mhs_nama'].'<br>'.
         'Mata Kuliah : '.$value['mk_nama'].'<br>'.
         'Nilai : '.$value['nilai'];
    
}
?>