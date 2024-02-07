@extends('temp_layouts/template')
@section('content')
@include('frontend.events.events_head_assets')

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="style.css" />
<script src="script.js" defer></script>
<style>
    /* Your existing styles remain unchanged */

    /* Add any additional styles if needed */
</style>
</head>

<body>
    <div class="container-slider">
        <div class="slider-wrapper">
            <button id="prev-slide" class="slide-button material-symbols-rounded">
                chevron_left
            </button>
            @for ($j = 1; $j < 10; $j++)
                @php
                $folderPath = public_path('assets/src/event_1/activity_' . $j);
                $activityView = 'frontend.events.event_1_activity_' . $j;
                @endphp

                @if(is_dir($folderPath))
                    @includeWhen(View::exists($activityView), $activityView)

                    <ul class="image-list">
                        @for ($i = 1; $i < 10; $i++)
                            @php
                            $imagePath = 'assets/src/event_1/activity_' . $j . '/' . $i . '.jpg';
                            @endphp

                            @if(file_exists(public_path($imagePath)))
                                <li class="image-item">
                                    <img src="{{ asset($imagePath) }}" alt="img-{{ $i }}" />
                                </li>
                            @endif
                        @endfor
                    </ul>
                @endif
            @endfor
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
    <script>
        // Your existing JavaScript code remains unchanged
    </script>
</body>

@endsection
