<?php
function get_greatest_common_divisor( $a, $b ) {
	$greatest = $a > $b ? $a: $b;
	$smallest = $a > $b ? $b: $a;
	$remainder = $greatest % $smallest;
	return 0 == $remainder ? $smallest : get_greatest_common_divisor( $smallest, $remainder );
}
echo get_greatest_common_divisor(150,25);
?>