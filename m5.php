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
               <li class="current"><a href="m5.php">Milestone 5</a></li>
            </ul> <!-- end #menu -->
         </nav>
      </header>
      <!-- latest article
      ================================================== -->
      <article id="latest-article" class="container">
         <h2><a href="#">Milestone Five: User Study I</a></h2>
         <p class="post-info">by <span><a href="index.php">Team One</a></span></p>
         <div class="dcontent cf">
            <div class="post-meta">
               <p class="dateinfo">15
                  <span class="dmonth">May</span>
                  <span class="dyear">2014</span>
               </p>
            </div>
            <h3>Introduction</h3>
            <h5>For the user study this week, we want to test our current prototype, of which the critical actions are:</h5>
               <ul>
                  <li>Listening to other people's stories</li>
                  <ul>
                     <li>This task will be our focus this week, as it is the crux of the connection process for us right now.
                     <li>Based on feedback we've received so far, we believe users may not want to record their story for all to hear. We are going to build two galleries, of which the public one will only show stories that users wanted to share more broadly, famous stories, and PSAs. The private version will be only for site users (who have experienced sexual assault themselves).</li>
                     <li>This week, we're going to pay particular attention to the value of these stories. Do they help users tell their own story? Are they too long to listen to? Do they motivate users to reach out to other users?<li>
                  </ul>
                  <li>Recording your story
                     <ul>
                        <li>This is our 2nd most important focus for this week, since users need to share their own story to participate in the site and to have others connect with them.</li>
                        <li>In particular, we want to explore what prompts will make users feel comfortable. We predict that seeing others' stories and offering some prompts will enable users to record their own story, but we are also exploring whether there should be a video prompt of a SARA counselor to get them to record.</li>
                        <li>Additionally, we'll still be experimenting with voice modulation during the recording process, as well asking for a bit more information besides just a recording, including a title for the story and an option of whether to share the story with the general public or only with site users (other victims).</li>
                     </ul>
                  </li>
                  <li>Drawing together with another person</li>
                  <ul>
                     <li>The feedback on this piece of the process has been pretty positive so far, so we're not too concerned about this piece of it. Some questions we will be investigating are whether to include stamps. We believe users do like the stamps used in Scoot and Doodle, so they would enjoy them in our product, as well.</li>
                  </ul>
               </ul>
            <h3>Methods</h3>
            <p>To evaluate our questions, we'll be conducting qualitative user studies.
            <ul>
               <li>Recruitment</li>
               <ul>
                  <li>We'll be recruiting users primarily from our own networks and reaching out to them personally. We've been asking people to send anyone they know to us, as well.</li>
                  <li>We're also meeting with a student conducting a broader study about sexual assault experiences and Stanford's SARA office, both of whom may be able to offer some tips. Due to the difficulties of finding users, we'll be allowing remote participation, as well.</li>
               </ul>
               <li>Tasks</li>
               <ul>
                  <li>With new participants, we'll have them:</li>
                   <ul>
                     <li>Listen to stories in the private gallery of other users, observing actions during the process</li>
                     <li>Have them record a story, after asking what they want to do after listening to others' stories (to see if they feel naturally compelled to share)
                     <li>Select 1-2 people that they'd like to speak with. Because we haven't built out a messaging system in the site, we'll then reach out to those users ourselves to coordinate a time where they can both be online.</li> 
                     <li>We'll tell them to both access the site at the agreed-upon time and conduct the drawing session. We won't be present during the session, other than for reactive support by chat or phone, for privacy reasons - but we'll follow-up with the participants separately immediately after the session.</li>
                  </ul>
                  <li>With previous participants - because they've already recorded stories, we'll simulate the action of a user sending them a message to connect and coordinate a time to draw with a new participant.</li>
                     <ul>
                        <li>Then, we'll ask the user to access the site at the agreed-upon time and conduct the drawing session. Again, we won't be present during the session, other than for reactive support by chat or phone, for privacy reasons - but we'll follow-up with the participants separately immediately after the session.</li>
                     </ul>
                  <li>Full script available <a href="https://docs.google.com/document/d/1cT-nwqKw6vwhKjAspYjo6ssZu_XcDEz7pHb8o8y3HrQ">here</a></li>
               </ul>
            </ul>
            <h3>Results</h3>
            <h3>Discussion</h3>
            <h3>Implications</h3> 
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