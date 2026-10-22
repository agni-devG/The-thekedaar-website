# My PHP Website

This is a native PHP website built without any framework.  
It contains multiple static and dynamic pages with SEO-friendly meta tags and Open Graph support.

---

## Local development with automatic reload

From the project root, start PHP's built-in server in one terminal:

```powershell
php -S 127.0.0.1:8000
```

In a second terminal, start BrowserSync:

```powershell
npm run dev
```

Open `http://127.0.0.1:3000/`. BrowserSync proxies the PHP server and watches PHP, CSS, and JavaScript files for changes. Install dependencies first with `npm install` if needed.

---

## 🏗️ Project Overview

The website is designed for fast performance, easy customization, and compatibility with modern browsers.  
All pages are written in plain PHP, with reusable header and footer includes.