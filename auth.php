<?php
session_start();

$userInput = $_POST;

if (!empty($userInput)) {

    $logins = [
        ['username' => 'admin', 'password' => 'admin', 'fullname' => 'John Doe'],
        ['username' => 'john', 'password' => '123$', 'fullname' => 'Jonathan Doe'],
        ['username' => 'daniel', 'password' => '436$', 'fullname' => 'Daniel Doe'],
    ];

    $username = trim($userInput['username']);
    $password = trim($userInput['password']);

    foreach ($logins as $login) {
        if ($username === $login['username'] && $password === $login['password']) {
            $_SESSION['username'] = $username;
            $_SESSION['fullname'] = $login['fullname'];
            $_SESSION['auth'] = true;
            break;
        } else {
            $_SESSION['auth'] = false;
        }
    }

    if ($_SESSION['auth'] === true) {
        header('Location: index.php');
    } else {
        header('Location: login.php');
    }
} else {
    header('Location: login.php');
}

