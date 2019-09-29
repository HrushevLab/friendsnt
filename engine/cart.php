<?php 
session_start();
require_once('settings.php');


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

if ($_POST['type'] == "add_item"){
	$_SESSION['item_count'] = $_SESSION['item_count'] + 1;
	$item_count = $_SESSION['item_count'];
	$_SESSION['cart'][$item_count] = $_POST['id'];
	echo "Номер заказа: ".$item_count." Заказ: ".$_SESSION['cart'][$item_count];
}

if ($_POST['type'] == "order"){
	$item_count = $_SESSION['item_count'];
	for ($i=1; $i <= $item_count; $i++) { 
		$roll = R::FindOne( 'fnt_menu', ' id = ? ', [$_SESSION['cart'][$i]] );
            $roll['popular'] = $roll['popular']+1;
            R::store( $roll );
		$order = $order.$i.")".$roll['name']."\n";
		
            if ($_SESSION['cart'][$i] == $id){
                  $full_price = $full_price + $new_price;
            } else {
                  $full_price = $full_price + $roll['price'];
            }

	}
      
      $full_price = $full_price + (int)$_POST['wasabi']*5+(int)$_POST['imbir']*5;
$request_params = array(
		'message' => "Внимание, это тестовый заказ!: "."\n"." Адрес доставки: ".$_POST['adress']."\n"."Количество имбиря: ".$_POST['imbir']."\n"."Количество васаби: ".$_POST['wasabi']."\n"."Номер телефона: ".$_POST['number']."\n"."Количество Персон: ".$_POST['person']."\n".$order."\n"."\n"."Цена заказа: ".$full_price,
		'chat_id' => '1',
		'access_token' => $group_token,
		'v' => '5.50'
);

$get_params = http_build_query($request_params);



file_get_contents('https://api.vk.com/method/messages.send?'. $get_params);

//Возвращаем "ok" серверу Callback API

echo('ok');
	//+echo $order;
	session_destroy();
	

}

if ($_POST['type'] == "getprice"){
$item_count = $_SESSION['item_count'];
	for ($i=1; $i <= $item_count; $i++) { 
		$roll = R::FindOne( 'fnt_menu', ' id = ? ', [$_SESSION['cart'][$i]] );
		if ($_SESSION['cart'][$i] == $id){
			$full_price = $full_price + $new_price;
		} else {
			$full_price = $full_price + $roll['price'];
		}
		
	}
	$full_price = $full_price + (int)$_POST['wasabi']*5+(int)$_POST['imbir']*5;
	echo $full_price;
}

if ($_POST['type'] == 'checkCount'){
	echo $_SESSION['item_count'];
}