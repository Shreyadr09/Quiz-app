<?php 

// Count All Course
$selCourse = $conn->query("SELECT COUNT(cou_id) as totCourse FROM course_tbl ")->fetch(PDO::FETCH_ASSOC);


// Count All Exam
$selExam = $conn->query("SELECT COUNT(ex_id) as totExam FROM exam_tbl ")->fetch(PDO::FETCH_ASSOC);


// // Database configuration
// $host = 'ec2-18-206-252-110.compute-1.amazonaws.com';
// $dbName = 'postgres';
// $username = 'ubuntu';
// $password = 'ubuntu';

// try {
//     // Create a new PDO instance
//     $conn = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//     // Handle the exception and display an error message
//     die("Database connection failed: " . $e->getMessage());
// }

// // Count All Course
// $selCourse = $conn->query("SELECT COUNT(cou_id) as totCourse FROM course_tbl")->fetch(PDO::FETCH_ASSOC);

// // Count All Exam
// $selExam = $conn->query("SELECT COUNT(ex_id) as totExam FROM exam_tbl")->fetch(PDO::FETCH_ASSOC);

 ?>