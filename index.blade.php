@extends('layouts.master')

@section('content')
	<div class="slider" id="home">
  	 <div class="slider_container">
  		<div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
				   <article style="position: absolute; width: 100%; opacity: 0;">
				   	 <div class="banner-wrap">
				   		 <div class="slider-left">
						    <h1>Scholarship Nurul Fikri</h1>
							<p class="top">Mencerdaskan Kehidupan Bangsa!</p>
						    <ul class="button">
						       <li><a href="#">Gabung Bersama Kami!</a></li>
							</ul>
						 </div>
					 </div>
					</article>
				   <article style="position: relative; width: 100%; opacity: 1;">
				   	 <div class="banner-wrap">
				   		 <div class="slider-left">
						    <h1>Scholarship Nurul Fikri</h1>
							<p class="top">Beasiswa STT Terpadu Nurul Fikri</p>
						    <ul class="button">
						       <li><a href="#">Gabung Bersama Kami!</a></li>
							</ul>
						 </div>
					   </div>
				   </article>
				</div>
              </div>
            	 <script src="js/jquery.wmuSlider.js"></script>
				       <script>
       						 $('.example1').wmuSlider();
   						</script>
           </div>
       </div>
       <div class="main">
				 <div class="approach" id="app">
					 <div class="container">
							<div class="gallery-head text-center">
							 <h3>Apa Itu SNF ?</h3>
							 <p>Scholarship Nurul Fikri Adalah Sebuah website untuk pendaftaran beasiswa STT Nurul Fikri untuk Mahasiswa baru</p>
							 <span> </span>
						 </div>
						 <!-- content -->

					 </div>
				 </div>
       <div id="about" class="about">
       		<div class="container">
       		   <div class="gallery-head text-center">
				  <h3>Keuntungannya bergabung scholarship Nurul Fikri</h3>
				  <span> </span>
			    </div>
       			<div class="row text-center">
       				<div class="col-md-4 about_grid">
       					<i class="icon1"> </i>
       					<h3><a href="#">Kuliah Gratis</a></h3>
       					<p>Calon Mahasiswa yang mendapatkan Scholarship fikri ini mendapatkan biaya kuliah secara gratis serta mendapatkan tunjangan setiap bulannya</p>
       				</div>
       				<div class="col-md-4 about_grid">
       					<i class="icon2"> </i>
       					<h3><a href="#">Sarjana Komputer</a></h3>
       					<p>Calon Mahasiswa akan mendapatkan sarjana Komputer terakreditasi dengan perusahaan-perusahaan IT ternama </p>
       				</div>
       				<div class="col-md-4 about_grid">
       					<i class="icon3"> </i>
       					<h3><a href="#">Siap Kerja</a></h3>
       					<p>STT NF memiliki kerjasama dengan banyak perusahaan yang membuka lapangan kerja dan siap menampung para mahasiswa setelah lulus</p>
       				</div>
       			</div>
       		</div>
       	</div>
       </div>
@endsection
