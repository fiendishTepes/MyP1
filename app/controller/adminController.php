<?php
class adminController extends controller {
    public function __construct()
    {
        $this->view('admin/dashboard');
    }
}
