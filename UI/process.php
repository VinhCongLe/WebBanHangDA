<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý thông tin</title>
</head>
<body>
    <h2>Thông tin đã nhận</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        
        echo "<p><strong>Tên:</strong> " . htmlspecialchars($name) . "</p>";
        echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
    } else {
        echo "<p>Không có dữ liệu được gửi đến.</p>";
    }
    ?>
    <br>
    <a href="form.php">Quay lại form</a>
</body>
</html>
