<?php
namespace App\Controllers;

use App\Models\Student;

class StudentController {
    private $studentModel;

    public function __construct(\PDO $pdo) {
        $this->studentModel = new Student($pdo);
    }

    public function index(): void {
        $students = $this->studentModel->getAll();
        include 'Views/student_list.php';
    }

    public function create(): void {
        include 'Views/student_form.php';
    }

    public function store(): void {
        if (!empty($_POST['name'])) {
            $this->studentModel->add($_POST['name']);
        }
        header("Location: index.php");
    }
}
