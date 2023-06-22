<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Thank you</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link rel="icon" href="icons/favicon.ico" type="image/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mirza&display=swap" rel="stylesheet"> 
</head>
<body>

    <header class="header">
        
        <h2>GYM BROS UNITED </h2> 
        <img src="images/weight(1).jpg" class="logo-image" alt="logo">
        
        <nav>
            <ul class="menu">
                <li><a href=begin.html>HOME</a></li>
                <li><a href="programs.html">PROGRAMS</a></li>
                <li><a href="facility.html">FACILITY</a></li>
                <li><a href="fitness-tips.html"> FITNESS TIPS</a></li>
                <li><a href="about.html"> ABOUT</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
            <button class="hamburger">

                <i class="menuIcon material-icons">menu</i>
                <i class="closeIcon material-icons">close</i>
            </button>
        </nav>
    </header>

    <div class="hold-response">
        <div class="message">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get form data
            $firstName = $_POST["first-name"];
            $lastName = $_POST["last-name"];
            $email = $_POST["email"];

            // Prepare reply message
            $reply = "Thank you for contacting us, " . $firstName . " " . $lastName . ". We have recorded your thoughts, suggestions, and concerns, and will be sending you a reply to the following email: " . $email . " within a week.";

            // Send reply email
            $to = $email;
            $subject = "Thank you for contacting us";
            $headers = "From: your-email@example.com"; // Replace with your email address
            mail($to, $subject, $reply, $headers);

            // Display success message
            echo "Thank you, " . $firstName . " " . $lastName . ", for your message. We will be in touch with you through your email :" . $email. " within a weeks time. Thank you!";
            }
            ?>
        </div>
    </div>


    <footer class="special-footer">
     
        <h4>GYM BROS UNITED</h4>
        <p><i>All Rights Reserved</i></p>
        <p>Privacy Notice | Agreements | Contract issues</p>
       
    </footer>

    <script>
        const menu = document.querySelector(".menu");
        const menuItems = document.querySelectorAll(".menuItem");
        const hamburger= document.querySelector(".hamburger");
        const closeIcon= document.querySelector(".closeIcon");
        const menuIcon = document.querySelector(".menuIcon");

        function toggleMenu() {
        if (menu.classList.contains("showMenu")) {
            menu.classList.remove("showMenu");
            closeIcon.style.display = "none";
            menuIcon.style.display = "block";
        } else {
            menu.classList.add("showMenu");
            closeIcon.style.display = "block";
            menuIcon.style.display = "none";
        }
        }
        menuItems.forEach( 
        function(menuItem) { 
            menuItem.addEventListener("click", toggleMenu);
        }
)


        hamburger.addEventListener("click", toggleMenu);

    </script>
</body>
</html>