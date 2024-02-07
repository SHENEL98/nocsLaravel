
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
      

                             



<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="style.css" />
<script src="script.js" defer></script>
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
      

    <div class="container-slider">
      <div class="slider-wrapper">
        <button id="prev-slide" class="slide-button material-symbols-rounded">
          chevron_left
        </button>

        <ul class="image-list">
          @for($i = 1; $i < 10; $i++)
          @php
            $imagePath = 'assets/src/event_1/activity_'. $j .'/' . $i . '.jpg';
          @endphp
            @if(file_exists(public_path($imagePath)))
              <img class="image-item" src="{{ asset($imagePath) }}"/>
            @endif
          @endfor
        </ul>

        <button id="next-slide" class="slide-button material-symbols-rounded">
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
            const imageList = document.querySelector(".slider-wrapper .image-list");
            const slideButtons = document.querySelectorAll(".slider-wrapper .slide-button");
            const sliderScrollbar = document.querySelector(".container-slider .slider-scrollbar");
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


                      
                                          <!--@for ($j = 1; $j < 10; $j++)
                                            @php 
                                                $folderPath = public_path('assets/src/event_1/activity_' . $j);
                                            @endphp

                                            @if(is_dir($folderPath)) 
                                                @includeWhen(View::exists('frontend.events.event_1_activity_' . $j), 'frontend.events.event_1_activity_' . $j)
                                            @endif

                                            @for ($i = 1; $i < 10; $i++)
                                                @php
                                                    $imagePath = 'assets/src/event_1/activity_' . $j . '/' . $i . '.jpg';
                                                @endphp

                                                @if(file_exists(public_path($imagePath)))
                                                    
                                                @endif
                                            @endfor
                                          @endfor

                                          <- The Modal --
                                          <div id="myModal" class="modal">
                                              <-- Modal content (image) --
                                              <div class="modal-content">
                                                  <span class="close" onclick="closeModal()">&times;</span>
                                                  <img id="modalImage" class="modal-content"  src="" alt="Clicked Image">
                                              </div>
                                          </div>
                                          <style>
                                              /* The Modal (background) */
                                              .modal {
                                                display: none; /* Hidden by default */
                                                position: fixed; /* Stay in place */
                                                z-index: 1; /* Sit on top */
                                                padding-top: 100px; /* Location of the box */
                                                left: 0;
                                                top: 0;
                                                width: 100%; /* Full width */
                                                height: 100%; /* Full height */
                                                overflow: auto; /* Enable scroll if needed */
                                                background-color: rgb(0, 0, 0); /* Fallback color */
                                                background-color: rgba(0, 0, 0, 0.9); /* Black w/ opacity */
                                              }

                                              /* Modal Content (image) */
                                              .modal-content {
                                                margin: auto;
                                                display: block;
                                                width: 80%;
                                                max-width: 700px;
                                              }
                                              /* Add Animation */
                                              .modal-content,
                                              #caption {
                                                -webkit-animation-name: zoom;
                                                -webkit-animation-duration: 0.6s;
                                                animation-name: zoom;
                                                animation-duration: 0.6s;
                                              }

                                              @-webkit-keyframes zoom {
                                                from {
                                                  -webkit-transform: scale(0);
                                                }
                                                to {
                                                  -webkit-transform: scale(1);
                                                }
                                              }

                                              @keyframes zoom {
                                                from {
                                                  transform: scale(0);
                                                }
                                                to {
                                                  transform: scale(1);
                                                }
                                              }

                                              /* The Close Button */
                                              .close {
                                                position: absolute;
                                                top: 15px;
                                                right: 35px;
                                                color: #f1f1f1;
                                                font-size: 40px;
                                                font-weight: bold;
                                                transition: 0.3s;
                                              }

                                              .close:hover,
                                              .close:focus {
                                                color: #bbb;
                                                text-decoration: none;
                                                cursor: pointer;
                                              }

                                              /* 100% Image Width on Smaller Screens */
                                              @media only screen and (max-width: 700px) {
                                                .modal-content {
                                                  width: 100%;
                                                }
                                              }
                                            </style>

                                          <script>
                                              // Function to handle image click
                                              function handleImageClick(imagePath) {
                                                  var modalImage = document.getElementById('modalImage');
                                                  modalImage.src = imagePath;
                                                  document.getElementById('myModal').style.display = 'flex';
                                              }

                                              // Function to close the modal
                                              function closeModal() {
                                                  document.getElementById('myModal').style.display = 'none';
                                              }

                                              // Close the modal if the user clicks outside the modal content
                                              window.onclick = function(event) {
                                                  var modal = document.getElementById('myModal');
                                                  if (event.target == modal) {
                                                      modal.style.display = 'none';
                                                  }
                                              }
                                          </script>

                                            -->

                                     
                 

@endsection
