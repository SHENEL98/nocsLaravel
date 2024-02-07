@extends('temp_layouts/template')
@section('content')
    @include('frontend.events.events_head_assets')
    <style>
        /* Style for the modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
        }

        /* Style for the modal content (image) */
        .modal-content {
            max-width: 100%;
            max-height: 100%;
        }

        /* Style to close the modal */
        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #fff;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
    <div id="content" class="site-content">
        <div class="container">
            <div class="row">
                <div id="primary" class="content-area col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <main id="main" class="site-main">
                        <article id="post-7" class="post-7 page type-page status-publish hentry">
                            <header class="entry-header tm-hide">
                                <h1 class="entry-title">About Us</h1>
                            </header>
                            <!-- .entry-header -->

                            <div class="entry-content">
                                <div data-elementor-type="wp-page" data-elementor-id="7" class="elementor elementor-7">
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-19df570 elementor-section-stretched elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="19df570" data-element_type="section"
                                        data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'>
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3d5efde"
                                                data-id="3d5efde" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-6d98a29 elementor-widget elementor-widget-heading"
                                                        data-id="6d98a29" data-element_type="widget"
                                                        data-widget_type="heading.default">
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
                                                            <h2 class="elementor-heading-title elementor-size-default">
                                                                7 QUESTS
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-3cb6c6fb elementor-section-stretched elementor-section-content-middle animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
                                        data-id="3cb6c6fa" data-element_type="section"
                                        data-settings='{"stretch_section":"section-stretched","animation":"fadeIn"}'>
                                        <div data-elementor-type="wp-page" data-elementor-id="2220"
                                            class="elementor elementor-2220">
                                            <section
                                                class="elementor-section elementor-top-section elementor-element elementor-element-85cb8c4 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                dFata-id="85cb8c4" data-element_type="section"
                                                data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'>
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-add020d"
                                                        data-id="add020d" data-element_type="column">
                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                            <div class="elementor-element elementor-element-7c58f3a elementor-invisible elementor-widget elementor-widget-heading"
                                                                data-id="7c58f3a" data-element_type="widget"
                                                                data-settings='{"_animation":"fadeInUp"}'
                                                                data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <h6
                                                                        class="elementor-heading-title elementor-size-default">
                                                                        A bit of cleverness, speed, and strength. All
                                                                        carefully mixed together with teamwork.
                                                                        What do we obtain? The Seven Quests game.
                                                                        Our first big event consisted in a set of seven
                                                                        different games aimed at stimulating creativity and
                                                                        competitiveness in our young participants.
                                                                        Four teams were gathered to challenge themselves in
                                                                        highly structured tasks where victory had to be
                                                                        grabbed.
                                                                        Highly physical sports such as volleyball and
                                                                        dodgeball, along with games based on mind and
                                                                        teamwork contributed to create an atmosphere
                                                                        enjoyable for all. Everything accompanied with a
                                                                        flash mob where our staff coordinated the young with
                                                                        music and dancing!

                                                                    </h6>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-363e5c0 elementor-grid-eael-col-3 elementor-grid-tablet-eael-col-2 elementor-grid-mobile-eael-col-1 elementor-invisible elementor-widget elementor-widget-eael-post-grid"
                                                                data-id="363e5c0" data-element_type="widget"
                                                                data-settings='{"eael_post_grid_columns":"eael-col-3","_animation":"fadeInUp","eael_post_grid_columns_tablet":"eael-col-2","eael_post_grid_columns_mobile":"eael-col-1"}'
                                                                data-widget_type="eael-post-grid.default">
                                                                <div class="elementor-widget-container">
                                                                    <div id="eael-post-grid-363e5c0"
                                                                        class="eael-post-grid-container">
                                                                        <div class="eael-post-grid eael-post-appender eael-post-appender-363e5c0 eael-post-grid-style-three"
                                                                            data-layout-mode="grid">
                                                                             
                                                                            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
                                    <link rel="stylesheet" href="style.css" />
                                    <script src="script.js" defer></script>
                                        <style>
                                            * {
                                              margin: 0;
                                              padding: 0;
                                              box-sizing: border-box;
                                            }

                                            .con_body { 
                                              align-items: center;
                                              justify-content: center;
                                              min-height: 100vh;
                                              background: #f1f4fd;
                                            }

                                            .container_slider {
                                              max-width: 1200px;
                                              width: 95%;
                                            }

                                            .slider_wrapper {
                                              position: relative;
                                            }

                                            .slider_wrapper .slide_button {
                                              position: absolute;
                                              top: 50%;
                                              outline: none;
                                              border: none;
                                              height: 50px;
                                              width: 50px;
                                              z-index: 5;
                                              color: #fff;
                                              display: flex;
                                              cursor: pointer;
                                              font-size: 2.2rem;
                                              background: #000;
                                              align-items: center;
                                              justify-content: center;
                                              border-radius: 50%;
                                              transform: translateY(-50%);
                                            }

                                            .slider_wrapper .slide_button:hover {
                                              background: #404040;
                                            }

                                            .slider_wrapper .slide_button#prev-slide {
                                              left: -25px;
                                              display: none;
                                            }

                                            .slider_wrapper .slide_button#next-slide {
                                              right: -25px;
                                            }

                                            .slider_wrapper .image_list {
                                              display: grid;
                                              grid-template-columns: repeat(10, 1fr);
                                              gap: 18px;
                                              font-size: 0;
                                              list-style: none;
                                              margin-bottom: 30px;
                                              overflow-x: auto;
                                              scrollbar-width: none;
                                            }

                                            .slider_wrapper .image_list::-webkit-scrollbar {
                                              display: none;
                                            }

                                            .slider_wrapper .image_list .image_item {
                                              width: 325px;
                                              height: 400px;
                                              object-fit: cover;
                                            }

                                            .container_slider .slider-scrollbar {
                                              height: 24px;
                                              width: 100%;
                                              display: flex;
                                              align-items: center;
                                            }

                                            .slider-scrollbar .scrollbar-track {
                                              background: #ccc;
                                              width: 100%;
                                              height: 2px;
                                              display: flex;
                                              align-items: center;
                                              border-radius: 4px;
                                              position: relative;
                                            }

                                            .slider-scrollbar:hover .scrollbar-track {
                                              height: 4px;
                                            }

                                            .slider-scrollbar .scrollbar-thumb {
                                              position: absolute;
                                              background: #000;
                                              top: 0;
                                              bottom: 0;
                                              width: 50%;
                                              height: 100%;
                                              cursor: grab;
                                              border-radius: inherit;
                                            }

                                            .slider-scrollbar .scrollbar-thumb:active {
                                              cursor: grabbing;
                                              height: 8px;
                                              top: -2px;
                                            }

                                            .slider-scrollbar .scrollbar-thumb::after {
                                              content: "";
                                              position: absolute;
                                              left: 0;
                                              right: 0;
                                              top: -10px;
                                              bottom: -10px;
                                            }

                                            /* Styles for mobile and tablets */
                                            @media only screen and (max-width: 1023px) {
                                              .slider_wrapper .slide_button {
                                                display: none !important;
                                              }

                                              .slider_wrapper .image_list {
                                                gap: 10px;
                                                margin-bottom: 15px;
                                                scroll-snap-type: x mandatory;
                                              }

                                              .slider_wrapper .image_list .image_item {
                                                width: 280px;
                                                height: 380px;
                                              }

                                              .slider-scrollbar .scrollbar-thumb {
                                                width: 20%;
                                              }
                                            }
                                        </style>
                                        <div class="con_body">

                                        @for ($j = 1; $j < 10; $j++)
                                          @php 
                                            $folderPath = public_path('assets/src/event_1/activity_' . $j);
                                          @endphp

                                          @if(is_dir($folderPath)) 
                                            @includeWhen(View::exists('frontend.events.event_1_activity_' . $j), 'frontend.events.event_1_activity_' . $j)
                                        <div class="container_slider">
                                          <div class="slider_wrapper">
                                            <button id="prev-slide" class="slide_button material-symbols-rounded">
                                              chevron_left
                                            </button>

                                            <ul class="image_list">
                                              @for($i = 1; $i < 10; $i++)
                                              @php
                                                $imagePath = 'assets/src/event_1/activity_'. $j .'/' . $i . '.jpg';
                                              @endphp
                                                @if(file_exists(public_path($imagePath)))
                                                  <img class="image_item" onclick="handleImageClick('{{ asset($imagePath) }}')" src="{{ asset($imagePath) }}"/>
                                                @endif
                                              @endfor
                                            </ul>

                                            <button id="next-slide" class="slide_button material-symbols-rounded">
                                              chevron_right
                                            </button>
                                          </div>
                                          <div class="slider-scrollbar">
                                            <div class="scrollbar-track">
                                              <div class="scrollbar-thumb"></div>
                                            </div>
                                          </div>
                                        </div>
                                        @endif
                                        @endfor

                                        <script>
                                            const initSlider = () => {
                                                const imageList = document.querySelector(".slider_wrapper .image_list");
                                                const slideButtons = document.querySelectorAll(".slider_wrapper .slide_button");
                                                const sliderScrollbar = document.querySelector(".container_slider .slider-scrollbar");
                                                const scrollbarThumb = sliderScrollbar.querySelector(".scrollbar-thumb");
                                                const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;
                                                
                                                // Handle scrollbar thumb drag
                                                scrollbarThumb.addEventListener("mousedown", (e) => {
                                                    const startX = e.clientX;
                                                    const thumbPosition = scrollbarThumb.offsetLeft;
                                                    const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;
                                                    
                                                    // Update thumb position on mouse move
                                                    const handleMouseMove = (e) => {
                                                        const deltaX = e.clientX - startX;
                                                        const newThumbPosition = thumbPosition + deltaX;

                                                        // Ensure the scrollbar thumb stays within bounds
                                                        const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
                                                        const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;
                                                        
                                                        scrollbarThumb.style.left = `${boundedPosition}px`;
                                                        imageList.scrollLeft = scrollPosition;
                                                    }

                                                    // Remove event listeners on mouse up
                                                    const handleMouseUp = () => {
                                                        document.removeEventListener("mousemove", handleMouseMove);
                                                        document.removeEventListener("mouseup", handleMouseUp);
                                                    }

                                                    // Add event listeners for drag interaction
                                                    document.addEventListener("mousemove", handleMouseMove);
                                                    document.addEventListener("mouseup", handleMouseUp);
                                                });

                                                // Slide images according to the slide button clicks
                                                slideButtons.forEach(button => {
                                                    button.addEventListener("click", () => {
                                                        const direction = button.id === "prev-slide" ? -1 : 1;
                                                        const scrollAmount = imageList.clientWidth * direction;
                                                        imageList.scrollBy({ left: scrollAmount, behavior: "smooth" });
                                                    });
                                                });

                                                // Show or hide slide buttons based on scroll position
                                                const handleSlideButtons = () => {
                                                    slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";
                                                    slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
                                                }

                                                // Update scrollbar thumb position based on image scroll
                                                const updateScrollThumbPosition = () => {
                                                    const scrollPosition = imageList.scrollLeft;
                                                    const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
                                                    scrollbarThumb.style.left = `${thumbPosition}px`;
                                                }

                                                // Call these two functions when image list scrolls
                                                imageList.addEventListener("scroll", () => {
                                                    updateScrollThumbPosition();
                                                    handleSlideButtons();
                                                });
                                            }

                                            window.addEventListener("resize", initSlider);
                                            window.addEventListener("load", initSlider);
                                        </script>  

                                          </div>


                                                                            <!-- The Modal -->
                                                                            <div id="myModal" class="modal">
                                                                                <!-- Modal content (image) -->
                                                                                <div class="modal-content">
                                                                                    <span class="close"
                                                                                        onclick="closeModal()">&times;</span>
                                                                                    <img id="modalImage"
                                                                                        class="modal-content" src=""
                                                                                        alt="Clicked Image">
                                                                                </div>
                                                                            </div>
                                                                            @include('frontend.events.event_modal')
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </section>
                               ` </div>
                            </div>
                            <!-- .entry-content -->
                        </article>
                        <!-- #post-7 -->
                    </main>
                    <!-- #main .site-main -->
                </div>
                <!-- #primary .content-area -->
            </div>
        </div>
    </div>`

@endsection
