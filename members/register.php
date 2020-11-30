<?php include('sever.php') ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าสมัครสมาชิก</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
    <h2>สมัครสมาชิก</h2>
    </div>

    <from action="register_db.php"></from>
    <div class="input-group">
        <label for="username">ชื่อในระบบ</label>
        <input type="text" name="username">
    </div>
    <div class="input-group">
        <label for="email">อีเมลล์</label>
        <input type="email" name="email">
    </div>
    <div class="input-group">
        <label for="password_1">รหัสผ่าน</label>
        <input type="password" name="password_1">
    </div>
    <div class="input-group">
        <label for="password_2">ใส่รหัสอีกครั้ง</label>
        <input type="password" name="password_2">
    </div>

    

    <div class="input-group">
            <button type="submit" name="reg_user" class="btn">สมัครสมาชิก</button>
        </div>
    <p>คุณมีบัญชีอยู่แล้วใช่ไหม? <a href="login.php"> เข้าสู่ระบบ </a></p>
    
</body>
</html>