<?php
  // Initialize the session to store user data
  session_start();

  // Check if the user has already logged in before
  $loggedIn = isset($_SESSION['isLoggedIn']) ? true : false;
  if ($loggedIn) {
    echo "You have already logged in, please log out first.";
  } else {
    // Set some initial values to be used throughout the session
    $_SESSION['username'] = 'YourUsername'; // Replace with your actual username

    // Display a welcome message to the user
    echo "Welcome! Please proceed with logging in now.";

    // If there are errors, display them here instead of logging out
    if (isset($_POST['error'])) {
      $errors = $_POST['error'];
      echo "There were some issues:\n";
      foreach ($errors as $error) {
        echo "- $error\n";
      }
    } else {
      // Handle login errors and redirect to the login page with a flash message
      $flash_message = 'Login failed!';
      session_destroy();
      header("Location: https://your-login-page.com?loginErrors=$flash_message");
      exit;
    }
  }
?>
