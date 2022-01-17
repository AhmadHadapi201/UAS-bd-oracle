<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id_sup = $_POST['id_sup'];
  $nama_toko = $_POST['nama_sup'];
  $nama_barang = $_POST['nama_barang'];
  $nama_gudang = $_POST['nama_gudang'];
  $total_transaksi = $_POST['total_transaksi'];
  

 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  laporan  SET NAMA_SUP ='".$nama_sup."', NAMA_BARANG ='".$nama_barang."', NAMA_GUDANG ='".$nama_gudang."', TOTAL_TRANSAKSI ='".$total_transaksi."' WHERE ID_SUP ='".$id_sup."'";
	$statement = oci_parse($con,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($con) ;
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data Gudang berhasil diubah'); window.location.href='laporan.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data Gudang gagal diubah'); window.location.href='laporan.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: laporan.php'); 
}