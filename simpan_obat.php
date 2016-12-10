<?php
	include 'koneksi.php';

    //tangkap data dari form
    
    $tgl_obat = $_POST['tgl_obat'];
    $no_eartag = $_POST['no_eartag'];
    $gejala_diag = $_POST['gejala_diag'];
    $nama_obat = $_POST['nama_obat'];
    $jml_obat = $_POST['jml_obat'];
    $nama_petugas = $_POST['nama_petugas'];

    //simpan data ke database
    
    $query = mysql_query("INSERT INTO `indone16_bunikasih`.`pengobatan` (`tgl_pengobatan`, `no_eartag_obat`, `gjl_diag`, `obat`, `jml_obat`,`petugas_obat`) 
                    VALUES ('$tgl_obat', '$no_eartag', '$gejala_diag', '$nama_obat', '$jml_obat','$nama_petugas')") or die(mysql_error());
    if ($query) {
        header('location:pengobatan.php?message=success');
    } 
	?>
	