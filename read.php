<?php
include "db_conn.php";
$sql = "SELECT * FROM partners ORDER BY id";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Partners Data</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="styles-read.css">
</head>
<body>
	<div class="container">
		<div class="box">
			<h4 class="display-4 text-center">Partners & Sponsor's Data</h4><br>
			<?php if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
			<table class="table table-striped">
			  <thead>
			    <tr>
						<th scope="col">ID</th>
						<th scope="col">Company Name</th>
			      <th scope="col">Company URL</th>
						<th scope="col">Rep Name</th>
			      <th scope="col">Rep Email</th>
						<th scope="col">Rep Phone</th>
			      <th scope="col">Comments</th>

			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
						<td><?php echo $rows['id']; ?></td>
						<td><?php echo $rows['company_name']; ?></td>
						<td><?php echo $rows['company_url']; ?></td>
						<td><?php echo $rows['rep_name']; ?></td>
						<td><?php echo $rows['rep_email']; ?></td>
			      <td><?php echo $rows['rep_phone']; ?></td>
						<td><?php echo $rows['comment']; ?></td>
			      <td><a href="update.php?id=<?=$rows['id']?>"
			      	     class="btn btn-success">Update</a>
			      </td>
						<td><a href="php/delete.php?id=<?=$rows['id']?>"
							 class="btn btn-danger">Delete</a></td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>
			<div class="link-right">
				<a href="index.php" class="link-primary">Add Partner</a>
			</div>
		</div>
	</div>
</body>
</html>
