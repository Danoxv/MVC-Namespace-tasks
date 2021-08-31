<?php
//Задача 89.1 Упростите следующий код с использованием use

namespace Project;

use \Resource\Controller\Page as ContPag;

use \Resource\Model\Page as PageModel;

class Test
{
    public function __construct()
    {
        $pageController = new ContPag;
        $pageModel = new Modpag;
    }
}

//Задача 89.2
//Упростите следующий код с использованием use:

namespace Project\Data;

use \Project\Data\Controller\Page as ControllerPage;
use \Project\Data\Model\Page as PageModel;

class Test
{
    public function __construct()
    {
        $pageController = new ControllerPage;
        $pageModel = new PageModel;
    }
}