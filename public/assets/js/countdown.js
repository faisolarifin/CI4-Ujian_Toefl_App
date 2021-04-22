function padLeadingZeros(num) {
    var s = num+"";
    while (s.length < 2) s = "0" + s;
    return s;
}

// Set the date we're counting down to
var countDownDate=localStorage.getItem("countdown");

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  // var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("countdown").innerHTML =  padLeadingZeros(hours) + ":" + padLeadingZeros(minutes) + ":" + padLeadingZeros(seconds);
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    localStorage.removeItem('countdown')
    alert('Time Out');
    window.location.reload(true);
    window.location.assign("http://localhost:8080/finish");
  }
}, 1000);