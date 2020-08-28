<?php
// Action taken on login button
if(isset($_POST['login-submit'])) {

    require 'config.inc.php';

    // email and password from login form fields.
    $email = $_POST['email'];
    $password = $_POST['password'];

    // if both fields empty, return error=emptyfields
    if (empty($email) || empty($password)) {
        header("Location: ../portal.php?error=emptyfields");
        exit();
    } else {
        // Select query from DB
        $sql = "SELECT * FROM cg_user WHERE email=?";
        $stmt = mysqli_stmt_init($conn);
        // SQL error, can't find any data in DB
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../portal.php?error=sqlerror");
            exit();
        } else {
            // Binds the query with email on string 
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            // If there is a result, check if passwords are match. 
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['pwd']);
                if ($pwdCheck == false) {
                    header("Location: ../portal.php?error=wrongpassword");
                    exit();
                } else if ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['firstName'];
                    $_SESSION['email'] = $row['email'];
                    header("Location: ../index.php?login=success");
                    exit();
                } else {
                    header("Location: ../portal.php?error=wrongpassword");
                    exit();
                }
            } else {
                header("Location: ../portal.php?error=nouser");
                exit();
            }
        }
    }

} else {
    header("Location: ../index.php");
    exit();
}
