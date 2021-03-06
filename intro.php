<?php

	session_start();	
	if($_SESSION['set']!=1)
	{
		echo "Not Logged in!";
	}
	else
	{

?><!DOCTYPE html>
<html onmousemove="showCoords(event)">
	<head>
		<title>Welcome</title>
		<link href="intro.css" type="text/css" rel="stylesheet" />
	</head>
	<body onload = "startTimer()">
		<div class="header">
			<div class="header-big"><big>Bg</big></div>
			<ul class="header-list">
				<li><a href="#">Welcome!</a></li>
				<li><a href="#">About Me</a></li>
				<li><a href="buttons.php">Sample</a></li>
				<li><a href="#">Articles</a></li>
				<li><a href="contact-me.html">Contact</a></li>
				<li><a href="2a.php">Chat</a></li>
				<!--<li><a href="jobs.html">Login</a></li>
				<li><a href="./Untitled Folder 2/intronew.html">Alternate</a></li>-->
				<?php if($_SESSION['set']==1) echo "<li><a class='h-a' href='logout.php'>Logout</a></li>"; ?>
			</ul>		
		</div>

		<!--<div class="intro" id="particles-js" >
			<img src="c3.jpg"/>
			<script src="p.js" type="text/javascript"></script>
			<script src="app.js" type="text/javascript"></script>
			
		</div>-->

		<div class="container">
			<ul class="cul">
				<li class="cli"></li>
				<li class="cli"></li>
				<li class="cli"></li>
				<li class="cli"></li>
				<li class="cli"></li>
			</ul>
		</div>
			
		<section class="about">
			<div class="about1">
				<h3>About Us</h3>
				<div class="face-lockup">
				<div class="face-img"></div>
				<div class="icon-pencil">
					<!-- Generated by IcoMoon.io -->
					<svg class="pencil" version="1.1" xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42">
						<title>paint-brush</title>
						<path fill="#262626" d="M37.852 0c2.133 0 4.102 1.594 4.102 3.82 0 1.242-0.492 2.438-1.055 3.539-1.828 3.469-7.969 14.93-10.898 17.625-1.43 1.336-3.117 2.133-5.109 2.133-3.961 0-7.195-3.375-7.195-7.313 0-1.875 0.773-3.703 2.156-4.969l14.953-13.57c0.82-0.75 1.898-1.266 3.047-1.266zM16.547 24.234c1.219 2.367 3.445 4.148 6.023 4.828l0.023 1.664c0.141 6.68-4.5 11.273-11.203 11.273-7.945 0-11.391-6.328-11.391-13.523 0.867 0.586 3.891 3 4.875 3 0.586 0 1.078-0.328 1.289-0.867 1.992-5.203 5.109-6.141 10.383-6.375z"></path>
					</svg>
				</div>
				<div class="icon-mouse">
					<!-- Generated by IcoMoon.io -->
					<svg class="wifi" version="1.1" xmlns="http://www.w3.org/2000/svg" width="48" height="42" viewBox="0 0 48 42">
						<title>wifi</title>
						<path fill="#262626" d="M24 35.695c-0.609 0-3.891-3.281-3.891-3.914 0-1.148 3-1.781 3.891-1.781s3.891 0.633 3.891 1.781c0 0.633-3.281 3.914-3.891 3.914zM30.328 29.344c-0.328 0-2.883-2.344-6.328-2.344-3.469 0-5.977 2.344-6.328 2.344-0.562 0-3.961-3.375-3.961-3.938 0-0.211 0.094-0.398 0.234-0.539 2.508-2.484 6.586-3.867 10.055-3.867s7.547 1.383 10.055 3.867c0.141 0.141 0.234 0.328 0.234 0.539 0 0.562-3.398 3.938-3.961 3.938zM36.727 22.969c-0.187 0-0.398-0.094-0.539-0.187-3.867-3-7.125-4.781-12.188-4.781-7.078 0-12.469 4.969-12.727 4.969-0.539 0-3.914-3.375-3.914-3.938 0-0.187 0.094-0.375 0.234-0.516 4.195-4.195 10.523-6.516 16.406-6.516s12.211 2.32 16.406 6.516c0.141 0.141 0.234 0.328 0.234 0.516 0 0.562-3.375 3.938-3.914 3.938zM43.078 16.617c-0.187 0-0.375-0.094-0.516-0.211-5.414-4.758-11.25-7.406-18.562-7.406s-13.148 2.648-18.562 7.406c-0.141 0.117-0.328 0.211-0.516 0.211-0.539 0-3.938-3.375-3.938-3.937 0-0.211 0.094-0.398 0.234-0.539 5.93-5.883 14.484-9.141 22.781-9.141s16.852 3.258 22.781 9.141c0.141 0.141 0.234 0.328 0.234 0.539 0 0.562-3.398 3.938-3.938 3.938z"></path>
					</svg>
				</div>
				<div class="icon-browser">
					<!-- Generated by IcoMoon.io -->
					<svg class="ok" version="1.1" xmlns="http://www.w3.org/2000/svg" width="30" height="42" viewBox="0 0 30 42">
						<title>odnoklassniki</title>
						<path fill="#262626" d="M15 21.258c-5.859 0-10.641-4.758-10.641-10.617 0-5.883 4.781-10.641 10.641-10.641s10.641 4.758 10.641 10.641c0 5.859-4.781 10.617-10.641 10.617zM15 5.391c-2.883 0-5.227 2.344-5.227 5.25 0 2.883 2.344 5.227 5.227 5.227s5.227-2.344 5.227-5.227c0-2.906-2.344-5.25-5.227-5.25zM27.258 22.547c1.031 2.109-0.141 3.117-2.812 4.852-2.25 1.43-5.344 1.992-7.383 2.203l1.711 1.688 6.258 6.258c0.937 0.961 0.937 2.508 0 3.445l-0.281 0.305c-0.961 0.937-2.508 0.937-3.469 0-1.57-1.594-3.867-3.891-6.258-6.281l-6.258 6.281c-0.961 0.937-2.508 0.937-3.445 0l-0.281-0.305c-0.961-0.937-0.961-2.484 0-3.445 1.594-1.594 3.867-3.891 6.258-6.258l1.688-1.688c-2.016-0.211-5.156-0.75-7.43-2.203-2.672-1.734-3.844-2.742-2.812-4.852 0.609-1.195 2.273-2.203 4.477-0.469 0 0 2.977 2.367 7.781 2.367s7.781-2.367 7.781-2.367c2.203-1.734 3.867-0.727 4.477 0.469z"></path>
					</svg>
				</div>
				<div class="icon-video">
					<!-- Generated by IcoMoon.io -->
					<svg class="chart" version="1.1" xmlns="http://www.w3.org/2000/svg" width="48" height="42" viewBox="0 0 48 42">
						<title>line-chart</title>
						<path fill="#262626" d="M48 36v3h-48v-36h3v33h45zM45 6.75v10.195c0 0.656-0.797 1.008-1.289 0.516l-2.836-2.836-14.836 14.836c-0.305 0.305-0.773 0.305-1.078 0l-5.461-5.461-9.75 9.75-4.5-4.5 13.711-13.711c0.305-0.305 0.773-0.305 1.078 0l5.461 5.461 10.875-10.875-2.836-2.836c-0.492-0.492-0.141-1.289 0.516-1.289h10.195c0.422 0 0.75 0.328 0.75 0.75z"></path>
					</svg>
				</div>
				</div>

				<div class="blurb">
					<p> <strong> How will any fired vehicle stick each designer? </strong> Will the painted ingredient triumph over a tasteless revenge? When can the manifesto represent the competitor? A disgusting dance disorders the wrath against a factual industry. The coal volunteers over the substitute bird. The continuous novel decides on top of the prayer.How will any fired vehicle stick each designer? </strong> Will the painted ingredient triumph over a tasteless revenge? When can the manifesto represent the competitor? A disgusting dance disorders the wrath against a factual industry. The coal volunteers over the substitute bird. The continuous novel decides on top of the prayer.How will any fired vehicle stick each designer? </strong> Will the painted ingredient triumph over a tasteless revenge? When can the manifesto represent the competitor? A disgusting dance disorders the wrath against a factual industry. The coal volunteers over the substitute bird. The continuous novel decides on top of the prayer.</p>
				</div>
			</div>
			
			<div class="about2">
			<h3 class="skills">Our Skills</h3>
			<div class="skill-lockup">

				<div class="skill-unit">
					<div class="skill-label">Web Development</div>
					<div class="skill-icons skill-9">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>		
				</div>

				<div class="skill-unit">
					<div class="skill-label">Communication</div>
					<div class="skill-icons skill-7">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>		
				</div>

				<div class="skill-unit">
					<div class="skill-label">Software</div>
					<div class="skill-icons skill-9">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>		
				</div>
				<div class="skill-unit">
					<div class="skill-label">Client Satisfaction</div>
					<div class="skill-icons skill-7">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>		
				</div>
				<div class="skill-unit">
					<div class="skill-label">Web Pages Built</div>
					<div class="skill-icons skill-6">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>		
				</div>
				<div class="skill-unit">
					<div class="skill-label">Communication</div>
					<div class="skill-icons skill-7">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>		
				</div>
				<div class="skill-unit">
					<div class="skill-label">Restoration</div>
					<div class="skill-icons skill-8">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>		
				</div>
				<div class="skill-unit">
					<div class="skill-label">Communication</div>
					<div class="skill-icons skill-9">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>		
				</div>
				<div class="skill-unit">
					<div class="skill-label">Communication</div>
					<div class="skill-icons skill-9">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>		
				</div>

			</div>
			</div>

			<div class="testimony">
				<h3 id="clients">Our Clients</h3>
				<!--<div class="client-controls">
					<div class="client-control-prev">
						<span class="prev s1"></span>
						<span class="prev s2"></span>		
					</div>
					<div class="client-control-next">
						<span class="next s3"></span>
						<span class="next s4"></span>
					</div>
				</div>
				<!--<div class="clients-belt">
					<div class="client-unit u1">
						<div class="client-face">
							<img src="face1.jpg" alt="client-face">
							<strong class="client-name">Scott Summers</strong>
							<em class="client-title">Director of Design,Quebec Int.</em>				
						
						</div>
						<div class="client-content">
							<p> <strong> How will any fired vehicle stick each designer? </strong> Will the painted ingredient triumph over a tasteless revenge?  How will any fired vehicle stick each designer? </strong> Will the painted ingredient triumph over a tasteless revenge?  How will any fired vehicle stick each designer? </strong> Will the painted ingredient triumph over a tasteless revenge? </p>
						</div>	
					</div>
					<div class="client-unit u2">
						<div class="client-face">
							<img src="face1.jpg" alt="client-face">
							<strong class="client-name">Scott Summers</strong>
							<em class="client-title">Director of Design,Quebec Int.</em>				
						
						</div>
						<div class="client-content">
							<p> <strong> How will any fired vehicle stick each designer? </strong> Will the painted ingredient triumph over a tasteless revenge? </p>
						</div>	
					</div>
					<div class="client-unit u3">
						<div class="client-face">
							<img src="face1.jpg" alt="client-face">
							<strong class="client-name">Scott Summers</strong>
							<em class="client-title">Director of Design,Quebec Int.</em>				
						
						</div>
						<div class="client-content">
							<p> <strong> How will any fired vehicle stick each designer? </strong> Will the painted ingredient triumph over a tasteless revenge?  How will any fired vehicle stick each designer? </strong> Will the painted ingredient triumph over a tasteless revenge?  How will any fired vehicle stick each designer? </strong> Will the painted ingredient triumph over a tasteless revenge? </p>
						</div>	
					</div>


				</div>-

				<div class="slider">
					<figure>
						<div class="client-unit u1">
						<div class="client-face">
							<img src="face1.jpg" alt="client-face">
							<strong class="client-name">Scott Summers</strong>
							<em class="client-title">Director of Design,Quebec Int.</em>				
						
						</div>
						<div class="client-content">
							<p> <strong> How will any fired vehicle stick each designer? </strong> Will the painted ingredient triumph over a tasteless revenge?  How will any fired vehicle stick each designer? </strong> Will the painted ingredient triumph over a tasteless revenge?  How will any fired vehicle stick each designer? </strong> Will the painted ingredient triumph over a tasteless revenge? </p>
						</div>	
					</div>
					<div class="client-unit u2">
						<div class="client-face">
							<img src="face1.jpg" alt="client-face">
							<strong class="client-name">Scott Summers</strong>
							<em class="client-title">Director of Design,Quebec Int.</em>				
						
						</div>
						<div class="client-content">
							<p> <strong> How will any fired vehicle stick each designer? </strong> Will the painted ingredient triumph over a tasteless revenge? </p>
						</div>	
					</div>

					</figure>
				</div>-->

				<div class="clients-logo slider">
					<div class="client-logo logo1 1 active-client"><img src="walmart.png" alt="client-logo"></div>
					<div class="client-logo logo2"><img src="dura-cloud.png" alt="client-logo"></div>
					<div class="client-logo logo3"><img src="napa.png" alt="client-logo"></div>
					<div class="client-logo logo4"><img src="university.png" alt="client-logo"></div>

					<!--<hr class="hrslider"/>-->
				</div> 
			</div>
			
		
		</section>

		<footer>
			&copy All rights reserved<br/>
			Book Me<br/>
			Look About
			<details>
				<summary>Copyright 1999-2014.</summary>
				<p> - by Refsnes Data. All Rights Reserved.</p>
				<p>All content and graphics on this web site are the property of the company Refsnes Data.</p>
				<p>Seconds you have spent viewing this page so far:
      				<strong id = "soFar">0</strong>
	      		</p>
	      		<p>Coordinates of the mouse.</p>
	      		<p id="demo"></p>
			</details>
			<!--<p>Seconds you have spent viewing this page so far:
      			<strong id = "soFar">0</strong>
      		</p>
      		<p>Clicks on this page so far:
      			<strong id = "soFar1">0</strong>
      		</p>
      		<p >Coordinates of the mouse.</p>
      			<p id="demo"></p>-->
       		
		</footer>
	</body>
	<script type = "text/javascript">
         var seconds = 0;
         var clicks=0;
         function startTimer() 
         {         
         	//document.cookie="name=intro;time= ";
         	//window.setInterval( "updateTime()", 1000 );

         } 
         function updateTime()
         {
            //++seconds;      
            //document.cookie="time="+seconds;          
            //document.getElementById( "soFar" ).innerHTML = seconds;
         } 
         function click()
         {
         	++clicks;
         	document.cookie="clicks="+clicks;          
            document.getElementById( "soFar1" ).innerHTML = clicks;
         }
         function move(e)
         {
         	document.getElementById( "soFar2" ).innerHTML = e.clientX,e.clientY;
         }
         function showCoords(event) {
		    var x = event.clientX;
		    var y = event.clientY;
		    var coords = "X coords: " + x + ", Y coords: " + y;
		    document.getElementById("demo").innerHTML = coords;
		}
      </script>
</html>


<?php }?>





















