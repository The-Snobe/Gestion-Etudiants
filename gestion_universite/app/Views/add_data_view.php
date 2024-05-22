<!-- add_data_view.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Ajouter des données</title>
</head>
<body>
    <h1>Ajouter des données</h1>
    <form method="post" action="<?= base_url('elasticsearch/add') ?>">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom">
        <br>
        <label for="age">Âge :</label>
        <input type="number" name="age" id="age">
        <br>
        <input type="submit" value="Ajouter">
    </form>
</body>
</html>
