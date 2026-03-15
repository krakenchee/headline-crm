<?php
$page_title     = 'Возможности CRM4Retail — все функции системы';
$page_desc      = 'Сегментация клиентов, бонусная программа, персональные акции, подсказки на кассе — полный обзор возможностей CRM4Retail.';
$page_canonical = 'https://headline-crm.vercel.app/vozmozhnosti/';
require_once '../includes/header.php';
?>

<div style="padding-top: var(--nav-h)"></div>

<section class="section">
  <div class="container">
    <div class="section-header reveal">
      <span class="label">// функционал</span>
      <h1>Возможности<br><span style="color:var(--accent)">CRM4Retail</span></h1>
      <p>Полный набор инструментов для работы с клиентской базой в розничной торговле</p>
    </div>

    <!-- Feature 1: Segmentation -->
    <div id="segmentaciya-klientov" style="display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center;margin-bottom:6rem">
      <div class="reveal">
        <span class="label">// 01 · сегментация</span>
        <h2>Сегментация клиентов</h2>
        <p style="margin:1rem 0 1.5rem">CRM4Retail автоматически делит всю клиентскую базу на сегменты по поведению и истории покупок. Вы всегда знаете, кто ваши лучшие покупатели и кто вот-вот уйдёт.</p>
        <div style="display:flex;flex-direction:column;gap:0.75rem">
          <div class="demo-benefit">RFM-анализ: давность, частота, сумма покупок</div>
          <div class="demo-benefit">Автоматические метки: VIP, спящий, новый, риск</div>
          <div class="demo-benefit">Ручные теги и фильтры по любым параметрам</div>
          <div class="demo-benefit">Экспорт сегментов для email/SMS-рассылок</div>
        </div>
      </div>
      <div class="reveal">
        <div style="background:var(--surface);border:1px solid var(--border);border-radius:var(--radius-lg);padding:2rem;font-family:var(--font-mono);font-size:0.82rem">
          <div style="margin-bottom:1.25rem;color:var(--text3)">// сегменты клиентской базы</div>
          <?php
          $segs = [
            ['VIP', '18%', '#00e5ff', '84'],
            ['Активные', '34%', '#0af5b0', '72'],
            ['Спящие', '28%', '#ffb547', '40'],
            ['Риск ухода', '12%', '#ff4d6a', '20'],
            ['Новые', '8%', '#8a9ab8', '10'],
          ];
          foreach ($segs as $s): ?>
          <div style="display:flex;align-items:center;gap:0.75rem;margin-bottom:0.85rem">
            <span style="width:70px;color:<?=$s[2]?>"><?=$s[0]?></span>
            <div style="flex:1;height:8px;background:var(--surface2);border-radius:4px;overflow:hidden">
              <div style="height:100%;width:<?=$s[1]?>;background:<?=$s[2]?>;border-radius:4px"></div>
            </div>
            <span style="color:var(--text3);width:30px"><?=$s[1]?></span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <!-- Feature 2: Bonus -->
    <div id="bonusnaya-programma" style="display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center;margin-bottom:6rem">
      <div class="reveal" style="order:2">
        <span class="label">// 02 · лояльность</span>
        <h2>Бонусная программа</h2>
        <p style="margin:1rem 0 1.5rem">Гибкая система начисления и списания бонусов. Настраивайте правила под ваш бизнес — баллы, кешбэк, уровни лояльности.</p>
        <div style="display:flex;flex-direction:column;gap:0.75rem">
          <div class="demo-benefit">Баллы или % кешбэк с каждой покупки</div>
          <div class="demo-benefit">Уровни: Стандарт, Серебро, Золото, Платинум</div>
          <div class="demo-benefit">Физические карты, QR, приложение</div>
          <div class="demo-benefit">Срок жизни бонусов и автосписание</div>
        </div>
      </div>
      <div class="reveal" style="order:1">
        <div style="background:var(--surface);border:1px solid var(--border);border-radius:var(--radius-lg);padding:2rem">
          <div style="display:flex;align-items:center;gap:1rem;margin-bottom:1.5rem">
            <div style="width:56px;height:56px;background:linear-gradient(135deg,var(--accent),var(--accent2));border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:1.5rem">💎</div>
            <div>
              <div style="font-family:var(--font-display);font-weight:700">Мария Петрова</div>
              <div style="font-size:0.8rem;color:var(--warning)">★ Золотой уровень</div>
            </div>
          </div>
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem">
            <div style="background:var(--surface2);border-radius:var(--radius);padding:1rem;text-align:center">
              <div style="font-family:var(--font-display);font-size:1.8rem;font-weight:800;color:var(--accent)">1 240</div>
              <div style="font-size:0.75rem;color:var(--text3)">баллов</div>
            </div>
            <div style="background:var(--surface2);border-radius:var(--radius);padding:1rem;text-align:center">
              <div style="font-family:var(--font-display);font-size:1.8rem;font-weight:800;color:var(--accent2)">8%</div>
              <div style="font-size:0.75rem;color:var(--text3)">кешбэк</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Feature 3: Auto promotions -->
    <div id="personalnye-akcii" style="display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center;margin-bottom:6rem">
      <div class="reveal">
        <span class="label">// 03 · акции</span>
        <h2>Персональные акции</h2>
        <p style="margin:1rem 0 1.5rem">Система автоматически запускает нужную акцию в нужный момент на основе поведения конкретного клиента.</p>
        <div style="display:flex;flex-direction:column;gap:0.75rem">
          <div class="demo-benefit">День рождения: скидка или двойные баллы</div>
          <div class="demo-benefit">Давно не приходил: возвращающий оффер</div>
          <div class="demo-benefit">Купил N раз: награда за лояльность</div>
          <div class="demo-benefit">Сезонные и событийные кампании</div>
        </div>
      </div>
      <div class="reveal">
        <div style="display:flex;flex-direction:column;gap:0.75rem;font-size:0.85rem">
          <?php
          $triggers = [
            ['⚡','Триггер: день рождения через 3 дня','→ SMS: «Мария, дарим 500 баллов в ваш день!»','#00e5ff'],
            ['😴','Триггер: не было 45 дней','→ Push: «Соскучились! Скидка 15% до пятницы»','#ffb547'],
            ['🏆','Триггер: 10-я покупка','→ Email: «Вы в клубе VIP! Новый уровень»','#0af5b0'],
          ];
          foreach ($triggers as $t): ?>
          <div style="background:var(--surface);border:1px solid var(--border);border-radius:var(--radius);padding:1rem">
            <div style="display:flex;gap:0.75rem;align-items:flex-start">
              <span style="font-size:1.2rem"><?=$t[0]?></span>
              <div>
                <div style="color:var(--text3);font-size:0.78rem;font-family:var(--font-mono);margin-bottom:0.25rem"><?=htmlspecialchars($t[1])?></div>
                <div style="color:<?=$t[2]?>"><?=htmlspecialchars($t[2]=='#00e5ff'?$t[1]:'')?></div>
                <div style="color:var(--text2)"><?=htmlspecialchars($t[2])?></div>
                <div style="color:var(--text2)"><?=htmlspecialchars($t[3])?></div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <!-- Feature 4: Cashier hints -->
    <div id="podskazki-na-kasse" style="display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center;margin-bottom:4rem">
      <div class="reveal" style="order:2">
        <span class="label">// 04 · касса</span>
        <h2>Подсказки кассирам</h2>
        <p style="margin:1rem 0 1.5rem">Когда клиент подходит на кассу, CRM показывает кассиру всё нужное: историю, бонусы, что предложить. Это увеличивает средний чек без лишних усилий.</p>
        <div style="display:flex;flex-direction:column;gap:0.75rem">
          <div class="demo-benefit">Профиль клиента и история покупок</div>
          <div class="demo-benefit">Персональная рекомендация товара</div>
          <div class="demo-benefit">Активные акции и купоны клиента</div>
          <div class="demo-benefit">Скрипт разговора для продавца</div>
        </div>
      </div>
      <div class="reveal" style="order:1">
        <div style="background:var(--surface);border:1px solid var(--border);border-radius:var(--radius-lg);padding:1.5rem;font-family:var(--font-mono);font-size:0.78rem">
          <div style="display:flex;align-items:center;gap:0.5rem;margin-bottom:1.25rem">
            <span style="color:var(--text3)">CRM4Retail · Касса #3</span>
            <span style="margin-left:auto;color:var(--success);font-size:0.7rem">● онлайн</span>
          </div>
          <div style="background:var(--accent-dim);border:1px solid rgba(0,229,255,0.2);border-radius:var(--radius);padding:0.85rem;margin-bottom:0.75rem">
            <span style="color:var(--accent)">👤 </span><span style="color:var(--text)">Иван Сидоров</span><br>
            <span style="color:var(--text3)">Визитов: 31 · Бонусов: 890 · Уровень: Серебро</span>
          </div>
          <div style="background:var(--surface2);border-radius:var(--radius);padding:0.75rem;margin-bottom:0.5rem">
            <span style="color:var(--accent2)">💡 Предложи: </span>
            <span style="color:var(--text2)">«Хотите добавить хлеб? Берёте часто»</span>
          </div>
          <div style="background:var(--surface2);border-radius:var(--radius);padding:0.75rem">
            <span style="color:var(--warning)">🎁 Купон: </span>
            <span style="color:var(--text2)">−15% на молочные, активен сегодня</span>
          </div>
        </div>
      </div>
    </div>

    <div style="text-align:center" class="reveal">
      <div class="cta-banner">
        <h2>Хотите увидеть всё в работе?</h2>
        <p>Запишитесь на демо и мы покажем каждую функцию на реальном примере вашего бизнеса</p>
        <div class="cta-actions" style="margin-top:2rem">
          <a href="/demo/" class="btn btn-primary btn-lg">Получить демо →</a>
          <a href="/ceny/" class="btn btn-outline btn-lg">Рассчитать стоимость</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once '../includes/footer.php'; ?>
