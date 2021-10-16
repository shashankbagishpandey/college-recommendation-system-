<?php 
session_start();
error_reporting(0);
// if (!isset($_SESSION['username'])) {
//   header("Location:login.php");
//   // code...
// }
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>science</title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="nav-style.css">
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/77ce8a44f5.js" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
<style type="text/css">
/*  span.welcome {
    padding-left: 181px;
    font-size: 26px;
    transform: translate(-18px, 9px);
}
*/

/*ul#menuItems {
    margin-left: 251px;
}
li {
    font-size: 20px;
    padding-left: 39px;
}
span.logout {
    position: absolute;
    transform: translate(-123px, 24px);
   
}*/

/*
@media only screen and (max-width: 800px){

  nav ul li {
    display: block;
    margin-right: 17px;
    margin-top: 14px;
    margin-bottom: -6px;
  }
  ul#menuItems {
    margin-left: 0px;
  }
  span.logout {
    position: relative;
    
  }
  span.text-primary.wel {
    z-index: 10;
    padding-right: 32px;
}
}
*/
 @media (min-width: 1600px) and (max-width : 2500px){
*{
  font-size: 100px;
  padding: 20px;
}
li {
    font-size: 100px;
    padding-left: 69px;
}

}



</style>

</head>
<body>
<div class="header">
      <div class="container">
            <div class="navbar">
                 <div class="lgo">
                  <a class="brand"  href="#"><span class="primary-color">Cyber</span>-<span class="text-white">netics</span></a>
                 </div>
                 <!-- <span class="welcome"> <p class="text-primary">Welcome <span class="text-white"><?php echo $_SESSION['username']?></span></p></span> -->
                <nav>
                  <ul id="menuItems">
                        <li><a href="hack_home.php">Home</a></li>
                        
                        <li><a href="#">Explore</a></li>
                        <li>
                          <?php if ($_SESSION['username']) {?>
                            <span class="logout"><a href="logout.php" >logout</a></span>
                          <?php
                           }else{?>
                            <li><a href="login.php">Login</a></li><?php

                          }
                          
                           ?>
                        </a></li>

                  </ul>
                  
                </nav>
            <i class="fa fa-bars" class="menu-icon" onclick="menutoggle()"></i>
            </div>

            
      </div>
</div>
<!---------------------------------------------------nav-header-end------------------------------------>





 <!-----------------------------------------------------contact us ------------------------------->



<section class="contact" id="contact">
  <div class="container py-5">
    <div class="my-5">
      <h1 class="text-center" data-aos="fade-up" data-aos-duration="800">Feel free <span class="text-primary"> to Ask</span></h1>
      <hr class="w-25 m-auto" />
    </div>
    
   <div class="row" data-aos="fade-up-left" data-aos-duration="800">
    <div class="col-sm-12 col-md-6 col-lg-6 col-12">
   <form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="text" class="form-control" id="inputName4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Phone no: </label>
    <input type="number" class="form-control" id="inputPhone" placeholder="70*52***17">
  </div>
  <div class="col-12">
    <label for="inputQuery" class="form-label">Query </label><br/> 
     <textarea rows="8" class="form-control"  cols="85" placeholder="write your question here "></textarea>
  </div>

  

  <div class="col-12">
    <button type="submit" class="btn btn-primary">submit</button>
  </div>
</form>
      
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 col-12 m-auto text-end"  data-aos="fade-up-right" data-aos-duration="800">
      <img src="img/connect.jpg" class="img-fluid border border-light img-thumbnail p-2 ">
    </div>
   </div>

  </div>
  
</section>

  <!------------------------------------------contact us ----------------------------------------->


<!------------------------------------------footer----------------------------------------------------->
<section>
  <div class="container-fluid bg-dark text-white text-center p-2 fs-5"> @copyright2021</div>
  
</section>











  


<!------------------js for clossing tag ---------------->
      <script>
        var menuItems=document.getElementById("menuItems");
        menuItems.style.maxHeight="0px";

        function menutoggle(){

          if(menuItems.style.maxHeight=="0px"){
            menuItems.style.maxHeight="200px"

          }
          else{
            menuItems.style.maxHeight="0px";

          }
        }
        
      </script>



      <!---------------------------animation js --------------------->

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<!-------------------------------bootstrap js-------------------------------->


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>