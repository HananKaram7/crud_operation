<!DOCTYPE html>
<html>
<head>
	<title>Partners Registration</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./styles/bootstrap.min.css">
	<link rel="stylesheet" href="./styles/all.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-xl navbar-dark bg-dark">
			<a href="#" class="navbar-brand"><img src="./images/logo3.png" class="ieee-logo" alt="innovation day" class="logo" width="180px;"></a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- Collection of nav links-->
			<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
				<div class="navbar-nav ml-auto">
					<a href="index.html" class="nav-item nav-link" id="active"><span>Home</span></a>
					<a href="crowd.html" class="nav-item nav-link"><span>Crowd</span></a>
					<a href="speakers.html" class="nav-item nav-link"></i><span>Speakers</span></a>
					<a href="workshops.html" class="nav-item nav-link"></i><span>Workshops</span></a>
					<a href="hackathon.html" class="nav-item nav-link"><span>Hackathons</span></a>
					<a href="register.html" class="nav-item nav-link"><span>Registration</span></a>
					<a href="About.html" class="nav-item nav-link"><span>About</span></a>
					<a href="contact.html" class="nav-item nav-link"><span>Contact Us</span></a>
				</div>
			</div>
		</nav>
	</header>
	<div class="container">
		<h4 class="display-10 text-center">Become One Of Our Partners / Sponsors</h4><hr><br>
		<?php if (isset($_GET['error'])) { ?>
		<div class="alert alert-danger" role="alert">
		 <?php echo $_GET['error']; ?>
		 </div>
		<?php } ?>
		<form action="./php/create.php"
		      method="post">
		   <div class="form-group">
		     <label for="company_name">Company Name</label>
		     <input type="text"
		           class="form-control"
		           id="name"
		           name="company_name"
		           value="<?php if(isset($_GET['company_name']))
		                           echo($_GET['company_name']); ?>"
		           placeholder="Enter name">
		   </div>

			 <div class="form-group">
				 <label for="name">Company Brief</label>
				 <input type="text"
							 class="form-control"
							 id="brief"
							 name="company_brief"
							 value="<?php if(isset($_GET['company_brief']))
															 echo($_GET['company_brief']); ?>"
							 placeholder="Add More Info About Your Company">
			 </div>

			 <div class="form-group">
				 <label for="name">Company URL</label>
				 <input type="url"
							 class="form-control"
							 id="brief"
							 name="company_url"
							 value="<?php if(isset($_GET['company_url']))
															 echo($_GET['company_url']); ?>"
							 placeholder="Add Your Company URL">
			 </div>

			 <div class="">
				 <label for="packages">Please Select Your Package</label>
				 <div class="form-check">
  			  <input class="form-check-input" type="radio" name="package_type" id="main_partner"
					 value="Main Partner">
  			  <label class="form-check-label" for="main_partner">
  			    Main Partner
  			  </label>
  			</div>
  			<div class="form-check">
  			  <input class="form-check-input" type="radio" name="package_type" id="content_partner"
					value="Content Partner">
  			  <label class="form-check-label" for="content_partner">
  			    Content Partner
  			  </label>
  			</div>
  			<div class="form-check">
  			  <input class="form-check-input" type="radio" name="package_type" id="media_partner"
					value="Media Partner">
  			  <label class="form-check-label" for="media_partner">
  			    Media Partner
  			  </label>
  			</div>
  			<div class="form-check">
  			  <input class="form-check-input" type="radio" name="package_type" id="community_partner"
					value="community Partner">
  			  <label class="form-check-label" for="community_partner">
  			    Community Partner
  			  </label>
  			</div>
  			<div class="form-check">
  			  <input class="form-check-input" type="radio" name="package_type" id="employment_partner"
					value="Employment Partner" >
  			  <label class="form-check-label" for="employment_partner">
  			    Employment Partner
  			  </label>
  			</div>
  			<div class="form-check">
  			  <input class="form-check-input" type="radio" name="package_type" id="main_sponspr"
					value="Main Sponsor" >
  			  <label class="form-check-label" for="main_sponspr">
  			    Main Sponsor
  			  </label>
  			</div>
  			<div class="form-check">
  			  <input class="form-check-input" type="radio" name="package_type" id="golden_sponspr"
					value="Golden Sponsor">
  			  <label class="form-check-label" for="golden_sponspr">
  			    Golden Sponsor
  			  </label>
  			</div>
  			<div class="form-check">
  			  <input class="form-check-input" type="radio" name="package_type" id="selver_sponspr"
					value="Silver Partner">
  			  <label class="form-check-label" for="selver_sponspr">
  			    Silver Sponsor
  			  </label> <br> <br>
  			</div>
			 </div>

			 <div class="form-group">
		     <label for="rep_name">Company Representative Name</label>
		     <input type="text"
		           class="form-control"
		           id="rep_name"
		           name="rep_name"
		           value="<?php if(isset($_GET['rep_name']))
		                           echo($_GET['rep_name']); ?>"
		           placeholder="Enter Your Representative Name">
		   </div>

		   <div class="form-group">
		     <label for="rep_email">Company Representative Email</label>
		     <input type="email"
		           class="form-control"
		           id="rep_email"
		           name="rep_email"
		           value="<?php if(isset($_GET['rep_email']))
		                           echo($_GET['rep_email']); ?>"
		           placeholder="Enter Your Representative Email">
		   </div>

			 <div class="form-group">
		     <label for="rep_phone">Company Representative Phone Number</label>
		     <input type="text"
		           class="form-control"
		           id="rep_phone"
		           name="rep_phone"
		           value="<?php if(isset($_GET['rep_phone']))
		                           echo($_GET['rep_phone']); ?>"
		           placeholder="Enter Your Representative Phone Number">
		   </div>
			 <div class="form-group">
				 <label for="booth_supplies">What Supplies Do You Need For Your Booth?</label>
				 <input type="text"
							 class="form-control"
							 id="booth_supplies"
							 name="booth_supplies"
							 value="<?php if(isset($_GET['booth_supplies']))
															 echo($_GET['booth_supplies']); ?>"
							 placeholder="Add The Supplies You Need">
			 </div>
			 <div class="form-group">
				 <label for="booth_supplies">What Stuff Will You Bring For Your Booth?</label>
				 <input type="text"
							 class="form-control"
							 id="booth_stuff"
							 name="booth_stuff"
							 value="<?php if(isset($_GET['booth_stuff']))
															 echo($_GET['booth_stuff']); ?>"
							 placeholder="Add The Stuff You'll Bring'">
			 </div>
			 <div class="form-group">
				 <label for="booth_supplies">Add Your Comment</label>
				 <input type="text"
							 class="form-control"
							 id="comment"
							 name="comment"
							 value="<?php if(isset($_GET['comment']))
															 echo($_GET['comment']); ?>"
							 placeholder="If You Need To Add Something'">
			 </div>
		   <button type="submit"
		          class="btn btn-primary"
		          name="submit">Submit</button>
		    <!-- <a href="read.php" class="link-primary">View</a> -->
	    </form>
	</div>
	<footer>
	  <div class="footer">
	    <div>
	      <h2 style="font-family:'viga'; font-size: 22px; color:var(--red); font-weight:500;">Innovation Day</h2>
	      <p>A series of integrated hackathons from idea to MVP to
	         product, a three days of providing all facilities to
	         the attendees also providing mentors, workshops and
	         sessions. Innovation Day Hackathon is a unique event style that provide the value of awareness of technology to the mass and also to raise the awareness of entrepreneurship to help to launch startups and help  motivated youth to start their own businesses, We have skilled and talented youth and it’s our time to motivate and lead them to make their ideas come true. Also the hackathon is a great opportunity for ideation and finding innovative solutions for community problems.
	        The final day is a one day event with all activities
	        of 10 talks in business technology and design featuring
	        the new technologies and opportunities, panel
	        discussions about investment opportunities in Upper
	        Egypt, startup exhibition for 40 startups from Upper
	        Egypt, and startup pitching competition for the best
	        10 startups
	  </p>
	    </div>
	    <div class="quick">
	      <h2 style="font-family:'viga'; font-size: 22px; color:var(--red); font-weight:500;">Quick Links</h2>
	      <a href="">Startups Registration</a>
	      <a href="">Partners Registration</a>
	      <a href="">Hackathon Registration</a>
	      <a href="">Speakers Registration</a>
	      <a href="">Attendees Registration</a>
	      <a href="">Workshops Registration</a>
	    </div>
	    <div class="">
	      <h3 style="font-family:'viga'; font-size: 22px;color:var(--red); font-weight:500;">Follow Us...</h3>
	      <a href="https://www.facebook.com/events/904737229734041/" target="_blank">
	        <img src="./images/fb.png" alt="facebook logo" width="30px">
	      </a>
	      <a href="https://twitter.com/IEEEMUSB" target="_blank">
	        <img src="./images/twetter.png" alt="twetter logo" width="20px">
	      </a>
	      <a href="https://www.youtube.com/user/IEEEMUSB" target="_blank">
	        <img src="./images/insta.png" alt="instagram logo" width="20px">
	      </a>
	      <a href="https://www.youtube.com/user/IEEEMUSB" target="_blank">
	        <img src="./images/youtube.png" alt="youtube" width="20px">
	      </a>
	      <br>
	      <h3 style="font-family:'viga'; font-size: 22px;color:var(--red); font-weight:500;">Contact Us</h3>
	      <span>halim@innovationday.com</span> <br>
	      <span>01007397235</span>
	    </div>
	  </div>
	  <div class="copy">
	  &copy; Innovation Day Team - 2021</div>
	</footer>
	<script
	src="https://code.jquery.com/jquery-3.5.1.js"
	integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
	crossorigin="anonymous">
	</script>
</body>
</html>
