<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Rekeninggegevens</h1>


    <div>
        <h2>Rekening 1</h2>
        <p>Naam eigenaar: <?= $rekening->naamEigenaar ?></p>
        <p>Rekeningnummer: <?= $rekening->rekeningNummer ?></p>
        <p>Saldo: €<?= number_format($rekening->saldo, 2, ',', '.') ?></p>
        <p>Opnamelimiet: €<?= number_format($rekening->opnameLimiet, 2, ',', '.') ?></p>
        <p>Max rood: €<?= number_format($rekening->maxRood, 2, ',', '.') ?></p>
    </div>    

    <div>
        <h2>Rekening 2</h2>
        <p>Naam eigenaar: <?= $rekening2->naamEigenaar ?></p>
        <p>Rekeningnummer: <?= $rekening2->rekeningNummer ?></p>
        <p>Saldo: €<?= number_format($rekening2->saldo, 2, ',', '.') ?></p>
        <p>Opnamelimiet: €<?= number_format($rekening2->opnameLimiet, 2, ',', '.') ?></p>
        <p>Max rood: €<?= number_format($rekening2->maxRood, 2, ',', '.') ?></p>
    </div>

    <div>
        <h2>Rekening 3</h2>
        <p>Naam eigenaar: <?= $rekening3->naamEigenaar ?></p>
        <p>Rekeningnummer: <?= $rekening3->rekeningNummer ?></p>
        <p>Saldo: €<?= number_format($rekening3->saldo, 2, ',', '.') ?></p>
        <p>Opnamelimiet: €<?= number_format($rekening3->opnameLimiet, 2, ',', '.') ?></p>
        <p>Max rood: €<?= number_format($rekening3->maxRood, 2, ',', '.') ?></p>
    </div>
    
</body>
</html>