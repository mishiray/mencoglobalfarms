
    var countDownDate = new Date("Mar 1, 2022 00:00:00").getTime();
    
    var x = setInterval(function() {

      // Get today's date and time
      var now = new Date().getTime();
    
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
    
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
      var daysSpan = $(document).find('.days');
      var hoursSpan = $(document).find('.hours');
      var minutesSpan = $(document).find('.minutes');
      var secondsSpan = $(document).find('.seconds');
      
      daysSpan.html(days);
      hoursSpan.html(hours);
      minutesSpan.html(minutes);
      secondsSpan.html(seconds)

      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);