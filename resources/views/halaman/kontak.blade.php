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
        <h1><a href="index.php">WEBSITE SISTEM INFORMASI PEMILIHAN PO.BUS</a></h1>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="tentang">ABOUT</a></li>
           
            <li class="active"><a href="contact.php">CONTACT</a></li>
        </ul>
    </div>
</header>

<!-- label -->
<section class="label">
    <div class="container">
        <p>Home / Contact</p>
    </div>
</section>

<!-- service -->
<section class="service">
    <div class="container">
        <h3>CONTACT INFO</h3>
        <div class="box">
            <div class="col-4">
                <h4>Address</h4>
                <p>Jl.Wahidin Slawi Kulon, Kec. Slawi, Kabupaten Tegal, Jawa Tengah 52419</p>
            </div>
            <div class="col-4">
                <h4>Email</h4>
                <p>fajrankafi01@gmail.com</p>
            </div>
            <div class="col-4">
                <h4>Telp.</h4>
                <p>(021) 12345678</p>
            </div>
            <div class="col-4">
                <h4>Hp</h4>
                <p>08570893500</p>
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