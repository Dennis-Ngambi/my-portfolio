<?php
  // Database connection parameters
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "myportfolio";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Projects</title>
  <style>
    /* CSS Styles for Layout and Design */
    body{
	padding: 0px;
	margin: 0px ;
	background-image:url(background2.0.jpg) ;
	background-size: cover;
}
ul {
            margin: 0;
            padding: 0;
            background: #000000;
        } /* Page */
  
        li {
            display: inline;
        }
        li a{
            display: inline-block;
            text-decoration: none;
            color: #353535;
            padding: 1em 2em;
            } /*nav text color & style*/

        li a{
            
          background: #028f94;
            color: #f5efef;
            padding: 1em, 2em;
            font-weight: bold; 
        } /* Navigation color */

        a:hover{ 
            background-color:rgb(114, 116, 115);
    
        } /* Hover Color */
footer {
  margin-top: auto;
  bottom: 0;
  left: 0;
  right: 0;
  width: 100%;
  background-color: #666565; /* Optional: Set a background color for the footer */
  padding: 2px;
  text-align: center;
}
.footer-bottom{
    width: 100vw;
    padding: 0px 0;
    text-align: center;
}

    h1 {
      text-align: center;
      margin-bottom: 30px;
    }

    .project {
      margin-bottom: 40px;
    }

    .project img {
      max-width: 100%;
    }

    .project-title {
      font-size: 24px;
      margin: 10px 0;
    }

    .project-description {
      margin-bottom: 10px;
    }

    .project-link {
      display: block;
      margin-top: 10px;
    }

    .filter-buttons {
      margin-bottom: 20px;
    }

    .modal {
      display: none;
      position: fixed;
      z-index: 9999;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.8);
    }

    .modal-content {
      background-color: #fefefe;
      margin: 10% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 60%;
      max-width: 800px;
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
      cursor: pointer;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }
  </style>
</head>
<body>
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="Projects.php">Projects</a></li>
        <li><a href="Skills.php">Skills</a></li>
        <li><a href="Contacts.php">Contacts</a></li>
        </ul>
    
  <h1>Projects</h1>

  <div class="filter-buttons">
    <button onclick="filterProjects('all')">All</button>
    <button onclick="filterProjects('category1')">Category 1</button>
    <button onclick="filterProjects('category2')">Category 2</button>
  </div>

  <input type="text" id="searchInput" onkeyup="searchProjects()" placeholder="Search projects...">
<section>
  <div id="projectsContainer">
    <div class="project category1">
      <img src="project1.png" alt="Project 1 Screenshot">
      <?php  
			$sql = "SELECT * FROM Projects";
      $result = $conn->query($sql);
      while($rows = $result->fetch_assoc()) {echo "<h2>".$rows['title']."</h2><p>".$rows['description']."</p>";
     }
     ?> 
      <a class="project-link" href="index - Copy.php">Project 1 Link</a>
    </div>
    </section>
    <div class="project category2">
      <img src="project2ss.png" alt="Project 2 Screenshot">
      <?php  
			$sql = "SELECT * FROM Projects";
      $result = $conn->query($sql);
      while($rows = $result->fetch_assoc()) {echo "<h2>".$rows['title']."</h2><p>".$rows['description']."</p>";
 }
?> 
      <a class="project-link" href="project2.php">Project 2 Link</a>
    </div>

    <div class="project category3">
      <div class="project category2">
        <img src="project 3.png" alt="Project 2 Screenshot">
        <?php  
			$sql = "SELECT * FROM Projects";
      $result = $conn->query($sql);
      while($rows = $result->fetch_assoc()) {echo "<h2>".$rows['title']."</h2><p>".$rows['description']."</p>";
 }
?> 
        <a class="project-link" href="project3.php">Project 2 Link</a>
      </div>

      <footer>
      <li> <img src="world-wide-web.png" width="20" height="20" /> <a href="index - Copy.php"><rect>website</a> </li>
        <div style="text-align:center;"<li> <img src="whatsapp.png" width="20" height="20" />: +26588827425</li></div>
        <div style="text-align: center;"<li> <img src="facebook.png" width="20" height="20" />: DNG Gadget Plug</li></dv>                  
        <div style="text-align: center;"<li>ngambidennis99@gmail.com</li> </div>
       <div style="text-align: center;" <p>&copy; 2023 copyrigt. All rights reserved.</p></div>
    </footer>

</section>

     
      


