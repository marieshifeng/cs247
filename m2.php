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
               <li class="current"><a href="m2.php">Milestone 2</a></li>
            </ul> <!-- end #menu -->
         </nav>
      </header>
      <!-- latest article
      ================================================== -->
      <article id="latest-article" class="container">
         <h2><a href="#">Milestone Two</a></h2>
         <p class="post-info">by <span><a href="index.php">Team One</a></span></p>
         <div class="dcontent cf">
            <div class="post-meta">
               <p class="dateinfo">24
                  <span class="dmonth">April</span>
                  <span class="dyear">2014</span>
               </p>
            </div>
            <h3>Storyboarding</h3>
            <!--IDEA ONE-->
            <h3 class="ideas">Idea One</h3>
            <h4>Pass it on: a platform for creating teaching chains</h4>
            <p>
               Designed as a supplement to classroom learning, a teaching chain is when students teach other students via live broadcast and then those students go on to teach more students.
               We imagine the motivation to start when a student becomes confused with a topic in the classroom. The student then posts a request for a lesson in the topic on the platform. The platform
               supports fellows students to respond positively to these requests and facilitates the creation of a small teaching circle. In this circle, the original 
               student can learn via a brief lesson and then follow-up by re-teaching the original lesson (maybe in a new format) to re-confirm his learning. From these two lessons, we have the beginning of a teaching chain. 
               Our storyboard conveys this interaction from classroom to platform to creation of teaching chains.
            </p>
            <p>
               We imagine the crux of the social communication to be in the small group when teaching occurs and there are innovative ways how to present material in a compelling manner. While we believe the idea of teaching chains is 
               interesting and necessary, we believe online education is a beast of an interaction to try to facilitate (especially since there are many, many companies focused purely on solving it).
            </p>
            <p>
               <div class="header row">
                  <br/>
                  
                  <div class="full columns">
                     <img class="photo" src="images/m2/sb3_1.jpg" style="cursor:pointer" onclick="showImage('images/m2/sb3_1.jpg');"/>   
                  </div>
                  <div id="largeImgPanel" onclick="hideMe(this);">
                     <img id="largeImg" style="height: 100%; margin: 0; padding: 0;" />
                  </div>
               </div>
            </p>
            <p>
               <div class="header row">
                  <br/>
                  
                  <div class="full columns">
                     <img class="photo" src="images/m2/teach.jpg" style="cursor:pointer" onclick="showImage('images/m2/teach.jpg');"/>   
                  </div>
                  <div id="largeImgPanel" onclick="hideMe(this);">
                     <img id="largeImg" style="height: 100%; margin: 0; padding: 0;" />
                  </div>
               </div>
            </p>

            <!--IDEA TWO-->
            <h3 id="idea_two" class="ideas">Idea Two</h3>
               <h4>This is my story: a platform for overcoming negative experiences</h4>
            <p>
               Designed to be a safe haven for women overcoming sexual assault, we imagine this platform to be a place to where women can come share their stories and connect over creating art together.
            </p>
            <p>
               <div class="header row">
               <br/>
               <div class="full columns">
                  <img class="photo" src="images/m2/sierra_brainstorming.jpg" style="cursor:pointer" onclick="showImage('images/m2/sierra_brainstorming.jpg');"/>   
               </div>
               <div id="largeImgPanel" onclick="hideMe(this);">
                  <img id="largeImg" style="height: 100%; margin: 0; padding: 0;" />
               </div>
            </p>
            <p>
               <div class="header row">
               <br/>
               <div class="full columns">
                  <img class="photo" src="images/m2/drawing.jpg" style="cursor:pointer" onclick="showImage('images/m2/drawing.jpg');"/>   
               </div>
               <div id="largeImgPanel" onclick="hideMe(this);">
                  <img id="largeImg" style="height: 100%; margin: 0; padding: 0;" />
               </div>
            </p>

            <!--IDEA THREE-->
            <h3 class="ideas">Idea Three</h3>
            <h4>Race confessions: a platform to anonymously discuss hard topics</h4> 
            <p>
               Based on <a href="https://www.facebook.com/pages/Stanford-Race-Confessions/1446093278960370">Stanford Race Confessions</a>, this platform is designed to discuss race and ethnicity questions that seem to difficult to ask.
            </p>
            <p> 
               <div class="header row">
               <br/>
               <div class="full columns">
                  <img class="photo" src="images/m2/race_brainstorm_1.jpg" style="cursor:pointer" onclick="showImage('images/m2/race_brainstorm_1.jpg');"/>   
               </div>
               <div id="largeImgPanel" onclick="hideMe(this);">
                  <img id="largeImg" style="height: 100%; margin: 0; padding: 0;" />
               </div>
               </div>
            </p>
            <p> 
               <div class="header row">
               <br/>
               <div class="full columns">
                  <img class="photo" src="images/m2/race_brainstorm_2.jpg" style="cursor:pointer" onclick="showImage('images/m2/race_brainstorm_2.jpg');"/>   
               </div>
               <div id="largeImgPanel" onclick="hideMe(this);">
                  <img id="largeImg" style="height: 100%; margin: 0; padding: 0;" />
               </div>
               </div>
            </p> 
            <p> 
               <div class="header row">
               <br/>
               <div class="full columns">
                  <img class="photo" src="images/m2/race.jpg" style="cursor:pointer" onclick="showImage('images/m2/race.jpg');"/>   
               </div>
               <div id="largeImgPanel" onclick="hideMe(this);">
                  <img id="largeImg" style="height: 100%; margin: 0; padding: 0;" />
               </div>
               </div>
            </p>
         </p>
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