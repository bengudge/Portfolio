<?php
$errors = [];
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate name
    $firstName = filter_input(INPUT_POST, 'first-name', FILTER_SANITIZE_STRING);
    $error = "";
    if (!$firstName || trim($firstName) === '') {
        $error = 'Your First Name';
        array_push($errors, $error);
    }

    $lastName = filter_input(INPUT_POST, 'last-name', FILTER_SANITIZE_STRING);
    $error = "";
    if (!$lastName || trim($lastName) === '') {
        $error = 'Your Last Name';
        array_push($errors, $error);
    }
    
    // Validate email
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $error = "";
    if ($email) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!$email) {
            $error = 'A valid email';
            array_push($errors, $error);
        }
    } else {
        $error = 'Your email';
        array_push($errors, $error);
    }

    // Validate subject
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);

    // Validate message
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    $inputs['message'] = $message;
    $error = "";
    if (!$message || trim($message) === '') {
        $error = 'Message';
        array_push($errors, $error);
    }

    if($errors) {
        formatErrors($errors);
    }
}

function formatErrors($errs) {
    $allErrors = "";
    foreach($errs as $item) {
        $allErrors .= $item . "\\n";
    }
    echo "<script>alert('Please correct the following field(s):\\n{$allErrors}');</script>";
}


if (isset($_POST["first-name"], $_POST["last-name"], $_POST["email"], $_POST["message"]) 
        && empty($error)) {
    require "insert.php";
}