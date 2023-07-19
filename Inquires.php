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

        li a{
            
            background: #133c3d;
            color: #f5efef;
            padding: 1em, 2em;
            font-weight: bold; 
        } /* Navigation color */

        a:hover{ 
            background-color:rgb(14, 236, 132);
    
        } /* Hover Color */
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
  <body style="background-color:rgba(41, 210, 233, 0.678);"></body>
   <body>
   <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="Projects.php">Projects</a></li>
        <li><a href="Skills.php">Skills</a></li>
        <li><a href="Contacts.php">Contacts</a></li>
        </ul>
        <section style="padding-bottom:200px;">
            <fieldset>
                <table border="1">
                <h1></h1>
                <h2>INQUIRES FORM</h2>
                <p> To make inquires on the service you need Fill the form below:</p>
                <form action="process_the_page.php" method="post">
        
                    <p><label id="First name">First name:</label></p>
                    <input name="surname" required type="text" placeholder="Enter Firstname"><br/>
        
                    <p><label id="Surname">Surname:</label></p>
                    <input name="username" required type="text" placeholder="Enter surname"><br/>
        
                    <p><label id="email">Email Address:</label></p>
                    <input id="Email" required type="text" placeholder="Enter Email Address"><br/>

                    <p><label id="mobile">Phone number:</label></p>
                    <input id="Mobile" required type="text" placeholder="Enter Phone Number"> <br/>
                    </p>

                    <p><label for="inquire">inquire</label><br>
                    <textarea name="message" rows="20" cols="50"></textarea><br><br>
                    </p>
                        <button type="button" class="cancelbtn">Cancel</button>
                        <button type="submit" required class="submit">Submit</button>
                        </p>
                </form>
            </table>
            </fieldset>
            </section>
           
                         
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
