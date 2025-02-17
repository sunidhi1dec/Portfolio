<?php

    if(isset($_POST['name'])){

    $SERVER="localhost";
    $username="root";
    $password="";
    $dbname="feedback";

    $con= mysqli_connect($SERVER,$username,$password,$dbname);

    if(!$con){
        die("connection to this database failed due to".mysqli_connect_error());
    }
    echo"Success connecting to db";

    $stmt = $con->prepare("INSERT INTO feedback (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $stmt->execute();


    $sql="INSERT INTO `feedback`.`feedback` ( `name`, `email`, `message`, `date`) VALUES (  'Sunidhi', 'test@gmail.com', 'hello this is first entry in the database for testing', current_timestamp())";

    echo $sql;

    if($con->query($sql)== true){
        echo"Successfully inserted ";
    }
    else{
        echo" Error: $sql <br> $con->error";
    }
    $stmt->close();
    $con->close();

    header("Location: thank_you.html");
    exit();
} 
?>

<!DOCTYPE html>

<head>
    <title>PORTFOLIO-WEBSITE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        
        body {
            background-color: rgb(0, 0, 0);
            color: rgb(255, 255, 255);
            font-family: 'Poppins', sans-serif;
            background-image: url(backdrop3.jpg);
        }
        
        nav {
            display: flex;
            align-items: center;
            justify-content: space-around;
            height: 80px;
            position: static;
        }
        
        nav ul {
            display: flex;
            justify-content: center;
        }
        
        nav ul li {
            list-style: none;
            margin: 0 23px;
        }
        
        nav ul li a {
            text-decoration: none;
            color: beige;
        }
        
        nav ul li a:hover {
            color: rgb(40, 160, 225);
            font-size: 1.2rem;
            text-decoration: underline;
            font-weight: bold;
        }
        
        .left {
            font-size: 2rem;
        }
        
        .firstSection {
            display: flex;
            justify-content: space-around;
            margin: 125px 10px;
        }
        
        .firstSection>div {
            width: 30%;
        }
        
        .leftsection {
            font-size: 2.3rem;
            margin-top: 20px;
        }
        
        .rightSection img {
            width: 80%;
        }
        
        .secondSection {
            max-width: 80vw;
            margin: auto;
            height: 100vh;
        }
        
        .secondSection h1 {
            font-size: 2rem;
        }
        
        .secondSection .box {
            background: white;
            width: 80vw;
            height: 2px;
            margin: 60px 0;
            display: flex;
        }
        
        .secondSection .vertical {
            height: 93px;
            width: 2px;
            background-color: white;
            margin: 0 150px;
        }
        
        .rightSection img {
            border-radius: 50%;
            object-fit: cover;
            border: 20px solid rgb(40, 160, 225);
        }
        
        .purple,
        #element {
            color: rgb(40, 160, 225);
            font-weight: bolder;
        }
        
        .text-gray {
            color: grey;
        }
        
        .verticaltitle {
            position: relative;
            top: 75px;
            width: 150px;
        }
        
        .verticaldesc {
            position: relative;
            font-size: smaller;
            top: 86px;
            width: 150px;
            color: gray;
        }
        
        .image-top {
            border-radius: 50%;
            object-fit: cover;
            border: 0 solid rgb(40, 160, 225);
            width: 23px;
            position: relative;
            top: -32px;
            left: -9px;
        }
        
        .thirdSection {
            max-width: 80vw;
            margin: auto;
            height: 210vh;
        }
        
        .thirdSection h1 {
            font-size: 2rem;
        }
        
        .project-text {
            text-align: center;
            padding: 10px;
            font-size: 1.5rem;
        }
        
        .Project {
            width: 80%;
            border: 0 solid black;
            margin: 40px 0px;
            height: 120vh;
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            grid-gap: 80px;
            justify-self: flex-start;
        }
        
        .column {
            width: 80%;
            height: fit-content;
            display: grid;
            text-align: center;
            padding-top: 100px;
        }
        
        .fourthSection {
            max-width: 80vw;
            margin: auto;
            height: 80vh;
        }
        
        .fourthSection h1 {
            font-size: 2rem;
        }
        
        .Project a {
            color: beige;
        }
        
        .Project a:hover {
            color: rgb(40, 160, 225);
        }
        
        footer {
            background-color: rgb(40, 160, 225);
            height: 45px;
        }
        
        .footer {
            display: flex;
            margin: 20px 122px;
            padding: 7px;
        }
        
        footer .footer .rights {
            text-align: right;
            padding-left: 350px;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <div class="left">
                <b>PORTFOLIO</b>
            </div>
            <div class="right">
                <ul>
                    <li><a href="#Home">Home</a></li>
                    <li><a href="#About">About us</a></li>
                    <li><a href="#Work">Experience</a></li>
                    <li><a href="#Projects">Projects</a></li>
                    <li><a href="#Contacts">Contact us</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="firstSection" id="About">
            <div class="leftsection">
                <h1>
                    About Me
                </h1>
                Hi,My name is <span class="purple"><b> Sunidhi</b></span>
                <div>and I am a B.Tech 3rd year student </div>
                <span id="element"></span>
            </div>
            <div class="rightsection">
                <img src="front-img.jpg" alt="" width="350">
            </div>
        </section>
        <section class="secondSection" id="Work">
            <span class="text-gray">What i have done so far</span>
            <h1>Work Experience</h1>
            <div class="box">
                <div class="vertical">
                    <img src="dev.png" class="image-top" alt="">
                    <div class="verticaltitle">
                        AIT INTERN
                        <BR>
                        <p STYLE="font-size: small;">(AUG 2024-SEPT 2024)</p>
                    </div>
                    <div class="verticaldesc">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error architecto magnam, reiciendis porro mollitia unde veniam? Ea odio culpa rem. Maxime unde nostrum aut asperiores cupiditate itaque minima placeat fugit!
                    </div>
                </div>
                <div class="vertical">
                    <img src="dev.png" class="image-top" alt="">
                    <div class="verticaltitle">
                        AIT INTERN
                        <BR>
                        <p STYLE="font-size: small;">(AUG 2024-SEPT 2024)</p>
                    </div>
                    <div class="verticaldesc">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error architecto magnam, reiciendis porro mollitia unde veniam? Ea odio culpa rem. Maxime unde nostrum aut asperiores cupiditate itaque minima placeat fugit!
                    </div>
                </div>
                <div class="vertical">
                    <img src="dev.png" class="image-top" alt="">
                    <div class="verticaltitle">
                        AIT INTERN
                        <BR>
                        <p STYLE="font-size: small;">(AUG 2024-SEPT 2024)</p>
                    </div>
                    <div class="verticaldesc">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error architecto magnam, reiciendis porro mollitia unde veniam? Ea odio culpa rem. Maxime unde nostrum aut asperiores cupiditate itaque minima placeat fugit!
                    </div>
                </div>
                <div class="vertical">
                    <img src="dev.png" class="image-top" alt="">
                    <div class="verticaltitle">
                        AIT INTERN
                        <BR>
                        <p STYLE="font-size: small;">(AUG 2024-SEPT 2024)</p>
                    </div>
                    <div class="verticaldesc">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error architecto magnam, reiciendis porro mollitia unde veniam? Ea odio culpa rem. Maxime unde nostrum aut asperiores cupiditate itaque minima placeat fugit!
                    </div>
                </div>
            </div>
        </section>
        <section class="thirdSection" id="Projects">
            <Span class="text-gray">What I Build</Span>
            <h1>Projects</h1>
            <div class="project-text">
                <div class="Project">
                    <a href="https://github.com/sunidhi1dec/Accident-detection-System">
                        <img src="project1.jpg" alt="" width="100%">
                        <div class="column">
                            <p>Spam Dectection System</p><br>
                    </a>
                    </div>
                    <a href="https://github.com/sunidhi1dec/Accident-detection-System">
                        <img src="project2.jpeg" alt="" width="100%">
                        <div class="column">
                            <p>Accident Dectection System</p><br>
                    </a>
                    </div>

                    <a href="https://github.com/sunidhi1dec/Projects">
                        <img src="project3qr.webp" alt="" width="100%">
                        <div class="column">
                            <p>QR Code Scanner</p><br>
                    </a>
                    </div>

                    <a href="https://github.com/sunidhi1dec/Human_AGE_Prediction">
                        <img src="ageproject.png" alt="" width="100%">
                        <div class="column">
                            <p>Human Age Dectection System</p>
                    </a>
                    </div>
                </div>
            </div>

        </section>
        <section class="fourthSection" id="Contacts">
            <h1>Contacts</h1><br>
            <Span style="color: rgb(40, 160, 225)">Connect with me</Span><br>
            <span class="text-gray">If you want to know more about me or my work, or if you would just
                like to say hello, send me a message. I'd love to hear from you.
            </span>
            <FORM action="index.php" method="POST" style="font-size: 20px; width: 80vw;">
                <br>
                <br>
                <label for="name">Name</label>
                <br><br>
                <input type="text" name="name" placeholder="Enter your name" style="width: 30vw; height: 2vw; font-size: 20px;"></input><br><br>
                <label for="email">Email</label>
                <br><br>
                <input type="email" name="email" placeholder="Enter your email" style="width: 30vw; height: 2vw; font-size: 20px;"></input><br><br>
                <label for="message">Message</label>
                <br><br>
                <input type="textarea" name="message" placeholder="Enter your message" style="width: 30vw; height: 5vw; font-size: 20px;"></input><br>
                <input type="submit" style="margin-left: 30vw; background-color:rgb(40, 160, 225) ;font-weight: bolder;font-size: 20px; width: 80px;">
            </FORM>


        </section>

    </main>
    <footer>
        <div class="footer">
            <div class="footer-first">
                <h3>Sunidhi's Portfolio</h3>
            </div>
            <div class="rights">
                www.sunidhiportfolio.com | All Rights Reserved
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed('#element', {
            strings: ['Web Developer', 'Software Programmer', 'Keen Learner', 'Tech-Savvy ', 'Enthusiastic Coder'],
            typeSpeed: 50,
        });
    </script>
</body>

</html>
