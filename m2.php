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
               <p class="dateinfo">17
                  <span class="dmonth">April</span>
                  <span class="dyear">2014</span>
               </p>
            </div>
            <h3>Storyboarding</h3>
            <p>Like the classic racing film, our brainstorm was fast and furious. We started the process by discussing some
            common interests including social activism, creative expression, getting under-represented populations into
            STEM, kids, parents, and more. We continued to brainstorm at this high-level for a bit, shown with the purple
            ideas below. In the second image, you can also see connections we drew between ideas or connections to
            refinements of ideas as we continued to brainstorm. Our brainstorm progress can be tracked by the layered
            colors from purple, blue, red, light green, black, to dark green.
            </p><p>
            As we worked to choose three ideas to submit, we started brainstorming more specific features and implementations of various ideas, to see how rich the areas were. For example, here are those ideas for <a href="#idea_two">This is my story</a>:
         <ul>
            <ul>Standard ‘record your story’ (audio, video, or text)</ul>
            <ul>Unique ‘photobooth’ virtual setup</ul>
            <ul>Structured format/script for story to prompt the user to think about how she overcame the event</ul>
            <ul>Mix-and-match parts from different stories to create shared experiences</ul>
            <ul>Matching new victims to users who have already overcome a similar experience</ul>
            <ul>Instant help, request help, site connects user quickly to help (maybe even by calling them)</ul>
            <ul>Reading, listening to, watching other people’s stories</ul>
            <ul>Other creative outlets: paintings about your feelings, writing letters to the perpetrator (don’t necessarily send), writing the story from another perspective</ul>
            <ul>Reflecting on own story</ul>
            <ul>Interactive story to facilitate growth: drag words out of story as you grow, cross out words - a very dynamic visual of the writing process that also reinforces your own growth (i.e. powerful moment of dragging out the line “Was it something I did that caused this?”)</ul>
            <ul>Floating before and after word maps i.e. on left side, show trending words for ‘new’ stories; on right side, show trending words in older, edited stories to show difference - give new victims hope about overcoming it</ul>
         </ul>
         </p>
         <p>
            <div class="header row">
               <br/>
               <h3 class="ideas">Idea One</h3>
               <h4>Pass it on: a platform for creating teaching chains</h4>
               <div class="full columns">
                  <img class="photo" src="images/teach.jpg" style="cursor:pointer" onclick="showImage('images/teach.jpg');"/>   
               </div>
               <div id="largeImgPanel" onclick="hideMe(this);">
                  <img id="largeImg" style="height: 100%; margin: 0; padding: 0;" />
               </div>
            </div>
            <div class="header row">
               <br/>
               <h3 id="idea_two" class="ideas">Idea Two</h3>
               <h4>This is my story: a platform for overcoming negative experiences</h4>
               <div class="full columns">
                  <img class="photo" src="images/drawing.jpg" style="cursor:pointer" onclick="showImage('images/drawing.jpg');"/>   
               </div>
               <div id="largeImgPanel" onclick="hideMe(this);">
                  <img id="largeImg" style="height: 100%; margin: 0; padding: 0;" />
               </div>
            </div>
               <div class="header row">
               <br/>
               <h3 class="ideas">Idea Three</h3>
               <h4>Race confessions: a platform to anonymously discuss hard topics</h4>
               <div class="full columns">
                  <img class="photo" src="images/race.jpg" style="cursor:pointer" onclick="showImage('images/race.jpg');"/>   
               </div>
               <div id="largeImgPanel" onclick="hideMe(this);">
                  <img id="largeImg" style="height: 100%; margin: 0; padding: 0;" />
               </div>
            </div>

    
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