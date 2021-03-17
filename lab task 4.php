<!----           PUBLIC.php                  ----->

<?php include 'header.php' ?>



    <div class="single">
        <p><b>Welcome to xCompany</b></p>
        
      </div>

<?php include 'footer.php' ?>
<!----           End                  ----->
<!----           REGISTRATION.php                  ----->

<?php include 'header.php' ?>



<div class="single">
  <form method="post" action="/">  
    
    <fieldset style="width:360px; ">
      
      <legend><b>REGISTRATION</b></legend>
      <div style="padding:5px;">
        <span style="padding-right:100px;">Name</span>: <input type="text" name="password" value="">
        <span class="error"></span>
      </div>
      
      <div style="padding:5px;">
        <span style="padding-right:100px;">Email</span>: <input type="text" name="password" value="">
        <span class="error"></span>
      </div>
      
      
      
      <div style="padding:5px;">
        <span style="padding-right:68px;">User Name</span>: <input type="text" name="password" value="">
        <span class="error"></span>
      </div>
      
      <div style="padding:5px;">
        <span style="padding-right:80px;">Password</span>: <input type="text" name="password" value="">
        <span class="error"></span>
      </div>
      
      
      <div style="padding:5px;">
        <span style="padding-right:20px;">Confirm Password</span>: <input type="text" name="password" value="">
        <span class="error"></span>
      </div>
      
      <div style="padding:5px;">
        <fieldset>
          <legend>Gender</legend>
          <input type="radio" name="gender" value="Male">Male
          <input type="radio" name="gender" value="Female">Female
          <input type="radio" name="gender" value="Other">Other
          
          <span class="error"></span>
          <hr>
        </fieldset>
      </div>
      
      
      <div style="padding:5px;">
        <fieldset>
          <legend>DATE OF BIRTH</legend>
          <input type="text" name="dd" placeholder="dd" value="" size="2"> / 
          <input type="text" name="mm" placeholder="mm" value="" size="2"> / 
          <input type="text" name="yyyy" placeholder="yyyy" value="" size="2">
          <span class="error"></span>
          <hr>
        </fieldset>
      </div>
      
      
      
      
      
      
      
      
      
      <hr>
      <div style="padding:5px;">
        <input type="submit" name="submit2" value="Submit"> 
        
        
      </div>
    </fieldset>
    
  </form>
  
</div>

<?php include 'footer.php' ?>
<!----           End                  ----->

<br>
<!----           LOGIN.php                  ----->


<?php include 'header.php' ?>



    <div class="single">
        <form method="post" action="/">  
          
          
          <fieldset align="left" style="width:320px;height: 170px;">
            
            <legend><b>LOGIN</b></legend>
            <div style="padding:5px;">
              User Name: <input type="text" name="username" value="">
              <span class="error"></span>
            </div>
            
            <div style="padding:5px;">
              Password  :&nbsp;&nbsp; <input type="text" name="password" value="">
              <span class="error"></span>
            </div>
            
            <hr>
            
            <input type="checkbox" name="remember" value="1">Remember Me
            
            <div style="padding:5px;">
              <input type="submit" name="submit" value="Submit"> 
              <a href="#">Forgot Password?</a>
              
            </div>
          </fieldset>
          
        </form>
        
      </div>

<?php include 'footer.php' ?>
<br>
<!----           DASHBOARD.php                  ----->

<?php include 'profile_header.php' ?>

<div class="single2">
  <table>
    <tbody >
      <tr>

        <?php include 'sidebar.php' ?>


        <td style="width: 640px;">
          <div style="padding-left:10px;"><p><b>Welcome to xCompany</b></p></div>
          
        </td>
      </tr>
    </tbody>
  </table>
  </div>



    

<?php include 'footer.php' ?>
<!----           End                  ----->
        <!----           SIDEBAR.php                  ----->



        <td align="left" style="width:220px;">
          <div style="padding:10px;border-right: 1.2px solid #000000">
            <div>
              <b>Account</b>
              <hr>
            </div>
            <div>
              <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="profile.php">View Profile</a></li>
                <li><a href="edit_profile.php">Edit Profile</a></li>
                <li><a href="change_picture.php">Change Profile Picture</a></li>
                <li><a href="change_password.php">Change Password</a></li>
                <li><a href="logout.php">Logout</a></li>
              </ul> 
            </div>
            <div style="padding-top: 20px;"></div>
          </div>


          
        </td>

        <!----           End                  ----->
        <br>
        <!----           FORGOT.php                  ----->

<?php include 'header.php' ?>



    <div class="single">
        <form method="post" action="/">  
          
          
          <fieldset align="left" style="width:320px;height: 120px;">
            
            <legend><b>FORGOT PASSWORD</b></legend>
            <div style="padding:5px;">
              Enter Email: <input type="text" name="username" value="">
              <span class="error"></span>
            </div>
            
            
            
            <hr>
            
            
            
            <div style="padding:5px;">
              <input type="submit" name="submit" value="Submit"> 
              
              
            </div>
          </fieldset>
          
        </form>
        
      </div>

<?php include 'footer.php' ?>
<!----           End                  ----->

<!----           EDIT PROFILE.php                  ----->

<?php include 'profile_header.php' ?>

<div class="single2">
  <table>
    <tbody >
      <tr>
        
        <?php include 'sidebar.php' ?>
        
        
        <td style="width: 630px;">
          <div style="padding-left:10px;">
            <fieldset style="width:580px; height: 170px;">
              
              <legend><b>Edit Profile</b></legend>
              <div style="padding:5px;">
                <span style="padding-right:100px;">Name</span>: <input type="text" name="password" value="Bob">
                <span class="error"></span>
              </div>

              <div style="padding:5px;">
                <span style="padding-right:100px;">Email</span>: <input type="text" name="password" value="bob@aiub.edu">
                <span class="error"></span>
              </div>

              <div style="padding:5px;">
                <span style="padding-right:92px;">Gender</span>: 
                <input type="radio" name="password" value="">Male
                <input type="radio" name="password" value="">Female
                <input type="radio" name="password" value="">Other
                <span class="error"></span>
              </div>


              <div style="padding:5px;">
                <span style="padding-right:50px;">Date Of Birth</span>: <input type="text" name="password" value="23/12/1999">
                <span class="error"></span>
              </div>
              
              
              
              
              
              
              
              
              
              <hr>
              <div style="padding:5px;">
                <input type="submit" name="submit2" value="Submit"> 
                
                
              </div>
            </fieldset>
          </div>
          
        </td>
      </tr>
    </tbody>
  </table>
</div>





<?php include 'footer.php' ?>
<!----           End                  -----><br>
<!----           CHANGE PICTURE.php                  ----->

<?php include 'profile_header.php' ?>

<div class="single2">
  <table>
    <tbody >
      <tr>
        
        <?php include 'sidebar.php' ?>
        
        
        <td style="width: 630px;">
          <div style="padding-left:10px;">
            <fieldset style="width:580px;height: 205px;">
              
              <legend><b>PROFILE PICTURE</b></legend>
              <div style="padding:5px;">
                <img src="thumnail.jpg" style="width: 100px;height: 100px;" alt="photo">
              </div>
              
              <div style="padding:5px;">
                <span><input type="file" name="fileToUpload">
                  <span class="error"></span>
                </span></div>
                
                <hr>
                <div style="padding:5px;">
                  <input type="submit" name="submit3" value="Submit"> 
                  
                  
                </div>
            </fieldset>
          </div>
          
        </td>
      </tr>
    </tbody>
  </table>
</div>





<?php include 'footer.php' ?>
<!----           End                  -----><br>
<!----          CHANGE PASSWORD.php                  ----->

<?php include 'profile_header.php' ?>

<div class="single2">
  <table>
    <tbody >
      <tr>
        
        <?php include 'sidebar.php' ?>
        
        
        <td style="width: 630px;">
          <div style="padding-left:10px;">
            <fieldset style="width:580px; height: 170px;">
              
              <legend><b>CHANGE PASSWORD</b></legend>
              <div style="padding:5px;">
                <span style="padding-right:40px;">Current Password</span>: <input type="text" name="password" value="">
                <span class="error"></span>
              </div>
              
              <div style="padding:5px;">
                <span style="padding-right:58px;color:green;">New Password</span>: <input type="text" name="newpassword" value="">
                <span class="error"></span>
              </div>
              
              
              <div style="padding:5px;">
                <span style="padding-right:10px;color:red;">Retype New Password</span>: <input type="text" name="rnewpassword" value="">
                <span class="error"></span>
              </div>
              
              <hr>
              <div style="padding:5px;">
                <input type="submit" name="submit2" value="Submit"> 
                
                
              </div>
            </fieldset>
          </div>
          
        </td>
      </tr>
    </tbody>
  </table>
</div>





<?php include 'footer.php' ?>
<!----           End                  ----->