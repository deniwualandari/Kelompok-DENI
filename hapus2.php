<?php
//panggil file koneksi.php yang sudah anda buat
$coon = mysqli_connect("localhost", "root", "", "agenda");
$result = mysqli_query($coon , "SELECT * FROM surat_keluar");

$id=$_GET['id'];   //ambil parameter GET id  dan buat variabel
//gunakan parameter get untuk menghapus data berdasarkan id produk
$hapus = mysqli_query($coon, "DELETE FROM surat_keluar where id ='$id'");
if($hapus){ //jika berhasil
    echo "<script>alert('Data Berhasil Di Hapus');document.location='surat_keluar.php'</script>";
}else{  //jika gagal
    echo "<script>alert('Data Gagal Di Hapus, Coba ulangi lagi');document.location='surat_keluar.php'</script>";
}
?>