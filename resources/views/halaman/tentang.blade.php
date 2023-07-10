@extends('layout/aplikasi')

@section('konten')
<body>
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
				<li class="active"><a href="about.php">ABOUT</a></li>
				<li><a href="{{url('/admin/produk')}}">Alternatif</a></li>
            	<li><a href="{{url('/admin/kriteria')}}">Kriteria</a></li>
            	<li><a href="{{url('/admin/hitung')}}">SPK</a></li>
			</ul>
		</div>
	</header>

	<!-- label -->
	<section class="label">
		<div class="container">
			<p>Home / About</p>
		</div>
	</section>

	<!-- about -->
	<section class="about">
		<div class="container">
			<img src="https://i0.wp.com/langgam.id/wp-content/uploads/2022/04/PO-Pangeran-Bus.jpg?resize=800%2C450&ssl=1" width="100%">
			<h3>ABOUT</h3>
			<p>Website pemilihan po.bus ini merupakan sebuah website dimana para calon penumpang bisa memilih po.bus untuk perjalanannya dengan harga murah namun mendapati fasilitas yang baik.
				Saat ini, website pemilihan po.bus telah menjadi solusi praktis bagi para pengguna transportasi umum untuk memilih jenis bus yang sesuai dengan kebutuhan mereka dengan mudah dan cepat melalui platform online yang tersedia.</p>
			<h3>VISI</h3>
			<p>Menjadi platform terdepan dalam menyediakan layanan pemilihan bus yang aman, nyaman, dan terpercaya bagi para pengguna transportasi umum di seluruh Indonesia.</p>
			<h3>MISI</h3>
			<p>Menyediakan akses mudah dan cepat bagi para pengguna transportasi umum untuk memilih jenis bus yang sesuai dengan kebutuhan mereka melalui platform online yang aman dan terpercaya.</p>
			<p>Menjalin kerjasama yang baik dengan berbagai pihak terkait, seperti perusahaan otobus, pemerintah, dan masyarakat dalam meningkatkan kualitas layanan transportasi umum di Indonesia.</p>
			<p>Terus melakukan peningkatan dan inovasi dalam platform online kami untuk memberikan pengalaman yang lebih baik dan memuaskan bagi pengguna.</p>
			<p>Mengutamakan keamanan dan kenyamanan pengguna dalam memilih jenis bus yang tepat, dengan memberikan informasi yang akurat dan lengkap mengenai bus yang tersedia, rute yang dilalui, jadwal keberangkatan, dan harga tiket yang terjangkau.</p>
			<p>Menjadi sumber informasi terpercaya bagi masyarakat mengenai berbagai hal yang terkait dengan transportasi umum di Indonesia, termasuk regulasi pemerintah, ketersediaan bus, dan perusahaan otobus yang terpercaya.</p>
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
@endsection

    
