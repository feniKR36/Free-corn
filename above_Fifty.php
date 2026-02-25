<!DOCTYPE html>
<html>

<head>
  <body style="background-color:#0FFF50;"></body>
  <title>Corn Hub</title>
  <style>
    body {
      font-family: Arial;
      background: #fff8dc;
      margin: 0;
      padding: 20px;
    }

    h1 {
      text-align: center;
    }

    .container {
      display: grid;
      grid-template-columns: 3fr 1fr;
      gap: 20px;
    }


    .video-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 12px;
    }

    .video-grid video {
      width: 100%;
      border-radius: 10px;
    }


    .side-panel {
      background: #fff;
      padding: 15px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    button {
      width: 100%;
      padding: 12px;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      background: gold;
      cursor: pointer;
    }

    button:hover {
      background: orange;
    }

    #factDisplay {
      margin-top: 15px;
      font-style: italic;
    }
  </style>
</head>

<body>

  <h1>Premium cornhub content</h1>

  <div class="container">


    <div class="video-grid">
      <video src="videos/vid1.mp4" controls></video>
      <video src="videos/vid2.mp4" controls></video>
      <video src="videos/vid3.mp4" controls></video>
      <video src="videos/vid4.mp4" controls></video>
      <video src="videos/vid5.mp4" controls></video>
      <video src="videos/vid6.mp4" controls></video>
    </div>


    <div class="side-panel">
      <h3>Corn Random Facts</h3>
      <button onclick="randomFact()">Give me a corn fact </button>
      <p id="factDisplay"></p>
    </div>

  </div>

  <script>
    const facts = [
      "Corn is grown on every continent except Antarctica.",
      "There are over 3,500 uses for corn products.",
      "Corn kernels always grow in even-numbered rows.",
      "Corn is technically a grain, fruit, and vegetable.",
      "The average ear of corn has about 800 kernels.",
      "Corn is ACTUALLY THAT important in dr. stone.",
      "Corn originated in Mesoamerica thousands of years ago.",
      "One-third of U.S. corn is used for livestock feed, another third for ethanol fuel, and the rest for food and industry.",
      "Henry Ford’s Model T was designed to run on corn ethanol as well as gasoline.",
      "In 2019, U.S. farmers planted 91.7 million acres of corn—about 69 million football fields.",
      "Corn can be used to make biodegradable packing materials.",
      "A Peruvian variety of corn has kernels so large they are eaten individually."
    ];

    function randomFact() {
      const randomIndex = Math.floor(Math.random() * facts.length);
      document.getElementById("factDisplay").innerText = facts[randomIndex];
    }
  </script>

</body>

</html>