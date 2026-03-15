<?php
$page_title     = 'Для кого CRM4Retail — розница, сети, франшизы';
$page_desc      = 'CRM4Retail подходит для розничных магазинов, торговых сетей и франшиз любого размера. Узнайте, как система работает для вашего бизнеса.';
$page_canonical = 'https://headline-crm.vercel.app/dlya-kogo/';
require_once '../includes/header.php';
?>

<div style="padding-top: var(--nav-h)"></div>

<section class="section">
  <div class="container">
    <div class="section-header reveal" style="margin-bottom:4rem">
      <span class="label">// целевая аудитория</span>
      <h1>Для кого<br><span style="color:var(--accent)">CRM4Retail</span></h1>
      <p>Система масштабируется от одного магазина до федеральной сети</p>
    </div>

    <!-- Block 1: Retail shops -->
    <div id="roznichnye-magaziny" style="background:var(--surface);border:1px solid var(--border);border-radius:var(--radius-lg);padding:3rem;margin-bottom:2rem" class="reveal">
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:3rem;align-items:center">
        <div>
          <span class="label">// розничные магазины</span>
          <h2 style="margin-bottom:1rem">🏪 Розничный магазин</h2>
          <p>Одна или несколько точек? CRM4Retail подходит с первого дня. Быстрое внедрение, простой интерфейс, готовые шаблоны акций.</p>
          <div style="margin-top:1.5rem;display:flex;flex-direction:column;gap:0.6rem">
            <div class="demo-benefit">Запуск за 1 рабочий день</div>
            <div class="demo-benefit">Готовые шаблоны: продукты, одежда, кафе, аптеки</div>
            <div class="demo-benefit">Тариф от 3 900 ₽/мес</div>
            <div class="demo-benefit">Обучение кассиров включено</div>
          </div>
        </div>
        <div style="background:var(--surface2);border-radius:var(--radius);padding:1.5rem;font-size:0.85rem">
          <div style="color:var(--text3);font-family:var(--font-mono);font-size:0.72rem;margin-bottom:1rem;text-transform:uppercase;letter-spacing:0.08em">Типичный результат за 3 месяца</div>
          <div style="display:flex;flex-direction:column;gap:0.75rem">
            <div style="display:flex;justify-content:space-between"><span style="color:var(--text2)">Повторные покупки</span><span style="color:var(--accent);font-family:var(--font-mono)">+27%</span></div>
            <div style="display:flex;justify-content:space-between"><span style="color:var(--text2)">Средний чек</span><span style="color:var(--accent);font-family:var(--font-mono)">+18%</span></div>
            <div style="display:flex;justify-content:space-between"><span style="color:var(--text2)">Клиенты с картой</span><span style="color:var(--accent);font-family:var(--font-mono)">62%</span></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Block 2: Networks -->
    <div id="seti" style="background:var(--surface);border:1px solid var(--border);border-radius:var(--radius-lg);padding:3rem;margin-bottom:2rem" class="reveal">
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:3rem;align-items:center">
        <div style="order:2">
          <span class="label">// торговые сети</span>
          <h2 style="margin-bottom:1rem">🏬 Розничная сеть</h2>
          <p>Единая клиентская база по всем точкам. Централизованные акции и аналитика в разрезе каждого магазина.</p>
          <div style="margin-top:1.5rem;display:flex;flex-direction:column;gap:0.6rem">
            <div class="demo-benefit">Единый профиль клиента по всей сети</div>
            <div class="demo-benefit">Управление акциями из головного офиса</div>
            <div class="demo-benefit">Аналитика по магазинам, регионам, кассирам</div>
            <div class="demo-benefit">Мультивалютные бонусы и кросс-продажи</div>
          </div>
        </div>
        <div style="background:var(--surface2);border-radius:var(--radius);padding:1.5rem;font-size:0.85rem;order:1">
          <div style="color:var(--text3);font-family:var(--font-mono);font-size:0.72rem;margin-bottom:1rem;text-transform:uppercase;letter-spacing:0.08em">Управление сетью</div>
          <div style="display:flex;flex-direction:column;gap:0.75rem">
            <div style="display:flex;justify-content:space-between"><span style="color:var(--text2)">Магазин Центр</span><span style="color:var(--accent2);font-family:var(--font-mono)">↑ +34%</span></div>
            <div style="display:flex;justify-content:space-between"><span style="color:var(--text2)">Магазин Север</span><span style="color:var(--accent2);font-family:var(--font-mono)">↑ +21%</span></div>
            <div style="display:flex;justify-content:space-between"><span style="color:var(--text2)">Магазин ТЦ Мега</span><span style="color:var(--warning);font-family:var(--font-mono)">→ +5%</span></div>
            <div style="border-top:1px solid var(--border);padding-top:0.75rem;display:flex;justify-content:space-between">
              <span style="color:var(--text2)">Итого по сети</span>
              <span style="color:var(--accent);font-family:var(--font-mono);font-weight:700">+23%</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Block 3: Franchises -->
    <div id="frenshizy" style="background:var(--surface);border:1px solid var(--border);border-radius:var(--radius-lg);padding:3rem;margin-bottom:3rem" class="reveal">
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:3rem;align-items:center">
        <div>
          <span class="label">// франшизы</span>
          <h2 style="margin-bottom:1rem">🔑 Франшиза</h2>
          <p>CRM под вашим брендом для всех франчайзи. Единые стандарты лояльности, контроль из головного офиса, белый лейбл.</p>
          <div style="margin-top:1.5rem;display:flex;flex-direction:column;gap:0.6rem">
            <div class="demo-benefit">White-label: ваш бренд, ваше приложение</div>
            <div class="demo-benefit">Единые стандарты по всем франчайзи</div>
            <div class="demo-benefit">Отдельные кабинеты для каждого партнёра</div>
            <div class="demo-benefit">Роялти-отчёты и финансовая аналитика</div>
          </div>
        </div>
        <div style="background:var(--surface2);border-radius:var(--radius);padding:1.5rem;font-size:0.85rem">
          <div style="color:var(--text3);font-family:var(--font-mono);font-size:0.72rem;margin-bottom:1rem;text-transform:uppercase;letter-spacing:0.08em">Франчайзинговая сеть</div>
          <div style="display:flex;flex-direction:column;gap:0.5rem">
            <?php $partners = [['Ижевск','Активен'],['Казань','Активен'],['Пермь','Активен'],['Уфа','Настройка']]; ?>
            <?php foreach ($partners as $p): ?>
            <div style="display:flex;justify-content:space-between;align-items:center">
              <span style="color:var(--text2)">Партнёр · <?=$p[0]?></span>
              <span style="font-size:0.72rem;background:<?=$p[1]==='Активен'?'rgba(0,214,143,0.15)':'rgba(255,181,71,0.15)'?>;color:<?=$p[1]==='Активен'?'var(--success)':'var(--warning)'?>;padding:0.15rem 0.5rem;border-radius:4px;font-family:var(--font-mono)"><?=$p[1]?></span>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>

    <div style="text-align:center" class="reveal">
      <div class="cta-banner">
        <h2>Узнайте, как CRM4Retail поможет вашему бизнесу</h2>
        <p>Бесплатное демо с примерами для вашего типа бизнеса</p>
        <div class="cta-actions" style="margin-top:2rem">
          <a href="/demo/" class="btn btn-primary btn-lg">Получить демо →</a>
          <a href="/ceny/" class="btn btn-outline btn-lg">Узнать цену</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once '../includes/footer.php'; ?>
