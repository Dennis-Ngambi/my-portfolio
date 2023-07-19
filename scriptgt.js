window.onload = function() {
    // Get the current date
    var currentDate = new Date();
    // Get the hour of the current date
    var currentHour = currentDate.getHours();
    // Define the greeting based on the current hour
    var greeting;
    if (currentHour < 12) {
      greeting = 'Good morning';
    } else if (currentHour < 18) {
      greeting = 'Good afternoon';
    } else {
      greeting = 'Good evening';
    }
    // Display the greeting and date in the HTML container
    var greetingContainer = document.getElementById('greeting');
    greetingContainer.innerHTML = greeting + ', today is ' + currentDate.toDateString();
  }
