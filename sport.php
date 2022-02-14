<?php

class sport implements ISport
{
   protected $nomsport;
   protected $nbjoueurs;

    /**
     * @param $nomsport
     * @param $nbjoueurs
     */
    public function __construct(string $nomsport,int $nbjoueurs)
    {
        $this->nomsport = $nomsport;
        $this->nbjoueurs = $nbjoueurs;
    }

    /**
     * @return string
     */
    public function getNomsport(): string
    {
        return $this->nomsport;
    }

    /**
     * @return int
     */
    public function getNbjoueurs(): int
    {
        return $this->nbjoueurs;
    }
    public function getDescription(): string
    {
        return 'Description:"nom du sport:' .$this->nomsport. "nb de joueur:" .$this->nbjoueurs . '"<br>"';
    }

}