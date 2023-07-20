var countDownDate = localStorage.getItem("countDownDate");

if (!countDownDate) {
  countDownDate = new Date("Apr 20, 2023 12:00:00").getTime();

  localStorage.setItem("countDownDate", countDownDate);
} else {
  countDownDate = Number(countDownDate);
}

var x = setInterval(function () {
  var now = new Date().getTime();

  var distance = countDownDate - now;

  var hours = Math.floor((distance % (1000 * 60 * 60 * 1)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("countdown").innerHTML =
    hours + "h " + minutes + "m " + seconds + "s ";

  if (distance < 0) {
    clearInterval(x);

    var restartTime = new Date().getTime() + 1000 * 60 * 30;

    localStorage.setItem("countDownDate", restartTime);

    countDownDate = restartTime;
    x = setInterval(arguments.callee, 1000);
  }
}, 1000);
