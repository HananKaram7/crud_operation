<?php

if (isset($_GET['id'])) {
	include "../db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM partners WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: read.php");
    }


}else if(isset($_POST['update'])){
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


	$sql = "UPDATE partners
					SET company_name='$company_name', company_brief='$company_brief',
							company_url='$company_url', package_type='$package_type',
							rep_name='$rep_name', rep_email='$rep_email',
							rep_phone='$rep_phone', needed_supplies='$needed_supplies',
							booth_stuff='$booth_stuff', comment='$comment'
					WHERE id=$id ";
	$result = mysqli_query($conn, $sql);

// 	if (empty($name)) {
// 		header("Location: ../update.php?id=$id&error=Name is required");
// 	}else if (empty($email)) {
// 		header("Location: ../update.php?id=$id&error=Email is required");
// 	}else {
//
//        $sql = "UPDATE partners
//                SET name='$name', email='$email'
//                WHERE id=$id ";
//        $result = mysqli_query($conn, $sql);
//        if ($result) {
//        	  header("Location: ../read.php?success=successfully updated");
//        }else {
//           header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
//        }
// 	}
// }else {
// 	header("Location: read.php");
// }
