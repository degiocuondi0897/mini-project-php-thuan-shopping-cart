<?php

unset($_SESSION['login']);
setcookie('username', $username, time() - 3600, '/');
redirect("?mod=user&view=login");
?>
    