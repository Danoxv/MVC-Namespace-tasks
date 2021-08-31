<?php
// Задача 88.1 Упростите следующий код с использованием use:

namespace Project;
use \Core\Users\;
class Test
{
    public function __construct()
    {
        // Создаем 3 объекта одного класса:
        $data1  = new Data('user1');
        $data2  = new Data('user3');
        $data3  = new Data('user3');
    }
}
//Задача 88.2
namespace Users;

use \Core\Admin\;
class Page extends Controller
{

}
//Задача 88.3
// Упростите следующий код с использованием use:
namespace Project;

use \Core\Admin\;
use  \Core\Users\Storage\;

class Test
{
    public function __construct()
    {
        $model = new Model;
        $data  = new Data;
    }
}

//Задача 88.4 Упростите следующий код с использованием use:

namespace Core\Storage;

use \Core\Storage\;
class Model
{
    public function __construct()
    {
        $database  = new DataBase;
    }
}