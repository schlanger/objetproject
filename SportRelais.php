<?php

class SportRelais extends Sport
{
    private $distance;

    /**
     * @param $distance
     */
    public function __construct(string $nomsport,int $nbjoueurs,int $distance)
    {
        parent::__construct($nomsport,$nbjoueurs);
        $this->distance = $distance;
    }


    /**
     * @return mixed
     */
    public function getDistance()
    {
        return $this->distance;
    }

        public function getDescription(): string
    {
        return 'Description:"nom du sport:' .$this->nomsport. "nb de joueur:" .$this->nbjoueurs . 'personnes distance:'. $this->distance. 'm"<br>';
    }



}