<?php

function get_header() {
    require 'inc/header.php';
}

function get_footer() {
    require 'inc/footer.php';
}

function redirect($url) {
    header("Location: {$url}");
}

function show_array($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    
}