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
$file = $_GET['file'];

if ($file && is_file($folder . $file)) {
    $content = file_get_contents($folder . $file);
    // echo $content;
    echo '<pre>' . $content . '</pre>';
} else {
    echo 'Invalid file.';
}
?>

</body>
</html>
