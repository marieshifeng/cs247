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
	            <li class="current"><a href="index.php">Home</a></li>
	            <li><a href="about.php">About</a></li>
            </ul> <!-- end #menu -->
         </nav>
      </header>
      <!-- latest article
      ================================================== -->
      <article id="latest-article" class="container">
         <h2><a href="#">Milestone One</a></h2>
         <p class="post-info">by <span><a href="about.php">Team One</a></span></p>
         <div class="dcontent cf">
            <div class="post-meta">
               <p class="dateinfo">17
                  <span class="dmonth">April</span>
                  <span class="dyear">2014</span>
               </p>
            </div>
            <h3>Brainstorming</h3>
            Like the classic racing film, our brainstorm was fast and furious. Our brainstorm progress can be tracked by the <br/> layered colors from purple, blue, red, light green, black, to dark green.</br>
            <div class="header row">
              <br/>
               <div class="half columns">
                  <img class="photo" src="images/brainstorm_1.jpg" style="cursor:pointer" onclick="showImage('images/brainstorm_1.jpg');"/>   
               </div>
               <div class="half columns">
                  <img class="photo" src="images/brainstorm_2.jpg" style="cursor:pointer" onclick="showImage('images/brainstorm_2.jpg');"/>
               </div>
               <div id="largeImgPanel" onclick="hideMe(this);">
                  <img id="largeImg" style="height: 100%; margin: 0; padding: 0;" />
               </div>
            </div>
            <h3>Pass it on: a platform for creating teaching chains</h3>
            This platform is designed for high school students to teach other students using teaching chains. A teaching chain is when students teach other students via live broadcast and then those students go on to teach more students. By allowing peer-to-peer teaching, students confirm the original learning of the concept by teaching it and pass on the knowledge through video technology. With this model, students are able to continually learn by teaching and re-teaching the concept to fellow students and viewing past videos of other students teaching the same concept. We imagine this platform to be used as supplementary material to classroom learning while providing connections in between fellow students. For example, after a lesson on Newton's Laws of Motion, a student can offer a brief lesson on the First Law by working through an example. Students who take part in this lesson and confirm their knowledge by creating another video teaching the same concept but with a different example. 
            </div> 
            </br>
            <h3>This is my story: a platform for overcoming negative experiences</h3>
            Designed for women who have experienced sexual abuse, this is a platform to share negative experiences and how they overcame them. Storytelling can be a particularly important context for internalizing aspects of self-concept, and listeners prefer self-defining stories about managing traumatic events. Thus, a victim may start to tell a story about overcoming the traumatic event and start to overcome it through storytelling. Victims can find other victims to connect with, helping them talk through the experience, get advice, and more. This platform will likely be focused on asynchronous communication. A potential context might be after an abusive event, victims can go to this platform to share their story, read stories, and find a fellow victim to help them overcome the traumatic experience. There will be many ways for users to participate in this platform.
         </br></br>
            <h3>Donation mosiac: a platform to artistically represent donors</h3>
            This platform is designed for young people who want to affect an issue but don’t necessarily donate  and non-profit organizations attempting to affect an issue who need donations. By creating a more appealing donation interface, donors will feel more connected to the issue and to his personal impact. From the organization's point of view, this will motivate more people to donate to its cause. For example, when an organization is responding to an event or trying to repeal a law, they create a website with a target image and a goal to fundraise, as well as starting videos from people highlighting an issue (victims or experts). Everytime someone donates they are asked to post a 30-second video explaining why they’re donating and this is sent to people they know. The video becomes part of a mosaic leaving chunks representing money towards goal. 
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