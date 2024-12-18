<?php

class Pizza extends PlatChaud implements IngredientsInterface
{
    protected $ingredients = [];
    protected $size;

    public function __construct($nom, $size)
    {
        parent::__construct($nom, 'Pizza', 'Italie');
        $this->size = $size;
    }

    public function afficher()
    {
        $ingredientsList = '';
        foreach ($this->ingredients as $ingredient) {
            $ingredientsList .= $ingredient->getNom() . ' (' . $ingredient->getQuantite() . ' ' . $ingredient->getTypeQuantite() . '), ';
        }
        $ingredientsList = rtrim($ingredientsList, ', ');

        return 'Pizza : ' . $this->nom . ' (' . $this->size . ') - Ingrédients : ' . $ingredientsList . '<br>';
    }

    public function addIngredient(Ingredient $ingredient)
    {
        $this->ingredients[$ingredient->getNom()] = $ingredient;
    }

    public function modifierIngredient($nom, $quantite)
    {
        if (isset($this->ingredients[$nom])) {
            $this->ingredients[$nom]->setQuantite($quantite);
        }
    }

    public function supprimerIngredient($nom)
    {
        if (isset($this->ingredients[$nom])) {
            unset($this->ingredients[$nom]);
        }
    }
}