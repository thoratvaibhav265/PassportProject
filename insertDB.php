<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        $id = $_POST['id'];
		$name = $_POST['name'];
		$dob =$_POST['dob'];
		$gender = $_POST['gender'];
		$country = $_POST['country'];
		$sc = $_POST['sc'];	
        $email = $_POST['email'];
        $address = $_POST['address'];
        $mobile = $_POST['mobile'];
        $image = $_POST['image'];


        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO usertable (name,rid,gender,email,mobile,dob,country,state,photo,address) values(?, ?, ?, ?, ?, ?,?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($name,$id,$gender,$email,$mobile,$dob,$country,$sc,$image,$address));
		Database::disconnect();
		header("Location: user data.php");
    }
?>