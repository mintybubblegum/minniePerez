<?php

namespace minniePerez\Controllers;

use minniePerez\Core\View;
use minniePerez\Models\ChildName;

class ChildController{

    public function __construct(){

        if (isset($_GET["action"]) && ($_GET["action"] == "create"))
        {
            $this->create();
            return;
        }


        $this->index();

    }

    public function index()
    {
        $childName = new ChildName;
        $coders = $childName->all();
        new View("coderList",["coder" => $coders]);
    }   

    public function create(){
        new View ("createCoder");
    }

}

