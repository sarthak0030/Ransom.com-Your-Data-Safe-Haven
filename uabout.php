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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="uabout.css">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <a href="uindex.php"><img src="img\death.svg" alt="ransom.com"></a>
        
        <nav class="navbar">
            <ul>
                <li><a href="uindex.php">Home</a></li>
                <li><a class="head active" href="#">About</a></li>
                <li><a href="template/usolution.php">Solutions</a></li>
                <li><a href="ucontactus.php">Contact Us</a></li>
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

    <div class="aboutpage">
        <h2>About Us</h2>
        <div class="about-container">
            <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome to Ransom.com, your go-to partner for top-notch data protection. In today's digital era, securing sensitive information is crucial, and we excel at safeguarding your digital assets.<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our services feature cutting-edge tools for robust data protection, including advanced text and file encryption, as well as innovative image steganography. Our Random Password Generator ensures strong, uncrackable passwords, enhancing your account security effortlessly.<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What sets us apart is our commitment to simplicity, security, and user empowerment. We offer intuitive tools without sacrificing sophistication, empowering individuals and businesses to take control of their digital security.<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Whether you're an individual guarding personal data or a business protecting critical information, Ransom.com is your ultimate destination. Explore our solutions for uncompromising data protection. Trust us to keep your digital world secure, always.
            </h3>
            <img src="img\about3.png" alt="about">
        </div>
    </div>


</body>
</html>