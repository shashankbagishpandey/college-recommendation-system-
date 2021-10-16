<?php
session_start();

$conn=mysqli_connect("localhost","root","","webpage");//webpage is the name of my database 


if (isset($_POST['submit'])) {

   //mysqli_real_escape_string is used to avoid sql injection (hackers)

  $username=mysqli_real_escape_string($conn,$_POST["username"]);
  $email=mysqli_real_escape_string($conn,$_POST["email"]);    // "email is name in html "
  $phone=mysqli_real_escape_string($conn,$_POST["phone"]); 
  $password=mysqli_real_escape_string($conn,$_POST["password"]); 
  $cpassword=mysqli_real_escape_string($conn,$_POST["cpassword"]);



  $pass=password_hash($password, PASSWORD_BCRYPT);
  $cpass=password_hash($cpassword, PASSWORD_BCRYPT);

  $emailquery="select * from registration where email='$email' ";
  $query=mysqli_query($conn,$emailquery);
  $emailcount=mysqli_num_rows($query);

  if ($emailcount>0) {
  ?><script>
          alert("Email already exists ,Try another email");
        </script><?php
      
  }
  else{

   if ($password==$cpassword) {
   
    $sql="INSERT INTO `registration`( `username`, `email`, `phone`, `password`, `cpassword`) VALUES ('$username','$email','$phone','$pass','$cpass')";
            $result=mysqli_query($conn,$sql);
    if($result){
        ?><script>
          alert("sucessfully registerd");
        </script><?php
        
    }
    else{
      ?><script>
          alert("Not  registerd ");
        </script><?php
    }

    }else{
      ?><script>
          alert("password is not matching ");
        </script><?php
    }
  }

}

    
  // header("Location: tinker_login.php");

   
  












?>
<html>
<head>
 
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/77ce8a44f5.js" crossorigin="anonymous"></script>


  <style type="text/css">
      /* set entire body that is webpage */
body{
    background:radial-gradient(#fff,#0d6efd); 
    padding-top: 25vh;  
}
/* set form background colour*/
form{
    background: #fff;
}
/* set padding and size of th form */
.form-container{
    border-radius: 10px;
    padding: 30px;
}

   section.container-fluid {
    margin-top: -100px;
}
input#num {
    width: 276px;
    transform: translate(65px, -38px);
        position: absolute;
}
input#number {
    width: 54px;
}

 
@media only screen and (max-width: 800px){
 section.container-fluid {
    transform: translate(0px, -50px);
    overflow: hidden;
  }
  input#num {
    width: 169px;
    
        position: absolute;
}
}
span.back-arrow {
    position: absolute;
    margin-top: 5px;
}

  </style>
</head>
 
<body>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- Login form creation starts-->
  <section class="container-fluid">
    <!-- row and justify-content-center class is used to place the form in center -->
    <section class="row justify-content-center">
      <section class="col-12 col-sm-6 col-md-6 col-lg-6">
        <form class="form-container" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data">
        <div class="form-group">
           <span class="back-arrow"><a href="hack_home.php"><i class="fas fa-arrow-left"></i></a></span>
          <h4 class="text-center font-weight-bold"> Registration </h4>
          <label for="InputName">Username</label>
           <input type="text" class="form-control" id="InputName"  placeholder="Enter Username" name="username" required>
        </div>
        <div class="form-group">  
          <label for="InputEmail1">Email Address</label>
           <input type="email" class="form-control" id="InputEmail1" aria-describeby="emailHelp" placeholder="Enter email" name="email" required>  
  
        </div>
        <div class="form-group">
          <label>   Phone :  </label>  
          <input type="text" class="form-control" id="number" name="country code" placeholder="Country Code"  value="+91" />   
          <input type="text" class="form-control" name="phone" id="num" placeholder="Phone no." / required>   
        </div>
        <div class="form-group">
          <label for="InputPassword1">Password</label>
          <input type="password" class="form-control" id="InputPassword1" placeholder="Password" name="password" required>
        </div>
        <div class="form-group">
          <label for="InputPassword2">Confirm Password</label>
          <input type="password" class="form-control" id="InputPassword1" placeholder="Password" name="cpassword" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
        <div class="form-footer">
          <p> have an account? <a href="login.php">login</a></p>
          
        </div>
        </form>
      </section>
    </section>
  </section>
<!-- Login form creation ends -->






<!-----------------------------to stop resubmission after refreshing webpage------------------------->

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}

/*function myFunction() {
  var x=document.getElementById("ml").value;
  document.write(x);
}*/



</script>

</body>
</html>
