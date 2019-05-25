<?php 

	if (!file_exists('currency_format'))
	{
		function currency_format($number,$suffix="đ")
		{
			return number_format($number)."{$suffix}";
		}
	}
 ?>
