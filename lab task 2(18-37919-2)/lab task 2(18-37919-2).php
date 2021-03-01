<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }    
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if(!empty($_POST["degree"])){
    $countDegree = count($_POST["degree"]);
    if($countDegree<2){
      $degreeErr = "At least two of them must be selected";
    }
  }else{
     $degreeErr = "At least two of them must be selected";
  }
  if (empty($_POST["Blood Group"])) {
      $bloodErr = "Must be selected";
    } else {
      $blood = test_input($_POST["Blood Group"]);
    }    
}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Assesment Task</h2><fieldset>
<p><span class="error">* Required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><br>
 <fieldset>
  <legend>Name:</legend> <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span><br>
  <input type="submit"><br>
  </fieldset>
  <br><br>
  <fieldset><legend>E-mail:</legend> <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><input type="submit">
</fieldset>
  <br>

 
<fieldset>
<legend>Gender</legend>
 <legend> <input type="radio" id="Male" name="Male">
 <label for="Male">Male</label>
<input type="radio" id="Female" name="Female">
 <label for="Female">Female</label>
 <input type="radio" id="Other" name="Other" >
<label for="other">Other</label></legend>
 <span class="error">* <?php echo $genderErr;?></span><br>
<input type="submit">
   
  </fieldset><br>

  <fieldset>
<form action="/action_page.php">
  <legend>DEGREE</legend>

  <legend><input type="checkbox" id="Additional info1" name="Additional info1">
  <label for="contact1"> SSC </label>
  <input type="checkbox" id="contact2" name="Additional info2">
  <label for="Additional info2"> HSC</label>
  <input type="checkbox" id="Additional info3" name="Additional info3d">
  <label for="Additional info3"> BSc</label>
   <input type="checkbox" id="Additional info3" name="Additional info3d">
  <label for="Additional info3"> MSc</label></legend>
  <span class="error">* <?php echo $degreeErr;?></span><br>
  <input type="submit">
</fieldset><br>


<fieldset>
<legend>Blood Group</legend>
 <label for="Blood Group">Blood Group</label>
  <select id="Blood Group" name="Blood Group">
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <span class="error">* <?php echo $bloodErr;?></span>
    <input type="submit">
    <br>
  </select>
  </fieldset>
  </fieldset>
</form>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>
