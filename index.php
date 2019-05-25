<?php
require 'data/user.php';
require 'data/page.php';
require 'data/product.php';
require 'function/function.php';
require 'function/user.php';
require 'function/page.php';
require 'function/cart.php';
require 'function/currency.php';
require 'function/product.php';
get_header();
$mod = isset($_GET['mod'])?$_GET['mod']:'home';
$view = isset($_GET['view'])?$_GET['view']:'main';
$path = "modules/{$mod}/{$view}.php";
if ((!is_login() && $view != "login"))
	{
        redirect("?mod=user&view=login");}
if (file_exists($path)) {
    require $path;
}else{
    echo "không tìm thấy ".$path;
}
get_footer(); ?>            
