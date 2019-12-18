<?php
class StudentModel extends Database
{
    public function createStudents()
    {
        $sql = "INSERT INTO students(student_id, name, school_id, address, birthday, sex)
                VALUES ('00001','Vinh','1','Bắc Ninh', '17021997',1) ";
        $this->conn->exec($sql);
    }

    public function getStudents()
    {
        $sql = "SELECT * FROM students";
        // Sử đụng Prepare
        $stmt = $this->conn->prepare($sql);

        // Thực thi câu truy vấn
        $stmt->execute();

        // Khai báo fetch kiểu mảng kết hợp
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        
        // Lấy danh sách kết quả
        $listStudent = $stmt->fetchAll();

        $data = json_encode($listStudent);

        return $data;
    }
}
