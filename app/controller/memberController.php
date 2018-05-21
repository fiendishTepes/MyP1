<?php

class memberController extends controller {
    public function loginAction()
    {
        //$log = $_POST['nav'];
        //Application::myDump($log);
        $this->model('member/member')->login($_POST['nav']);
    }
    public function registerAction()
    {
        $this->view('member/register');
        //Application::myDump($_POST['reg']);
        $this->model('member/member')->register($_POST['reg']);
    }
}
