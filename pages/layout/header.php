<?php 
use config\Configuration as conf;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Romk</title>
        <?php
        foreach (conf::$cssFiles as $css) {
            echo "<link rel='stylesheet' type='text/css' href='".conf::CSS_URL.$css."'>";
        }
        ?>
        <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Raleway|Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    </head>
    <body>
