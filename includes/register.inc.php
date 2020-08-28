<?php
if(isset($_POST['register-submit'])) {

    require 'config.inc.php';

    $firstName = $_POST['first-name']; // name of the input in the form
    $LastName = $_POST['last-name']; // name of the input in the form
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['repeat-password'];

    if (empty($firstName) || empty($LastName) || empty($email) || empty($password) || empty($passwordRepeat)) {
        header("Location: ../portal.php?error=emptyfields&uid=".$username."&mail=".$email);
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../portal.php?error=invalidmailuid");
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../portal.php?error=invalidmail&uid=".$username);
        exit();
    } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../portal.php?error=invaliduid&mail=".$email);
        exit();
    } else if ($password !== $passwordRepeat) {
        header("Location: ../portal.php?error=passwordcheck&uid=".$username."&mail=".$email);
        exit();
    } else {
        $sql = "SELECT email FROM cg_user WHERE email=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) { // check error if the connection works
            header("Location: ../portal.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email); // bind the params from the user  to database
            // data type to pass in s for string, i for integer ($stmt, ss, $username, $password) etc.
            mysqli_stmt_execute($stmt); // execute the statement
            mysqli_stmt_store_result($stmt); // needed to fecth the information from the db
            $resultCheck = mysqli_stmt_num_rows($stmt); // check if the username is taken
            if ($resultCheck > 0) { // if user ? result is > 0
                header("Location: ../portal.php?error=usertaken&mail=".$email);
                exit();
            } else {
                $sql = "INSERT INTO cg_user (firstName, lastName, email, pwd) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../portal.php?error=sqlerror");
                    exit();
                } else {
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ssss", $firstName, $LastName, $email, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    session_start();
                    $_SESSION['userId'] = $row['firstName'];
                    $_SESSION['email'] = $row['email'];
                    header("Location: ../index.php?signup=success");

                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

} else {
    header("Location: ../index.php");
    exit();
}
?>
