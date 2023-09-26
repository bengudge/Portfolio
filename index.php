<?php //include("connect.php") ?>
<?php //include("post.php") ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ben Gudgion - Portfolio</title>
        <link rel="shortcut icon" href="img/favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pushbar.js@1.0.0/src/pushbar.min.css">
        <!-- <script type="text/javascript">
            
        </script> -->

    </head>
    <body>
        <?php include("sidebar.php") ?>

        <header id="main-header">
            <div class="header-image">
                <div class="header-wrapper">
                    <h1>My Name is Ben Gudgion</h1>
                    <div id="typed-subhead">
                        <p>I'm a Web Developer</p>
                    </div>
                    <p><span id="typed"></span></p>  
                </div>
                
                <!-- Change href to project section -->
                <div class="scrolldown-wrapper">
                    <a href="#portfolio">Scroll Down<br><i class="fa-solid fa-chevron-down"></i></a>
                </div>
            </div>
        </header>
        <main id="main-page-main">
            <!-- Projects Section -->
            <section id="portfolio">
                <div class="project">
                    <a href="../NetmattersSite/index.php">
                        <img src="img/netmatters.png" alt="Netmatters Page Reflection" width="640" height="480">
                    </a>
                    <h4>HTML & CSS Reflection</h4>
                    <!-- Link to the project -->
                    <a href="../NetmattersSite/index.php">View Project<i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="project">
                    <a href="../NetmattersSite/contacts.php">
                        <img src="img/php.png" alt="PHP Reflection" width="640" height="480">
                    </a>
                    <h4>PHP Reflection</h4>
                    <!-- Link to the project -->
                    <a href="../NetmattersSite/contacts.php">View Project<i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="project">
                    <a href="http://127.0.0.1:8000/">
                        <img src="img/laravel.png" alt="PHP Reflection" width="640" height="480">
                    </a>
                    <h4>PHP Reflection</h4>
                    <!-- Link to the project -->
                    <a href="http://127.0.0.1:8000/">View Project<i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </section>
            <!-- Contact Form Section -->
            <section id="contact">
                <div class="form-foreword">
                    <h3>Get In Touch</h3>
                    <p>Please contact me for any queries you may have by using
                        the form or you can contact me by phone 
                        or email!
                    </p>
                    <h5>00000 000000<br>
                        gudgion@hotmail.co.uk
                    </h5>
                </div>
                <form method="post" id="signup">
                    <div class="name-inputs">
                        <input type="text" class="form-input" placeholder="First Name*" 
                        id="first-name" name="first-name">
                        <input type="text" class="form-input" placeholder="Last Name*" 
                        id="last-name" name="last-name">
                    </div>
                    <input type="email" class="form-input" placeholder="Email Address*" 
                        id="email" name="email">
                    <input type="text" class="form-input" placeholder="Subject" 
                        id="subject" name="subject">   
                    <textarea  class="form-input" placeholder="Message*" 
                        id="message" name="message"></textarea> 
                    <button class="btn contact-submit" name="submit" value="submit">Submit</button>
                </form>
            </section>
            <a class="to-top" href="#"><i class="fa-solid fa-chevron-up"></i><p>Back To Top</p></a>
        </main>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/typed/typed.js"></script>
    <script src="js/form_validation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pushbar.js@1.0.0/src/pushbar.min.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/259440ef33.js" crossorigin="anonymous"></script>
    <script>
        var typed = new Typed('#typed',{
            stringsElement: '#typed-subhead',
            typeSpeed: 80,
            startDelay: 1000
        });

        const pushbar = new Pushbar({
            blur:true,
            overlay:true,
        });

        
    </script>
    </body>
</html>