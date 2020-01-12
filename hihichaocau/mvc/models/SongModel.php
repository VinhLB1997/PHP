<?php
class SongModel extends Database
{
    public function getAllSongs($limit = 10, $offset = 0)
    {
        $sql = "SELECT * FROM songs ORDER BY name_song ASC LIMIT :offset,:record";
        // Sử đụng Prepare
        $stmt = $this->conn->prepare($sql);
        // Bind param
        $stmt->bindValue(':offset', (int) $offset, PDO::PARAM_INT);
        $stmt->bindValue(':record', (int) $limit, PDO::PARAM_INT);
        // Thực thi câu truy vấn
        $stmt->execute();

        // Khai báo fetch kiểu mảng kết hợp
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        // Lấy danh sách kết quả
        $listSong = $stmt->fetchAll();

        return $listSong;
    }

    public function getSongsByKeyWord($keyword)
    {
        $sql = "SELECT * FROM songs WHERE name_song LIKE :keyword  LIMIT 0,10";
        // Sử đụng Prepare
        $stmt = $this->conn->prepare($sql);
        // Bind param
        $stmt->bindValue(':keyword', $keyword . "%");
        // Thực thi câu truy vấn
        $stmt->execute();

        // Khai báo fetch kiểu mảng kết hợp
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        // Lấy danh sách kết quả
        $listSong = $stmt->fetchAll();

        return $listSong;
    }

    public function countSongs()
    {
        $sql = "SELECT COUNT(*) as total FROM songs";
        // Sử đụng Prepare
        $stmt = $this->conn->prepare($sql);
        // Thực thi câu truy vấn
        $stmt->execute();

        // Khai báo fetch kiểu mảng kết hợp
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        // Lấy danh sách kết quả
        $count = $stmt->fetchColumn();
        return $count;
    }
}
