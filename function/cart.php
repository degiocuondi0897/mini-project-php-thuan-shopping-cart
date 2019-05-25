<?php

function add_item_cart($id, $item) {
    $id = (int) $_GET['id'];
    $item = get_product_by_id($id);
    $qty = 1;
    if (array_key_exists($id, $_SESSION['cart']['buy'])) {
        $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1;
    }

    $_SESSION['cart']['buy'][$id] = array(
        'title' => $item['title'],
        'thumbnail' => $item['thumbnail'],
        'price' => $item['price'],
        'qty' => $qty,
        'sub_total' => $item['price'] * $qty
    );
    update_info_cart();
}

function update_info_cart() {
    $total = 0;
    $num_oder = 0;
    foreach ($_SESSION['cart']['buy'] as $item_cart) {
        $total += $item_cart['sub_total'];
        $num_oder += $item_cart['qty'];
    }
    $_SESSION['cart']['info'] = array(
        'total' => $total,
        'num_oder' => $num_oder,
    );
}

function get_total_cart() {
    if (isset($_SESSION['cart']['info'])) {
        return $_SESSION['cart']['info']['total'];
    }
}

function get_number_oder_cart() {
    if (isset($_SESSION['cart']['info'])) {
        return $_SESSION['cart']['info']['num_oder'];
    }
    return 0;
}

function get_list_buy() {
    if (isset($_SESSION['cart']['buy'])) {
        return $_SESSION['cart']['buy'];
    }
}

function delete_item_cart($id) {
    if (array_key_exists($id, $_SESSION['cart']['buy'])) {
        unset($_SESSION['cart']['buy'][$id]);
        update_info_cart();
    }
}

function delete_cart() {
    unset($_SESSION['cart']);
}

function update_cart($qty) {
    foreach ($qty as $k => $v) {
        $_SESSION['cart']['buy'][$k]['qty'] = $v;
        $_SESSION['cart']['buy'][$k]['sub_total'] = $v * $_SESSION['cart']['buy'][$k]['price'];
    }
    update_info_cart();
}

?>