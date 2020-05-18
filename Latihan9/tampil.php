<?php
include 'database.php';
$mysqli = new Databases();

?>
<html>
    <title>
        Latihan 9 02726
    </title>

<head>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>

<body>
<div class="container-sm">

  
<div class="col-md-12">
        <br>

        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <a class="navbar-brand" href="index.php">CRUD - PDO ( 02726 )</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active" >
                            <a class="btn btn-success" href="index.php">Home</a>
                        </li>
                        <ul>
                        <li class="nav-item">
                            <a class="btn btn-success" href="tampil.php">Sekolah</a>
                        </li>

                    </ul>
                    </ul>

                </div>
            </nav>
            <br>
            <br>

    <table class="table table-bordered table-active">
        <thread>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>FOTO</th>
                <th>AKSI</th>
            </tr>
        </thread>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($mysqli->tampilkan() as $tampils) : ?>
                <tr>
                <td><?php echo $no++; ?></td>
                    <td><?php echo $tampils['nama'] ?></td>
                    <td><?php echo $tampils['alamat'] ?></td>
                    <td>
                        <img src="assets/logo/<?php echo $tampils['logo']; ?>" class="img-circle" width="100"></td>
                    <td>
                        <a href="pdf.php?id=<?php echo $tampils['id']; ?>" target="_blank" class="btn btn-info"> PDF </a>
                        <a href="cetak.php?id=<?php echo $tampils['id']; ?>" class="btn btn-success"> Download </a>
                        <a href="edit.php?id=<?php echo $tampils['id']; ?>&aksi=update" class="btn btn-info"> EDIT </a>
                        <a href="proses.php?id=<?php echo $tampils['id']; ?>&aksi=hapus" class="btn btn-success"> HAPUS </a>

                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>