<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
   <title>Team One</title>
   <meta name="description" content="A website dedicated to our CS247 final project.">
   <meta name="author" content="Marie, Sierra, Natasha">
   <!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/application.css">
   <link rel="icon" 
   type="image/png" 
   href="/images/favicon.png" />
   <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
   <![endif]-->
   <script type="text/javascript">
      function showImage(imgName) {
         document.getElementById('largeImg').src = imgName;
         showLargeImagePanel();
         unselectAll();
      }
      function showLargeImagePanel() {
         document.getElementById('largeImgPanel').style.visibility = 'visible';
      }
      function unselectAll() {
         if(document.selection) document.selection.empty();
         if(window.getSelection) window.getSelection().removeAllRanges();
      }
      function hideMe(obj) {
         obj.style.visibility = 'hidden';
      }
   </script>
</head>
<body>
   <div id="content-wrap">
      <!-- Header
      ================================================== -->
      <header class="container">
         <hgroup>
            <h1><a href="index.php"></a></h1>
            <h3>CS247: Everyday Rich Social Communication</h3>
         </hgroup>
         <nav id="nav-wrap" class="cf">
            <ul id="menu">
               <li><a href="index.php">Home</a></li>
               <li><a href="m1.php">Milestone 1</a></li>
               <li><a href="m2.php">Milestone 2</a></li>
               <li><a href="m3.php">Milestone 3</a></li>
               <li><a href="m4.php">Milestone 4</a></li>
               <li><a href="m5.php">Milestone 5</a></li>
               <li><a href="m6.php">Milestone 6</a></li>
               <li><a href="m7.php">Milestone 7</a></li>
               <li class="current"><a href="m8.php">Milestone 8</a></li>
            </ul> <!-- end #menu -->
         </nav>
      </header>
      <!-- latest article
      ================================================== -->
      <article id="latest-article" class="container">
         <h2><a href="#">Milestone Eight: Final Presentation</a></h2>
         <p class="post-info">by <span><a href="index.php">Team One</a></span></p>
         <div class="dcontent cf">
            <div class="post-meta">
               <p class="dateinfo">3
                  <span class="dmonth">June</span>
                  <span class="dyear">2014</span>
               </p>
            </div>
            <h3>Vincere: A Web Application Dedicated to Connecting<br>Survivors of Sexual Assault with Drawing</h3>
            <a href="http://vincere.herokuapp.com/">Project website</a>&nbsp;&middot;&nbsp;
            <a href="https://github.com/marieshifeng/vincere">Source code</a>&nbsp;&middot;&nbsp;
            <a href="https://drive.google.com/file/d/0B7Y6MHhW1SE3QV81UnB3VmF2clJleG9MOXlSQmF4djdMVW1N/edit?usp=sharing">Poster</a>&nbsp;&middot;&nbsp; 
            <a href="https://docs.google.com/presentation/d/1-YcaahMuBzMxz4QDw_K88BIklrfqYZbcRTdfEhkMquI/edit?usp=sharing">Presentation</a>
            <br><br>
            <h4>Final concept</h4>
            <p>Vincere (pronounced like 'sincere') is a site to connect survivors of unwanted sexual experiences. They come together anonymously, so they can be more open, to talk together in an online shared drawing space. If they need more help, there are links to professional resources.</p>
            <h4>Our users and their needs</h4>
               <p>We talked to a few users who talked to us about not having anyone else to talk to after their sexual assault experience. Their friends just couldn't relate, or maybe they felt uncomfortable sharing and wanted to talk to a stranger instead.</p>
               <p>We also heard about the importance of talking to other survivors, especially if you just want to figure out what happened to you (such as in grey-area experiences). And of course, it takes time to overcome the experience.</p>
               <p>So we've been designing for a space to help you find other survivors and connect with them. These are sometimes difficult conversations, so to help ease the tension, we created the collaborative drawing space, where survivors can doodle with each other while they talk.</p>
            <h4>Design decisions, by feature</h4>
            <ul>
               <li>Color scheme
                  <ul>
                     <li>We tried different extremes of extremely cute and bright vs. dark and serious. From user testing, we converged on an uplifting color scheme that was in-between the extremes.</li>
                  </ul>
               </li>
               <li>Drawing canvas
                  <ul>
                     <li>Color circles mimic shape of paint on palette</li>
                     <li>Chat window added to give users communication options. In particular, if the conversation gets too heavy, it might be easier to start typing. However, because we want the focus to be on a strong connection, we decided to only allow chat after you've both enabled audio, so you can try both out.</li>
                     <li>Left-hand instructions and chat became hideable, since users loved drawing so much that we wanted to give them the option to have a larger canvas.</li>
                     <li>Instructions were added, and canvas received a border, in order to help guide users. Some were initially confused by the very white page and how to use it, not realizing they could draw or should enable their microphone.</li>
                     <li>We added a pop-up to make sure the user realized they were about to navigate away from the page, based on some misunderstandings in user testing. Users didn't realize they couldn't return to the same drawing and conversation later.</li>
                  </ul>
               </li>
               <li>Resources page
                  <ul>
                     <li>Our counselor consultants emphasized the need to point survivors to professional help, so this page was added.</li>
                  </ul>
               </li>
               <li>Contract before entering drawing space
                  <ul>
                     <li>Users expressed concern that non-survivors may enter the site with negative intentions (trolls, etc), so this was our solution to balance between the need to ensure only survivors entered the site, while not asking for personal information that might deter survivors from entering.</li>
                     <li>The story prompt was added to this page, partially as an added measure to keep non-survivors out, and also as a way to give survivors a conversation starting point in the drawing space.</li>
                  </ul>
               </li>
            </ul>
            <h4>Our design process</h4>
            <div class="full columns" style="width:100%">
               <img class="photo" src="images/247_poster_2.png" style="cursor:pointer" onclick="showImage('images/247_poster_2.png.jpg');"/>   
            </div>
            <div id="largeImgPanel" onclick="hideMe(this);" style="width:100%">
               <img id="largeImg" style="height: 100%; margin: 0; padding: 0;" />
            </div>
            <br/>
            <br/>
            <br/>
            <br/>
            <div style="padding:20px; margin:750px 0 20px 0">
               <h4>M8 final presentation</h4>
            </div>
            <iframe src="https://docs.google.com/presentation/d/1-YcaahMuBzMxz4QDw_K88BIklrfqYZbcRTdfEhkMquI/embed?start=false&loop=false&delayms=3000" frameborder="0" width="850" height="507" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
            <h4 style="margin:20px 0 0 0">Potential next steps</h4>
            <ul>
               <li>Explore what other information users want to share with their drawings and see with others' drawings</li>
               <li>Offer survivors an opportunity to connect with a counselor (especially if no other survivor is there)</li>
               <li>Explore more curated pairings of survivors. (Users tended to like talking to a random stranger, but some expressed that they'd like to be paired with a particular gender, for example.)</li>
               <li>Partner with SARA office or other resource to potentially maintain site</li>
            </ul> 

         </div>
      </article>
   <!-- footer
   ================================================== -->
   <footer class="container">
      <!-- footer-bottom
      ================================================== -->
         <p>
         2013 Copyright Info &nbsp; &nbsp; &nbsp;
         Design by <a href="http://www.styleshout.com/">styleshout</a>
         </p>
         <!-- Back To Top Button -->
         <div id="go-top"><a href="#" title="Back to Top">Go To Top</a></div>
   </footer>
   <!-- Java Script
   ================================================== -->
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script src="js/custom.js"></script>
</body>
</html>