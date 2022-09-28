<?php
    function modifier($num) {
        $result = floor(($num - 10) / 2);
        return $result < 0 ? $result : "+" . $result;
    }
    function modifierAsInt($num) {
        return floor(($num - 10) / 2);
    }
    
    //Returns string with lowercase and underscores instead of spaces.
    function tableCase($string) {
        return str_replace(' ', '_',strtolower($string));
    }
?>