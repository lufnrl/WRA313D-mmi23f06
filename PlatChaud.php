<?php

class PlatChaud extends Recette
{
    protected $typeDePlat;
    protected $origine;

    public function __construct($nom, $typeDePlat, $origine)
    {
        parent::__construct($nom, true);
        $this->typeDePlat = $typeDePlat;
        $this->origine = $origine;
    }

    public function afficher()
    {
        return 'Plat chaud : ' . $this->nom . ' (' . $this->typeDePlat . ', ' . $this->origine . ')<br>';
    }
}