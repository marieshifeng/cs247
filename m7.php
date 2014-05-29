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
         <h2><a href="#">Milestone Five: User Study II</a></h2>
         <p class="post-info">by <span><a href="index.php">Team One</a></span></p>
         <div class="dcontent cf">
            <div class="post-meta">
               <p class="dateinfo">29
                  <span class="dmonth">May</span>
                  <span class="dyear">2014</span>
               </p>
            </div>
            <h4>What's been happening this past week</h4>
            <h3>Introduction</h3>
            <h3>Methods</h3>
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