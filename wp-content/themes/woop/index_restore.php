<?php
	get_header(); // get the header.php file	
?>

<div class="topbar"></div> <!-- top bar -->

<div id="intro">
	<div class="title">
		<h1>hello<br />
		<span class="small">my name is</span><br />
		<span class="name">john doe</span><br />
		<span class="intro_line"></span><span class="amp">&#38;</span><span class="intro_line"></span><br />
		<span class="small">i'm a web designer</span></h1>
	</div> <!-- end .title -->
</div> <!-- end #intro -->


<nav>
	<ul>
		<li><a href="#intro">home</a></li>
		<li><a href="#work">work</a></li>
		<li><a href="#services">services</a></li>
		<li><a href="#about">about</a></li>
		<li><a href="#contact">contact</a></li>
	</ul>
</nav> <!-- end nav -->


<div id="work" class="gray-block">
	<div class="container_16">
		
		<div class="subheader">
			<h2><span>recent work</span></h2>
		</div>
		
		<div class="gallery">
			<div class="grid_5">
				<a href="<?php echo THEME_DIR; ?>/img/example_img.png" class="single_image"><div class="screenshot1 ss"></div></a>
				<p>Website name<br />
				<span class="ss_text">Web Design / Development</span>
				</p>
			</div>
			<div class="grid_6">
				<a href="<?php echo THEME_DIR; ?>/img/example_img.png" class="single_image"><div class="screenshot2 ss center"></div></a>
				<p>Website name<br />
				<span class="ss_text">Web Design / Development</span>
				</p>
			</div>
			<div class="grid_5">
				<a href="<?php echo THEME_DIR; ?>/img/example_img.png" class="single_image"><div class="screenshot3 ss"></div></a>
				<p>Website name<br />
				<span class="ss_text">Web Design / Development</span>
				</p>
			</div>
		
			<div class="spacer">&nbsp;</div>
		
			<div class="grid_5">
				<a href="<?php echo THEME_DIR; ?>/img/example_img.png" class="single_image"><div class="screenshot4 ss"></div></a>
				<p>Website name<br />
				<span class="ss_text">Web Design / Development</span>
				</p>
			</div>
			<div class="grid_6">
				<a href="<?php echo THEME_DIR; ?>/img/example_img.png" class="single_image"><div class="screenshot5 ss center"></div></a>
				<p>Website name<br />
				<span class="ss_text">Web Design / Development</span>
				</p>
			</div>
			<div class="grid_5">
				<a href="<?php echo THEME_DIR; ?>/img/example_img.png" class="single_image"><div class="screenshot6 ss"></div></a>
				<p>Website name<br />
				<span class="ss_text">Web Design / Development</span>
				</p>
			</div>
		</div><!-- end .gallery -->
		
	</div> <!-- end .container_16 -->
</div> <!-- end #work -->

<div class="bg_top"></div>

<div id="services" class="white-block">
	<div class="container_16">
	
		<div class="subheader">
			<h2><span>services</span></h2>
		</div>
		
		<div class="clear"></div>
		
		<div class="serv_icons">
			<div class="grid_4">
				<div class="serv_icon1"></div>
				<h3>design</h3>
				<p>I have traced the Rebel spies to her. Now she is my only link to finding their secret base. I want to come with you to Alderaan.</p>
			</div>
		
			<div class="grid_4">
				<div class="serv_icon2"></div>
				<h3>development</h3>
				<p>I have traced the Rebel spies to her. Now she is my only link to finding their secret base. I want to come with you to Alderaan.</p>
			</div>
		
			<div class="grid_4">
				<div class="serv_icon3"></div>
				<h3>identity</h3>
				<p>I have traced the Rebel spies to her. Now she is my only link to finding their secret base. I want to come with you to Alderaan.</p>
			</div>
			
			<div class="grid_4">
				<div class="serv_icon4"></div>
				<h3>wordpress</h3>
				<p>I have traced the Rebel spies to her. Now she is my only link to finding their secret base. I want to come with you to Alderaan.</p>
			</div>
		</div> <!-- end .serv_icons -->
		
	</div> <!-- end .container_16 -->
</div> <!-- end #services -->

<div class="bg_bottom"></div>

<div id="about" class="gray-block" style="height: 620px;">
	<div class="container_16">
	
		<div class="subheader">
			<h2><span>about</span></h2>
		</div>
	
	<div class="grid_5">
		<div class="about_pic"></div>
		<div class="social">
			<ul>
				<li><a href="#"><div class="twitter sprite"></div></a></li>
				<li><a href="#"><div class="facebook sprite"></div></a></li>
				<li><a href="#"><div class="linkedin sprite"></div></a></li>
				<li><a href="#"><div class="dribble sprite"></div></a></li>
			</ul>
		</div> <!-- end .social -->
	</div> <!-- end .grid_5 -->
	
	<div class="grid_6">
			<div class="about_copy">
			<h4>Who am I?</h4>
			<p>Kid, I've flown from one side of this galaxy to the other. I've seen a lot of strange stuff, but I've never seen anything to make me believe there's one all-powerful Force controlling everything.</p>
			<p>There's no mystical energy field that controls my destiny. It's all a lot of simple tricks and nonsense. Look, I ain't in this for your revolution, and I'm not in it for you.</p>
			<p>I want to come with you to Alderaan. There's nothing for me here now. I want to learn the ways of the Force and be a Jedi, like my father before me. Still, she's got a lot of spirit. I don't know, what do you think?</p>
		</div> <!-- end .about_copy -->
	</div> <!-- end .grid_6 -->
	
	<div class="grid_5">
		<div class="skills">
			<h4>Skills</h4>
			<ul>
				<li><div class="skill1"><p>Photoshop</p></div></li>
				<li><div class="skill2"><p>Illustrator</p></div></li>
				<li><div class="skill3"><p>HTML/CSS</p></div></li>
				<li><div class="skill4"><p>Javascript</p></div></li>
				<li><div class="skill5"><p>Wordpress</p></div></li>
				<li><div class="skill6"><p>PHP/MySQL</p></div></li>
			</ul>
		</div> <!-- end .skills -->
	</div> <!-- end .grid_5 -->
	
	</div> <!-- end .container_16 -->
</div> <!-- end #about -->

<div class="bg_top"></div>

<div id="contact" class="white-block" style="height: 580px;">
	<div class="container_16">
	
		<div class="subheader">
			<h2><span>contact</span></h2>
		</div>
		
		<div class="grid_7">
			<div class="contact_form">
				<h4>Get in touch</h4>
				<form method="post">
					<input type="text" name="Name" id="name" value="Name" onfocus="this.value = this.value=='Name'?'':this.value;" onblur="this.value = this.value==''?'Name':this.value;" />
					<input type="text" name="Email" id="email" value="Email" onfocus="this.value = this.value=='Email'?'':this.value;" onblur="this.value = this.value==''?'Email':this.value;" />
					<input type="text" value="Subject" id="subject" onfocus="this.value = this.value=='Subject'?'':this.value;" onblur="this.value = this.value==''?'Subject':this.value;" />
					<textarea name="Message" id="body" onfocus="this.value = this.value=='Message'?'':this.value;" onblur="this.value = this.value==''?'Message':this.value;">Message</textarea>
					<input type="submit" name="submit" id="submit" value="send" class="submit-button" onClick="return check_values();" />
				</form>
				<div id="confirmation" style="display:none; position: relative; z-index: 600; font-family: 'Open Sans', sans-serif; font-weight: 300; font-size: 16px; color: #4e4e4e;"></div>
			</div> <!-- end .contact_form -->
				
		</div> <!-- end .grid_7 -->
				
		<div class="grid_9">
		
			<div class="contact_info">
				<h4>Contact Information</h4>
				<div class="grid_4 alpha">
					<p><img src="<?php echo THEME_DIR; ?>/img/icn_phone.png" alt="" /> +351 123 456 789</p>
					<p><img src="<?php echo THEME_DIR; ?>/img/icn_mail.png" alt="" /> youremail@yoursite.com</p>
				</div>
				<div class="grid_4 omega">
					<p><img src="<?php echo THEME_DIR; ?>/img/icn_address.png" alt="" /> Fifth Avenue<br />
					<span class="address">767 5th Ave, New York,</span><br />
					<span class="address">NY 10153</span></p>
				</div>
			</div> <!-- end .contact_info -->
		
			<div class="map">
				<iframe class="map_frame" width="506" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.pt/maps?f=q&amp;source=s_q&amp;hl=pt-PT&amp;geocode=&amp;q=fifth+avenue+767+ny&amp;aq=&amp;sll=39.639538,-7.849731&amp;sspn=9.792035,19.753418&amp;ie=UTF8&amp;hq=&amp;hnear=767+5th+Ave,+New+York,+10022,+United+States&amp;t=m&amp;ll=40.763901,-73.973179&amp;spn=0.013002,0.043344&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
			</div> <!-- end .map -->
			
		</div> <!-- end .grid_9 -->
		
	</div> <!-- end .container_16 -->
</div> <!-- end #contact -->

<div class="bg_bottom"></div>

<footer>
	<p>&copy; 2012 All rights reserved</p>
</footer>
	
<?php
	get_footer(); // get the footer.php file	
?>