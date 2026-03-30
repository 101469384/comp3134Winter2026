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

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $password = $_POST["password"] ?? "";
    if (in_array($password, $commonPasswords)) {
        $authenticated = true;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Weak Password</title>
</head>
<body>

<?php if ($authenticated): ?>
    <h1>Successfully authenticated</h1>
<?php else: ?>
    <h1>Weak Password</h1>
    <form method="post">
        <label>Password</label>
        <input type="password" name="password">
        <br><br>
        <input type="submit" value="Login">
    </form>
<?php endif; ?>

</body>
</html>
