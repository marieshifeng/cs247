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
               <li class="current"><a href="m7.php">Milestone 7</a></li>
            </ul> <!-- end #menu -->
         </nav>
      </header>
      <!-- latest article
      ================================================== -->
      <article id="latest-article" class="container">
         <h2><a href="#">Milestone Seven: User Study II</a></h2>
         <p class="post-info">by <span><a href="index.php">Team One</a></span></p>
         <div class="dcontent cf">
            <div class="post-meta">
               <p class="dateinfo">29
                  <span class="dmonth">May</span>
                  <span class="dyear">2014</span>
               </p>
            </div>
            <h3>What's been happening this past week</h3>
            <p>You know how we said we had a real functional website last week? Well, it turns out it had a few bugs, and the end of the quarter was approaching, so we drastically prioritized features. The end result? A whole new website! <strong>Check it out at http://vincere.herokuapp.com</strong></p>
            <p>It's still about connecting survivors of sexual assault and helping them "vincere" (overcome) the experience. The difference is that our product focuses on the 1:1 chat experience with the fun collaborative drawing piece of it. Features include:
               <ul>
                  <li>Welcome page to give you a better sense of what the product is all about</li>
                  <li>A gallery of past drawings</li>
                  <li>No more accounts - users get authenticated through repeated reminders about who the site is for, telling a short story about their experience, and clicking a button to confirm they understand what the chatroom is for</li>
                  <li>Chat sessions, so at most 2 users can enter a room</li>
                  <li>Collaborative drawing is still there, of course</li>
                  <li>Resources page still there, too</li>
               </ul>
            </p>
            <h3>Introduction to the user study</h3>
            <p>Now that we finally have a fully functional site, we were able to do more thorough user testing, given that users no longer have to directly interact and expose themselves to us. They can do it in the privacy of their own home and remain anonyous. So our main driving questions were: would people visit? would they connect? would they come back?</p>
            <h3>Methods</h3>
            <p>We recruited users through a combination of: putting flyers up on campus, asking the SARA office and Bridge to post to their communities, Facebook posts, emails to lists, direct requests to friends, Reddit posts, PM to Reddit users who had posted about sexual assault. (Is there anything we didn't try?)</p>
            <p>Ultimately, we had 10 people submit the feedback form and officially participate in our study, though Google Analytics tells us that we actually had a few dozen unique visitors to the site.</p>
            <p><a href="https://docs.google.com/forms/d/19FEq5Fmr95Du4eRdjp3Gsi1c9mxasBO1pdqD9Iy1nTU/viewform">You can review our survey and included consent form here.</a></p>
            <h3>Results</h3>
            <iframe src="https://docs.google.com/presentation/d/1DBoDY-7dh35JruZOUSWYiTFdq2itZJ4HEYU1idNMke4/embed?start=false&loop=false&delayms=3000" frameborder="0" width="850" height="507" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
            <h3>Discussion</h3>
            <p>Testing was pretty good this week, but because no one was able to connect with another user in the wild, we still don't have a strong sense for whether the core focus of the product is working well.</p>
            <p>Things we've changed over the course of the week, in response to testing: more targeted testing windows for users, adding a short intro prior to entering a chatroom as a small added push for the safety of survivors, more resources</p>
            <h3>Implications</h3> 
            <p>User feedback was generally positive, but the main issue is that people are able to find each other. Our main focus over the next few days will be:
               <ul>
                  <li><strong>Facilitating connections</strong> - Ideas include: getting more users through more advertising, have tighter timeframes to visit, possibly add link to add to calendar, have a user be 'on call' in a drawing room, etc</li>
                  <li><strong>Visual design</strong> - Meeting with a UI designer (her previous experience includes Yahoo!) to get feedback</li>
               </ul>
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