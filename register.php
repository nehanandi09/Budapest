<?php

include("config.php");
include("includes/classes/Account.php");
include("includes/classes/Constants.php");


$account = new Account($con);

include("registerHandler.php"); 
include("loginHandler.php"); 

function getInputValue($name)
{
    if (isset($_POST[$name])) {
        echo $_POST[$name];
    }
}

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

        <style>
            .btn{
                width:100%;
            }
        </style>
    </head>

    <body>
        <?php
        include("navbar.php")?>
        <section class="section container">
            <center>
                <h5 class="red-text text-lighten-2">Sign up to book your room!</h5>
                <br>
                <div class="row z-depth-1 grey lighten-4 register">
                <form class="col s12" id="reg-form" method="POST">
                    <div class="row">
                        <div class="input-field col s6">
                        <?php echo $account->getError(Constants::$firstNameCharacters); ?>
                        <input name="first_name" id="first_name" type="text" class="validate" required>
                        <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s6">
                        <?php echo $account->getError(Constants::$lastNameCharacters); ?>
                        <input name="last_name" id="last_name" type="text" class="validate" required>
                        <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                        <?php echo $account->getError(Constants::$emailInvalid); ?>
                        <?php echo $account->getError(Constants::$emailTaken); ?>
                        <input name="email" id="email" type="email" class="validate" required>
                        <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                        <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
                        <?php echo $account->getError(Constants::$passwordCharacters); ?>
                        <input name="password" id="password" type="password" class="validate" minlength="6" required>
                        <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input type="text" class="validate" id="gender" name="gender" required>
                            <label for="gender">Gender</label>
                        </div>
                        <div class="input-field col s6">
                            <input type="date" class="datepicker" id="date" name="birthdate" required>
                            <label for="date">Birthday</label>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <button class="btn btn-large btn-register waves-effect waves-light red lighten-2" type="submit" name="registerButton">Register
                            <i class="material-icons right">done</i>
                        </button>
                    </div>
                </form>
                </div>
            </center>
        </section>
    </body>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script src="assets/script.js"></script>
</html>