<?php
class adminController extends controller {
    public function indexAction()
    {
    	echo "<h1>ADMIN</h1>";
        $this->view('admin/dashboard');
    }
}
