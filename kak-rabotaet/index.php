<?php
$page_title     = 'Как работает CRM4Retail — принцип работы системы';
$page_desc      = 'Как CRM4Retail анализирует клиентов, формирует сегменты, запускает акции и подсказывает кассирам. Полное описание работы системы.';
$page_canonical = 'https://headline-crm.vercel.app/kak-rabotaet/';
require_once '../includes/header.php';
?>

<div style="padding-top: var(--nav-h)"></div>

<section class="section">
  <div class="container">
    <div class="section-header reveal" style="margin-bottom:5rem">
      <span class="label">// принцип работы</span>
      <h1>Как работает<br><span style="color:var(--accent)">CRM4Retail</span></h1>
      <p>От первой покупки до лояльного клиента — полный цикл работы системы</p>
    </div>

    <div class="steps-wrap" style="max-width:720px;margin:0 auto">
      <div class="steps-line"></div>

      <?php
      $steps = [
        ['Клиент совершает покупку',
         'На кассе клиент называет номер телефона или прикладывает карту. CRM идентифицирует его и обновляет профиль в реальном времени.',
         ['Касса / POS', 'API', 'QR-карта']],
        ['Система анализирует данные',
         'Каждая покупка анализируется: сумма, товары, время визита. CRM строит RFM-модель и автоматически присваивает клиенту сегмент.',
         ['RFM-анализ', 'Машинное обучение', 'История покупок']],
        ['Формируются сегменты',
         'VIP-клиенты, спящие, новые, «риск ухода» — каждый попадает в нужную группу. Сегменты обновляются автоматически.',
         ['VIP', 'Спящие', 'Новые', 'Риск ухода']],
        ['Запускаются персональные акции',
         'По триггерам (день рождения, давно не был, N-я покупка) система автоматически отправляет SMS, push или email с персональным предложением.',
         ['SMS-рассылка', 'Push-уведомления', 'Email', 'Автоматика']],
        ['Кассир получает подсказку',
         'При следующем визите клиента кассир видит на экране: кто пришёл, что он любит, что предложить, какие бонусы активны. Продажи растут.',
         ['Касса', 'История', 'Рекомендации', 'Бонусы']],
        ['Вы видите аналитику',
         'Дашборд показывает: рост выручки, эффективность акций, возвращаемость клиентов, NPS. Принимайте решения на основе данных.',
         ['Дашборд', 'KPI', 'Отчёты', 'Экспорт']],
      ];
      foreach ($steps as $i => $step): ?>
      <div class="step-item reveal">
        <div class="step-num"><?= $i + 1 ?></div>
        <div class="step-content">
          <h3><?= htmlspecialchars($step[0]) ?></h3>
          <p><?= htmlspecialchars($step[1]) ?></p>
          <div class="step-tags">
            <?php foreach ($step[2] as $tag): ?>
            <span class="step-tag"><?= htmlspecialchars($tag) ?></span>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align:center;margin-top:5rem" class="reveal">
      <div class="cta-banner">
        <h2>Запустите этот цикл в своём магазине</h2>
        <p>Внедрение CRM4Retail занимает от 1 рабочего дня. Первые результаты видны уже в первый месяц.</p>
        <div class="cta-actions" style="margin-top:2rem">
          <a href="/demo/" class="btn btn-primary btn-lg">Получить демо →</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once '../includes/footer.php'; ?>
