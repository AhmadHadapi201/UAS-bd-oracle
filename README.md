# UAS BASIS DATA ORACLE - UNIVERSITAS PELITA BANGSA

# 1. Membuat Koneksi Oracle Menggunakan PHP
Hal yang pertama dilakukan untuk membuat program Oracle menggunakan PHP 
adalah dengan mengkoneksikan Oracle ke PHP.

    <?php   $user="dapi_201";   $pass="201";   $database="LOCALHOST/XE";   $con = oci_connect($user, $pass, $database);   if($con){    echo "Koneksi Sukses";  }   else{    $err = oci_error();    echo "Gagal". $err['text'];   } ?>

Jika Koneksi Berhasil, silahkan buka Browser web kalian dengan memasukkan 
link 'Localhost/Oracle/koneksi.php'.
**Catatan : Link Sesuai dengan folder dan Nama file yang sudah kalian simpah**
    
![Screenshot (12)](https://user-images.githubusercontent.com/95658885/144950848-8339b7de-4e4e-47e5-a73f-0c10a22931b8.png)

    
# 2. Membuat view
Selanjutnya adalah untuk membuat view. Sebenarnya saya membuat view lebih dari 5, Namun agar lebih mudah
disini hanya saya tampilkan 2 dari view yang sudah saya buat

    CREATE OR REPLACE view toko_jaksel as SELECT * FROM toko_1001 WHERE alamat = 'Jakarta Selatan'; 
    CREATE OR REPLACE view kap_gudang as SELECT * FROM gudang_1001 WHERE kapasitas = '70.000 pcs';   
    
Jika sudah dibuat maka akan coba kita tampilkan Hasil dari
view yang sudah kita buat dengan Query View tersebut
   
![Screenshot (17) - Copy](https://user-images.githubusercontent.com/95658885/144948726-01453bb6-c2b9-4581-bf0f-980a80ad4ec6.png)
![Screenshot (16)](https://user-images.githubusercontent.com/95658885/144948960-3e3f00ab-4893-4cf4-8c21-faa8bd72d96b.png)

# 3. Membuat Halaman Home/Beranda
Selanjutnya kita akan coba menampilkan view yang sudah dibuat kedalam project PHP
menggunakan sublime Text 3. Berikut tampilannya!
        
![Screenshot (7)](https://user-images.githubusercontent.com/95658885/144949190-a223e65e-a4ee-4f8a-8888-a2a3c4320c81.png)

# 4. Membuat Tabel Master
Setelah sukses koneksi, membuat view dan menjalankan di PHP maka kali ini kita 
akan membuat Tabel Master / Data Tabel dari Database yang sudah kita buat di Oracle.

![Screenshot (8)](https://user-images.githubusercontent.com/95658885/144949510-33a7d498-9fe1-4bbf-8dec-ab42f168118c.png)

![Screenshot (9)](https://user-images.githubusercontent.com/95658885/144949541-7036fc77-4194-4b77-a795-74ee11edc425.png)

![Screenshot (10)](https://user-images.githubusercontent.com/95658885/144949544-b90f5f02-d332-412a-b20d-20ce94c8d991.png)

![Screenshot (11)](https://user-images.githubusercontent.com/95658885/144949546-abe583dc-48a1-4a26-b4d8-18aa6a5bbe59.png)


# 5. Membuat Trigger dan CRUD (Create - Delete - Update) data Tabel - UNIVERSITAS PELITA BANGSA

# a. Membuat Trigger
Disini saya Membuat Trigger (baranglama). Trigger ini berfungsi untuk melihat daftar barang yang dihapus dari Tabel Master Barang yang sudah saya Buat sebelumnya.
Berikut Hasilnya :

![Screenshot (25)](https://user-images.githubusercontent.com/95658885/146010550-c4391957-260a-4486-a0aa-cfae982f8af6.png)
![Screenshot (28)](https://user-images.githubusercontent.com/95658885/146011008-08098615-7c63-43b1-a420-64cb15f7dd5b.png)

# b. Membuat CRUD data tabel Menggunakan PHP
Selanjutnya kita akan Membuat CRUD data tabel.
Untuk Source Code nya bisa kalian lihat di File Code diatas ya..

# c. Create
Untuk Create atau membuat dan Memasukan data baru pada Tabel di dalam database saya Memasukan data ini kedalam Tabel Master Toko.

![Screenshot (31)](https://user-images.githubusercontent.com/95658885/146012717-eea3b6b6-5887-48db-86db-6084fe1177ff.png)

Dan ini adalah Tampilan setelah data ditambahkan.

![Screenshot (38)](https://user-images.githubusercontent.com/95658885/146019028-b37bf826-bcbe-4774-82dc-d628f624c83f.png)

![Screenshot (32)](https://user-images.githubusercontent.com/95658885/146013888-8a8d10ca-ea08-412d-922f-71403b27d47c.png)

# d. Update
Selanjutnay adalah Update..
Disini saya akan mengupdate data "SHOPIA SHOP" dari Tabel Master Toko dan Contoh Lainnya adalah Mengubah Data "RAIHAN" dari Tabel Master Suplier..

![Screenshot (35)](https://user-images.githubusercontent.com/95658885/146017924-29853c27-50e9-499b-a9a8-be8b5f956610.png)

![Screenshot (36)](https://user-images.githubusercontent.com/95658885/146018385-413ee078-b83d-47a5-9ec0-56865a74d98c.png)

Setelah Sukses Maka akan Langsung Memunculkan Allert/Notification Seperti Ini..
![Screenshot (39)](https://user-images.githubusercontent.com/95658885/146020275-84f39f88-543b-4dde-b90e-b445016ad871.png)

# e. Delete
Untuk Menghapus sangatlah mudah, Berikut Prosesnya..
Silahkan Pilih data yang akan dihapus, Maka akan Memunculkan Notifikasi Seperti ini
![Screenshot (20)](https://user-images.githubusercontent.com/95658885/146020592-67e82f0c-b7b8-4899-b371-924fb94d2652.png)
Dan jika proses hapus Berhasil Maka akan Memunculkan Notifikasi Juga..
![Screenshot (21)](https://user-images.githubusercontent.com/95658885/146020977-e462a06b-b6ed-4060-b5e9-4293fcfbb74c.png)

# 6. Membuat Data Update Transaksi
# A. Update

Update suatu data sangat diperlukan dalam sebuah sistem dimana untuk mempercepat proses pembaruan sebuah data.

1) Tampilan Data Transaksi sebelum di Update.

![image](https://user-images.githubusercontent.com/95658885/147654172-fc4f5e5e-7b9d-4a98-9aa8-95f372d35445.png)


2) Selanjutnya, Dimana kita akan coba Mengupdate data dari Burhan yang akan dirubah Menjadi Miya.

![image](https://user-images.githubusercontent.com/95658885/147654281-3a65a53c-8b9e-4cb2-a0da-054956564f2b.png)

![image](https://user-images.githubusercontent.com/95658885/147654302-e72394df-a970-4730-9aef-735f5cfe0521.png)

![image](https://user-images.githubusercontent.com/95658885/147654326-a8c1f493-f2f2-492f-a0af-e0a54179a203.png)

# B. Insert Data Transaksi
Selanjutnya adalah melakukan Insert Data Transaksi

1) Data Sebelum di Insert Terbaru

![Screenshot (41)](https://user-images.githubusercontent.com/95658885/147655212-d54bab2f-d338-4885-bed1-0be00b7708b4.png)


2) Tampilan Form Data Transaksi

![Screenshot (44)](https://user-images.githubusercontent.com/95658885/147655247-e2df02c0-a6f3-44de-9c5a-e96f0ea5a773.png)


3) Tampilan Setelah Sukses

![Screenshot (45)](https://user-images.githubusercontent.com/95658885/147655274-b44217a6-c135-45d4-9612-e7ebe3d02184.png)

# Terimakasih..
