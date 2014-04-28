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
               <li class="current"><a href="m1.php">Milestone 1</a></li>
               <li><a href="m2.php">Milestone 2</a></li>
            </ul> <!-- end #menu -->
         </nav>
      </header>
      <!-- latest article
      ================================================== -->
      <article id="latest-article" class="container">
         <h2><a href="#">Milestone One: Brainstorming</a></h2>
         <p class="post-info">by <span><a href="index.php">Team One</a></span></p>
         <div class="dcontent cf">
            <div class="post-meta">
               <p class="dateinfo">17
                  <span class="dmonth">April</span>
                  <span class="dyear">2014</span>
               </p>
            </div>
            <p>Like the classic racing film, our brainstorm was fast and furious. We started the process by discussing some common interests including social activism, creative expression, getting under-represented populations into
            STEM, kids, parents, and more. We continued to brainstorm at this high-level for a bit, shown with the purple
            ideas below. In the second image, you can also see connections we drew between ideas or connections to
            refinements of ideas as we continued to brainstorm. Our brainstorm progress can be tracked by the layered
            colors from purple, blue, red, light green, black, to dark green.
            </p>
            <p>
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
         </p>
         <h3 class="ideas">Idea One</h3>
         <h4>Pass it on: a platform for creating teaching chains</h4>
         <p>This platform is designed for high school students to teach other students using teaching chains. A teaching chain is when students teach other students via live broadcast and then those students go on to teach more students. By allowing peer-to-peer teaching, students confirm the original learning of the concept by teaching it and pass on the knowledge through video technology. With this model, students are able to continually learn by teaching and re-teaching the concept to fellow students and viewing past videos of other students teaching the same concept. We imagine this platform to be used as supplementary material to classroom learning while providing connections in between fellow students. For example, after a lesson on Newton's Laws of Motion, a student can offer a brief lesson on the First Law by working through an example. Students who take part in this lesson and confirm their knowledge by creating another video teaching the same concept but with a different example.</p>  
         <h3 id="idea_two" class="ideas">Idea Two</h3>
         <h4>This is my story: a platform for overcoming negative experiences</h4>
         <p>
         Designed for women who have experienced sexual abuse, this is a platform to share negative experiences and how they overcame them. Storytelling can be a particularly important context for internalizing aspects of self-concept, and listeners prefer self-defining stories about managing traumatic events. Thus, a victim may start to tell a story about overcoming the traumatic event and start to overcome it through storytelling. Victims can find other victims to connect with, helping them talk through the experience, get advice, and more. This platform will likely be focused on asynchronous communication. A potential context might be after an abusive event, victims can go to this platform to share their story, read stories, and find a fellow victim to help them overcome the traumatic experience. There will be many ways for users to participate in this platform.
         </p>
            <h3 class="ideas">Idea Three</h3>
            <h4>Donation mosiac: a platform to artistically represent donors</h4>
            <p>
            This platform is designed for young people who want to affect an issue but don’t necessarily donate  and non-profit organizations attempting to affect an issue who need donations. By creating a more appealing donation interface, donors will feel more connected to the issue and to his personal impact. From the organization's point of view, this will motivate more people to donate to its cause. For example, when an organization is responding to an event or trying to repeal a law, they create a website with a target image and a goal to fundraise, as well as starting videos from people highlighting an issue (victims or experts). Everytime someone donates they are asked to post a 30-second video explaining why they’re donating and this is sent to people they know. The video becomes part of a mosaic leaving chunks representing money towards goal.
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