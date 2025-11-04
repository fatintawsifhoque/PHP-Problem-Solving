<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=school_db;charset=utf8mb4', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h2>কানেকশন সফল! ✅</h2>";

    // ডেটা ফেচ করুন
    $stmt = $pdo->query("SELECT title FROM posts");
    while ($row = $stmt->fetch()) {
        echo "<p>• " . htmlspecialchars($row['title']) . "</p>";
    }
} catch (PDOException $e) {
    die("কানেকশন ব্যর্থ ❌: " . $e->getMessage());
}
?>