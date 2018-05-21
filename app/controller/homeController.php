<?php
class homeController extends controller
{
    public function indexAction()
    {
    	include CUSTOM . 'slider.php';
        $this->view('home/index',$data=array('ss'=>$action));
        $this->model('home/index');
    }
}
