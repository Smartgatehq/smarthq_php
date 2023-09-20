<?php

// SQL injection using prepared statement

$stmt = $conn->prepare('SLECET * FROM users WHERE username = ? AND password = ?');

$stmt->bind_param('ss', $username, $password);

$username = $_POST['username'];
$password = $_POST['password'];

$stmt->execute();
$result = $stmt->get_result();



?>