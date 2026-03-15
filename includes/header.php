<?php
// SEO defaults – override before including this file
$page_title       = $page_title ?? 'CRM4Retail — CRM для розничных магазинов';
$page_desc        = $page_desc ?? 'CRM4Retail от компании Хэдлайн (Ижевск) — умная CRM-система для роста продаж в рознице. Бонусные программы, сегментация, автоматические акции и подсказки кассирам.';
$page_keywords    = $page_keywords ?? 'CRM для розницы, CRM для магазинов, бонусная программа, автоматические акции, Хэдлайн Ижевск';
$page_canonical   = $page_canonical ?? 'https://headline-crm.vercel.app/';
$page_og_image    = $page_og_image ?? 'https://headline-crm.vercel.app/assets/img/og-cover.png';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_desc) ?>">
  <meta name="keywords"    content="<?= htmlspecialchars($page_keywords) ?>">
  <link rel="canonical"    href="<?= htmlspecialchars($page_canonical) ?>">

  <!-- Open Graph -->
  <meta property="og:type"        content="website">
  <meta property="og:title"       content="<?= htmlspecialchars($page_title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($page_desc) ?>">
  <meta property="og:url"         content="<?= htmlspecialchars($page_canonical) ?>">
  <meta property="og:image"       content="<?= htmlspecialchars($page_og_image) ?>">
  <meta property="og:locale"      content="ru_RU">

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="/assets/img/favicon.svg">

  <!-- Styles -->
  <link rel="stylesheet" href="/assets/css/main.css">

  <!-- Robots -->
  <meta name="robots" content="index, follow">
</head>
<body>

<!-- NAVBAR -->
<nav id="navbar">
  <div class="container nav-inner">
    <a href="/" class="nav-logo">CRM<span>4</span>Retail</a>
    <div class="nav-links">
      <a href="/vozmozhnosti/">Возможности</a>
      <a href="/kak-rabotaet/">Как работает</a>
      <a href="/dlya-kogo/">Для кого</a>
      <a href="/kejsy/">Кейсы</a>
      <a href="/ceny/">Цены</a>
      <a href="/faq/">FAQ</a>
    </div>
    <div class="nav-cta">
      <button class="btn btn-outline btn-sm" data-modal="callback-modal">Обратный звонок</button>
      <a href="/demo/" class="btn btn-primary" style="margin-left:0.5rem">Получить демо</a>
    </div>
    <button class="burger" aria-label="Меню">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>

<!-- MOBILE MENU -->
<div class="mobile-menu">
  <a href="/vozmozhnosti/">Возможности</a>
  <a href="/kak-rabotaet/">Как работает</a>
  <a href="/dlya-kogo/">Для кого</a>
  <a href="/kejsy/">Кейсы</a>
  <a href="/ceny/">Цены</a>
  <a href="/faq/">FAQ</a>
  <button class="btn btn-outline" data-modal="callback-modal">Обратный звонок</button>
  <a href="/demo/" class="btn btn-primary">Получить демо</a>
</div>
