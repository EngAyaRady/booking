<?php
    session_start();
    include "./master/sections/connect.php";
      

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Booking</title>
        <script src="https://kit.fontawesome.com/d61941c423.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./master/css/normalize.css">
        <link rel="stylesheet" href="./master/css/log.css">
        <!-- <link rel="stylesheet" href="./master/css/main.css"> -->

        
        <!-- Swiper CSS -->
        <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"> -->

            <!-- Swiper JS -->
        <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->

        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        
    </head>
    <body>
        
    
    
        <div class="log">
            <header> Booking</header>
            <!-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" >
        <div class="container">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger" href="index.php" style="color: grey;font-family: 'IBM Plex Sans', sans-serif;"><h6>HOME</h6></a>
          </li>
  
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger" href="services.html" style="color: grey;font-family: 'IBM Plex Sans', sans-serif;"><h6>ABOUT US</h6></a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="contact.html" style="color: grey;font-family: 'IBM Plex Sans', sans-serif;"><h6>CONTACT</h6></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

   -->

   <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">login as a gust</a></li>

        </ul>
    </nav>
    <li class="nav-item" style="margin-left: 40px;">
    <h3 > استكشف المملكة العربية السعودية </h3>
    <h5> لدى هذه الوجهات الرائجة الكثير لتقدّمه</h5>

    <!-- <img src="./img/maka.webp" width="30%" height=" 150px"> -->

    <!-- <iframe src="./img/maka.webp" width="200px" height="200px"></iframe> -->
    <!-- <iframe src="../site/images/IMG-20171112-WA0003.jpg" width="500px " height="500px"></iframe> -->
    <div class="slider">
    <div class="slide">
        <img src="./img/download 1.jpg" alt="Image 1"></div>
    <div class="slide"><img src="./img/download2.jpg" alt="Image 2"></div>
    <div class="slide">
        <img src="./img/download.jpg" alt="Image 3">
    </div>
    <!-- Add more slides as needed -->
   </div>


            
            
            <div class="logbody">
                <form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="POST">
                    <input type="text" name="username"  placeholder="username">
                    <input type="password" name="pass" placeholder="password">
                    <div>
                        <input type="submit" value="Login">
                    </div>
                </form>

                <?php
                    if( $_SERVER['REQUEST_METHOD'] == 'POST'){
                        $user = $_POST['username'];
                        $pass = $_POST['pass'];

                        if( empty($user) || empty($pass) ){
                            echo "<div class=\"error\">Enter username and password to login.</div>";
                        }
                        else{
                            $user_info = $conn -> query("SELECT * FROM userrs
                            WHERE user_username = '$user'
                            AND user_password = '$pass'") -> fetchAll(PDO::FETCH_ASSOC);
                            if( count($user_info) > 0){
                                if( $user_info[0]['user_usertype'] == 1){
                                    $_SESSION['username'] = $user_info[0]['user_username'];
                                    $_SESSION['userid'] = $user_info[0]['user_userid'];
                                    $_SESSION['usertype'] = "admin";
                                    header("location:pages/admin.php");
                                }
                                else{
                                    $_SESSION['username'] = $user_info[0]['user_username'];
                                    $_SESSION['userid'] = $user_info[0]['user_userid'];
                                    $_SESSION['usertype'] = "user";
                                    header("location:pages/user.php");
                                }
                            }
                            else{
                                echo "<div class=\"error\">Invalid username or password.</div>";
                            }
                        }
                    }
                ?>
                
                
   
    <div class="container">
        <h3>بحث عن غرفة</h3>
        <form action="search.php" method="GET">
            <label for="checkin">تاريخ الوصول:</label>
            <input type="date" id="checkin" name="checkin" required>

            <label for="checkout">تاريخ المغادرة:</label>
            <input type="date" id="checkout" name="checkout" required>

            <button type="submit">بحث</button>
        </form>
        <div class="results">
            <div class="search-add">
        <div class="search-box">
        <form action="search.php" method="GET">
            <input type="search" id="search_id" placeholder="search by location" autocomplete="off">
            <button type="submit">location</button>


        </div>
        <!-- <div class="swiper-container">
        <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="https://picsum.photos/200/300" alt="Image 1"></div>
        <div class="swiper-slide"><img src="https://picsum.photos/200/300.jpg" alt="Image 2"></div>
        <div class="swiper-slide"><img src="https://picsum.photos/200/300.jpg" alt="Image 3"></div> -->
        <!-- يمكنك إضافة المزيد من الصور هنا -->
    </div>
    <!-- إضافة الأزرار التحكم وأشرطة التقدم (Pagination) -->
    <!-- <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
````</div> -->


            


<!--  -->
        </div>
    </div>
    <script>
    $(document).ready(function(){
        $('.slider').slick({
            autoplay: true,   // قم بتعيينها على true للشريحة التلقائية
            dots: true,       // عرض النقاط التنقل
            arrows: true,     // عرض الأسهم التنقل
            infinite: true,   // دورة لانهائية
            speed: 500,       // سرعة الانتقال بالميللي ثانية
            slidesToShow: 1   // عدد الشرائح المعروضة في كل مرة
        });
    });
</script>



            </div>
           
          <footer>Created BY Aya Rady</footer>
        </div>
    </body>
</html>