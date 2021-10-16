<?php
session_start();
error_reporting(0);
 $conn=$conn=mysqli_connect('localhost','root','','webpage');
 $id=$_GET['id'];
 $query="select * from scrap WHERE id='$id'";
 $sql=mysqli_query($conn,$query);
 while($row=mysqli_fetch_array($sql)){

      
  
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
                        <li><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="contact.php">contactus</a></li>
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
   <!-----------------------------single product detail ------------------------------------->
   <!------------------------------------------------Aboutus--------start--------------------------------->

<section class="about my-5" id="about">
  <div class="container ">
    <div class="my-5">
      
      <h1> <?php echo $row['collegename']; ?></h1>
      <hr class="w-25 m-auto" />
    </div>
    <div class="row">
      <div class=" col-md-6 col-lg-6 col-12 ">
        <div class="card" style="width: 31rem ;">

  <div class="card-body">
    <h5 class="card-title">Detail</h5>
    <p class="card-text"> <?php echo $row['collegename'];  ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Minority: <span class="text-primary"><?php echo $row['minoritystatus'];  ?> </span></li>
    <li class="list-group-item">Percentile for open & obc:<span class="text-primary"><?php echo $row['open'];  ?> & <?php echo $row['OBC'];  ?></span> </li>
    <li class="list-group-item">Fees<span class="text-primary"><?php echo $row['fees'];  ?> Rupees</span> </li>
  </ul>
  <div class="card-body">
    <li class="list-group-item">Percentile for minorities<span class="text-primary"><?php echo $row['minority'];  ?> </span> </li>
 
  </div>
</div>  
     
    </div>
     <div class="col-md-6 col-lg-6 col-12 m-auto text-end" >
        
              <img src="<?php echo $row['image'];?>" class="img-fluid img-thumbnail" style="width: 31rem ;">

  <?php } ?>
      </div>

  </div>
</section>




<section class="Services py-5 bg-light" id="services">
  <div class="container">
    <div class="text-center my-5">
      <h1 class="text-center">Our<span class="text-primary"> services</span></h1>
      <hr class="w-25 m-auto" />
    </div>
    <div class="row" >
         <div class="col-sm-12 col-md-4 col-lg-4 col-12">
           
          <div class="card">
                    <div class="card-body">
                      <i class=" fa fa-civil bg-primary p-2 text-white rounded"></i>
                      <h5 class="card-title">Architeture</h5>
                         <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                           <a href="https://www.w3schools.com/html/default.asp" class="btn btn-primary">know more</a>
                    </div>
                </div>

        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-12">
            <div class="card bg-primary text-white">
                    <div class="card-body">
                      <i class=" fa fa-android bg-white p-2 text-dark rounded mb-2"></i>
                      <h5 class="card-title">computer Science</h5>
                         <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                           <a href="https://developer.android.com/" class="btn btn-light">know more</a>
                    </div>
                </div>
      
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-12">
                  
                  <div class="card">
                    <div class="card-body">
                      <i class=" fa fa-users bg-primary p-2 text-white rounded"></i>
                      <h5 class="card-title">Designing </h5>
                         <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                           <a href="https://design.google/" class="btn btn-primary">know more</a>
                    </div>
                </div>


        </div>
    </div>

<!---------------------------2nd row-------------->

      <div class="row mt-5" >
         <div class="col-sm-12 col-md-4 col-lg-4 col-12" >
           
          <div class="card">
                    <div class="card-body">
                      <i class=" fa fa-bridge bg-primary p-2 text-white rounded"></i>
                      <h5 class="card-title">civil</h5>
                         <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                           <a href="https://www.microsoft.com/en-in" class="btn btn-primary">know more</a>
                    </div>
                </div>

        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-12">
            <div class="card bg-primary text-white">
                    <div class="card-body">
                      <i class="fab fa-hammer bg-white p-2 text-dark rounded mb-2"></i>
                      <h5 class="card-title">mechanical</h5>
                         <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                           <a href="https://support.apple.com/en-in/macos" class="btn btn-light">know more</a>
                    </div>
                </div>
      
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-12">
                  
                  <div class="card">
                    <div class="card-body">
                      <i class=" fa fa-stock bg-primary p-2 text-white rounded"></i>
                      <h5 class="card-title">MBA </h5>
                         <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                           <a href="https://www.linux.org/" class="btn btn-primary">know more</a>
                    </div>
                </div>


        </div>
    </div>

  </div>
</section>



  <!-----------------------------------brands--------------------------------->
  
<!------------------------------------------footer----------------------------------------------------->
<section>
  <div class="container-fluid bg-dark text-white text-center p-2 fs-5"> @copyright2021</div>
  
</section>

      </div>
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


      <!-------------------------js for product gallery --------------------------->

       <script type="text/javascript">
         
         var ProductImg =document.getElementById("ProductImg");
         var SmallImg=document.getElementsByClassName("small-img");
        
         SmallImg[0].onclick=function () {
           ProductImg.src=SmallImg[0].src;
         }
           
           SmallImg[1].onclick=function () {
           ProductImg.src=SmallImg[1].src;
         }

           SmallImg[2].onclick=function () {
           ProductImg.src=SmallImg[2].src;
         }

         SmallImg[3].onclick=function () {
           ProductImg.src=SmallImg[3].src;
         }




       </script>
 
</body>
</html>
?>