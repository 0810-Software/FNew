<HTML lang="en">
<!--
FNew Standards ver. 20.4.30.2 apply to this file.
Visit https://0810-software.github.io/FNew-Standards/20.4.30.2 for more information.

Tagger: @Marnix0810

Contributors:
- @Marnix0810
-
Please list your name above when comitting to this file for the first time.
-->
<HEAD>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-162896410-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-162896410-2');
</script>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="Cache-control" content="private">
<meta name="yandex-verification" content="dd88ebdac82cb3f4" />
<meta content='width=device-width, initial-scale=1' name='viewport'/>
<META NAME="description" LANG="en" CONTENT="FNew - the expirimental social media site with an 'everyone-can-write-and-read'-policy by 0810 Software.">
<META NAME="keywords" LANG="en" CONTENT="FNew, Social Media, Social-Media, everyone-can-write-and-read, 0810 Software, Marnix 0810, Microblogging, Writing">
<META NAME="author" LANG="en" CONTENT="0810 Software / FNew">
<META NAME="copyright" LANG="en" CONTENT="Copyright (c) 2020 0810 Software">
<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon">
<style>
body {
  font-family: 'Lato', sans-serif;
}

.overlay {
  height: 0%;
  width: 100%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-y: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #EFE4B0;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #851b2d;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
</style>
<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="38ae32fa-bcad-4acc-9ea9-ba1a1a03f4f6";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
<TITLE><?php
$postid = $_GET["postid"];
$posttitlefile = "postindex/" . $postid . "/title.txt";
$myfile = fopen(($posttitlefile), "r") or die("Unable to load title!");
echo "FNew - Post:";
echo fgets($myfile);
fclose($myfile);
?></TITLE>
  </HEAD>
  <BODY bgcolor="#EFE4B0" text="#144b64" alink="#6b9000" link="#851b2d" vlink="#851b2d">
    <CENTER>
      <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
          <div id="searchboxoverlay">
          <form action="https://www.google.com/search" method="get" >
            <label>
              Search on FNew
              <input type="text" name="q" id="q" size="27" maxlength="255">
            </label>
            <button class="submit" id="btn" type="submit">
              <img src="https://www.google.com/favicon.ico" alt="Google" width="16"> Search on FNew
            </button>
            <input type="hidden" name="sitesearch" value="/">
          </form>
        </div><hr>
        <!-- Start of custom menu links -->
        <p>Options:</p>
        <a href="#reply">Reply to this</a>
        <a href="/posts/">Back to all posts</a>
        <a href="/posts/"></a>
        <!-- End of custom menu links -->
        <a href="https://internetdefenseleague.org"><img src="https://internetdefenseleague.org/images/badges/final/footer_badge.png" alt="Member of The Internet Defense League"/></a>
          </div>
        </div>
            <DIV id="titlebar" bgcolor="#EFE4B0"><font color="#005876">
            <hr>
        	<div style="text-align:right" id="Menubutton"><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#8595; menu</span></div>
                <h1><font color="#851b2d">F</font><font color="#590076">N</font><font color="#6b9000">ew</font>  <font size="3">by</font> <img src="https://software0810.files.wordpress.com/2019/11/cropped-0810software-2.png?w=60" alt="0810 Software"></h1>
            <hr>
            </font></div>

        <script>
        function openNav() {
          document.getElementById("myNav").style.height = "100%";
        }

        function closeNav() {
          document.getElementById("myNav").style.height = "0%";
        }
        </script>
        <!-- Start of body content -->
        <H2><?php
        $postid = $_GET["postid"];
        $posttitlefile = "postindex/" . $postid . "/title.txt";
        $myfile = fopen(($posttitlefile), "r") or die("Unable to load title!");
        echo fgets($myfile);
        fclose($myfile);
        ?></H2><HR>
          <?php
          $postid = $_GET["postid"];
          $postcontentfile = "postindex/" . $postid . "/content.txt";
          $myfile = fopen(($postcontentfile), "r") or die("Unable to load post content...");
          echo fgets($myfile);
          fclose($myfile);
          ?><br><hr><button>
            by <a href="/users.php?user=<?php
   $postid = $_GET["postid"];
   $postusernamefile = "postindex/" . $postid . "/username.txt";
   $myfile = fopen(($postusernamefile), "r") or die("error");
   echo fgets($myfile);
   fclose($myfile);
?>"><?php
   $postid = $_GET["postid"];
   $postauthorfile = "postindex/" . $postid . "/author.txt";
   $myfile = fopen(($postauthorfile), "r") or die("error");
   echo fgets($myfile);
   fclose($myfile);
?></a>, <b>posted on:</b> <?php
   $postid = $_GET["postid"];
   $postdatefile = "postindex/" . $postid . "/date.txt";
   $myfile = fopen(($postdatefile), "r") or die("Unable to load publish date");
   echo fgets($myfile);
   fclose($myfile);
?><b>.</b> <a href="#reply">Reply to this</a>
          </button>
<h2 id="comments">Replies</h2>
<hr>

<hr>
<h2>Respond to this post</h2>
<form action="https://formspree.io/fnew@email.com" method="POST" />
<input type="hidden" name="_next" value="/">
     <input type="hidden" name="postid" value="<?php
  $postid = $_GET["postid"];
  echo $postid;
  ?>">
	<p>Your username: (not required, I can lookup your email too, or send you an email to ask what your username will be/is)</p>
        <input type="text" name="Uname"/><br></br>
    <p>Your email: (required)</p>
        <input type="email" name="Umail" required/><br></br>
    <label>
    Your comment
    <input type="text" name="re" id="re" size="27" autofocus maxlength="255">
  </label><br>
  <input type="submit" id="submitresponse" value="Respond">
 </form>
 <hr>
        <!-- End of body content -->
        <!-- Start of bottombar -->
        <div id="pd_rating_holder_8814144"></div>
          <script type="text/javascript">
            PDRTJS_settings_8814144 = {
              "id" : "8814144",
              "unique_id" : "default",
              "title" : "",
              "permalink" : ""
            };
          </script>
            </div>
            <a rel="license" href="https://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="https://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License</a>.
            <p align="left">Please share FNew!</p>
          <script type="text/javascript" charset="utf-8" src="https://polldaddy.com/js/rating/rating.js"></script>
          <script type="text/javascript" src="https://polldaddy.com/survey.js" charset="UTF-8"></script>
          <script type="text/javascript" charset="utf-8">
              polldaddy.add( {
              type: 'slider',
              embed: 'poll',
              delay: 100,
              visit: 'single',
              id: 10486316
            } );
          </script>
          <noscript><a href="https://poll.fm/10486316">naturalis lectio software: Which project would you EOL first?</a></noscript>
    </CENTER>
  </BODY>
</HTML>
