<?php

function get_list_product() {
    global $list_product;
    foreach ($list_product as &$item_product) {
        $item_product['url'] ="?mod=product&view=detail&id=1";
        $item_product['url_add_cart'] = "?mod=cart&view=add_item_cart&id={$item_product['id']}";
        $item_product['price_format'] = currency_format($item_product['price']);
    }
    return $list_product;
}

function get_product_by_id($product_id) {
    global $list_product;
    if (array_key_exists($product_id, $list_product)) {
        return $list_product[$product_id];
    }
}
?>