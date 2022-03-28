<?php

function getArea($type, $length , $height){
    switch ($type) {
        case 'reactangle':
            $area= $length * $height;
            return "Area of ". ucwords($type) . " is {$area}";
        case 'square':
            $area= $length * $length;
            return "Area of ". ucwords($type) . " is {$area}";
        case 'circle':
            $area= 3.1416*($length * $length);
            return "Area of ". ucwords($type) . " is {$area}";
        case 'triangle':
            $area= 0.5*($length * $height);
            return "Area of ". ucwords($type) . " is {$area}";
        
        default:
            return "Something Went Wrong.";
    }
}

?>