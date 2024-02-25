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
    canvas#confetti {
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0px;
        left: 0px;
        z-index: 1000;
        pointer-events: none;
      }
  </style>
<body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/js-confetti"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/js-confetti@latest/dist/js-confetti.browser.js"></script>
<script>
  // Set the date we're counting down to
  var countDownDate = new Date("Apr 25, 2024 10:30:20").getTime();

  var days;
  var hours;
  var minutes;
  var seconds;
  $(function() {
    numberTransition('#days .number', days, 1000, 'easeOutQuad');
    numberTransition('#hours .number', hrs, 1000, 'easeOutQuad');
    numberTransition('#minutes .number', min, 1000, 'easeOutQuad');
    numberTransition('#seconds .number', sec, 1000, 'easeOutQuad');

    });
  
  // Update the countdown every second
  var countdown = setInterval(function() {
    // Get the current date and time
    var now = new Date().getTime();

    // Find the distance between now and the countdown date
    var distance = countDownDate - now;

    // Calculate days, hours, minutes and seconds
     days = Math.floor(distance / (1000 * 60 * 60 * 24));
     hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
     minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
     seconds = Math.floor((distance % (1000 * 60)) / 1000);

       // Write to countdown component
       $("#days .number").text(days);
        $("#hours .number").text(hours);
        $("#minutes .number").text(minutes);
        $("#seconds .number").text(seconds);

    // Display the countdown
    document.getElementById("countdown").innerHTML = days + "d " + hours + "h " +
      minutes + "m " + seconds + "s ";
 

    // If the countdown is over, display a message
    if (distance < 0) {
      clearInterval(countdown);
      document.getElementById("till-countdown").style.display = "none";
      document.getElementById("after-countdown").style.display = "block";

      // Trigger confetti animation
      const canvas = document.querySelector('#confetti');
      const jsConfetti = new JSConfetti();
      jsConfetti.addConfetti({
        emojis: ['🥳','🎉', '🪅', '💥', '✨', '💫', '🎉'],
      }).then(() => jsConfetti.addConfetti());
    } 
  }, 1000);

  
 

  function numberTransition(id, endPoint, transitionDuration, transitionEase){
        // Transition numbers from 0 to the final number
        $({numberCount: $(id).text()}).animate({numberCount: endPoint}, {
            duration: transitionDuration,
            easing:transitionEase,
            step: function() {
                $(id).text(Math.floor(this.numberCount));
            },
            complete: function() {
                $(id).text(this.numberCount);
            }
        });
    };
</script>
  <div id="till-countdown" style=" font-family: Arial, sans-serif;
    background-color: #EAC926;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    overflow: hidden; 
    width: 100%; 
    ">
     <style>
      .countdown-container {
        text-align: center;
      }

      .countdown {
        font-size: 40px;
        color: #333;
        margin-bottom: 20px;
      }

      .countdown-label {
        font-size: 20px;
        color: #555;
      }
      ul#till-countdown {
        position: relative;
        top: 50%;
        transform: translateY(-50%);
        width: 50%;
        margin: 0 auto;
        padding: 15px 0 20px 0;
        color: #000;
        /*border: 1px solid #000;*/
        border-width: 1px 0;
        overflow: hidden;
        font-family: "Arial Narrow", Arial, sans-serif;
        font-weight: bold;
      }
      ul#till-countdown li {
        margin: 0 -3px 0 0;
        padding: 0;
        display: inline-block;
        width: 25%;
        font-size: 72px;
        font-size: 6vw;
        text-align: center;
      }
      ul#till-countdown li .label {
        color: #000;
        font-size: 18px;
        font-size: 1.5vw;
        text-transform: uppercase;
      }

    </style>
    <div class="countdown-container">

    <div style="visibility: hidden;"  id="countdown" class="countdown"></div>
    <div style="visibility: hidden;" class="countdown-label">Until the event starts</div>
    <ul id="till-countdown" style="line-height: 65px;">
      <li id="days">
        <div class="number">00</div>
        <div class="label">Days</div>
      </li>
      <li id="hours">
        <div class="number">00</div>
        <div class="label">Hours</div>
      </li>
      <li id="minutes">
        <div class="number">00</div>
        <div class="label">Minutes</div>
      </li>
      <li id="seconds">
        <div class="number">00</div>
        <div class="label">Seconds</div>
      </li>
    </ul>
      
      <h3 style="visibility: hidden;">ntil the event startsntil the event startsntil the event startsntil the event startsntil the event starts</h3>
    </div>
  </div>
  <canvas id="confetti"></canvas>

  <div id ="after-countdown" style="display:none">
   <main
    class="home page-template-default page page-id-2220 tm-header-layout-3 elementor-default elementor-kit-3 elementor-page elementor-page-2220">
    <div class="main-holder">
      <div id="page" class="hfeed site">
        <header
          id="masthead"
          class="site-header-container header-layout-3 prt-header-menu-position-center"
        >
          @include('temp_layouts/header')
          
        </header>

@include('frontend/index/assets')
     
        <!-- template body -->
        
      <div id="content" class="site-content">
         
          <div class="row">
            <div id="primary" class="content-area col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <main id="main" class="site-main">
                <article id="post-2220" class="post-2220 page type-page status-publish hentry">
                  <header class="entry-header tm-hide">
                    <h1 class="entry-title">Home</h1>
                  </header>
                  <!-- .entry-header -->

                  <div class="entry-content">
                    <div data-elementor-type="wp-page" data-elementor-id="2220" class="elementor elementor-2220">
                      <section class="elementor-section elementor-top-section elementor-element elementor-element-c17acb7 elementor-section-full_width elementor-section-stretched elementor-section-content-middle elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="c17acb7" data-element_type="section" data-settings='{"stretch_section":"section-stretched","background_background":"classic","animation":"fadeIn"}'>
                        <div class="elementor-container elementor-column-gap-no">
                          <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-279116b" data-id="279116b" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                              <section class="elementor-section elementor-inner-section elementor-element elementor-element-69e2854 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="69e2854" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                  <div class="elementor-column elementor-col-60 elementor-inner-column elementor-element elementor-element-4be7f14" data-id="4be7f14" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-97c62d5 elementor-invisible elementor-widget elementor-widget-heading" data-id="97c62d5" data-element_type="widget" data-settings='{"_animation":"fadeInUp"}' data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                          <style>
                                            /*! elementor - v3.15.0 - 09-08-2023 */
                                            .elementor-heading-title {
                                              padding: 0;
                                              margin: 0;
                                              line-height: 1;
                                            }

                                            .elementor-widget-heading .elementor-heading-title[class*="elementor-size-"]>a {
                                              color: inherit;
                                              font-size: inherit;
                                              line-height: inherit;
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                              font-size: 15px;
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                              font-size: 19px;
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                              font-size: 29px;
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                              font-size: 39px;
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                              font-size: 59px;
                                            }
                                          </style>
                                          <h2 class="elementor-size-default">
                                            We are all part of a great puzzlue.
                                            </br> A single piece may not make sense, but together they do.
                                          </h2>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="elementor-column elementor-col-40 elementor-inner-column elementor-element elementor-element-d54d3e0" data-id="d54d3e0" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-349545d animated-slow elementor-invisible elementor-widget elementor-widget-image" data-id="349545d" data-element_type="widget" data-settings='{"_animation":"fadeInRight"}' data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                          <style>
                                            /*! elementor - v3.15.0 - 09-08-2023 */
                                            .elementor-widget-image {
                                              text-align: center;
                                            }

                                            .elementor-widget-image a {
                                              display: inline-block;
                                            }

                                            .elementor-widget-image a img[src$=".svg"] {
                                              width: 48px;
                                            }

                                            .elementor-widget-image img {
                                              vertical-align: middle;
                                              display: inline-block;
                                            }
                                          </style>
                                          <img decoding="async" fetchpriority="high" width="607" height="575" src="{{asset('assets/frontend/content/wp-content/uploads/sites/8/2023/07/imgslide1.png')}}" class="attachment-full size-full wp-image-2245" alt="" sizes="(max-width: 607px) 100vw, 607px" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </section>
                            </div>
                          </div>
                        </div>
                      </section>
                      <section class="elementor-section elementor-top-section elementor-element elementor-element-cc0fe5c elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="cc0fe5c" data-element_type="section" data-settings='{"stretch_section":"section-stretched"}'>
                        <div class="elementor-container elementor-column-gap-default">
                          <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-accd1f4 elementor-invisible" data-id="accd1f4" data-element_type="column" data-settings='{"animation":"fadeInUp"}'>
                            <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-cef8c0a elementor-widget elementor-widget-heading" data-id="cef8c0a" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                  <h3 class="elementor-heading-title elementor-size-default">
                                    We aim to improve different shades of our society.
                                    Are you ready to be part of the change ?
                                  </h3>
                                </div>
                              </div>
                              <div class="elementor-element elementor-element-7063153 elementor-widget elementor-widget-text-editor" data-id="7063153" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                  <style>
                                    /*! elementor - v3.15.0 - 09-08-2023 */
                                    .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                      background-color: #69727d;
                                      color: #fff;
                                    }

                                    .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                      color: #69727d;
                                      border: 3px solid;
                                      background-color: transparent;
                                    }

                                    .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                      margin-top: 8px;
                                    }

                                    .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                      width: 1em;
                                      height: 1em;
                                    }

                                    .elementor-widget-text-editor .elementor-drop-cap {
                                      float: left;
                                      text-align: center;
                                      line-height: 1;
                                      font-size: 50px;
                                    }

                                    .elementor-widget-text-editor .elementor-drop-cap-letter {
                                      display: inline-block;
                                    }
                                  </style>
                                  <p>
                                    A lot of non-EU citizens do not continue te studies after the highschool and struggle to find a proper job due to lack of information and resources.
                                    NOCS was initially born to elp young students in their choices regarding the university and the career paths. Being an organisation composed of people from different backgrounds,
                                    we guide the younger generations into their choices, creating a more free and open community.
                                  </p>
                                </div>
                              </div>
                              <section class="elementor-section elementor-inner-section elementor-element elementor-element-8f3eeb1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8f3eeb1" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d1d70f9" data-id="d1d70f9" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-57c508a elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="57c508a" data-element_type="widget" data-widget_type="icon-list.default">
                                        <div class="elementor-widget-container">
                                          <link rel="stylesheet" href="{{asset('assets/frontend/content/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css')}}" />
                                          <ul class="elementor-icon-list-items">
                                            <li class="elementor-icon-list-item">
                                              <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-circle"></i>
                                              </span>
                                              <span class="elementor-icon-list-text">Educational support</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                              <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-circle"></i>
                                              </span>
                                              <span class="elementor-icon-list-text">Career Development</span>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a71ab2b" data-id="a71ab2b" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-03b6ac1 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="03b6ac1" data-element_type="widget" data-widget_type="icon-list.default">
                                        <div class="elementor-widget-container">
                                          <ul class="elementor-icon-list-items">
                                            <li class="elementor-icon-list-item">
                                              <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-circle"></i>
                                              </span>
                                              <span class="elementor-icon-list-text">Event planning</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                              <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-circle"></i>
                                              </span>
                                              <span class="elementor-icon-list-text">Orientation meetings</span>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </section>
                              <div class="elementor-element elementor-element-dad3123 elementor-widget elementor-widget-button" data-id="dad3123" data-element_type="widget" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                  <div class="elementor-button-wrapper">
                                    <a class="elementor-button elementor-button-link elementor-size-md" href="#">
                                      <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-text">About Us</span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c6e5bc4" data-id="c6e5bc4" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                              <section class="elementor-section elementor-inner-section elementor-element elementor-element-3d8dba4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3d8dba4" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                  <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-52d07e8" data-id="52d07e8" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-f0a4b4f elementor-invisible elementor-widget elementor-widget-image" data-id="f0a4b4f" data-element_type="widget" data-settings='{"_animation":"fadeInUp"}' data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                          <img decoding="async" width="707" height="448" src="{{asset('assets/src/content/index_1.png')}}" class="attachment-full size-full wp-image-2249" alt="" sizes="(max-width: 707px) 100vw, 707px" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </section>
                            </div>
                          </div>
                        </div>
                      </section>

                      <section class="elementor-section elementor-top-section elementor-element elementor-element-a15264b elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="a15264b" data-element_type="section" data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'>
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-no">
                          <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f97e8e1" data-id="f97e8e1" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-4e87672 elementor-invisible elementor-widget elementor-widget-heading" data-id="4e87672" data-element_type="widget" data-settings='{"_animation":"fadeInUp"}' data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                  <h2 class="elementor-heading-title elementor-size-default">
                                    Upcoming Seminars
                                  </h2>
                                </div>
                              </div>
                              <div class="elementor-element elementor-element-f9d15da elementor-widget__width-inherit elementor-invisible elementor-widget elementor-widget-text-editor" data-id="f9d15da" data-element_type="widget" data-settings='{"_animation":"fadeInUp"}' data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                  <p>
                                    Save the Date for the Upcoming Seminars
                                    for Personal and the Professional Growth
                                  </p>
                                </div>
                              </div>
                              <section class="elementor-section elementor-inner-section elementor-element elementor-element-b695c29 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="b695c29" data-element_type="section" data-settings='{"animation":"fadeInUp"}'>
                                <div class="elementor-container elementor-column-gap-no">
                                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-507d4ad" data-id="507d4ad" data-element_type="column" data-settings='{"background_background":"classic"}'>
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-f430525 elementor-widget elementor-widget-spacer" data-id="f430525" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                          <style>
                                            /*! elementor - v3.15.0 - 09-08-2023 */
                                            .elementor-column .elementor-spacer-inner {
                                              height: var(--spacer-size);
                                            }

                                            .e-con {
                                              --container-widget-width: 100%;
                                            }

                                            .e-con-inner>.elementor-widget-spacer,
                                            .e-con>.elementor-widget-spacer {
                                              width: var(--container-widget-width,
                                                  var(--spacer-size));
                                              --align-self: var(--container-widget-align-self,
                                                  initial);
                                              --flex-shrink: 0;
                                            }

                                            .e-con-inner>.elementor-widget-spacer>.elementor-widget-container,
                                            .e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer,
                                            .e-con>.elementor-widget-spacer>.elementor-widget-container,
                                            .e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer {
                                              height: 100%;
                                            }

                                            .e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner,
                                            .e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner {
                                              height: var(--container-widget-height,
                                                  var(--spacer-size));
                                            }
                                          </style>
                                          <div class="elementor-spacer">
                                            <div class="elementor-spacer-inner"></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-194f7fd" data-id="194f7fd" data-element_type="column" data-settings='{"background_background":"classic"}'>
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-cfecfcd elementor-widget elementor-widget-heading" data-id="cfecfcd" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                          <h4 class="elementor-heading-title elementor-size-default">
                                            <a href="#">Digital Marketing Strategies
                                            </a>
                                          </h4>
                                        </div>
                                      </div>
                                      <div class="elementor-element elementor-element-3cf6949 elementor-widget elementor-widget-text-editor" data-id="3cf6949" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                          <ul class="elementor-icon-list-items">
                                            <li class="elementor-icon-list-item">
                                              <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-circle"></i>
                                              </span>
                                              <span class="elementor-icon-list-text">Career path guidance</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                              <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-circle"></i>
                                              </span>
                                              <span class="elementor-icon-list-text">School support services</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                              <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-circle"></i>
                                              </span>
                                              <span class="elementor-icon-list-text">Q & A sessions</span>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-86282b9 elementor-hidden-tablet elementor-hidden-mobile" data-id="86282b9" data-element_type="column">
                                    <div class="elementor-widget-wrap"></div>
                                  </div>
                                </div>
                              </section>
                              <section class="elementor-section elementor-inner-section elementor-element elementor-element-af7448b elementor-section-full_width elementor-reverse-mobile elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="af7448b" data-element_type="section" data-settings='{"animation":"fadeInUp"}'>
                                <div class="elementor-container elementor-column-gap-no">
                                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-793e548 elementor-hidden-tablet elementor-hidden-mobile" data-id="793e548" data-element_type="column">
                                    <div class="elementor-widget-wrap"></div>
                                  </div>
                                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-e78702f" data-id="e78702f" data-element_type="column" data-settings='{"background_background":"classic"}'>
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-57e99cf elementor-icon-list--layout-inline elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="57e99cf" data-element_type="widget" data-widget_type="icon-list.default">
                                        <div class="elementor-widget-container">
                                          <ul class="elementor-icon-list-items elementor-inline-items">
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                              <span class="elementor-icon-list-text">17 Feb 2023</span>
                                            </li>
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                              <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-circle"></i>
                                              </span>
                                              <span class="elementor-icon-list-text">MarTech Conference</span>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <div class="elementor-element elementor-element-1d84050 elementor-widget elementor-widget-heading" data-id="1d84050" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                          <h4 class="elementor-heading-title elementor-size-default">
                                            <a href="#">Innovative Branding Digital</a>
                                          </h4>
                                        </div>
                                      </div>
                                      <div class="elementor-element elementor-element-5d0b7c7 elementor-widget elementor-widget-text-editor" data-id="5d0b7c7" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                          <p>
                                            Join us for a captivating session
                                            on innovative branding techniques
                                            tailored for the digital era.
                                          </p>
                                        </div>
                                      </div>
                                      <div class="elementor-element elementor-element-5755869 elementor-widget elementor-widget-button" data-id="5755869" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                          <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
                                              <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">View More</span>
                                              </span>
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-0b85481" data-id="0b85481" data-element_type="column" data-settings='{"background_background":"classic"}'>
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-0b5c2f4 elementor-widget elementor-widget-spacer" data-id="0b5c2f4" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                          <div class="elementor-spacer">
                                            <div class="elementor-spacer-inner"></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </section>
                              <section class="elementor-section elementor-inner-section elementor-element elementor-element-4ed54c5 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="4ed54c5" data-element_type="section" data-settings='{"animation":"fadeInUp"}'>
                                <div class="elementor-container elementor-column-gap-no">
                                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-57f4e44" data-id="57f4e44" data-element_type="column" data-settings='{"background_background":"classic"}'>
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-6b77cf3 elementor-widget elementor-widget-spacer" data-id="6b77cf3" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                          <div class="elementor-spacer">
                                            <div class="elementor-spacer-inner"></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-d7a2dc3" data-id="d7a2dc3" data-element_type="column" data-settings='{"background_background":"classic"}'>
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-d13f1a3 elementor-icon-list--layout-inline elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="d13f1a3" data-element_type="widget" data-widget_type="icon-list.default">
                                        <div class="elementor-widget-container">
                                          <ul class="elementor-icon-list-items elementor-inline-items">
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                              <span class="elementor-icon-list-text">3 March 2023</span>
                                            </li>
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                              <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-circle"></i>
                                              </span>
                                              <span class="elementor-icon-list-text">Think Digital Event
                                                Experience</span>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <div class="elementor-element elementor-element-1a34092 elementor-widget elementor-widget-heading" data-id="1a34092" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                          <h4 class="elementor-heading-title elementor-size-default">
                                            <a href="#">The Future of Branding</a>
                                          </h4>
                                        </div>
                                      </div>
                                      <div class="elementor-element elementor-element-922163a elementor-widget elementor-widget-text-editor" data-id="922163a" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                          <p>
                                            Explore evolving consumer values,
                                            expectations, and preferences.
                                            Craft authentic brands that deeply
                                            resonate  with your target
                                            audience
                                          </p>
                                        </div>
                                      </div>
                                      <div class="elementor-element elementor-element-086bda2 elementor-widget elementor-widget-button" data-id="086bda2" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                          <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
                                              <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">View More</span>
                                              </span>
                                            </a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8230e8a elementor-hidden-tablet elementor-hidden-mobile" data-id="8230e8a" data-element_type="column">
                                    <div class="elementor-widget-wrap"></div>
                                  </div>
                                </div>
                              </section>
                            </div>
                          </div>
                        </div>
                      </section>
                    </div>
                  </div>
                  <!-- .entry-content -->
                </article>
                <!-- #post-2220 -->
              </main>
              <!-- #main .site-main -->
            </div>
            <!-- #primary .content-area -->
          </div>
      
      </div>
        <!-- end template body -->
        
        <!-- .site-content -->
        <footer id="colophon" class="site-footer">
          @include('temp_layouts/footer')
        </footer>
        <!-- .site-footer -->
      </div>
      <!-- #page -->
    </div>

   </main>
  </div>
</body>


</html>
