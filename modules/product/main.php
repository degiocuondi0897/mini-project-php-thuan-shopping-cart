<?php
$list_product = get_list_product();
show_array($list_product);
?>
<div id="content "class="wp-inner">
    <h1>Đồ chơi trẻ em</h1>
    <div class="list-product">
        <ul class="list-item clearfix">
            <?php foreach ($list_product as $value) { ?>    
                <li>
                    <a href="<?php echo $item['url']; ?>" class="thumb">
                        <img src="<?php echo $value['thumbnail']; ?>" alt="" style="max-width: 100%;">					
                    </a>
                    <a  class="post_title"href="#"><?php echo $value['title']; ?></a>
                    <p> Giá: <span class="price"><?php echo $value['price']; ?></span></p>
                    <a href="<?php echo $value['url_add_cart'];?>" >Mua ngay</a>
                </li>
                <?php }
            ?>
        </ul>
    </div>
</div>