<?php
session_start();
$authenticated = $_SESSION['auth'] ?? null;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h3>Login</h3>
            <form action="auth.php" method="POST">
                <div class="form-group">
                    <label for="username">Username:</label><br/>
                    <input type="text" id="username" name="username" class="form-control w-25" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label><br/>
                    <input type="password" id="password" name="password" class="form-control w-25" required>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <p style="color:red;"><?php echo $authenticated === false ? 'Incorrect username and password' : '' ?></p>
        </div>
    </body>
</html>
