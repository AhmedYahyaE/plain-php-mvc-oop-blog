<?php

namespace App\Controllers\Admin;

use System\Controller;

class SettingsController extends Controller
{
    /**
    * Display Settings Form
    *
    * @return mixed
    */
    public function index()
    {
        $this->html->setTitle('Settings');

        $data['success'] = $this->session->has('success') ? $this->session->pull('success') : null;
        $data['errors'] = $this->session->has('errors') ? $this->session->pull('errors') : null;

        $settingsModel = $this->load->model('Settings');

        $settingsModel->loadAll();

        $data['action'] = $this->url->link('/admin/settings/save');

        $data['site_name'] = $this->request->post('site_name') ?: $settingsModel->get('site_name');
        $data['site_email'] = $this->request->post('site_email') ?: $settingsModel->get('site_email');
        $data['site_status'] = $this->request->post('site_status') ?: $settingsModel->get('site_status');
        $data['site_close_msg'] = $this->request->post('site_close_msg') ?: $settingsModel->get('site_close_msg');

        $view = $this->view->render('admin/settings/form', $data); //    $this->view    is a non-existing property which will be accessed using __get() Magic Method in the parent Controller.php Class, which, in turn, will call get() method in Application.php Class, which will call coreClasses() method which will call render() method in ViewFactory.php Class, which returns a View.php class object

        return $this->adminLayout->render($view);
    }

    /**
    * Submit for creating new ad
    *
    * @return string | json
    */
    public function save()
    {
        if ($this->isValid()) {
            // it means there are no errors in form validation
            $this->load->model('Settings')->updateSettings();

            $this->session->set('success', 'Ad Has Been Created Successfully');

            $this->url->redirectTo('/admin/settings');
        } else {
            // it means there are errors in form validation
            $this->session->set('errors', $this->validator->flattenMessages());
            return $this->index();
        }
    }

     /**
     * Validate the form
     *
     * @param int $id
     * @return bool
     */
    private function isValid($id = null)
    {
        $this->validator->required('site_name', 'Site Name Is Required');
        $this->validator->required('site_email', 'Site Email Is Required');
        $this->validator->required('site_status', 'Site Status Is Required');
        $this->validator->required('site_close_msg', 'Site Close Message Is Required');

        return $this->validator->passes();
    }
}