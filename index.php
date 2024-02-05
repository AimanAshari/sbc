<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Futsal CLub</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1 ">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}

body {
  background-color: Lightblue;
}

</style>

</head>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-container w3-indigo w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64 "><b>Futsal Club<br>UiTMCK<div class="w3-container w3-yellow"></b></h3>
  </div>
  
  
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-yellow">Home</a> 
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-yellow">Committee</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-yellow">Activities</a> 
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-yellow">Achievements</a> 
    <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-yellow">Memberships</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-yellow">Contact</a>
	<a href="admin/index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-yellow">Administrator</a>
	
  </div>
</nav>


<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Company Name</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo w3-text-indigo"> <b>Futsal CLub UiTMCK</b></h1>
	<hr style="width:50px;border:5px solid yellow" class="w3-round">
	<img src="club.jpg" style="width:100%" onclick="onClick(this)" alt="Futsal Club UiTMCK"> 
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Committee.</b></h1>
    <hr style="width:50px;border:5px solid yellow" class="w3-round">
  </div>
   
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="sirzaf.jpg" style="width:100%" onclick="onClick(this)" alt="President and the MVP MR.Zaffian"> 
      <img src="arif.jpg" style="width:100%" onclick="onClick(this)" alt="Communication Chairs MR.Arif">
      <img src="messi.jpg" style="width:100%" onclick="onClick(this)" alt="Trainer MR.Messi">
    </div>

    <div class="w3-half">
      <img src="aiman.jpg" style="width:100%" onclick="onClick(this)" alt="Vice President MR.Aiman">
      <img src="ronaldo.jpg" style="width:100%" onclick="onClick(this)" alt="Trainer MR.Ronaldo">
      <img src="neymar.jpg" style="width:100%" onclick="onClick(this)" alt="Trainer MR.Neymar">
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Activities.</b></h1>
    <hr style="width:50px;border:5px solid yellow" class="w3-round">
    <p>Fast Feet, Quick Beats: Futsal Thrills on the Indoor Fields!</p>
    <p>We are here to form the best team that focus on to be the champion!Futsal emphasizes skill, quick decision-making, and teamwork due to the smaller playing area and limited number of players on the field. The game is known for its fast-paced and dynamic nature, making it an exciting sport to watch and play. Lets join us!
    </p>
  </div>
  
  <!-- Designers -->
  <div class="w3-container" id="designers" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Achievements.</b></h1>
    <hr style="width:50px;border:5px solid yellow" class="w3-round">
    <p>The best team in the world.</p>
    <p>After an incredible display of skill, teamwork, and determination, our futsal team emerged as the undisputed champions, claiming the coveted cup and solidifying our status as the best team in the league. This victory is a testament to our relentless effort and unwavering spirit on the futsal court.
    </p>
    <p><b>Our Highest Achievements in History</b>:</p>
  </div>

  <!-- The Team -->
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="sirzaf.jpg" alt="MR.Zaffian" style="width:100%">
        <div class="w3-container">
          <h3>MR.Zaffian</h3>
          <p class="w3-opacity">President & MVP</p>
          <p>Winning the best man of the match in World Cup International and the Champion</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="aiman.jpg" alt="MR.Aiman" style="width:100%">
        <div class="w3-container">
          <h3>MR.Aiman</h3>
          <p class="w3-opacity">Gold Medal Collector</p>
          <p>The best player with Win Streak Record from 2019 until 2023</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="ronaldo.jpg" alt="MR.Ronaldo" style="width:100%">
        <div class="w3-container">
          <h3>MR.Ronaldo</h3>
          <p class="w3-opacity">The Greatest Of All Time</p>
          <p>Winning 3 times SAF in UiTMCK.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Packages / Pricing Tables -->
  <div class="w3-container" id="packages" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Memberships.</b></h1>
    <hr style="width:50px;border:5px solid yellow" class="w3-round">
    <p>There is the choice and price that you can survey and pay. Be our Supporters and follow us whenever our team have games outside University or lets be our Members and training and play with us whenever we have a games or tournaments. Also we can have Family Days. Lets join us!</p>
  </div>
  <div class="container">
	<?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
	
	
	
	<p align="center"><h3>Membership form for Futsal CLub</h3></p>
    <a href="add-new.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
         
        </tr>
      </thead>
      <tbody>
	 
        <?php
        $sql = "SELECT * FROM `members`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
            
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  
  <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-container w3-pale-green w3-xlarge w3-padding-32">Supporters</li>
        <li class="w3-padding-16">Follow Us</li>
        <li class="w3-padding-16">Only Watch</li>
        <li class="w3-padding-16">Photography</li>
        <li class="w3-padding-16">6 Months</li>
        <li class="w3-padding-16">Good deals</li>
        <li class="w3-padding-16">
          <h2>RM 6</h2>
          <span class="w3-opacity">person</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-hover-indigo  w3-padding-large w3-pale-green">Sign Up</button>
        </li>
      </ul>
    </div>
        
    <div class="w3-half">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-container w3-pale-yellow w3-xlarge w3-padding-32">Members</li>
        <li class="w3-padding-16">Play with Us</li>
        <li class="w3-padding-16">Have advantages to be player</li>
        <li class="w3-padding-16">Photography</li>
        <li class="w3-padding-16">3 Years</li>
        <li class="w3-padding-16">GREAT deals</li>
        <li class="w3-padding-16">
          <h2>RM 12</h2>
          <span class="w3-opacity">person</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-hover-indigo  w3-padding-large w3-pale-yellow">Sign Up</button>
        </li>
      </ul>
    </div>
  </div>
  
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Contact.</b></h1>
    <hr style="width:50px;border:5px solid yellow" class="w3-round">
    <p>Do you want us to join us? Contact us or Fill out the form and fill me in with the details :) We love meeting new people!</p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-hover-yellow w3-block w3-padding-large w3-indigo w3-margin-bottom">Send Message</button>
    </form>  
  </div>


<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Contact Us <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">01129246897 - Futsal CLub UiTMCK</a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>