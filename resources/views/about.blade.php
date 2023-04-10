@extends('layouts.main')

@section('container')
  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
      <header class="section-header">
          <!-- <h2><span style="color:#3498DB;">-</span>About US<span style="color:#3498DB;">-</span></h2> -->
          <h2>About US</h2>
          <!-- <p>Odit est perspiciatis laborum et dicta</p> -->
        </header>
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>About Us</h3>
              <h4>Politeknik Balekambang Creative Studio</h4>
              <p>
                Deskripsi PCS Polibang
              </p>
              <div class="text-center text-lg-start">
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Read More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/about.png" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section>
    <!-- End About Section -->
    </main><!-- End #main -->
@endsection

   