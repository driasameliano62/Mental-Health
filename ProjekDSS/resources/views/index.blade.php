@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="{{url('assets/img/hero-bg-abstract.jpg')}}" alt="" data-aos="fade-in" class="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-out">
          <div class="col-xl-7 col-lg-9 text-center">
            <h1>Stress Level Dectection</h1>
            <p>Website prediksi menggunakan klasifikasi Naive Bayes</p>
          </div>
        </div>
        <div class="text-center" data-aos="zoom-out" data-aos-delay="100">
          <a href="/form" class="btn-get-started">Mulai</a>
        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Naive Bayes<br></h2>
        <p>Naive Bayes adalah salah satu algoritma pembelajaran mesin berbasis probabilitas yang 
            digunakan untuk klasifikasi. Algoritma ini didasarkan pada Teorema Bayes dan disebut "naive" (naif) karena asumsi yang 
            dibuat. Semua fitur dianggap independen satu sama lain. Meskipun asumsi ini jarang berlaku di dunia nyata, algoritma ini sering bekerja 
            dengan baik dalam banyak aplikasi praktis.</p>
      </div><!-- End Section Title -->

     

    </section><!-- /About Section -->

    <!-- Stats Section --> 
    <section id="stats" class="stats section light-background">
      <div class="container section-title" data-aos="fade-up">
        <h2>Dataset</h2>
        <p>Dataset yang digunakan diambil dari Kaggle</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row"> 
          <div class="col-lg-6 col-md-6">
            <div class="row">
    
              <div class="col-lg-12 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end="1000" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Row</p>
                </div>
              </div><!-- End Stats Item -->
             
              <div class="col-lg-12 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Columns</p>
                </div>
              </div><!-- End Stats Item -->
    
            </div>

          </div>

          <div class="col-lg-6 col-md-6">
            <div class="row justify-content-center">
              <div class="col-lg-12 col-md-12">
                <div class="text-center">
                <img src="assets/img/dataset-cover.jpg" class="img-fluid mb-3" alt="">
                <a href="{{url('https://www.kaggle.com/datasets/bhadramohit/mental-health-dataset')}}">Mental Health Dataset</a>
              </div>
              </div><!-- End Stats Item -->
            </div>

          </div>
        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Team Section -->
    <section id="team" class="team section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Anggota terdiri dari 3 orang</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="{{url('assets/img/team/picture_11.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Abyan Shidqi</h4>
                <span>Anggota 1</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="{{url('assets/img/team/picture_11.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Dimas Falah</h4>
                <span>Anggota 2</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="{{url('assets/img/team/picture_11.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Drias Ameliano</h4>
                <span>Anggota 3</span>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->
@endsection