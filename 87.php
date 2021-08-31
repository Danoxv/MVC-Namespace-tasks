<?php

//Задача 87.1
//Упростите код для наследования класса, учитывая то, что оба класса находятся в одном пространстве имен.

namespace Modules\Shop;


class Cart
{

}
// типа новый файл
namespace Modules\Shop;

class UserCart extends Cart
{

}

//Задача 87.2 Пусть в файле index.php создается объект класса Controller:
//  Упростите код для создания объекта, учитывая то,
//что создание объекта класса происходит в том же пространстве имен, которому принадлежит класс.

namespace Admin;

new Controller;

//Задача 87.3 Даны два класса
//Упростите код для наследования класса, учитывая то, что оба класса находятся в одном пространстве имен.

namespace Modules\Shop\Core;

class Cart
{

}

namespace Modules\Shop;

class UserCart extends Core\Cart
{

}

//Задача 87.4
//Упростите код для создания объектов, учитывая пространство имен, в котором создаются объекты наших классов.

namespace Core\Data\Controller;

class Controller
{

}

namespace Core\Data\Model;

class Model
{

}

namespace Core\Data;

$controller = new Data\Controller;
$model      = new Data\Model;