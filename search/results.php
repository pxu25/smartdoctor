<!DOCTYPE HTML>
  <?php 
    require '../share/database.php';
  ?>
<html lang="en">

  
<head>
  <meta charset="utf-8">
  <title>Inquiry results</title>
  <link rel="icon" type="image/x-icon" href="../image/sd-logo.ico">
  <link rel="stylesheet" type="text/css" href="../css/site.css">
</head>

<body>
  <div class="navbar">
    <a href="../index.html">Home</a>
    <a href="../share/contactus.html">Contact Us</a>
    <div class="dropdown">
        <button class="dropbtn">Services<i class="fa fa-caret-down"></i></button>
    <div class="dropdown-content">
      <a href="inquiry.php">Search Patient</a>
      <a href="../newpatient/newpatient.html">Add a New Patient</a>
      <a href="#">Disease Prediction</a>
    </div>
    </div> 
    </div>
  <div id="inquiry_variable">
      <?php
      $firstName = filter_input(INPUT_POST, 'firstname');
      if ($firstName === NULL || $firstName === false) {
        echo "<p class='warning'>Invalid First Name</p>";
        unset($firstName);
      }elseif (strlen($firstName)> 50) {
        echo "<p class='warning'>Name is too long</p>";
        unset($firstName);
      }
      
      $lastName  = filter_input(INPUT_POST, 'lastname');
      if ($lastName === NULL || $lastName === false) {
        echo "<p class='warning'>Invalid Last Name</p>";
        unset($lastName);
      }elseif (strlen($lastName) > 50) {
        echo "<p class='warning'>Name is too long</p>";
        unset($lastName);
      }
      ?>
      </div>
      
      <span class="report"><h3><?php echo "$lastName, $firstName Results:"?></h3></span>

      <div id="sql-id">
      <?php
        $sql = "select patient_id,firstName,lastName,sex,DOB,city,state,zipcode,homePhone,email from patients where firstName = :firstname AND lastName = :lastname";

        $stmt = $db->prepare($sql);

        $stmt->bindValue(':firstname', $firstName, PDO::PARAM_STR);
        $stmt->bindValue(':lastname',  $lastName , PDO::PARAM_STR);
        
        $stmt ->execute();
        $results = $stmt->fetchAll();
        $stmt->closeCursor();
        
        
        if (empty($results[0])) {
          echo "<h4>$lastName, $firstName</h4> is not found in our database.<br>
          Add their info into our database<br><br><br>";
          echo "<a href='../newpatient/newpatient.html'><h3>Add a new patient</h3></a>";
      	} else {
          foreach($results as $row){
            $id = $row['patient_id'];
            include 'individual-ID-table.php';
            include 'lipid.php';
            include 'heart-report.php';
            $id = $row['patient_id'];
          }
        }
      ?>
      </div>


  <footer>
      <p> &copy;Peng Xu 2018  &nbsp&nbsp
        <a href="https://github.com/pxu25" target="_blank" title="myGithub">
			    <img src="../image/GitHub-Mark-120px-plus.png" alt="github.com/pxu25"
			      width="30" height="30"> 
      </p>
    </footer>

  
</body>
</html>