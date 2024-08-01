<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "poppins", sans-serif;
        }
        body{
            min-height: 100vh;
            /* background: url('https://image.slidesdocs.com/responsive-images/background/high-definition-microscopic-image-of-pure-water-droplets-powerpoint-background_a86a1d3e1d__960_540.jpg') no-repeat; */
            background-size: cover;
            background-position: center;
        }
        .header{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 1.2rem 10%;
            
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
            /* backdrop-filter: blur(50px); */
        }
        .header::before{
            content: '';
            top:0;
            left: 0;
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url('https://image.slidesdocs.com/responsive-images/background/high-definition-microscopic-image-of-pure-water-droplets-powerpoint-background_a86a1d3e1d__960_540.jpg');
            backdrop-filter: blur(50px);
            z-index: -1;
        }
        .header::after{
            content: '';
            position: absolute;
            left: -100%;
            top:0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url('https://image.slidesdocs.com/responsive-images/background/high-definition-microscopic-image-of-pure-water-droplets-powerpoint-background_a86a1d3e1d__960_540.jpg');
            transition:.5s ;
        }
        .header:hover::after{
            left: 100%;
        }
        .logo{
            font-size: 2rem;
            color: #fff;
            text-decoration: none;
            font-weight: 700;
        }
        .navbar a{
            font-size: 1.15rem;
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            margin-left: 2.5rem;
        }
        #check{
            display: none;
        }
        .icons{
            position: absolute;
            right: 5%;
            font-size: 2.8rem;
            color: #fff;
            cursor: pointer;
            display: none;
        }
        @media(max-width:992px){
           .header{
            padding: 1.3rem 5%;
           }
        }
        @media(max-width:768px){
            .icons{
                display: inline-flex;
            }
            #check:checked~.icons #menu{
                display: none;
            }
            #check:checked~.icons #close{
                display: block;
            }
            .icons #close{
                display: none;
            }
            .navbar{
                position: absolute;
                left: 0;
                top: 100%;
                width: 100%;
                height: 0;
                background-color: rgba(0,0,0,0.1);   
                backdrop-filter: blur(50px);   
                box-shadow: 0 .5rem 1rem rgba(0,0,0,0.1);
                transition: 0.3s ease;
                overflow: hidden;
             }
             #check:checked~.navbar{
                height: 17.7rem;
             }
        .navbar a{
            display: block;
            font-size: 1.1rem;
            margin: 1.5rem 0;
            text-align: center;
            transform: translateY(-50px);
            transition: .3s ease;
            opacity: 0;
        }
        #check:checked~.navbar a{
            transform: translateY(0);
            transition-delay: calc(.15s*var(--i));
            opacity: 1;
             }
    }
    </style>
</head>
<body>
    <header class="header">
        <a href="" class="logo">Logo</a>
        <input type="checkbox" id="check">
        <label for="check" class="icons">
            <i class='bx bx-menu' id="menu"></i>
            <i class='bx bx-x' id="close"></i>
        </label>
        <nav class="navbar">
            <a href="home.php" style="--i:0">Home</a>
            <a href=" " style="--i:1">About</a>
            <a href="post.php" style="--i:2">Post</a>
            <a href="maps.php" style="--i:3">Maps</a>
            <a href=" " style="--i:4">Profile</a>
        </nav>
    </header>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        body{
            background:black;
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
        

    </style>
</head>
<body>
<div class="banner">
        <div class="navbar">
            <img src="assets\Frame 1.png" class="logo" style="height:100px;width:100px">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="post.php">Posts</a></li>
                <li><a href="maps.php">Maps</a></li>
                <!-- <li><a href="#">Profile</a></li> -->
            </ul>
            
        </div>
    </div> 
    
</body>
</html>