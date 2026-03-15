<?php
$page_title     = 'Цены и внедрение CRM4Retail — расчёт стоимости';
$page_desc      = 'Рассчитайте стоимость внедрения CRM4Retail для вашего бизнеса. Пройдите короткий квиз — менеджер подготовит персональное предложение.';
$page_canonical = 'https://headline-crm.vercel.app/ceny/';
require_once '../includes/header.php';
?>

<div style="padding-top: var(--nav-h)"></div>

<section class="section">
  <div class="container">
    <div class="section-header reveal" style="margin-bottom:3rem">
      <span class="label">// цены и внедрение</span>
      <h1>Расчёт стоимости<br><span style="color:var(--accent)">CRM4Retail</span></h1>
      <p>Ответьте на 5 коротких вопросов — мы подготовим персональное коммерческое предложение. Менеджер свяжется с вами после отправки формы.</p>
    </div>

    <div class="quiz-wrap reveal">
      <!-- Progress -->
      <div class="quiz-progress">
        <div class="quiz-progress-bar active" data-step="0"></div>
        <div class="quiz-progress-bar" data-step="1"></div>
        <div class="quiz-progress-bar" data-step="2"></div>
        <div class="quiz-progress-bar" data-step="3"></div>
        <div class="quiz-progress-bar" data-step="4"></div>
      </div>

      <!-- Step 1 -->
      <div class="quiz-step active" data-step="0">
        <p class="mono" style="color:var(--text3);margin-bottom:0.5rem">Шаг 1 из 5</p>
        <p class="quiz-q">Что вы продаёте?</p>
        <div class="quiz-options">
          <button class="quiz-option" data-key="retail_type" data-value="Продукты питания">🛒 Продукты питания</button>
          <button class="quiz-option" data-key="retail_type" data-value="Одежда / обувь">👗 Одежда / обувь</button>
          <button class="quiz-option" data-key="retail_type" data-value="Ресторан / кафе">🍕 Ресторан / кафе</button>
          <button class="quiz-option" data-key="retail_type" data-value="Аптека / здоровье">💊 Аптека / здоровье</button>
          <button class="quiz-option" data-key="retail_type" data-value="Косметика">💄 Косметика / уход</button>
          <button class="quiz-option" data-key="retail_type" data-value="Электроника">📱 Электроника</button>
          <button class="quiz-option" data-key="retail_type" data-value="Стройматериалы">🔧 Стройматериалы / DIY</button>
          <button class="quiz-option" data-key="retail_type" data-value="Другое">📦 Другое</button>
        </div>
        <div class="quiz-nav">
          <span></span>
          <button class="btn btn-primary quiz-next">Далее →</button>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="quiz-step" data-step="1">
        <p class="mono" style="color:var(--text3);margin-bottom:0.5rem">Шаг 2 из 5</p>
        <p class="quiz-q">Сколько торговых точек?</p>
        <div class="quiz-options">
          <button class="quiz-option" data-key="stores_count" data-value="1">1 точка</button>
          <button class="quiz-option" data-key="stores_count" data-value="2-5">2–5 точек</button>
          <button class="quiz-option" data-key="stores_count" data-value="6-20">6–20 точек</button>
          <button class="quiz-option" data-key="stores_count" data-value="21-50">21–50 точек</button>
          <button class="quiz-option" data-key="stores_count" data-value="50+">Более 50</button>
        </div>
        <div class="quiz-nav">
          <button class="btn btn-ghost quiz-prev">← Назад</button>
          <button class="btn btn-primary quiz-next">Далее →</button>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="quiz-step" data-step="2">
        <p class="mono" style="color:var(--text3);margin-bottom:0.5rem">Шаг 3 из 5</p>
        <p class="quiz-q">Сколько сотрудников работают на кассе?</p>
        <div class="quiz-options">
          <button class="quiz-option" data-key="employees_count" data-value="1-3">1–3 кассира</button>
          <button class="quiz-option" data-key="employees_count" data-value="4-10">4–10 кассиров</button>
          <button class="quiz-option" data-key="employees_count" data-value="11-30">11–30 кассиров</button>
          <button class="quiz-option" data-key="employees_count" data-value="30+">Более 30</button>
        </div>
        <div class="quiz-nav">
          <button class="btn btn-ghost quiz-prev">← Назад</button>
          <button class="btn btn-primary quiz-next">Далее →</button>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="quiz-step" data-step="3">
        <p class="mono" style="color:var(--text3);margin-bottom:0.5rem">Шаг 4 из 5</p>
        <p class="quiz-q">Используете ли сейчас CRM или программу лояльности?</p>
        <div class="quiz-options">
          <button class="quiz-option" data-key="current_crm" data-value="Нет, ничего">Нет, ничего не используем</button>
          <button class="quiz-option" data-key="current_crm" data-value="Карты лояльности">Есть карты лояльности</button>
          <button class="quiz-option" data-key="current_crm" data-value="Другая CRM">Используем другую CRM</button>
          <button class="quiz-option" data-key="current_crm" data-value="1C / кассовая программа">1С / кассовая программа</button>
        </div>
        <div class="quiz-nav">
          <button class="btn btn-ghost quiz-prev">← Назад</button>
          <button class="btn btn-primary quiz-next">Далее →</button>
        </div>
      </div>

      <!-- Step 5 — Contact form -->
      <div class="quiz-step" data-step="4">
        <p class="mono" style="color:var(--text3);margin-bottom:0.5rem">Шаг 5 из 5</p>
        <p class="quiz-q">Куда отправить расчёт?</p>
        <p style="font-size:0.88rem;color:var(--text3);margin-bottom:1.5rem">
          После заполнения формы ваши данные будут переданы менеджеру. Мы подготовим персональный расчёт и свяжемся с вами.
        </p>

        <form class="pricing-form" novalidate>
          <div class="form-error"></div>
          <div class="form-grid">
            <div class="form-group">
              <label class="form-label">Имя *</label>
              <input type="text" name="name" class="form-input" placeholder="Ваше имя" required>
            </div>
            <div class="form-group">
              <label class="form-label">Телефон *</label>
              <input type="tel" name="phone" class="form-input" placeholder="+7 (xxx) xxx-xx-xx" required>
            </div>
          </div>
          <div class="form-grid">
            <div class="form-group">
              <label class="form-label">Город *</label>
              <input type="text" name="city" class="form-input" placeholder="Ваш город" required>
            </div>
            <div class="form-group">
              <label class="form-label">Ориентировочный бюджет</label>
              <select name="budget" class="form-select">
                <option value="">Не определились</option>
                <option value="до 10 000 ₽/мес">до 10 000 ₽/мес</option>
                <option value="10 000 – 30 000 ₽/мес">10 000 – 30 000 ₽/мес</option>
                <option value="30 000 – 100 000 ₽/мес">30 000 – 100 000 ₽/мес</option>
                <option value="100 000+ ₽/мес">100 000+ ₽/мес</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label">Комментарий</label>
            <textarea name="comment" class="form-textarea" placeholder="Расскажите подробнее о вашем бизнесе..."></textarea>
          </div>
          <div class="quiz-nav">
            <button type="button" class="btn btn-ghost quiz-prev">← Назад</button>
            <button type="submit" class="btn btn-primary btn-lg">Получить расчёт →</button>
          </div>
          <p class="form-note" style="text-align:center;margin-top:1rem">
            По прохождению квиза данные отправляются на рассмотрение — менеджер свяжется с вами
          </p>
          <div class="form-success" style="margin-top:1rem"></div>
        </form>
      </div>

    </div><!-- /.quiz-wrap -->

    <!-- Pricing plans hint -->
    <div style="margin-top:5rem">
      <div class="section-header reveal">
        <span class="label">// тарифы</span>
        <h2>Примерные тарифы</h2>
        <p>Точная стоимость зависит от количества точек и выбранного функционала</p>
      </div>
      <div class="grid-3">
        <div class="card reveal" style="text-align:center">
          <div style="font-size:0.8rem;font-family:var(--font-mono);color:var(--text3);text-transform:uppercase;letter-spacing:0.1em;margin-bottom:1rem">Старт</div>
          <div style="font-family:var(--font-display);font-size:2.2rem;font-weight:800;color:var(--accent)">от 3 900 ₽</div>
          <div style="font-size:0.82rem;color:var(--text3);margin-bottom:1.5rem">/ месяц · 1 точка</div>
          <ul style="display:flex;flex-direction:column;gap:0.6rem;text-align:left;margin-bottom:2rem">
            <li style="font-size:0.88rem;color:var(--text2);display:flex;gap:0.5rem"><span style="color:var(--accent2)">✓</span> Сегментация клиентов</li>
            <li style="font-size:0.88rem;color:var(--text2);display:flex;gap:0.5rem"><span style="color:var(--accent2)">✓</span> Бонусная программа</li>
            <li style="font-size:0.88rem;color:var(--text2);display:flex;gap:0.5rem"><span style="color:var(--accent2)">✓</span> Базовые акции</li>
            <li style="font-size:0.88rem;color:var(--text3);display:flex;gap:0.5rem"><span>—</span> Подсказки на кассе</li>
            <li style="font-size:0.88rem;color:var(--text3);display:flex;gap:0.5rem"><span>—</span> API интеграции</li>
          </ul>
          <a href="/demo/" class="btn btn-outline" style="width:100%">Получить демо</a>
        </div>
        <div class="card reveal" style="text-align:center;border-color:rgba(0,229,255,0.3);position:relative">
          <div style="position:absolute;top:-14px;left:50%;transform:translateX(-50%)">
            <span class="tag">Популярный</span>
          </div>
          <div style="font-size:0.8rem;font-family:var(--font-mono);color:var(--accent);text-transform:uppercase;letter-spacing:0.1em;margin-bottom:1rem">Бизнес</div>
          <div style="font-family:var(--font-display);font-size:2.2rem;font-weight:800;color:var(--accent)">от 7 900 ₽</div>
          <div style="font-size:0.82rem;color:var(--text3);margin-bottom:1.5rem">/ месяц · до 5 точек</div>
          <ul style="display:flex;flex-direction:column;gap:0.6rem;text-align:left;margin-bottom:2rem">
            <li style="font-size:0.88rem;color:var(--text2);display:flex;gap:0.5rem"><span style="color:var(--accent2)">✓</span> Всё из тарифа Старт</li>
            <li style="font-size:0.88rem;color:var(--text2);display:flex;gap:0.5rem"><span style="color:var(--accent2)">✓</span> Подсказки кассирам</li>
            <li style="font-size:0.88rem;color:var(--text2);display:flex;gap:0.5rem"><span style="color:var(--accent2)">✓</span> Авто-триггерные акции</li>
            <li style="font-size:0.88rem;color:var(--text2);display:flex;gap:0.5rem"><span style="color:var(--accent2)">✓</span> Интеграция с кассой</li>
            <li style="font-size:0.88rem;color:var(--text3);display:flex;gap:0.5rem"><span>—</span> Белый лейбл</li>
          </ul>
          <a href="/demo/" class="btn btn-primary" style="width:100%">Получить демо</a>
        </div>
        <div class="card reveal" style="text-align:center">
          <div style="font-size:0.8rem;font-family:var(--font-mono);color:var(--text3);text-transform:uppercase;letter-spacing:0.1em;margin-bottom:1rem">Энтерпрайз</div>
          <div style="font-family:var(--font-display);font-size:2.2rem;font-weight:800;color:var(--accent)">По запросу</div>
          <div style="font-size:0.82rem;color:var(--text3);margin-bottom:1.5rem">сети 20+ точек / франшизы</div>
          <ul style="display:flex;flex-direction:column;gap:0.6rem;text-align:left;margin-bottom:2rem">
            <li style="font-size:0.88rem;color:var(--text2);display:flex;gap:0.5rem"><span style="color:var(--accent2)">✓</span> Всё из Бизнес</li>
            <li style="font-size:0.88rem;color:var(--text2);display:flex;gap:0.5rem"><span style="color:var(--accent2)">✓</span> Белый лейбл / бренд</li>
            <li style="font-size:0.88rem;color:var(--text2);display:flex;gap:0.5rem"><span style="color:var(--accent2)">✓</span> SLA и выделенный менеджер</li>
            <li style="font-size:0.88rem;color:var(--text2);display:flex;gap:0.5rem"><span style="color:var(--accent2)">✓</span> API + кастомные интеграции</li>
            <li style="font-size:0.88rem;color:var(--text2);display:flex;gap:0.5rem"><span style="color:var(--accent2)">✓</span> Обучение персонала</li>
          </ul>
          <a href="/demo/" class="btn btn-outline" style="width:100%">Обсудить проект</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once '../includes/footer.php'; ?>
