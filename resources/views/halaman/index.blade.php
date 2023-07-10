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
        <h1><a href="">WEBSITE SISTEM INFORMASI PEMILIHAN PO.BUS</a></h1>
        <ul>
            <li class="active"><a href="index.php">HOME</a></li>
            <li><a href="tentang">ABOUT</a></li>
            <li><a href="{{url('/admin/produk')}}">Alternatif</a></li>
            <li><a href="{{url('/admin/kriteria')}}">Kriteria</a></li>
            <li><a href="{{url('/admin/hitung')}}">SPK</a></li>
        </ul>
    </div>
</header>

<!-- banner -->
<section class="banner">
    <h2>SELAMAT DATANG DI WEBSITE SISTEM INFORMASI PEMILIHAN PO.BUS</h2>
</section>

<!-- about -->
<section class="about">
    <div class="container">
        <h3>ABOUT</h3>
        <p>Website pemilihan po.bus ini merupakan sebuah website dimana para calon penumpang bisa memilih po.bus untuk perjalanannya dengan harga murah namun mendapati fasilitas yang baik.
            Saat ini, website pemilihan po.bus telah menjadi solusi praktis bagi para pengguna transportasi umum untuk memilih jenis bus yang sesuai dengan kebutuhan mereka dengan mudah dan cepat melalui platform online yang tersedia. </p>
    </div>
</section>


<!-- service -->
<section class="service">
    <div class="container">
        <h3>Daftar Po.Bus</h3>
        <div class="card">
            <h4>Sinar Jaya</h4>
            <img src="data:image/jpeg;base64,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" width="30%" height="200px">
            <p>
                PT Sinar Jaya Megah Langgeng (menjalankan bisnisnya sebagai Sinar Jaya) adalah perusahaan bus Indonesia yang berasal dari Kabupaten Bekasi, Jawa Barat.
            </p>
            <a class="btn btn-primary" href="https://www.sinarjayagroup.co.id/index.php/service/47-info-pembelian-tiket-bus-sinar-jaya">Show Details</a>
        </div>
        <div class="card">
            <h4>Gunung Harta</h4>
            <img src="data:image/png;base64,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" width="30%" height="200px">
            <p>
                Gunung Harta adalah salah satu operator bus antarkota dan pariwisata yang berbasis di Tabanan, Bali (GHT) dan Malang, Jawa Timur (GHTS).
            </p>
            <a class="btn btn-primary" href="https://gunungharta.com/web/">Show Details</a>
        </div>
        <div class="card">
            <h4>Po.Haryanto</h4>
            <img src="https://1.bp.blogspot.com/-qD-l5HJF5Tc/YOqOOIEv3rI/AAAAAAAAFf8/MpkE9MfacUA2cPBo705ZfSdk_NllPApfACLcBGAsYHQ/s1600/Logo%2BBus%2BPO%2BHaryanto.png" width="30%" height="200px"></p>
            <p>
                PT Haryanto Motor Indonesia (menjalankan bisnis sebagai PO Haryanto) adalah sebuah perusahaan bus antarkota dan pariwisata yang berasal dari Kabupaten Kudus, Jawa Tengah.
            </p>
            <a class="btn btn-primary" href="">Show Details</a>
        </div>
        <div class="card">
            <h4>Rosalia Indah</h4>
            <img src="https://kisikisi-root.nos.jkt-1.neo.id/assets/images/logo/rosalia_indah_transport_pt_1564202496.jpg" width="30%" height="200px"></p>
            <p>
                PT Rosalia Indah Transport (menjalankan bisnisnya sebagai Rosalia Indah) adalah sebuah operator bus asal Indonesia yang berkantor pusat di wilayah Palur, Jaten, Karanganyar, Jawa Tengah. Perusahaan ini merupakan bagian dari Rosalia Indah Group.
            </p>
            <a class="btn btn-primary" href="https://www.rosalia-indah.co.id/web/#header4-3">Show Details</a>
        </div>     
        <div class="card">
            <h4>Juragan 99 Trans</h4>
            <img src="https://www.j99corp.com/wp-content/uploads/2022/10/Layer-90-1.png" width="30%" height="200px">
            <p>
                Juragan99 Trans adalah perusahaan jasa yang bergerak dibidang transportasi darat , dengan memiliki 14 armada bus pariwisata yang terbagi menjadi 1 armada Luxury, 2 armada Premium, dan 11 armada Executive.
            </p>
            <a class="btn btn-primary" href="https://tiketjuragan99.id/">Show Details</a>
        </div>
    </div>
</section>

<!-- footer -->
<footer>


    <div class="title">
    <h1>Kritik dan saran</h1>
    </div>
    <div class="form">
    <form action="kritik.php" id="form-contact" method="POST">
    <input type="text" placeholder="Masukkan nama anda" id="nama"
    name="nama"/>
    <br />
    <input type="email" placeholder="Masukkan no hp anda" id="no" name="no_hp"/>
    <br />
    <input type="text" placeholder="Apa kritik dan saran anda" id=
    "pesan" name="pesan"/><br />
    <input type="submit" id="kirim" value="KIRIM" name="kirim" />
    </form>
    </div>

    <div class="form">
    <div class="container">
    <h3>Cookie</h3>
    <form action="" method="POST">
    <input type="text" name="cokinama"><br>
    <input type="submit" name="submit" value="kirim"><br>
    </form>
    </div>
    </div>
    
    <div class="container">
        <small>21090115_Fajran Al Kafi</small>
    </div>
    
    </div>
    </div>
    </div>
    
</footer>


<script type="text/javascript">
    $(document).ready(function(){
        $(".bg-loader").hide();
    })
</script>  
<script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
    </script>
@endsection
 
    