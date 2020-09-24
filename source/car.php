<?php

namespace userApp;

class car extends vehicle
{

    public $howManyPeopleFit;
    public $maxSpeed;


    public function setData($howManyPeopleFit, $maxSpeed)
    {
        $this->howManyPeopleFit = $howManyPeopleFit;
        $this->maxSpeed = $maxSpeed;

    }

    public function showCarData(){
        $data[] = $this->model;
        $data[] = $this->price;
        $data[] = $this->weight;
        $data[] = $this->engine;
        $data[] = $this->howManyPeopleFit;
        $data[] = $this->maxSpeed;

        return $data;
    }
}