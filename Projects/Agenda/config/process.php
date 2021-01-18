<?php

    session_status();

    include_once("connection.php");
    include_once("url.php");

    $contacts = [];

    $query = "SELECT * FROM contacts";

    $stmt = $conn->prepare($query);

    $stmt->execute();

    $contacts = $stmt->fetchAll();