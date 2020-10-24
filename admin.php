<?php

include("config.php");
include("includes/classes/Admin.php");

$admin = new Admin($con);

include("adminHandler.php"); 
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
            <h5 class="deep-orange-text text-darken-3">Please login to your account</h5>
            <br>
            <div class="z-depth-1 grey lighten-4 row login">
                <form class="col s12" method="POST" action="admin.php">
                    <div class="input-field">
                        <input name="empid" type="text" id="empid" class="validate">
                        <label for="empid">Employee ID</label>
                    </div>
                    <div class="row">
                        <div class="col s12 input-field">
                            <input name="password" type="password" name="password" id="password">
                            <label for="passowrd">Password</label>
                        </div>

                    </div>                    
                    <div class="row s12 center-align">
                        <button class="col 12 btn btn-large waves-effect yellow darken-4" type="submit" name="adminLoginButton" id="adminLoginButton">Admin Login</button>
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



