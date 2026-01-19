<?php
function berekenKamer($breete, $lengte, $hoogte = 0){
    if( $hoogte != 0){
        return $breete * $lengte * $hoogte;
    }

    return $breete * $lengte;
}

$breete = $_POST['breete'] ?? '';
$lengte = $_POST['lengte'] ?? '';
$hoogte = $_POST['hoogte'] ?? '';
$result = '';

if ($breete !== '' && $lengte !== '') {
    $result = berekenKamer((float)$breete, (float)$lengte, (float)$hoogte);
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Kamer Berekening</title>
</head>
<body>
    <h1>Kamer Berekening</h1>
    <form method="post">
        <label>Breedte (m):</label><br>
        <input type="text" name="breete" value="<?php echo htmlspecialchars($breete); ?>"><br><br>

        <label>Lengte (m):</label><br>
        <input type="text" name="lengte" value="<?php echo htmlspecialchars($lengte); ?>"><br><br>

        <label>Hoogte (optioneel, m):</label><br>
        <input type="text" name="hoogte" value="<?php echo htmlspecialchars($hoogte); ?>"><br><br>

        <button type="submit">Bereken</button>
    </form>

    <?php if ($result !== ''): ?>
        <h2>Resultaat: <?php echo htmlspecialchars($result); ?> m<?php echo $hoogte != 0 ? '³' : '²'; ?></h2>
    <?php endif; ?>
</body>
</html>