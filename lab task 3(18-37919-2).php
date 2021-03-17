<!DOCTYPE HTML>  
<html>
  <head>
    <style>
      .error {color: #FF0000;}
    </style>
  </head>
  <body>  
    
   


    <?php
      $usernameErr= $passwordErr= $passwordErr2 = $newpasswordErr= $rpasswordErr= $photoErr = "";
      $username = $password =$password2= $newpassword = "";
      $degree=array();
      
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (isset($_POST["submit2"])) {
          
          
          
          
          
          
          
          
          if($_POST["rnewpassword"]!=$_POST["newpassword"])
          {
            $newpasswordErr = "New Password & Retype New Password not Matched";
          }
          
          else{
            
            $password2 = $_POST["newpassword"];
            // Validate password strength
            $uppercase = preg_match('@[A-Z]@', $password2);
            $lowercase = preg_match('@[a-z]@', $password2);
            $number    = preg_match('@[0-9]@', $password2);
            $specialChars = preg_match('@[^\w]@', $password2);
            
            if (empty($password2)) {
              $passwordErr = "Password is required";
            } 
            
            else if( !$specialChars || strlen($password2) < 8) {
              $passwordErr2 = 'Password should be at least 8 characters and one special character.';
              }else{
              $password2 = $_POST["password"];
            }
            
          }
          
          
          
          
          
        }
        
        if (isset($_POST["submit1"])) {
          
          $password = $_POST["password"];
          // Validate password strength
          $uppercase = preg_match('@[A-Z]@', $password);
          $lowercase = preg_match('@[a-z]@', $password);
          $number    = preg_match('@[0-9]@', $password);
          $specialChars = preg_match('@[^\w]@', $password);
          
          if (empty($password)) {
            $passwordErr = "Password is required";
          } 
          
          else if( !$specialChars || strlen($password) < 8) {
            $passwordErr = 'Password should be at least 8 characters and one special character.';
            }else{
            $password = $_POST["password"];
          }
          
          if (empty($_POST["username"])) {
            $usernameErr = "User Name is required";
          }
          else if(strlen($_POST["username"]) < 2){
            $usernameErr = "User Name must contain at least 2 characters";
          }
          else{
            $username = $_POST["username"];
          }
          
        }
        
        
        
        
        
        
        if (isset($_POST["submit3"])) {
        
          
          $target_dir = "uploads/";
          $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
          $uploadOk = 1;
          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
          
          // Check if image file is a actual image or fake image
          if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
              $photoErr = "File is an image - " . $check["mime"] . ".";
              $uploadOk = 1;
              } else {
              $photoErr = "File is not an image.";
              $uploadOk = 0;
            }
          }
          
          // Check if file already exists
          if (file_exists($target_file)) {
            $photoErr = "Sorry, file already exists.";
            $uploadOk = 0;
          }
          
          // Check file size
          if ($_FILES["fileToUpload"]["size"] > 400000) {
            $photoErr = "Sorry, your file is too large.";
            $uploadOk = 0;
          }
          
          // Allow certain file formats
          if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
          && $imageFileType != "gif" ) {
            $photoErr = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
          }
          
          // Check if $uploadOk is set to 0 by an error
          if ($uploadOk == 0) {
            $photoErr = "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
              $photoErr = '<p style="color:green;">The file '. basename( $_FILES["fileToUpload"]["name"]). ' has been uploaded.</p>';
              } else {
              $photoErr =  "Sorry, there was an error uploading your file.";
            }
          }
          
          
          
          
        }
        
        }
        
    ?>
    
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
      
      
      
      
      <fieldset style="width:320px;height: 170px;">
        
        <legend><b>LOGIN</b></legend>
        <div style="padding:5px;">
          User Name: <input type="text" name="username" value="<?php echo $username;?>">
          <span class="error"><?php echo $usernameErr;?></span>
        </div>
        
        <div style="padding:5px;">
          Password  :&nbsp;&nbsp; <input type="text" name="password" value="<?php echo $password;?>">
          <span class="error"><?php echo $passwordErr;?></span>
        </div>
        
        <hr>
        
        <input type="checkbox" name="remember" value="1">Remember Me
        
        <div style="padding:5px;">
          <input type="submit" name="submit1" value="Submit"> 
          <a href="#">Forgot Password?</a>
          
        </div>
      </fieldset>
    </form> <br>
    
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
      
      <fieldset style="width:320px; height: 170px;">
        
        <legend><b>CHANGE PASSWORD</b></legend>
        <div style="padding:5px;">
          <span style="padding-right:40px;">Current Password</span>: <input type="text" name="password" value="<?php echo $password;?>">
          <span class="error"></span>
        </div>
        
        <div style="padding:5px;">
          <span style="padding-right:58px;color:green;">New Password</span>: <input type="text" name="newpassword" value="<?php echo $newpassword;?>">
          <span class="error"><?php echo $passwordErr2;?><?php echo $newpasswordErr;?></span>
        </div>
        
        
        <div style="padding:5px;">
          <span style="padding-right:10px;color:red;">Retype New Password</span>: <input type="text" name="rnewpassword" value="">
          <span class="error"><?php echo $rpasswordErr;?></span>
        </div>
        
        <hr>
        <div style="padding:5px;">
          <input type="submit" name="submit2" value="Submit"> 
          
          
        </div>
      </fieldset>
      
    </form><br>
    
    
    <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <fieldset style="width:320px;height: 205px;">
        
        <legend><b>PROFILE PICTURE</b></legend>
        <div style="padding:5px;">
          <img src="thumnail.jpg" style="width: 100px;height: 100px;" alt="photo">
        </div>
        
        <div style="padding:5px;">
          <span><input type="file" name="fileToUpload">
            <span class="error"><?php echo $photoErr;?></span>
          </div>
          
          <hr>
          <div style="padding:5px;">
            <input type="submit" name="submit3" value="Submit"> 
            
            
          </div>
        </fieldset>
        
      </form>
 <?php
        $name="";
      $err_name="";
      $uname="";
      $err_uname="";
      $password="";
      $err_password="";
      
      $email="";
      $err_email="";
      $hasError=false;
      
      
      
     # $s= strpos($_POST["email"],"@");
      #$t = strpos($_POST["email"],".",$s+1);
      
      #$x= strpos($_POST["pass"],"#");
       #     $y= strpos($_POST["pass"],"?");

      
      
        if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(empty($_POST["uname"])){
          $err_uname="*Username Required";
          $hasError=true;
        }
        else if(strlen($_POST["uname"]) < 6){
          $err_uname="*Username should be at least 6 characters";
          $hasError=true;
        }
        else if(strpos($_POST["uname"]," ")){
          $err_uname="*Space is not allowed";
                    $hasError=true;

        }
        else{
          $uname=htmlspecialchars($_POST["uname"]);
        }
        if(empty($_POST["name"])){
          $err_name="*Name Required";
          $hasError=true;
        }
        else{
          $name=htmlspecialchars($_POST["name"]);
        }
        if(empty($_POST["pass"])){
          $err_password = "*Password Required";
          $hasError=true;
        }
        else if(strlen($_POST["pass"]) < 8){
          $err_password="*Password should be at least 8 characters";
          $hasError=true;
        }
        else if(ctype_upper($_POST["pass"])==true || ctype_lower($_POST["pass"])==true ){ 
          $err_password="*Characters should contain combination of uppercase and lowercase";
          $hasError=true;
        }
        else if($x==null && $y==null){ 
          $err_password="*Characters should contain 1 special character eg.# or ?";
          $hasError=true;
        }
        else{
          $password=$_POST["pass"];
        }
        if(!$hasError){
          echo "Username: $uname";
        }
        
        if(empty($_POST["email"])){
          $err_email="*Email address required";
          $hasError=true;
        }
        else if(!strpos($_POST["email"],"@")){
          $err_email="*Characters must contain @";
                    $hasError=true;

        }
        else if(!strpos($_POST["email"],".",$s+1)){
          $err_email="*Characters must contain atleast 1 dot after @";
                    $hasError=true;

        }
        else{
          $email=htmlspecialchars($_POST["email"]);
        }
          
        
      
      }
      
    ?>

  
    <fieldset>
      <legend><h1>Registration</h1></legend>
      <form action="" method="post">
        <table>
          
          
          
          
          <tr>
            <td><span> Name</span></td> 
            <td>: <input type="text" value="<?php echo $name;?>" name="name">
            <span><?php echo $err_name;?></span></td>
            
          </tr>
          
          <tr>
            <td><span> Username</span></td> 
            <td>: <input type="text" value="<?php echo $uname;?>" name="uname">
            <span><?php echo $err_uname;?></span></td>
            
          </tr>
          
          
          
        
          <tr>
            <td>Password</td>
            <td>: <input type="password" value="<?php echo $password;?>" name="pass">
            <span><?php echo $err_password;?></span></td>
          </tr>
          
          <tr>
            <td> Confirm Password </td>
            <td>: <input type="password" name=""></td>
            
          </tr>
          
          <tr>
            <td> Email</td>
            <td>: <input type="text" value="<?php echo $email;?>" name="email">
            <span><?php echo $err_email;?></span></td>
            
          </tr>
          
         
           
           <tr>
            <td>Birth Date</td>
            <td>:
              <select>
                <option>Day</option>
                
                <?php
                  for($i=1;$i<=31;$i++){
                    echo "<option>$i</option>"; 
                  }
                ?>
              </select>
              <select>
                <option>Month</option>
                
                <?php
                    $month = array("January","February","March","April","May","June","July","August","September","October","November","December");
                  foreach($month as $v){
                    echo "<option>$v</option>";
                    
                  }
                ?>
              </select>
              <select>
                <option>Year</option>
                
                <?php
                  for($i=1900;$i<=2021;$i++){
                    echo "<option>$i</option>"; 
                  }
                ?>
              </select>
              
            </td>
          </tr>
          
         

 <fieldset>
<legend>Gender</legend>
 <legend> <input type="radio" id="Male" name="Male">
 <label for="Male">Male</label>
<input type="radio" id="Female" name="Female">
 <label for="Female">Female</label>
 <input type="radio" id="Other" name="Other" >
<label for="other">Other</label></legend>
 
<input type="submit">
   
  </fieldset><br> 
          
          
         
          <tr>
            <td align="center" colspan="2"><input type="submit" name="submit" value="submit"></td>
          </tr>
          
        </table>
         
        
      </form>
    </fieldset>
      
  </body>
</html>
