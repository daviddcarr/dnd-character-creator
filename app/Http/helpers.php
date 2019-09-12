<?php
    function modifier($num) {
        $result = floor(($num - 10) / 2);
        return $result < 0 ? $result : "+" . $result;
    }
    function modifierAsInt($num) {
        return floor(($num - 10) / 2);
    }
?>