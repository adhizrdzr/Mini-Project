<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&family=Vidaloka&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
    <!-- CSS -->
    

    <title>STEI Bina Cipta Madani</title>
  </head>
  <body>
    <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
      <img class="img-fluid" src="img/69960061_103558497703856_4205201380001972224_n-removebg-preview.png" width="70" Height="50" alt="">
    <a class="navbar-brand text-white" href="#">STEI BINA CIPTA MADANI</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Tentang Kampus</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="details.php">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Pengumuman</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="form.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- Akhir Navbar -->

    <!-- form -->
    <div class="container">
        <form class="mt-4 my-4">
    <div class="form-group">
      <label for="firstname">Nama Depan</label>
      <input type="firstname" class="form-control" id="inputfirstname">
    </div>
    <div class="form-group">
      <label for="lastname">Nama Belakang</label>
      <input type="lastname" class="form-control" id="inputlastname">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="inputemail">
    </div>
    <div class="form-group">
      <label for="nomerhp">Nomer Hp</label>
      <input type="nomerhp" class="form-control" id="inputnomerhp">
    </div>
  <div class="form-group">
    <label for="inputgender">Gender</label>
    <input type="text" class="form-control" id="inputgender" placeholder="Pria / Wanita">
  </div>
  <div class="form-group">
    <label for="inputalamat">Alamat</label>
    <input type="text" class="form-control" id="inputalamat">
  </div>
    <div class="form-group">
      <label for="inputdesa">Desa</label>
      <input type="text" class="form-control" id="inputdesa">
    </div>
    <div class="form-group">
      <label for="inputkecamatan">Kecamatan</label>
      <input type="text" class="form-control" id="inputkecamatan">
    </div>
    <div class="form-group">
      <label for="inputdesa">Desa</label>
      <input type="text" class="form-control" id="inputdesa">
    </div>
    <div class="form-group">
      <label for="inputkodepos">Kode Pos</label>
      <input type="text" class="form-control" id="inputkodepos">
    </div>

    <form>
  <div class="align-items-center">
    <div class="my-2">
        <p>Prodi</p>
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Choose...</option>
        <option value="1">IT</option>
        <option value="2">Managemen</option>
        <option value="3">Akuntansi</option>
        <option value="3">Bimbingan Konseling</option>
        <option value="3">Agama Islam</option>
      </select>
    </div>
    </form>

  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Saya mengisi data dengan benar
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-success tombol">Daftar</button>
</form>
</div>
    <!-- akhir form -->


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  </body>
</html>