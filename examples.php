<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ben Gudgion - Coding Examples</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pushbar.js@1.0.0/src/pushbar.min.css">
        <script src="https://kit.fontawesome.com/259440ef33.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <?php include("sidebar.php") ?>
        <header>
            <h1>Coding Examples</h1>
        </header>
        <main>
            <div class="article-container">
                <article>
                    <h2>Database Challenge</h2>
                    <p>This challenge required creating any SQL query that used a subquery on a database of our choice. 
                        My choice was a movie database as seen below.</p>
                    <div class="scroller">
                        <code style="white-space: pre;">
 mov_id |         mov_title         | mov_year | mov_time |    mov_lang     | mov_dt_rel | mov_rel_country 
--------+---------------------------+----------+----------+-----------------+------------+-----------------
    901 | Vertigo                   |     1958 |      128 | English         | 1958-08-24 | UK              
    902 | The Innocents             |     1961 |      100 | English         | 1962-02-19 | SW              
    903 | Lawrence of Arabia        |     1962 |      216 | English         | 1962-12-11 | UK              
    904 | The Deer Hunter           |     1978 |      183 | English         | 1979-03-08 | UK              
    905 | Amadeus                   |     1984 |      160 | English         | 1985-01-07 | UK              
    906 | Blade Runner              |     1982 |      117 | English         | 1982-09-09 | UK              
    907 | Eyes Wide Shut            |     1999 |      159 | English         |            | UK              
    908 | The Usual Suspects        |     1995 |      106 | English         | 1995-08-25 | UK              
    909 | Chinatown                 |     1974 |      130 | English         | 1974-08-09 | UK              
    910 | Boogie Nights             |     1997 |      155 | English         | 1998-02-16 | UK              
    911 | Annie Hall                |     1977 |       93 | English         | 1977-04-20 | USA             
    912 | Princess Mononoke         |     1997 |      134 | Japanese        | 2001-10-19 | UK              
    913 | The Shawshank Redemption  |     1994 |      142 | English         | 1995-02-17 | UK              
    914 | American Beauty           |     1999 |      122 | English         |            | UK              
    915 | Titanic                   |     1997 |      194 | English         | 1998-01-23 | UK              
    916 | Good Will Hunting         |     1997 |      126 | English         | 1998-06-03 | UK              
    917 | Deliverance               |     1972 |      109 | English         | 1982-10-05 | UK              
    918 | Trainspotting             |     1996 |       94 | English         | 1996-02-23 | UK              
    919 | The Prestige              |     2006 |      130 | English         | 2006-11-10 | UK              
    920 | Donnie Darko              |     2001 |      113 | English         |            | UK              
    921 | Slumdog Millionaire       |     2008 |      120 | English         | 2009-01-09 | UK              
    922 | Aliens                    |     1986 |      137 | English         | 1986-08-29 | UK              
    923 | Beyond the Sea            |     2004 |      118 | English         | 2004-11-26 | UK              
    924 | Avatar                    |     2009 |      162 | English         | 2009-12-17 | UK              
    926 | Seven Samurai             |     1954 |      207 | Japanese        | 1954-04-26 | JP              
    927 | Spirited Away             |     2001 |      125 | Japanese        | 2003-09-12 | UK              
    928 | Back to the Future        |     1985 |      116 | English         | 1985-12-04 | UK              
    925 | Braveheart                |     1995 |      178 | English         | 1995-09-08 | UK              
</code>
                    </div>
                    <p>The query I decided to create would select only the movies that were released before 1999 and that had a 
                        runtime lower than 120 minutes.</p>
                    <div class="scroller">
                        <code style="white-space: pre;">
SELECT * 
FROM movie
WHERE mov_id IN(
SELECT mov_id 
FROM movie 
WHERE mov_year < 1999 
AND mov_time < 120)
ORDER BY mov_year DESC;
                        </code>
                    </div>
                    <p>Here are the results form the query above. As you can see, I have also ordered the results by the movie 
                        year in descending order.</p>
                    <div class="scroller">
                        <code style="white-space: pre;">
 mov_id |         mov_title         | mov_year | mov_time |    mov_lang     | mov_dt_rel | mov_rel_country 
--------+---------------------------+----------+----------+-----------------+------------+-----------------
    918 | Trainspotting             |     1996 |       94 | English         | 1996-02-23 | UK              
    908 | The Usual Suspects        |     1995 |      106 | English         | 1995-08-25 | UK              
    928 | Back to the Future        |     1985 |      116 | English         | 1985-12-04 | UK              
    906 | Blade Runner              |     1982 |      117 | English         | 1982-09-09 | UK              
    911 | Annie Hall                |     1977 |       93 | English         | 1977-04-20 | USA             
    917 | Deliverance               |     1972 |      109 | English         | 1982-10-05 | UK              
    902 | The Innocents             |     1961 |      100 | English         | 1962-02-19 | SW              
                        </code>
                    </div>
                </article>
            </div>

            <div class="article-container">
                <article>
                    <h2>PHP Code Example</h2>
                    <p>This project required me to implement what I had learnt from studying PHP and to incorporate it into the 
                        NetMatters website I had made from a previous project. Using this language allowed me to use some of the 
                        tools available to PHP which would allow for secure connections to a database, such as PDO (PHP Data Objects).
                    </p>
                    <div class="scroller">
                        <code style="white-space: pre;">
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate name
    $firstName = filter_input(INPUT_POST, 'first-name', FILTER_SANITIZE_STRING);
    $error = "";
    if (!$firstName || trim($firstName) === '') {
        $error = 'Your First Name';
        array_push($errors, $error);
    }
    $lastName = filter_input(INPUT_POST, 'last-name', FILTER_SANITIZE_STRING);
    $error = "";
    if (!$lastName || trim($lastName) === '') {
        $error = 'Your Last Name';
        array_push($errors, $error);
    }
    
    // Validate email
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $error = "";
    if ($email) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!$email) {
            $error = 'A valid email';
            array_push($errors, $error);
        }
    } else {
        $error = 'Your email';
        array_push($errors, $error);
    }

    // Validate subject
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);

    // Validate message
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    $inputs['message'] = $message;
    $error = "";
    if (!$message || trim($message) === '') {
        $error = 'Message';
        array_push($errors, $error);
    }

    if($errors) {
        formatErrors($errors);
    }
}
                        </code>
                    </div>
                    <p>The validation code above is an example of another one of PHP's tools which allows for input data to be filtered/
                        sanitized. This is done to prevent any illegal characters from being sent through to the database.
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