<?php
include_once "../db/db_class.php";

class Subjects
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addSubjects($data)
    {
        $subName = mysqli_real_escape_string($this->db->link, $data['subjectN']);
        $subjectC = mysqli_real_escape_string($this->db->link, $data['subjectC']);
        $uni_id = mysqli_real_escape_string($this->db->link, $data['univN']);
        $c_id = mysqli_real_escape_string($this->db->link, $data['courseN']);
        $credit = mysqli_real_escape_string($this->db->link, $data['credit']);
        $cost = mysqli_real_escape_string($this->db->link, $data['cost']);
        $semester = mysqli_real_escape_string($this->db->link, $data['semester']);




        if (empty($subName) || empty($subjectC)) {
            $msg = "Can't be empty";
            return $msg;
        } else {
            $query =
                "INSERT INTO subject_tbl(c_id,u_id,sub_name,sub_code,credit,cost,semester)
                    VALUES('$c_id','$uni_id','$subName','$subjectC','$credit','$cost','$semester')";
            $unvInsert = $this->db->insert($query);
            if ($unvInsert) {
                $msg = "<span class='success' style='color: green;'>Course Inserted</span>";
                return $msg;
            } else {
                $msg = "<span class='failed' style='color: red;'>Course not  Inserted</span>";
                return $msg;
            }

        }
    }
}