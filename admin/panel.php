<?php
require_once '../includes/config.php';
session_start();

if (empty($_SESSION['admin_id'])) {
    header('Location: /admin/');
    exit;
}
if (time() - ($_SESSION['admin_login_time'] ?? 0) > SESSION_LIFETIME) {
    session_destroy();
    header('Location: /admin/?expired=1');
    exit;
}

$username = htmlspecialchars($_SESSION['admin_username']);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Панель администратора — CRM4Retail</title>
  <meta name="robots" content="noindex, nofollow">
  <link rel="stylesheet" href="admin.css">
</head>
<body>
<div class="admin-layout">

  <!-- SIDEBAR -->
  <aside class="sidebar">
    <div class="sidebar-logo">
      CRM<span>4</span>Retail
      <small>// Панель администратора</small>
    </div>
    <nav class="sidebar-nav">
      <a href="#" class="active nav-link" data-tab="dashboard">
        <span class="nav-icon">📊</span> Дашборд
      </a>
      <a href="#" class="nav-link" data-tab="demo">
        <span class="nav-icon">🎯</span> Заявки на демо
        <span class="sidebar-badge" id="badge-demo">—</span>
      </a>
      <a href="#" class="nav-link" data-tab="pricing">
        <span class="nav-icon">💰</span> Расчёт стоимости
        <span class="sidebar-badge" id="badge-pricing">—</span>
      </a>
      <a href="#" class="nav-link" data-tab="callback">
        <span class="nav-icon">📞</span> Обратный звонок
        <span class="sidebar-badge" id="badge-callback">—</span>
      </a>
    </nav>
    <div class="sidebar-footer">
      <span>👤 <?= $username ?></span><br>
      <a href="#" id="logout-btn" style="margin-top:0.4rem;display:inline-block">Выйти</a>
    </div>
  </aside>

  <!-- MAIN -->
  <main class="admin-main">
    <div class="admin-topbar">
      <h1 id="page-title">Дашборд</h1>
      <div class="topbar-right">
        <span id="current-time" class="mono"></span>
        <a href="/" target="_blank" style="color:var(--text3);font-size:0.8rem">← Сайт</a>
      </div>
    </div>

    <div class="admin-content">

      <!-- DASHBOARD -->
      <div id="tab-dashboard" class="tab-section">
        <div class="stats-grid" id="stats-grid">
          <div class="stat-card">
            <div class="stat-card-label">Заявки на демо</div>
            <div class="stat-card-num" id="stat-demo-total">—</div>
            <div class="stat-card-sub"><span id="stat-demo-new" style="color:var(--accent)">—</span> новых</div>
          </div>
          <div class="stat-card">
            <div class="stat-card-label">Расчёт стоимости</div>
            <div class="stat-card-num" id="stat-pricing-total">—</div>
            <div class="stat-card-sub"><span id="stat-pricing-new" style="color:var(--accent)">—</span> новых</div>
          </div>
          <div class="stat-card">
            <div class="stat-card-label">Обратный звонок</div>
            <div class="stat-card-num" id="stat-callback-total">—</div>
            <div class="stat-card-sub"><span id="stat-callback-new" style="color:var(--accent)">—</span> новых</div>
          </div>
        </div>
        <p style="font-size:0.82rem;color:var(--text3)">Последнее обновление: <span id="last-updated">—</span></p>
      </div>

      <!-- DEMO REQUESTS -->
      <div id="tab-demo" class="tab-section" style="display:none">
        <div class="table-wrap">
          <div class="table-header">
            <span class="table-title">Заявки на демо</span>
            <div class="table-filters">
              <select class="filter-select" id="filter-demo">
                <option value="">Все статусы</option>
                <option value="new">Новые</option>
                <option value="in_progress">В работе</option>
                <option value="done">Завершено</option>
                <option value="cancelled">Отменено</option>
              </select>
              <button class="btn btn-sm btn-primary" onclick="loadTable('demo_requests')">↻ Обновить</button>
            </div>
          </div>
          <div style="overflow-x:auto">
          <table id="table-demo">
            <thead>
              <tr>
                <th>#</th><th>Имя</th><th>Телефон</th><th>Город</th>
                <th>Точек</th><th>Профиль</th><th>Статус</th><th>Дата</th><th>Действия</th>
              </tr>
            </thead>
            <tbody id="tbody-demo"></tbody>
          </table>
          </div>
        </div>
      </div>

      <!-- PRICING REQUESTS -->
      <div id="tab-pricing" class="tab-section" style="display:none">
        <div class="table-wrap">
          <div class="table-header">
            <span class="table-title">Расчёт стоимости</span>
            <div class="table-filters">
              <select class="filter-select" id="filter-pricing">
                <option value="">Все статусы</option>
                <option value="new">Новые</option>
                <option value="in_progress">В работе</option>
                <option value="done">Завершено</option>
                <option value="cancelled">Отменено</option>
              </select>
              <button class="btn btn-sm btn-primary" onclick="loadTable('pricing_requests')">↻ Обновить</button>
            </div>
          </div>
          <div style="overflow-x:auto">
          <table id="table-pricing">
            <thead>
              <tr>
                <th>#</th><th>Имя</th><th>Телефон</th><th>Город</th>
                <th>Точек</th><th>Тип</th><th>Бюджет</th><th>Статус</th><th>Дата</th><th>Действия</th>
              </tr>
            </thead>
            <tbody id="tbody-pricing"></tbody>
          </table>
          </div>
        </div>
      </div>

      <!-- CALLBACK REQUESTS -->
      <div id="tab-callback" class="tab-section" style="display:none">
        <div class="table-wrap">
          <div class="table-header">
            <span class="table-title">Обратный звонок</span>
            <div class="table-filters">
              <select class="filter-select" id="filter-callback">
                <option value="">Все статусы</option>
                <option value="new">Новые</option>
                <option value="called">Позвонили</option>
                <option value="missed">Пропущен</option>
              </select>
              <button class="btn btn-sm btn-primary" onclick="loadTable('callback_requests')">↻ Обновить</button>
            </div>
          </div>
          <div style="overflow-x:auto">
          <table id="table-callback">
            <thead>
              <tr>
                <th>#</th><th>Имя</th><th>Телефон</th><th>Статус</th><th>Дата</th><th>Действия</th>
              </tr>
            </thead>
            <tbody id="tbody-callback"></tbody>
          </table>
          </div>
        </div>
      </div>

    </div>
  </main>
</div>

<!-- EDIT MODAL -->
<div class="modal-overlay" id="edit-modal">
  <div class="modal">
    <button class="modal-close" onclick="closeModal()">✕</button>
    <h3>Редактировать заявку</h3>
    <div id="modal-fields"></div>
    <div class="field-row">
      <div class="field-label">Статус</div>
      <select id="edit-status" class="form-input"></select>
    </div>
    <div class="field-row">
      <div class="field-label">Заметки менеджера</div>
      <textarea id="edit-notes" class="form-input" placeholder="Добавьте заметку..."></textarea>
    </div>
    <div class="modal-actions">
      <button class="btn btn-danger btn-sm" onclick="deleteRecord()">Удалить</button>
      <button class="btn btn-primary btn-sm" onclick="saveRecord()">Сохранить</button>
    </div>
  </div>
</div>

<script>
// State
let currentTable = null;
let currentId    = null;
let allData      = {};

// Tabs
document.querySelectorAll('.nav-link').forEach(link => {
  link.addEventListener('click', (e) => {
    e.preventDefault();
    const tab = link.dataset.tab;
    document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
    document.querySelectorAll('.tab-section').forEach(s => s.style.display = 'none');
    link.classList.add('active');
    document.getElementById('tab-' + tab).style.display = 'block';
    document.getElementById('page-title').textContent = link.textContent.trim();

    if (tab === 'demo')    loadTable('demo_requests');
    if (tab === 'pricing') loadTable('pricing_requests');
    if (tab === 'callback')loadTable('callback_requests');
  });
});

// Clock
function updateTime() {
  document.getElementById('current-time').textContent =
    new Date().toLocaleTimeString('ru-RU', {hour:'2-digit', minute:'2-digit', second:'2-digit'});
}
setInterval(updateTime, 1000);
updateTime();

// Load stats
async function loadStats() {
  try {
    const resp = await fetch('../api/admin_data.php?action=get_stats');
    const data = await resp.json();
    if (!data.success) return;
    const s = data.data;

    const tablesMap = {
      demo_requests:     { total: 'stat-demo-total',    new: 'stat-demo-new',    badge: 'badge-demo' },
      pricing_requests:  { total: 'stat-pricing-total', new: 'stat-pricing-new', badge: 'badge-pricing' },
      callback_requests: { total: 'stat-callback-total',new: 'stat-callback-new',badge: 'badge-callback' },
    };
    Object.entries(tablesMap).forEach(([table, ids]) => {
      const row = s[table] || {};
      document.getElementById(ids.total).textContent = row.total || 0;
      document.getElementById(ids.new).textContent   = row.new_count || 0;
      document.getElementById(ids.badge).textContent = row.new_count || 0;
    });
    document.getElementById('last-updated').textContent = new Date().toLocaleTimeString('ru-RU');
  } catch(e) { console.error(e); }
}

// Load table data
async function loadTable(table) {
  try {
    const resp = await fetch(`../api/admin_data.php?action=get_table&table=${table}`);
    const data = await resp.json();
    if (!data.success) return;
    allData[table] = data.data;
    renderTable(table, data.data);
  } catch(e) { console.error(e); }
}

function fmtDate(dt) {
  if (!dt) return '—';
  return new Date(dt).toLocaleString('ru-RU', {day:'2-digit', month:'2-digit', year:'2-digit', hour:'2-digit', minute:'2-digit'});
}

function statusBadge(status) {
  const labels = { new:'Новая', in_progress:'В работе', done:'Завершено', cancelled:'Отменено', called:'Позвонили', missed:'Пропущен' };
  const cls    = { new:'new', in_progress:'progress', done:'done', cancelled:'cancelled', called:'called', missed:'missed' };
  return `<span class="badge badge-${cls[status]||'new'}">${labels[status]||status}</span>`;
}

function renderTable(table, rows) {
  const filterVal = document.getElementById('filter-' + tableKey(table))?.value || '';
  const filtered  = filterVal ? rows.filter(r => r.status === filterVal) : rows;

  const tbodies = { demo_requests:'tbody-demo', pricing_requests:'tbody-pricing', callback_requests:'tbody-callback' };
  const tbody = document.getElementById(tbodies[table]);
  if (!tbody) return;

  if (!filtered.length) {
    tbody.innerHTML = `<tr><td colspan="20" style="text-align:center;color:var(--text3);padding:2rem">Заявок нет</td></tr>`;
    return;
  }

  tbody.innerHTML = filtered.map(r => {
    const actions = `
      <button class="action-btn edit" onclick="openEdit('${table}', ${r.id})" title="Редактировать">✏️</button>
      <button class="action-btn delete" onclick="quickDelete('${table}', ${r.id})" title="Удалить">🗑️</button>`;

    if (table === 'demo_requests') {
      return `<tr>
        <td class="td-mono">#${r.id}</td>
        <td class="td-name">${esc(r.name)}</td>
        <td><a href="tel:${esc(r.phone)}">${esc(r.phone)}</a></td>
        <td>${esc(r.city)}</td>
        <td>${esc(r.stores_count)}</td>
        <td>${esc(r.retail_profile)}</td>
        <td>${statusBadge(r.status)}</td>
        <td class="td-mono">${fmtDate(r.created_at)}</td>
        <td>${actions}</td>
      </tr>`;
    }
    if (table === 'pricing_requests') {
      return `<tr>
        <td class="td-mono">#${r.id}</td>
        <td class="td-name">${esc(r.name)}</td>
        <td><a href="tel:${esc(r.phone)}">${esc(r.phone)}</a></td>
        <td>${esc(r.city)}</td>
        <td>${esc(r.stores_count)}</td>
        <td>${esc(r.retail_type)}</td>
        <td>${esc(r.budget||'—')}</td>
        <td>${statusBadge(r.status)}</td>
        <td class="td-mono">${fmtDate(r.created_at)}</td>
        <td>${actions}</td>
      </tr>`;
    }
    if (table === 'callback_requests') {
      return `<tr>
        <td class="td-mono">#${r.id}</td>
        <td class="td-name">${esc(r.name)}</td>
        <td><a href="tel:${esc(r.phone)}">${esc(r.phone)}</a></td>
        <td>${statusBadge(r.status)}</td>
        <td class="td-mono">${fmtDate(r.created_at)}</td>
        <td>${actions}</td>
      </tr>`;
    }
    return '';
  }).join('');
}

function tableKey(t) {
  return { demo_requests:'demo', pricing_requests:'pricing', callback_requests:'callback' }[t] || '';
}

function esc(s) { if (!s) return '—'; return String(s).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;'); }

// Filters
['demo', 'pricing', 'callback'].forEach(key => {
  document.getElementById(`filter-${key}`)?.addEventListener('change', () => {
    const tableMap = { demo:'demo_requests', pricing:'pricing_requests', callback:'callback_requests' };
    const table = tableMap[key];
    if (allData[table]) renderTable(table, allData[table]);
  });
});

// Edit modal
const statusOptions = {
  demo_requests:     ['new','in_progress','done','cancelled'],
  pricing_requests:  ['new','in_progress','done','cancelled'],
  callback_requests: ['new','called','missed'],
};
const statusLabels = { new:'Новая', in_progress:'В работе', done:'Завершено', cancelled:'Отменено', called:'Позвонили', missed:'Пропущен' };

function openEdit(table, id) {
  currentTable = table;
  currentId    = id;
  const rows = allData[table] || [];
  const row  = rows.find(r => r.id == id);
  if (!row) return;

  // Build fields
  const fieldsEl = document.getElementById('modal-fields');
  const exclude   = ['id','status','notes','created_at'];
  const fieldNames = {
    name:'Имя', phone:'Телефон', city:'Город',
    stores_count:'Кол-во точек', retail_profile:'Профиль', retail_type:'Тип розницы',
    employees_count:'Сотрудников', current_crm:'Текущая CRM', budget:'Бюджет', comment:'Комментарий'
  };
  let html = '';
  Object.entries(row).forEach(([k, v]) => {
    if (exclude.includes(k)) return;
    html += `<div class="field-row">
      <div class="field-label">${fieldNames[k]||k}</div>
      <div class="field-val strong">${esc(v)||'—'}</div>
    </div>`;
  });
  html += `<div class="field-row"><div class="field-label">Дата</div><div class="field-val">${fmtDate(row.created_at)}</div></div>`;
  fieldsEl.innerHTML = html;

  // Status select
  const sel = document.getElementById('edit-status');
  sel.innerHTML = statusOptions[table].map(s =>
    `<option value="${s}" ${row.status===s?'selected':''}>${statusLabels[s]}</option>`
  ).join('');

  document.getElementById('edit-notes').value = row.notes || '';
  document.getElementById('edit-modal').classList.add('open');
}

function closeModal() {
  document.getElementById('edit-modal').classList.remove('open');
}

async function saveRecord() {
  const status = document.getElementById('edit-status').value;
  const notes  = document.getElementById('edit-notes').value.trim();
  try {
    const resp = await fetch('../api/admin_data.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ action:'update_status', table:currentTable, id:currentId, status, notes })
    });
    const data = await resp.json();
    if (data.success) {
      closeModal();
      loadTable(currentTable);
      loadStats();
    }
  } catch(e) { alert('Ошибка сохранения'); }
}

async function deleteRecord() {
  if (!confirm('Удалить заявку? Это действие необратимо.')) return;
  try {
    const resp = await fetch('../api/admin_data.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ action:'delete', table:currentTable, id:currentId })
    });
    const data = await resp.json();
    if (data.success) { closeModal(); loadTable(currentTable); loadStats(); }
  } catch(e) { alert('Ошибка удаления'); }
}

async function quickDelete(table, id) {
  if (!confirm('Удалить эту заявку?')) return;
  try {
    const resp = await fetch('../api/admin_data.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ action:'delete', table, id })
    });
    const data = await resp.json();
    if (data.success) { loadTable(table); loadStats(); }
  } catch(e) { alert('Ошибка удаления'); }
}

// Close modal on overlay click
document.getElementById('edit-modal').addEventListener('click', (e) => {
  if (e.target === e.currentTarget) closeModal();
});

// Logout
document.getElementById('logout-btn').addEventListener('click', async (e) => {
  e.preventDefault();
  await fetch('../api/auth.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ action: 'logout' })
  });
  window.location.href = '/admin/';
});

// Init
loadStats();
</script>
</body>
</html>
