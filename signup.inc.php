<?php
session_start();
include_once 'dbh.inc.php';

if (isset($_POST['submit'])) {
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
        header("Location: ../signup.php?signup=empty");
        exit();
    } elseif (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
        header("Location: ../signup.php?signup=invalid");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?signup=email");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE user_uid = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $uid);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            header("Location: ../signup.php?signup=usertaken");
            exit();
        } else {
            $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES (?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $hashedPwd);
            mysqli_stmt_execute($stmt);
            header("Location: ../signup.php?signup=success");
            exit();
        }
    }
} else {
    header("Location: ../signup.php");
    exit();
}
?>