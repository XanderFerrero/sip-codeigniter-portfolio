<!DOCTYPE html>
<html class="light-theme">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portfolio #1</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <link rel="icon" href="/assets/logo.svg">
        <script src="https://kit.fontawesome.com/6d8b6d29c4.js" crossorigin="anonymous"></script>
        <script defer src="script.js"></script>
        <link rel="stylesheet" href="/styles.css">
    </head>
  <body>
    <!-- navbar -->
    <nav id="navbar" class="navbar is-success animate-to-top" role="navigation">
        <div class="navbar-brand">
            <a class="navbar-item">
                <img src="./assets/logo.svg" alt="Icon description"></i>
            </a>
            <div class="navbar-item mr-5" >
                <p class="is-size-3" id="navbar-title">XIGMA</p>
            </div>
        </div>
        <div class="navbar-menu">
            <div class="navbar-start">
                <a role="button" href="#" class="is-size-5 navbar-item mx-2">
                    Home
                </a>
                <a role="button" href="#about" class="is-size-5 navbar-item mx-2">
                    About
                </a>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a href="" class="is-size-5 navbar-link">
                        Skills
                    </a>
                    <div class="navbar-dropdown">
                        <a href="#plang-container" class="navbar-item">
                            Core Languages
                        </a>
                        <a href="#services-container" class="navbar-item">
                            Web Development Info
                        </a>
                        <a class="navbar-item" href="#vanilla-proj">
                            Vanilla Web
                        </a>
                        <a href="#games-route" class="navbar-item">
                            Games
                        </a>
                        <a href="#es-container" class="navbar-item">
                            Embedded Systems
                        </a>
                    </div>
                </div>
                 <a role="button" href="#hobbies" class="is-size-5 navbar-item">
                    Hobbies
                </a>
                <a role="button" href="#contact" class="is-size-5 navbar-item mx-2">
                    Contact Me
                </a>
               
            </div>
        </div>
    </nav>
    <!-- hero -->
    <section id="header" class="hero is-small">
        <div class="hero-body">
            <div class="columns is-vcentered">
                <div class="column">
                    <div class="block animate-to-right non-animate-block">
                        <h1 class="title is-1 has-text-centered has-text-dark" id="hero-title">Portfolio #1</h1>
                        <h2 class="subtitle has-text-centered has-text-dark">SIP Project #1</h2>
                    </div>
                </div>
                <div class="column">
                    <div class="block non-animate-block animate-to-left">
                         <figure class="image center">
                            <img class="is-rounded" src="./assets/source.jpg" style="width:80%" />
                        </figure>
                    </div>
                </div>
            </div>
           
            <!-- <div class="main-text-container">
                <h1 class="title is-1 ml-6 has-text-centered has-text-dark">Portfolio #1</h1>
            </div>
            <div class="main-image-container">
                <figure class="image center">
                    <img class="is-rounded" src="./assets/source.jpg" style="width:30%" />
                </figure>
            </div> -->
        </div>
    </section>


    <!-- about -->
    <section id="about" class="regsec section">
        <h1 class="title is-1 has-text-centered">Details</h1>
        <div class="container">
            <div class="box">
                <article class="message is-success">
                    <div class="message-header">
                        <p>About Me</p>
                        <button class="delete" aria-label="delete"></button>
                    </div>
                    <div class="message-body">
                        <p>
                            Hello! I'm Xavian Xander Ferrero. Programming has been my hobby since 7th grade. Through self-study using online resources and tutorials and school, I've acquired a strong foundation in programming concepts and frameworks for web applications and games. My current focus lies in embedded systems, particularly with microcontrollers like Arduino, which will be the focus of my senior year research. I plan to pursue Software or Computer Engineering in university.
                        </p>
                    </div>
                </article>
                <div class="block">        
                    <div class="field is-grouped is-grouped-multiline  is-flex is-justify-content-center">
                        <div class="control">
                            <div class="tags has-addons">
                                <span class="tag is-large">Nicknames</span>
                                <span class="tag is-large is-primary">Xand/Xav</span>
                            </div>
                        </div>
                        <div class="control">
                            <div class="tags has-addons">
                                <span class="tag is-large">Home</span>
                                <span class="tag is-large is-dark">Pototan, Iloilo</span>
                            </div>
                        </div>
                        <div class="control">
                            <div class="tags has-addons">
                                <span class="tag is-large">School</span>
                                <span class="tag is-large is-warning">Philippine Science High School - WVC</span>
                            </div>
                        </div>
                        <div class="control">
                            <div class="tags has-addons">
                                <span class="tag is-large">Favorite Subjects</span>
                                <span class="tag is-large is-info">Math, Physics, Computer Science</span>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="box has-background-success">
                    <aside class="menu">
                        <ul class="menu-list" >
                            
                            <li>Academic Awards/School Achievements</li>
                            <li>
                                <ul class="">
                                    <li class="content">Elementary Graduation: With High Honors</li>
                                    <li class="content">Director's List from S.Y. 2020-2021 to 2024-2025</li>
                                    <li class="content">Bronze Medalist in the Philippine Junior Physics Challenge 2025</li>
                                    <li class="content">PSHS Pi Day: 2-time Rubik's Cube Champion</li>
                                </ul>
                            </li>
                            <li class=" has-text-light">Extracurriculars</li>
                            <li>
                                <ul class="menu-list">
                                    <li class="content">National Olympiad In Informatics 2023-2024</li>
                                    <li class="content">Philippine Junior Physics Challenge 2025</li>
                                    <li class="content">27th Philippine Math Olympiad</li>
                                </ul>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
        
    </section>
<!-- programming -->
    <section id="programming" class="regsec block section">
        <h1 class="title is-1 has-text-centered">Skills</h1>
        
        <div class="container center" id="traits">
            <div class="box">
                <h2 class="title is-3 has-text-centered">Traits</h2>
               
                <div class="field is-grouped is-grouped-multiline is-flex is-justify-content-center">
                    <div class="tags has-addons">
                        <div class="tag is-large">
                             <span class="icon is-small mx-1">
                                <i class="fa-solid fa-wrench"></i>
                            </span>
                        </div>
                        <div class="tag is-large is-primary">Practical Learner</div>
                    </div>
                    <div class="tags has-addons">
                        <div class="tag is-large">
                             <span class="icon is-small mx-1">
                                <i class="fa-solid fa-bolt"></i>
                            </span>
                        </div>
                         <div class="tag is-large is-link">Critical Thinking</div>
                    </div>
                   
                    <div class="tags has-addons">
                        <div class="tag is-large">
                             <span class="icon is-small mx-1">
                                <i class="fa-solid fa-check-double"></i>
                            </span>
                        </div>
                        <div class="tag is-large is-info">Problem Solving</div>
                    </div>
                    <div class="tags has-addons">
                        <div class="tag is-large">
                             <span class="icon is-small mx-1">
                                <i class="fa-solid fa-arrows-up-down-left-right"></i>
                            </span>
                        </div>
                        <div class="tag is-large is-success">Adaptability</div>
                    </div>
                    <div class="tags has-addons">
                        <div class="tag is-large">
                             <span class="icon is-small mx-1">
                                <i class="fa-solid fa-question"></i>
                            </span>
                        </div>
                        <div class="tag is-large is-warning">Curiosity</div>
                    </div>
                    <div class="tags has-addons">
                        <div class="tag is-large">
                            <span class="icon is-small mx-1">
                                <i class="fa-solid fa-image-portrait"></i>
                            </span>
                        </div>
                        <div class="tag is-large is-danger">Self-Reliant</div>
                    </div>
                    <div class="tags has-addons">
                        <div class="tag is-large">
                            <span class="icon is-small mx-1">
                                <i class="fa-solid fa-bookmark"></i>
                            </span>
                        </div>
                        <div class="tag is-large has-background-dark has-text-white">Resourceful</div>
                    </div>
                    
                </div>
                
            </div>
        </div>
        <!-- proglang -->
         <div class="container center">
            <div id="plang-container" class="box">
                <h2 class="title is-3">Programming Langauges Used </h2>
                <div class="columns">
                    <div class="column">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by4">
                                    <img src="assets/python.png" alt="">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="block content">
                                    Python
                                </div>
                                <div class="block">
                                    <span class="tag is-link is-medium">Enrichment</span>
                                    <span class="tag is-success is-medium">Informatics</span>
                                    <span class="tag is-danger is-medium">Console Projects</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by4">
                                    <img src="assets/cpp.png" alt="">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="content block">
                                    C++
                                </div>
                                <div class="block">
                                    <span class="tag is-link is-medium">Enrichment</span>
                                    <span class="tag is-success is-medium">Informatics</span>
                                    <span class="tag is-warning is-medium">Games</span>
                                    <span class="tag is-danger is-medium">Console Projects</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="columns">
                    <div class="column">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by4">
                                    <img src="assets/java.svg" alt="">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="content block">
                                    Java
                                </div>
                                <div class="block">
                                    <span class="tag is-info is-medium">GUI</span>
                                    <span class="tag is-warning is-medium">Games</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by4">
                                    <img src="assets/js.webp" alt="">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="content block">
                                    Javascript/Typescript
                                </div>
                                <div class="block">
                                    <span class="tag is-primary is-medium">Web Development</span>
                                    <span class="tag is-warning is-medium">Games</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="title is-2">Web Development</h2>
        <!-- webdev frameworks-->
        <div class="container center">
            <div class="box" id="services-container">
                <h2 class="title is-3">Framework/Libraries/Services Learned</h2>
                <div class="columns">
                <div class="column">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by4">
                                <img src="assets/nodejs.png" alt="">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="content center">
                            <div class="tags has-addons">
                                <span class="tag is-info">Backend Apps</span>
                                <span class="tag">NodeJS</span>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by4">
                                <img src="assets/express.png" alt="">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="content center">
                            <div class="tags has-addons">
                                <span class="tag is-info">Backend Apps</span>
                                <span class="tag">ExpressJS</span>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="cell">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by4">
                                    <img src="assets/mongodb.webp" alt="">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="content center">
                                    <div class="tags has-addons">
                                        <span class="tag is-info">Database</span>
                                        <span class="tag">MongoDB</span>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </div>

                <div class="columns">
                    <div class="column">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by4">
                                    <img src="assets/firebase.png" alt="">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="content center">
                                <div class="tags has-addons">
                                    <span class="tag is-info">BaaS</span>
                                    <span class="tag">Firebase</span>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                         <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by4">
                                    <img src="assets/react.png" alt="">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="content center">
                                <div class="tags has-addons">
                                    <span class="tag is-info">Frontend Framework</span>
                                    <span class="tag">React</span>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <!-- js  -->
        <div class="container">
            <div class="box" id="vanilla-proj">
                <h1 class="title is-3">Mini Vanilla JS Web Projects</h1>
                <div class="columns">
                    <div class="column">
                        <div class="notification is-primary">
                            <h1 class="title is-5">Resistor Value Calculator</h1>
                            <p class="content">
                                Calculates the amount of resistance (ohms) based on the color coding of
                                a specific resistor (4-bands)
                            </p>
                            <a href="games/resistor values.html">Try it here</a>
    
                        </div>
                    </div>
                    <div class="column">
                        <div class="notification is-primary">
                            <h1 class="title is-5">Quicksort Simulation</h1>
                            <p class="content">
                                Canvas API that sorts bars that vary in height in ascending order.
                            </p>
                            <a href="games/quicksort.html">Try it here</a>
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <div class="notification is-primary">
                            <h1 class="title is-5">Calculator</h1>
                            <p class="content">A basic calculator</p>
                            <a href="games/Calculator/index.html">Try it here</a>
                        </div>
                    </div>
                     <div class="column">
                        <div class="notification is-primary">
                            <h1 class="title is-5">Distance Converter</h1>
                            <p class="content">Conversion of various distance units</p>
                            <a href="games/DistanceConversion/index.html">Try it here</a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="notification is-primary">
                            <h1 class="title is-5">Quiz (DOM application)</h1>
                            <p class="content">simple implementation of foreach in an array of questions, generating html content.</p>
                            <a href="games/Quiz/index.html">Try it here</a>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
        <h1 class="title is-2" id="games-route">
            Game Development
        </h1>
        <!-- js games -->
        <div class="container">
            <div class="box">
                <h1 class="title is-3">Vanila JS Games</h1>
                <div class="columns">
                    <div class="column">
                        <div class="notification is-primary">
                            <a href="./games/canvasAPI/canvas.html">SNAKE GAME CLONE</a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="notification is-primary">
                            <a href="./games/PlatformCanvas/">PLATFORM DROPDOWN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cpp games -->
        <div class="container">
            <div id="sfml" class="box">
                <h1  class="title is-3">C++/SFML Games</h1>
                <div class="columns">
    
    
                    <div class="column">
                        <article class="message is-success">
                            <div class="message-header">
                                <p>Rock-Paper-Scissors Simulator</p>
                                <button class="delete" aria-label="delete"></button>
                            </div>
                            <div class="message-body">
                                <p class="content">RPS, but armies of objects fighting each other until one group remains.</p>
                                <a href="games/RPS Simulator - Copy.zip" download class="download-hover">Download .ZIP</a> 
                            </div>
                        </article>
                    </div>
                    <div class="column">
                        <article class="message is-success">
                            <div class="message-header">
                                <p>Tetris Clone</p>
                                <button class="delete" aria-label="delete"></button>
                            </div>
                            <div class="message-body">
                                <p class="content">Tetris Remake</p>
                                <a href="./games/Tetris - Copy.zip" download class="download-hover">Download .ZIP</a> 
                            </div>
                        </article>
                    </div>
                    <div class="column">
                        <article class="message is-success">
                            <div class="message-header">
                                <p>Snake Game</p>
                                <button class="delete" aria-label="delete"></button>
                            </div>
                            <div class="message-body">
                                <p class="content">Another Snake Game Clone</p>
                                <a href="./games/Snake.zip" download class="download-hover">Download .ZIP</a> 
                            </div>
                        </article>
                    </div>
                    <div class="column">
                        <article class="message is-danger">
                            <div class="message-header">
                                <p>"World Trade Center" Dino</p>
                                <button class="delete" aria-label="delete"></button>
                            </div>
                            <div class="message-body">
                                <p class="content">Chrome Dino Remake (Play at your own risk)</p>
                                <a href="./games/911.zip" download class="download-hover">Download .ZIP</a> 
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="swing" class="box">
                <h1 class="title is-3">
                    Java Swing Games
                </h1>
                <div class="columns">
                    <div class="column">
                        <article class="message is-success">
                            <div class="message-header">
                                <p>SOS PENCIL GAME</p>
                                <button class="delete" aria-label="delete"></button>
                            </div>
                            <div class="message-body">
                                <p class="content">2-player game where the most players that can match the letters "SOS" the most.</p>
                                <a href="./games/SOS Game.jar" download>Download .JAR</a> 
                            </div>
                        </article>
                    </div>
                    <div class="column">
                        <article class="message is-success">
                            <div class="message-header">
                                <p>Test & Targets</p>
                                <button class="delete" aria-label="delete"></button>
                            </div>
                            <div class="message-body">
                                <p class="content">Get the correct answer for each question of the quiz by shooting the targets</p>
                                <a href="./games/testntargets.zip" download>Download .ZIP</a> 
                            </div>
                        </article>
                    </div>
                    <div class="column">
                        <article class="message is-success">
                            <div class="message-header">
                                <p>Dino Rebirth</p>
                                <button class="delete" aria-label="delete"></button>
                            </div>
                            <div class="message-body">
                                <p class="content">Modified Chrome Dino</p>
                                <a href="./games/dinosaurgame.zip" download>Download .ZIP</a> 
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="title is-2">Embedded Systems</h1>
        <div class="container center">
            <div class="box" id="es-container">
                <h1 class="title is-3">Arduino Project/s</h1>
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by4">
                            <img src="assets/simon.png" alt="">
                        </figure>
                    </div>
                    <div class="card-content">
                        <p class="content">Simon Game</p>
                        <a href="https://www.facebook.com/share/v/1FX9yLAgy8/">View Demo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="regsec section" id="hobbies">
        <h1 class="title is-1 has-text-centered">Hobbies</h1>
        <div class="container">
            <h1 class="title is-2">Binge-watching</h1>
            <div class="box">
                <article class="message is-success">
                    <div class="message-header">
                        <p>My List of Favorite TV Series</p>
                        <button class="delete" aria-label="delete"></button>
                    </div>
                    <div class="message-body">
                        <div class="block">
                            <div class="field is-grouped is-grouped-multiline is-flex is-justify-content-center">
                                <div class="control">
                                    <div class="tags has-addons">
                                        <span class="tag is-medium is-warning">#1</span>
                                        <span class="tag is-medium is-link">Cobra Kai</span>
                                    </div>
                                </div>

                                <div class="control">
                                    <div class="tags has-addons">
                                        <span class="tag is-medium has-background-text-50">#2</span>
                                        <span class="tag is-medium is-link">Narcos: Mexico</span>
                                    </div>
                                </div>

                                <div class="control">
                                    <div class="tags has-addons">
                                        <span class="tag is-medium has-background-warning-20">#3</span>
                                        <span class="tag is-medium is-link">Narcos</span>
                                    </div>
                                </div>
                                <div class="control">
                                    <div class="tags has-addons">
                                        <span class="tag is-medium is-dark">#4</span>
                                        <span class="tag is-medium is-link">Squid Game</span>
                                    </div>
                                </div>
                                <div class="control">
                                    <div class="tags has-addons">
                                        <span class="tag is-medium is-dark">#5</span>
                                        <span class="tag is-medium is-link">Hunter x Hunter</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="message is-success">
                    <div class="message-header">
                        <p>My List of Favorite Movies</p>
                        <button class="delete" aria-label="delete"></button>
                    </div>
                    <div class="message-body">
                        <div class="block">
                            <div class="field is-grouped is-grouped-multiline is-flex is-justify-content-center">
                                <div class="control">
                                    <div class="tags has-addons">
                                        <span class="tag is-medium is-warning">#1</span>
                                        <span class="tag is-medium is-link">The Dictator</span>
                                    </div>
                                </div>

                                <div class="control">
                                    <div class="tags has-addons">
                                        <span class="tag is-medium has-background-text-50 has-text-white">#2</span>
                                        <span class="tag is-medium is-link">Midway</span>
                                    </div>
                                </div>

                                <div class="control">
                                    <div class="tags has-addons">
                                        <span class="tag is-medium has-background-warning-20 has-text-white">#3</span>
                                        <span class="tag is-medium is-link">3 Idiots</span>
                                    </div>
                                </div>
                                <div class="control">
                                    <div class="tags has-addons">
                                        <span class="tag is-medium is-dark">#4</span>
                                        <span class="tag is-medium is-link">All Quiet on the Western Front</span>
                                    </div>
                                </div>
                                <div class="control">
                                    <div class="tags has-addons">
                                        <span class="tag is-medium is-dark">#5</span>
                                        <span class="tag is-medium is-link">Karate Kid (2010)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            <h1 class="title is-2">Gaming</h1>
            <div class="box">
                <h1 class="title is-3">Geometry Dash: My Hardest Completions</h1>
                <div class="columns">
                    <div class="column">
                        <div class="card has-background-success-30">
                            <div class="card-image">
                                <figure class="image is-16by9">
                                    <img src="gd completions/xo.jpeg" alt="">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="content">
                                    <div class="field is-grouped is-grouped-multiline is-flex is-justify-content-center">
                                        <div class="control">
                                            <div class="tags has-addons">
                                                <span class="tag is-warning">#1</span>
                                                <span class="tag is-dark">xo</span>
                                            </div>
                                        </div>
                                        <div class="control">
                                            <div class="tags has-addons">
                                                <div class="tag is-warning">23k attempts</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card has-background-success-30">
                            <div class="card-image">
                                <figure class="image is-16by9">
                                    <img src="gd completions/blackblizzard.jpeg" alt="">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="content">
                                    <div class="field is-grouped is-grouped-multiline is-flex is-justify-content-center">
                                        <div class="control">
                                            <div class="tags has-addons">
                                                <span class="tag has-background-text-50 has-text-white">#2</span>
                                                <span class="tag is-black">Black Blizzard</span>
                                            </div>
                                        </div>
                                        <div class="control">
                                            <div class="tags has-addons">
                                                <div class="tag has-background-text-50 has-text-white">18k attempts</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <div class="card has-background-success-30">
                            <div class="card-image">
                                <figure class="image is-16by9">
                                    <img src="gd completions/bb.jpeg" alt="">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="content">
                                    <div class="field is-grouped is-grouped-multiline is-flex is-justify-content-center">
                                        <div class="control">
                                            <div class="tags has-addons">
                                                <span class="tag has-background-warning-20 has-text-white">#3</span>
                                                <span class="tag is-danger">Bloodbath</span>
                                            </div>
                                        </div>
                                        <div class="control">
                                            <div class="tags has-addons">
                                                <div class="tag has-background-warning-20 has-text-white">20k attempts</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card has-background-success-30">
                            <div class="card-image">
                                <figure class="image is-16by9">
                                    <img src="gd completions/aftermath.jpg" alt="">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="content">
                                    <div class="field is-grouped is-grouped-multiline is-flex is-justify-content-center">
                                        <div class="control">
                                            <div class="tags has-addons">
                                                <span class="tag is-dark">#4</span>
                                                <span class="tag is-danger">Aftermath</span>
                                            </div>
                                        </div>
                                        <div class="control">
                                            <div class="tags has-addons">
                                                <div class="tag is-dark has-text-white">13k attempts</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="column">
                        <div class="card has-background-success-30">
                            <div class="card-image">
                                <figure class="image is-16by9">
                                    <img src="gd completions/reanimate.jpg" alt="">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="content">
                                    <div class="field is-grouped is-grouped-multiline is-flex is-justify-content-center">
                                        <div class="control">
                                            <div class="tags has-addons">
                                                <span class="tag is-dark">#5</span>
                                                <span class="tag is-danger">Reanimate</span>
                                            </div>
                                        </div>
                                        <div class="control">
                                            <div class="tags has-addons">
                                                <div class="tag is-dark has-text-white">15-18k attempts</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="title is2">Cubing</h1>
            <div class="box">
                <h1 class="title is-3">Puzzles Solved</h1>
                <div class="tags are-large is-flex is-justify-content-center">
                    <div class="tag">2x2</div>
                    <div class="tag">3x3</div>
                    <div class="tag">4x4</div>
                    <div class="tag">5x5</div>
                    <div class="tag">6x6</div>
                    <div class="tag">7x7</div>
                    <div class="tag">2x2x3</div>
                    <div class="tag">Pyraminx</div>
                    <div class="tag">Megaminx</div>
                    <div class="tag">Square-1</div>
                    <div class="tag">Skewb</div>
                    <div class="tag">3x3 Mastermorphix</div>
                    <div class="tag">3x3 Mirror Cube</div>
                    <div class="tag">3x3 Barrel Cube</div>
                </div>
                <h1 class="title is-3">3x3 Rubik's Cube Details</h1>
                <div class="field is-grouped is-grouped-multiline is-flex is-justify-content-center">

                    <div class="control">
                        <div class="tags has-addons">
                            <span class="tag is-medium is-dark">Method</span>
                            <span class="tag is-medium is-link">CFOP</span>
                        </div>
                    </div>
                    <div class="control">
                        <div class="tags has-addons">
                            <span class="tag is-medium is-warning">Current Brand</span>
                            <span class="tag is-medium is-link">Gan 12 Maglev UV</span>
                        </div>
                    </div>

                    <div class="control">
                        <div class="tags has-addons">
                            <span class="tag is-medium has-background-text-50 has-text-white">Personal Best</span>
                            <span class="tag is-medium is-link">5.80 seconds</span>
                        </div>
                    </div>

                    <div class="control">
                        <div class="tags has-addons">
                            <span class="tag is-medium has-background-warning-20 has-text-white">Personal Best (Fullstep)</span>
                            <span class="tag is-medium is-link">7.07 seconds</span>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>


    <section class="regsec section " id="contact">

        <div class="container is-max-tablet">
                <div class="block">
                    <h1 class="subtitle">Contact Me</h1>
                    <p class="content">xavianferrero@wvc.pshs.edu.ph</p>
                </div>
                <form action="" id="contact-form">
                    <div class="field">
                        <label for="" class="label" >Name</label>
                        <input data-theme="light" type="text" placeholder="Enter Name" id="contact-name" class="input has-background-white">
                    </div>
                    <div class="field">
                        <label for="" class="label">Email</label>
                        <input data-theme="light" type="email" placeholder="Enter Email" id="contact-email" class="input has-background-white">
                    </div>
                    <div class="field">
                        <label for="" class="label">Message</label>
                        <textarea data-theme="light" class="textarea has-background-white" id="contact-message" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="button is-fullwidth has-background-white has-text-black">SUBMIT</button>
                </form>
        </div>
    </section>

    <footer class="footer">
        <div class="content has-text-centered has-text-black">
            <div class="block">
                <p id="" >
                    Site by Xavian Xander Ferrero
                </p>
                <p>Made with Bulma and CodeIgniter 4</p>
            </div>
            <div class="field block is-grouped is-grouped-multiline is-flex is-justify-content-center">

                <div class="control"> <div class="tags has-addons">
                        <div class="tag is-large">
                            <span class="icon is-small mx-1">
                                <i class="fa-solid fa-wrench"></i>
                            </span>
                        </div>
                        <div class="tag is-large is-dark">Tiktok</div>
                    </div>
                </div>

                <div class="control"> <div class="tags has-addons">
                        <div class="tag is-large">
                            <span class="icon is-small mx-1">
                                <i class="fa-solid fa-bolt"></i>
                            </span>
                        </div>
                        <div class="tag is-large is-link">Facebook</div>
                    </div>
                </div>

                <div class="control"> <div class="tags has-addons">
                        <div class="tag is-large">
                            <span class="icon is-small mx-1">
                                <i class="fa-solid fa-check-double"></i>
                            </span>
                        </div>
                        <div class="tag is-large has-background-danger-70 has-text-dark">Instagram</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  </body>
</html>