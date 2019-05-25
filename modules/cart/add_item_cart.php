<?php 
	
	$id = (int)$_GET['id'];
	$item = get_product_by_id($id);
	add_item_cart($id,$item);
	//show_array(get_info_cart());
	redirect("?mod=cart&view=show_cart");
 ?>