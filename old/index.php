<?php

	if ((isset($_POST['currentPage'])) && ($_POST['currentPage'] == "CIah2vIqE3SL9ujDy0JG9sQnVe6Ms45D7ATJbt5yhsg=")) {	
		$comments = $_POST['comments'];
		$email = $_POST['email'];
		$to = "mnorman@singlesail.net";
		$subject = "SINGLESAIL.NET Contact Form Submission";
		$message = "Hey! OMG! I GOT AN EMAIL!!!!!\n";
		$message .= "From: " . $email ."\n";
		$message .= "Comments: " .$comments;
		$headers = "From: $email";
		mail($to,$subject,$message,$headers);
	}

?>

<!DOCTYPE html PUBLIC "&mdash;//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1&mdash;transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta http-equiv="Classification" content="Single Sail is the interactive portfolio of Marshall Norman. An interactive and print designer out of Dayton, Ohio." />
<meta name="Category" content="Design" />
<meta name="DC.Coverage.PlaceName" content="Global" />
<meta name="DC.Description" content="A showcase of Marshall Norman, interactive and print designer." />
<meta name="DC.Subject" content="design, interactive, print, marshall, norman, flash, art, experience, create." />
<meta name="DC.Title" content="Single Sail | Online Portfolio of Marshall Norman" />
<meta name="Description" content="Home of graphic designer and developer Marshall Norman" />
<meta name="Keywords" content="Showcase of the work of Marshall Norman" />
<meta name="MSSmartTagsPreventParsing" content="TRUE" />
<meta name="Rating" content="General" />
<meta name="robots" content="all" />
<meta name="robots" content="index, follow" />

<title>Single Sail | Online Portfolio of Marshall Norman</title>

<style type="text/css">
img, div { behavior: url(iepngfix.htc) }
</style>

<link rel="stylesheet" href="styles/global.css" />
<link rel="Shortcut Icon" href="singlesail.ico">

<script type="text/javascript" src="js/formSauce.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
<script src="js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.address-1.3.min.js?autoUpdate=false"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19090643-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<div id="left">
	<div id="branding">
		<a href="#"><h1 style="border:none;">Design portfolio of Marshall Norman</h1></a>
	</div>
	
	<div id="about">
		<h1>Hi. My name is Marshall Norman, and you have landed on my portfolio site.</h1>
		<p>I am a designer who lives in Ohio. When I'm not doodlin' up something fancy you may find me riding my bike with my wife, playing guitar in my band, or cooking up a tasty dish.</p>
		<p>Please feel free to poke around.	If you feel like I could help you out, <a href="#contact" class="contact" rel="contact">send me an email.</a></p>
	</div>
	
</div>

<div id="right">
	<div id="rightWork">
	<div id="thumbNails">
		
		<div class="projectImg captionfull">	
			<a href="#caresource-report" rel="work1"><img src="images/thumb_caresource.jpg" alt="caresource report concept" width="645" height="196" /></a>
			<div class="cover boxcaption">
				<a href="#caresource-report" rel="work1"><strong>Concept</strong> &mdash; Caresource Annual Report</a>
			</div>
		</div>
		
		<div class="projectImg captionfull">	
			<a href="#wernle-brand" rel="work6"><img src="images/thumb_wernle.jpg" alt="wernle brand" width="645" height="196" /></a>
			<div class="cover boxcaption">
				<a href="#wernle-brand" rel="work6"><strong>Branding</strong> &mdash; Wernle Youth &amp; Family Center</a>
			</div>
		</div>
		
		<div class="projectImg captionfull">	
			<a href="#release-poster" rel="work2"><img src="images/thumb_mmposter.jpg" alt="show poster" width="645" height="196" /></a>
			<div class="cover boxcaption">
				<a href="#release-poster" rel="work2"><strong>Event Poster</strong> &mdash; Me &amp; Mountains CD Release</a>
			</div>
		</div>
		
		<div class="projectImg captionfull">	
			<a href="#sbir-site" rel="work10"><img src="images/thumb_sbir.jpg" alt="me and mountains album design" width="645" height="196" /></a>
			<div class="cover boxcaption">
				<a href="#sbir-site" rel="work10"><strong>Website Design/Development</strong> &mdash; www.afsbirsttr.com</a>
			</div>
		</div>
		
		<div class="projectImg captionfull">	
			<a href="#mm-album" rel="work9"><img src="images/thumb_mm.jpg" alt="me and mountains album design" width="645" height="196" /></a>
			<div class="cover boxcaption">
				<a href="#mm-album" rel="work9"><strong>Album Design</strong> &mdash; Me &amp; Mountains</a>
			</div>
		</div>
		
		<div class="projectImg captionfull">	
			<a href="#cityfolk-brand" rel="work3"><img src="images/thumb_cf.jpg" alt="cityfolk brand" width="645" height="196" /></a>
			<div class="cover boxcaption">
				<a href="#cityfolk-brand" rel="work3"><strong>Branding</strong> &mdash; CityFolk</a>
			</div>
		</div>

		<div class="projectImg captionfull">	
			<a href="#petsinstitches" rel="work4"><img src="images/thumb_pis.jpg" alt="pets in stitches site" width="645" height="196" /></a>
			<div class="cover boxcaption">
				<a href="#petsinstitches" rel="work4"><strong>Website Design/Development</strong> &mdash; petsinstitches.com</a>
			</div>
		</div>

		<div class="projectImg captionfull">	
			<a href="#yeck-poster" rel="work5"><img src="images/thumb_yeckcollege.jpg" alt="yeck poster" width="645" height="196" /></a>
			<div class="cover boxcaption">
				<a href="#yeck-poster" rel="work5">Poster</strong> &mdash; Yeck College Fellowship</a>
			</div>
		</div>
		
		<div class="projectImg captionfull">	
			<a href="#dc-site" rel="work11"><img src="images/thumb_dc.jpg" alt="yeck poster" width="645" height="196" /></a>
			<div class="cover boxcaption">
				<a href="#dc-site" rel="work11">Website Design/Development</strong> &mdash; Design Chemistry</a>
			</div>
		</div>
		
		<div class="projectImg captionfull">	
			<a href="#saa-poster" rel="work7"><img src="images/thumb_saa.jpg" alt="saa poster" width="645" height="196" /></a>
			<div class="cover boxcaption">
				<a href="#saa-poster" rel="work7"><strong>Poster</strong> &mdash; School of Advertising Art</a>
			</div>
		</div>
		
		<div class="projectImg captionfull">	
			<a href="#more" rel="work8"><img src="images/thumb_other.jpg" alt="more stuff" width="645" height="196" /></a>
			<div class="cover boxcaption">
				<a href="#more" rel="work8">A mishmash of some random things I've done</a>
			</div>
		</div>
		
		</div>
	

		<div class="detail hidden" id="work1">
			<a href="#" class="backBtn">back to work</a>
			<h2>Caresource Annual Report</h2>
			<p>Concept for the Caresource Foundation Annual Report</p>
			<p>The contents of this report would use transparent pages to show and hide parts of pictures and paragraphs as you turned the pages. The result would be an interesting way of showing how many different factors have to come together in order for Caresource to provide their services.</p>
			<img src="images/caresource1.jpg" alt="caresource1" width="645" height="806" style="margin-top:20px;"/>
			<img src="images/caresource3.jpg" alt="caresource3" width="306" height="200" />
			<img src="images/caresource2.jpg" alt="caresource2" width="306" height="200" style="clear:none; float: right;"/>
			<img src="images/caresource4.jpg" alt="caresource4" width="645" height="200" />
				
			<div class="backDiv">
				<a href="#" class="backBtnA">back to work</a>
				<h3>Back to my work.</h3>
			</div>
		</div>
		
		<div class="detail hidden" id="work2">
			<a href="#" class="backBtn">back to work</a>
			<h2>Me &amp; Mountains CD Release Poster</h2>
			<p>My band <a href="http://www.meandmountains.com" target="_blank">Me &amp; Mountains</a> released a CD. This is the poster I illustrated and designed for the release show.</p>
			<img src="images/mmposter2.jpg" alt="full poster" width="645" height="997" style="margin-top:20px;" />
			<img src="images/mmposter4.jpg" alt="mmposter4" width="645" height="300" />
			<img src="images/mmposter1.jpg" alt="mmposter1" width="645" height="400" />
			<img src="images/mmposter3.jpg" alt="mmposter3" width="645" height="400" />
			
			<div class="backDiv">
				<a href="#" class="backBtnA">back to work</a>
				<h3>Back to my work.</h3>
			</div>
		</div>
		
		<div class="detail hidden" id="work3">
			<a href="#" class="backBtn">back to work</a>
			<h2>Branding &mdash; CityFolk</h2>
			<p>Brand development for CityFolk, an organization in Dayton, Ohio who puts together musical events through the year.</p>
			<p>CityFolk focuses on bringing different ethnic groups to light in the community by focusing on their art. They wanted a brand that was modern, but still communicated their purpose.</p>
			<p>This project included designing all business collateral, brand standards guides and event materials.</p>
			<img src="images/cf_brand1.jpg" alt="cf_brand1" width="306" height="200" style="margin-top:20px;" />
			<img src="images/cf_brand2.jpg" alt="cf_brand1" width="306" height="200" style="margin-top:20px; clear:none; float: right;" />
			
			<div class="backDiv">
				<a href="#" class="backBtnA">back to work</a>
				<h3>Back to my work.</h3>
			</div>
		</div>
		
		<div class="detail hidden" id="work4">
			<a href="#" class="backBtn">back to work</a>
			<h2>Design/Development &mdash; petsinstitches.com</h2>
			<p>For this project, I took the existing brand and created a website that corresponded with the look and feel. The client wanted a clean, simple looking website that was still fun and engaging.</p>
			<img src="images/pis2.jpg" alt="pis1" width="645" height="400" style="margin-top:20px;" />
			<img src="images/pis3.jpg" alt="cf_brand1" width="306" height="280" />
			<img src="images/pis4.jpg" alt="cf_brand1" width="306" height="280" style="clear:none; float: right;" />
			<img src="images/pis1.jpg" alt="pis1" width="645" height="400" />
			
			<div class="backDiv">
				<a href="#" class="backBtnA">back to work</a>
				<h3>Back to my work.</h3>
			</div>
		</div>
		
		<div class="detail hidden" id="work5">
			<a href="#" class="backBtn">back to work</a>
			<h2>Poster &mdash; Yeck College Fellowship</h2>
			<p>Poster design for the Dayton Art Institute's Yeck College Fellowship program.</p>
			<p>This was posted in colleges all around the region.</p>
			<img src="images/yeckcollege1.jpg" alt="caresource1" width="645" height="985" style="margin-top:20px;" />
			<img src="images/yeckcollege2.jpg" alt="caresource2" width="306" height="350" />
			<img src="images/yeckcollege3.jpg" alt="caresource2" width="306" height="350" style="clear:none; float: right;"/>
			
			<div class="backDiv">
				<a href="#" class="backBtnA">back to work</a>
				<h3>Back to my work.</h3>
			</div>
		</div>
		
		<div class="detail hidden" id="work6">
			<a href="#" class="backBtn">back to work</a>
			<h2>Branding &mdash; Wernle Youth &amp; Family Center</h2>
			<p>Wernle Youth &amp; Family center is located in Richmond, Indiana.</p>
			<p>For this rebrand, Wernle wanted to show that they are not just another children's home. They wanted something that showed a community focused on helping individuals, and also communicates the Christian basis of their program.</p>
			<p>This project included designing all business collateral, brand standards guides and event materials.</p>
	
			<img src="images/wernle2.jpg" alt="caresource2" width="306" height="280" style="margin-top:20px;" />
			<img src="images/wernle3.jpg" alt="caresource2" width="306" height="280" style="margin-top:20px; clear:none; float: right;"/>
			<img src="images/wernle1.jpg" alt="wernle brand" width="645" height="400" />
			
			<div class="backDiv">
				<a href="#" class="backBtnA">back to work</a>
				<h3>Back to my work.</h3>
			</div>
		</div>
		
		<div class="detail hidden" id="work7">
			<a href="#" class="backBtn">back to work</a>
			<h2>Poster &mdash; School of Advertising Art</h2>
			<p>Poster completed for the School of Advertising Art in Kettering, Ohio.</p>
			<p>This was an event for students who were close to graduation. The illustration shows a young person making a big leap with confidence.</p>
			<img src="images/saa1.jpg" alt="caresource1" width="645" height="980" style="margin-top:20px;" />
			<img src="images/saa2.jpg" alt="caresource2" width="306" height="350" />
			<img src="images/saa3.jpg" alt="caresource2" width="306" height="350" style="clear:none; float: right;"/>
			
			<div class="backDiv">
				<a href="#" class="backBtnA">back to work</a>
				<h3>Back to my work.</h3>
			</div>
		</div>
		
		<div class="detail hidden" id="work9">
			<a href="#" class="backBtn">back to work</a>
			<h2>Album Design &mdash; Me &amp; Mountains</h2>
			<p>It's not too often you get to design something where you get to do whatever you want.</p>
			<p>For the design of the <a href="http://www.meandmountains.com" target="_blank">Me &amp; Mountains</a> album, I decided to completely step away from the computer. Using construction paper, glue and some pete moss I constructed a diorama which I then photographed.</p>
			
			<img src="images/mm1.jpg" alt="cut paper" width="645" height="500" style="margin-top:20px;" />
			<img src="images/mm2.jpg" alt="initial drawing" width="306" height="280" />
			<img src="images/mm3.jpg" alt="bird skeleton" width="306" height="280" style="clear:none; float: right;"/>
			<img src="images/mm4.jpg" alt="full diorama" width="645" height="500" />
			<img src="images/mm5.jpg" alt="back cover" width="645" height="500" />
			<img src="images/mm6.jpg" alt="finished cover" width="645" height="645" />
			<img src="images/mm7.jpg" alt="fox closup" width="306" height="280" />
			<img src="images/mm8.jpg" alt="discs" width="306" height="280" style="clear:none; float: right;"/>
			
			
			
			<div class="backDiv">
				<a href="#" class="backBtnA">back to work</a>
				<h3>Back to my work.</h3>
			</div>
		</div>
		
		<div class="detail hidden" id="work10">
			<a href="#" class="backBtn">back to work</a>
			<h2>Website Design/Development &mdash; www.afsbirsttr.com</h2>
			<p>A site for Air Force contract agencies to bid on jobs.</p>
			<p>I was tasked with building a site which was clear and easy to navigate. My challenge was to find the best way to display the many sub-navigations which this site uses to allow users to log in and use various parts of the site. I developed small reusable icons that SBIR/STTR could accompany with text to satisfy their constantly changing needs.</p>
			
			<img src="images/sbir1.jpg" alt="sbir home page" width="645" height="400" style="margin-top:20px;" />
			<img src="images/sbir2.jpg" alt="sbir icons" width="645" height="425" />			
			
			<div class="backDiv">
				<a href="#" class="backBtnA">back to work</a>
				<h3>Back to my work.</h3>
			</div>
		</div>
		
		<div class="detail hidden" id="work11">
			<a href="#" class="backBtn">back to work</a>
			<h2>Website Design/Development &mdash; Design Chemistry</h2>
			<p>A site for the agency I worked at called Design Chemistry.</p>
			<p>Using a super hero theme with fun illustrations I designed a site that was fun and engaging, but still professional and well organized.</p>
			<p>For the agency portfolio page, I developed various icons to show what we provided for each client. These were represented by a key at the top of the page.</p>
			
			<img src="images/dc1.jpg" alt="dc homepage" width="645" height="340" style="margin-top:20px;" />
			<img src="images/dc2.jpg" alt="dc interior" width="645" height="340" />
			<img src="images/dc3.jpg" alt="dc footer" width="645" height="340" />
			<img src="images/dc5.jpg" alt="dc key" width="645" height="85" />
			<img src="images/dc4.jpg" alt="dc portfolio" width="645" height="340" />			
			
			<div class="backDiv">
				<a href="#" class="backBtnA">back to work</a>
				<h3>Back to my work.</h3>
			</div>
		</div>
		
		<div class="detail hidden" id="work8">
			<a href="#" class="backBtn">back to work</a>
			<h2>Some things.</h2>
			<p>They say that it is important to make a human connection with people who are viewing your website.</p>
			<p>So here are some images that tell a bit about me.</p>
			<img src="images/c1.jpg" alt="paper trees" width="645" height="400" style="margin-top:20px;" />
			<img src="images/b13.jpg" alt="flowers" width="306" height="315" />
			<img src="images/b7.jpg" alt="chipmunk" width="306" height="315" style="clear:none; float: right;"/>
			<img src="images/a2.jpg" alt="tulip" width="645" height="200" />
			<img src="images/c2.jpg" alt="paper fox" width="645" height="400" />
			<img src="images/b9.jpg" alt="kitty" width="306" height="315" />
			<img src="images/b10.jpg" alt="bikes" width="306" height="315" style="clear:none; float: right;"/>
			<img src="images/a1.jpg" alt="blue ridge moutnains" width="645" height="200" />
			<img src="images/b3.jpg" alt="recording" width="306" height="315" />
			<img src="images/b5.jpg" alt="bonfire" width="306" height="315" style="clear:none; float: right;" />
			<img src="images/c3.jpg" alt="abandoned building" width="645" height="400" style="margin-top:20px;" />
			<img src="images/b11.jpg" alt="snowy day" width="306" height="315" />
			<img src="images/b12.jpg" alt="trees" width="306" height="315" style="clear:none; float: right;" />
			<img src="images/a3.jpg" alt="band" width="645" height="200" />
			<img src="images/b2.jpg" alt="milwaukee" width="306" height="315" />
			<img src="images/b4.jpg" alt="guitar pedals" width="306" height="315" style="clear:none; float: right;" />
			<img src="images/c6.jpg" alt="lil' gnome" width="645" height="400" />
			
			<div class="backDiv">
				<a href="#" class="backBtnA">back to work</a>
				<h3>Back to my work.</h3>
			</div>
		</div>
		
		<div id="thanks" class="hidden">
			<a href="#" class="backBtn">back to work</a>
			<h2>Thanks! Your email has been sent.</h2>
		</div>
		
		<div class="detail hidden" id="contact">
			<a href="#" class="backBtn">back to work</a>
			<h2>Go ahead, say it.</h2>
				<form name="contact" class="formSauce topLabel page" method="post" action="#thanks">
					<input type="hidden" name="currentPage" value="CIah2vIqE3SL9ujDy0JG9sQnVe6Ms45D7ATJbt5yhsg=">
					<ul>
						<li>
							<label class="desc" for="comments">What's on your mind?</label>
							<div>
								<textarea name="comments" class="field textarea medium" rows="10" cols="50"></textarea>
							</div>
							<p class="instruct">
								<small>Have an interesting project in mind that you would like to share with me? Well tell me all about it.</small>
							</p>
						</li>

					<li>
						<label class="desc" for="email">Alright. What's your email address?</label>
						<div>
							<input name="email" type="text" class="field text medium" /> 
						</div>
						<p class="instruct">
							<small>Don't worry. It's safe with me.</small>
						</p>
					</li>
						
					
					<a href="javascript: document.contact.submit()">SEND</a>
				</ul>
			</form>		
		</div>
	</div>
</div>



