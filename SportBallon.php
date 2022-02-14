<?php

class SportBallon extends sport
{
   private $largeur;
   private $longueur;

    /**
     * @param $largeur
     * @param $longueur
     */
    public function __construct(string $nomsport,int $nbjoueurs,int $largeur,int $longueur)
    {
        parent::__construct($nomsport,$nbjoueurs);
        $this->largeur = $largeur;
        $this->longueur = $longueur;
    }


    /**
     * @return mixed
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * @return mixed
     */
    public function getLongueur()
    {
        return $this->longueur;
    }
    public function getDescription(): string
    {
        return 'Description :"nom du sport:' .$this->nomsport. "nb de joueur:" .$this->nbjoueurs ."longueur:" .$this->longueur.  "largeur:" .$this->largeur. 'm"<br>';
    }


}