<?php
	setCookie("username", "", time()-214);
	header("Location:studlogin.php?err=logged out!");
?>