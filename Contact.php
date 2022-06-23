<?php
$servername = "localhost";//hostname
$username = "root";
$password = "";
$dbname = "cse485";
       

$conn= new mysqli($servername, $username, $password,$dbname);





if(isset($_POST['submit'])){
	 $myfname = $_POST['firstname'];
	 $mylname = $_POST['lastname'];
     $mymail = $_POST['email'];
     $mysubject= $_POST['subject'];
     $mymessage=$_POST['Message'];
	
	     

        	
	
	$sql ="INSERT INTO testcontact1 (firstname, lastname, email, subject, Message) VALUES ('$myfname','$mylname', '$mymail', '$mysubject', '$mymessage')";
mysqli_query($conn,$sql);
	  	  			  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="contact.css"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

</head>
<body>
<script src="menu.js"></script>
    <div class="contactbody">
        <div class="menu">
            <div class="pharma">
                PHARMA
            </div>
            <div class="blank"></div>
            <div class="h">
                <a href="index.html" target="blank">Home</a>
            </div>
            <div class="h">
                <a href="store.html" target="blank">Store</a> 
            </div>
            <div class="h" id="menu">
                Menu
                <ul id="dropdown">
                    <li>Supplements</li>
                    <li>Vitamins</li>
                    <li>Nutrition</li>
                    <li>Tea</li>
                </ul>
            </div>
            <div class="h">
            <a href="About.html" target="blank">About</a>
            </div>
            <div class="h">
            <a href="Contact.php" target="blank">Contact</a>
            </div>
        </div>
        <div class="getint">Get In Touch</div>
        <form action ="" method = "post" class="contactform">
            <div class="contactformtitle">First Name</div>
            <input type="text" name="firstname" placeholder="First Name" class="contactforminpt">
            
            <div class="contactformtitle">Last Name</div>
            <input type="text" name="lastname" placeholder="Last Name" class="contactforminpt">
            
            <div class="contactformtitle">Email</div>
            <input type="email" name="email" placeholder="yourmail@mail.com" class="contactforminpt">
            
            <div class="contactformtitle">Subject</div>
            <input type="text" name="subject" placeholder="Subject" class="contactforminpt">
            
            <div class="contactformtitle">Message</div>
            <textarea name="Message" placeholder="Your Thoughts" cols="30" rows="10" class="contactforminptxt"></textarea>
            
            <input type="submit" name="submit" class="button" value="Submit">
        </form>

        <div class="footer">
            <div class="fblank"></div>

            <div class="fcont">
                <p class="footp"><font class="pfonttitle">About Us</font></p>
                <p class="pfontcont">Lorem ipsum dolor sit amet, 
                    consectetur adipisicing elit. 
                    Eius quae reiciendis distinctio 
                    voluptates sed dolorum excepturi 
                    iure eaque, aut unde.</p>
            </div>
            <div class="fcont">
                <p class="footp"><font class="pfonttitle">Quick Links</font></p>
                <p class="pfontcont">Supplements
                    <br><br>
                    Vitamins
                    <br><br>
                    Diet & Nutrition
                    <br><br>Tea & Coffee
                </p>
            </div>
            <div class="fcont">
                <p class="footp"><font class="pfonttitle">Contact Info</font></p>
                <p class="pfontcont">203 Fake St. Mountain View, San Francisco, California, USA
                    <br><br>
                    +2 392 3929 210
                    <br><br>
                    emailaddress@domain.com
                </p>
            </div>

            <div class="flast">
                <div class="flastp">Copyright © 2021 All rights reserved | This Website is made with by Samiul Shadman</div>
            </div>
        </div>
    </div>    
</body>
</html>