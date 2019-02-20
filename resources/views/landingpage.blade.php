<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Build-Systems</title>
        <base href="http://127.0.0.1:8000/">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="/CSS/landingpage.css" rel="stylesheet" type="text/css">
        <link href="/CSS/build.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <script src="/bootstrap/js/bootstrap.min.js" type="text/JavaScript"></script>
        <!-- JQuery -->
        <script src="/js/jquery-3.2.1.min(first).js" type='text/JavaScript'></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- Styles -->
</head>
<body>
        <div>
        	<div class="row header">
        		<div class="col-4-sm">
        			<i></i>
        		</div>
        		<div class="col-4-sm">
        			<ul>
	        			<li>Build System</li>
	        			<li>Tools</li>
	        			<li>Announcement</li>
	        			<li>Contact</li>
        		    </ul>
        		</div>
        	</div>
        	<div class="row headBanner" style="background-image: url({{ asset('/storage/images/buildsystempix.jpg') }});">
        		<div class="col-12-sm subBanner">
		        		<ul id="subHeadNavigation">
		        			<li id="buildlist">Contact</li>
		        			<li>Announcement</li>
		        			<li>Tools</li>
		        			<li>Build System</li>
		        		</ul>

		        		<h1 id="firstTitle">Build Systems Inc.</h1>
		        		<h1>Automate Systems,</h1>
		        		<p>Design, Automate and Impliment any industrial or <br> business process. Whatever task your organisation <br> do everyday in a repetitive manner, we will automate it with <br> algorithms to foster greater productivity in your endeavours</p>
		        		<button>Contact</button>
        		</div>
        	</div>
        	<div class="howWeAutomateProcess">
        		<h2>How We Automate Processes??</h2>
        	</div>
        	<div class="row theHow">
        		<div class="col-sm-4">
        			<div class="content">
        				<i class="fas fa-pen icon"></i>
        				<p class="design">Design Systems</p>
        				<p class="description">This first stage is were we work in sync with clients to develop detailed documents of the activities our clients do in their organisations. we study and come up with a flow diagram of the activities.</p>
        			</div>
        		</div>
        		<div class="col-sm-4">
        			<div class="content">
        				<i class="fa fa-cog icon"></i>
        				<p class="design">Automate Proceesses</p>
        				<p class="description">The design stage is followed by choosing technology stacks/framework and using the technologies to write algorithms for automation of the processes detailed in the design stage.
                                        </p>
        			</div>
        		</div>
        		<div class="col-sm-4">
        			<div class="content">
        				<i class="fa fa-cloud icon"></i>
        				<p class="design">Implimentation</p>
        				<p class="description">The final stage, this is were the finished products are tested and deployed to the nessary environments or machines for consumption.</p>
        			</div>
        		</div>
        	</div>
        	<div class="row partners">

        	</div>
					<div class="product_cover">
						<h2>Tool Set</h2>
						 <div class="eachContainer">
								 <div class="product_image" style="background-image: url({{ asset('/storage/images/java.jng') }});">

								 </div>
								 <h5>Java</h5>
								 <ul>
									<li>Spring Boot, Spring MVC</li>
									<li>JDBC,JPA, thymeleaf</li>
									<li>Oracle DB, MySQL</li>
									<li>Maven, Gradule</li>
								 </ul>
						 </div>

						 <div class="eachContainer">
								 <div class="product_image" style="background-image: url({{ asset('/storage/images/C#.jng') }});">

								 </div>
								 <h5>C#</h5>
								 <ul>
									 <li>ASP.NET MVC</li>
									 <li>ASP.NET CORE</li>
									 <li>MSSQL</li>
									 <li>Razor</li>
								 </ul>
						 </div>

						 <div class="eachContainer">
								 <div class="product_image" style="background-image: url({{ asset('/storage/images/android.png') }});">

								 </div>
								 <h5>Android</h5>
								 <ul>
									<li>Java, Kotlin</li>
									<li>Maven, Gradle</li>
									<li>SQLite, Mobile UX</li>
									<li>third party Library</li>
								 </ul>
						 </div>

						 <div class="eachContainer">
								<div class="product_image" style="background-image: url({{ asset('/storage/images/ios.jpg') }});">

								</div>
								<h5>iOS</h5>
								<ul>
								 <li>Objective C, Swift</li>
								</ul>
						</div>

						<div class="eachContainer">
								<div class="product_image" style="background-image: url({{ asset('/storage/images/php.jpg') }});">

								</div>
								<h5>Php</h5>
								<ul>
								 <li>Laravel</li>
								 <li>Cake Php</li>
								 <li>MySQL, Phpmyadmin</li>
								</ul>
						</div>

						<div class="eachContainer">
								<div class="product_image" style="background-image: url({{ asset('/storage/images/node.png') }});">

								</div>
								<h5>NodeJS</h5>
								<ul>
								 <li>JavaScript</li>
								 <li>EcmaScript 6</li>
								 <li>ExpressJS</li>
								</ul>
						</div>

						<div class="eachContainer">
								<div class="product_image" style="background-image: url({{ asset('/storage/images/mern.jpeg') }});">

								</div>
								<h5>MERN Stack</h5>
								<ul>
								 <li>MongoDB</li>
								 <li>ExpressJS</li>
								 <li>ReactJS</li>
								 <li>NodeJS</li>
								</ul>
						</div>

						<div class="eachContainer">
								<div class="product_image" style="background-image: url({{ asset('/storage/images/mean.jpeg') }});">

								</div>
								<h5>MEAN</h5>
								<ul>
								 <li>MongoDB</li>
								 <li>AngularJS</li>
								 <li>ExpressJS</li>
								 <li>NodeJS</li>
								</ul>
						</div>

						<div class="eachContainer">
								<div class="product_image" style="background-image: url({{ asset('/storage/images/cloud.jpeg') }});">

								</div>
								<h5>Cloud Deployment</h5>
								<ul>
								 <li>AWS</li>
								 <li>Microsoft Azure</li>
								 <li>Digital Oceans</li>
								 <li>Heroku</li>
								</ul>
						</div>

						<div class="eachContainer">
								<div class="product_image" style="background-image: url({{ asset('/storage/images/virtualbox.jpg') }});">

								</div>
								<h5>Containers</h5>
								<ul>
								 <li>Docker</li>
								 <li>Kubernates</li>
								 <li>Vagrant</li>
								</ul>
						</div>

						<div class="eachContainer">
								<div class="product_image" style="background-image: url({{ asset('/storage/images/ux.png') }});">

								</div>
								<h5>DESIGN</h5>
								<ul>
								 <li>Adobe</li>
								 <li>Illustrator</li>
								 <li>Adobe Effect</li>
								 <li>Sketch</li>
								</ul>
						</div>

						<div class="eachContainer">
								<div class="product_image" style="background-image: url({{ asset('/storage/images/flow.jpeg') }});">

								</div>
								<h5>Work Flow</h5>
								<ul>
								 <li>Git Hub</li>
								 <li>Slack</li>
								 <li>Skype</li>
								 <li>Bit Bucket</li>
								</ul>
						</div>

					</div>
        	<div class="row directors">
        		<h2>Directors</h2>
        	</div>

        	<div class="row ourTeam">
        		<div class="col-sm-4 team">
        			<div id="firstPicture" style="background-image: url({{ asset('/storage/images/effiong.png') }});"></div>
        			<p class="name">Segun Offiong</p>
        			<p class="rank">Chief Strategist/Project Manager</p>
        			<button class="viewProfile">view profile</button>
        		</div>
        		<div class="col-sm-4 team">
        			<div id="secondPicture" style="background-image: url( {{ asset('/storage/images/OdeladeProfile.jpg') }});"></div>
        			<p class="name">Odelade Olatunji</p>
        			<p class="rank">Software Architect (Lead Engineer)</p>
        			<button class="viewProfile">view profile</button>
        		</div>
        		<div class="col-sm-4 team">
        			<div id="thirdPicture" style="background-image: url({{ asset('/storage/images/ife.jpeg') }});"></div>
        			<p class="name">Ayo</p>
        			<p class="rank">Brand Manager/Content Developer</p>
        			<button class="viewProfile">view profile</button>
        		</div>
        	</div>
        	<div class="row aboutUs">
        		<h3>Who We are</h3>
        		<p>Build System is a Nigeria basedICT Company established to deliver superior and innovative High-Tech solutions for both our Offshore and Domestic clients. We offer comprehensive process automation for our corporate clients, SMEs and start-up businesses who are looking for simplified yet effective and innovative ways to run their daily operations.
With our team of highly skilled developer and our partners across the globe, we are determine to contribute our share of innovative technology towards the United Nation (UN) Sustainable Development Goals (SDGs) 2030 Agenda which recognizes the need to develop knowledge-Base societies which frankly highlights the need for access to Information and Communication Technologies (ICTs) in different way to help resolve some of the social-economic challenges faced by different Nation with regards to Agriculture, Transportation, Healthcare, Qualitative Education, Affordable & Accessible Housing, etc.
We are ready each day of the week, 24 hours day to partner with you on any project that requires our professional touch. Our support team is always online to 24/7 to attend to your request whenever the need arises. You can also request for a demo presentation on any of our software solution. Thank you as we look forward to a mutually beneficial working relationship with you.</p>

        		<h3>Our Technology Stack</h3><br>
        		<!-- <h5>Languages Stack</h5> -->
        		<button>Java</button>
        		<button>Python</button>
        		<button>Objective C</button>
        		<button>Swift</button>
        		<button>C#</button>
        		<button>C</button>
						<button>Ruby/Rails</button>
						<button>C++</button>
        		<button>JavaScript</button>
        		<button>ReactJS</button>
        		<button>Spring Boot</button>
        		<button>Spring MVC</button>
        		<button>ASP.net MVC</button>
        		<button>Android</button>
        		<button>Electron</button>
						<button>AngularJS</button>
						<button>ReactJS</button>
        		<button>Php Laravel</button>
        		<button>Aws</button>
        		<button>Linux</button><br><br>
						<button>Docker</button>
						<button>Vagrant</button>
						<button>Adobe Illustrator</button>
						<button>Adobe Photoshop</button>
						<button>Principle</button>
						<button>Sketch</button>
        		<h3 id="lastH3">Resources</h3><br><br>
        		<p>At Build Systems, we pride our-self with our team of High skilled IT professionals in the area of Programming, Data Analytics, Project Management, UI/UX Designing, Digital Marketing, Research & Development (R&D) that are well experienced and devoted to ensuring you get solutions that are second to none anywhere in the world. Each team are fully equipped with an updated robust data base of industry information and smart workstation to give you world-class solution.Our success story has been our team’s ability to deliver and align the best solutions with the client project.Our other resource includes: </p><br>
						<ul class="ourResources_ul">
							<li>24/7 Powered System Support</li>
							<li>Cloud Based Resources </li>
							<li>Firewall Gateway </li>
							<li>Regular Data Backups</li>
							<li>UNIX Base Operation Systems </li>
							<li>Provision of Disaster Recovery</li>
						</ul>
        	</div>
        	<div class="row footer">
        		<form action="">
        			<p>send us a message!</p>
        			<input type="email" placeholder="email" required>
        			<textarea name="" id="" cols="30" rows="10" placeholder="please enter your quest below and we will get back to you" required></textarea>
        			<button>submit!</button>
        		</form>
        	</div>
					<p id="Copyright">Copyright @buildsystems inc 2019</p>
        </div>
</body>
</html>
