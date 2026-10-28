<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <title>Projekti Im LAMP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <h1>Përshëndetje nga Serveri Im!</h1>
        <p>Ky është një projekt demo me PHP, CSS dhe MySQL.</p>
        <p>Statusi i MySQL: <strong><?php echo ($conn) ? "I lidhur me sukses!" : "Gabim"; ?></strong></p>
    </div>
</body>
</html>
