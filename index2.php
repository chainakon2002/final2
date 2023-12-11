<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Kanit&display=swap');
*{font-family: 'Kanit', sans-serif;}
</style>
    <meta charset="utf-8">
    <title>ของมือสาม</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
<link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
     <!-- Bootstrap JS -->
    <script src="Bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="index2.php" class="navbar-brand ms-lg-5">
            <h1 class="display-5 m-0 text-primary"><span class="text-primary">มือที่สาม</span></h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">เอกสารประกอบ</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"></a>
                    <div class="dropdown-menu m-0">
                        <a href="index.php" class="dropdown-item">ออกจากระบบ</a>
                        
                    </div>
                </div>
                <a href="" class="nav-item nav-link">   </a>
                
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <div class="container mt-4">
    <div class="row">
    <?php
    include 'connect.php';
    $sql = "SELECT * FROM product";
    $hand = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($hand)){

    
    ?>
  
    <div class="col-md-3">
      <div class = "text-center">
     <img src="image/<?=$row['image']?>" width="200"  heigth="250 "  >  <br>
     รหัสสินค้า: <?=$row['pro_id']?> <br>
     <?=$row['pro_name']?> <br>
     ราคา <b class = "text-danger"><?=$row['price']?> </b> บาท <br>
     <a class = "btn btn-outline-primary mt-2" href = "sp_product_deteil.php?id=<?=$row['pro_id']?>">รายละเอียด </a> <br>
     </div>
    <br>
    </div>
    <?php
    }
    mysqli_close($conn);
    ?>

  </div>


    </div>
  


     <!-- Team Start -->
     <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Team Members</h5>
                <h1 class="display-5 mb-0">สมาชิกในกลุ่ม</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="position-relative rounded-top">
                        <img class="img-fluid rounded-top w-100" src="img/333461436_592900356211707_8732145712844702533_n.jpg" alt="">
                        <div class="position-absolute bottom-0 end-0 d-flex flex-column bg-white p-1" style="margin-right: -25px;">
                            <a class="btn btn-outline-secondary btn-square m-1" href="https://www.facebook.com/profile.php?id=100024227572167"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            
                        </div>
                    </div>
                    <div class="bg-primary text-center rounded-bottom p-4">
                        <h3 class="text-white">Paradon Kunsri</h3>
                        <p class="text-white m-0">64102105119</p>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="position-relative rounded-top">
                        <img class="img-fluid rounded-top w-100" src="img/326244606_696520118591494_6581708356755887464_n.jpg" alt="">
                        <div class="position-absolute bottom-0 end-0 d-flex flex-column bg-white p-1" style="margin-right: -25px;">
                            
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="bg-primary text-center rounded-bottom p-4">
                        <h3 class="text-white">Thanapon Yangrhisan</h3>
                        <p class="text-white m-0">64102105121</p>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="position-relative rounded-top">
                        <img class="img-fluid rounded-top w-100" src="img/248595936_876931183026164_6854077885278538708_n (2).jpg" alt="">
                        <div class="position-absolute bottom-0 end-0 d-flex flex-column bg-white p-1" style="margin-right: -25px;">
                            
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="bg-primary text-center rounded-bottom p-4">
                        <h3 class="text-white">Chainakon Sarisee</h3>
                        <p class="text-white m-0">64102105124</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->



    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>