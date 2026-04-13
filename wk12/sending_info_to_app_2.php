<!DOCTYPE html>
<html>
<head>
    <title>Sending Info to App 2</title>
</head>
<body>
    <form method="get">
        <input name="q" placeholder="Enter Text">
        <br/>
        <input type="submit" value="Go">
    </form>

    <?php
    if (isset($_GET['q'])) {
        $safeInput = htmlspecialchars($_GET['q'], ENT_QUOTES, 'UTF-8');
        echo "<h2>You entered:</h2>";
        echo $safeInput;
    }
    ?>
</body>
</html>
