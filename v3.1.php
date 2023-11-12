<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Toggle</title>
  <style>
    body {
      background-color: black;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    img {
      display: none;
      margin: 5px; /* Add margin to images */
      max-width: 100%;
      height: auto;
      border: 2px solid white; /* Add border for better visibility */
    }

    #content-container {
      max-width: 600px; /* Set a maximum width for the content */
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    #image-container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    button {
      margin: 5px;
    }

    /* Center buttons */
    #button-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      width: 100%; /* Ensure buttons take up full width */
    }

    /* Media query for screens with a width of 600px or less */
    @media screen and (max-width: 600px) {
      button {
        width: 100%; /* Make buttons full width on small screens */
      }
    }
  </style>
</head>

<body>

<div id="content-container">
  <div id="image-container">
    <img id="image1" src="Screenshots/Screenshot (284).png" alt="Image 1">
    <img id="image2" src="Screenshots/Screenshot (285).png" alt="Image 2">
    <img id="image3" src="Screenshots/Screenshot (286).png" alt="Image 3">
    <img id="image4" src="Screenshots/Screenshot (287).png" alt="Image 4">
    <img id="image5" src="Screenshots/Screenshot (288).png" alt="Image 5">
    <img id="image6" src="Screenshots/Screenshot (289).png" alt="Image 6">
    <img id="image7" src="Screenshots/Screenshot (290).png" alt="Image 7">
    <img id="image8" src="Screenshots/Screenshot (291).png" alt="Image 8">
  </div>

  <!-- Buttons centered under the image container -->
  <div id="button-container">
    <button onclick="changeSpeed(1000)">Slow</button>
    <button onclick="changeSpeed(500)">Normal</button>
    <button onclick="changeSpeed(250)">Fast</button>
    <button onclick="changeSpeed(100)">Very Fast</button>
    <button onclick="toggleImages()">Toggle Pictures</button>
  </div>

</div>

<script>
  let currentImage = 1;
  let intervalSpeed = 1000; // Default interval speed
  let intervalId; // Variable to store the interval ID

  // Function to toggle images
  function toggleImages() {
    // Hide all images
    for (let i = 1; i <= 8; i++) {
      document.getElementById(`image${i}`).style.display = 'none';
    }

    // Show the next image or the first one if it's the last
    currentImage = (currentImage % 8) + 1;
    document.getElementById(`image${currentImage}`).style.display = 'block';
  }

  // Function to change interval speed
  function changeSpeed(speed) {
    intervalSpeed = speed;
    clearInterval(intervalId); // Clear the existing interval
    intervalId = setInterval(toggleImages, intervalSpeed); // Set a new interval
  }

  // Toggle images automatically on load with the default interval speed
  intervalId = setInterval(toggleImages, intervalSpeed);
</script>

</body>

</html>
