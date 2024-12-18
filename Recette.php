<?php

abstract class Recette
{
    protected $nom;
    protected $recetteChaude;
    protected static $nbRecettes = 0;
    protected $ingredients = [];

    public function __construct($nom, $recetteChaude)
    {
        $this->nom = $nom;
        $this->recetteChaude = $recetteChaude;
        self::$nbRecettes++;
    }

    public static function getNbRecettes()
    {
        return self::$nbRecettes;
    }
}