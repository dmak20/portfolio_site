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
                        <a href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                      <a href="#resume">Resume</a>
                    </li>
                    <li>
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
            <div class="col-sm-12 section-title text-center">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="height:500px;">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol>
                
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="..." alt="...">
                      <div class="carousel-caption">
                        ...
                      </div>
                    </div>
                    <div class="item">
                      <img src="..." alt="...">
                      <div class="carousel-caption">
                        ...
                      </div>
                    </div>
                    ...
                  </div>
                
                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
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
                <h1>ABOUT <span style="background-color: rgba(59,63,80,0.6);">ME</span></h1>
                
            </div>         
        </div>
        
        <div class="row">
            <div class="col-sm-5">
              <img src="http://placehold.it/280x280" class="img-responsive"/>
            </div>
            <div class="col-sm-4">
              <p>Welcome to my upcoming portfolio site!</p>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="col-sm-3">
              <ul class="about-info">
                <li><span class="glyphicon glyphicon-user"></span> <strong>Name:</strong> Dan Makfinsky</li>
                <li><span class="glyphicon glyphicon-envelope"></span> <strong>Email:</strong> dmak@faktorystudios.com</li>
                <li><span class="glyphicon glyphicon-open"></span> <strong>Website:</strong> <a href="http://www.faktorystudios.com">www.faktorystudios.com</a></li>
                <li><span class="glyphicon glyphicon-home"></span> <strong>Location:</strong> Silver Spring, MD</li>
            </div>
        </div>
      </div>
    </div>
    
    <!-- Portfolio section -->
    <section id="portfolio"></section>
    <div class="container">
        
        <div class="row">
          
            <div class="col-sm-12 section-title text-center">
                <h1 style="color:#fff;">MY <span style="background-color: rgba(239,239,239,0.6);">WORK</span></h1>
            </div>
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
                  
                  
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12">
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
                              echo "\t\t\t\t<span>Tags</span>";
                              echo "\t\t\t</div>";
                              echo "\t\t</div>";
                              echo "\t</a>";
                              echo "</div>";
                              echo "</div>\n\n";
                            }
                          }
                          
                          
                          ?>
                          
                        <div class="item game" data-category="w1">
                          <a href="#">
                            <img width="280" height="190" src="http://placehold.it/280x190" />

                          </a>
                        </div>
                        <div class="item web" data-category="w2">
                          <a href="#">
                            <img width="280" height="190" src="http://placehold.it/280x190" />
                          </a>
                        </div>
                        <div class="item kiosk" data-category="w3">
                          <a href="#">
                            <img width="280" height="190" src="http://placehold.it/280x190" />
                          </a>
                        </div>
                        <div class="item game" data-category="w3">
                          <a href="#">
                            <img width="280" height="190" src="http://placehold.it/280x190" />
                          </a>
                        </div>
                        <div class="item game" data-category="w3">
                          <a href="#">
                            <img width="280" height="190" src="http://placehold.it/280x190" />
                          </a>
                        </div>
                        <div class="item mobile" data-category="w3">
                          <a href="#">
                            <img width="280" height="190" src="http://placehold.it/280x190" />
                          </a>
                        </div>
                        <div class="item mobile" data-category="w3">
                          <a href="#">
                            <img width="280" height="190" src="http://placehold.it/280x190" />
                          </a>
                        </div>
                        <div class="item w3 mar" data-category="w3">
                          <a href="#">
                            <img width="280" height="190" src="http://placehold.it/280x190" />
                          </a>
                        </div>
                        <div class="item mobile" data-category="w3">
                          <a href="#">
                            <img width="280" height="190" src="http://placehold.it/280x190" />
                          </a>
                        </div>
                        <div class="item vr game" data-category="w3">
                          <a href="#">
                            <img width="280" height="190" src="http://placehold.it/280x190" />
                          </a>
                        </div>
                        <!-- End of Portfolio thumbnails here -->
                        
                        </div>
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
            <h1>MY <span>RESUME</span></h1>
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
            <h1 style="color:#fff">HIRE <span style="background-color: rgba(239,239,239,0.6);">ME</span></h1>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/lib/jquery.waypoints.min.js"></script>
    <script src="js/notify.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/portfolio.js"></script>
    <script src="js/waypoint.js"></script>
    <script src="js/script.js"></script>

    
  </body>
</html>

<?php

$conn->close();
?>