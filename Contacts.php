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
    <style>
       
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

footer {
  margin-top: auto;
  position: fixed;
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
    </style>
  </head>
   <body>
   <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="Projects.php">Projects</a></li>
        <li><a href="Skills.php">Skills</a></li>
        <li><a href="Contacts.php">Contacts</a></li>
        </ul>
    <section>
       
          <link rel="stylesheet" href="style.css">
          <h1>Contact Us</h1>
          <?php  
			$sql = "SELECT * FROM Contacts";
      $result = $conn->query($sql);
      while($rows = $result->fetch_assoc()) {echo "<h2>".$rows['title']."</h2><p>".$rows['description']."</h2>";
 }
?>                                   
                    <footer>
                    <li> <img src="world-wide-web.png" width="20" height="20" /> <a href="index - Copy.php"><rect>website</a> </li>
                        <div style="text-align:center;"<li> <img src="whatsapp.png" width="20" height="20" />: +26588827425</li></div>
                        <div style="text-align: center;"<li> <img src="facebook.png" width="20" height="20" />: DNG Gadget Plug</li></dv>                  
                        <div style="text-align: center;"<li>ngambidennis99@gmail.com</li> </div>
                       <div style="text-align: center;" <p>&copy; 2023 copyrigt. All rights reserved.</p></div>
                    </footer>
                
                </section>
                <script src="script1.js"></script>
</body>
</html>
