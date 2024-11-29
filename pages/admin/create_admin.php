<?php
// เชื่อมต่อฐานข้อมูล
require_once 'config/connect.php'; // ใช้ไฟล์การเชื่อมต่อฐานข้อมูล

// ข้อมูลบัญชีที่ต้องการสร้าง
$username = "momomi"; // ชื่อผู้ใช้ที่คุณต้องการ
$password = "nam00147"; // รหัสผ่านของคุณ

// เข้ารหัสรหัสผ่าน
$password_hashed = password_hash($password, PASSWORD_BCRYPT); // ใช้ bcrypt เพื่อเข้ารหัสรหัสผ่าน

// กำหนดค่า class เป็น 1 สำหรับแอดมิน
$class = 1; // 1 = แอดมิน

// คำสั่ง SQL เพื่อแทรกข้อมูลบัญชี
$sql = "INSERT INTO tbl_username (username, password, point, class, date) 
        VALUES (:username, :password, 0.00, :class, NOW())";
$stmt = $db->prepare($sql);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password_hashed);
$stmt->bindParam(':class', $class);

if ($stmt->execute()) {
    echo "บัญชีผู้ใช้ถูกสร้างเรียบร้อยแล้ว!";
} else {
    echo "เกิดข้อผิดพลาดในการสร้างบัญชี!";
}
?>
