<?php

namespace App\Controllers\Admin\Common;

use System\Controller;

class SidebarController extends Controller
{
    public function index()
    {
        return $this->view->render('admin/common/sidebar'); //    $this->view    is a non-existing property which will be accessed using __get() Magic Method in the parent Controller.php Class, which, in turn, will call get() method in Application.php Class, which will call coreClasses() method which will call render() method in ViewFactory.php Class, which returns a View.php class object
    }
}