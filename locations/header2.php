<?php
// header.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Thekedaar - Interior Design</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
    
    <!-- Tiny Slider CSS (if used on the page) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    
    <!-- Your Custom CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
.logo-mobile {
    margin-right:140px;
    text-decoration: none; /* removes underline from link */
}

.logo-mobile h1 {
    font-size: 24px; /* adjust size as needed */
    font-weight: 700; /* bold */
    margin: 0 125px 0 0;
        display: inline-block; /* keeps it inline for alignment */
    color: #000; /* set your desired color */
}
        .mobile-nav-header {
    display: flex;
width: 95px;
    justify-content: space-between; /* push X to right */
    align-items: center; /* vertical alignment */
    padding: 10px 10px 0 0; /* adjust as needed */
}

.close-btn {
    font-size: 28px; /* size of X */
    background: none;
    border: none;
    cursor: pointer;
    color: #000; /* or white depending on mobile nav background */
}
.close-btn:focus {
    outline: none;
}

ul{
    margin-top: 1em;
  margin-bottom: 1em;
}

    </style>
</head>
<body>

<?php include __DIR__ . '/../templates/nav-2.php'; ?>
