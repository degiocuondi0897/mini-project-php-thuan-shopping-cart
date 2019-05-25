<?php 
	$id = (int)$_GET['id'];
	echo $id;
	delete_item_cart($id);
	redirect("?mod=cart&view=show_cart");
 ?>