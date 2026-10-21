<?php
declare(strict_types=1);
$brand = 'Nexora';
$year = date('Y');
$features = [
  ['number' => '01', 'title' => 'Made to connect', 'description' => 'A simpler way to explore what comes next.'],
  ['number' => '02', 'title' => 'Built for freedom', 'description' => 'Open ideas. More possibilities. Your move.'],
  ['number' => '03', 'title' => 'Future focused', 'description' => 'Discover the internet beyond the ordinary.'],
];
function e(string $value): string { return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }
?><!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#0c0c13">
  <meta name="description" content="Nexora — a fresh space for what's next in Web3. Discover a more open digital future.">
  <meta property="og:title" content="Nexora — The internet, reimagined">
  <meta property="og:description" content="A fresh space for what's next in Web3.">
  <meta property="og:type" content="website">
  <title><?= e($brand) ?> — The internet, reimagined</title>
  <link rel="icon" type="image/svg+xml" href="/assets/favicon.svg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/style.css">
  <script defer src="/assets/main.js"></script>
</head>
<body>
 <div class="ambient ambient-a" aria-hidden="true"></div>
 <div class="ambient ambient-b" aria-hidden="true"></div>
 <header class="site-header">
  <a href="#top" class="wordmark" aria-label="Nexora home"><span class="mark" aria-hidden="true">✳</span> nexora<span class="dot">.</span></a>
  <button class="menu-toggle" type="button" aria-controls="site-nav" aria-expanded="false" aria-label="Open navigation"><span></span><span></span></button>
  <nav id="site-nav" class="site-nav" aria-label="Main navigation">
   <a href="#about">About</a><a href="#experience">Explore</a><a class="nav-cta" href="mailto:hello@nexora.example?subject=Hello%20Nexora">Get in touch <span aria-hidden="true">↗</span></a>
  </nav>
 </header>
 <main id="top">
  <section class="hero container" aria-labelledby="hero-title">
    <div class="hero-visual">
      <span class="orbit orbit-one" aria-hidden="true"></span><span class="orbit orbit-two" aria-hidden="true"></span>
      <img src="/assets/hero-art.svg" alt="Abstract glowing violet 3D-inspired Web3 sculpture with transparent orbital rings" width="640" height="670" fetchpriority="high">
      <span class="float-label label-top"><span class="pulse"></span> THE NEXT ERA</span>
      <span class="float-label label-bottom">EXPLORE THE UNKNOWN <span aria-hidden="true">↗</span></span>
    </div>
    <div class="hero-content">
      <p class="eyebrow"><span class="eyebrow-line"></span> WELCOME TO WHAT'S NEXT</p>
      <h1 id="hero-title">The internet,<br><em>reimagined.</em></h1>
      <p class="hero-copy">New ideas. New possibilities.<br>One bold step into Web3.</p>
      <div class="hero-actions"><a class="button button-primary" href="#about">Explore Nexora <span aria-hidden="true">↗</span></a><a class="text-link" href="#experience">See what we're about <span aria-hidden="true">↓</span></a></div>
      <div class="hero-footnote"><span class="asterisk">✳</span> BUILT FOR THE NEXT GENERATION</div>
    </div>
  </section>
  <div class="container"><div class="section-rule"><span>BEYOND THE EXPECTED</span><span>SCROLL TO DISCOVER <span aria-hidden="true">↓</span></span></div></div>
  <section id="about" class="intro container">
    <p class="eyebrow"><span class="eyebrow-line"></span> A NEW PERSPECTIVE</p>
    <div class="intro-grid"><h2>Less noise.<br><span>More possibility.</span></h2><p>Web3 doesn't have to feel complicated. We're here for curious minds, fresh thinking and a more open digital world.</p></div>
  </section>
  <section id="experience" class="features container" aria-label="Our principles">
    <?php foreach ($features as $feature): ?>
    <article class="feature"><span class="feature-number"><?= e($feature['number']) ?> /</span><div class="feature-icon" aria-hidden="true">✳</div><h3><?= e($feature['title']) ?></h3><p><?= e($feature['description']) ?></p><span class="feature-arrow" aria-hidden="true">↗</span></article>
    <?php endforeach; ?>
  </section>
  <section class="closing container"><div class="closing-inner"><div><p class="eyebrow">THE FUTURE IS OPEN</p><h2>Curiosity looks<br>good on you<span>.</span></h2></div><a href="mailto:hello@nexora.example?subject=Hello%20Nexora" class="button button-light">Say hello <span aria-hidden="true">↗</span></a></div></section>
 </main>
 <footer class="site-footer container"><a href="#top" class="wordmark"><span class="mark" aria-hidden="true">✳</span> nexora<span class="dot">.</span></a><span>© <?= e((string)$year) ?> NEXORA. MADE FOR WHAT'S NEXT.</span><a href="#top" class="back-to-top">BACK TO TOP ↑</a></footer>
</body>
</html>