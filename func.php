<?php
$con = mysqli_connect("localhost", "root", "", "gymlogin");
if (isset($_POST['login_submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM logintb WHERE username = ? AND password = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result) == 1) {
        header("Location: admin-panel.php");
    } else {
        echo "<script>alert('Error login')</script>";
        echo "<script>window.open('index.php', '_self')</script>";
    }
}
if (isset($_POST['pat_submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $docapp = $_POST['docapp'];
    $query = "INSERT INTO members (fname, lname, email, contact, docapp) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "sssss", $fname, $lname, $email, $contact, $docapp);
    $result = mysqli_stmt_execute($stmt);
    if ($result) {
        echo "<script>alert('Member added.')</script>";
        echo "<script>window.open('admin-panel.php', '_self')</script>";
    } else {
        echo "<script>alert('Error adding member.')</script>";
        echo "<script>window.open('admin-panel.php', '_self')</script>";
    }
}
if (isset($_POST['tra_submit'])) {
    $Trainer_id = $_POST['Trainer_id'];
    $Name = $_POST['Name'];
    $phone = $_POST['phone'];
    $query = "INSERT INTO trainer (Trainer_id, Name, phone) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "iss", $Trainer_id, $Name, $phone);
    $result = mysqli_stmt_execute($stmt);
    if ($result) {
        echo "<script>alert('Trainer added.')</script>";
        echo "<script>window.open('admin-panel.php', '_self')</script>";
    }
}
if (isset($_POST['pay_submit'])) {
    $Payment_id = $_POST['Payment_id'];
    $Amount = $_POST['Amount'];
    $customer_id = $_POST['customer_id'];
    $payment_type = $_POST['payment_type'];
    $query = "INSERT INTO payment (Payment_id, Amount, customer_id, payment_type) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "iiss", $Payment_id, $Amount, $customer_id, $payment_type);
    $result = mysqli_stmt_execute($stmt);
    if ($result) {
        echo "<script>alert('Payment successful.')</script>";
        echo "<script>window.open('admin-panel.php', '_self')</script>";
    }
}
function get_patient_details()
{
    global $con;
    $query = "SELECT * FROM members";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($result)) {
        $fname = $row['fname'];
        $lname = $row['lname'];
        $email = $row['email'];
        $contact = $row['contact'];
        $docapp = $row['docapp'];

        $query = "SELECT * FROM trainer WHERE Trainer_id = ?";
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, "s", $docapp);
        mysqli_stmt_execute($stmt);
        $result2 = mysqli_stmt_get_result($stmt);
        $row2 = mysqli_fetch_array($result2);

        echo "<tr>
            <td>$fname</td>
            <td>$lname</td>
            <td>$email</td>
            <td>$contact</td>
            <td>$docapp</td>
            <td>" . ($row2['Name'] ?? 'Unknown') . "</td>
        </tr>";
    }
}
function get_package()
{
    global $con;
    $query = "SELECT * FROM package";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($result)) {
        $Package_id = $row['Package_id'];
        $Package_name = $row['Package_name'];
        $Amount = $row['Amount'];
        echo "<tr>
            <td>$Package_id</td>
            <td>$Package_name</td>
            <td>$Amount</td>
        </tr>";
    }
}
function get_trainer()
{
    global $con;
    $query = "SELECT * FROM trainer";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($result)) {
        $Trainer_id = $row['Trainer_id'];
        $Name = $row['Name'];
        $phone = $row['phone'];
        echo "<tr>
            <td>$Trainer_id</td>
            <td>$Name</td>
            <td>$phone</td>
        </tr>";
    }
}
function get_payment()
{
    global $con;
    $query = "SELECT * FROM payment";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($result)) {
        $Payment_id = $row['Payment_id'];
        $Amount = $row['Amount'];
        $payment_type = $row['payment_type'];
        $customer_id = $row['customer_id'];
        echo "<tr>
            <td>$Payment_id</td>
            <td>$Amount</td>
            <td>$payment_type</td>
            <td>$customer_id</td>
        </tr>";
    }
}
?>