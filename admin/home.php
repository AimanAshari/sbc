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
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-yellow">Membership Data</a> 
	<a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-yellow">Memory Pictures</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-yellow">Courts Training</a> 
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-yellow">Trophy</a> 
    
    

	
	<h4><a href="#" onclick="confirmLogout()" class="w3-bar-item w3-button w3-hover-black" style="background-color: rgba(0, 0, 0, 0.5); color: rgba(255, 255, 255, 0.8); font-weight: bold; font-size: 0.8em;">Log Out</a></h4>

<script>
function confirmLogout() {
  var confirmExit = confirm("Are you sure you want to exit?");
  if (confirmExit) {
    window.location.href = "index.php"; // Redirect to index.php if user confirms
  }
}
</script>
	
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
    <h1 class="w3-jumbo w3-text-indigo"> <b>Admin Futsal CLub UiTMCK</b></h1>

	<hr style="width:50px;border:5px solid yellow" class="w3-round">
	<img src="b.jpg" style="width:100%" onclick="onClick(this)" alt="Vice President MR.Aiman">
	
	<div class="w3-container" id="packages" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Memberships Data.</b></h1>
    <hr style="width:50px;border:5px solid yellow" class="w3-round">
    
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
	
	
	
	<p align="center"><h3>Membership form for Futsal CLub:</h3></p>
    

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
          <th scope="col">Action</th>
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
            <td>
              <a href="edit_membership.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_membership.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

<h1 class="w3-xxxlarge w3-text-indigo"><b>Memory Pictures</b></h1>
    <hr style="width:50px;border:5px solid yellow" class="w3-round">
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="a.jpg" style="width:100%" onclick="onClick(this)" alt="KB Fight NO 1"> 
      <img src="c.jpg" style="width:100%" onclick="onClick(this)" alt="TM NO 2">
      <img src="d.jpg" style="width:100%" onclick="onClick(this)" alt="LEGEND NO 1">
    </div>

    <div class="w3-half">
      <img src="e.jpg" style="width:100%" onclick="onClick(this)" alt="SAF 3">
      <img src="f.jpg" style="width:100%" onclick="onClick(this)" alt="SAF 2">
      <img src="h.jpg" style="width:100%" onclick="onClick(this)" alt="SAF 1">
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
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Courts Training.</b></h1>
    <hr style="width:50px;border:5px solid yellow" class="w3-round">
	 <p>Our Training Place AllSports,HomeNo10,KB,UiTMCK</p>
   <div class="w3-row-padding">
    <div class="w3-half">
      <img src="z.jpg" style="width:100%" onclick="onClick(this)" alt="HomeNo10"> 
      <img src="x.jpg" style="width:100%" onclick="onClick(this)" alt="KB">
    
    </div>

    <div class="w3-half">
      <img src="v.jpg" style="width:100%" onclick="onClick(this)" alt="AllSports">
      <img src="n.jpg" style="width:100%" onclick="onClick(this)" alt="UiTMCK">
      
    </div>
  </div>
  
  
  <!-- Designers -->
  <div class="w3-container" id="designers" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Trophy.</b></h1>
    <hr style="width:50px;border:5px solid yellow" class="w3-round">
    
    <p><b>Trophy Collections</b>:</p>
  </div>

  <!-- The Team -->
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="ucl.jpg" alt="ucl" style="width:100%">
        <div class="w3-container">
          <h3>UCL</h3>
          <p class="w3-opacity">UEFA CHAMPION LEAGUE</p>
          
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="wc.jpg" alt="MR.Aiman" style="width:100%">
        <div class="w3-container">
          <h3>WC</h3>
          <p class="w3-opacity">WORLD CUP</p>
          
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="epl.jpg" alt="MR.Ronaldo" style="width:100%">
        <div class="w3-container">
          <h3>SAF</h3>
          <p class="w3-opacity">SUKAN ANTARA FAKULTI</p>
          
        </div>
      </div>
    </div>
  </div>

  <!-- Packages / Pricing Tables -->
  
  
  <!-- Contact -->
  
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