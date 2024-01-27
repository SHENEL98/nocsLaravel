<!DOCTYPE html>
<html lang="en-US" class="no-js">
  <!-- Mirrored from themetechmount.com/ttm-business/free/demo28/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Dec 2023 21:13:21 GMT -->
  <!-- Added by HTTrack --><meta
    http-equiv="content-type"
    content="text/html;charset=UTF-8"
  /><!-- /Added by HTTrack -->
  <head>
      @include('temp_layouts/head')
  
     
  </head>
  <style>
    .banner-container {
      overflow: hidden;
      background-color: #00d9ff;
    }

    .scrolling-banner {
      white-space: nowrap;
      animation: scrollBanner 10s linear infinite;
    }

    @keyframes scrollBanner {
      0% {
        transform: translateX(100%);
      }
      100% {
        transform: translateX(-100%);
      }
    }
  </style>

  <body
    class="home page-template-default page page-id-2220 tm-header-layout-3 elementor-default elementor-kit-3 elementor-page elementor-page-2220"
  >
    <div class="main-holder">
      <div id="page" class="hfeed site">
        <header
          id="masthead"
          class="site-header-container header-layout-3 prt-header-menu-position-center"
        >
          @include('temp_layouts/header')
        </header>

        <!-- template body -->
          @yield('content')
        <!-- end template body -->
        
        <!-- .site-content -->
        <footer id="colophon" class="site-footer">
          @include('temp_layouts/footer')
        </footer>
        <!-- .site-footer -->
      </div>
      <!-- #page -->
    </div>

  </body>
</html>
