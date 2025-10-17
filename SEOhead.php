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

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv = 'content-language' content = 'en'>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="robots" content="index" />
<meta content="FOLLOW, INDEX, ALL" name="robots" />
<meta content="yes" name="ALLOW-SEARCH" />
<meta content="all" name="AUDIENCE" />
<meta content="index, follow" name="YahooSeeker" />
<meta content="index, follow" name="msnbot" />
<meta content="index, follow" name="googlebot" />
<meta name="author" content="The Thakedaar">
<meta property="article:modified_time" content="2022-09-24T17:54:59+00:00" />








