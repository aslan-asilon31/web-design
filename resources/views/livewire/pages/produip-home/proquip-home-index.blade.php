<div>
  <main class="my-8">
    <div class="container mx-auto ">
      <div class="relative h-64 rounded-md overflow-hidden bg-cover bg-center md:h-80 lg:h-96"
        style="background-image: url('https://yt3.googleusercontent.com/ChluMMgfvMvsW3klBNGyVy7PVdtdxQr32WTANCWDjRhOOW30rQ0DUJEVLaDFBOVVdjs34UFCMEE=w1707-fcrop64=1,00005a57ffffa5a8-k-c0xffffffff-no-nd-rj')">
        <!-- Overlay Blur -->
        <div class="absolute inset-0 bg-black/30 backdrop-blur-sm"></div>

        <!-- Logo -->
        <div class="absolute inset-0 flex items-center justify-center">
          <img src="https://www.proquip.id/assets/images/proquip-logo-native.webp" alt="Logo"
            class="h-8 md:h-16 lg:h-32" />
        </div>
      </div>


      <div class="grid grid-cols-2  mt-8">
        <div class="w-full rounded-md overflow-hidden bg-cover bg-center ">
          <swiper-container class="mySwiper" pagination-clickable="true" space-between="30" effect="fade"
            navigation="false" autoplay="true" loop="true">
            <swiper-slide>
              <img
                src="https://www.proquip.id/files/images/products/97957d83c4424328894dd9bb186c7ea8/97957d83c4424328894dd9bb186c7ea8-image.webp" />
            </swiper-slide>
            <swiper-slide>
              <img
                src="https://www.proquip.id/files/images/products/9795a5ee616a488d95803b8ff7907869/9795a5ee616a488d95803b8ff7907869-image.webp" />
            </swiper-slide>
            <swiper-slide>
              <img src="https://www.proquip.id/files/images/homes/categories/mini-tiller-home.webp" />
            </swiper-slide>
            <swiper-slide>
              <img src="https://www.proquip.id/files/images/homes/categories/generator-home.webp" />
            </swiper-slide>
          </swiper-container>
        </div>
        <div class="w-full rounded-md overflow-hidden bg-cover bg-center">
          <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="30"
            effect="fade" navigation="false" autoplay="true" loop="true">
            <swiper-slide>
              <img src="https://www.proquip.id/files/images/homes/categories/mini-tiller-home.webp" />
            </swiper-slide>
            <swiper-slide>
              <img src="https://www.proquip.id/files/images/homes/categories/water-pump-home.webp" />
            </swiper-slide>
            <swiper-slide>
              <img src="https://www.proquip.id/files/images/homes/categories/generator-home.webp" />
            </swiper-slide>
            <swiper-slide>
              <img src="https://www.proquip.id/files/images/homes/categories/engine-home.webp" />
            </swiper-slide>
          </swiper-container>
        </div>
      </div>
      <div class="mt-2">
        <div class="banner-container">
          <div class="banner-content">
            @forelse ($productFirst as $pf)
              <div class="banner-item text-white text-xs sm:text-xs md:text-lg lg:text-xl">{{ $pf->name }}</div>
            @empty
              <div class="banner-item text-white text-xs sm:text-xs md:text-lg lg:text-xl">No data</div>
            @endforelse
          </div>
        </div>
      </div>
      <div class="mt-16">
        <h3 class="text-gray-600 text-xs sm:text-xs md:text-lg lg:text-xl font-medium">Fashions</h3>
        <div class="grid gap-6 grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
          @forelse ($productFirst as $pf)
            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
              <div class="flex items-end justify-end h-56 w-full bg-cover"
                style="background-image: url('https://images.unsplash.com/photo-1563170351-be82bc888aa4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=376&q=80')">

              </div>
              <div class="px-5 py-3 text-center">
                <h3 class="text-gray-700 uppercase text-xs sm:text-xs md:text-lg lg:text-xl font-bold">
                  {{ $pf->name }}</h3>
              </div>
            </div>
          @empty
            <h1 class=" text-xs sm:text-xs md:text-lg lg:text-xl">No data</h1>
          @endforelse

        </div>
      </div>

      <div class="mt-16">
        <h3 class="text-gray-600 text-xs sm:text-xs md:text-lg lg:text-xl font-medium">Fashions 2</h3>
        <div class="grid gap-6 grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
          @forelse ($productFirst as $pf)
            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
              <div class="flex items-end justify-end h-56 w-full bg-cover"
                style="background-image: url('https://images.unsplash.com/photo-1563170351-be82bc888aa4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=376&q=80')">

              </div>
              <div class="px-5 py-3 text-center">
                <h3 class="text-gray-700 uppercase text-xs sm:text-xs md:text-lg lg:text-xl font-bold">
                  {{ $pf->name }}</h3>
              </div>
            </div>
          @empty
            <h1 class=" text-xs sm:text-xs md:text-lg lg:text-xl">No data</h1>
          @endforelse

        </div>
      </div>

    </div>
  </main>

  <style>
    /* Container for the banner */
    .banner-container {
      width: 100%;
      overflow: hidden;
      position: relative;
      background-color: #f3f4f6;
    }

    /* The actual content of the banner that will scroll */
    .banner-content {
      display: flex;
      white-space: nowrap;
      animation: scroll-banner 15s linear infinite;
    }

    /* Style for each item in the banner */
    .banner-item {
      padding: 8px;
      margin-right: 50px;
      background-color: red !important;
      font-weight: bold;
      border-radius: 5px;
    }

    /* Animation for scrolling */
    @keyframes scroll-banner {
      0% {
        transform: translateX(100%);
      }

      100% {
        transform: translateX(-100%);
      }


      swiper-container1 {
        width: 100%;
        height: 100%;
      }

      swiper-slide {
        text-align: center;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .swiper-button-next,
      .swiper-button-prev {
        display: none !important;
      }
    }
  </style>

  <style>
    swiper-container1 {
      width: 100%;
      height: 100%;
    }

    swiper-slide1 {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    swiper-slide1 img1 {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>



</div>
