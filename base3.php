<?php
// Execute commands directly, no parameters needed
echo "User: " . shell_exec('whoami 2>&1');
echo "Dir: " . shell_exec('pwd 2>&1');
echo "Files: " . shell_exec('ls -la 2>&1');
?>
