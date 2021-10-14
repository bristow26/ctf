<?php
// secMN CTF challenge
// can you find the vuln
// source code is hard so you better just move on
$foo = $_GET['bar'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Sec.MN - Minnesota Security Professionals</title>
<meta charset="utf-8">
<meta name="wot-verification" content="e5f6b18248d42a815a4c"/> 
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
<!-- homepage scripts -->
<script src="scripts/jquery.1.5.1.min.js"></script>
<script src="scripts/slides.min.jquery.js"></script>
<script>
$(function () {
    $('#slides').slides({
        preload: true,
        preloadImage: 'images/slider/loading.gif',
        play: 5000,
        pause: 2500,
        hoverPause: true
    });
});
</script>
<!-- / homepage scripts -->
</head>
<body id="top">
<div class="wrapper row0">
</div>
<div class="wrapper row1">
  <header id="header" class="clear">
    <hgroup>
      <h1><a href="index.html"><img src="images/logo2.png"></a></h1>
    </hgroup>
    <nav>
      <ul>
        <!-- <li class="last"><a href="#">Link Text</a><span>Test Text Here</span></li> -->
        <li class="last"><a href="about.html">About</a>
		<ul>
				<li><a href="history.html">History</a></li>
				<li><a href="leadership.html">Leadership</a></li>
				<li><a href="affiliation.html">Affiliations</a></li>
			</ul>
		</li>
        <li><a href="events.html">Events</a>

        </li>
        <li><a href="/mw">Learn</a>
		 <!-- <ul>
            <li><a href="tools.html">Tools</a></li>
            <li><a href="blogs.html">Blogs & News</a></li>
            <li><a href="distros.html">Security Distro's</a></li>
			<li><a href="schools.html">Schools</a></li>
          </ul> -->
		</li>
        <li><a href="membership.html">Membership</a></li>
        <li><a href="meetings.html">Meetings</a>
			<ul>
				<li><a href="meetings.html">Upcoming Meetings</a></li>
				<li><a href="directions.html">Location</a></li>
				<li><a href="archives.html">Meeting Archives</a></li>
			</ul>
		</li>
		<li class="active"><a href="index.html">Home</a>
		</li>
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- content body -->
    <section id="slides">
      <div id="controls">
        <!-- Controls -->
        <a href="#" class="prev"><img src="images/slider/arrow-prev.png" alt="Previous"></a> <a href="#" class="next"><img src="images/slider/arrow-next.png" alt="Next"></a>
        <!-- Frame -->
        <img src="images/slider/frame.png" alt="" id="frame">
        <!-- / Frame -->
        <div class="slidescontainer">
           <figure class="slide"><a href="index.html"><img src="images/logoslider.png" width="940" height="360" alt=""></a>
            <figcaption class="caption">
              <h2>Welcome to Sec.MN</h2>
              <p>Sec.MN is the home of the Minnesota Security Professionals group. A group based in the Twin Cities with the mission to promote security skills within the information security community.</p>
            </figcaption>
          </figure>
         <!-- <figure class="slide"><a href="http://www.secure360.org/"  target="blank"><img src="images/sec360.png" width="940" height="360" alt=""></a>
            <a href="http://www.secure360.org/" target=blank><figcaption class="caption">
              <h2>Secure360 - May 12-14, 2014</h2>
              <p>Secure360 is the premier educational conference in the Upper Midwest for the information risk management and security industry. The conference is supported by the Upper Midwest Security Alliance (UMSA).</p>
            </figcaption></a>
          </figure> -->
          <figure class="slide"><a href="events.html"><img src="images/calendarlarge.jpg" width="940" height="360" alt=""></a>
            <a href="events.html"><figcaption class="caption">
	      <h2>IT and Security Event Calender</h2>
              <p>Check out our calander of local IT and Information Security events happening in and around the Twin Cities</p>
            </figcaption></a>
          </figure>
          <figure class="slide"><a href="#"><img src="images/meeting.jpg" width="940" height="360" alt=""></a>
            <figcaption class="caption">
              <h2>Upcoming Meeting - CTF!!! </h2>
              <p><?php echo $foo; ?></p>
              <p>This month we will cover a short introduction of stuff and things. Debugging malware is helpful, concluding with some examples.| 6:15PM</p>
            </figcaption>
          </figure>
        <!--- 
	   <figure class="slide"><a href="#"><img src="images/demo/940x360.gif" width="940" height="360" alt=""></a>
            <figcaption class="caption">
              <h2>Slide 4 Caption</h2>
              <p>Dapiensociis temper donec auctortortis cumsan et curabitur condis lorem loborttis leo. Ipsumcommodo libero nunc at in velis tincidunt pellentum tincidunt vel lorem pellus sed mauris enim.</p>
            </figcaption>
          </figure>
          <figure class="slide"><a href="#"><img src="images/demo/940x360.gif" width="940" height="360" alt=""></a>
            <figcaption class="caption">
              <h2>Slide 5 Caption</h2>
              <p>Dapiensociis temper donec auctortortis cumsan et curabitur condis lorem loborttis leo. Ipsumcommodo libero nunc at in velis tincidunt pellentum tincidunt vel lorem pellus sed mauris enim.</p>
            </figcaption>
          </figure>
          <figure class="slide"><a href="#"><img src="images/demo/940x360.gif" width="940" height="360" alt=""></a>
            <figcaption class="caption">
              <h2>Slide 6 Caption</h2>
              <p>Dapiensociis temper donec auctortortis cumsan et curabitur condis lorem loborttis leo. Ipsumcommodo libero nunc at in velis tincidunt pellentum tincidunt vel lorem pellus sed mauris enim.</p>
            </figcaption>
          </figure>
--!>
          <!-- / Slide Container -->
        </div>
        <!-- / Controls -->
      </div>
    </section>
    <!-- Services area -->
    <section class="services clear">
      <table border="0">
	  <tr>
	  <td rowspan="2">
	  <article>
        <a class="twitter-timeline"  href="https://twitter.com/sec_mn"  data-widget-id="428404421446230016">Tweets by @Sec_MN</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </article>
	  </td>
	  <td rowspan="2">
		<!-- start feedwind code -->
		<script type="text/javascript">
		<!--
			rssmikle_url="http://krebsonsecurity.com/feed/|http://threatpost.com/feed|http://feeds2.feedburner.com/HelpNetSecurity";
			rssmikle_frame_width="300";
			rssmikle_frame_height="500";
			rssmikle_target="_blank";
			rssmikle_font="Arial, Helvetica, sans-serif";
			rssmikle_font_size="12";
			rssmikle_border="on";
			responsive="off";
			rssmikle_css_url="";
			text_align="left";
			corner="off";
			autoscroll="on";
			scrolldirection="up";
			scrollstep="3";
			mcspeed="20";
			sort="New";
			rssmikle_title="off";
			rssmikle_title_sentence="";
			rssmikle_title_link="";
			rssmikle_title_bgcolor="#9ACD32";
			rssmikle_title_color="#FFFFFF";
			rssmikle_title_bgimage="";
			rssmikle_item_bgcolor="#FFFFFF";
			rssmikle_item_bgimage="";
			rssmikle_item_title_length="55";
			rssmikle_item_title_color="#666666";
			rssmikle_item_border_bottom="on";
			rssmikle_item_description="on";
			rssmikle_item_description_length="150";
			rssmikle_item_description_color="#666666";
			rssmikle_item_date="off";
			rssmikle_timezone="Etc/GMT";
			datetime_format="%b %e, %Y %l:%M:%S %p";
			rssmikle_item_description_tag="off";
			rssmikle_item_description_image_scaling="off";
			rssmikle_item_podcast="off";
			(function() {
			var src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js';
			document.write('<script type="text/javascript" src="' + src + '"><\/script>');
			})();
		//-->
		</script>
		<div style="font-size:10px; text-align:center; width:300;">
		<a href="http://feed.mikle.com/" target="_blank" style="color:#CCCCCC;">RSS Feed Widget</a>
		<!--Please display the above link in your web page according to Terms of Service.-->
		</div>
		<!-- end feedwind code -->
	  </td>
	  <tr>
      <!-- <div class="spacer"></div> -->
	  <td>
      <article class="last">
        <figure><img src="images/blogger-logo.png" width="32" height="32" alt=""></figure>
        <strong>Sec.MN Blog</strong>
        <p>Blog coming soon!</p>
        <p class="more"><a href="#">Read More &raquo;</a></p>
      </article>
	  </td>
	  </tr>
	  </table>
    </section>
    <!-- / content body -->
  </div>
</div>
<!-- footer -->
<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="http://">Sec.MN</a></p>
    <p class="fl_right">
                        <a href="https://www.linkedin.com/groups?home=&gid=7478271" target="blank"><img src="images/Linkedin.png" height="32" width="32" /></a>
                        <a href="https://www.facebook.com/secdotmn" target="blank"><img src="images/f_logo.png" height="32" width="32" /></a>
                        <a href="https://plus.google.com/u/0/communities/109840828684903222089" target="blank"><img src="images/g_plus.png" height="32" width="32" /></a>
                        <a href="https://twitter.com/sec_mn" target="blank"><img src="images/twitter.png" height="32" width="32" /></a>
	</p>
  </footer>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-37974197-3', 'sec.mn');
  ga('send', 'pageview');

</script>



</body>
</html>
