<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include('connect.php');
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id = $_GET['id'];
    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter
    function update($conn,$data){

    }
        // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
        $id = $data['id'];
        $nama = $data['nama_mobil'];
        $brand = $data['brand_mobil'];
        $warna = $data['warna_mobil'];
        $tipe = $data['tipe_mobil'];
        $harga = $data['harga_mobil'];
        // Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil
        $query = mysqli_query($conn, "UPDATE showroom_mobil SET
        nama_mobil = '$nama',
        brand_mobil = '$brand',
        warna_mobil = '$warna',
        tipe_mobil = '$tipe',
        harga_mobil = $harga'
        WHERE id = '$id'");
        // Eksekusi perintah SQL
        
        // Buatkan kondisi jika eksekusi query berhasil
        // Jika terdapat kesalahan, buatkan eksekusi query gagalnya

    // Panggil fungsi update dengan data yang sesuai

// Tutup koneksi ke database setelah selesai menggunakan database

?>