<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Viewer</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
$folder = 'files/';
$files = scandir($folder);

foreach ($files as $file) {
    if (is_file($folder . $file)) {
        echo '<a href="read.php?file=' . urlencode($file) . '">' . $file . '</a><br>';
    }
}
?>

</body>
</html>
