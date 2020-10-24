<?php

include("config.php");
include("includes/classes/Room.php");

$room = new Room($con);

include("roomHandler.php");

?>


<html>
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
    <header>
        <nav class="nav-wrapper transparent">
            <div class="container">
                <a href="#" class="brand-logo">
                    <img src="images/logo.png" alt="logo" class="brand-logo logo">
                    <!-- The Grand Budapest Hotel -->
                </a>
                <a href="" class="sidenav-trigger" data-target="mobile-menu">
                    <i class="material-icons brown-text text-darken-2">menu</i>
                </a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php" class="brown-text text-darken-4">Book Room</a></li>
                    <li><a href="#contact" class="brown-text text-darken-4">Contact</a></li>
                    <li><a href="index.php" class="brown-text text-darken-4">Logout</a></li>
                </ul>

                <ul class="sidenav grey lighten-2" id="mobile-menu">
                    <li><a href="index.php" class="brown-text text-darken-4">Book Room</a></li>
                    <li><a href="#contact" class="brown-text text-darken-4">Contact</a></li>
                    <li><a href="index.php" class="brown-text text-darken-4">Logout</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="section container">
        <div class="row">
            <div class="col s12 l4">
                <h4 class="red-text text-lighten-2">Book your room</h4>
                <p>Book your room and come enjoy the finest services at The Grand Budapest Hotel</p>
            </div>

            <div class="col s12 l6 offset-l1">
                <h5 class="red-text text-lighten-2" >Give us the details of your stay</h5>
                <form action="" method="POST" class="col s12" id="bookRoom">
                    <div class="row">
                        <div class="col s12 input-field">
                            <input type="text" name="name" id="name" required>
                            <label for="name">Enter your Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 l6 input-field">
                            <input type="email" name="email" id="email" required>
                            <label for="email">Email</label>
                        </div>
                        <div class="col s12 l6 input-field">
                            <input type="text" name="guests" id="guests" required>
                            <label for="guests">Number of guests</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 l6 input-field">
                            <input type="text" name="place" id="place" required>
                            <label for="place">Place visiting from</label>
                        </div>
                        <div class="col s12 l6 input-field">
                            <input type="text" name="phone" id="phone" required>
                            <label for="phone">Phone number</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 l6 input-field">
                            <input type="date" name="checkIn" id="checkIn" class="datepicker" required>
                            <label for="date">Check In Date</label>
                        </div>
                        <div class="col s12 l6 input-field">
                            <input type="date" name="checkOut" id="checkOut" class="datepicker" required>
                            <label for="checkOut">Check Out Dates</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 l6">
                            <button class="btn btn-large waves-effect waves-light red lighten-1" type="submit" name="bookRoomButton">Book My Room!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

</body>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script src="assets/script.js"></script>
</html>