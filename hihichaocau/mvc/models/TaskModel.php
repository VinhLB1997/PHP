<?php
class TaskModel extends Database
{
    public function createTask($data)
    {
        $message = "";
        $sql = "INSERT INTO task (task_name, date_begin, date_end) VALUES (:task_name,:date_begin,:date_end)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':task_name', $data['task_name']);
        $stmt->bindParam(':date_begin', $data['date_begin']);
        $stmt->bindParam(':date_end', $data['date_end']);
        $result = $stmt->execute();
        if ($result) {
            $message = "Thêm task thành công";
        } else {
            $message = "Lỗi: " . $sql . "<br>" . mysqli_error($this->conn);
        }
        // Ngắt kết nối
        $this->conn = null;
        return $message;
    }

    public function getListTask()
    {
        // Sử đụng Prepare
        $stmt = $this->conn->prepare("SELECT task_name FROM task");

        // Thực thi câu truy vấn
        $stmt->execute();

        // Khai báo fetch kiểu mảng kết hợp
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        // Lấy danh sách kết quả
        $result = $stmt->fetchAll();

        // Lặp kết quả
        foreach ($result as $item) {
            echo $item['task_name'];
        }
        // return $data;
    }
}
