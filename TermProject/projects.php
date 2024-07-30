<?php 
require_once './includes/session_start.php'; ?>
<?php
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
    header("Location: loginform.php");
    exit;
}
?>

<?php 
$title="Projects";
require_once './includes/header.php'; 
require_once './includes/session_start.php'; ?>
<title>Projects</title>
<body>
<main>

<div class="container-fluid" style="height:1000px;margin-top:0px;background-image: url(/pics/background1.png);background-size: cover;background-position: center;">
      <div class="project-container"  id="projects" >
      <div class="row"style="padding-top: 20px; width:1900px" >
        
        <div class="col-6" > 
        <div class="row" style="height: 50px;margin-top:87px;">

<div class="col-12"></div>
<h1 style="color:white;display:flex;align-items: center; justify-content: center;padding-top:50px;font-weight:100;font-size:40px;padding-right:100px">The Boy</h1>
</div>
        <div class="container" style="margin-right:400px;padding-bottom:40px">
        <pre> </pre>
          <pre> </pre>
          <pre> </pre>


          <img src="/pics/Portfolio2.png" width="700" height="350" style="padding-left: 0px;">
          <pre> </pre>
          
          <p style="color:white;font-size: 14px; padding-left:250px;padding-top:10px">
          <a class="button-86" href="https://drive.google.com/file/d/1QTHTBQRfzkIFEnntrNtF_iLuNXCns7e3/view?usp=sharing" target="_blank" role="button" style="width:200px; font-size:32px;font-weight: 100;height:70px">Project Folder</a></p>
          <p style="color:white;font-size: 14px; padding-left:250px;padding-top:20px">
          <a class="button-86" href="https://rishiwatts.itch.io/the-boy" target="_blank" role="button" style="width:200px; font-size:32px;font-weight: 100;height:70px;">Game </a></p>
        
        
        </div>
    </div>
        <div class="col-6"> 
        <div class="row" style="height: 50px;margin-top:87px;">

<div class="col-12"></div>
<h1 style="color:white;display:flex;align-items: center; justify-content: center;padding-top:50px;font-weight:100;font-size:40px;padding-right:100px">The Dying Wish</h1>
</div>
          <pre> </pre>
          <pre> </pre>
          <pre> </pre>


          <img src="/pics/Portfolio1.png" width="700" height="350" style="padding-left: 60px;">
          <pre> </pre>
          <p style="color:white;font-size: 14px; padding-left:250px;padding-top:10px">
          <a class="button-86" href="https://drive.google.com/file/d/1uEtadoQn36WTJ_T0-YNr0NszrH0rv2x1/view?usp=sharing" target="_blank" role="button" style="width:200px; font-size:32px;font-weight: 100;height:70px">Project Folder</a></p>
          <p style="color:white;font-size: 14px; padding-left:250px;padding-top:20px">
          <a class="button-86" href="https://rishiwatts.itch.io/the-dying-wish" target="_blank" role="button" style="width:200px; font-size:32px;font-weight: 100;height:70px;">Game </a></p>
        </div>
        </div>
      </div>
          
</div>

</main>
</body>

<?php require_once './includes/footer.php'; ?>
