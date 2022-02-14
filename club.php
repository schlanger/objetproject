<?php

class club implements comparable
{
    private $idclub;
    private $nomclub;
    private $nbpoints;
    private array $lesSports=array();

    /**
     * @param $idclub
     * @param $nomclub
     * @param $nbpoints
     * @param array $lesSports
     */
    public function __construct($idclub, $nomclub, $nbpoints)
    {
        $this->idclub = $idclub;
        $this->nomclub = $nomclub;
        $this->nbpoints = $nbpoints;
    }

    /**
     * @return mixed
     */
    public function getIdclub()
    {
        return $this->idclub;
    }

    /**
     * @return mixed
     */
    public function getNomclub()
    {
        return $this->nomclub;
    }

    /**
     * @return mixed
     */
    public function getNbpoints()
    {
        return $this->nbpoints;
    }

    /**
     * @return array
     */
    public function getlesSports (): array
    {
        return $this->lesSports;
    }
    public function  AjouterSport(sport $sport)
    {
        $this ->sport=$sport;
    }




    public function compareTo(club $listclub)
    {
    }

}