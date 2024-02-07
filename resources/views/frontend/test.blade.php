@extends('temp_layouts/template')

@section('content')
    @include('frontend.events.events_head_assets')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="{{ asset('path/to/style.css') }}" />
    <script src="{{ asset('path/to/script.js') }}" defer></script>

    <style>
        * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }

        body {
          display: flex;
          align-items: center;
          justify-content: center;
          min-height: 100vh;
          background: #f1f4fd;
        }

        .container-slider {
          max-width: 1200px;
          width: 95%;
        }

        .slider-wrapper {
          position: relative;
        }

        .slider-wrapper .slide-button {
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

        .slider-wrapper .slide-button:hover {
          background: #404040;
        }

        .slider-wrapper .slide-button#prev-slide {
          left: -25px;
          display: none;
        }

        .slider-wrapper .slide-button#next-slide {
          right: -25px;
        }

        .slider-wrapper .image-list {
          display: grid;
          grid-template-columns: repeat(10, 1fr);
          gap: 18px;
          font-size: 0;
          list-style: none;
          margin-bottom: 30px;
          overflow-x: auto;
          scrollbar-width: none;
        }

        .slider-wrapper .image-list::-webkit-scrollbar {
          display: none;
        }

        .slider-wrapper .image-list .image-item {
          width: 325px;
          height: 400px;
          object-fit: cover;
        }

        .container-slider .slider-scrollbar {
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
          .slider-wrapper .slide-button {
            display: none !important;
          }

          .slider-wrapper .image-list {
            gap: 10px;
            margin-bottom: 15px;
            scroll-snap-type: x mandatory;
          }

          .slider-wrapper .image-list .image-item {
            width: 280px;
            height: 380px;
          }

          .slider-scrollbar .scrollbar-thumb {
            width: 20%;
          }
        }
    </style>

    @for ($j = 1; $j < 10; $j++)
        @php 
            $folderPath = public_path('assets/src/event_1/activity_' . $j);
        @endphp

        @if(is_dir($folderPath)) 
            @includeWhen(View::exists('frontend.events.event_1_activity_' . $j), 'frontend.events.event_1_activity_' . $j)

            <div class="slider-body">
                <div class="containerslider">
                    <div class="slider-wrapper">
                        <button id="prev-slide-{{ $j }}" class="slide-button material-symbols-rounded">
                            chevron_left
                        </button>
                        <ul class="image-list" id="image-list-{{ $j }}">
                            @for($i = 1; $i < 10; $i++)
                                @php
                                    $imagePath = 'assets/src/event_1/activity_' . $j . '/' . $i . '.jpg';
                                @endphp

                                @if(file_exists(public_path($imagePath)))
                                    <img class="image-item" loading="lazy" onclick="handleImageClick('{{ asset($imagePath) }}')"
                                        src="{{ asset($imagePath) }}" width="768" height="512" />
                                @endif
                            @endfor
                        </ul>
                        <button id="next-slide-{{ $j }}" class="slide-button material-symbols-rounded">
                            chevron_right
                        </button>
                    </div>
                    <div class="slider-scrollbar">
                        <div class="scrollbar-track">
                            <div class="scrollbar-thumb"></div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                const initSlider{{ $j }} = () => {
                    const imageList{{ $j }} = document.querySelector("#image-list-{{ $j }}");
                    const prevButton{{ $j }} = document.querySelector("#prev-slide-{{ $j }}");
                    const nextButton{{ $j }} = document.querySelector("#next-slide-{{ $j }}");

                    const sliderScrollbar{{ $j }} = document.querySelector(".containerslider .slider-scrollbar");
                    const scrollbarThumb{{ $j }} = sliderScrollbar{{ $j }}.querySelector(".scrollbar-thumb");
                    const maxScrollLeft{{ $j }} = imageList{{ $j }}.scrollWidth - imageList{{ $j }}.clientWidth;

                    // Your existing slider initialization logic here

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
                    // Event listener for previous button click
                    prevButton{{ $j }}.addEventListener("click", () => {
                        const direction = -1;
                        const scrollAmount = imageList{{ $j }}.clientWidth * direction;
                        imageList{{ $j }}.scrollBy({ left: scrollAmount, behavior: "smooth" });
                    });

                    // Event listener for next button click
                    nextButton{{ $j }}.addEventListener("click", () => {
                        const direction = 1;
                        const scrollAmount = imageList{{ $j }}.clientWidth * direction;
                        imageList{{ $j }}.scrollBy({ left: scrollAmount, behavior: "smooth" });
                    });

                    // Event listener for scrollbar thumb drag
                    scrollbarThumb{{ $j }}.addEventListener("mousedown", (e) => {
                        // Your existing scrollbar thumb drag logic here
                    });

                    // Your existing event listeners for updating thumb position and handling slide buttons

                    // Call these functions when the image list scrolls
                    imageList{{ $j }}.addEventListener("scroll", () => {
                        // Your existing logic for updating scrollbar thumb position and handling slide buttons
                    });
                };

                window.addEventListener("resize", initSlider{{ $j }});
                window.addEventListener("load", initSlider{{ $j }});
            </script>
        @endif
    @endfor
@endsection
