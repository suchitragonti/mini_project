<!-- <?php include "retrieve.php"?> -->
<!-- <?php include ".php"?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>miniproject</title>
    <link rel="stylesheet" href="home.css">
    <style>
                 * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .banner {
            width: 100%;
            height: 120vh;
            background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url('https://image.slidesdocs.com/responsive-images/background/high-definition-microscopic-image-of-pure-water-droplets-powerpoint-background_a86a1d3e1d__960_540.jpg');
            background-size: cover;
            background-position: center;
            /* background-attachment: fixed; */
            
         }
        
         .navbar {
            width: 85%;
            margin: auto;
            padding: 35px 0px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            
       
        }

        .logo {
            height:"50px";
            width: 120px;
            cursor: pointer;
        }

        .navbar ul li {
            list-style: none;
            display: inline-block;
            margin: 0 20px;
            position: relative;
        }

        .navbar ul li a {
            text-decoration: none;
            color: white;
            text-transform: uppercase;
            
        }

        .navbar ul li::after {
            content: ' ';
            height: 3px;
            width: 0px;
            background: #001aaa;
            position: absolute;
            left: 0px;
            bottom: -10px;
            transition: 0.5s;
        }

        .navbar ul li:hover:after {
            width: 100%;
        } 
        

        .content {
            width: 80%;
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
        }

        .content h1 {
            font-size: 70px;
            margin-top: 80px;
        }

        .content p {
            margin: 20px auto;
            font-weight: 150px;
            line-height: 25px;
            font-size: 25px;
        }

        @keyframes animate {
            0%,
            100% {
                clip-path: polygon(0% 45%, 16% 44%, 33% 50%, 54% 60%, 70% 61%, 84% 59%, 100% 52%, 100% 100%, 0% 100%);
            }

            50% {
                clip-path: polygon(0% 60%, 15% 65%, 34% 66%, 51% 62%, 67% 50%, 84% 45%, 100% 46%, 100% 100%, 0% 100%);
            }
        }

        .content h2 {
            color: #fff;
            font-size: 8em;
            position: absolute;
            transform: translate(-50%, -50%);
            margin-left: 480px;
        }

        .content h2:nth-child(1) {
            color: transparent;
            -webkit-text-stroke: 2px #03a9f4;
        }

        .content h2:nth-child(2) {
            color: #03a9f4;
            animation: animate 4s ease-in-out infinite;
        }
    </style>
</head>
<body>
     <div class="banner">
        <div class="navbar">
            <img src="assets\Frame 1.png" class="logo" >
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="post.php">Posts</a></li>
                <li><a href="maps.php">Maps</a></li>
                <!-- <li><a href="#">Profile</a></li> -->
            </ul>
            
        </div>
    </div> 
    <section>
        <div class="content" style="margin-left: 100px;">
            <h2>Aqua Alert!</h2>
            <h2>Aqua Alert!</h2>
        </div>
    </section>
    <div class="content" style="margin-top: 10%;">
        <!-- <h1>Aqua Alert!!!</h1> -->
        <p>A Web application that crowd sources water-related problems from around a community,</p>
        <p>open sources data, etc. and notifying to authorities.</p>
    </div>
</body>
</html>