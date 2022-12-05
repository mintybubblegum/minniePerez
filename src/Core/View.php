<?php

namespace minniePerez\Core;

class View{
    public function __construct($view, $data = null){
        require_once("src/View/$view.php"); 
    } 
}