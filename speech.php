<?php

function textToSpeech($text) {
    $escapedText = escapeshellarg($text);
    $command = "espeak -v en \"$escapedText\" --stdout | aplay"; // Adjust the language and command based on your system

    // Execute the command
    exec($command, $output, $returnCode);

    // Check for errors
    if ($returnCode !== 0) {
        echo 'Error occurred while executing eSpeak';
    }
}

// Example usage
$text = "Hello, this is a test.";
textToSpeech($text);

?>