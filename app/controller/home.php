<?php
class home extends controller
{
    public function index()
    {
        echo 'INDEX2';
        $this->view('test/test');
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
