<!DOCTYPE html>
<html>
    <head>
        <title>BLOG</title>
        
        <!-- Viewport sizing -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!--Adding stylesheet-->
        <link rel="stylesheet" href="mystyle.css" type="text/css" />
        
        <!--Adding Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
        <!--Adding FontAwesome Icons-->
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    </head>
    <body>
        
        <!--Navbar-->
        <?php include("navbar.html") ?>
        
        <br/>
        <br/>
        
        <div class="container">
            <br/>
            <!-- Welcome Alert-->
            <div class="alert alert-success" role="alert">
              Our journey!
            </div>
            
            <br/>
            
           <div class="alert alert-light" role="alert">
                <dl class="row">
                  <dt class="col-sm-3">13 Feb</dt>
                  <dd class="col-sm-9">
                      <dl class="row">
                      <dt class="col-sm-4">Calibration Day</dt>
                      <dd class="col-sm-8" style="text-align:left;">
                        Today we decided to get some calibration done!!<br/>
                        We got together in one of our houses and started working. We set up the Arduino and the laptop and also got a thermometer to measure the changing temperature. It was a pretty fun day!!
                      </dd>
                    </dl>
                  </dd>
                  
                  <dt class="col-sm-3">16 Feb</dt>
                  <dd class="col-sm-9">
                      <dl class="row">
                      <dt class="col-sm-4">Soldering Day</dt>
                      <dd class="col-sm-8" style="text-align:left;">
                        Today was a really important day for us- it was time for some soldering! We finished soldering the circuit board today for our primary mission. This board will then be connected to the arduino (a type of mini computer) and then placed inside our can to make the CanSat.<br/>
                        Wow!! Now that's a big step for us!!<br/>
                        <br/>
                        <div class="text-center">
                          <img src="images/blog2.1.jpeg" class="img-thumbnail" alt="Soldering Day Pic 1">
                          <img src="images/blog2.2.jpeg" class="img-thumbnail" alt="Soldering Day Pic 2">
                        </div>
                      </dd>
                    </dl>
                  </dd>
                </dl>
            </div>
            
        </div>
        
        <br/>
        <br/>
            
        <?php include_once("fixedfooter.html") ?>
        
    </body>
</html>