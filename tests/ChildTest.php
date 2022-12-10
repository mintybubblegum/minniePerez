<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use minniePerez\Models\Child;

    class ChildTest extends TestCase { 

    public function test_testOk(){ 
        $this->assertEquals(1,1);
    }

    public function test_ifGetChildNameWorkCorrectly(){
        $newChild = new Child(null, "Helena", "6", "playground", "a camera", null);
        $resultGetChildName = $newChild->getChildName();
        $this->assertEquals("Helena", $resultGetChildName);
    }

    public function test_ifGetAgeWorkCorrectly(){
        $newChild = new Child(null, "Helena", "6", "playground", "a camera", null);
        $resultGetAge = $newChild->getAge();
        $this->assertEquals("6", $resultGetAge);
    }

    public function test_ifGetPlaceWorkCorrectly(){
        $newChild = new Child(null, "Helena", "6", "playground", "a camera", null);
        $resultGetPlace = $newChild->getPlace();
        $this->assertEquals("playground", $resultGetPlace);
    }

    public function test_ifGetGiftSuggestionWorkCorrectly(){
        $newChild = new Child(null, "Helena", "6", "playground", "a camera", null);
        $resultGetGiftSuggestion = $newChild->getGiftSuggestion();
        $this->assertEquals("a camera", $resultGetGiftSuggestion);
    } 
}