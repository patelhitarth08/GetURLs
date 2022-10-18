<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="logo2.png"/>
    <title>GetURLs</title>

</head>

<body>
    <span id="top"></span>

    <div class="header-container">
        <header class="header">

            <a href="index.php"><p class="logo">GetURLs</p></a>
            <div class="navbar">
                <a class="active nav" href="#">Home</a>
                <a class="nav" href="#about">About</a>
                <a class="nav" href="#contact">Contact</a>
            </div>
        </header>
    </div>


    <section class="home-container" id="home">
        <div class="my-intro">
            <div class="intro-text">
                <p class="intro">Hello,</p>
                <p class="intro">Welcome to<span id="geturl"> <a href="index.php" style="color: maroon;">GetURLs.com</a> </span></p>
                <p class="intro">Enter your link here to get your url</p>
                <div class="form-intro">
                    <form action="url.php" method="post">
                        <input type="text" placeholder="Enter URL" name="url" class="input">

                        <input type="submit" value="submit" class="btn" name="send-url">
                    </form>
                </div>



                <div class="shorturl-portion">
                    <?php
                    if (isset($_GET['shorturl'])) {
                        $shorturl = $_GET['shorturl'];
                        echo showurl($shorturl);
                    }

                    function showurl($url)
                    { ?>
                        <p class="intro">Your shorten url is...</p>
                        <div class="short">
                            <?php echo $url; ?>
                        </div>
                    <?php } ?>

 
                </div>


                <!-- <script>
                    if (performance.navigation.type == performance.navigation.TYPE_RELOAD) {
                        window.location.replace("index.php");
                    }
                </script> -->
            </div>
        </div>
    </section>



    <section class="about-container" id="about">

        <div class="heading">
            <p> About <span>Me</span> </p>
        </div>
        <div class="about-me">
            <img src="Hitarth_intro.jpg" alt="about_hp" class="my-img">

            <div class="about-text">
                <p>My name is Hitarth Patel. I am pursuing my BTech degree in Computer engineering field at Dharmsinh
                    Desai
                    University. I am very passinate for this feild. I do Competetive Programming as well as
                    Web-Development.
                    This is a solo project made by me.
                </p>
            </div>
        </div>
    </section>


        <section class="contact-container" id="contact">

        <div class="heading">
            <p> Contact <span>Me</span> </p>
        </div>

        <div class="form-card">

            <div class="card-container">

                <div class="card">
                    <a href="mailto:patelhitarth08@gmail.com" target="_blank"><i class="fa fa-envelope" style="font-size: 1.5em;"></i></a>
                    <p>patelhitarth08@gmail.com</p>
                </div>

                <div class="card">

                    <a href="tel:+917016421539" target="_blank"><i class="fa fa-phone" style="font-size: 1.5em;"></i></a>
                    <p>+91 7016421539</p>
                </div>

                <div class="card">

                    <a href="https://goo.gl/maps/ncT7XaVjoLA2fU7BA" target="_blank"><i class="fa fa-map-marker" style="font-size: 1.5em;"></i></a>
                    <p>Nadiad, Gujarat, India</p>
                </div>
            </div>

            <div class="form">
                <form action="form.php" method="post">
                    <input type="text" placeholder="enter your name" name="name" class="input">

                    <input type="email" placeholder="enter your email" name="email" class="input">

                    <input type="textarea" placeholder="Enter Your Messege" name="text" class="input">

                    <input type="submit" value="submit" class="btn" name="send">

                </form>
            </div>
        </div>

    </section>

    <footer class="foot">

        <h2 class="contact-heading">Follow <span>Me</span></h2>
        <div class="contact">

            <div class="social">
                <a href="https://twitter.com/patelhitarth08?t=kliQyA5c3Mk2yizoVliClg&s=09" target="_blanck" style="font-size: 2em;"> <span class="fa fa-twitter social-icon"></span></a>
            </div>

            <div class="social">
                <a href="https://www.instagram.com/_patel_hitarth.24/" target="_blanck" style="font-size: 2em;"> <span class="fa fa-instagram social-icon"></span></a>
            </div>

            <div class="social">
                <a href="https://in.linkedin.com/in/patel-hitarth-152919223" target="_blanck" style="font-size: 2em;">
                    <span class="fa fa-linkedin-square social-icon"></span></a>
            </div>

            <div class="social">
                <a href="https://www.facebook.com/HitarthPatelHP/" target="_blanck" style="font-size: 2em;"> <span class="fa fa-facebook-square social-icon"></span></a>
            </div>
        </div>

        <p>Copyright © 2022 GetURLs.com</p>

    </footer>
    <a href="#" id="btn">↑</a>

    </div>

</body>

</html>