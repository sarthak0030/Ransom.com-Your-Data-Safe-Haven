<?php
include '../config.php';
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
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/solution.css" />
</head>
<body>
    <header>
        <a href="uindex.php"><img src=../img/death.svg alt="ransom.com"></a>
        
        <nav class="navbar">
            <ul>
                <li><a href="../uindex.php">Home</a></li>
                <li><a href="../uabout.php">About</a></li>
                <li><a class="head active" href="#">Solutions</a></li>
                <li><a href="../ucontactus.php">Contact Us</a></li>
            </ul>
        </nav>
        <button class="btn2" onclick="window.location.href = '../index.html';">Log Out</button>
        <nav class="navbar1">
            <img class="userimg" src="../img/usericon.png"/>
            <p>
                <span class= "usertxt">
                    <?php
                        if(isset($_SESSION['username'])) {
                            $query = "SELECT UserFirstName FROM tblusers WHERE UserEmail='{$_SESSION['username']}'";
                            $result = mysqli_query($conn, $query);
                            $row = mysqli_fetch_assoc($result);
                            $name = $row['UserFirstName'];}
                        echo"Welcome, $name";
                    ?>
                </span>
            </p>
        </nav>
        
        <div class="border"> </div>
    </header>
    <div id="moregames" class="mor-container">
        <div>
            <h2>Solutions</h2>
        </div>
        <div class="card-container">
            <div class="card">
                <img class="img2" src="..\KrypApp-master\screenshot.png" alt="Filekrypt">
                <img class="img3" src="..\Picsart_23-11-22_01-06-49-821.jpg" alt="Filekrypt">
                <img class="img2" src="..\KrypApp-master\screenshot.png" alt="Filekrypt">
                <div>
                    <h1>FileKrypt: The File Encryption Decryption Tool</h1>
                    <p>&nbsp;&nbsp;&nbsp;FileKrypt🔐: The File Encryption Decryption Tool is a cutting-edge web application designed to empower users with the ability to safeguard their sensitive data effortlessly. With FileKrypt, users can encrypt their files securely, rendering them inaccessible to unauthorized individuals and ensuring the utmost privacy. Whether it's personal documents, important work files, or confidential information, FileKrypt offers a seamless solution for encryption, allowing users to upload their files and transform them into encrypted, indecipherable formats.<br><br>
                        &nbsp;&nbsp;&nbsp;Navigating FileKrypt is intuitive and user-friendly. Users can easily upload their files, select robust encryption algorithms, and generate unique encryption keys, ensuring the highest level of security. Additionally, FileKrypt provides a seamless decryption process, allowing users to retrieve their original files hassle-free when needed, ensuring the privacy of their data is never compromised.<br><br>
                        &nbsp;&nbsp;&nbsp;With its advanced encryption techniques and user-centric interface, FileKrypt simplifies the process of securing sensitive information. Whether you're an individual striving to protect personal files or a business safeguarding crucial data, FileKrypt offers a reliable and efficient solution, ensuring your files are shielded from prying eyes. Experience peace of mind and unparalleled data security with FileKrypt: Your trusted partner in file encryption and decryption<br><br>
                </div>
                <a href="KrypApp.exe" download>
                    <button class="mor1">Play Now</button>
                </a>
            </div>

            <div class="card1">
                <img class="img2" src="..\img\documentation images\Enkrypt.png" alt="Enkrypt">
                <img class="img3" src="..\Picsart_23-11-22_01-14-46-678.jpg" alt="Enkrypt">
                <img class="img2" src="..\img\documentation images\Enkrypt.png" alt="Enkrypt">
                <div>
                    <h1>Enkrypt: The Text Encryption Decryption Tool</h1>
                    <p>&nbsp;&nbsp;&nbsp;Enkrypt is a cutting-edge Text Encryption Decryption Tool designed to empower users with the utmost privacy and security for their sensitive information. This innovative web application serves as a fortress of digital confidentiality, allowing users to encode any text with a seamless and efficient process. With its user-friendly interface and robust encryption algorithms, Enkrypt ensures that your messages, passwords, and confidential data remain indecipherable to unauthorized eyes.<br><br>
                        &nbsp;&nbsp;&nbsp;Whether you're safeguarding personal messages or securing critical business communications, Enkrypt offers a reliable solution. Users can simply enter the text they wish to encrypt, and the application swiftly transforms it into an intricate code that defies interpretation. Equally, if you possess encrypted text and need to revert it to its original form, Enkrypt effortlessly decodes the message back to its intended meaning, ensuring a hassle-free user experience.<br><br>
                        &nbsp;&nbsp;&nbsp;Enkrypt is not just a tool; it's a shield against prying eyes, providing peace of mind in the digital age. Whether you're a professional safeguarding confidential documents or an individual protecting personal correspondence, Enkrypt stands as your trustworthy companion, guaranteeing the privacy you deserve. Integrate Enkrypt into your digital life and experience the freedom of secure communication. Your secrets, once encrypted with Enkrypt, are truly yours and yours alone.</p>
                </div>
                <a href="enc_dec.exe" download>
                    <button class="mor1">Play Now</button>
                </a>
            </div>

            <div class="card2">
                <img class="img2" src="..\img\documentation images\img_stegno.jpg" alt="Inkognito">
                <img class="img3" src="..\Picsart_23-11-22_01-16-43-702.jpg" alt="Inkognito">
                <img class="img2" src="..\img\documentation images\img_stegno.jpg" alt="Inkognito">
                <div>
                    <h1>Inkognito: The Image Steganography tool</h1>
                    <p>&nbsp;&nbsp;&nbsp;Inkognito is a cutting-edge web application revolutionizing the way we protect our sensitive information. With its advanced image steganography capabilities, it empowers users to safeguard their messages in plain sight. Seamlessly blending security and creativity, Inkognito allows users to conceal any text within images, rendering the hidden information virtually undetectable to the naked eye.<br><br>
                        &nbsp;&nbsp;&nbsp;The application boasts an intuitive interface, making the process of embedding confidential data into images effortless. Users can select any image of their choice and embed their text, transforming an ordinary picture into a secure vessel of hidden information. Whether it's personal messages, passwords, or classified data, Inkognito ensures your information remains confidential and protected from prying eyes.<br><br>
                        &nbsp;&nbsp;&nbsp;What sets Inkognito apart is its user-friendly approach to retrieving hidden text. With just a few clicks, users can effortlessly extract the concealed message from the image, enabling seamless communication while maintaining the highest level of privacy. Whether you're a professional safeguarding business secrets or an individual protecting your personal information, Inkognito offers a secure, reliable, and creative solution.
                        &nbsp;&nbsp;&nbsp;Experience the peace of mind that comes with knowing your sensitive data is shielded from unauthorized access. Explore the world of secure communication with Inkognito and embrace the freedom to express yourself without compromising your privacy.</p>
                </div>
                <a href="lsb_steganography_GUI.exe" download>
                    <button class="mor1">PLay Now</button>
                </a>
            </div>

            <div class="card3">
                <img class="img2" src="..\img\documentation images\pass_generator.png" alt="PassGenius">
                <img class="img3" src="..\Picsart_23-11-22_01-18-01-254.jpg" alt="PassGenius">
                <img class="img2" src="..\img\documentation images\pass_generator.png" alt="PassGenius">
                <div>
                    <h1>PassGenius: Random Password Generator</h1>
                    <p>&nbsp;&nbsp;&nbsp;PassGenius: Random Password Generator is your ultimate solution for creating strong, secure, and unique passwords effortlessly. This web application is designed to simplify the often daunting task of generating passwords by offering a seamless and intuitive user experience. With PassGenius, users can swiftly generate complex passwords tailored to their specific security needs.<br><br>
                        &nbsp;&nbsp;&nbsp;Gone are the days of struggling to come up with intricate combinations of letters, numbers, and symbols. PassGenius empowers website owners and users alike by providing a reliable tool to enhance online security. By generating robust passwords, it ensures that sensitive information remains protected from cyber threats, bolstering the overall safety of online interactions.<br><br>
                        &nbsp;&nbsp;&nbsp;PassGenius is not just a random password generator; it's a dependable companion for anyone concerned about digital security. Whether you're setting up a new account, updating existing passwords, or safeguarding important data, PassGenius makes the process seamless and stress-free. Its user-friendly interface and lightning-fast performance make it the go-to choice for individuals and businesses seeking a trustworthy password generation solution.<br><br>
                        &nbsp;&nbsp;&nbsp;Embrace PassGenius, and bid farewell to password-related worries. Elevate your website's security effortlessly and fortify your digital presence with passwords that are as unique as they are unbreakable.</p>
                </div>
                <button class="mor1" onclick="window.location.href = '../Random Password Generator JavaScript/index.html', '_self';">PLay Now</button>
            </div>
        </div>
    </div>
</body>
</html>