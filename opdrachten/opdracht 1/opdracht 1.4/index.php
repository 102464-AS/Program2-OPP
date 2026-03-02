<?php

function magStemmen($age) {
    if ($age) {
        if ($age >= 18) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

echo("we testen de functie met leeftijd 19:<br>");
echo var_export(magStemmen(19));