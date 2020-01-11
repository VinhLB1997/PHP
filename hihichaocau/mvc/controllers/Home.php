<?php

class Home extends BaseController
{
    private $song;
    private $song_gift;

    public function __construct()
    {
        $this->song = $this->model("SongModel");
        $this->song_gift = $this->model("SongGiftModel");
    }

    public function index(...$paths)
    {
        $dataSongs = $this->song->getAllSongs();
        $dataSongGifts = $this->song_gift->getAllSongGifts();
        $countSong = $this->song->countSongs();
        $countSongGift = $this->song_gift->countSongGifts();
        $this->view('default', ['dataSongs' => $dataSongs, 'dataSongGifts' => $dataSongGifts,
            'countSong' => $countSong, 'countSongGift' => $countSongGift]);
    }

    public function pagination()
    {
        $mode = "pagination";
        $page = ($_POST['page']) ?? 0;
        $keyword = ($_POST['keyword']) ?? "";
        $limit = 10;
        if (empty($keyword)) {
            $offset = (int) $page * $limit;
            $dataSongs = $this->song->getAllSongs($limit, $offset);
        } else {
            $mode = "search";
            $dataSongs = $this->song->getSongsByKeyWord($keyword);
        }
        return $this->viewPagination('listSong', ['dataSongs' => $dataSongs, 'mode' => $mode]);
    }

    public function handleSubmitSongGift()
    {
        $song_id = ($_POST['song_key']) ? base64_decode($_POST['song_key']) : 0;
        $your_name = ($_POST['your_name']) ?? "";
        $friend_name = ($_POST['friend_name']) ?? "";
        $message = ($_POST['message']) ?? "";
        if (empty($song_id)) {
            echo "false";
            exit;
        }
        $data = array("song_id" => $song_id, "name_sender" => $your_name, "name_receiver" => $friend_name, "message" => $message);
        $result = $this->song_gift->insertSongGifts($data);
        if ($result) {
            echo "true";
        } else {
            echo "false";
            exit;
        }
    }

    public function paginationSongGift()
    {
        $page = ($_POST['pageGift']) ?? 0;
        $limit = 4;
        $offset = (int) $page * $limit;
        $dataSongGifts = $this->song_gift->getAllSongGifts($limit, $offset);
        $countSongGift = $this->song_gift->countSongGifts();
        return $this->viewPagination('listSongGift', ['dataSongGifts' => $dataSongGifts, 'countSongGift' => $countSongGift]);
    }
}
