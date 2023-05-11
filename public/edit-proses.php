<?php
	if(isset($_POST['nim']) && isset($_POST['nama']) && isset($_POST['jenis_kelamin']) && isset($_POST['angkatan']) && isset($_POST['alamat']) && isset($_POST['no_hp']) && isset($_POST['simpan']))
	{
		include('koneksi.php');

        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $tpt_lahir = $_POST['tpt_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $alamat = $_POST['alamat'];

		$input = mysql_query("UPDATE biodata SET nim = '$nim', nama = '$nama', jenis_kelamin = '$jenis_kelamin', tempat lahir = '$tpt_lahir', tanggal lahir = '$tgl_lahir', alamat = '$alamat' WHERE id_mahasiswa = '$id'") or die(mysql_error());

		if($input){
			echo "DATA BERHASIL DI UPDATE";
			echo "<a href='index.php'>Back</a>";
		}
		else{
			echo "GAGAL MENGUPDATE DATA";
			echo "<a href='index.php'>Back</a>";
		}
	}
	else
	{
		echo "Isikan Semua Data";
		echo "<a href='index.php'>Back</a>";
	}
?>