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
               <li><a href="m3.php">Milestone 3</a></li>
               <li><a href="m4.php">Milestone 4</a></li>
               <li><a href="m5.php">Milestone 5</a></li>
               <li><a href="m6.php">Milestone 6</a></li>
               <li><a href="m7.php">Milestone 7</a></li>
               <li><a href="m8.php">Milestone 8</a></li>
            </ul> <!-- end #menu -->
         </nav>
      </header>
      <!-- latest article
      ================================================== -->
      <article id="latest-article" class="container">
         <h2><a href="#">Milestone Two: Storyboarding</a></h2>
         <p class="post-info">by <span><a href="index.php">Team One</a></span></p>
         <div class="dcontent cf">
            <div class="post-meta">
               <p class="dateinfo">24
                  <span class="dmonth">April</span>
                  <span class="dyear">2014</span>
               </p>
            </div>
            <!--IDEA ONE-->
            <h3 class="ideas">Idea One</h3>
            <h4>Pass it on: a platform for creating teaching chains</h4>
            <p>
               Designed as a supplement to classroom learning, a teaching chain is when students teach other students via live broadcast and then those students go on 
               to teach more students.
            </p>
            <p>
               We imagine the crux of the social communication to be in the small group lessons where we would provide tools to present material in a compelling innovative
               manner. While we believe the idea of teaching chains is interesting and necessary, we believe online education is a beast of an interaction to try to facilitate 
               (especially when there are many, many companies focused purely on solving it). We have played with the idea of restricting the site to a particular subject, to 
               allow us to design the appropriate tools - some ideas are math, physics, or more physical topics, like gardening or plumbing. Given the complexity of this task of providing tools for a great lesson, we might also choose to dive more deeply into the connection piece: How do you find the right teacher? How do you ensure you teach your own material clearly? How do you make that connection? Why are you compelled to teach, and not just learn?
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
                  <h5>Marie gets us started on the storyboard</h5>
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
                  <h5>Final storyboard for Idea One</h5>
               </div>
            </p>
            <p>
            We debated and explored different different starting points, and decided that we wanted to begin in the classroom when a student becomes confused with a topic in the classroom. The student then posts a request for a lesson in the topic on our platform. The platform allows a fellow student, teacher, or anyone else to offer a brief lesson around that topic, which other students could also join: a small teaching circle. In this circle, the original student can learn via a brief lesson and then follow-up by re-teaching the original lesson (maybe in a new format) to re-confirm his learning. From these two lessons, we have the beginning of a teaching chain. The final panel demonstrates that you can compare different approaches to teaching a topic, if you want to choose what works best for you as a student or in order to improve your teaching. 
            </p>
            <br/>
            <br/>

            <!--IDEA TWO-->
            <h3 id="idea_two" class="ideas">Idea Two</h3>
               <h4>This is my story: a platform for overcoming negative experiences</h4>
            <p>
               Designed to be a safe haven for women overcoming sexual assault, we imagine this platform to be a place to where women can come share their stories and connect over creating art together. There would likely be a moderator to approve new users who want to actively engage in the site and sign-up.
            </p>
            <p>
               Given the potential difficulties of user testing, we're still exploring other topics, such as death of parents, abortions, embarrassing stories, and other events that you might want
               to discuss with someone in a similar situation. We're also considering a more light-hearted approach, like stories of physical scars, but believe this would lead to a very different approach
               to the project; thus, we'd like to focus on difficult experiences that are often hard to discuss.
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
               <h5>Sierra and Natasha getting started</h5>
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
               <h5>Final storyboard for Idea Two</h5>
               </div>
            </p>
            <p>
            When Sally first joins the site, she records a story to share. At the time, this is all the site know about Sally, mirroring her own struggle with being defined by the story of her assault. Then Mary hears the story. Sally's story compells Mary to reach out and share her own pre-recorded story. From there, Mary and Sally can collaborate in an art therapy-like session online, in which there will also be an audio stream to allow conversation. Afterward, the art piece becomes part of Sally's (and Mary's) profile, and she begins to see that she doesn't have to be defined by her traumatic story; instead, her art creations can define her.
            </p>
            <p>
               <div class="header row">
               <br/>
               <div class="full columns">
                  <img class="photo" src="images/m2/art.jpg" style="cursor:pointer" onclick="showImage('images/m2/art.jpg');"/>   
               </div>
               <div id="largeImgPanel" onclick="hideMe(this);">
                  <img id="largeImg" style="height: 100%; margin: 0; padding: 0;" />
               </div>
               <h5>Art created during our skit</h5>
               </div>   
            </p>
            <br/>
            <br/>

            <!--IDEA THREE-->
            <h3 class="ideas">Idea Three</h3>
            <h4>Race confessions: a platform to anonymously discuss hard topics</h4> 
            <p>
               Based on <a href="https://www.facebook.com/pages/Stanford-Race-Confessions/1446093278960370">Stanford Race Confessions</a>, this platform is designed to discuss race and ethnicity questions that are too difficult to ask. The product would be based on a point system of some sort, where you spend points by posting questions and +1'ing them, and you gain points by participating in discussions.
            </p>
            <p> 
               <div class="header row">
                  <br/>
                  <div class="half columns">
                     <img class="photo" src="images/m2/race_brainstorm_1.jpg" style="cursor:pointer" onclick="showImage('images/m2/race_brainstorm_1.jpg');"/>  
                  </div>
                  <div class="half columns">
                     <img class="photo" src="images/m2/race_brainstorm_2.jpg" style="cursor:pointer" onclick="showImage('images/m2/race_brainstorm_2.jpg');"/>   
                  </div>
                  <h5>Brainstorming around the space, the degrees of connections, topics, and more</h5>
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
                  <h5>Final storyboard for Idea Three</h5>
               </div>
            </p>
            <p>
               You start by posting a question, such as what the appropriate term for Bob's race. Others can +1 your question, whether they're also curious or would like to offer their own opinion about the issue. Everyone who +1's the question can join in a virtual chatroom with his or her own avatar that they can move around and seat at a table with the others. Here, they can discuss the question, which might lead them to other interesting discussions. If the discussion gets stale, the product will offer prompts, such as by showing pre-recorded user-generated stories about racial issues. Finally, the participants leave with a more culturally-sensitive perspective and greater confidence about the topic. </h6>
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