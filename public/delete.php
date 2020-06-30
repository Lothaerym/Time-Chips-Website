<?php


/**
 * Delete a file
 */
$path = 'uploads/photo/'.$_POST["name"];
if (!unlink($path)){
    echo 'Erreur';
} else {
    header('Location: /album');
}