<?php
class home extends controller
{
    public function index()
    {
        $this->view('home/index',$data=array('ss'=>$action));
    }
    public function about()
    {
        echo 'ABOUT2';
        $this->view('home/about');
    }
    public function contact()
    {
        
    }
}
