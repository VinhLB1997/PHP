<?php
class SongModel extends Database
{
    public function getAllSongs()
    {
        $sql = "SELECT * FROM songs";
        // Sử đụng Prepare
        $stmt = $this->conn->prepare($sql);

        // Thực thi câu truy vấn
        $stmt->execute();

        // Khai báo fetch kiểu mảng kết hợp
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        // Lấy danh sách kết quả
        $listSong = $stmt->fetchAll();

        return $listSong;
    }
}
