

<?php
if (isset($_POST['submit'])) {
	include "../db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}
	$company_name = validate($_POST['company_name']);
	$company_brief = validate($_POST['company_brief']);
	$company_url = validate($_POST['company_url']);
	$package_type = validate($_POST['package_type']);
	$rep_name = validate($_POST['rep_name']);
	$rep_email = validate($_POST['rep_email']);
	$rep_phone = validate($_POST['rep_phone']);
	$needed_supplies = validate($_POST['booth_supplies']);
	$booth_stuff = validate($_POST['booth_stuff']);
	$comment = validate($_POST['comment']);
	$id = validate($_POST['id']);

	$sql = "INSERT INTO partners(company_name, company_brief, company_url, package_type, rep_name,
	rep_email, rep_phone, needed_supplies, booth_stuff, comment)
					VALUES('$company_name', '$company_brief', '$company_url', '$package_type', '$rep_name',
					'$rep_email', '$rep_phone', '$needed_supplies', '$booth_stuff', '$comment')";
	$result = mysqli_query($conn, $sql);
	}
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Partners Data</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="../styles-read.css">
	</head>
	<body>
		<div class="container">
			<div class="card" style="width: 800px;">
		  <div class="card-body">
		    <h2 class="card-title">Welcome To Innovation Day</h5>
		    <p class="card-text">
					Thank you for your interest in Innovation Day <br>
					Your application has been submitted successfully.<br>
					Please check your email for further updates <br>
					<span>Innovation Day Team</span>
				</p>
		    <a href="../index.php" class="card-link">Submit Another Response!</a>
		  </div>
		</div>
		</div>
	</body>
	</html>
