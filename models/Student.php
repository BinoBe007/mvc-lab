<?php
namespace App\Models;

use PDO;

class Student {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAll(): array {
        $stmt = $this->pdo->query("SELECT * FROM students");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function add(string $name): void {
        $stmt = $this->pdo->prepare("INSERT INTO students (name) VALUES (:name)");
        $stmt->execute(['name' => $name]);
    }
}
