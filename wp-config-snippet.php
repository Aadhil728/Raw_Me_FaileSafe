<?php
// Add this at the very top of your actual wp-config.php file:
if (!file_exists(__DIR__ . '/.authorized')) {
    http_response_code(503);
    die('Website is temporarily offline by owner.');
}