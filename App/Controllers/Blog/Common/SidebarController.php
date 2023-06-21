<?php

namespace App\Controllers\Blog\Common;

use System\Controller;

class SidebarController extends Controller
{
    public function index()
    {
        $data['categories'] = $this->load->model('Categories')->getEnabledCategoriesWithNumberOfTotalPosts();

        $data['ads'] = $this->load->model('Ads')->enabled();

        return $this->view->render('blog/common/sidebar', $data); //    $this->view    is a non-existing property which will be accessed using __get() Magic Method in the parent Controller.php Class, which, in turn, will call get() method in Application.php Class, which will call coreClasses() method which will call render() method in ViewFactory.php Class, which returns a View.php class object
    }
}