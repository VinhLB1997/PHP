<?php

class Task extends BaseController
{
    private $task;

    public function __construct()
    {
        $this->task = $this->model("TaskModel");
    }

    public function add(...$paths)
    {
        $task_name = ($_POST['task_name']) ?? '';
        $date_begin = ($_POST['date_begin']) ?? '';
        $date_end = ($_POST['date_end']) ?? '';
        $result = $this->task->createTask([
            'task_name' => "$task_name",
            'date_begin' => date('Y-m-d', strtotime($date_begin)),
            'date_end' => date('Y-m-d', strtotime($date_end))
        ]);
        echo $result;
    }
}
