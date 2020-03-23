<?php
require_once CORE.'Controller.php';

class homeController extends Controller
{
    public function index($id='', $name='')
    {
        $this->view('login//index',[
            'name' => $name,
            'id' => $id
        ]);
        $this->view->render();
    }
}