<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Research</title>
    <link rel="icon" type="image/x-icon" href="images/graphicon.png" alt="Favicon">
    <link rel="stylesheet" href="css/global.css">
    <script src="js/global.js" defer></script>
    <style>
        table {
            border-collapse: separate;
            border: 2px solid black;
        }

    </style>
</head>

<body>
    <div class="page">

        <button id="top-button">
            <img id="white-caret-up" src="images/whitecaretup.png" title="Go to Top" alt="Up Caret">
        </button>

        <!------------------------------ Navbar ------------------------------->
        <nav id="site-nav">
            <div id="nav-container">

                <img id="book" src="images/greenbook.png" alt="Book Logo">

                <div id="nav-text-container">
                    <p>Dr. Rahul Gomes</p>
                </div>

                <ul>
                    <li><a href="students.php">STUDENTS</a></li>
                    <li><a href="posts.php">POSTS</a></li>
                    <li><a href="pedagogy.php">PEDAGOGY</a></li>
                    <li><a href="research.php" class="active">RESEARCH</a></li>
                    <li><a href="aboutme.php">ABOUT ME</a></li>
                    <li><a href="homepage.php">HOME</a></li>
                </ul>

                <div id="menu-button-container">
                    <button id="menu-button">
                        <img id="threeline" src="images/threeline.png" alt="Three Line Icon">
                    </button>
                </div>

            </div>
        </nav>
        <!--------------------------------------------------------------------->




        <!--------------- Navbar Popup menu --------------->
        <div id="nav-popup">
            <div class="nav-menu-container"><a href="homepage.php">HOME</a></div>
            <div class="nav-menu-container"><a href="aboutme.php">ABOUT ME</a></div>
            <div class="nav-menu-container"><a href="research.php">RESEARCH</a></div>
            <div class="nav-menu-container"><a href="hobbies.php">HOBBIES</a></div>
            <div class="nav-menu-container"><a href="pedagogy.php">PEDAGOGY</a></div>
            <div class="nav-menu-container"><a href="posts.php">POSTS</a></div>
            <div class="nav-menu-container"><a href="students.php">STUDENTS</a></div>
        </div>
        <!------------------------------------------------->




        <!------------------------------ Header ------------------------------->
        <header id="site-header" title="greeting">

            <div id="header-container">

                <h1>Research</h1>

                <img id="green-line" src="images/greenline.png" alt="Dividing Line">

                <h3>Published work.</h3>

            </div>

        </header>
        <!--------------------------------------------------------------------->




        <!------------------------------ Content ------------------------------>
        <content id="site-content">

            <div id="content-main">

                <?php
                    require_once("sql_conn.php");
                
                    // Insert data from edit page
                    $writers =  $_REQUEST["writers"];
                    $publishDate = $_REQUEST["publishDate"];
                    $title =  $_REQUEST["title"];
                    $journal =  $_REQUEST["journal"];
                    $link =  $_REQUEST["link"];
         
                    // Performing insert query execution
                    $sqlquery = "INSERT INTO research (writers, publishDate, title, journal, link) VALUES ('$writers', '$publishDate', '$title', '$journal', '$link')";
        
                    if ($dbc->query($sqlquery) === TRUE) {
                        echo "New data inserted successfully";
                    } else {
                        echo "Error: " . $sqlquery . "<br>" . $dbc->error;
                    }
                
                ?>
            </div>

        </content>
        <!--------------------------------------------------------------------->




        <!------------------------------ Footer ------------------------------->
        <footer id="site-footer">

            <div id="footer-main">

                <div id="footer-infocard1">

                    <h4><u>Honoring Indigenous Peoples</u></h4>

                    <p>
                        "I acknowledge that the University of Wisconsin-Eau Claire
                        occupies the sacred and ancestral land of the Indigenous
                        Peoples. I honor the land of the Ojibwe and Dakota Nations."
                    </p>

                </div>

                <div id="footer-infocard2">

                    <h4>
                        <u>Proud Representative of the<br>University of Wisconsin-Eau Claire</u>
                    </h4>

                    <p>
                        Rahul Gomes is an exceptionally established member of
                        the University of Wisconsin Eau Claire faculty. His
                        dedication to his craft and excellence has introduced
                        many notable ideas to the field of computer science.
                    </p>

                </div>

                <div id="footer-nav">

                    <h4><u>External Links</u></h4>

                    <ul>
                        <li><a href="https://www.uwec.edu/profiles/gomesr/" target="_blank">University Profile</a></li>
                        <li><a href="https://scholar.google.com/citations?user=s2LUBTQAAAAJ&hl=en" target="_blank">Google Scholar Profile</a></li>
                        <li><a href="https://www.webofscience.com/wos/author/record/Z-4475-2019" target="_blank">Web of Science Profile</a></li>

                    </ul>

                </div>

                <div id="footer-contact">

                    <h4><u>Contact</u></h4>

                    <ul>
                        <li>
                            <p>Office Phone: <b>715-836-3395</b></p>
                        </li>
                        <li><a href="mailto:gomesr@uwec.edu">Email Me</a></li>
                    </ul>

                </div>

            </div>

        </footer>
        <!--------------------------------------------------------------------->
    </div>
</body>

</html>
