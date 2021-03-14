<html>
  <head></head> 
  <body>

     
   
    <?php

    $uname="";
    $password="";


    $hasError=false;



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
}

    ?>



    <fieldset>
      <legend><h1>Login</h1>
      </legend>
       <tr>
            <td><span> Username</span></td> 
            <td>: <input type="text" value="<?php echo $uname;?>" name="uname">
            
            
          </tr>
          
          
          
        <br>
          <tr>
            <td>Password</td>
            <td>: <input type="password" value="<?php echo $password;?>" name="pass">
           
          </tr>
       <form action="" method="post">


<input type="submit">

    </fieldset>
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
      
      
      
     ## $s= strpos($_POST["email"],"@");
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
          
         
<tr>
 <fieldset>
<legend>Gender</legend>
 <legend> <input type="radio" id="Male" name="Male">
 <label for="Male">Male</label>
<input type="radio" id="Female" name="Female">
 <label for="Female">Female</label>
 <input type="radio" id="Other" name="Other" >
<label for="other">Other</label></legend>
 
<input type="submit">
   
  </fieldset><br></tr>  

          
          
         
          <tr>
            <td align="center" colspan="2"><input type="submit" name="submit" value="submit"></td>
          </tr>
          
        </table>
         
        
      </form>
    </fieldset>

  </body>
</html>