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
<html>
  <head>
    <link href="style.css" rel="stylesheet" type="text/css"/>
  </head>
   <body>
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="Projects.php">Projects</a></li>
        <li><a href="Skills.php">Skills</a></li>
        <li><a href="Contacts.php">Contacts</a></li>
        </ul>
      <br>
  <section>
    <h2 id="greeting"></h2>
    <center>
    <?php  
			$sql = "SELECT * FROM Home";
      $result = $conn->query($sql);
      while($rows = $result->fetch_assoc()) {echo "<h1>".$rows['title']."</h1><h2>".$rows['description']."</h2>";
 }
?> 
</center>
   <br></br>
   <table style="width:100%">
            <tr>
              <td><center> 
          <img src="cloud-network.gif" width="90" height="90" alt="GIF icon">
          <h3>Web Hosting</h3>
          <p></p>
        </center>
      </td>
      <td><center> 
          <img src="paint-palette.gif" width="90" height="90" alt="GIF icon">
          <h3>Web Design</h3>
          <p></p>
        </center>
      </td>
      <td><center>
          <img src="connection.gif" width="90" height="90" alt="GIF icon">
          <h3>Network Installation</h3>
          <p></p>
        </center>
      
      </tr>
      </table>
    </div>
        <center>
         <li><a href="Inquires.php"><rect>Inquires Form</a></li>
         </center>
  </section>
    <br>
    <section>
      <div class="slideshow-container">
        <div class="mySlides fade">
          <div class="numbertext">1 / 4</div>
          <img src="project2ss.png" style="width:100%">
          <div class="text">Project1</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">2 / 4</div>
          <img src="project1.png" style="width:100%">
          <div class="text">Project2</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">3 / 4</div>
          <img src="slide3.jpg" style="width:100%">
          <div class="text">sample</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">4 / 4</div>
          <img src="slide4.jpg" style="width:100%">
          <div class="text">Sample</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
        
        </div>
        <br>
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
          <span class="dot" onclick="currentSlide(4)"></span>
        </div> 
</section>
                        
                    
                    <footer>
                        <li> <img src="world-wide-web.png" width="20" height="20" /> <a href="index - Copy.php"><rect>website</a> </li>
                        <div style="text-align:center;"<li> <img src="whatsapp.png" width="20" height="20" />: +26588827425</li></div>
                        <div style="text-align: center;"<li> <img src="facebook.png" width="20" height="20" />: DNG Gadget Plug</li></dv>                  
                        <div style="text-align: center;"<li>ngambidennis99@gmail.com</li> </div>
                       <div style="text-align: center;" <p>&copy; 2023 copyrigt. All rights reserved.</p></div>
                    </footer>
                
                </section>
                <script src="scriptgt.js"></script>
                <script src="script.js"></script>
                
</body>
</html>
