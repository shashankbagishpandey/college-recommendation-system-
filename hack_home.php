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
<!---------------------------------------------------nav-header-end------------------------------------>



<!----------------------------------------------------caursol start------------------------------------>


 
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/banner1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-md-block">
        <h2>we create knowledge that create beutiful <br/>experiences that inspire inovation</h2>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/banner2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-md-block">
        <h2>We craft solution that help <br/> you to build your path</h2>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/banner3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-md-block">
        <h2>It is not about ideas <br> it is about treasure of knowledge</h2>
        <p></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon border rounded-circle" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon border rounded-circle" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-------------------------------------------------carousel end   ------------------------------------>


<!-------------------------------services start---------------------------------------------------------->

 
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h4></h4>
                    </div>
                </div>
            </div>

            <!-- Brand List  -->
            <div class="col-md-3">
                <form action="" method="GET">
                    <div class="card shadow mt-3">
                        <div class="card-header">
                            <h5>Filter 
                                <button type="submit" class="btn btn-primary btn-sm float-end">Search</button>
                            </h5>
                        </div>
                        <div class="card-body">
                            <h6>minority List</h6>
                            <hr>
                            <?php
                                $con = mysqli_connect("localhost","root","","webpage");

                                $brand_query = "SELECT * FROM a_brands";
                                $brand_query_run  = mysqli_query($con, $brand_query);

                                if(mysqli_num_rows($brand_query_run) > 0)
                                {
                                    foreach($brand_query_run as $brandlist)
                                    {
                                        $checked = [];
                                        if(isset($_GET['brands']))
                                        {
                                            $checked = $_GET['brands'];
                                        }
                                        ?>
                                            <div>
                                                <input type="checkbox" name="brands[]" value="<?= $brandlist['id']; ?>" 
                                                    <?php if(in_array($brandlist['id'], $checked)){ echo "checked"; } ?>
                                                 />
                                                <?= $brandlist['name']; ?>
                                            </div>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "No Item Found";
                                }
                            ?>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Brand Items - Products -->
            <div class="col-md-9 mt-3">
                <div class="card ">
                    <div class="card-body row">
                        <?php
                            if(isset($_GET['brands']))
                            {
                                $branchecked = [];
                                $branchecked = $_GET['brands'];
                                foreach($branchecked as $rowbrand)
                                {
                                    // echo $rowbrand;
                                    $products = "SELECT * FROM scrap WHERE brand_id IN ($rowbrand)";
                                    $products_run = mysqli_query($con, $products);
                                    if(mysqli_num_rows($products_run) > 0)
                                    {
                                        foreach($products_run as $proditems) :
                                            ?>
                                                <div class="col-md-4 mt-3">
                                                    <div class="border p-2">
                                                      <a href="<?php echo"collegedetail.php?id=$proditems[id]";?>"><h6><?= $proditems['collegename']; ?></h6></a>  
                                                    </div>
                                                </div>
                                            <?php
                                        endforeach;
                                    }
                                }
                            }
                        
                                else
                                {
                                    echo "<h2>please select your minority if not select None<h2>";
                                }
                            
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!------------------------------------------------Aboutus--------start--------------------------------->

<section class="about my-5" id="about">
  <div class="container ">
    <div class="my-5">
      <h1 class="text-center"  data-aos="fade-up" data-aos-duration="800">About<span class="text-primary"> us</span></h1>
      <hr class="w-25 m-auto" />
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6 col-12 " data-aos="zoom-in" data-aos-duration="800">
        <h1>What do u <span class="text-primary">want to know?</span></h1>
        <p>The simplest form of technology is the development and use of basic tools. The prehistoric invention of shaped stone tools followed by the discovery of how to control fire increased sources of food. The later Neolithic Revolution extended this, and quadrupled the sustenance available from a territory. The invention of the wheel helped humans to travel in and control their environment</p>
        <button type="button" class="btn btn-light mb-5">More about tech</button>
        <div class="accordion" id="accordionExample">
  <div class="accordion-item" data-aos="zoom-in-left" data-aos-duration="800">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">       
Is there any number to contact for any query?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>You may contact us by mail /  Drop us an email at sci-tech@cyberneticks.org</p>

      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Who is the founder of cybernetics?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Thier is not any  specific  founder, cyberneticks is  made by a group of students.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Why this webpage is made ?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>To resolve issues related admission that arrives  when a student   start  searching for the best college for him and he get confused</p>  
      </div>
    </div>
  </div>
</div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-12 m-auto text-end" data-aos="fade-up" data-aos-duration="800">
        
              <img src="img/science.jpg" class="img-fluid img-thumbnail">


      </div>
    </div>
  </div>
</section>




<!----------------------------------------------about us end ------------------------------->

 



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

  
  <!-- <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
<input type="text" class="form-control" id="inputstate">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div> -->
  
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