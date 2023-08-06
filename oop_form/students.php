<?php
require_once './db.php';


class Student extends DB
{
    protected $db;

    public function __construct()
    {
        $this->db = new DB();
    }
    public function get_all_students(): array
    {
        $students = array();
        $result = $this->db->submit_query("SELECT * FROM students");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_object()) {
                $students[] = $row;
            }
        }
        return $students;
    }

    public function create_student($student_information)
    {
        $validation = $this->validate_student_info($student_information);
        if ($validation != true)
            return $validation;

        $name = $_POST['name'];
        $age = $_POST['age'];
        $grade = $_POST['grade'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];

        $result = $this->db->submit_query("INSERT INTO students (name, age, grade, email, dob, gender) VALUES ('$name', '$age', '$grade', '$email', '$dob', '$gender')");

        return $result;
    }

    protected function validate_student_info($student_information)
    {
        // validate student information
        if (empty($student_information))
            return "Empty Student Information";
        if (!isset($student_information['name']))
            return "Student name is required";
        if (!isset($student_information['gender']))
            return "Student gender is required";
        if ($student_information['gender'] != 'male' && $student_information['gender'] != 'female')
            return "Student gender should be male or female";

        return true;
    }
}
