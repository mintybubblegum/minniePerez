<?php

namespace minniePerez\Models;

use minniePerez\Database;

class Child{

    private ?int $id;
    private string $coder;
    private string $issue;
    private ?string $dateTime;

    
    private $table = "childrenTeeth";
    private $database;

    public function __construct($id = null, $childName = "", $age = "", $place = "", $giftSuggestion = "",$dateTime = null){

        $this->id = $id;
        $this->coder = $coder;
        $this->issue = $issue;
        $this->dateTime = $dateTime;

        if(!$this->database){
        $this->database = new Database();
        }
    }

    public function all(){
        $query = $this->database->mysql->query("select * from {$this->table}");
        $childrenArray = $query->fetchAll();

        $childrenList=[];

        foreach ($childrenArray as $child){
            $childItem = new Child($child["id"], $child["childName"], $child["age"], $child["place"], $child["giftSuggestion"], $child["dateTime"]);

            array_push($childrenList, $childItem);
        }

        return $childrenList;
    }

    public function getChildName(){
        return $this->coder;
    }

    public function getIssue(){
        return $this->issue;
    }

    public function getId(){
        return $this->id;
    }

    public function getDateTime(){
        return $this->dateTime;
    }
}
