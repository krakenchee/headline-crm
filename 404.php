<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>404 — Страница не найдена · CRM4Retail</title>
  <meta name="robots" content="noindex">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=JetBrains+Mono:wght@400&family=Manrope:wght@400;500&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg: #080c12; --accent: #00e5ff; --accent2: #0af5b0;
      --text: #eaf0fb; --text2: #8a9ab8; --text3: #4d5f7a;
    }
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: 'Manrope', sans-serif;
      background: var(--bg); color: var(--text);
      min-height: 100vh;
      display: flex; align-items: center; justify-content: center;
      text-align: center; padding: 2rem;
      background-image: radial-gradient(ellipse 60% 50% at 50% 50%, rgba(0,229,255,0.04), transparent);
    }
    .code {
      font-family: 'JetBrains Mono', monospace;
      font-size: clamp(5rem, 15vw, 10rem);
      font-weight: 400;
      color: transparent;
      -webkit-text-stroke: 2px rgba(0,229,255,0.3);
      line-height: 1;
      margin-bottom: 1.5rem;
      animation: flicker 4s ease-in-out infinite;
    }
    @keyframes flicker {
      0%,100% { -webkit-text-stroke-color: rgba(0,229,255,0.3); }
      50%      { -webkit-text-stroke-color: rgba(0,229,255,0.6); }
    }
    h1 {
      font-family: 'Syne', sans-serif; font-size: clamp(1.4rem, 3vw, 2rem);
      margin-bottom: 1rem;
    }
    p { color: var(--text2); max-width: 400px; margin: 0 auto 2.5rem; font-size: 0.95rem; }
    .actions { display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; }
    .btn {
      display: inline-flex; align-items: center; gap: 0.5rem;
      padding: 0.85rem 2rem; border-radius: 50px;
      font-family: 'Syne', sans-serif; font-weight: 600; font-size: 0.95rem;
      transition: all 0.2s; text-decoration: none; cursor: pointer; border: none;
    }
    .btn-primary { background: var(--accent); color: #080c12; box-shadow: 0 0 24px rgba(0,229,255,0.2); }
    .btn-primary:hover { background: var(--accent2); transform: translateY(-2px); }
    .btn-outline { border: 1.5px solid rgba(255,255,255,0.15); color: var(--text2); }
    .btn-outline:hover { border-color: var(--accent); color: var(--accent); }
    .grid {
      position: fixed; inset: 0; pointer-events: none;
      background-image: linear-gradient(rgba(0,229,255,0.02) 1px, transparent 1px),
        linear-gradient(90deg, rgba(0,229,255,0.02) 1px, transparent 1px);
      background-size: 60px 60px;
      mask-image: radial-gradient(ellipse 60% 60% at 50% 50%, black, transparent);
    }
    .label {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.72rem; letter-spacing: 0.12em; text-transform: uppercase;
      color: var(--accent); margin-bottom: 1rem; display: block;
    }
  </style>
</head>
<body>
<div class="grid"></div>
<div style="position:relative;z-index:1">
  <div class="code">404</div>
  <span class="label">// страница не найдена</span>
  <h1>Кажется, эта страница потерялась</h1>
  <p>Возможно, ссылка устарела или страница была перемещена. Начните с главной.</p>
  <div class="actions">
    <a href="/" class="btn btn-primary">← На главную</a>
    <a href="/demo/" class="btn btn-outline">Получить демо</a>
  </div>
</div>
</body>
</html>
