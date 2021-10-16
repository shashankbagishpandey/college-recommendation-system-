<?php 
session_start();
$conn=mysqli_connect("localhost","root","","webpage");//webpage is the name of my database 

if (isset($_POST['submit'])) {
  $email=mysqli_real_escape_string($conn,$_POST["email"]); 
  $password=mysqli_real_escape_string($conn,$_POST["password"]);

  $email_search="select * from registration where email='$email'";
  $query=mysqli_query($conn,$email_search);//now email_search has email row values 
  $email_count=mysqli_num_rows($query);
  if ($email_count) {
    $email_pass=mysqli_fetch_assoc($query);
    $db_pass=$email_pass['password'];
    $_SESSION['username']=$email_pass['username'];
    $_SESSION['email']=$email_pass['email'];
    $pass_decode=password_verify($password, $db_pass);
    if ($pass_decode) {
      header("Location:hack_home.php");
      // code...
    }
    else{
      echo"password incorrect";
    }
  }
  else{
    echo"invalid email";

  }




}





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
    margin-top: 40px;
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
      <section class="col-12 col-sm-6 col-md-6 col-lg-4">
        <form class="form-container" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data">
        <div class="form-group">
          <span class="back-arrow"><a href="hack_home.php"><i class="fas fa-arrow-left"></i></a></span>
          <h4 class="text-center font-weight-bold"> login </h4>
          
          <label for="InputEmail1">Email Address</label>
           <input type="email" class="form-control" id="InputEmail1" aria-describeby="emailHelp" placeholder="Enter email" name="email" required>
        </div>
        <div class="form-group">
          <label for="InputPassword1">Password</label>
          <input type="password" class="form-control" id="InputPassword1" placeholder="Password" name="password" required>
        </div>

        <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
        <div class="form-footer">
          <p>Don't have an account? <a href="registeration.php">Register</a></p>
          
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
