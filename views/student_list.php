<h2>Student List</h2>
<ul>
    <?php foreach ($students as $student): ?>
        <li><?= htmlspecialchars($student['name']) ?></li>
    <?php endforeach; ?>
</ul>
<a href="?action=create">Add New Student</a>
