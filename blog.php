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
                  
                  <dt class="col-sm-3">6 Mar</dt>
                  <dd class="col-sm-9">
                      <dl class="row">
                      <dt class="col-sm-4">Outreach Day</dt>
                      <dd class="col-sm-8" style="text-align:left;">
                       Today we gave a 20 min presentation on CanSat to a 2nd year science class. We had a slideshow prepared and we talked to them about CanSat and also about MercyLite.<br/>
                       We showed them our actual CanSat and explained to them how it works. They were very interested as they asked us loads of questions at the end!!!<br/>
                      <br/>
                      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="images/slide1.jpeg" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="images/slide2.jpeg" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="images/slide3.jpeg" alt="Third slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="images/slide4.jpeg" alt="Fourth slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                      </dd>
                    </dl>
                  </dd>
                  
                  <dt class="col-sm-3">7 Mar</dt>
                  <dd class="col-sm-9">
                      <dl class="row">
                      <dt class="col-sm-4">Making the Frame</dt>
                      <dd class="col-sm-8" style="text-align:left;">
                        The frame is what will hold the satellite in place in the can.Using a drill we made holes in the metal frame that would let us attach the arduino and the parachute hook to the metal frame.<br/>
                        After this we then bent the top part of the frame where the parachute hook was to go.Now we were ready to attach the arduino.
                        Finally our frame was complete. The only thing left to do was to drill a hole in the bottom of the can to put the parachute hook through and to also drill smaller holes in the can for air to flow through it.<br/>
                        <br/>
                        <div class="text-center">
                          <img src="images/frame1.jpeg" class="img-thumbnail" alt="Frame 1">
                          <img src="images/frame2.jpeg" class="img-thumbnail" alt="Frame 2">
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