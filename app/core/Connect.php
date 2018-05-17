<?php
class Connect
{
    public function myconnect()
    {   
        return new mysqli(HOST,USER,PASS,DB);
    }
}