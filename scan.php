<?php
function sanitize_input($data) {
    // Remove extra spaces, slashes, and convert special characters to HTML entities
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function detect_sql_injection($data) {
    // List of common SQL injection patterns
    $patterns = [
        '/\bSELECT\b/i',
        '/\bUNION\b/i',
        '/\bINSERT\b/i',
        '/\bUPDATE\b/i',
        '/\bDELETE\b/i',
        '/\bDROP\b/i',
        '/\b--\b/i',
        '/\b#\b/i',
        '/\b\/\*\b/i',
        '/\b\*\//i',
        '/\bOR\b/i',
        '/\bAND\b/i',
        '/\b1=1\b/i',
        '/\b1=0\b/i',
    ];

    foreach ($patterns as $pattern) {
        if (preg_match($pattern, $data)) {
            return true;
        }
    }
    return false;
}
?>