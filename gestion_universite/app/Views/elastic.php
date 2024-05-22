<!DOCTYPE html>
<html lang="en">
<head><title>Elasticsearch</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
<h1>Vue Elasticsearch</h1>

<?php if (isset($dataCreated) && $dataCreated === true): ?>
    <p>Donnée créée avec succès.</p>
<?php elseif (isset($dataCreated) && $dataCreated === false): ?>
    <p>Échec de la création de la donnée.</p>
<?php endif; ?>

<?php if (!empty($documents)): ?>
    <h2>Liste des données enregistrées</h2>
    <ul>
        <?php foreach ($documents as $document): ?>
            <li>
                <strong>Nom :</strong> <?= $document['nom'] ?><br>
                <strong>Âge :</strong> <?= $document['age'] ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Aucune donnée enregistrée.</p>
<?php endif; ?>
</body>
</html>