<?php
session_start();
$token = rand(1000,9999);
$_SESSION["confirmation"] = $token;
?>

<form method="POST" action="csfr_action.php">
    <input type="hidden" name="confirmation" value="<?php echo $token; ?>">
    <button type="submit">Submit</button>
</form>
