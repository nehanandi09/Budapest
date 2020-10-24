<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <?php 
        include("navbar.php");
    ?>
    <section class="background ">
        <div class="center-align">
            <h2 class="valign center-block">Welcome to The Grand Budapest Hotel</h2>
        </div>        
    </section>

    <!-- About Us -->
    <section class="container section scrollspy" id="AboutUs">
        <div class="center-align aboutus">
            <h4 class="grey-text text-darken-2">About Us</h4>
            <p class="grey-text"><em>We love holidays!</em></p>
            <p class="grey-text text-darken-2">Welcome to our website. We provide you best rooms at best deals, all at the
            ease of the hand! We have developed a Database for Hotel Management System which
            allows us to keep track of all customers and their details, as well as Room
            details and their Availability</p>
        </div>
    </section>

    <!-- Parallax -->
    <div class="parallax-container">
        <div class="parallax">
            <img src="images/team.jpg" alt="" class="responsive-img">
        </div>
    </div>

    <!-- Section-2 -->
    <section class="container section">
        <div class="center-align">
        <p class="grey-text"><em>Phew!! It was an intensive task!</em></p>
        <p class="grey-text text-darken-2">From Database creation to Database connectivity, from simple php form to CSS
        styling, it has been a long journey! And, this hard work has surely transformed
        into a masterpiece with the collaboration of our team and it's countless hours of
        thinking!</p>
        </div>
    </section>

    <!-- Parallax -->
    <div class="parallax-container">
        <div class="parallax">
            <img src="images/image.jpg" alt="" class="responsive-img">
        </div>
    </div>

    <!-- Amenities -->
    <?php 
    include("amenities.php");
    ?>
    
    <div class="parallax-container">
        <div class="parallax last-img">
            <img src="images/try.jpg" alt="" class="responsive-img">
        </div>
    </div>

    <section class="section container scrollspy" id="contact">
        <div class="row">
            <div class="col l12 s12">
                <h4>Our Location</h4>
                <ul>
                    <li>The Grand Budapest, Germany</li>
                    <li>Phone: +91 1234567890</li>
                     <li>Email: grand@hotel.com</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="page-footer grey darken-4">
        <div class="container center-align">
            <div class="row">
                <div class="col s12">
                &copy; Developed by Mithra, Shannon, Kishor, and Kshitij
                </div>
                <br>
                <div class="col s12">
                    <a class="btn btn-large grey darken-2 waves-effect" name="adminButton" href="admin.php">Admin Login</a>
                </div>
            </div>                   
        </div>
    </footer>


  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script src="assets/script.js"></script>
</body>
</html>