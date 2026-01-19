<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function convert($getal, $type = "BIN") {
    if ($type == "BIN") return decbin($getal);
    return $getal;
}

$number = $_POST['number'];

$result = convert((int)$number);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 1.1</title>
</head>
<body>
    <h1>Talstelsel Converter</h1>
    <form method="post">
        <label>Voer een getal in:</label><br>
        <input type="text" name="number" value="<?php echo htmlspecialchars($number); ?>"><br><br>
        <button type="submit">Van decimaal naar binair</button>
    </form>

    <h2>Resultaat: <?php echo htmlspecialchars($result); ?></h2>
</body>
</html>
