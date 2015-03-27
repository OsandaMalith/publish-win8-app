<?php

function secure_find_business() {
	echo 'blah';
}

call_user_func( "secure_".$_GET['method'] );
