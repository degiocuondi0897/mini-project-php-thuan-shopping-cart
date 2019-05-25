<div id="content" class="wp-inner">
    <?php
    $id = (int) $_GET['id'];
    $item = get_product_by_id($id);
    show_array($item);
    ?>
    <h1 class="title-page"><?php echo $item['title']; ?></h1>
    <div class="detal-page">
        <a href="" class="thumb" style="width: 100px;">
            <img src="<?php echo $item['thumbnail'] ?>" alt="">
        </a>
        <a href="<?php echo $item['url']; ?>"><?php echo $item['title'] ?> </a>
        <p class="excerpt"> <?php if (isset($item['excerpt'])) {
                echo $item['excerpt'];
            } ?></p>
        <span class="price"> <?php echo currency_format($item['price']); ?></span>
        <p class="content"> <?php 
        if (isset($item['content'])) {
                echo $item['content'];
        }
        ?></p>
        <!--<a href="<?php // echo $item['url_add_cart']; ?>" style="color: red"> mua ngay</a>-->
    </div>

</div>
