<?php
include 'config.php';
if (isset($_POST['logout'])) {
    // End the session and redirect the user to the login page
    session_destroy();
    header("Location: index.html");
    exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/ucontactus.css" />
    <title>Document</title>
</head>
<body>
    <div class="header">
            <a href="uindex.php"><img src="img\death.svg" alt="ransom.com"></a>
            
            <nav class="navbar">
                <ul>
                    <li><a href="uindex.php">Home</a></li>
                    <li><a href="uabout.php">About</a></li>
                    <li><a href="template/usolution.php">More Games</a></li>
                    <li><a class="head active" href="#">Contact Us</a></li>
                </ul>
            </nav>
            <button class="btn2" onclick="window.location.href = 'index.html';">Log Out</button>
            <nav class="navbar1">
                <img class="userimg" src="img/usericon.png"/>
                <p>
                    <span class= "usertxt">
                        <?php
                            if(isset($_SESSION['username'])) {
                                $query = "SELECT UserFirstName FROM tblusers WHERE UserEmail='{$_SESSION['username']}'";
                                $result = mysqli_query($conn, $query);
                                $row = mysqli_fetch_assoc($result);
                                $name = $row['UserFirstName'];}
                                echo "Welcome, $name";
                        ?>
                    </span>
                </p>
            </nav>
            <!--<button class="btn3" onclick="window.location.href = 'index.html';" name="logout">Log Out</button>-->

            <div class="border"> </div>
    </div>
    <div id="contact" class="contactus">
        <h2 class="con1">Contact Us</h2><br>
        <h3 class="con2"><span>Gett</span>ing in touch is easy!</h3>
        <iframe class="mymap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d234.28383186305865!2d73.74470077036969!3d20.02775713125215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeb21173ecd57%3A0x50c7155157f1939b!2sAshoka%20Center%20For%20Business%20And%20Computer%20Studies!5e0!3m2!1sen!2sin!4v1698474079850!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br>
        <p class="link1"><a href="https://goo.gl/maps/K4UP73tAjneLdFZf6">Find us here!</a></p>
        <p class="link2"><a href="mailto:patilsarthak00030@gmail.com"> ransom@gmail.com</a></p>
        <div class="form">
            <form action="ucontact.php" method="post">
                <input class="EnquiryName" type="text" name="EnquiryName" placeholder="Enter Name" required><br>
                <input class="EnquiryEmail" type="text" name="EnquiryEmail" placeholder="Enter Email" required><br>
                <textarea class="EnquiryMessage" name="EnquiryMessage" id="" cols="30" rows="10" placeholder="Write a message..."></textarea>
                <input class="submit" type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>