@extends('layout/aplikasi')

@section('konten')
<!-- loader -->
<div class="bg-loader">
    <div class="loader"></div>
</div>

<!-- header -->
<div class="medsos">
    <div class="container">
        <ul>
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        </ul>
    </div>
</div>
<header>
    <div class="container">
        <h1><a href="index.php">PENGADUAN MASYARAKAT SLAWI KULON</a></h1>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li class="active"><a href="service.php">PENGADUAN</a></li>
            <li><a href="daftar_pengaduan.php">DAFTAR PENGADUAN</a></li>
            <li><a href="contact.php">CONTACT</a></li>
        </ul>
    </div>
</header>

<!-- label -->
<section class="label">
    <div class="container">
        <p>Home / Pengaduan</p>
    </div>
</section>

<!-- service -->
<section class="service">
    <div class="container">
        <h3>PENGADUAN</h3>
        
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <form action="simpan_pengaduan.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" name="nama" class="form-control" placeholder="Nama" required autofocus>
                      </div>
                      <div class="form-group">
                        <input type="text" name="no_hp" class="form-control" placeholder="No HP" required autofocus>
                      </div>
                    <div class="form-group">
                      <input type="text" name="judul_laporan"class="form-control" placeholder="Judul Laporan" required autofocus>
                    </div>
                    <div class="form-group">
                      <textarea name="isi_laporan" id="" cols="30" rows="10" class="form-control" placeholder="Tulis isi laporan disini..." required></textarea>
                    </div>
                    <div class="form-group">
                      Upload File : <input type="file" name="lampiran" accept="image/*" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
</section>

<!-- footer -->
<footer>
    <div class="container">
        <small>21090115_Fajran Al Kafi</small>
    </div>
</footer>


<script type="text/javascript">
    $(document).ready(function(){
        $(".bg-loader").hide();
    })
</script>
@endsection