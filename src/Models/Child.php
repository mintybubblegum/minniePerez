<?php

namespace minniePerez\Models;

use minniePerez\Database;

class Child{

    private ?int $id;
    private string $childName;
    private ?int $age;
    private string $place;
    private string $giftSuggestion;
    private ?string $dateTime;

    private $table = "childrenTeeth";
    private $database;

    public function __construct($id = null, $childName = "", $age = null, $place = "", $giftSuggestion = "", $dateTime = null){

        $this->id = $id;
        $this->childName = $childName;
        $this->age = $age;
        $this->place = $place;
        $this->giftSuggestion = $giftSuggestion;
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
        return $this->childName;
    }

    public function getAge(){
        return $this->age;
    }

    public function getId(){
        return $this->id;
    }

    public function getDateTime(){
        return $this->dateTime;
    }

    public function getPlace(){
        return $this->place;
    }

    public function getGiftSuggestion(){
        return $this->giftSuggestion;
    }

    public function save(){
        $this->database->mysql->query("INSERT INTO `{$this->table}` (`childName`, `age`, `place`, `giftSuggestion`) VALUES (`$this->childName`, `$this->age`,`$this->place`,`$this->giftSuggestion');");
    }

    public function findById($id){
        $query = $this->database->mysql->query("SELECT * FROM `{$this->table}` WHERE `id` = {$id}"); 
        $result = $query->fetchAll(); 

        return new Child($result[0]["id"], $result[0]["childName"], $result[0]["age"], $result[0]["place"], $result[0]["giftSuggestion"], $result[0]["dateTime"]);
    }

    public function destroy(){
        $query = $this->database->mysql->query("DELETE FROM `{$this->table}` WHERE `{$this->table}`.`id` = {$this->id}"); 

    }
}
