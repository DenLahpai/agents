<?php
require_once "conn.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_REQUEST['username']);
    $password = $_REQUEST['password'];

    $database = new Database();
    $query = "SELECT * FROM users
        WHERE BINARY username = :username
        AND BINARY password = :password
    ;";
    $database->query($query);
    $database->bind(':username', $username);
    $database->bind(':password', $password);
    $rowCount = $database->rowCount();
    $rows = $database->resultset();
    if($rowCount > 0) {
        foreach ($rows as $row) {
            $_SESSION['userId'] = $row->id;
        }
        if($row->status == 'ACTIVE') {
            $_SESSION['msg_error'] = NULL;
            header("location: home.php");
        }
        else {
            $_SESSION['msg_error'] = "Your account is not active! Please contact us!";
            header("location: index.php");
        }
    }
    else {
        $_SESSION['msg_error'] = "Wrong username or password!";
        header("location: index.php");
    }

    // if ($rowCount > 0) {
    //     echo $_SESSION['userId'] = $row->id;
    // }


    // $stm = "SELECT * FROM users
    //     WHERE BINARY username = :username
    //     AND BINARY password = :password
    // ;";
    // $query = $conn->prepare($stm);
    // $query->bindParam(':username', $username);
    // $query->bindParam(':password', $password);
    // if($query->execute()) {
    //     if ($query->rowCount() > 0) {
    //         $r = $query->fetch(PDO:: FETCH_OBJ);
    //         if ($r->status == 'ACTIVE') {
    //             $_SESSION['userId'] = $r->id;
    //             $_SESSION['msg_error'] = NULL;
    //             header("location:home.php");
    //         }
    //         else {
    //             $_SESSION['msg_error'] = "Your account is no longer active!";
    //             header("location:index.php");
    //         }
    //     }
    //     else {
    //         $_SESSION['msg_error'] = "Wrong username or password!";
    //         header("location:index.php");
    //     }
    // }
    // else {
    //     $msg_error = "There was a connection problem to the database!";
    //     header("location:index.php");
    // }
}

?>
