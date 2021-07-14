
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru</title>
</head>
<body>
    <header>
    <h3>Pendaftaran Siswa Baru</h3>
    <h1>SMK CODING</h1>
    </header>
    <h4>Menu</h4>
    <nav>
        <?php if(isset($_GET['status'])):?>
        <p>
            <?php
            if($_GET['status'] == 'sukses'){
                echo  "pendaftaran berhasil";
            }else{
                echo  "pedaftaran gagal";
            }
            ?>
        </p>
      <?php endif;?>
    <ul>
    <a href="form-daftar.php">Daftar Baru</a>
    <a href="list-siswa.php">Pendaftar</a>
    </ul>
    </nav>
</body>
</html>
