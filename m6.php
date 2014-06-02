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
               <li class="current"><a href="m6.php">Milestone 6</a></li>
               <li><a href="m7.php">Milestone 7</a></li>
               <li><a href="m8.php">Milestone 8</a></li>
            </ul> <!-- end #menu -->
         </nav>
      </header>
      <!-- latest article
      ================================================== -->
      <article id="latest-article" class="container">
         <h2><a href="#">Milestone Six: Functional Prototype II</a></h2>
         <p class="post-info">by <span><a href="index.php">Team One</a></span></p>
         <div class="dcontent cf">
            <div class="post-meta">
               <p class="dateinfo">22
                  <span class="dmonth">May</span>
                  <span class="dyear">2014</span>
               </p>
            </div>
            <br/>
            <br/>
            <h3>We have a real website!</h3>
            <table style="border-collapse:collapse">
               <tr>
                  <th>Cool feature</th>
                  <th>Why it's important</th>
                  <th>Priority this week</th>
                  <th>Done?</th>
               </tr>
               <tr>
                  <td>Audio stream during drawing</td>
                  <td>Part of core idea, users need to talk to each other to connect; successful in wizard-of-oz testing</td>
                  <td>P0</td>
                  <td>Yes</td>
               </tr>
               <tr>
                  <td>Collaborative drawing</td>
                  <td>Part of core idea, very successful in wizard-of-oz testing (previous version wasn't collaborative)</td>
                  <td>P1</td>
                  <td>Yes</td>
               </tr>
               <tr>
                  <td>Resources page</td>
                  <td>Experts from user testing last week spoke of need to point to resources, to provide more help</td>
                  <td>P1</td>
                  <td>Yes</td>
               </tr>
               <tr>
                  <td>Create separate 1:1 drawing sessions</td>
                  <td>Part of core idea, allow users to connect 1:1 for added comfort</td>
                  <td>P1</td>
                  <td>No</td>
               </tr>
               <tr>
                  <td>Show who's online / create way to connect to draw</td>
                  <td>Crucial once we implement 1:1 drawing sessions, in order to use site</td>
                  <td>P1, blocked by <b>Create separate 1:1 drawing sessions</b>.</td>
                  <td>Not yet. Currently, can see all signed-up users.</td>
               </tr>
               <tr>
                  <td>Listen to stories - new structure</td>
                  <td>Users still felt awkward with the idea of recording a story alone, so we've replaced audio stories with a written story and image option. This will reduce the barrier to entry, while still providing a way to peek into your future drawing partner's life before you connect. (The latter part was very meaningful to users during testing, so we wanted a way to still offer them some insight into the "other" person.)</td>
                  <td>P1</td>
                  <td>No</td>
               </tr>
               <tr>
                  <td>Listen to stories - new structure types</td>
                  <td>Based on the new structure of story submission, we wanted to provide a very formatted option to submit and a very open-ended one. You could choose either.</td>
                  <td>P3</td>
                  <td>No</td>
               </tr>
               <tr>
                  <td>Easier sign-up</td>
                  <td>Users still felt awkward with the idea of recording a story alone, so we've made the sign-up process easier.</td>
                  <td>P2</td>
                  <td>Yes</td>
               </tr>
               <tr>
                  <td>Add stamps to drawing app</td>
                  <td>Based on wizard-of-oz testing, stamps were very successful, so we want to add our own.</td>
                  <td>P3</td>
                  <td>Not yet - designed, but not added to prototype</td>
               </tr>
               <tr>
                  <td>Profile page base</td>
                  <td>As part of the new sign-up process, we wanted to implement profile pages. Ultimately, this will be where you can see your previous drawings and more.</td>
                  <td>P4</td>
                  <td>Yes</td>
               </tr>
               <tr>
                  <td>Icons</td>
                  <td>Re-do icons in app to make more clear, add hover text to provide guidance</td>
                  <td>P4</td>
                  <td>Yes</td>
               </tr>
               <tr>
                  <td>About us page</td>
                  <td>We're a new brand. We need to get our story out to get survivors to trust us.</td>
                  <td>P4</td>
                  <td>Yes</td>
               </tr>
            </table>
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