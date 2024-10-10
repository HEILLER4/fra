<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $userN = htmlspecialchars(trim($_POST["username"]));
    $pwd = trim($_POST["passId"]);
    $Email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

    // Check if the fields are empty
    if (empty($userN) || empty($pwd)) {
        header("Location: ../signup.php?error=emptyfields");
        exit();
    }

    // Check if the email is valid
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidemail");
        exit();
    }

    try {
        require_once "handle.php";  // Include your database connection file

        // Check if the username already exists
        $query = "SELECT * FROM userdbb WHERE userName = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$userN]);

        if ($stmt->rowCount() > 0) {
            // Username already exists, redirect to signup with error message
            header("Location: ../signup.php?error=usernametaken");
            exit();
        }

        // If the username is unique, proceed with registration
        $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);

        // Insert the new user into the database
        $query = "INSERT INTO userdbb (userName, pwd, Email) VALUES (?, ?, ?);";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$userN, $hashed_pwd, $Email]);

        // Close the database connection
        $pdo = null;
        $stmt = null;

        // Redirect to signup page with success message
        header("Location: ../login.php?success=true");
        exit();

    } catch (PDOException $e) {
        // Handle any errors that occur during the query execution
        die("Query failed: " . $e->getMessage());
    }
} else {
    // If the request method is not POST, redirect back to the signup page
    header("Location: ../signup.php");
    exit();
}
