<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TP Noté</title>
</head>
<body>
<h1>TP Noté : Groupe E - 18/12/2024 à 11h00</h1>

<?php
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});
?>
<h2>1. Création des Plats chaud</h2>
<?php
$platChaud = new PlatChaud('Lasagne', 'pâtes', 'Italienne');
echo $platChaud->afficher();

$platChaud2 = new PlatChaud('Tartiflette', 'pommes de terre', 'Savoyarde');
echo $platChaud2->afficher();
?>
<h2>2. Création d'une Pizza</h2>

<?php
$pizza = new Pizza('Hawaïenne', 'base tomate');
echo $pizza->afficher();

$ingredient1 = new Ingredient('Ananas', 10, 'rondelles');
$ingredient2 = new Ingredient('Jambon', 5, 'tranches');
$ingredient3 = new Ingredient('Mozzarella', 2, 'boules');
$pizza->addIngredient($ingredient1);
$pizza->addIngredient($ingredient2);
$pizza->addIngredient($ingredient3);

echo $pizza->afficher();
?>

<h2>3. Modification d'une recette</h2>
<?php
$pizza->modifierIngredient('Ananas', 15);
echo $pizza->afficher();
?>

<h2>4. Suppression d'un ingrédient</h2>
<?php
$pizza->supprimerIngredient('Ananas');
echo $pizza->afficher();
?>

<h2>5. Nombre de plats chaud</h2>
<?php
echo Recette::getNbRecettes().' recettes ont été crées.';
?>

</body>
</html>
