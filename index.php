<?php
    session_start();
    include 'function.php';
    $authenticated = $_SESSION['auth'] ?? null;

    if (empty($authenticated)) {
        header('Location: login.php');
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Contact Us</title>
    </head>
    <body>
    <p>Welcome <?php echo $_SESSION['fullname']; ?>!</p>
    <p><a href="logout.php">Logout</a> </p>
    <h1>Contact US</h1>
    <?php
        if (empty($submittedValues)) {

    ?>
        <form action="index.php" method="POST">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" value="<?php echo getSubmittedValue('firstName'); ?>"/><br/>
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" value="<?php echo getSubmittedValue('lastName'); ?>"/><br/>
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="10" cols="30">
                <?php echo getSubmittedValue('message'); ?>
            </textarea><br/>
            <button type="submit">Save</button>
        </form>
    <?php
        } else {

    ?>
            <p> Thanks for your submission <?php echo $submittedValues['firstName'] . ' '. $submittedValues['lastName']; ?></p>
            <p>Your Message is : <br/><br/> <em><?php echo $submittedValues['message']; ?></em></p>
    <?php
        }
    ?>

    </body>
</html>
