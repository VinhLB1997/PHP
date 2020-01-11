<?php
class BaseController
{
    public function model($model)
    {
        require_once "./mvc/models/$model.php";
        return new $model;
    }
    public function view($view, $data = [])
    {
        require_once "./mvc/views/$view.php";
    }
    public function viewPagination($view, $data = [])
    {
        require_once "./mvc/views/pages/$view.php";
    }
}
