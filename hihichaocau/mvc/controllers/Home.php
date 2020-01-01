<?php

class Home extends BaseController
{
    private $song;

    public function __construct()
    {
        $this->song = $this->model("SongModel");
    }

    public function index(...$paths)
    {
        $dataSongs = $this->song->getAllSongs();
        $this->view('default', ['Page' => 'task', 'dataSongs' => $dataSongs]);
    }

    public function sayHi(...$paths)
    {
        echo "Home - hi";
    }
}
