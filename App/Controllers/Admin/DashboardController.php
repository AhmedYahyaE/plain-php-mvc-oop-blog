<?php

namespace App\Controllers\Admin;

use System\Controller;

class DashboardController extends Controller
{
     /**
     * Display Dashboard Page
     *
     * @return mixed
     */
    public function index()
    {
        $this->html->setTitle('Dashboard | Blog');

        $view = $this->view->render('admin/main/dashboard'); //    $this->view    is a non-existing property which will be accessed using __get() Magic Method in the parent Controller.php Class, which, in turn, will call get() method in Application.php Class, which will call coreClasses() method which will call render() method in ViewFactory.php Class, which returns a View.php class object

        return $this->adminLayout->render($view);
    }
}