<?php
// connect to the mysql server
$mysql_server = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'dmak';

$conn = new mysqli($mysql_server, $mysql_user, $mysql_pass, $mysql_db);

if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dan Makfinsky - Portfolio Website</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/animate.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>     
    <![endif]-->
  </head>
  <body>
    <section id="home"></section>
    <!-- header -->
    <!-- navbar fixed to top -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-default navbar-brand" href="#" >DM
                    <!--<img alt="Brand" src="img/dm_brand.png"/>-->
                    
                </a>
            </div>
            <div class="collapse navbar-collapse nav-menu" id="collapse-1">

                <ul class="nav navbar-right">
                  <li>
                    <a href="#home">Home</a>
                  </li>
                  <li>
                    <a href="#about">About</a>
                  </li>
                  <li>
                    <a href="#skills">Skills</a>
                  </li>
                  <li>
                      <a href="#portfolio">Work</a>
                  </li>
                  <li>
                    <a href="#resume">Resume</a>
                  </li>
                  <li class="hireMe">
                    <a href="#hire">Hire Me</a>
                  </li>
                    
                </ul>
            </div>
        </div>
    </nav>
       
    <!-- content -->
    
    <!-- Home/Hero caption or image -->
    <div class="container-fluid">
        <div class="row">
          <div class="home">
            <div class="container">
            <div class="col-sm-12 text-center">
              <div class="centerContent">
                <div class="top-caption">WELCOME TO MY SITE</div>
                <div class="main-caption">DAN MAKFINSKY</div>
                <div class="top-caption">MULTIMEDIA DEVELOPER</div>
              </div>
            </div>
            </div>
            </div>
        </div>
    </div>
    
    <!-- About Me -->
    <section id="about"></section>
    <div class="container-fluid about">
      <div class="container">
        <div class="row">
            <div class="col-sm-12 section-title text-center">
                <h1>ABOUT <span style="background-color: rgba(0,150,250, 1);">ME</span></h1>
                
            </div>         
        </div>
        
        <div class="row">
            <div class="col-sm-3 text-center info-picture-box">
              <img src="img/headshot.jpg" class="img-center img-responsive" style="margin-left:auto; margin-right:auto;"/>
              <div class="info-picture-caption">
                <h2 style="color:#fff; margin:0;">DAN MAKFINSKY</h2>
                <h5 style="color:#fff;">Multimedia Developer</h5>
              </div>
            </div>
            <div class="col-sm-6">
              <h3 class="info-text-quote">I've been a multimedia developer who for over a decade and a half has worked on everything from websites to kiosks to video games. I am fluent in many different programming and scripting languages as well as graphics programs.</h3>
              <p>Hello, I'm an award winning multimedia developer located in the Washington DC area. I hold a B.S. in Game Programming from the University of Advancing Technology.</p>
              <p>I am currently a freelance contractor available to work on a variety of projects ranging from gaming and interactive media development to mobile and web development.
              While I am most passionate about developing games using technology like Unity3D, I have spent a considerable amount of time developing for iOS and Android as
              well as working on front and backend web frameworks.</p>
              <p>I love working with new software and hardware technology which means that I'm constantly learning. Seldom does a day
              pass where I haven't done a tutorial or completed another online lesson through one of various online education websites I frequent.
              As well as software development, I am beginning my foray into microcontrollers, namely the arduino.</p>
              <div class="hire-text"><a href="#hire" class="hire-button-text">Hire me</a> today start building your project!</div>
              
            </div>
            <div class="col-sm-3">
              <ul class="about-info" style="list-style: none;">
                <li><span class="glyphicon glyphicon-user info-glyph"></span> <strong>Name:</strong> Dan Makfinsky</li>
                <li><span class="glyphicon glyphicon-open info-glyph"></span> <strong>Website:</strong> <a href="http://www.faktorystudios.com">www.faktorystudios.com</a></li>
                <li><span class="glyphicon glyphicon-home info-glyph"></span> <strong>Location:</strong> Silver Spring, MD</li>
              </ul>
              <div class="resume"><a class="btn btn-default" href="DanMakfinsky_RESUME_2015_Feb_4.pdf" role="button" target="_blank">Download Resume</a></div>
                <div class="awards-section">
                  <strong style="color:#666;font-size:18px; font-family:'Oswald'; font-weight:normal;">Awards</strong>
                  <ul>
                    <li class="award-box"><img src="img/awards/award_w3.png" class="img-responsive"/></li>
                    <li class="award-box"><img src="img/awards/award_agda.png" class="img-responsive"/></li>
                    <li class="award-box"><img src="img/awards/award_stc.png" class="img-responsive"/></li>
                    <li class="award-box"><img src="img/awards/award_communicator.png" class="img-responsive"/></li>
                  </ul>
                </div>
                <div class="awards-section">
                  <strong style="color:#666;font-size:18px; font-family:'Oswald'; font-weight:normal;">Games Shipped</strong>
                  <ul>
                    <li class="award-box"><img src="img/games/war.png" class="img-responsive" title="EA Warhammer Online"/></li>
                    <li class="award-box"><img src="img/games/u4e.png" class="img-responsive" title="Ultima Forever: Quest for the Avatar"/></li>
                  </ul>
                </div>
                
            </div>
        </div>
      </div>
    </div>
    
    <!-- Skills -->
    <section id="skills"></section>
    <div class="container skills">
      <div class="row">
        <div class="col-sm-12 section-title text-center">
          <h1 style="color:#fff; margin-bottom:5px;">MY <span style="background-color: rgba(0,150,250, .75);">SKILLS</span></h1>
          <p><strong style="font-size:18px; font-family:'Oswald'; font-weight:normal;">I have knowledge in a variety of programming languages, sdk's, frameworks and graphics applications.</strong></p>
        </div>
      </div>
      <div class="row">
          <div class="col-sm-12" style="text-align:center;">
            <h3 style="font-family:'Oswald';">Programming Languages</h3>
          <ul class="skill-list">
            <li>
              <div class="skillChart" data-percent="90">
                <span class="percent"></span>
              </div>
              <div class="skill-name">PHP</div>
            </li>
            <li>
              <div class="skillChart" data-percent="85">
                <span class="percent"></span>
              </div>
              <div class="skill-name">C#</div>
            </li>
            <li>
              <div class="skillChart" data-percent="65">
                <span class="percent"></span>
              </div>
              <div class="skill-name">Java</div>
            </li>
            <li>
              <div class="skillChart" data-percent="65">
                <span class="percent"></span>
              </div>
              <div class="skill-name">C++</div>
            </li>
            <li>
              <div class="skillChart" data-percent="65">
                <span class="percent"></span>
              </div>
              <div class="skill-name">SWIFT</div>
            </li>
            <li>
              <div class="skillChart" data-percent="65">
                <span class="percent"></span>
              </div>
              <div class="skill-name">OBJECTIVE-C</div>
            </li>
            <li>
              <div class="skillChart" data-percent="65">
                <span class="percent"></span>
              </div>
              <div class="skill-name">PROCESSING</div>
            </li>
          </ul>
        </div>
        </div>
      
      <div class="row">
        <div class="col-sm-3"></div>
          <div class="col-sm-2" style="text-align:center; padding: 0;">
          <h3 style="font-family:'Oswald';">SDK's & Frameworks</h3>
            <ul class="skill-list-small">
              <li>Bootstrap</li>
              <li>Android</li>
              <li>iOS</li>
              <li>Unity3D</li>
              <li>Gamebryo</li>
            </ul>
          </div>
          <div class="col-sm-2" style="text-align:center; padding: 0;">
            <h3 style="font-family:'Oswald';">Software</h3>
            <ul class="skill-list-small">
              <li>Photoshop</li>
              <li>Illustrator/InDesign</li>
              <li>Unity3D</li>
              <li>3DS Max</li>
              <li>Github</li>
              <li>Perforce</li>
              <li>MySQL</li>
            </ul>
          </div>
          <div class="col-sm-2" style="text-align:center; padding: 0;">
            <h3 style="font-family:'Oswald';">Scripting Languages</h3>
            <ul class="skill-list-small">
              <li>Maxscript</li>
              <li>Python</li>
              <li>LUA</li>
              <li>Javascript</li>
            </ul>
          </div>
          <div class="col-sm-3"></div>
      </div>
      
      </div>
    </div>
    
    <!-- Case Study 1 - Gannett (Rift/Unity) -->
    
    <!-- Case Study 2 - EA Skywriter (C#/Gamebryo) -->
    
    <!-- Case Study 3 - Endosys Website? Activatr? -->
    
    <!-- Portfolio section -->
    <section id="portfolio"></section>
    <div class="container-fluid" style="background-color:#fff;">
      <div class="container">
        <div class="row">
            <div class="col-sm-12 section-title text-center">
                <h1>MY <span style="background-color: rgba(0,150,250, .75);">WORK</span></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                  <!-- Button filter list here -->
                  <div id="filters">
                    <ul class="portfolio-filter-list list-inline white">
                      
                      <?php
                      // Create a list of unique filters based on the tags in the portfolio section
                      $sql = "select tags from portfolio";
                      $result = $conn->query($sql);
                      
                      $tagArray = '';
                      $i = 0;
                      while ($row = $result->fetch_assoc()) {
                        if ($i != 0) {
                          $tagArray .=",";
                        }
                        $tagArray .= $row['tags'];
                        $i++;
                      }
                      
                      $tagArray = explode(',', $tagArray);
                      $tagArray = array_unique($tagArray);
                      
                      // print our ALL filter button
                      ?>
                      <li>
                        <a class="active item" href="#_" data-filter="*">ALL</a>
                      </li>
                      
                      <?php
                      // print the rest of our filters
                      
                      for ($i = 0; $i < count($tagArray); $i++) {
                        echo "<li>\n<a class='item' href='#_' data-filter='.".$tagArray[$i]."'>".strtoupper($tagArray[$i])."</a>\n</li>";
                      }
                      ?>
                      <!-- <li>
                        <a class="item" href="#_" data-filter=".game">GAME</a>
                      </li>
                      <li>
                        <a class="item" href="#_" data-filter=".mobile">MOBILE</a>
                      </li>
                      <li>
                        <a class="item" href="#_" data-filter=".web">WEB</a>
                      </li>
                      <li>
                        <a class="item" href="#_" data-filter=".kiosk">KIOSK</a>
                      </li> -->
                    </ul>
                    </div>
                  </div>
            </div>
                  <!-- End of button filter list -->
            <div class="container" style="vertical-align: middle;">
            <div class="row" style="vertical-align: middle;">
                      <div class="col-sm-10">
                        <div class="portfolio">
                          
                          <!-- Portfolio thumbnails here -->
                          <?php
                          $sql = "select * from portfolio";
                          $result = $conn->query($sql);
                          
                          if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                              echo "<div class='item ". str_replace(",", " ", $row['tags']) ."'>";
                              echo "<div class='frame'>";
                              echo "\t<a href='#_'>";
                              echo "\t\t<img width='280' height='190' src='img/portfolio/".$row['thumbnail']."'/>";
                              echo "\t\t<div class='overlay'>";
                              echo "\t\t\t<div class='item-info'>";
                              echo "\t\t\t\t<i class='fa-camera'></i>";
                              echo "\t\t\t\t<h3>Project Name</h3>";
                              echo "\t\t\t\t<span>".strtoupper(str_replace(","," / ", $row['tags']))."</span>";
                              echo "\t\t\t</div>";
                              echo "\t\t</div>";
                              echo "\t</a>";
                              echo "</div>";
                              echo "</div>\n\n";
                            }
                          }
                          ?>
                        <!-- End of Portfolio thumbnails here -->
                        
                        </div>
                      </div>
                    </div>
              </div>
            </div>

    </div>
    
    <!-- resume -->
        <section id="resume"></section>
    <div class="container-fluid resume">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 section-title text-center">
            <h1>MY <span style="background-color: rgba(0,150,250, .75);">RESUME</span></h1>
          </div>
      </div>
    </div>
    </div>
    
    <!-- Contact section -->
    <section id="hire"></section>
    <div class="container-fluid contact">
      <div class="container" id="hire">
        <div class="row">
          <div class="col-sm-12 section-title text-center">
            <h1 style="color:#fff">HIRE <span style="background-color: rgba(0,150,250, .75);">ME</span></h1>
          </div>
        </div>
        <div class="row">
          <div class="col-dm-12">
            <div id="contact_form_holder" style="margin: auto;">
              <form action="index.php" method="post" id="contact_form">
                  <div id="topic_error" class="error"><img src="error.png" /> What category should this be filed in?</div>
                  NAME:<div id="name_error" class="error"><img src="error.png" /> We don't talk to strangers.</div>
                  <div><input class="contact_name" type="text" name="name" id="name" /></div>
                  EMAIL:<div id="email_error" class="error"><img src="error.png" /> You don't want us to answer?</div>
                  <div><input class="contact_email" type="text" name="email" id="email" /></div>
                  SUBJECT:<div id="subject_error" class="error"><img src="error.png" /> What's the purpose of this email?</div>
                  <div><input class="contact_subject" type="text" name="subject" id="subject" /></div>
                  MESSAGE:<div id="message_error" class="error"><img src="error.png" /> Forgot why you came here?</div>
                  <div><textarea class="contact_message" name="message" id="message"></textarea></div>
                  <div id="mail_success" class="success"><img src="success.png" /> Thank you. The mailman is on his way.</div>
                  <div id="mail_fail" class="error"><img src="error.png" /> Sorry, we don't know what happened. Please try again later.</div>
                  
                  <div id="cf_submit_p">
                      <input class="submit" type="submit" id="send_message" value="Send Message">
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- footer -->

    <footer class="footer">
      <div class="container">
        <p class="text-muted">footer content here.</p>
      </div>
    </footer>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/lib/jquery.waypoints.min.js"></script>
    <script src="js/notify.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/portfolio.js"></script>
    <script src="js/waypoint.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/jquery.easypiechart.min.js"></script>
    
    <script src="js/script.js"></script>

    
  </body>
</html>

<?php

$conn->close();
?>