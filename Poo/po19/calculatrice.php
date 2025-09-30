<?php

class Calculatrice {
    function add($nb1, $nb2) {
        $result = $nb1 + $nb2;
        return $result;
    }
    function substract($nb1, $nb2) {
        $result = $nb1 - $nb2;
        return $result;
    }
    function division($nb1, $nb2) {
        if ($nb1 != 0 && $nb2 != 0) {
            $result = $nb1 / $nb2;
        } else {
            $result = " cela est pas deivision par zero !";
        }
        return $result;
    }
    function multiplication($nb1, $nb2) {
        $result = $nb1 * $nb2;
        return $result;
    }

}