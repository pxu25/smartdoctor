<?php
/**************************************************
* add a new patient info into the patient database
***************************************************/
	
	/* connect the patient database */
	require("../share/database.php");
	/* get all of input from the addnewpatient.php */
	$firstname = filter_input(INPUT_POST, 'firstname');
	$lastname = filter_input(INPUT_POST, 'lastname');
	$sex = filter_input(INPUT_POST, 'sex');
	$DOB = filter_input(INPUT_POST, 'DOB');

	$address = filter_input(INPUT_POST, 'address');
	$city = filter_input(INPUT_POST, 'city');
	$state = filter_input(INPUT_POST, 'state');
	$zipcode = filter_input(INPUT_POST, 'zipcode',FILTER_VALIDATE_INT);

	$homephone = filter_input(INPUT_POST, 'homephone');
	$cellphone = filter_input(INPUT_POST, 'cellphone');
	$email = filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL);
	/* sql syntax with placeholder*/
	$sql = "INSERT INTO patients
				(firstName,lastName,DOB,sex,address,city,state,zipcode,homePhone,cellPhone,email) 
		        VALUES 
				(:firstname,:lastname,:DOB,:sex,:address,:city,:state,:zipcode,:homephone,:cellphone,:email)";
	/* prepared statments and bindValue */
	$stmt = $db->prepare($sql);

	$stmt->bindValue(':firstname', $firstname, PDO::PARAM_STR);
	$stmt->bindValue(':lastname', $lastname, PDO::PARAM_STR);
	$stmt->bindValue(':sex', $sex, PDO::PARAM_STR);
	$stmt->bindValue(':DOB', $DOB);

	$stmt->bindValue(':address', $address, PDO::PARAM_STR);
	$stmt->bindValue(':city', $city, PDO::PARAM_STR);
	$stmt->bindValue(':state', $state, PDO::PARAM_STR);
	$stmt->bindValue(':zipcode', $zipcode, PDO::PARAM_INT);
	
	$stmt->bindValue(':homephone', $homephone, PDO::PARAM_STR);
	$stmt->bindValue(':cellphone', $cellphone, PDO::PARAM_STR);
	$stmt->bindValue(':email', $email);
	/* excute */
	if ($stmt->execute() == false) {
		echo "WARNING: error inserting new item<br>";
	}else{
		echo "$lastname, $firstname is added into the database.<br>";
	}

	echo "<a href='../search/inquiry.php'><H4>Go to Search</H4></a>"
?>

