<!DOCTYPE html>

<html>
    <head>
        <title>Portfolio</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.php" type="text/css" media="all" />
       <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Google+Sans"> 
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
       <script type="text/javascript" src="<?php echo get_template_directory_uri().'resources/jquery.js'?>"></script>
       <?php wp_head();?>
    </head> 
    <body>
        <section class="container">
            <section class="clearfix">
          <header>      
        <nav>
            <ul>
                <li><a href="#main " onClick="SmoothScroll(800)">HOME</a></li>
                <li><a href="#description">PROJECTS</a></li>
                <li><a href="#contact-form">CONTACT</a></li>
               
            </ul>
            <ul>
           <li><i class="fa fa-bars"></i><li>
           </ul>
        </nav>
              <section id="logo">
                  <!-- <img src=<?php echo get_theme_file_uri("resources/logo.png")?> style="height:50px"/> -->
                  <section>
                      <span>KARAMJIT SINGH</span>
                      <span>FRONT-END WEB DEVELOPER</span>
                  </section>
              </section> 
          </header>


          
                <section id="heading">
                    <h2>Front-end Web Developer.</h2>
                    <p>I am a dedicated front end developer who is eager to always try new frameworks and techniques.
i am here to provide you what you want me to develop
                    </p>
                    <p>
                        <a href="#">I need a website  <i class="fas fa-angle-right"></i></a>
                        <a href="#">I am looking to hire <i class="fas fa-angle-right">  </i></a>
                    </p>
                </section> 
          </section>
        </section>