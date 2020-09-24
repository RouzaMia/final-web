<?php

session_start();

  echo "<a href='home.php'><b>Back to E-CART </b></a>";


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Cheat Sheet</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
      .navbar{
        margin-bottom:0;
        border-radius:0;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">E-Cart's COVID-19 blog</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#high">Highlights <span class="sr-only">(current)</span></a></li>
            <li><a href="#update">Updates</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More News <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            <li><a href="#update">Updates</a></li>
          </ul>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- JUMBOTRON -->
    <div class="jumbotron text-center "font-size=52px>
      <div class="container">
        <h1>E-Cart's COVID-19 blog: updates responds to the crisis</h1>
      
        <a href="#" class="btn btn-primary">Read More</a>
      </div>
    </div>
     <div class="container">
      <!-- PANELS -->
      <div class="panel panel-primary" id=high>
        <div class="panel-heading">
          <h3 class="panel-title">Highlights</h3>
        </div>
        <div class="panel-body">
          <h4> <b>1. What we are doing for employees </b> </h4>
         <ul> 
  <li> <p>We’re offering a special one-time Thank You bonus totaling over $500 million. All front-line employees and partners who were with the company throughout the month of June will receive a bonus.</p> </li>
  <li> <p>Our top concern is ensuring the health and safety of our employees, and we invested approximately $4 billion on COVID-related initiatives in Q2 getting products to customers and keeping employees safe. </p></li>
  <li><p>We've made over 150 process updates—from enhanced cleaning and social distancing measures to new efforts like disinfectant spraying. </p></li>
  <li> <p>We're working on building scalable testing for coronavirus. </p></li>
  <li><p> We are offering extra time off with full pay for those diagnosed with COVID-19. </p></li>
</ul>
             <h4> <b> 2. What we are doing for customers </b> </h4>
                      <ul> 
  <li> <p>We're providing free masks to customers at all open Amazon physical retail stores and Whole Foods Market locations nationwide.</p> </li>
  <li> <p>We enhanced cleaning at all open Amazon physical stores and Whole Foods Market stores. </p></li>
  <li><p>All Whole Foods Market stores have dedicated shopping hours to service customers who are 60+  those with disabilities and those who the CDC defines as high risk. </p></li>
  <li> <p>We're vigorously combating price gouging to help protect customers, help ensure fair pricing, and combat those seeking to profit off the COVID-19 crisis. </p></li>
  <li><p>Customers ordering a scheduled delivery can select front-porch delivery during checkout. The delivery team will leave the item at your front door and you will not be required to sign for it. In addition, all delivery vehicles and equipment are disinfected each day, and delivery devices and mobile phones are disinfected after each delivery appointment. </p></li>
</ul>

        </div>
        <div class="panel-footer">Stay tuned.</div>
      </div>

      <hr>
      <section id=update> 
      <h1>Updates</h1>
       <div class="row">
        <div class="col-md-6">
          <p>Continue checking here for updates about how we're supporting our employees, helping customers, aiding community relief, and furthering research during the COVID-19 pandemic.</p>
        </div>
        </section>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>