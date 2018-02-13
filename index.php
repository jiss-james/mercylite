<!DOCTYPE html>
<html>
    <head>
        <title>HOME</title>
        
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
        <?php include_once("navbar.html") ?>
        
        <br/>
        <br/>
        
        <div class="container">
            <br/>
            <!-- Welcome Alert-->
            <div class="alert alert-success" role="alert">
              Welcome to our project!
            </div>
            
            <br/>
            <br/>
            <!--MercyLite Alert-->
            <div class="alert alert-light" role="alert">
              <h4 class="alert-heading">Mercy Lite</h4>
              <p>We are a group of students from Mount Mercy taking part in the CanSat competion. Join us as we embark on this amazing journey to space and beyond!</p>
              <hr>
              <p class="mb-0">
                <i class="fas fa-graduation-cap"></i>
                <i class="fas fa-female"></i>
                <i class="fas fa-flask"></i>
              </p>
            </div>
        </div>
        
        <!--Footer-->
        <?php include_once("footer.html") ?>
        
    </body>
</html>