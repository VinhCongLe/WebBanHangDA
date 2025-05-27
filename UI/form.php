<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nhập Thông Tin Người Dùng</title>
</head>
<body>
    <h2>Nhập thông tin người dùng</h2>
    
    <form action="process.php" method="post">
        <label for="name">Tên:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Gửi">
    </form>
</body>
</html>
