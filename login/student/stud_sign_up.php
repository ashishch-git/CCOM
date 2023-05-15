<!DOCTYPE html>

<html>
<head>
<title>Student Sign Up Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="/jquery.min.js"></script>
    <script src="/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/style.css">
<style type="text/css">





/*Base Style*/
footer{
  bottom:0px;
  position: absolute;
  left:0px;
  width:100%;
  line-height: 35px;
  text-align: center;
  font-weight: bold;
  background-color: #CCC;
}


#header{
  width:100%;
  /*height:100px;*/
}

  .desktop-header{
    height: 100px;
  }

  .mobile-header{
    height: 0px;
  }

/* These 2 are temp styles. Get rid of them later*/
  #header-text h3{
    text-align: center;
    font-size: 30px;
  }

  #header-text p{
    text-align: center;
    font-size:20px;
  }

.form-body{
    margin:25px;
}

.form-top-right{
  width : 25%;
  float:left;
  font-size: 66px;
}
.form-top-left{
  width : 75%;
  float:left;
}

.form-element{
  display: inline;
  width:100%;
}
  button.form-element{
    margin-bottom: 20px;
  }

.module-form{
  /*border:1px solid blue;*/
  background-color: #ECF0F1;
  display: inline-block;
    vertical-align: middle;
    padding-left: 0px;
    padding-right: 0px;
    opacity: 0; /*We are going to animate this */
}
  .module-heading{
    margin:20px 0px;
  }


@media (min-width:768px){


  .middle-border {
      min-height: 300px;
      margin-top: 100px;
      border-right: 1px solid #000;
      border-right: 1px solid rgba(0, 0, 0, 0.6);
  }

  .mobile{
    display: none;
  }

  .desktop{
    display: inline;
  }

  .glyphicon-validation{
    font-size:15px;
    margin: 7px;
  }

}
@media (max-width:767px){


  .middle-border {
      min-height: auto;
      margin: 65px 30px 0 30px;
      border-right: 0;
  }

  .mobile{
    display: inline;
    margin:20px 0px;
  }

  .desktop{
    display: none;
  }

  .glyphicon-validation{
    font-size:10px;
    margin: 7px;
  }
}

/* Just to remove the default padding of bootstrap's col-*-* 
* mainly need this for the form-heading*/

/*#main-login{
  padding-left:0px;
  padding-right: 0px;
}*/

.form-header{
  width:100%;
  padding: 30px;
  
}

.multi-form-wrapper{
  /*margin-bottom:20px;*/
}

.form-content{
text-align: left;
}

</style>
</head>
<body>
<div id="header">
<label>Sign Up Form</label>
</div>
<center>

 <div id="background"></div>
  <div id="header"> </div>

<div class="w3-container w3-card-8 w3-margin">  
<div class="w3-bar w3-blue">
  <button class="w3-bar-item w3-button" onclick="openTab('Login')" style="width:50%">Login</button>
  <button class="w3-bar-item w3-button w3-right" onclick="openTab('Sign_Up')" style="width:50%">Sign Up</button>
</div>


      <div id="Login" class="form-content tab">
        <div class="form-header background-dark-green white">
          <div class="form-top-left">
              <h3>Login</h3>
              <p> See whats going on in your College today </p>
          </div>
          <div class="form-top-right">
              <span class="glyphicon glyphicon-lock"></span>
          </div>
          <br style="clear:both"/>
        </div>
        <div class="form-body">
      <form role="form" action="requestlogin.php" method="post">
            <div class="form-group usertype">
              <label for="usertype"> <span class="glyphicon glyphicon-user"></span> </span> Login as </label>
        <select  class="form-control form-element" name='usertype'>
          <option class='drop-down' value='Student'> Student </option>      
          <option class='drop-down' value='Faculty'> Faculty </option>      
          <option class='drop-down' value='HOD'> HOD </option>      
          <option class='drop-down' value='Admin'> Admin </option>      
        </select>
      </div>
            <div class="form-group username">
              <label for="username"> <span class="glyphicon glyphicon-user"> </span> Username</label>
            <input type="textbox" class="form-control form-element" name="username" placeholder="USN">
            </div>

            <div class="form-group password">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
        <input type="password" class="form-control form-element" name="password" placeholder="Password">
            </div>
            <br>
      <button type="submit" class="btn btn-default btn-success btn-block submit-btn login-btn"><span class="glyphicon glyphicon-lock"></span>&nbsp; Login</button>
          </form>
        </div>
          
      </div>

    
    <!--
    <div class="pull-left message" id="login-message"></div>
           <p>Forgot <a id="forgot-password" href="#">Password?</a></p><br>
        </div>
    -->
      <div id="Sign_Up" class="form-content tab" style="display:none">
        <div class="form-header background-maroon white">
          <div class="form-top-left">
              <h3>Signup</h3>
              <p> Be a part of your College Community </p>
          </div>
          <div class="form-top-right">
              <span class="glyphicon glyphicon-pencil"></span>
          </div>
          <br style="clear:both"/>
        </div>

        <div class="form-body">
      <form role="form" action="completesignup.php" method="post">
            <div class="form-group usertype">
              <label for="usertype"> <span class="glyphicon glyphicon-user"></span> </span> Signup as </label>
        <select  class="form-control form-element" name='usertype'>
          <option class='drop-down' value='Student'> Student </option>      
          <option class='drop-down' value='Faculty'> Faculty </option>      
          <option class='drop-down' value='HOD'> HOD </option>      
          <option class='drop-down' value='Admin'> Admin </option>      
        </select>
      </div>
            <div class="form-group username">
              <label for="username"> <span class="glyphicon glyphicon-user"> </span> Username</label>
            <input type="textbox" class="form-control usn-validation form-element" name="username" placeholder="Username">
            </div>

            <div class="form-group name">
              <label for="name"> <span class="glyphicon glyphicon-user"> </span> Full Name</label>
            <input type="textbox" class="form-control usn-validation form-element" name="name" placeholder="Full Name">
            </div>
             
            <div class="form-group password">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
        <input  type="password" class="form-control password-validation form-element" name="password" placeholder="Password" data-validation="false">
            </div>
             <!--<div class="form-group confirm_password">
              <label for="confirm_password"><span class="glyphicon glyphicon-eye-open"></span> Confirm Password</label>
        <input  type="password" class="form-control password-confirmation form-element" name="confirm_password" placeholder="Confirm Password" data-validation="false">
            </div>-->
            <br>
            <button type="submit" class="btn btn-default btn-danger btn-block submit-btn signup-btn"><span class="glyphicon glyphicon-pencil"></span>&nbsp; Signup </button>
      <!--<input type="submit" class="submit-btn btn btn-primary btn-danger form-element" value="Signup"> -->
          </form>
        </div>
        
      </div>

    </div>
  </div> 



  </div>
</div>
<footer class="w3-container w3-center w3-teal">
  <h5>Created By- SWAP</h5>
 
</footer>
</body>
</html>

</body>
</html>