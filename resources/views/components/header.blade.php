<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent bg-primary opacity-75">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span><img class="logo"  src="/assets/img/logo.png"> Kasaba turizm</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
        @foreach ($menu as $item)
             @if($item->children->count() > 0)
                 <li class="dropdown"><a href="#"><span> {{$item->name}}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                       @foreach($item->children as $submenu)
                            <li><a class="p-1" href="/{!! $submenu->link !!}">{!! $submenu->name !!}</a></li>
                               @endforeach
                        </ul>
                  </li>
                @else
                     <li><a class="nav-link scrollto" href="/{{ $item->link }}">{{ $item->name }}</a></li>
                @endif
        @endforeach
        <li class="dropdown"><a href="#"><span> Tilni tanlang</span> <i class="bi bi-chevron-down"></i></a>
             <ul>
               <li><a  class="p-1" href="/#"> O'zbek</a></li> 
               <li><a  class="p-1" href="/#">Ўзбек</a></li> 
               <li><a  class="p-1" href="/#">Рус</a></li> 
              </ul>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero">
<video class="opacity-75 mt-4" src="/assets/video/best.mp4" autoplay loop playsinline muted></video>
    <div class="hero-container" data-aos="fade-up">
      <h1>KasabaTurizm.uz</h1>
      <h2>dunyo bo'ylab sayohat qilishing</h2>
      <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->
