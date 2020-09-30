<?php

$vowel = "q";

switch($vowel)
{
    case 'a':
    case 'e':
    case 'i':
    case 'o':
    case 'u':
    echo "<b>$vowel</b> is an Vowel.";
    break;

    default:
    echo "<b>$vowel</b> is an Consonant.";
}

?>