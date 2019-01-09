<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Inquiry form</title>
  <link rel="icon" type="image/x-icon" href="../image/sd-logo.ico">
  <link rel="stylesheet" type="text/css" href="../css/site.css">
</head>

<body background="../image/Family-Beach1.jpg">
    <div class="navbar">
      <a href="../index.html">Home</a>
      <a href="../share/contactus.html">Contact Us</a>
      <div class="dropdown">
        <button class="dropbtn">Services 
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
        <a href="inquiry.php">Search Patient</a>
        <a href="../newpatient/newpatient.html">Add a New Patient</a>
        <a href="#">Disease Prediction</a>
        </div>
      </div> 
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <span id="searchform">Search Patient</span>
    
      <br>
      <br>
      <form class="form-individual" action="results.php" method="post">
        <label for="firstname">First Name &nbsp&nbsp</label>
        <input type="text" name="firstname" id="name" required>
        <br>

        <label for="lastname"> Last  Name &nbsp&nbsp</label>
        <input type="text" name="lastname" id='lastname' required>
        <br>

       <input type="submit" name="submit" value="search">
       <input type="reset"  name="reset"  value="reset">
      </form>
     
      <br>
      <br>

  

  
   <footer>
      <p> &copy; Peng Xu 2018  &nbsp&nbsp
        <a href="https://github.com/pxu25" target="_blank" title="myGithub">
			    <img src="../image/GitHub-Mark-120px-plus.png" alt="github.com/pxu25"
			      width="30" height="30"> 
      </p>
    </footer>

  </body>
</html>
