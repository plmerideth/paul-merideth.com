<?php
	function myShowVar($string, $expr)
	{
		echo '<pre>' . $string . print_r($expr, 1) . '</pre>';
	}