<?php
function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    
    return true;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $number = $_POST["input"];
    $result = isPrime($input);
    $message = $result ? " The input number is prime." : "The input number is not prime.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Checker</title>
</head>
<body>
    <h1>Prime Number Checker</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="number">Enter a number:</label>
        <input type="number" name="input" id="number" required>
        <button type="submit">Test</button>
    </form>

    <?php if (isset($message)): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
</body>
</html>