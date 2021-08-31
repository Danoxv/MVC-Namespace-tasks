<?php
//require_once 'core\controller.php';
//require_once 'project\controller.php';
//
//$controllercore = new  \Core\controller();
//
//$projectcontroller = new \Project\controller();


//Задача 86.2 Пусть у вас есть папка modules/cart.
// Сделайте так, чтобы все классы из этой папки относились к пространству имен Modules\Cart.
require_once 'modules^cart\page.php';
$new_mod_cart = new \Modules\Cart\Page();


//Задача 86.3
//Пусть у вас есть папка modules/shop/cart/. Сделайте так, чтобы все классы из этой папки относились к пространству имен Modules\Shop\Cart.
require_once 'modules\shop\cart\page.php';
$new_mod_shop_cart = new \Modules\Shop\Cart\Page();
