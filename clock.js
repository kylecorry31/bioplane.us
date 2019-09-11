$(function() {
  displayTimeUntilFlight();
  setInterval(displayTimeUntilFlight, 1000)
});

function displayTimeUntilFlight() {
  var flightDate = new Date(2016, 3, 16, 9, 30);
  var timeUntil = diffTime(new Date(), flightDate);
  var secondsUntil = timeUntil / 1000;
  var minutesUntil = secondsUntil / 60;
  var hoursUntil = minutesUntil / 60;
  var daysUntil = Math.floor(hoursUntil / 24);
  hoursUntil -= daysUntil * 24;
  hoursUntil = Math.floor(hoursUntil);
  minutesUntil -= daysUntil * 24 * 60 + hoursUntil * 60;
  minutesUntil = Math.floor(minutesUntil);
  secondsUntil -= daysUntil * 24 * 60 * 60 + hoursUntil * 60 * 60 + minutesUntil * 60;
  secondsUntil = Math.round(secondsUntil);
  if (daysUntil == 1) {
    daysUntil += " Day";
  } else {
    daysUntil += " Days";
  }

  if (hoursUntil == 1) {
    hoursUntil += " Hour";
  } else {
    hoursUntil += " Hours";
  }

  if (minutesUntil == 1) {
    minutesUntil += " Minute";
  } else {
    minutesUntil += " Minutes"
  }

  if (secondsUntil == 1) {
    secondsUntil += " Second";
  } else {
    secondsUntil += " Seconds";
  }
  $('#countdown').text(daysUntil + " " +
    hoursUntil + " " + minutesUntil + " " + secondsUntil + " Until Takeoff");
}

function diffTime(time1, time2) {
  return time2 - time1;
}
