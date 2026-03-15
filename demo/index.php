<?php
$page_title     = 'Получить демо CRM4Retail — бесплатная демонстрация';
$page_desc      = 'Оставьте заявку на бесплатное демо CRM4Retail. Покажем, как система увеличит продажи в вашем магазине.';
$page_canonical = 'https://headline-crm.vercel.app/demo/';
require_once '../includes/header.php';
?>

<div style="padding-top: var(--nav-h)"></div>

<section class="section">
  <div class="container">
    <div class="demo-inner">
      <div class="demo-text reveal">
        <span class="label">// бесплатная демонстрация</span>
        <h1>Получить демо<br><span style="color:var(--accent)">CRM4Retail</span></h1>
        <p>Покажем, как система работает на примере вашего типа бизнеса. Демо занимает 30 минут — без лишних слов и продаж под давлением.</p>
        <div class="demo-benefits" style="margin-top:2rem">
          <div class="demo-benefit">Живая демонстрация функций под ваш профиль</div>
          <div class="demo-benefit">Расчёт ROI для вашего бизнеса</div>
          <div class="demo-benefit">Ответы на все технические вопросы</div>
          <div class="demo-benefit">Тест-период без оплаты</div>
        </div>
      </div>

      <div class="reveal">
        <div style="background:var(--surface);border:1px solid var(--border);border-radius:var(--radius-lg);padding:2.5rem">
          <h3 style="margin-bottom:0.5rem">Заявка на демо</h3>
          <p style="margin-bottom:2rem;font-size:0.88rem">Менеджер свяжется с вами в течение 30 минут</p>

          <form class="demo-form" novalidate>
            <div class="form-error"></div>
            <div class="form-group">
              <label class="form-label">Имя *</label>
              <input type="text" name="name" class="form-input" placeholder="Ваше имя" required>
            </div>
            <div class="form-group">
              <label class="form-label">Телефон *</label>
              <input type="tel" name="phone" class="form-input" placeholder="+7 (xxx) xxx-xx-xx" required>
            </div>
            <div class="form-group">
              <label class="form-label">Город *</label>
              <input type="text" name="city" class="form-input" placeholder="Ваш город" required>
            </div>
            <div class="form-group">
              <label class="form-label">Количество точек *</label>
              <select name="stores_count" class="form-select" required>
                <option value="">Выберите...</option>
                <option value="1">1 точка</option>
                <option value="2-5">2–5 точек</option>
                <option value="6-20">6–20 точек</option>
                <option value="21-50">21–50 точек</option>
                <option value="50+">Более 50 точек</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-label">Профиль розницы *</label>
              <select name="retail_profile" class="form-select" required>
                <option value="">Что продаёте?</option>
                <option value="Продукты питания">Продукты питания</option>
                <option value="Одежда и обувь">Одежда и обувь</option>
                <option value="Ресторан / кафе / еда">Ресторан / кафе / еда</option>
                <option value="Аптека / здоровье">Аптека / здоровье</option>
                <option value="Косметика / уход">Косметика / уход</option>
                <option value="Строительство / DIY">Строительство / DIY</option>
                <option value="Электроника">Электроника</option>
                <option value="Спорт и отдых">Спорт и отдых</option>
                <option value="Детские товары">Детские товары</option>
                <option value="Другое">Другое</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary btn-lg" style="width:100%" data-label="Получить демо">
              Получить демо →
            </button>
            <p class="form-note" style="text-align:center;margin-top:1rem">
              Нажимая кнопку, вы соглашаетесь с обработкой персональных данных
            </p>
            <div class="form-success"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once '../includes/footer.php'; ?>
