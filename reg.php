<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registerform</title>
  <title>Registerform</title>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  <style>
    *{
  margin:0px;
  padding:0px;
}
body{
  font-size:80%;
  background-image: url('userreg.png');
  font-family: montserrat;
  background-size:cover;
  background-repeat: no-repeat;

}

.header{
   width:26.5%;
   margin:45px auto 0px;
   color:white;
   background: #217C7E;
   text-align:center;
   border:1px solid #B0C4DE;
   border-bottom:none;
   border-radius:10px 10px 0px 0px;
   padding:10px;
   font-size:16px;
}
form, .content{
  width:25%;
  margin:0px auto;
  padding:20px;
  border:1px solid #80C4DE;
  background:white;
  border-radius:0px 0px 10px 10px;
}
.input-group{
  margin:10px 0px 10px 0px;
}
.input-group label{
  display:block;
  text-align:left;
  margin:3px;
  font-size:16px;
}
.input-group input{
  height:30px;
  width:90%;
  padding:5px 10px;
  font-size:16px;
  border-radius:5px;
  border:1px solid gray;
}


.input-group {
            position: relative;
        }

        .input-group input {
            height: 30px;
            width: 90%;
            padding: 5px 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid gray;
        }

        .input-group .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            margin-top:5px;
            margin-right:20px;
        }
        
        .input-group .toggle-password1{
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            margin-top:5px;
            margin-right:20px;
        }

.button1{
  padding:15px 30px;
  font-size:15px;
  color:white;
  background:#217C7E;;
  border:none;
  border-radius:4px;
  text-decoration:none;
  display:inline block;
  margin:3px 1px;
  transition-duration:0.4s;
}




.success{
  color:#3C763D;
  background:#dff0d8;
  border:1px solid #3c763d;
  margin-bottom:20px;
}

/* Your existing CSS styles here */

/* Mobile view */
@media only screen and (max-width: 480px) {
    body {
        font-size: 60%;
      
    }

    .container {
        margin-top: 0; /* Remove margin in mobile view */
        width: 100%;
    }

    .container .left,
    .container .right {
        width: 100%;
        float: none;
    }

    .formBox {
        padding: 40px 20px;
    }

    .title {
        padding: 20px 0 10px;
    }

    .title h1 {
        font-size: 24px;
    }
}

/* Tablet view */
@media only screen and (min-width: 481px) and (max-width: 1024px) {
    .container {
        width: 80%; /* Adjusted width for tablet view */
        margin-top: 0; /* Remove margin in tablet view */
    }

    .formBox {
        padding: 40px 30px; /* Adjusted padding for tablet view */
    }
}
.toggle-password {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
    
    }
    .toggle-password1 {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      margin-top: -10px;
     
    }

  </style>
   <script>
        function checkpassword(form) {
            password = form.password.value;
            confirmpassword = form.confirmpassword.value;
            if (password != confirmpassword) {
                alert("Passwords did not match!\nPlease enter the same password in both fields.");
                return false;
            } else {
                return true;
            }
        }

        function togglePassword() {
      var passwordField = document.getElementById("password");
      var toggleIcon = document.querySelector(".toggle-password");

      if (passwordField.type === "password") {
        passwordField.type = "text";
        toggleIcon.classList.remove("uil-eye-slash");
        toggleIcon.classList.add("uil-eye");
      } else {
        passwordField.type = "password";
        toggleIcon.classList.remove("uil-eye");
        toggleIcon.classList.add("uil-eye-slash");
      }
    }
    function togglePassword1() {
      var passwordField = document.getElementById("confirmpassword");
      var toggleIcon = document.querySelector(".toggle-password1");

      if (passwordField.type === "password") {
        passwordField.type = "text";
        toggleIcon.classList.remove("uil-eye-slash");
        toggleIcon.classList.add("uil-eye");
      } else {
        passwordField.type = "password";
        toggleIcon.classList.remove("uil-eye");
        toggleIcon.classList.add("uil-eye-slash");
      }
    }
    </script>
</head>
<script>
       function checkpassword(form){
     password = form.password.value;
     confirmpassword = form.confirmpassword.value;
     if(password != confirmpassword){
     alert("Passwords did not match!\nPlease enter same password in both the fields.")
     return false;
     }
     else{
     return true;
     }
  }
</script>

<body>

  <div class="header">
    <h2>Register</h2>
     </div>
      
        <form action="user_reg.php" method="POST" onsubmit="return submitUserForm();" style="text_align:centre;">
    
        
       <div class ="input-group">
       <label><b>Email Id</b></label>
        
       <input type="text" name="email_id" id="email_id" pattern="[a-z0-9._%+-]+@gmail\.com$" placeholder="Email Id" required>
         
      </div>
      <div class ="input-group">
        <label><b>User Name</b></label>
        <div class ="input-group"> 
        <input type ="text" name="name" id="name"  placeholder = "Full Name" required>
        
      </div>
       <div class ="input-group">
      <label><b>Mobile No</b></label>
        
        <input type ="text" name="phone_number" id="phone_number"  pattern="[0-9]*" maxlength="10" minlength="10" placeholder = "Mobile No" required>
         
      </div>
      <div class ="input-group">
      <label><b>Address</b></label>
        
      <input type="text" name="address" id="address" pattern="[a-zA-Z0-9\s\-_,./]*" maxlength="100" placeholder="Address (up to 100 characters)" required>
         
      </div>
        
        <div class="input-group">
            <label><b>Password</b></label>
            <div style="position: relative;">
                <input type="password" name="password" id="password" placeholder="password" pattern="(?=.*\d)(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase letter and have at least 6 or more characters" required>
                <i class="uil uil-eye-slash toggle-password" onclick="togglePassword()"></i>
            </div>
        </div>

        <div class="input-group">
            <label><b>Confirm Password</b></label>
            <div style="position: relative;">
                <input type="password" name="confirmpassword" id="confirmpassword" placeholder=" Confirm Password" required>
                <i class="uil uil-eye-slash toggle-password1" onclick="togglePassword1()"></i>
            </div>
        </div>
                   <div class="input-group">
       <div class="g-recaptcha" data-callback="verifyCaptcha" data-sitekey="6LcoA8QbAAAAALWlCxUEnz3T8n6HXkNAk7h7v5Ck" ></div>
       <div id="g-recaptcha-error"></div>
      </div>

           <input class="button1" type="submit" value="Register" id="Register" onclick="return checkpassword(form)" ><br>
          
              
           

         <p><b>Already have an account??<a href="login.html">Login</a></b></p>
        </div>

</form>
 
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
 <script>
function submitUserForm() {
    var response = grecaptcha.getResponse();
    console.log(response.length);
    if(response.length == 0) {
        document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
        return false;
    }
    return true;
}
 
function verifyCaptcha() {
  console.log('verified');
    document.getElementById('g-recaptcha-error').innerHTML = '';
}
</script> 
</body>
</html>
