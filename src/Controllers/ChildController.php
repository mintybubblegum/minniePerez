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

        if (isset($_GET["action"]) && ($_GET["action"] == "edit"))
        {
            $this->edit($_GET["id"]);
            return;
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "delete")) 
        {
            $this->delete($_GET["id"]); 
            return;
        }
    
        if (isset($_GET["action"]) && ( $_GET["action"] == "update"))
        {
            $this->update($_POST,$_GET["id"]);
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
        $newChild = new Child(null, $request["childName"], (int)$request["age"], $request["place"], $request["giftSuggestion"]);     
        $newChild->save();
        $this->index();
    }

    public function delete($id){
        $childHelper = new Child();
        $child = $childHelper->findById($id);
        $child->destroy();
        $this->index();
    }

    public function edit($id){
        $childHelper = new Child();
        $child = $childHelper->findById($id);
        new View ("editChild", ["child" => $child]);
    }

    public function update(array $request, $id){
        $childHelper = new Child();
        $child = $childHelper->findById($id);
        $child->rename($request["childName"], $request["age"], $request["place"], $request["giftSuggestion"]);  
        $child->update();
        $this->index();
    }
}

