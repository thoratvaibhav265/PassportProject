<?php
    require 'database.php';
 
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $name = $_POST['name'];
		$id = $_POST['id'];
		$gender = $_POST['gender'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $country= $_POST['country'];
        $dob= $_POST['dob'];
        $cs= $_POST['cs'];
        $address= $_POST['address'];


        
         
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE usertable  set name = ?, gender =?, email =?, mobile =? ,country=?,dob=?,country=?,cs=?,address=? WHERE id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($name,$gender,$email,$mobile,$$country,$dob,$cs,$address,$id));
		Database::disconnect();
		header("Location: user data.php");
    }
?>