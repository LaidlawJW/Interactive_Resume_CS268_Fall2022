<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="icon" type="image/x-icon" href="images/codeicon.png" alt="Favicon">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/aboutme.css">
    <script src="js/global.js" defer></script>
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
                    <li><a href="research.php">RESEARCH</a></li>
                    <li><a href="aboutme.php" class="active">ABOUT ME</a></li>
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
                <h1>About Me</h1>
                <img id="green-line" src="images/greenline.png" alt="Dividing Line">
                <h3>Professor of Computer Science, Ph.D.</h3>
            </div>
        </header>
        <!--------------------------------------------------------------------->
        <!------------------------------ Content ------------------------------>
        <content id="site-content">
            <div id="content-main">
                <div id="content-main-row">
                    <div id="content-main-img">
                        <img id="gomes-portrait" src="images/gomesportrait.jpg" alt="Professor Gomes Portrait">
                    </div>

                    <div id="content-main-info">

                        <div id="content-header">
                            <h1>Who is Rahul Gomes?</h1>
                        </div>

                        <div id="content-main-text">
                            <p>Rahul Gomes is an Assistant Professor of Computer
                                Science at the University of Wisconsin-Eau
                                Claire and an administrator at the Blugold
                                Center for High Performance Computing. The main
                                focus of his research is to broaden the spectrum
                                and hasten the advancement of machine learning,
                                an exceptionally important division of AI that
                                will cultivate the future of tech.</p>
                        </div>
                        <div id="content-main-links">
                            <div>
                                <a href="https://www.uwec.edu/profiles/gomesr/" target="_blank">
                                    University Profile
                                </a>
                            </div>
                            <div>
                                <a href="https://scholar.google.com/citations?user=s2LUBTQAAAAJ&hl=en" target="_blank">
                                    Google Scholar
                                </a>
                            </div>
                            <div>
                                <a href="https://www.webofscience.com/wos/author/record/Z-4475-2019" target="_blank">
                                    Web of Science
                                </a>
                            </div>
                            <div>
                                <a href="https://www.linkedin.com/in/rahul-gomes/" target="_blank">
                                    LinkedIn
                                </a>
                            </div>
                        </div>
                        <div id="content-main-contact">
                            <h2>Contact</h2>
                            <hr width="200px">
                            <ul>
                                <li>
                                    <p>Office Phone: <b>715-836-3395</b></p>
                                </li>
                                <li><a href="mailto:gomesr@uwec.edu"><b>Email</b></a></li>
                            </ul>
                        </div>
                        <div id="download-cv-container">
                            <a id="download-cv" href="gomescv.pdf" target="_blank" download>
                                DOWNLOAD CV <img id="download-img" src="images/download.png" alt="Download Icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </content>
        <!--------------------------------------------------------------------->
        <!------------------------------ Footer ------------------------------->
        <footer id="site-footer">

            <div id="footer-main">
                <div id="footer-infocard1">
                    <h4>Honoring Indigenous Peoples</h4>

                    <hr>
                    <p>
                        "I acknowledge that the University of Wisconsin-Eau Claire
                        occupies the sacred and ancestral land of the Indigenous
                        Peoples. I honor the land of the Ojibwe and Dakota Nations."
                    </p>

                </div>

                <div id="footer-infocard2">

                    <h4>
                        Proud Representative
                    </h4>

                    <hr>
                    <p>
                        Rahul Gomes is an exceptionally established member of
                        the University of Wisconsin Eau Claire faculty. His
                        dedication to his craft and excellence has introduced
                        many notable ideas to the field of computer science.
                    </p>

                </div>

                <div id="footer-links">

                    <h4>External Links</h4>

                    <hr>
                    <ul>
                        <li><a href="https://www.uwec.edu/profiles/gomesr/" target="_blank">University Profile</a></li>
                        <li><a href="https://scholar.google.com/citations?user=s2LUBTQAAAAJ&hl=en" target="_blank">Google Scholar Profile</a></li>
                        <li><a href="https://www.webofscience.com/wos/author/record/Z-4475-2019" target="_blank">Web of Science Profile</a></li>
                    </ul>

                </div>

                <div id="footer-contact">

                    <h4>Contact</h4>

                    <hr>
                    <ul>
                        <li>Office Phone: <b>715-836-3395</b></li>
                        <li><a href="mailto:gomesr@uwec.edu">Email Me</a></li>
                    </ul>

                </div>
            </div>
        </footer>
        <!--------------------------------------------------------------------->

    </div>
</body>

</html>
