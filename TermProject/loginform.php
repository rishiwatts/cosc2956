<?php
require_once './includes/session_start.php';

?>
<?php 
$title="Login";
require_once './includes/header.php';  ?>
       <script>
        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('error')) {
                alert('Password was wrong. Please try again.');
            }
        };
    </script>
<body>
<main>


<div class="container-fluid" style="height:945px;margin-top:0px;background-image: url(/pics/background1.png);background-size: cover;background-position: center;">
<div class="row" style="height: 120px;margin-top:87px;">

<div class="col-12"></div>
<h1 style="color:white;display:flex;align-items: center; justify-content: center;padding-top:75px;font-weight:100"><p> Please <a href="signupform.php">Sign Up</a> and Login Here to view my projects and their source code. </p></h1>
</div>


<div class="row">
        <div class="col">

        
            <div class="col-12 " style="height: 550px; align-items: center; justify-content: center;">
              <div class="containter" style="display: flex;justify-content:space-evenly;padding-top:100px";>
          <div class="row">
<div class="col-12">

              <form method="POST" action="login_receive.php"  id="signInForm" class="row g-3" style="align-content: flex-start;color:white;max-width:800px;">
              
              <div class="container" style="display: flex;;padding-right: 70px;">
              <div class="col-md-3"style="width:314px;">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" required id="inputEmail4" placeholder="Email">
    </div>
  
    </div>
   <div class="container" style="display: flex; ; padding-top: 30px; padding-right: 70px;padding-bottom:50px">      
   <div class="col-md-3" style="width:314px;">
      <label for="inputPassword">Password</label>
      <input type="password" class="form-control" name="password" required id="inputPassword" placeholder="Password">
    </div>
    </div>
    
  <div class="container"style="width: 250px; display:flex; justify-content:center">
  <button type="submit" class="button-19" id="signupButton" style="width: 150px" >Sign In</button>
  </div>
</form>
</div>
</div>
</div>
          </div>
              </div>
            </div>
            </div>
            
</main>
</body>
<?php require_once './includes/footer.php'; ?>


    