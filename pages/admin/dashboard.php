<?php
session_start();

// ตรวจสอบว่าผู้ใช้ได้ล็อกอินหรือยัง
if (!isset($_SESSION['username'])) {
    // ถ้าไม่มี session ของผู้ใช้, รีไดเรกต์ไปหน้า login
    header("Location: login.php");
    exit();
}

// ถ้ามี session, แสดงข้อมูล
echo "ยินดีต้อนรับ, " . $_SESSION['username'] . " (คุณคือแอดมิน)";
?>
