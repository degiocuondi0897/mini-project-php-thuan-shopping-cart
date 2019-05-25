<?php
//show_array(get_info_cart());
$list_buy = get_list_buy();
//show_array($list_buy);
$total = get_total_cart();
?>
<div id="main-content-wp" class="cart-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <h3 class="title">Giỏ hàng</h3>
            </div>
        </div>
    </div>
    <?php if (!empty($list_buy)) {
        ?>
    <form action="?mod=cart&view=update_cart" method="POST">
        <div id="wrapper" class="wp-inner clearfix">
            <div class="section" id="info-cart-wp">
                <div class="section-detail table-responsive">

                    <table class="table">
                        <thead>
                            <tr>
                                <td>Mã sản phẩm</td>
                                <td>Ảnh sản phẩm</td>
                                <td>Tên sản phẩm</td>
                                <td>Giá sản phẩm</td>
                                <td>Số lượng</td>
                                <td>Thành tiền</td>
                                <td>Thao tác</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list_buy as $k => $value) { ?>
                                <tr>
                                    <td>HCA00031</td>
                                    <td>
                                        <a href="" title="" class="thumb">
                                            <img src="<?php echo $value['thumbnail']; ?>" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="<?php echo $value['url']; ?>" title="" class="name-product"><?php echo $value['title']; ?></a>
                                    </td>
                                    <td><?php echo currency_format($value['price']); ?></td>
                                    <td>
                                        <input type="text" name="qty[<?php echo $k;?>]" value="<?php echo $value['qty']; ?>" class="num-order">
                                    </td>
                                    <td>
                                        <?php echo currency_format($value['sub_total']); ?>
                                    </td>
                                    <td>
                                        <a href="?mod=cart&view=delete_item_cart&id=<?php echo $k?>" title="" class="del-product">Xóa<i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                            <?php }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <div class="clearfix">
                                        <p id="total-price" class="fl-right">Tổng giá: <span><?php echo currency_format($total); ?></span></p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    <div class="clearfix">
                                        <div class="fl-right">
                                            <input type="submit" name="update-cart" id="update-cart" value="Cập nhật giỏ hàng">
<!--                                            <a href="" title="" id="update-cart">Cập nhật giỏ hàng</a>-->
                                            <a href="?page=checkout" title="" id="checkout-cart">Thanh toán</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>



                </div>
            </div>
            <div class="section" id="action-cart-wp">
                <div class="section-detail">
                    <p class="title">Click vào <span>“Cập nhật giỏ hàng”</span> để cập nhật số lượng. Nhập vào số lượng <span>0</span> để xóa sản phẩm khỏi giỏ hàng. Nhấn vào thanh toán để hoàn tất mua hàng.</p>
                    <a href="?mod=product&view=main" title="" id="buy-more">Mua tiếp</a><br/>
                    <a href="?mod=cart&view=delete_cart" title="" id="delete-cart">Xóa giỏ hàng</a>
                </div>
            </div>
        </div>
    </form>
    <?php } else {?>
    <p>không có sản phẩm nào trong giỏ hàng.nhấn vào <a href="?mod=product&view=main">đây</a> để mua hàng</p>   
                    <?php    } ?>
</div>