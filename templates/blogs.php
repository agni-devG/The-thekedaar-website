<?php
// =====================
// Coming Soon Page
// =====================

// Set launch date (Year, Month, Day, Hour, Minute, Second)
$launchDate = strtotime("2025-12-31 00:00:00"); 

// Current timestamp
$now = time();

// Remaining seconds
$remaining = $launchDate - $now;

// Convert to days, hours, minutes, seconds
$days = floor($remaining / 86400);
$hours = floor(($remaining % 86400) / 3600);
$minutes = floor(($remaining % 3600) / 60);
$seconds = $remaining % 60;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Coming Soon</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: "Segoe UI", Arial, sans-serif;
      background: linear-gradient(135deg, #2b5876, #4e4376);
      color: white;
      text-align: center;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }
    h1 {
      font-size: 3rem;
      margin-bottom: 20px;
    }
    .countdown {
      font-size: 1.5rem;
      background: rgba(255,255,255,0.1);
      padding: 20px 40px;
      border-radius: 12px;
      display: inline-block;
    }
  </style>
</head>
<body>
  <h1>🚀 Our Blogs are  Coming Soon</h1>
  <div class="countdown">
    <p>Launching in:</p>
    <p>
      <?php echo "$days Days, $hours Hours, $minutes Minutes, $seconds Seconds"; ?>
    </p>
  </div>
</body>
</html>
