<?php
$page_title     = 'CRM4Retail — CRM для роста продаж в рознице | Хэдлайн Ижевск';
$page_desc      = 'CRM4Retail анализирует покупки клиентов и помогает продавцам продавать больше. Сегментация, бонусная программа, автоматические акции, подсказки кассирам.';
$page_canonical = 'https://headline-crm.vercel.app/';
require_once 'includes/header.php';
?>

<!-- HERO -->
<section id="hero">
  <div class="hero-bg"></div>
  <div class="hero-grid"></div>
  <div class="container">
    <div class="hero-content">
      <div class="hero-badge">CRM для розничного бизнеса</div>
      <h1 class="hero-title">
        CRM для роста
        <span class="line2">продаж в рознице</span>
      </h1>
      <p class="hero-sub">
        CRM4Retail анализирует покупки клиентов и помогает продавцам продавать больше.
        Умная система для тех, кто хочет знать своих клиентов.
      </p>
      <div class="hero-actions">
        <a href="/demo/" class="btn btn-primary btn-lg">Получить демо →</a>
        <button class="btn btn-outline btn-lg" data-modal="callback-modal">Обратный звонок</button>
      </div>
      <div class="hero-stats">
        <div>
          <span class="stat-num">+34%</span>
          <span class="stat-label">рост повторных продаж</span>
        </div>
        <div>
          <span class="stat-num">5 мин</span>
          <span class="stat-label">до первой акции</span>
        </div>
        <div>
          <span class="stat-num">500+</span>
          <span class="stat-label">точек в работе</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PROBLEM -->
<section class="section section--alt">
  <div class="container">
    <div class="problem-grid">
      <div>
        <span class="label">// проблема</span>
        <h2>Бизнес не знает своих клиентов</h2>
        <p style="margin:1rem 0 0">Без данных о покупателях — нет персонализации. Без персонализации — нет лояльности.</p>
        <div class="problem-list">
          <div class="problem-item reveal">
            <span class="pi-icon">❓</span>
            <div>
              <h4>Кто ваши клиенты?</h4>
              <p>Вы не знаете, кто приходит чаще, кто тратит больше и кто уже не возвращается</p>
            </div>
          </div>
          <div class="problem-item reveal">
            <span class="pi-icon">🛒</span>
            <div>
              <h4>Что они покупают?</h4>
              <p>Нет истории покупок — нет возможности сделать релевантное предложение</p>
            </div>
          </div>
          <div class="problem-item reveal">
            <span class="pi-icon">📉</span>
            <div>
              <h4>Как вернуть их снова?</h4>
              <p>Без системы удержания клиенты уходят к конкурентам навсегда</p>
            </div>
          </div>
        </div>
      </div>
      <div class="problem-visual reveal">
        <span class="label">// потери без CRM</span>
        <div class="pv-chart">
          <div class="pv-row">
            <span class="pv-label">Повт. покупки</span>
            <div class="pv-bar-wrap"><div class="pv-bar" data-w="78%" style="width:78%"></div></div>
            <span class="pv-val">−78%</span>
          </div>
          <div class="pv-row">
            <span class="pv-label">Ср. чек</span>
            <div class="pv-bar-wrap"><div class="pv-bar" data-w="45%" style="width:45%"></div></div>
            <span class="pv-val">−45%</span>
          </div>
          <div class="pv-row">
            <span class="pv-label">Удержание</span>
            <div class="pv-bar-wrap"><div class="pv-bar" data-w="62%" style="width:62%"></div></div>
            <span class="pv-val">−62%</span>
          </div>
          <div class="pv-row">
            <span class="pv-label">NPS</span>
            <div class="pv-bar-wrap"><div class="pv-bar" data-w="55%" style="width:55%"></div></div>
            <span class="pv-val">−55%</span>
          </div>
        </div>
        <p style="font-size:0.78rem;color:var(--text3);margin-top:1.5rem">
          *Данные на основе исследований клиентов Хэдлайн, 2023–2024
        </p>
      </div>
    </div>
  </div>
</section>

<!-- SOLUTION / FEATURES -->
<section class="section" id="vozmozhnosti-preview">
  <div class="container">
    <div class="features-header reveal">
      <span class="label">// решение</span>
      <h2>4 функции, которые увеличивают продажи</h2>
      <p>CRM4Retail автоматически работает с вашей клиентской базой, пока вы занимаетесь бизнесом</p>
    </div>
    <div class="grid-4">
      <div class="feature-card reveal">
        <div class="fc-num">01</div>
        <div class="fc-icon">🎯</div>
        <h3 class="fc-title">Анализ клиентов</h3>
        <p class="fc-desc">Сегментация по покупкам, частоте визитов и среднему чеку. Знайте своих VIP-клиентов</p>
      </div>
      <div class="feature-card reveal">
        <div class="fc-num">02</div>
        <div class="fc-icon">💎</div>
        <h3 class="fc-title">Бонусная система</h3>
        <p class="fc-desc">Гибкая программа лояльности: баллы, кешбэк, уровни. Клиенты возвращаются снова</p>
      </div>
      <div class="feature-card reveal">
        <div class="fc-num">03</div>
        <div class="fc-icon">⚡</div>
        <h3 class="fc-title">Автоакции</h3>
        <p class="fc-desc">Персональные предложения по триггерам: день рождения, давно не приходил, купил X раз</p>
      </div>
      <div class="feature-card reveal">
        <div class="fc-num">04</div>
        <div class="fc-icon">💡</div>
        <h3 class="fc-title">Подсказки на кассе</h3>
        <p class="fc-desc">Кассир видит: кто пришёл, что он любит, что предложить. Рост среднего чека гарантирован</p>
      </div>
    </div>
    <div style="text-align:center;margin-top:3rem">
      <a href="/vozmozhnosti/" class="btn btn-outline">Все возможности →</a>
    </div>
  </div>
</section>

<!-- HOW IT INCREASES SALES -->
<section class="section section--alt">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center">
      <div class="reveal">
        <span class="label">// как это работает</span>
        <h2>CRM превращает данные в продажи</h2>
        <p style="margin:1rem 0 2rem">Каждая покупка обогащает профиль клиента. Система автоматически запускает нужное действие в нужный момент.</p>
        <div class="steps-wrap">
          <div class="steps-line"></div>
          <div class="step-item">
            <div class="step-num">1</div>
            <div class="step-content">
              <h3>Формирует сегменты</h3>
              <p>VIP, спящие, новые, риск ухода — CRM автоматически делит базу</p>
            </div>
          </div>
          <div class="step-item">
            <div class="step-num">2</div>
            <div class="step-content">
              <h3>Запускает акции</h3>
              <p>Персональное SMS или push-уведомление точно в нужный момент</p>
            </div>
          </div>
          <div class="step-item">
            <div class="step-num">3</div>
            <div class="step-content">
              <h3>Подсказывает кассирам</h3>
              <p>«Предложи Марине кофе — она берёт его каждый второй визит»</p>
            </div>
          </div>
        </div>
      </div>
      <div class="reveal">
        <!-- Dashboard mock -->
        <div style="background:var(--surface);border:1px solid var(--border);border-radius:var(--radius-lg);padding:1.5rem;font-family:var(--font-mono);font-size:0.78rem">
          <div style="display:flex;align-items:center;gap:0.5rem;margin-bottom:1.5rem">
            <div style="width:10px;height:10px;border-radius:50%;background:var(--danger)"></div>
            <div style="width:10px;height:10px;border-radius:50%;background:var(--warning)"></div>
            <div style="width:10px;height:10px;border-radius:50%;background:var(--success)"></div>
            <span style="color:var(--text3);margin-left:0.5rem">CRM4Retail — Касса</span>
          </div>
          <div style="background:var(--accent-dim);border:1px solid rgba(0,229,255,0.2);border-radius:var(--radius);padding:1rem;margin-bottom:1rem">
            <span style="color:var(--accent)">👤 Клиент: </span>
            <span style="color:var(--text)">Марина П.</span><br>
            <span style="color:var(--text3)">Визитов: 24 · Ср. чек: 1 840 ₽ · Бонусов: 560</span>
          </div>
          <div style="background:var(--surface2);border-radius:var(--radius);padding:0.75rem;margin-bottom:0.75rem">
            <span style="color:var(--accent2)">💡 Подсказка: </span>
            <span style="color:var(--text2)">Предложи добавить кофе (+190 ₽)</span>
          </div>
          <div style="background:var(--surface2);border-radius:var(--radius);padding:0.75rem;margin-bottom:0.75rem">
            <span style="color:var(--warning)">🎁 Акция: </span>
            <span style="color:var(--text2)">День рождения через 5 дней — дай купон</span>
          </div>
          <div style="display:flex;justify-content:space-between;padding-top:1rem;border-top:1px solid var(--border)">
            <span style="color:var(--text3)">Прогноз уп. продаж</span>
            <span style="color:var(--accent)">+23% к месяцу</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOR WHOM PREVIEW -->
<section class="section">
  <div class="container">
    <div class="section-header reveal">
      <span class="label">// для кого</span>
      <h2>Подходит для вашего бизнеса</h2>
    </div>
    <div class="audience-grid">
      <div class="audience-card reveal">
        <span class="ac-emoji">🏪</span>
        <h3 class="ac-title">Розничный магазин</h3>
        <ul class="ac-list">
          <li>Одна точка или несколько</li>
          <li>Быстрый запуск за 1 день</li>
          <li>Готовые шаблоны акций</li>
        </ul>
      </div>
      <div class="audience-card reveal">
        <span class="ac-emoji">🏬</span>
        <h3 class="ac-title">Розничная сеть</h3>
        <ul class="ac-list">
          <li>Единая база по всем точкам</li>
          <li>Централизованные акции</li>
          <li>Аналитика в разрезе магазинов</li>
        </ul>
      </div>
      <div class="audience-card reveal">
        <span class="ac-emoji">🔑</span>
        <h3 class="ac-title">Франшиза</h3>
        <ul class="ac-list">
          <li>Единые стандарты по франчайзи</li>
          <li>Контроль из головного офиса</li>
          <li>Белый лейбл под ваш бренд</li>
        </ul>
      </div>
    </div>
    <div style="text-align:center;margin-top:2.5rem">
      <a href="/dlya-kogo/" class="btn btn-outline">Подробнее →</a>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<section class="section section--alt">
  <div class="container">
    <div class="cta-banner reveal">
      <span class="label">// начните сегодня</span>
      <h2>Получите демо CRM4Retail</h2>
      <p>Покажем, как система работает на реальных данных вашего типа бизнеса. Бесплатно, без обязательств.</p>
      <div class="cta-actions">
        <a href="/demo/" class="btn btn-primary btn-lg">Получить демо →</a>
        <button class="btn btn-outline btn-lg" data-modal="callback-modal">Позвоните мне</button>
      </div>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
