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

<p><strong>Gender</strong></p>
<form action="wlcome.php" method="POST"><fieldset>
  <input type="radio" id="Male" name="Male">
  <legend><label for="Male">Male</label></legend>
  <input type="radio" id="Female" name="Female">
  <legend><label for="Female">Female</label></legend>
  <input type="radio" id="Other" name="Other" >
  <legend><label for="other">Other</label></legend>
  </fieldset>
</form>
  
       if(!empty($_POST["degree"])){
    $countDegree = count($_POST["degree"]);
    if($countDegree<2){
      $degreeErr = "At least two of them must be selected";
    }
  }else{
     $degreeErr = "At least two of them must be selected";
  }

  if (empty($_POST["blood"])) {
      $bloodErr = "Must be selected";
    } else {
      $blood = test_input($_POST["blood"]);
    }    

</body>
</html>