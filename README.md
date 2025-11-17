# Lab8Web

# Membuat Database: Studi Kasus Data Barang 

**CREATE DATABASE latihan1**



<img width="289" height="444" alt="image" src="https://github.com/user-attachments/assets/12c3eace-08b0-4ad6-ae66-a6f8b5a6f7e2" />



# Membuat Tabel 

Code SQL
```
CREATE TABLE data_barang ( 
id_barang int(10) auto_increment Primary Key, 
kategori varchar(30), 
nama varchar(30), 
gambar varchar(100), 
harga_beli decimal(10,0), 
harga_jual decimal(10,0), 
stok int(4) 
);
```

Output





<img width="961" height="450" alt="image" src="https://github.com/user-attachments/assets/d59b6a3c-625f-479d-a91e-ed065f34c2c9" />





# Menambahkan Data 

Code SQL
```
INSERT INTO data_barang (kategori, nama, gambar, harga_beli, harga_jual, stok) 
VALUES ('Elektronik', 'HP Samsung Android', 'hp_samsung.jpg', 2000000, 2400000, 5), 
('Elektronik', 'HP Xiaomi Android', 'hp_xiaomi.jpg', 1000000, 1400000, 5), 
('Elektronik', 'HP OPPO Android', 'hp_oppo.jpg', 1800000, 2300000, 5);
```

Output



<img width="953" height="163" alt="image" src="https://github.com/user-attachments/assets/418db342-09c9-4d6c-b49b-1f063df909bc" />





# Membuat Program CRUD 

Buat folder lab8_php_database pada root directory web server (d:\xampp\htdocs)




<img width="474" height="314" alt="image" src="https://github.com/user-attachments/assets/b85afc5d-025d-4669-b6fd-63218ce3c739" />






# Untuk mengakses direktory tersebut pada web server dengan mengakses URL: http://localhost/lab8_php_database/ 




....................





# Membuat file koneksi database 

Buat file baru dengan nama koneksi.php 

Code
```
<?php 
$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$db   = "latihan1"; 
 
$conn = mysqli_connect($host, $user, $pass, $db); 
if ($conn == false) 
{ 
    echo "Koneksi ke server gagal."; 
    die(); 
} else echo "Koneksi berhasil"; 
?>
```

Output





<img width="764" height="253" alt="Screenshot 2025-11-17 195707" src="https://github.com/user-attachments/assets/9178b065-f1c0-47dc-83cd-3bb4d971608e" />






# Membuat file index untuk menampilkan data

Buat file baru dengan nama index.php

Code
```

```

Output





<img width="717" height="367" alt="Screenshot 2025-11-17 200448" src="https://github.com/user-attachments/assets/e6018349-ec70-4d0a-b9c4-5367e2dcf0ce" />







# Menambah Data (Create) 

Buat file baru dengan nama tambah.php 

Code 
```

```

Output





..................






# Mengubah Data (Update) 

Buat file baru dengan nama ubah.php 

Code
```

```

Output





..................





# Menghapus Data (Delete) 

Buat file baru dengan nama hapus.php 

Code
```

```

Output





..................





