<?php
file_put_contents("receive.txt", "\n".$_SERVER["QUERY_STRING"], FILE_APPEND);
?>
