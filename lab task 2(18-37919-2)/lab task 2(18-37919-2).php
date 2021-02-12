<!DOCTYPE html>
<html>
<head>
<style type="text/css"></style>

<form action="wlcome.php" method="POST"><fieldset>
<legend>Name:</legend><input type="text" name="name"><br>
<input type="submit">
</fieldset>
</form><br>

<form action="wlcome.php" method="POST"><fieldset>
<legend>Email:</legend><input type="text" email="email"><br>
<input type="submit">
</fieldset>
</form><br>

<form action="wlcome.php" method="POST"><fieldset>
<legend>Gender</legend>
 <legend> <input type="radio" id="Male" name="Male">
 <label for="Male">Male</label>
<input type="radio" id="Female" name="Female">
 <label for="Female">Female</label>
 <input type="radio" id="Other" name="Other" >
<label for="other">Other</label></legend>
<input type="submit">
   
  </fieldset>
</form><br>


<form action="wlcome.php" method="POST"><fieldset>
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
  
<?php
if(!empty($_POST["degree"])){
    $countDegree = count($_POST["degree"]);
    if($countDegree<2){
      $degreeErr = "At least two of them must be selected";
    }
  }else{
     $degreeErr = "At least two of them must be selected";
  }
?>
  <input type="submit">

</fieldset>
</form> 


 <form action="wlcome.php" method="POST"><fieldset>
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
   <?php
    if (empty($_POST["Blood Group"])) {
      $bloodErr = "Must be selected";
    } else {
      $blood = test_input($_POST["Blood Group"]);
    }    
    ?>
    <br>
<input type="submit"><br>
  </select>
  </fieldset>
</form>
       
 
</body>
</html>
