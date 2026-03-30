<?php
$commonPasswords = [
    "123456",
    "123456789",
    "qwerty",
    "password",
    "12345",
    "qwerty123",
    "1q2w3e",
    "12345678",
    "111111",
    "123123"
];

$authenticated = false;
$username = "CyberQueen";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $password = $_POST["password"] ?? "";
    $hiddenUser = $_POST["username"] ?? $username;

    if (in_array($password, $commonPasswords)) {
        $authenticated = true;
        $username = $hiddenUser;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Weak Password Login v2</title>
</head>
<body>

<?php if ($authenticated): ?>
    <h1>Welcome <?php echo htmlspecialchars($username); ?> to Your Portal</h1>
<?php else: ?>
    <h1>Weak Password</h1>
    <form method="post">
        <input type="hidden" name="username" value="CyberQueen">
        <label>Password</label>
        <input type="password" name="password">
        <br><br>
        <input type="submit" value="Login">
    </form>
<?php endif; ?>

</body>
</html>
