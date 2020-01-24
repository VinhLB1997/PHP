<?php
class SongGiftModel extends Database
{
    public function getAllSongGifts($limit = 5, $offset = 0)
    {
        $sql = "SELECT s.name_song, s.link, s.image,
                    sg.name_sender, sg.name_receiver, sg.message, sg.create_at
                FROM
                    song_gifts sg
                LEFT JOIN songs s ON
                    sg.song_id = s.id
                ORDER BY sg.create_at DESC
                LIMIT :offset,:record";
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

    public function countSongGifts()
    {
        $sql = "SELECT COUNT(*) as total FROM song_gifts";
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

    public function insertSongGifts($data)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $timeNow = date('Y-m-d H:i');
        $sql = "INSERT INTO song_gifts (song_id, name_sender, name_receiver, `message`, create_at, update_at)
            VALUES (:song_id, :name_sender, :name_receiver, :messages, :create_at, :update_at)";
        // Sử đụng Prepare
        $stmt = $this->conn->prepare($sql);
        // Bind param
        $stmt->bindValue(':song_id', $data["song_id"], PDO::PARAM_INT);
        $stmt->bindValue(':name_sender', $data["name_sender"]);
        $stmt->bindValue(':name_receiver', $data["name_receiver"]);
        $stmt->bindValue(':messages', $data["message"]);
        $stmt->bindValue(':create_at', $timeNow);
        $stmt->bindValue(':update_at', $timeNow);
        // Thực thi câu truy vấn
        $result = $stmt->execute();
        return $result;
    }
}
