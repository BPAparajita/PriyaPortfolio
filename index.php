<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <h1>My Portfolio</h1>
            </div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Me</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#resume">Resume</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <section id="home">
        <div class="intro">
            <h2>Welcome to My Portfolio</h2>
            <p>I'm a web developer with a passion for creating beautiful and functional websites.</p>
        </div>
    </section>
    <section id="about">
        <div class="container">
            <h2>About Me</h2>
            <p>Hi, I'm Priya. I have experience in HTML, CSS, JavaScript, and various frameworks.</p>
            <h3>Skills</h3>
            <ul class="skills">
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
                <li>PHP</li>
                <li>MySqL</li>
                <li>Laravel</li>
            </ul>
        </div>
    </section>
    <section id="projects">
        <div class="container">
            <h2>Projects</h2>
            <div class="project-card">
                <h3>Project 1</h3>
                <p>Description of project 1. <a href="#">View on GitHub</a></p>
            </div>
            <div class="project-card">
                <h3>Project 2</h3>
                <p>Description of project 2. <a href="#">View on GitHub</a></p>
            </div>
            <!-- Add more projects as needed -->
        </div>
    </section>
    <section id="resume">
        <div class="container">
            <h2>Resume</h2>
            <a class="btn" href="resume.pdf" download>Download my resume</a>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <h2>Contact</h2>
            <form id="contact-form">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                <button class="btn" type="submit">Send</button>
            </form>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>&copy; 2024 My Portfolio</p>
            <ul class="social-links">
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fab fa-github"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            </ul>
        </div>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>
