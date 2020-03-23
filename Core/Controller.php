<?php
require_once 'View.php';
class Controller
{
    protected $view;

    public function view($view_data,$data=[])
    {
        $this->view = new View($view_data,$data);
        return $this->view;
    }
}