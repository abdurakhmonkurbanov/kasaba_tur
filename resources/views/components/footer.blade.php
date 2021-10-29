<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>{{ $about[0]->name}}
              </h3>
              
              <strong>Manzil:</strong> {{ $about[0]->adress}}<br><br>
                <strong>Tel:</strong> {{ $about[0]->phone}}<br>
                <strong>Email:</strong> {{ $about[0]->email}}<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Viloyatlar</h4>
            <ul>
              
              @foreach($useful_vil as $item)
                  <li><i class="bx bx-chevron-right"></i> 
                  <a  href="/vil/{{ $item->id }}">{!!$item->name!!}</a></li>
              @endforeach
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Diqqatga sazovor joylar</h4>
            <ul>
            @foreach($useful_place as $item)
                  <li><i class="bx bx-chevron-right"></i> 
                  <a  href="/vil/{{ $item->id }}">{!!$item->name!!}</a></li>
              @endforeach
            </ul>
          </div>

          

        </div>
      </div>
    </div>

    <div class="container">
        <div class="credits">
       
        Created by <a href="mailto:mr.kurbanov144@gmail.com">Mr.Kurbanov</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  