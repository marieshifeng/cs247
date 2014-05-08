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
               <li><a href="m1.php">Milestone One</a></li>
               <li><a href="m2.php">Milestone Two</a></li>
               <li><a href="m3.php">Milestone Three</a></li>
               <li class="current"><a href="m4.php">Milestone Four</a></li>
            </ul> <!-- end #menu -->
         </nav>
      </header>
      <!-- latest article
      ================================================== -->
      <article id="latest-article" class="container">
         <h2><a href="#">Milestone Four: Functional Prototype I</a></h2>
         <p class="post-info">by <span><a href="index.php">Team One</a></span></p>
         <div class="dcontent cf">
            <div class="post-meta">
               <p class="dateinfo">8
                  <span class="dmonth">May</span>
                  <span class="dyear">2014</span>
               </p>
            </div>
            <h3>Feature Decisions</h3>
            <p>There are three major tasks a user can perform on our platform:</p>
            <ul>
               <li>Listening to stories from the community</li>
               <li>Sharing stories with the community</li>
               <li>Connecting and drawing together</li>
            </ul>
            <h4>Listening</h4>
            <p>
               Because our platform is dependent on having a large compilation of stories in order to engage other users
               to share their's, we have decided to initially populate our database with those who have been very
               public with their experiences as well as those who are very public with their support. Furthermore, the 
               perusing of the story gallery will be public allowing potential users of our platform who may be questioning
               whether or not to post their story can listen and ultimatly commit to sharing their story without the pre-commitment
               of signing up for an account.  
            </p>
            <h4>Sharing</h4>
            <p>
               Many of our testers were concerned by their anonymity when recording their audio stories. In response, we plan on 
               alter their voices after they submit a story but still maintain the humanness of the voice. During the actual 
               recording of the story, we will display prompts in order to provide sparks for the storytelling. We hope that the prompts
               combined with the pre-populated and public gallery will engage users to provide thoughtful stories.
            </p>
            <h4>Connecting and drawing</h4>
            <p>
               When talking with friends, the topics of discussion are not usually planned. Thus, as we learned in our user testing, 
               it is unnatural to need to schedule a time to connect/draw with somebody on this platform because there needs to be a 
               warming-up period to engage the user to even begin to discuss something like a sexual assault experience. Thus, we plan
               on allowing users to display their online status and willingness to connect/draw in order to allow users to connect/draw
               instantaneously without prior planning. From feedback from our users, they were more willing to talk right after first listening to other stories. Thus by scheduling a future connect/draw session, we fear that the sessions will be far less
               beneficial without the priming of listening to stories.
            </p>
            <p>
               From our feedback, many of the users liked the silliness of the Google Hangout drawing application, which included stamps
               and characters named beanies. Thus, our shared drawing space will also include stamps and starters in order to bring a bit
               of silliness to balance such a somber topic.
            </p>
            <h3>Implementation</h3>
            <a href="http://finalproject247.herokuapp.com/">Our platform can be found here.<a>
            <h4>What we have done:</h4>
            <ul>
               <li>Built a basic listening gallery populated with public stories of experience and support</li>
               <li>Built a basic recording mechanism to allow users to submit their story</li>
               <li>Prettified our site to the point where the UI will not be a distraction for our next round of user testing</li>
            </ul>
            <h4>What we need to do:</h4>
            <ul>
               <li>Building our shared drawing space with an open audio feed<li>
               <li>Building our database to hold users, stories, and drawings</li>
               <li>Providing prompts during our recording session; we are meeting with the SARA team to discuss prompts that are both sensitive and engaging</li>
               <li>Altering the recordings to maintain the anonymity of the voice</li>
               <li>Creating an online status feature to allow users to connect with other users</li>
               <li>Creating account management for the platform</li>
            </ul>
         </div>  
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