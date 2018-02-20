<!DOCTYPE html>
<html>
    <head>
        <title>ABOUT</title>
        
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
              What we are all about!
            </div>
            
          <div class="alert alert-light" role="alert" data-spy="scroll">
            <!--Tab and Content-->
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-team-tab" data-toggle="pill" href="#pills-team" role="tab" aria-controls="pills-team" aria-selected="true">
                  <i class="fas fa-users"></i>Team
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-cansat-tab" data-toggle="pill" href="#pills-cansat" role="tab" aria-controls="pills-cansat" aria-selected="false">
                  <i class="fas fa-space-shuttle fa-spin"></i>CanSat
                </a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent" style="display:inline-block;">
              <div class="tab-pane fade show active" id="pills-team" role="tabpanel" aria-labelledby="pills-team-tab">
                We are a group of TY students from Mount Mercy College, Cork interested in space and technology.<br/>
                Our names are : Michelle Cummins, Kate O' Gorman, Iffah Shah, Eimear O' Sullivan, Laura O' Sullivan and Neena Thomas
              </div>
              <div class="tab-pane fade" id="pills-cansat" role="tabpanel" aria-labelledby="pills-cansat-tab">
                 A CanSat is a simulation of a real satellite,  contained within the volume of a 330ml soft-drinks can.<br/>
                Our Primary Mission is to measure temperature and pressure and transmit the data to a laptop.<br/>
                Inside the CanSat, there's an Arduino UNO microcontroller, radio communications module, temperature and pressure sensors and a power supply.
                The CanSat will also need a parachute so that it will land safely after launch from high altitide eg. from a rocket or a  drone.
              </div>
            </div>
          </div>
              
        </div>
        
        <br/>
        <br/>
        
        <?php include_once("fixedfooter.html") ?>   
        
    </body>
</html>