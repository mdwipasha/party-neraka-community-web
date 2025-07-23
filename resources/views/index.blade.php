<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Party Neraka</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
  <script defer src="{{ asset('assets/js/script.js') }}"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!-- AOS CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>
<body>

  <x-header></x-header>

    <section class="hero" id="home">
      <div class="overlay"></div>
      <div class="hero-content" data-aos="fade-up">
        <img src="{{ asset('assets/image/logo-partner.png') }}" alt="Logo Besar" class="hero-logo" data-aos="fade-down" data-aos-delay="200" />
        <div class="hero-text" data-aos="fade-up" data-aos-delay="400">
          <h1>Hallo,<br><span>We Are Party Neraka</span></h1>
          <a href="#members"><button id="scrollBtn" data-aos="zoom-in" data-aos-delay="600">Scroll Down</button></a>
        </div>
      </div>
    </section>      

  <section id="members" class="members">
    <h2>Member</h2>
    <div class="member-grid">
    @foreach ($members as $index => $member)
      <div class="member-card {{ $index >= 5 ? 'extra-member d-none' : '' }}" data-aos="fade-up" data-aos-delay="{{ 100 * $index }}">
        <div class="card-inner">
          <!-- Front -->
          <div class="card-front">
            <div class="avatar">
              <img src="{{ $member->image ? Storage::url($member->image) : asset('assets/image/no-profile.jpg') }}" alt="{{ $member->name }}">
            </div>
          </div>
          <!-- Back -->
          <div class="card-back">
            <div class="top-section"></div>
            <div class="avatar-back">
              <img src="{{ $member->image ? Storage::url($member->image) : asset('assets/image/no-profile.jpg') }}" alt="{{ $member->name }}">
            </div>
            <h3 class="name">{{ $member->name }}</h3>
            <p class="role">{{ $member->bio }}</p>
            <!-- <p class="role">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
            <div class="social-icons">
                <a href="{{ $member->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="{{ $member->tiktok }}" target="_blank"><i class="fab fa-tiktok"></i></a>
                <a href="{{ $member->youtube }}" target="_blank"><i class="fab fa-youtube"></i></a>
              </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    @if (count($members) >= 5)
      <div class="show-more-container">
        <button id="showMoreBtn" class="show-more-btn">Show More</button>
      </div>
    @endif
    @if ($members->isEmpty())
    <div class="nomember">
      <div class="member-card">
        <div class="card-inner">
          <!-- Front -->
          <div class="card-front">
            <div class="avatar">
              <img src="{{ asset('assets/image/no-profile.jpg') }}" alt="No Profile">
            </div>
          </div>
          <!-- Back -->
          <div class="card-back">
            <div class="top-section"></div>
            <div class="avatar-back">
              <img src="{{ asset('assets/image/no-profile.jpg') }}" alt="No Profile">
            </div>
            <h3 class="name">Unknown</h3>
            <p class="role">####</p>
            <!-- <p class="role">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
            <div class="social-icons">
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
              </div>
          </div>
        </div>
      </div>
    </div>
    @endif
  </section>  

  <section id="live" class="live-now">
    <h2 data-aos="zoom-in" data-aos-delay="100">Live Now</h2>
    <div class="swiper live-swiper">
      <div class="swiper-wrapper">
        @foreach($liveChannels as $live)
        <div class="swiper-slide live-card" data-aos="zoom-in" data-aos-delay="200">
            <a href="https://www.youtube.com/watch?v={{ $live['videoId'] }}" target="_blank">
            <img src="{{ $live['thumbnail'] }}" alt="{{ $live['channelTitle'] }}">
            <p><strong>{{ $live['channelTitle'] }}</strong> is <span style="color:red">LIVE 🔴</span></p>
            <small>{{ $live['title'] }}</small>
          </a>
        </div>
        @endforeach
      </div>
      <!-- Navigasi -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    @if (count($liveChannels) === 0 )
    <div class="nolive">
      <div class="live-card" data-aos="zoom-in" data-aos-delay="200">
        <div>
            <img src="{{ asset('assets/image/no-image.jpg') }}" alt="No Live">
            <p><strong>BELUM ADA YANG LIVE (╥﹏╥)</strong></p>
            <small>Unknown</small>
        </div>    
      </div>
    </div>
  @endif
  </section>
  
  <section id="gallery" class="gallery-section">
    <h2 data-aos="fade-up" data-aos-delay="100">Gallery</h2>
    <div class="gallery-grid" data-aos="fade-up" data-aos-delay="200">
      @foreach ($galleries as $index => $gallery)
      <div class="{{ $index >= 8 ? 'extra-gallery d-none' : '' }}">
        <!-- Ganti link src dan data-full untuk gambar kamu -->
        <img src="{{ $gallery->image ? Storage::url($gallery->image) : asset('assets/image/no-image.jpg') }}" data-full="{{ $gallery->image ? Storage::url($gallery->image) : asset('assets/image/no-image.jpg') }}" alt="{{ $gallery->name }}" />
        <!-- Tambahkan lebih banyak -->    
      </div>
      @endforeach  
    </div>
    @if (count($galleries) >= 8)
      <div class="show-more-container">
        <button id="showMoreBtns" class="show-more-btn">Show More</button>
      </div>
    @endif
     <!-- Modal -->
      <div id="imageModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImage">
      </div>
      @if($galleries->isEmpty())
      <div class="merch-card">
        <img src="{{ asset('assets/image/no-image.jpg') }}" alt="No Image" />
        <div class="merch-info">
          <p>Belum ada Gallery</p>
        </div>
      </div>
    @endif
  </section>

  <section id="merch" class="merch">
    <h2>Merch</h2>
    <div class="swiper merch-swiper">
      <div class="swiper-wrapper">
      @foreach ($merches as $index => $merch)
        <div class="swiper-slide merch-card">
          <img src="{{ $merch->image ? Storage::url($merch->image) : asset('assets/image/no-image.jpg') }}" alt="{{ $merch->name }}" />
          <div class="merch-info">
            <h3>{{ $merch->name }}</h3>
            <p>{{ $merch->description }}</p>
            <a href="#"><button>Info Lengkap</button></a>
          </div>
        </div>
      @endforeach
      <!-- Tambah slide lainnya -->
      </div>
      @if($merches->isEmpty())
        <div class="swiper-slide merch-card">
          <img src="{{ asset('assets/image/no-image.jpg') }}" alt="No Image" />
          <div class="merch-info">
            <p>Belum ada Merch</p>
          </div>
        </div>
      @endif
      <!-- Tombol Navigasi -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </section>  

  <x-footer></x-footer>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    once: true, // animasi hanya sekali saat scroll
  });
</script>
</body>

</html>