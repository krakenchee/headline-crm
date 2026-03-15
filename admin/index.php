<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Вход — Панель администратора CRM4Retail</title>
  <meta name="robots" content="noindex, nofollow">
  <link rel="stylesheet" href="admin.css">
</head>
<body>
<div class="login-page">
  <div class="login-box">
    <div class="login-logo">CRM<span>4</span>Retail</div>
    <div class="login-subtitle">Панель администратора · Хэдлайн</div>

    <div id="login-error" class="alert alert-error" style="display:none"></div>

    <form id="login-form">
      <div class="form-group">
        <label class="form-label">Логин</label>
        <input type="text" name="username" id="username" class="form-input" placeholder="admin" required autocomplete="username">
      </div>
      <div class="form-group">
        <label class="form-label">Пароль</label>
        <input type="password" name="password" id="password" class="form-input" placeholder="••••••••" required autocomplete="current-password">
      </div>
      <button type="submit" class="btn btn-primary" style="width:100%" id="login-btn">
        Войти →
      </button>
    </form>

    <p style="margin-top:1.5rem;font-size:0.75rem;color:var(--text3);text-align:center">
      <a href="/" style="color:var(--text3)">← Вернуться на сайт</a>
    </p>
  </div>
</div>

<script>
document.getElementById('login-form').addEventListener('submit', async (e) => {
  e.preventDefault();
  const errorEl = document.getElementById('login-error');
  const btn = document.getElementById('login-btn');
  errorEl.style.display = 'none';
  btn.disabled = true;
  btn.textContent = 'Вход...';

  const data = {
    action: 'login',
    username: document.getElementById('username').value.trim(),
    password: document.getElementById('password').value
  };

  try {
    const resp = await fetch('../api/auth.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(data)
    });
    const result = await resp.json();
    if (result.success) {
      window.location.href = 'panel.php';
    } else {
      errorEl.textContent = result.error || 'Ошибка входа';
      errorEl.style.display = 'block';
    }
  } catch(e) {
    errorEl.textContent = 'Ошибка соединения';
    errorEl.style.display = 'block';
  } finally {
    btn.disabled = false;
    btn.textContent = 'Войти →';
  }
});
</script>
</body>
</html>
