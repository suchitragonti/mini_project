<?php include "header.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: 'poppins', sans-serif;
      }
      body{
          min-height: 100vh;
          background: #010615;
      }
      .container {
          display: flex;
          justify-content: center;
          align-items: center;
          flex-wrap: wrap;
          min-height: 100vh;
      }
      .box{
          position: relative;
          width: 350px;
          height: 400px;
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          margin: 40px;
          transition: 0.5s;
          background: #060c21;
          border-radius: 10px;
      }
      .box:hover{
          height: 600px;
      }
      .box .imgBx {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          padding: 10px;
          box-sizing: border-box;
      }
      .box .imgBx img{
          max-width: 100%;
          opacity: 0.5;
          transition: 0.5s;
          border-radius: 10px;
      }

      .box:hover .imgBx img{
          opacity: 1;
      }

      .box:before{
          content: '';
          position: absolute;
          top: -2px;
          left: -2px;
          right: -2px;
          bottom: -2px;
          background: #fff;
          z-index: -1;
      }
      .box:after{
          content: '';
          position: absolute;
          top: -2px;
          left: -2px;
          right: -2px;
          bottom: -2px;
          background: #fff;
          z-index: -2;
          filter: blur(40px);
      }
      .box:before,
      .box::after
      {
          background: linear-gradient(235deg,#C33764,#1D2671,#00bcd4);
      }

      .box:nth-child(2):before,
      .box:nth-child(2):after,
      .box:nth-child(3):before,
      .box:nth-child(3):after
      {
          background: linear-gradient(235deg,#C33764,#1D2671,#00bcd4);
      }

      .box .content {
          position: absolute;
          bottom: 0;
          left: 10px;
          right: 10px;
          bottom: 10px;
          height: 200px;
          background: rgba(0, 0, 0, 0.4);
          display: block;
          justify-content: center;
          align-items: center;
          opacity: 0;
          transition: 0.5s;

      }
      .box:hover .content{
          opacity: 1;
      }

      .box .content p{
          font-size: 15px;
          color: #fff;
          font-weight: 500;
          line-height: 20px;
          letter-spacing: 1px;
          padding: 10px;
      }
      .box .content p span{
          font-size: 14px;
          color: #fff;
          font-weight: 200;
          letter-spacing: 2px;

      }
      .box .content_one h3,h4{
          font-size: 20px;
          color: #fff;
          font-weight: 500;
          line-height: 20px;
          letter-spacing: 1px;
          text-align: center;
          padding: 10px;
      }
      #createpost a{
          position:fixed;
          bottom:0px;
          right:0px;
          margin:20px;
          border:2px solid white;
          padding:10px 20px;
          text-decoration:none;
          color:green;
      }
      #createpost a:hover{
          background:linear-gradient(235deg,#C33764,#010615,#00bcd4); 
          border:2px solid black;
          border-radius:10px;
      }
    </style>
</head>
<body>
    <div class="container">
    <?php
        // Database configuration
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "mini_pro";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Define SQL query
        $sql = "SELECT location_name, title, des, problem, image FROM mini";

        // Execute query
        $result = $conn->query($sql);

        // Check if any rows were returned
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = mysqli_fetch_array($result)) {
                // Display fetched data in HTML format
                echo '<div class="box">';
                echo '<div class="imgBx">';
                echo '<div class="content_one">';
                echo '<img src="uploads/' . $row['image'] . '" alt="' . $row['title'] . '" style="height: 255px;">';
                echo '<h3>Title: ' . $row['title'] . '</h3>';
                echo '<h4>Category: ' . $row['problem'] . '</h4>';
                echo '</div>';
                echo '</div>';
                echo '<div class="content">';
                echo '<p>';
                echo '<span>' . $row['des'] . '</span>';
                echo '</p>';
                echo '<p>';
                echo '<span>' . $row['location_name'] . '</span>';
                echo '</p>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            // No data found
            echo '<p>No data found</p>';
        }

        // Close connection
        $conn->close();
    ?>
    </div>
    <div id="createpost">
        <a href="createpost.php" id="create_post">CREATE POST</a>
    </div>
</body>
</html>