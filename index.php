<?php 
/* Main page with two forms: sign up and log in */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>
  <?php include 'css.html'; ?>
  

       
</head>


<body background="nature.jpg">
  <div class="form">
      <h1>FACULTY LOGIN</h1>
      <ul class="tab-group">
        <li class="tab"><a href="index.php">Sign Up</a></li>
        <li class="tab active"><a href="facultyregister.php">Log In</a></li>
      </ul>
      
      <div class="tab-content">

         <div id="login">   
        
          
          <form name="login" action="loginfac.php" onsubmit="return validate()" method="post" autocomplete="off">
          
            <div class="field-wrap">
            <label>
              Faculty Name<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="facname"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="pswd"/>
          </div>
          
     
          
          <button class="button button-block" name="login" />Log In</button>
          
          </form>

        </div>
          
        <div id="signup">   
          <h1>Register Here</h1>
          
          <form action="facultyregister.php" method="post" autocomplete="off">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Faculty Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='facname' />
            </div>
        
            <div class="field-wrap">
              <label>
                Faculty ID<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='id' />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name='emailid' />
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='pswd'/>
          </div>
          
          <button type="submit" class="button button-block" name="register" />Register</button>
          
          </form>

        </div>  
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    

</body>
</html>
