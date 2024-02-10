@extends('temp_layouts/template')
@section('content')
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* CSS Styles */
        .activity {
            margin-bottom: 20px;
        }
        .container_slider {
            position: relative;
            max-width: 600px; /* Adjust this as needed */
            margin: 0 auto;
        }
        .slider_wrapper {
            position: relative;
            overflow: hidden;
        }
        .image_list {
            display: flex;
            list-style-type: none;
            padding: 0;
            margin: 0;
            transition: transform 0.5s ease;
        }
        .image_item {
            width: calc(100% / 4); /* 4 images per slide, adjust as needed */
            flex: 0 0 auto;
        }
        .slide_button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            font-size: 24px;
            z-index: 1;
        }
        .prev-slide {
            left: 10px;
        }
        .next-slide {
            right: 10px;
        }
    </style>

@for ($j = 1; $j < 10; $j++)
                                          @php 
                                            $folderPath = public_path('assets/src/event_1/activity_' . $j);
                                          @endphp

                                          @if(is_dir($folderPath))
                                          <div class="activity"> 
                                            @includeWhen(View::exists('frontend.events.event_1_activity_' . $j), 'frontend.events.event_1_activity_' . $j)
    
                                            <div class="container_slider">
          <div class="slider_wrapper">
              <button class="prev-slide slide_button material-symbols-rounded">&#10094;</button>
              <ul class="image_list">
                  @for($i = 1; $i < 10; $i++)
                                              @php
                                                $image = 'assets/src/event_1/activity_'. $j .'/' . $i . '.jpg';
                                              @endphp
                                              @if(file_exists(public_path($image)))

                      <li><img class="image_item" src="{{ asset($image) }}"/></li>
                    @endif
                  @endfor
              </ul>
              <button class="next-slide slide_button material-symbols-rounded">&#10095;</button>
          </div>
          <div class="slider-scrollbar">
              <div class="scrollbar-track">
                  <div class="scrollbar-thumb"></div>
              </div>
          </div>
      </div>                            
    </div>
                                        @endif
                                        @endfor

<!--@for ($j = 1; $j < 10; $j++)
 
  @php 
    $folderPath = public_path('assets/src/event1/activity' . $j);
  @endphp
  @if(is_dir($folderPath))
  {{$folderPath}}

  <div class="activity">
      @includeWhen(View::exists('frontend.events.event1_activity' . $j), 'frontend.events.event1_activity' . $j)
      <div class="container_slider">
          <div class="slider_wrapper">
              <button class="prev-slide slide_button material-symbols-rounded">&#10094;</button>
              <ul class="image_list">
                  @for($i = 1; $i < 10; $i++)
                    @php
                      $image = 'assets/src/event1/activity' . $j . '/' . $i . '.jpg';
                    @endphp
                    @if(file_exists(public_path($image)))
                      <li><img class="image_item" src="{{ asset($image) }}" /></li>
                    @endif
                  @endfor
              </ul>
              <button class="next-slide slide_button material-symbols-rounded">&#10095;</button>
          </div>
          <div class="slider-scrollbar">
              <div class="scrollbar-track">
                  <div class="scrollbar-thumb"></div>
              </div>
          </div>
      </div>
  </div>
  @endif
@endfor -->

<script>
    // JavaScript for controlling image sliders
    document.querySelectorAll('.slider_wrapper').forEach(wrapper => {
        const prevBtn = wrapper.querySelector('.prev-slide');
        const nextBtn = wrapper.querySelector('.next-slide');
        const imageList = wrapper.querySelector('.image_list');
        const images = imageList.querySelectorAll('.image_item');
        const totalImages = images.length;
        let currentIndex = 0;

        // Function to go to the previous slide
        const prevSlide = () => {
            if (currentIndex > 0) {
                currentIndex--;
            } else {
                currentIndex = totalImages - 1;
            }
            updateSlide();
        };

        // Function to go to the next slide
        const nextSlide = () => {
            if (currentIndex < totalImages - 1) {
                currentIndex++;
            } else {
                currentIndex = 0;
            }
            updateSlide();
        };

        // Function to update the slide display
        const updateSlide = () => {
            images.forEach((img, index) => {
                if (index === currentIndex) {
                    img.style.display = 'block';
                } else {
                    img.style.display = 'none';
                }
            });
        };

        // Show the initial slide
        updateSlide();

        // Event listeners for the previous and next buttons
        prevBtn.addEventListener('click', prevSlide);
        nextBtn.addEventListener('click', nextSlide);
    });
</script>

@endsection
