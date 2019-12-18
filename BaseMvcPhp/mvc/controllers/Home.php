<?php

class Home extends BaseController
{
    public function __construct()
    {
        $task = $this->model("TaskModel");
    }

    public function index(...$paths)
    {
        $this->view('default', ['Page' => 'task']);
    }

    public function sayHi(...$paths)
    {
        echo "Home - hi";
    }
}
