<HTML lang="en">
  <!--
  FNew Standards ver. 20.10.7.1 apply to this file.


  Tagger: {(@user)name of tagger}

  Contributors:
  - {(@user)names of everyone who contributed to this file}
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
    <meta name="yandex-verification" content="dd88ebdac82cb3f4" />
    <meta content='width=device-width, initial-scale=1' name='viewport'/>
    <META NAME="description" LANG="en" CONTENT="FNew - the expirimental social media site with an 'everyone-can-write-and-read'-policy by 0810 Software.">
    <META NAME="keywords" LANG="en" CONTENT="FNew, Social Media, Social-Media, everyone-can-write-and-read, 0810 Software, Marnix 0810, Microblogging, Writing">
    <META NAME="author" LANG="en" CONTENT="0810 Software / FNew">
    <META NAME="copyright" LANG="en" CONTENT="Copyright (c) 2020 0810 Software">
    <link href="https://fnew-social.net/favicon.ico" rel="shortcut icon" type="image/x-icon">
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
    <TITLE>FNew - Post:<?php
$titlefile = postindex/$_POST["postid"]/title.txt
$myfile = fopen($titlefile, "r") or die("Unable to load title!");
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
              <input type="text" name="q" id="q" size="27" autofocus maxlength="255">
            </label>
            <button class="submit" id="btn" type="submit">
              <img src="https://www.google.com/favicon.ico" alt="Google" width="16"> Search on FNew
            </button>
            <input type="hidden" name="sitesearch" value="https://fnew-social.net/">
          </form>
        </div><hr>
        <!-- Start of custom menu links -->
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
          <hr>
          <i>This site is open-source. It is hosted from a Raspberry PI 3 using Apache 2.4.</I><br></br>
            <div id="linkbar">
              <button>
                <a href="https://github.com/0810-Software/FNew/"><img src="https://images.fnew-social.net/GitHub-Mark-32px.png" alt="Go to the Github of FNew" height="32"></a>
                | <a href="https://gitter.im/FNew_0810-Software/community"><img src="https://images.fnew-social.net/FNew-Gitter32x32.jpg" alt="FNew-comunity@Gitter" height="32"></a>
                | <a href="mailto:FNew@email.com"><img src="https://images.fnew-social.net/mail.jpg" alt="Mail to FNew's creators" height="32"></a>
                | <a href="https://software0810.wordpress.com/"><img src="https://software0810.files.wordpress.com/2019/11/cropped-0810software-2.png?w=32" alt="Go to the 0810 Software site@wordpress.com" height="32"></a>
                | <a href="https://stories0810.wordpress.com/"><img src="https://stories0810.files.wordpress.com/2019/12/wp-1576080917288.jpg?w=32" alt="Go to Stories 0810" height="32"></a>
              </button>
            </div>
            <a href="https://internetdefenseleague.org"><img src="https://internetdefenseleague.org/images/badges/final/footer_badge.png" alt="Member of The Internet Defense League"/></a><br>
            <a rel="license" href="https://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="https://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License</a>.
            <script type="text/javascript">
            window._idl = {};
            _idl.variant = "modal";
            (function() {
              var idl = document.createElement('script');
              idl.async = true;
              idl.src = 'https://members.internetdefenseleague.org/include/?url=' + (_idl.url || '') + '&campaign=' + (_idl.campaign || '') + '&variant=' + (_idl.variant || 'modal');
              document.getElementsByTagName('body')[0].appendChild(idl);
            })();
          </script>
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
