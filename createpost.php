<?php
require 'PHPMailer-master\src\Exception.php';
require 'PHPMailer-master\src\PHPMailer.php';
require 'PHPMailer-master\src\SMTP.php';
include "createpost_css.php";

// Use the PHPMailer namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mini_pro";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save_image'])) {
    // Escape user inputs for security
    $title = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $category = mysqli_real_escape_string($conn, $_POST['select']);

    // File upload handling
    $filename = $_FILES['image']['name'];
    $filetmpname = $_FILES['image']['tmp_name'];
    $folder = 'uploads/';
    $filePath = $folder . $filename;
    move_uploaded_file($filetmpname, $filePath);

    // Get latitude, longitude, and location name from the hidden input fields
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    $locationName = $_POST['location_name'];

    // Insert data into database
    $sql = "INSERT INTO mini (title, des, problem, image, latitude, longitude, location_name) VALUES ('$title', '$description', '$category', '$filename', '$latitude', '$longitude', '$locationName')";
    if(mysqli_query($conn, $sql)){
        // Send email with information
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'khandavillianusha544@gmail.com'; // Your Gmail address
            $mail->Password = 'bzwp cpoc mgjr hyex'; // Your Gmail app password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->setFrom('khandavillianusha544@gmail.com', 'Anusha');
            $mail->addAddress('khandavillianusha544@gmail.com', 'k.Anusha');
            $mail->Subject = 'New Post Created';
            $mail->Body = "Title: $title\nDescription: $description\nCategory: $category\nLocation Name: $locationName";
            $mail->addAttachment($filePath); // Attach the uploaded file

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        // Redirect to retrieve page
        header("location: post.php");
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}

// Close connection
mysqli_close($conn);
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Post</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <link rel="stylesheet" href="store.css">
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
</head>
<body>
  <h1>Create Post</h1>

  <section>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
    <div>
      <label for="name">Title:</label>
      <input type="text" id="name" name="name" required>
    </div>
    <div>
      <label for="description">Description:</label>
      <textarea id="description" name="description" required></textarea>
    </div>
    <div>
      <label for="select-menu">Problem Category:</label>
      <select name="select" id="select-menu" required>
        <option selected disabled>Choose problem category</option>
        <option value="Algae growth">Algae growth</option>
        <option value="Flash Flood">Flash Flood</option>
        <option value="Waterlogging">Waterlogging</option>
        <option value="Pipeline damage">Pipeline damage</option>
        <option value="Clogged drain">Clogged drain</option>
        <option value="Industrial waste">Industrial waste</option>
        <option value="Garbage Disposal">Garbage Disposal</option>
      </select>
    </div>
    <div>
      <label for="image">Image:</label>
      <input type="file" id="image" name="image" required>
    </div>

    <!-- Location part -->
    <button type="button" onclick="getLocation()">Get Location</button>
    <input type="hidden" id="latitude" name="latitude">
    <input type="hidden" id="longitude" name="longitude">
    <input type="hidden" id="location_name" name="location_name">
    <div id="map" style="height: 400px;"></div>

    <button type="submit" id="balu" name="save_image">CREATE</button>
  </form>
  </section>

  <script>
    function getLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
      } else {
        alert("Geolocation is not supported by this browser.");
      }
    }

    function showPosition(position) {
      var latitude = position.coords.latitude;
      var longitude = position.coords.longitude;

      var nominatimApiUrl = 'https://nominatim.openstreetmap.org/reverse?format=json&lat=' + latitude + '&lon=' + longitude;

      fetch(nominatimApiUrl)
        .then(response => response.json())
        .then(data => {
          var locationName = data.display_name;

          document.getElementById("latitude").value = latitude;
          document.getElementById("longitude").value = longitude;
          document.getElementById("location_name").value = locationName;

          showMap(latitude, longitude);
        })
        .catch(error => {
          console.error('Error:', error);
        });
    }

    function showMap(latitude, longitude) {
      var map = L.map('map').setView([latitude, longitude], 13);

      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(map);

      L.marker([latitude, longitude]).addTo(map);
    }
  </script>
</body>
</html>
