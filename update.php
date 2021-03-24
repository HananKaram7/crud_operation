<?php include './update.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Partner</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		  <h4 class="display-10 text-center">Update Partners / Sponsors Data</h4><hr><br>
		<form action="php/update.php"
		      method="post">
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
			 <div class="form-group">
		     <label for="company_name">Company Name</label>
		     <input type="text"
		           class="form-control"
		           id="name"
		           name="company_name"
		           value="<?=$row['company_name'] ?>">
		   </div>

			 <div class="form-group">
				 <label for="name">Company Brief</label>
				 <input type="text"
							 class="form-control"
							 id="brief"
							 name="company_brief"
							  value="<?=$row['company_brief'] ?>">
			 </div>

			 <div class="form-group">
				 <label for="name">Company URL</label>
				 <input type="url"
							 class="form-control"
							 id="brief"
							 name="company_url"
							 value="<?=$row['company_url'] ?>">
			 </div>

			 <div class="">
				 <label for="packages">Please Select Your Package</label>
				 <div class="form-check">
  			  <input class="form-check-input" type="radio" name="package_type" id="main_partner" checked
					value="<?=$row['package_type'] ?>">
  			  <label class="form-check-label" for="main_partner">
  			    Main Partner
  			  </label>
  			</div>
  			<div class="form-check">
  			  <input class="form-check-input" type="radio" name="package_type" id="content_partner"
					value="<?=$row['package_type'] ?>">
  			  <label class="form-check-label" for="content_partner">
  			    Content Partner
  			  </label>
  			</div>
  			<div class="form-check">
  			  <input class="form-check-input" type="radio" name="package_type" id="media_partner"
					value="<?=$row['package_type'] ?>">
  			  <label class="form-check-label" for="media_partner">
  			    Media Partner
  			  </label>
  			</div>
  			<div class="form-check">
  			  <input class="form-check-input" type="radio" name="package_type" id="community_partner"
					value="<?=$row['package_type'] ?>">
  			  <label class="form-check-label" for="community_partner">
  			    Community Partner
  			  </label>
  			</div>
  			<div class="form-check">
  			  <input class="form-check-input" type="radio" name="package_type" id="employment_partner"
					value="<?=$row['package_type'] ?>">
  			  <label class="form-check-label" for="employment_partner">
  			    Employment Partner
  			  </label>
  			</div>
  			<div class="form-check">
  			  <input class="form-check-input" type="radio" name="package_type" id="main_sponspr"
					value="<?=$row['package_type'] ?>">
  			  <label class="form-check-label" for="main_sponspr">
  			    Main Sponsor
  			  </label>
  			</div>
  			<div class="form-check">
  			  <input class="form-check-input" type="radio" name="package_type" id="golden_sponspr"
					value="<?=$row['package_type'] ?>">
  			  <label class="form-check-label" for="golden_sponspr">
  			    Golden Sponsor
  			  </label>
  			</div>
  			<div class="form-check">
  			  <input class="form-check-input" type="radio" name="package_type" id="selver_sponspr"
					value="<?=$row['package_type'] ?>" >
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
		           value="<?=$row['rep_name'] ?>">
		   </div>

		   <div class="form-group">
		     <label for="rep_email">Company Representative Email</label>
		     <input type="email"
		           class="form-control"
		           id="rep_email"
		           name="rep_email"
		           value="<?=$row['rep_email'] ?>">
		   </div>

			 <div class="form-group">
		     <label for="rep_phone">Company Representative Phone Number</label>
		     <input type="text"
		           class="form-control"
		           id="rep_phone"
		           name="rep_phone"
		           value="<?=$row['rep_phone'] ?>">
		   </div>
			 <div class="form-group">
				 <label for="booth_supplies">What Supplies Do You Need For Your Booth?</label>
				 <input type="text"
							 class="form-control"
							 id="booth_supplies"
							 name="booth_supplies"
							 value="<?=$row['booth_supplies'] ?>">
			 </div>
			 <div class="form-group">
				 <label for="booth_stuff">What Stuff Will You Bring For Your Booth?</label>
				 <input type="text"
							 class="form-control"
							 id="booth_stuff"
							 name="booth_stuff"
							 value="<?=$row['booth_stuff'] ?>">
			 </div>
			 <div class="form-group">
				 <label for="booth_supplies">Add Your Comment</label>
				 <input type="text"
							 class="form-control"
							 id="comment"
							 name="comment"
							 value="<?=$row['comment'] ?>">
			 </div>

		   <button type="submit"
		           class="btn btn-primary"
		           name="update">Update</button>
		    <a href="read.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>
