<?php

namespace App\Controllers\Admin\Common;

use System\Controller;
use System\View\ViewInterface;

class LayoutController extends Controller
{
    /**
    * Render the layout with the given view Object
    *
    * @param \System\View\ViewInterface $view
    */
    public function render(ViewInterface $view)
    {
        $data['content'] = $view;
        $data['header'] = $this->load->controller('Admin/Common/Header')->index();
        $data['sidebar'] = $this->load->controller('Admin/Common/Sidebar')->index();
        $data['footer'] = $this->load->controller('Admin/Common/Footer')->index();

        return $this->view->render('admin/common/layout', $data); //    $this->view    is a non-existing property which will be accessed using __get() Magic Method in the parent Controller.php Class, which, in turn, will call get() method in Application.php Class, which will call coreClasses() method which will call render() method in ViewFactory.php Class, which returns a View.php class object
    }
}