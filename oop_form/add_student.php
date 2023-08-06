<?php

require_once './db.php';
require_once './students.php';

$student = new Student;
$student->create_student($_POST);

header('Location: ./');
