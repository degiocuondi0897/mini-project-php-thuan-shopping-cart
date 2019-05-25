<?php

//echo "ok";
//show_array($_POST);
update_cart($_POST['qty']);
redirect("?mod=cart&view=show_cart");
