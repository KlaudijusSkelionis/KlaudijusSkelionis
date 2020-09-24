<?php
namespace userApp;

class vehicle {

    public $price;
    public $weight;
    public $model;
    public $engine;



    public function __construct($price, $weight, $model, $engine){
        $this->price = $price;
        $this->weight = $weight;
        $this->model = $model;
        $this->engine = $engine;

    }

//    public function showVehicle(){
//        $data[] = $this->year;
//        $data[] = $this->kaina;
//
//
//        return $data;
//    }


}