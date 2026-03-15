<?php
$page_title     = 'Кейсы CRM4Retail — реальные результаты клиентов';
$page_desc      = 'Реальные кейсы внедрения CRM4Retail: как розничные магазины увеличили продажи с помощью CRM-системы от Хэдлайн.';
$page_canonical = 'https://headline-crm.vercel.app/kejsy/';
require_once '../includes/header.php';
?>

<div style="padding-top: var(--nav-h)"></div>

<section class="section">
  <div class="container">
    <div class="section-header reveal" style="margin-bottom:4rem">
      <span class="label">// кейсы</span>
      <h1>Реальные результаты<br><span style="color:var(--accent)">наших клиентов</span></h1>
      <p>Компании, которые уже используют CRM4Retail и видят рост продаж каждый месяц</p>
    </div>

    <div class="cases-grid">
      <?php
      $cases = [
        ["🛒","ПродМаркет","Продовольственная сеть · Ижевск · 8 магазинов",
          "Сеть продуктовых магазинов обратилась с задачей повышения возвращаемости клиентов. Внедрили бонусную систему, настроили автоматические акции «Давно не приходил» и подсказки кассиру для апсейла.",
          ["+34%","повторных продаж"],["+22%","ср. чек"],["-18%","отток клиентов"]],
        ["👗","Модный Дом","Одежда и аксессуары · Казань · 3 магазина",
          "Бренд одежды хотел персонализировать коммуникацию с покупателями. Запустили триггерные SMS-акции на день рождения и сезонные распродажи. Сегментировали базу по стилевым предпочтениям.",
          ["+41%","конверсия акций"],["+19%","средний чек"],["×2.3","повт. покупки"]],
        ["💊","АптекаПлюс","Аптечная сеть · Уфа · 15 аптек",
          "Крупная аптечная сеть внедрила единую программу лояльности для всех точек. Интегрировали CRM с аптечной системой, запустили рекомендации фармацевтов по истории покупок.",
          ["+27%","выручка с карты"],["+33%","повт. визиты"],["-12%","отток клиентов"]],
        ["🍕","FoodCorner","Кафе быстрого питания · Пермь · 6 точек",
          "Сеть кафе хотела увеличить среднюю сумму заказа. Настроили подсказки кассиру с рекомендациями доппозиций на основе популярных комбо. Запустили программу накопительных баллов.",
          ["+28%","средний чек"],["+45%","лояльных гостей"],["×3.1","визиты в месяц"]],
      ];
      foreach ($cases as $c): ?>
      <div class="case-card reveal">
        <div class="case-header">
          <div class="case-logo"><?= $c[0] ?></div>
          <div>
            <h3 class="case-company"><?= htmlspecialchars($c[1]) ?></h3>
            <span class="case-type"><?= htmlspecialchars($c[2]) ?></span>
          </div>
        </div>
        <p class="case-desc"><?= htmlspecialchars($c[3]) ?></p>
        <div class="case-results">
          <?php for ($i=4;$i<count($c);$i++): ?>
          <div class="case-result-item">
            <span class="cr-num"><?= $c[$i][0] ?></span>
            <span class="cr-label"><?= $c[$i][1] ?></span>
          </div>
          <?php endfor; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align:center;margin-top:4rem" class="reveal">
      <div class="cta-banner">
        <h2>Ваш бизнес — следующий кейс</h2>
        <p>Оставьте заявку и мы покажем потенциал роста именно для вашего профиля розницы</p>
        <div class="cta-actions" style="margin-top:2rem">
          <a href="/demo/" class="btn btn-primary btn-lg">Получить демо →</a>
          <a href="/ceny/" class="btn btn-outline btn-lg">Рассчитать стоимость</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once '../includes/footer.php'; ?>
