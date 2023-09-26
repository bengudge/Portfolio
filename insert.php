<?php

try {

    $sth = $conn->prepare("INSERT INTO `contacts` (`firstName`, `lastName`, `email`, `subject`, `message`) VALUES (?, ?, ?, ?, ?)");
    $sth->bindValue(1, $_POST["first-name"], PDO::PARAM_STR);
    $sth->bindValue(2, $_POST["last-name"], PDO::PARAM_STR);
    $sth->bindValue(3, $_POST["email"], PDO::PARAM_STR);
    $sth->bindValue(4, $_POST["subject"], PDO::PARAM_STR);
    $sth->bindValue(5, $_POST["message"], PDO::PARAM_STR);
    $sth->execute();

    echo "<script>alert('Contact message sent!');</script>";
}
catch(PDOException $e) {
    print ("Exception: " . $e->getMessage());
}