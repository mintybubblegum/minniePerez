<?php

namespace minniePerez\Controllers;

use minniePerez\Core\View;
use minniePerez\Models\Child;

class ChildController{

    public function __construct(){

        if (isset($_GET["action"]) && ($_GET["action"] == "create"))
        {
            $this->create();
            return;
        }

        if (isset($_GET["action"]) && ( $_GET["action"] == "store"))
        {
            $this->store($_POST);
            return;
        }

        $this->index();
    }

    public function index()
    {
        $child = new Child;
        $children = $child->all();
        new View("childrenList",["child" => $children]);
    }   

    public function create(){
        new View ("createChild");
    }

    public function store(array $request){
        $newChild = new Child(null, $request["childName"], $request["age"], $request["place"], $request["giftSuggestion"], null);
        
        $newChild->save();

        $this->index();
    }

}

