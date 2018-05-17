<?php
class homeController extends controller
{
    public function indexAction()
    {
        $this->view('home/index',$data=array('ss'=>$action));
        $this->model('home/index');
    }
}
