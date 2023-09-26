<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ben Gudgion - About Me</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pushbar.js@1.0.0/src/pushbar.min.css">
        <script src="https://kit.fontawesome.com/259440ef33.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <?php include("sidebar.php") ?>
        <header>
            <h1>About Me</h1>
        </header>
        <main>
            <div class="article-container">
                <article id="about-me">
                    <p>
                        My name is <strong>Ben Gudgion</strong> and I am a web and software developer based in the 
                        Essex/London area.
                        <br><br>
                        Recently returning from seeing family and helping on the family business in rural
                        Australia after graduating with a 2:1 in Computer Science and I am now pursuing work 
                        in this industry. In that time, I made sure to continuously practise my programming skills 
                        while also learning other technologies such as JavaScript, C#, Angular and NestJS etc.
                        <br><br>
                        I am a highly motivated individual with a thirst to continually learn and increase my knowledge 
                        in a wide variety of aspects of the computer science field. Throughout my years at university
                        and after, I have gained many skills in this field, not only in front-end development 
                        (<strong>HTML</strong>, <strong>CSS/SCSS</strong>, <strong>Javascript</strong>, <strong>Typescript</strong>, 
                        <strong>Angular</strong>, <strong>NestJS</strong>) but also back-end development (<strong>Java</strong>, 
                        <strong>C++</strong>, <strong>Python</strong>, <strong>MySQL</strong>, <strong>C#</strong>) and other 
                        areas like Computer Vision, NLP, Security etc.
                    </p>
                </article>
            </div>
            <a class="to-top" href="#"><i class="fa-solid fa-chevron-up"></i><br>Back To Top</a>
        </main>
        <script src="js/jquery-3.6.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/pushbar.js@1.0.0/src/pushbar.min.js" type="text/javascript"></script>
        <script>
            const pushbar = new Pushbar({
                blur:true,
                overlay:true,
            });
        </script>
    </body>
</html>

