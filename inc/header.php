<?php
session_start();
ob_start();
print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>website sản phẩm</title>
        <link href="public/css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/global.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <div class="wp-inner">
                    <ul id="main-menu">
                        <li><a href="?mod=home&view=main">Trang chủ</a></li>
                        <li><a href="?mod=page&view=detail&id=1">Giới thiệu</a></li>
                        <li><a href="?mod=product&view=main">Sản phẩm </a></li>
                        <li><a href="?mod=page&view=detail&id=3">Tin tức</a></li> 
                        <li><a href="?mod=page&view=detail&id=2">Liên hệ</a></li> 
                        </li
                    </ul>
                    <div class="action_user">
                        <?php if (is_login()) { ?>
                        <a href="?mod=cart&view=show_cart">Giỏ hàng(<span><?php echo get_number_oder_cart();?></span>)</a>
                            <span class="notice">xin chào <strong><?php echo user_login(); ?></strong> </span>
                            <a href="?mod=user&view=logout" id="logout">Logout</a>
                        <?php } else { ?>
                            <a href="?mod=user&view=login" id="login">Login</a>
                        <?php }
                        ?>
                    </div>


                </div>
            </div>