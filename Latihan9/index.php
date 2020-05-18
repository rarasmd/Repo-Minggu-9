<html>
<title>
    Latihan 9_02726
</title>

<head>
    <link rel="stylesheet" href="assets/bootstrap.min.css">

</head>

<body>
    <div class="container-sm">


    <center>    
    <div class="col-md-10">
            <br>

            <nav class="navbar navbar-expand-lg navbar-light bg-info">
                <a class="navbar-brand" href="index.php">CRUD - PDO ( 02726 )</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active" >
                            <a class="btn btn-warning" href="index.php">Home</a>
                        </li>
                        <ul>
                        <li class="nav-item">
                            <a class="btn btn-warning" href="tampil.php">Sekolah</a>
                        </li>

                    </ul>
                    </ul>

                </div>
            </nav>
            <br>
            <br>

            <form action="proses.php?aksi=tambah" method="post" enctype="multipart/form-data">
                <?php
                ?>
                    <div class="col-md-10">

                        <div class="form-group">
                            <label for="nama">Nama </label>
                            <input type="text" class="form-control" id="nama" name="nama" required>

                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="logo">Logo</label>
                            <input type="file" class="form-control" name="file" id="logo" value="<?= $datas['logo']; ?>" required>
                        </div>


                        <td><input type="submit" value="Simpan"></td>
                    </div>

            </form>
        </div>
    </div>
</body>

</html>