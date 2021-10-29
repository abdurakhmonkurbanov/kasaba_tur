<!DOCTYPE html>
<html lang="en">

<head>
  @yield('top')
</head>

<body>

  @yield('header')

  
  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Bizning turpaketlarimiz</h2>
          
        </div>

        <div class="row">
          @foreach ($tourpaket as $item)
              <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-3">
              <div class="icon-box" data-aos="fade-up">
                <div class="icon"><i class="bx bx-location-plus"></i></div>
                <h4 class="title"><a href="">{!! $item->name !!}</a></h4>
                <p class="description">
                  {!! Str::limit($item->title, 100) !!}</p>
              </div>
            </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts  section-bg">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ count($places) }}" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Diqqatga sazovor joylar</strong> (saytga kiritilgan)</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ count($tourpaket) }}" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Biz taklif etgan turpaketlar</strong></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ count($orders) }}" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Murojatlar soni</strong></p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Viloyatlar</h2>
          
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            @foreach ($vils as $item)
             <div class="swiper-slide">
             <div class="testimonial-item">
               <p>
                 <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                 {{ Str::limit($item->title, 150, '...') }}
                 <i class="bx bxs-quote-alt-right quote-icon-right"></i>
               </p>
               <img src="/assets/img/maps/{{ $item->img }}" class="testimonial-img" alt="">
               <h3>{!! $item->name !!}</h3>
               
             </div>
           </div><!-- End testimonial item -->
           @endforeach

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>{!!  $about[0]->text  !!}</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Manzil</h3>
              <p>{!!  $about[0]->adress  !!}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>{!!  $about[0]->email  !!}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call markazi</h3>
              <p>{!!  $about[0]->phone  !!}</p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6 ">
            https://goo.gl/maps/6iAJtTaZiesosh9k7
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  @yield('footer')
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="/assets/vendor/aos/aos.js"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/assets/vendor/php-email-form/validate.js"></script>
<script src="/assets/vendor/purecounter/purecounter.js"></script>
<script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="/assets/js/main.js"></script>
</body>

</html>