<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Countdown</title>
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

html,
body {
  /*background-color: #EAC926; */
  width: 100%;
  height: 100%;
  overflow: hidden; /* Hide scroll bars */
}

ul#till-countdown {
  position: relative;
  top: 50%;
  transform: translateY(-50%);
  width: 50%;
  margin: 0 auto;
  padding: 15px 0 20px 0;
  color: #000;
  border: 1px solid #000;
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

#after-countdown {
  display: none;
  text-align: center;
  margin-top: 20px;
}

#after-countdown h1 {
  font-size: 24px;
  color: #333;
}

#confetti {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
</style>
</head>
<body>
<ul id="till-countdown">
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

<div id="after-countdown">
  <h1>Hello World</h1>
</div>

<canvas id="confetti"></canvas>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/js-confetti"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Feb 24, 2024 13:02:45").getTime();

    // Other date related variables
    var days;
    var hrs;
    var min;
    var sec;
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
        hrs = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        min = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        sec = Math.floor((distance % (1000 * 60)) / 1000);

        // Write to countdown component
        $("#days .number").text(days);
        $("#hours .number").text(hrs);
        $("#minutes .number").text(min);
        $("#seconds .number").text(sec);

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
        }else{
          document.body.style.backgroundColor = "#EAC926";
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
</body>
</html>
