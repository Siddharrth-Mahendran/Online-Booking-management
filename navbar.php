
     
<?php
  
    if(isset($_SESSION['username'])==false) {
        
?>  
  
  <div class="container">
      
         <nav class="navbar navbar-inverse navbar-fixed-top gabanav">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>

            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav gabali">
                <li><a href="index.php">Home</a></li>
                <li><a href="turflist.php">Turf List</a></li>
                <li><a href="managerlist.php">Manager List</a></li>
                <li><a href="about.php">About Us</a></li>
                            
                

              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>
            </div> 

            </div>   
        </nav>
             
      
       
  </div>
   
       
    <?php } else { ?> 
    <div class="container">
       <nav class="navbar navbar-inverse navbar-fixed-top gabanav">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>

            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav gabali">
                <li><a href="index.php">Home</a></li>
                <li><a href="turflist.php">Turf List</a></li>
                <li><a href="managerlist.php">Manager List</a></li>
                <li><a href="booking.php">Booking</a></li>
                <li><a href="about.php">About US</a></li>
                <li><a href="mybill.php?id=<?php echo $_SESSION['username']; ?>">My Account</a></li>
               
                
                <!--
                 <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="newmanager.php">Add New Manager</a></li>
                    <li><a href="newturf.php">Add New Turf</a></li>
                    <li><a href="indexbill.php">Billing System</a></li>
                    <li><a href="bookinglist.php">Booking Form</a></li>
                    <li><a href="turf_details.php">Turf Details</a></li>
                  </ul>
                </li>
                -->

              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Log Out</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Welcome <?php echo $_SESSION['username']; ?></a></li>
              </ul>
            </div> 

        </div> 
      
    </nav> 
    </div>
    
    
    <?php } ?> 
