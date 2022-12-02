<?php

namespace minniePerez\Models;

class ChildName {

    public function __construct($id = null, $childName = "", $age = "", $place = "", $giftSuggestion = "",$dateTime = null){
        if(!$this->database){
            $this->database = new Database();
            }
    
    }

}
