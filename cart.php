<?php 
session_start();
require_once 'engine/settings.php';
require_once "engine/cart.php";
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>FRIENDS_NT | Доставка Роллов</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		      <a class="navbar-brand" href="index.html"><!--<span class="flaticon-pizza-1 mr-1"><--><img src="images/logo.png" alt="" class="logo mr-1"></--><!--</span>Friends_nt<br><small>Доставка роллов</small>--></a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menu
		      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Главная</a></li>
	          <li class="nav-item"><a href="cart.php" class="nav-link"><img src="images/cart.png" alt="Cart" style="width: 30px;"></a></li>
            <li class="nav-item"><a href="cart.php" class="nav-link" style="color:'green';"><?php echo $_SESSION['item_count']; ?></a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

   

   
       	
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Ваш заказ почти готов</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>

        <div class="row">
        	<div class="col-md-12">
        		
          <?php 

            $date = date('N');
         switch ($date) {
           case 1:
             $sales = "Сет \"Для друзей\"";
             $new_price = 517;
             $day = "понедельника";
             $id = 3;
             break;
            case 2:
            $sales = "Сет \"Флексим в Калифорнии\"";
             $new_price = 535;
             $day = "вторника";
             $id = 4;
             # code...
             break;
             case 3:
             $sales = "Сет \"Кожаный\"";
             $new_price = 652;
             $day = "среды";
             $id = 5;
             # code...
             break;
             case 4:
             $sales = "Сет \"Теплый\"";
             $new_price = 670;
             $day = "четверга";
             $id = 6;
             # code...
             break;
             case 5:
             $sales = "Сет \"Морской\"";
             $new_price = 787;
             $day = "пятницы";
             $id = 7;
             # code...
             break;
             case 6:
             $sales = "Сет \"Для всех\"";
             $new_price = 940;
             $day = "субботы";
             $id = 8;
             # code...
             break;
             case 7:
             $sales = "Сет \"Чилим с Лососем\"";
             $new_price = 765;
             $day = "воскресения";
             $id = 9;
             # code...
             break;
           
           default:
             # code...
             break;
         }
          
            for ($i=1; $i <= $_SESSION['item_count'] ; $i++) { 
            $product_id = $_SESSION['cart'][$i];
            $roll = R::FindOne( 'fnt_menu', ' id = ? ', [$product_id] );  
            ?>


            <div class="pricing-entry d-flex ftco-animate" >
        			<div class="img" style="background-image: url(images/pizza-1.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span><?php echo $roll['name'] ?></span></h3>
	        				<span class="price"><?php 
                  if ($id == $roll['id']){
                     echo $new_price."Р";
                  } else {
                  echo $roll['price']."Р";} ?></span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
        			</div>
        		</div>


            <?php
            ;
            }
           ?>
          
          
          <div class="pricing-entry d-flex ftco-animate" >
              <div class="desc pl-3">
                <div class="d-flex align-items-center">
                <span style="margin: 0 auto;" class="col-md-3">Количество имбиря:</span> <br> <input class="form-control col-md-9" type="text" id="imbir" value="1" style="margin-left: 0px; background-color: rgba(46, 97, 132, 0.5) !important; padding-left: 30px;"> 
                </div>
                
              </div>
            </div>


           <div class="pricing-entry d-flex ftco-animate" >
              <div class="desc pl-3">
                <div class="d-flex align-items-center">
                <span style="margin: 0 auto;" class="col-md-3">Количество васаби:</span> <br> <input class="form-control col-md-9" type="text" id="wasabi" value="1" style="margin-left: 0px; background-color: rgba(46, 97, 132, 0.5) !important; padding-left: 30px;"> 
                </div>
                
              </div>
            </div>
            
          <div class="pricing-entry d-flex ftco-animate" >
              <div class="desc pl-3">
                <div class="d-flex align-items-center">
                <span style="margin: 0 auto;" class="col-md-3">Адрес доставки:</span> <br> <input class="form-control col-md-9" type="text" id="adress" value="Нижний Тагил" style="margin-left: 0px; background-color: rgba(46, 97, 132, 0.5) !important; padding-left: 30px;"> 
                </div>
                
              </div>
            </div>

            <div class="pricing-entry d-flex ftco-animate" >
              <div class="desc pl-3">
                <div class="d-flex align-items-center">
                <span style="margin: 0 auto;" class="col-md-3">Номер телефона:</span> <br> <input class="form-control col-md-9" type="text" id="number" value="+7" style="margin-left: 0px; background-color: rgba(46, 97, 132, 0.5) !important; padding-left: 30px;"> 
                </div>
                
              </div>
            </div>


           <div class="pricing-entry d-flex ftco-animate" >
              <div class="desc pl-3">
                <div class="d-flex align-items-center">
                <span style="margin: 0 auto;" class="col-md-3">Количество персон:</span> <br> <input class="form-control col-md-9" type="text" id="person" value="1" style="margin-left: 0px; background-color: rgba(46, 97, 132, 0.5) !important; padding-left: 30px;"> 
                </div>
                
              </div>
            </div>

            <div class="pricing-entry d-flex ftco-animate" >
              <div class="desc pl-3">
                <div class="d-flex align-items-center">
                <span style="margin: 0 auto; font-size: 48px;" class="col-md-9" >Сумма заказа:</span> <span class="col-md-3 naming" style="font-size: 48px;" id="price"></span>
                </div>
                
              </div>
            </div>

           <div class="pricing-entry d-flex ftco-animate" >
              <div class="desc pl-3">
                <div class="d-flex align-items-center">
                <span href="#" class="ml-2 btn btn-lg btn-white btn-outline-white" style="width: 150%" onClick="order()">Подтвердить заказ</span>
                </div>
                </div>
            </div>
          
        </div>
    	</div>
    </section>

    <script>
      setInterval(function () {
        var wasabi = document.getElementById('wasabi').value;
        var imbir = document.getElementById('imbir').value;
        $.ajax({
          url:"engine/cart.php",
          type:"POST",
          data:"type=getprice&imbir="+imbir+"&wasabi="+wasabi,
          success: function (responce,data) {
            //console.log(responce);
            document.getElementById("price").innerHTML=responce+"Р";
          }
        })
    
      },1000);

      function order() {
        wasabi = document.getElementById('wasabi').value;
        imbir = document.getElementById('imbir').value;
        adress = document.getElementById('adress').value;
        number = document.getElementById('number').value;
        person = document.getElementById('person').value;
        $.ajax({
          url:"engine/cart.php",
          type:"POST",
          data:"type=order&person="+document.getElementById('person').value+"&imbir="+imbir+"&wasabi="+wasabi+"&adress="+adress+"&number="+document.getElementById('number').value,
          success: function (responce,data) {
            console.log("Адрес "+person);
            document.location.href = "thx.php";
          }
        })
      }
    </script>

    

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Recent from blog</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text py-4 d-block">
              	<div class="meta">
                  <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">The Delicious Pizza</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text py-4 d-block">
              	<div class="meta">
                  <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">The Delicious Pizza</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text py-4 d-block">
              	<div class="meta">
                  <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">The Delicious Pizza</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

		
		<section class="ftco-appointment">
			<div class="overlay"></div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-md-flex align-items-center">
    			<div class="col-md-6 d-flex align-self-stretch">
    				<div id="map"></div>
    			</div>
	    		<div class="col-md-6 appointment ftco-animate">
	    			<h3 class="mb-3">Заказать роллы!</h3>
	    			<form action="#" class="appointment-form">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Имя">
		    				</div>
	    				</div>
	    				<div class="d-me-flex">
	    					<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Фамилия">
		    				</div>
	    				</div>
	    				<div class="form-group">
	              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Пожелания"></textarea>
	            </div>
	            <div class="form-group">
	              <input type="submit" value="Заказать" class="btn btn-primary py-3 px-4">
	            </div>
	    			</form>
	    		</div>    			
    		</div>
    	</div>
    </section>

    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Сервисы</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Приготовление</a></li>
                <li><a href="#" class="py-2 d-block">Доставка</a></li>
                <li><a href="#" class="py-2 d-block">Качество еды</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Нижний Тагил</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+7-963-04-90-354</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Все права защищены! | Этот сайт сделан <i class="icon-heart" aria-hidden="true"></i> by <a href="https://vk.com/Hrushev" target="_blank">Hrushev Lab</a> 
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>