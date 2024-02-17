<!DOCTYPE html>
<html>
<body>

<main>
    @if ($timeRemaining > 0)
        <div id="countdown"></div>
    @else
    <h1>Welcome to Our Application!</h1>
    @endif
</main>

@if ($timeRemaining > 0)
    <script>
        // Set the countdown target time (in seconds)
        var countdownTarget = {{ $timeRemaining }};

        function updateCountdown() {
            // Calculate days, hours, minutes, and seconds from seconds
            var days = Math.floor(countdownTarget / (60 * 60 * 24));
            var hours = Math.floor((countdownTarget % (60 * 60 * 24)) / (60 * 60));
            var minutes = Math.floor((countdownTarget % (60 * 60)) / (60));
            var seconds = Math.floor(countdownTarget % 60);

            // Update the countdown display
            document.getElementById('countdown').innerHTML = days + " days " + hours + " hours " + minutes + " minutes " + seconds + " seconds";

            // Decrease countdown target by 1 second
            countdownTarget--;

            // If countdown reaches zero, display a message or take action
            if (countdownTarget < 0) {
                clearInterval(interval);
                document.getElementById('countdown').innerHTML = "The application is now open!";
            }
        }

        // Call updateCountdown every second
        var interval = setInterval(updateCountdown, 1000);
    </script>
@endif

</body>
</html>

 