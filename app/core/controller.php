<?php

class controller  
{
    public function model($model = '',$data = []) 
    {
        $num = count($r = explode('/', $model));
        if ($num > 1) {
            include MODEL . $model . '.php';
            return new $r[$num - 1];
        } else {
            include MODEL . $model . '.php';
            return new $model;
        }
    }
    public function view($view = '', $data = []) 
    {
        include VIEW . $view . '.php';
    }

}
