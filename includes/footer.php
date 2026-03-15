<!-- SUPPORT WIDGET -->
<div class="support-widget">
  <div class="support-icons hidden">
    <a href="https://t.me/crm4retail" target="_blank" rel="noopener" class="support-link">
      <span class="sl-icon sl-tg">✈️</span> Telegram
    </a>
    <a href="https://wa.me/7XXXXXXXXXX" target="_blank" rel="noopener" class="support-link">
      <span class="sl-icon sl-wa">💬</span> WhatsApp
    </a>
  </div>
  <button class="support-toggle" aria-label="Чат поддержки">💬</button>
</div>

<!-- COOKIE BANNER -->
<div id="cookie-banner">
  <div class="cookie-inner">
    <p>
      Мы используем файлы cookie для улучшения работы сайта и анализа трафика.
      Продолжая использовать сайт, вы соглашаетесь с нашей
      <a href="/politika-konfidencialnosti/">политикой конфиденциальности</a>.
    </p>
    <div class="cookie-actions">
      <button id="cookie-decline" class="btn btn-ghost btn-sm">Отклонить</button>
      <button id="cookie-accept"  class="btn btn-primary btn-sm">Принять</button>
    </div>
  </div>
</div>

<!-- CALLBACK MODAL -->
<div class="modal-overlay" id="callback-modal">
  <div class="modal">
    <button class="modal-close" aria-label="Закрыть">✕</button>
    <h3>Обратный звонок</h3>
    <p class="modal-sub">Оставьте контакты — мы перезвоним</p>
    <form class="callback-form">
      <div class="form-error"></div>
      <div class="form-group">
        <label class="form-label">Имя *</label>
        <input type="text" name="name" class="form-input" placeholder="Ваше имя" required>
      </div>
      <div class="form-group">
        <label class="form-label">Телефон *</label>
        <input type="tel" name="phone" class="form-input" placeholder="+7 (xxx) xxx-xx-xx" required>
      </div>
      <button type="submit" class="btn btn-primary" style="width:100%" data-label="Жду звонка">Жду звонка</button>
      <p class="form-note" style="text-align:center;margin-top:1rem">
        Наш менеджер перезвонит вам в течение 5 минут<br>
        <em>(актуально только в рабочее время)</em>
      </p>
      <div class="form-success"></div>
    </form>
  </div>
</div>

<!-- FOOTER -->
<footer>
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="/" class="nav-logo">CRM<span style="color:var(--accent)">4</span>Retail</a>
        <p>Умная CRM-система для роста продаж в розничных магазинах. Продукт компании Хэдлайн, Ижевск.</p>
      </div>
      <div class="footer-col">
        <h4>Продукт</h4>
        <ul>
          <li><a href="/vozmozhnosti/">Возможности</a></li>
          <li><a href="/kak-rabotaet/">Как работает</a></li>
          <li><a href="/dlya-kogo/">Для кого</a></li>
          <li><a href="/kejsy/">Кейсы</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Компания</h4>
        <ul>
          <li><a href="/ceny/">Цены</a></li>
          <li><a href="/faq/">FAQ</a></li>
          <li><a href="/demo/">Получить демо</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Контакты</h4>
        <ul>
          <li><a href="tel:+73412000000">+7 (3412) 00-00-00</a></li>
          <li><a href="mailto:info@crm4retail.ru">info@crm4retail.ru</a></li>
          <li><a href="https://t.me/crm4retail" target="_blank">Telegram</a></li>
          <li><a href="#">г. Ижевск</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© <?= date('Y') ?> CRM4Retail — продукт компании <strong>Хэдлайн</strong></p>
      <div style="display:flex;gap:1.5rem">
        <a href="/politika-konfidencialnosti/">Политика конфиденциальности</a>
        <a href="/oferta/">Оферта</a>
      </div>
    </div>
  </div>
</footer>

<script src="/assets/js/main.js"></script>
</body>
</html>
