<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id_sup = $_POST['id_sup'];
  $nama_sup = $_POST['nama_sup'];
  $nama_barang = $_POST['nama_barang'];
  $nama_gudang = $_POST['nama_gudang'];
  $total_transaksi = $_POST['total_transaksi'];



$query = "INSERT INTO laporan (ID_SUP,NAMA_SUP,NAMA_BARANG,NAMA_GUDANG,TOTAL_TRANSAKSI) VALUES ('".$id_sup."','".$nama_sup."','".$nama_barang."','".$nama_gudang."','".$total_transaksi."')";
  $statement = oci_parse($con,$query);
  $r = oci_execute($statement,OCI_DEFAULT);
   $res = oci_commit($con);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Berhasil ditambahkan'); 
  window.location.href='laporan.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Gagal ditambahkan');
  window.location.href='laporan.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: laporan.php'); 
}