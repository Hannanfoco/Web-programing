<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger Master</title>

    <!-- Include jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./images/logo">
    <!-- Style CSS Link -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styler.css">
    <link rel="stylesheet" href="css/stylep.css">

    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!-- Aos Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Link CSS files -->
    <link rel="stylesheet" type="text/css" href="css/spapp.css">
</head>
<body>

    <div id="content">
        <!-- Content of different pages will be loaded here -->
    </div>

   <!-- Navbar Start -->
<div class="navbar">
    <nav>
        <input type="checkbox" id="show-search">
        <input type="checkbox" id="show-menu">
        <label for="show-menu" class="menu-icon"><i class="fa-solid fa-bars"></i></label>

        <div class="content">
            <div class="logo"><img src="./images/logo" alt=""></div>
            <ul class="links">
                <li><a href="#our-menu">Menu</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#order">Order</a></li>
                <li><a href="#reviews">Reviews</a></li>
                <!-- Add Register, Login, and Profile links -->
                <li><a href="register.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="profile.php">Profile</a></li>
            </ul>
        </div>

        <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
        <form action="#" class="search-box">
            <input type="text" placeholder="Type Something To Search..." required>
            <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
        </form>
    </nav>
</div>
<!-- Navbar End -->

    <!-- JavaScript -->
    <script src="js/jquery.spapp.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/spapp.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        jQuery(document).ready(function() {
            // Initialize SPApp
            jQuery('#content').spapp({
                pages: {
                    'login': 'login.php',
                    'register': 'register.php',
                    'profile': 'profile.php'
                }
            });

            // Initialize AOS animations
            AOS.init();
        });
    </script>

</body>
</html>

