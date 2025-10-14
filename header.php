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
    <link rel="stylesheet" href="assets/css/style.css">
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

<!-- Header -->
<header class="site-header">
    <div class="containerh">
        <!-- Logo -->
        <div class="logo">
            <a href="index">
                <img src="assets/images/Logo.svg" alt="Modern Interior Designers" title="Modern Interior Designers">
            </a>
        </div>

        <!-- Desktop Navigation -->
        <nav class="nav-desktop">
            <ul>
                <li><a href="aboutus">About us</a></li>
                <!-- Services link with Dropdown -->
                <li class="has-dropdown">
                    <a href="service-2">Services</a>
                    <ul class="dropdown-menu">
                        <li><a href="residentialservice-2">Residential Designing</a></li>
                        <li><a href="commercial-interior-design">Commercial Interior Design</a></li>
                        <li><a href="renovation-2">Renovation</a></li>
                        <li><a href="modular-furniture-2">Modular Furniture</a></li>
                    </ul>
                </li>
                <li><a href="portfolio">Portfolio</a></li>
                <li><a href="blogs/">Blogs</a></li>
                <li><a href="contact-us-2">Contact</a></li>
            </ul>
        </nav>

        <!-- Mobile Menu Button -->
        <div class="menu-toggle" id="menu-toggle">
            <span>Menu</span>
        </div>
    </div>
</header>

<!-- Mobile Navigation (Hidden by default) -->
<div class="mobile-nav" id="mobile-nav">
    <div class="mobile-nav-header" >
        <a href="index" class="logo-mobile">
                <img src="assets/images/Logo-black.svg" alt="Interior design services in Delhi" title="Interior design services in Delhi">
        </a>
        <button class="close-btn" id="close-btn">&times;</button>
    </div>
    <ul>
        <li><a href="aboutus">About us</a></li>
        <li><a href="aboutus#how-we-work">How we work</a></li>
        <!-- Services link with expandable Submenu for Mobile -->
        <li class="has-dropdown">
            <div class="mobile-link-wrapper">
                <a href="service-2">Services</a>
                <button class="dropdown-toggle" aria-label="Toggle Services Submenu">+</button>
            </div>
            <!-- <ul class="dropdown-menu">
                <li><a href="residentialservice-2">Residential Designing</a></li>
                <li><a href="commercial-interior-design">Commercial Interior Design</a></li>
                <li><a href="renovationservice-2">Renovation</a></li>
                <li><a href="modularservice-2">Modular Furniture</a></li>
            </ul> -->
        </li>
         <li><a href="residentialservice-2">Residential Designing</a></li>
                <li><a href="commercial-interior-design">Commercial Interior Design</a></li>
                <li><a href="renovation-2">Renovation</a></li>
                <li><a href="modular-furniture-2">Modular Furniture</a></li>
        <li><a href="portfolio">Portfolio</a></li>
                        <li><a href="blogs/">Blogs</a></li>

        <li><a href="contact-us-2">Contact</a></li>
    </ul>
</div>