<?php
// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

// Display contact form
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="mobile_phone_number">Mobile Phone Number:</label>
    <input type="tel" id="mobile_phone_number" name="mobile_phone_number"><br><br>
    <