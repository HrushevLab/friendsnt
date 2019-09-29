<?php 
session_start();
require_once 'engine/cart.php';
require_once 'engine/settings.php';
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
	          <li class="nav-item active"><a href="index.php" class="nav-link">Акции</a></li>
	          <li class="nav-item"><a href="#onePlusOne" class="nav-link">1+1</a></li>
	          <li class="nav-item"><a href="#set" class="nav-link">Сеты</a></li>
	          <li class="nav-item"><a href="#hot" class="nav-link">Теплые роллы</a></li>
	          <li class="nav-item"><a href="#cold" class="nav-link">Холодные роллы</a></li>
	          <li class="nav-item"><a href="cart.php" class="nav-link"><img src="images/cart.png" alt="Cart" style="width: 30px;"></a></li>
            <li class="nav-item"><a href="cart.php" class="nav-link" id="counter" style="color:'green';"><?php if (isset( $_SESSION['item_count'])){echo $_SESSION['item_count'];} else {echo "0";} ?></a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">
      <div class="slider-item">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 ftco-animate">
            	<span class="subheading">Акция 1+1</span>
              <h1 class="mb-4">Насладитесь роллами вдвойне!</h1>
              <p class="mb-4 mb-md-5"></p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Заказать сейчас</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Посмотерть меню</a></p>
            </div>
            <div class="col-md-6 ftco-animate">
            	<img src="images/bg_1.png" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>

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
       ?>

      <div class="slider-item">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
            	<span class="subheading">Акция <?php echo $day; ?>!</span>
              <h1 class="mb-4">Скидка на <?php echo $sales; ?></h1>
              <p class="mb-4 mb-md-5">Новая цена <span class="naming"><?php echo $new_price; ?> рублей</span></p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Заказать сейчас</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Посмотерть меню</a></p>
            </div>
            <div class="col-md-6 ftco-animate">
            	<img src="images/bg_2.png" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>
      
      <div class="slider-item" >
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <span class="subheading">Скидка 5% при самовывозе!</span>
              <h1 class="mb-4">Насладитесь вкусными роллами по самой низкой цене!</h1>
              <p class="mb-4 mb-md-5"></p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Заказать сейчас</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Посмотерть меню</a></p>
            </div>

          </div>
        </div>
      </div>


      <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Добро пожаловать в Friends_NT</span>
              <h1 class="mb-4">Мы доставляем самые вкуснейшие роллы</h1>
              <p class="mb-4 mb-md-5">Доставляем в любую часть Нижнего Тагила.</p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Заказать сейчас</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Посмотерть меню</a></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>+7-963-04-90-354</h3>
	    						<p>Заказывайте самые вкусные роллы!</p>
	    					</div>
	    				</div>
	    				<!--<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>198 West 21th Street</h3>
	    						<p>Suite 721 New York NY 10016</p>
	    					</div>
	    				</div>-->
	    				<div class="col-md-4 d-flex ftco-animate raspisanie">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Доставка ежедневно</h3>
	    						<p>С 8:00 до 21:00</p>
	    					</div>
	    				</div>
             <div class="col-md-4 d-flex ftco-animate">
                
                <div class="text">
                  <a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Узнать цены</a>
                </div>
              </div>
	    			</div>

	    		</div>
	    		<div class="social d-md-flex pl-md-5 p-4 align-items-center">
	    			<ul class="social-icon">
              <li class="ftco-animate"><a href="https://vk.com/nt_friends"><span class="naming">ВК</span></a></li>
              <li class="ftco-animate"><a href="https://www.instagram.com/friends_nt/"><span class="icon-instagram"></span></a></li>
            </ul>
	    		</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(images/about.jpg);"></div>
    	<div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
          <h2 class="mb-4">Добро пожаловать в <span class="naming"> Friends_NT! </span>Пожалуй лучшую службу доставки роллов!</h2>
        </div>
        <div>
  				<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didnâ€™t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
  			</div>
    	</div>
    </section>

    <section class="ftco-section ftco-services">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Friends_NT</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
    		<div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Широкий Асортимент</h3>
                <p>Горячие роллы, хородные роллы и сеты на любой вкус!</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-bicycle"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Быстрая доставка!</h3>
                <p>Доставим быстро в любую часть города! Скорость наше второе имя!</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-pizza-1"></span></div>
              <div class="media-body">
                <h3 class="heading">Постоянные скидки!</h3>
                <p>Мы работаем не за деньги, а за идею о вкусных и дешевых роллах.</p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>
    <a id="onePlusOne"></a>
     <section class="ftco-section">


    	<div class="container">

    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 heading-section ftco-animate text-center" style="background-color: rgba(250, 197, 100, 0.9) !important; margin-top: 100px; padding-top: 25px;">
            <h2 class="mb-4">Лучшие предложения 1+1</h2>
            <p>Приобретая 1 порцию роллов, вы автоматические получаете любую вторую порцию роллов совершенно бесплатно.</p>
          </div>
        </div>
    	</div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-flex">

          <?php 
          $onePlusOneRoll = R::find( 'fnt_menu', ' category = ? ', [ 'onePlusOne' ] );
          $numOfRoll = R::count( 'fnt_menu' );
          $counter = 0;
          $flag = false;
          for ($i=1; $i < $numOfRoll; $i++) { 
            if ($onePlusOneRoll[$i]['name'] != ""){
              $counter++
          
           ?>

    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img <?php if ($flag == true){echo "order-lg-last";} ?>" style="background-image: url(sushi/s1.jpg);"></a>
    					<div class="text p-4">
    						<h3><?php echo $onePlusOneRoll[$i]['name']; ?></h3>
    						<p>Начинка: огурец, пекинская капуста, болгарский перец.</p>
    						<p class="price"><span><?php echo $onePlusOneRoll[$i]['price']; ?></span> <span class="ml-2 btn btn-white btn-outline-white" onClick="add_item(<?php echo $onePlusOneRoll[$i]['id']; ?>)">Добавить в корзину</span></p>
    					</div>
    				</div>
    			</div>

          <?php 
          if ($counter == 3) {
               $flag = !$flag;
               $counter = 0;
             };
             }}
              
           ?>
          

         <!-- <script>
            var counter_item = 0;

            function add_item(id_item) {
              $.ajax({
                url: '/engine/cart.php',
                type: 'POST',
                data:"type=add_item&id="+id_item,
                success: function(responce){
                  counter_item = counter_item + 1;
                  console.log(responce);
                }
              });
            }
          </script> -->

    		</div>
    	</div>

      <a id="set"></a>
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 heading-section ftco-animate text-center" style="background-color: rgba(250, 197, 100, 0.9) !important; margin-top: 100px; padding-top: 25px;">
            <h2 class="mb-4">Сеты роллов</h2>
            <p>Большие порции самых вкусных роллов в Нижнем Тагиле</p>
          </div>
        </div>
      </div>
      <div class="container-wrap">
        <div class="row no-gutters d-flex">

          <?php 
          $onePlusOneRoll = R::find( 'fnt_menu', ' category = ? ', [ 'set' ] );
          $numOfRoll = R::count( 'fnt_menu' );
          $counter = 0;
          $flag = false;
          for ($i=1; $i < $numOfRoll; $i++) { 
            if ($onePlusOneRoll[$i]['name'] != ""){
              $counter++
          
           ?>

          <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <a href="#" class="img <?php if ($flag == true){echo "order-lg-last";} ?>" style="background-image: url(sushi/s1.jpg);"></a>
              <div class="text p-4">
                <h3><?php echo $onePlusOneRoll[$i]['name']; ?></h3>
                <p>Начинка: огурец, пекинская капуста, болгарский перец.</p>
                <p class="price"><span><?php echo $onePlusOneRoll[$i]['price']; ?></span> <span class="ml-2 btn btn-white btn-outline-white" onClick="add_item(<?php echo $onePlusOneRoll[$i]['id']; ?>)">Добавить в корзину</span></p>
              </div>
            </div>
          </div>

          <?php 
          if ($counter == 3) {
               $flag = !$flag;
               $counter = 0;
             };
             }}
              
           ?>
          

         <!-- <script>
            var counter_item = 0;

            function add_item(id_item) {
              $.ajax({
                url: '/engine/cart.php',
                type: 'POST',
                data:"type=add_item&id="+id_item,
                success: function(responce){
                  counter_item = counter_item + 1;
                  console.log(responce);
                }
              });
            }
          </script> -->

        </div>
      </div>

      <a id="hot"></a>
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 heading-section ftco-animate text-center" style="background-color: rgba(250, 197, 100, 0.9) !important; margin-top: 100px; padding-top: 25px;">
            <h2 class="mb-4">Теплые роллы</h2>
            <p>Насладитесь нежным вкусом наших теплых роллов.</p>
          </div>
        </div>
      </div>
      <div class="container-wrap">
        <div class="row no-gutters d-flex">

          <?php 
          $onePlusOneRoll = R::find( 'fnt_menu', ' category = ? ', [ 'hot' ] );
          $numOfRoll = R::count( 'fnt_menu' );
          $counter = 0;
          $flag = false;
          for ($i=1; $i < $numOfRoll; $i++) { 
            if ($onePlusOneRoll[$i]['name'] != ""){
              $counter++
          
           ?>

          <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <a href="#" class="img <?php if ($flag == true){echo "order-lg-last";} ?>" style="background-image: url(sushi/s1.jpg);"></a>
              <div class="text p-4">
                <h3><?php echo $onePlusOneRoll[$i]['name']; ?></h3>
                <p>Начинка: огурец, пекинская капуста, болгарский перец.</p>
                <p class="price"><span><?php echo $onePlusOneRoll[$i]['price']; ?></span> <span class="ml-2 btn btn-white btn-outline-white" onClick="add_item(<?php echo $onePlusOneRoll[$i]['id']; ?>)">Добавить в корзину</span></p>
              </div>
            </div>
          </div>

          <?php 
          if ($counter == 3) {
               $flag = !$flag;
               $counter = 0;
             };
             }}
              
           ?>
          

         <!-- <script>
            var counter_item = 0;

            function add_item(id_item) {
              $.ajax({
                url: '/engine/cart.php',
                type: 'POST',
                data:"type=add_item&id="+id_item,
                success: function(responce){
                  counter_item = counter_item + 1;
                  console.log(responce);
                }
              });
            }
          </script>-->

        </div>
      </div>

      <a id="cold"></a>
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 heading-section ftco-animate text-center" style="background-color: rgba(250, 197, 100, 0.9) !important; margin-top: 100px; padding-top: 25px;">
            <h2 class="mb-4">Холодные роллы</h2>
            <p>Холодные роллы уже ждут вас по самой низкой цене в Нижнем Тагиле</p>
          </div>
        </div>
      </div>
      <div class="container-wrap">
        <div class="row no-gutters d-flex">

          <?php 
          $onePlusOneRoll = R::find( 'fnt_menu', ' category = ? ', [ 'onePlusOne' ] );
          $numOfRoll = R::count( 'fnt_menu' );
          $counter = 0;
          $flag = false;
          for ($i=1; $i < $numOfRoll; $i++) { 
            if ($onePlusOneRoll[$i]['name'] != ""){
              $counter++
          
           ?>

          <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <a href="#" class="img <?php if ($flag == true){echo "order-lg-last";} ?>" style="background-image: url(sushi/s1.jpg);"></a>
              <div class="text p-4">
                <h3><?php echo $onePlusOneRoll[$i]['name']; ?></h3>
                <p>Начинка: огурец, пекинская капуста, болгарский перец.</p>
                <p class="price"><span><?php echo $onePlusOneRoll[$i]['price']; ?></span> <span class="ml-2 btn btn-white btn-outline-white" onClick="add_item(<?php echo $onePlusOneRoll[$i]['id']; ?>)">Добавить в корзину</span></p>
              </div>
            </div>
          </div>

          <?php 
          if ($counter == 3) {
               $flag = !$flag;
               $counter = 0;
             };
             }}
              
           ?>
          

          <script>
            var counter_item = 0;
          
            function add_item(id_item) {
            var counter_link = document.getElementById('counter');
              $.ajax({
                url: '/engine/cart.php',
                type: 'POST',
                data:"type=add_item&id="+id_item,
                success: function(responce){
                  counter_item = counter_item + 1;
                  counter_link.innerHTML = parseInt(counter_link.innerHTML,10)+1; 
                  console.log(responce);
                }
              });
            }
          </script>

        </div>
      </div>

    	
    </section>

    <section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>


		<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-10">
        		<div class="row">
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-pizza-1"></span></div>
		              	<strong class="number" data-number="100">0</strong>
		              	<span>Pizza Branches</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-medal"></span></div>
		              	<strong class="number" data-number="85">0</strong>
		              	<span>Number of Awards</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-laugh"></span></div>
		              	<strong class="number" data-number="10567">0</strong>
		              	<span>Happy Customer</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-chef"></span></div>
		              	<strong class="number" data-number="900">0</strong>
		              	<span>Staff</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
        </div>
      </div>
    </section>

    <section class="ftco-menu">
    	<div class="container-fluid">
    		<div class="row d-md-flex">
	    		<div class="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0" style="background-image: url(images/about.jpg);">
	    		</div>
	    		<div class="col-lg-8 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Pizza</a>

		              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Drinks</a>

		              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Burgers</a>

		              <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Pasta</a>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		              	<div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/pizza-1.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Itallian Pizza</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/pizza-2.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Itallian Pizza</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/pizza-3.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Itallian Pizza</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-1.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Lemonade Juice</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-2.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Pineapple Juice</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-3.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Soda Drinks</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/burger-1.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Itallian Pizza</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/burger-2.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Itallian Pizza</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/burger-3.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Itallian Pizza</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$300ð</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/pasta-1.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Itallian Pizza</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/pasta-2.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Itallian Pizza</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/pasta-3.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Itallian Pizza</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>

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