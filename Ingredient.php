<?php

class Ingredient
{
    protected $nom;
    protected $quantite;
    protected $typeQuantite;

    public function __construct($nom, $quantite, $typeQuantite)
    {
        $this->nom = $nom;
        $this->quantite = $quantite;
        $this->typeQuantite = $typeQuantite;
    }

    public function detailIngredient()
    {
        return $this->nom . ' : ' . $this->quantite . ' ' . $this->typeQuantite;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

    public function getQuantite()
    {
        return $this->quantite;
    }

    public function getTypeQuantite()
    {
        return $this->typeQuantite;
    }
}
