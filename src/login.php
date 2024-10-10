<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $userN = htmlspecialchars(trim($_POST["userN"]));
    $pwd = trim($_POST["pwd"]);
    $Email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);


    if (empty($userN) || empty($pwd)) {

        header("Location: ../login.php");
        exit();
    }


    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {

        header("Location: ../login.php?error=invalidemail");
        exit();
    }

    try {
        $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);
        require_once "handle.php";


        $query = "INSERT INTO userdbb (userName, pwd, Email) VALUES (?, ?, ?);";
        $stmt = $pdo->prepare($query);

        $stmt->execute([$userN, $hashed_pwd, $Email]);

        $pdo = null;
        $stmt = null;


        header("Location: ../login.php?success=true");
        exit();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {

    header("Location: ../login.php");
    exit();
}
