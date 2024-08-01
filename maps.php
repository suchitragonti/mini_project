<?php include "header.php"?>
<!DOCTYPE html>
<html>
<head>
    <title>Map Example</title>
    <style>
        .mapbody{
            
        }
        /* Set the size of the map */
        #map {
            /* margin-top:100px; */
            margin-left:150px;
            height: 550px; /* Default height */
            width: 80%;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            justify-content:center;
        }

        /* Style for the page title */
        h1 {
            font-family: Arial, sans-serif;
            color: #333;
            text-align: center;
        }

        /* Style for the body content */
        .content {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Responsive styles */
        @media screen and (max-width: 600px) {
            /* Adjust map height for smaller screens */
            #map {
                height: 300px;
            }
        }

        @media screen and (max-width: 400px) {
            /* Further adjust map height for even smaller screens */
            #map {
                height: 200px;
            }
        }
    </style>
</head>
<body>
    <!-- <h1>My Map</h1> -->
    <!-- Map container -->
    <div class="mapbody">
    <div id="map"></div>

    <!-- Include the Google Maps JavaScript API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBX8Dfvfo5xijD7EUsJ8vQdHoIouNGdFEY&callback=initMap" async defer></script>
    
    <script>
        // Function to initialize the map
        function initMap() {
            // Create a map object and specify the DOM element for display.
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 5,
                center: { lat: 20.5937, lng: 78.9629 } // Center of the United States
            });

            // Retrieve location data from PHP
            var locations = <?php
                // Replace with your database connection details
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

                // Query to retrieve all data from the location table
                $sql = "SELECT * FROM mini";
                $result = $conn->query($sql);

                // Initialize an empty array to store locations
                $locations = array();

                // Fetch locations from the result set
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        // Push location data to the array
                        $locations[] = $row;
                    }
                }

                // Close connection
                $conn->close();

                // Output locations as JSON
                echo json_encode($locations);
            ?>;
            
            // Loop through the locations array and add a marker for each location
            for (var i = 0; i < locations.length; i++) {
                var marker = new google.maps.Marker({
                    position: { lat: parseFloat(locations[i].latitude), lng: parseFloat(locations[i].longitude) },
                    map: map,
                    title: locations[i].location_name
                });
            }
        }
    </script>
    </div>
</body>
</html>