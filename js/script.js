// Function to handle button click event
function handleClick(event) {
  // Check if the user is logged in
  if (!isLoggedIn()) {
    // User is not logged in, redirect to the login page
    event.preventDefault(); // Prevent the default behavior of the button
    window.location.href = "login.html";
  }
}

// Function to check if the user is logged in
function isLoggedIn() {
  // Implement your logic to check if the user is logged in
  // Return true if the user is logged in, false otherwise
  // You can use cookies, session storage, or an authentication state variable to implement this logic
  // Here's a basic example using a fake authentication state variable
  var isAuthenticated = false; // Replace with your authentication logic
  return isAuthenticated;
}

// Get the buttons by class name and attach the event listener
var buttons = document.getElementsByClassName("tm-btn-secondary");
for (var i = 0; i < buttons.length; i++) {
  buttons[i].addEventListener("click", handleClick);
}
