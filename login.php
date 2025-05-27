<?php
session_start();
include "./includes/dbh.inc.php";

if (isset($_POST['cms']) && isset($_POST['password'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $cms = validate($_POST['cms']);
    $password = validate($_POST['password']);

    if (empty($cms)) {
        header("Location: index.php?error=User Name is required");
        exit();
    } elseif (empty($password)) {
        header("Location: index.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM logintb WHERE username = ? AND password = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $cms, $password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) >= 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['cms'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            header("Location: admin-panel.php");
            exit();
        } else {
            header("Location: index.php?error=Incorrect User name or password");
            exit();
        }
    }
} else {
    header("Location: index.php");
    exit();
}
?>