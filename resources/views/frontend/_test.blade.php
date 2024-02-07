@extends('temp_layouts/template')
@section('content')
@include('frontend.events.events_head_assets')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="{{ asset('path/to/style.css') }}" />
    <script src="{{ asset('path/to/script.js') }}" defer></script>

    <style>
        /* 
            * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            }
            */

            .slider-body {
            display: flex; 
            }

            .containerslider {
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

            .containerslider .slider-scrollbar {
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
                    <button id="prev-slide-{{ $j }}" class="slide-button material-symbols-rounded" onclick="prevSlide({{ $j }})">
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
                    <button id="next-slide-{{ $j }}" class="slide-button material-symbols-rounded" onclick="nextSlide({{ $j }})">
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
    // JavaScript functions for slider control
    function prevSlide(j) {
        // Get the current active image index
        var currentIndex = getCurrentIndex(j);
        
        // Calculate the index of the previous image
        var newIndex = (currentIndex - 1 + 10) % 10; // Ensure it wraps around for the first image
        
        // Display the new image
        showImage(j, newIndex);
    }

    function nextSlide(j) {
        // Get the current active image index
        var currentIndex = getCurrentIndex(j);
        
        // Calculate the index of the next image
        var newIndex = (currentIndex + 1) % 10; // Ensure it wraps around for the last image
        
        // Display the new image
        showImage(j, newIndex);
    }

    function handleImageClick(imagePath) {
        // Implement logic for handling image click if needed
        console.log('Image clicked:', imagePath);
        // Add your custom logic here, such as opening a modal or redirecting to a detailed view.
    }

    // Helper function to get the current active image index
    function getCurrentIndex(j) {
        var imageList = document.getElementById('image-list-' + j);
        var currentImage = imageList.querySelector('.active');
        
        if (currentImage) {
            return Array.from(imageList.children).indexOf(currentImage);
        } else {
            return 0; // Default to the first image if none is marked as active
        }
    }

    // Helper function to show a specific image in the slider
    function showImage(j, index) {
        var imageList = document.getElementById('image-list-' + j);
        
        // Remove the 'active' class from all images
        Array.from(imageList.children).forEach(function (image) {
            image.classList.remove('active');
        });

        // Add the 'active' class to the specified image
        imageList.children[index].classList.add('active');
    }

    // Responsive adjustments
    window.addEventListener('resize', function () {
        adjustSliderLayout();
    });

    function adjustSliderLayout() {
        var windowWidth = window.innerWidth;
        var slideButtons = document.querySelectorAll('.slide-button');

        if (windowWidth <= 1023) {
            slideButtons.forEach(function (button) {
                button.style.display = 'none';
            });
        } else {
            slideButtons.forEach(function (button) {
                button.style.display = 'block';
            });
        }
    }

    // Initial adjustment on page load
    adjustSliderLayout();
</script>


    @endif
@endfor

@endsection
