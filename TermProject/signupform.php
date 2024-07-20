<?php 
$title="Sign Up";
require_once './includes/header.php'; 
require_once './includes/session_start.php'; ?>
<body>
<main>


<div class="container-fluid" style="height:945px;margin-top:0px;background-image: url(/pics/background1.png);background-size: cover;background-position: center;">
<div class="row" style="height: 120px;margin-top:87px;">

<div class="col-12"></div>
<h1 style="color:white;display:flex;align-items: center; justify-content: center;padding-top:75px;font-weight:100">Please sign up here if you want to have access to my projects. </h1>
</div>


<div class="row">
        <div class="col">

        
            <div class="col-12 " style="height: 550px; align-items: center; justify-content: center;">
              <div class="containter" style="display: flex;justify-content:space-evenly;padding-top:100px";>
          <div class="row">
<div class="col-12">

              <form method="POST" action="receive.php"  id="signupForm" class="row g-3" style="align-content: flex-start;color:white;max-width:800px;">
              
              <div class="container" style="display: flex;justify-content:center;padding-right: 70px;">
              <div class="col-md-3 "style="width:304px;">
      <label for="inputFirstName">First Name</label>
      <input type="text" class="form-control" name="firstName" required id="inputFirstName" placeholder="First Name">
    </div>
    <div class="col-md-3" style="width:304px;padding-left: 15px;padding-right: 20px;">
      <label for="inputLastName">Last Name</label>
      <input type="text" class="form-control" name="lastName" required id="inputLastName" placeholder="Last Name">
    </div>
  
    </div>
   <div class="container" style="display: flex; justify-content:center; padding-top: 30px; padding-right: 70px;">      
    <div class="col-md-3"style="width:354px;">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" required id="inputEmail4" placeholder="Email">
    </div>

    <div class="col-md-3"style="width:250px;padding-left: 15px;">
      <label for="inputCompany">Company</label>
      <input type="company" class="form-control" name="company" id="inputCompany" placeholder="Company">
    </div>
    </div>   
          
    <div class="container" style="display: flex;justify-content:center;padding-right: 70px;padding-top: 30px; ">    
    <div class="col-md-3" style="width:304px;">
      <label for="inputPassword">Password</label>
      <input type="password" class="form-control" name="password" required id="inputPassword" placeholder="Password">
    </div>
    <div class="col-md-3" style="width:304px;padding-left: 15px;padding-right: 20px;">
      <label for="inputConfirmPassword"> Confirm Password</label>
      <input type="password" class="form-control" required id="inputConfirmPassword" placeholder="Confirm Password">
    </div>
    </div>

    <div class="container" style="display: flex;justify-content:center;padding-right: 70px;padding-top: 30px; ">  
  <div class="col-md-4">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
  </div>
  
  
    <div class="col-md-3"style="padding-left: 15px;">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="city" id="inputCity">
    </div>
    <div class="col-md-3"style="padding-left: 15px;padding-right: 20px;">
      <label for="inputState">Province</label>
      <select id="inputState" name="province" class="form-control">
        <option selected>Choose...</option>
        <option> Alberta</option>
      <option> British Columbia</option>
      <option>Manitoba</option>
      <option>New Brunswick</option>
      <option>Newfoundland</option>
      <option>Labrador</option>
      <option>Northwest Territories</option>
      <option>Nova Scotia</option>
      <option>Ontario</option>
      <option>Prince Edward Island</option>
      <option>Quebec</option>
      <option>Saskatchewan</option>
      <option>Yukon</option>
      </select>
    </div>
    </div>
  
  <div class="form-group"style="padding-top: 40px;padding-bottom: 30px;padding-left: 150px;">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="container"style="width: 250px; display:flex; justify-content:center">
  <button type="submit" class="button-19" id="signupButton" style="width: 150px" >Sign Up</button>
  </div>
</form>
</div>
</div>
</div>
          </div>
              </div>
            </div>
            </div>
            </div>

<script>
  document.getElementById('signupForm').addEventListener('submit', function(event) {
    const password = document.getElementById('inputPassword').value;
    const confirmPassword = document.getElementById('inputConfirmPassword').value;
    const checkbox = document.getElementById('gridCheck').checked;

    if (password !== confirmPassword) {
      event.preventDefault();
      alert('Passwords do not match!');
    } else if (!checkbox) {
      event.preventDefault();
      alert('You must check the checkbox!');
    }
  });
</script>
</main>
</body>
<?php require_once './includes/footer.php'; ?>
