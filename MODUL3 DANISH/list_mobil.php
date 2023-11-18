<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container mt-5" style="width:50%">
            <h1>List Mobil</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Mobil</th>
                        <th scope="col">Brand Mobil</th>
                        <th scope="col">Warna Mobil</th>
                        <th scope="col">Tipe Mobil</th>
                        <th scope="col">Harga Mobil</th>
                        <th scope="col">Aksi</th>
            <?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
            $query =  mysqli_query($conn, "SELECT * FROM showroom_mobil");
            
            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->
            if ($query) {
                while ($select = mysqli_fetch_assoc($query)) {
                    ?>
                    <tr>
                        <th scope="row"><?= $select['id'] ?></th>
                        <td><?= $select['nama_mobil'] ?></td>
                        <td><?= $select['brand_mobil'] ?></td>
                        <td><?= $select['warna_mobil'] ?></td>
                        <td><?= $select['tipe_mobil'] ?></td>
                        <td><?= $select['harga_mobil'] ?></td>
                        <td><a href="form_detail_mobil.php?id=<?= $select["id"]; ?>"><button class='btn btn-primary'>Detail</button></a></td>
                    </tr>
                    <?php
                }
            }                  
            //<!--  **********************  1  **************************     -->
            
            //<!--  **********************  2  **************************     -->
            else {
                echo "Tidak ada data dalam tabel";
            }  
        
            //<!--  **********************  2  **************************     -->
            ?>
        </div>
    </center>
</body>
</html>
