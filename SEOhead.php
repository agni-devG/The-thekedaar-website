<?php
// Base domain (no trailing slash)
$domain = "https://thethekedaar.in";

// Get current path (e.g., /about, /contact, /services/interior-design)
$path = $_SERVER['REQUEST_URI'];

// Remove any .php extension from the path if it appears
$path = preg_replace('/\.php$/', '', $path);

// Build the full canonical URL
$canonical_url = $domain . $path;


$path = preg_replace('/\.php$/', '', $path);
$path = preg_replace('/index$/', '', $path);
$path = strtok($path, '?'); // removes any query parameters



?>



<!-- ✅ Canonical Tag -->
<link rel="canonical" href="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>" />








