<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="The contact page for Ian Van Harten's web developer portfolio website.">
    <meta name="keywords" content="contact, Ian Van Harten, web developer, software developer, freelance, portfolio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/contact.css">
    <script defer src="../scripts/navbar.js"></script>
    <title>Ian Van Harten</title>
</head>

<body>
    <header>
    <nav id="navbar">
        <div class="site-name">
            <a href="../index.html" class="float-left">
                <div>
                    <h1 class="site-title"><span class="title-main">Ian Van Harten</span>
                    <span class="title-sub">&lt; Developer &gt;</span></h1>
                </div>
            </a>
        </div>
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navbar-links">
            <ul>
                <li><a href="../index.html" class="nav-link">Home</a></li>
                <li><a href="../pages/projects.html" class="nav-link">Projects</a></li>
                <li><a href="../pages/education-and-books.html" class="nav-link">Education</a></li>
                <li><a href="../pages/about.html" class="nav-link">About</a></li>                   
                <li><a href="../pages/contact.html" class="nav-link">Contact</a></li>          
            </ul>
        </div>
    </nav>
    </header>

    <main>
        <div class="contact-text">
            <?php
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];

                $to = 'ianvharten@gmail.com';
                $subject = 'Contact Form Submission from ianvanharten.com!';

                $email_msg = "Name: $name\n" . 
                    "Email: $email\n" . 
                    "Message: $message";
    
                mail($to, $subject, $email_msg, 'From:' . $email);

                echo 'Thank you for your message! I will get back to you ASAP.<br /><br />';
                echo 'Your name: ' . $name . '<br />';
                echo 'Your email: ' . $email . '<br />';
                echo 'Your message: ' . $message . '<br />';
            ?>
            <br>
            <a href="../index.html">Back to the home page</a>
        </div>
    </main>

    <footer>
        <div class="footer-links">
            <a href="../index.html">• Home</a>&nbsp;&nbsp;
            <a href="../pages/projects.html">• Projects</a>&nbsp;&nbsp;
            <a href="../pages/about.html">• About</a>&nbsp;&nbsp;
            <a href="../pages/education-and-books.html">• Education</a>&nbsp;&nbsp;
            <a href="../pages/contact.html">• Contact</a>&nbsp;&nbsp;
            <a href="https://www.linkedin.com/in/ian-van-harten" target="_blank">• LinkedIn</a>
        </div>
        <br>
        <p>Copyright Ian Van Harten &copy; 2020</p>
    </footer>

</body>

</html>

