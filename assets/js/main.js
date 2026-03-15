/* CRM4Retail — Main JS */

document.addEventListener('DOMContentLoaded', () => {

  /* ---- Navbar scroll ---- */
  const navbar = document.getElementById('navbar');
  if (navbar) {
    window.addEventListener('scroll', () => {
      navbar.classList.toggle('scrolled', window.scrollY > 30);
    }, { passive: true });
  }

  /* ---- Mobile menu ---- */
  const burger = document.querySelector('.burger');
  const mobileMenu = document.querySelector('.mobile-menu');
  if (burger && mobileMenu) {
    burger.addEventListener('click', () => {
      mobileMenu.classList.toggle('open');
      const spans = burger.querySelectorAll('span');
      if (mobileMenu.classList.contains('open')) {
        spans[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
        spans[1].style.opacity = '0';
        spans[2].style.transform = 'rotate(-45deg) translate(5px, -5px)';
      } else {
        spans.forEach(s => { s.style.transform = ''; s.style.opacity = ''; });
      }
    });
    mobileMenu.querySelectorAll('a').forEach(a => {
      a.addEventListener('click', () => {
        mobileMenu.classList.remove('open');
        burger.querySelectorAll('span').forEach(s => { s.style.transform = ''; s.style.opacity = ''; });
      });
    });
  }

  /* ---- Cookie banner ---- */
  const cookieBanner = document.getElementById('cookie-banner');
  if (cookieBanner && !localStorage.getItem('cookie_accepted')) {
    cookieBanner.style.display = 'block';
    document.getElementById('cookie-accept')?.addEventListener('click', () => {
      localStorage.setItem('cookie_accepted', '1');
      cookieBanner.style.display = 'none';
    });
    document.getElementById('cookie-decline')?.addEventListener('click', () => {
      cookieBanner.style.display = 'none';
    });
  }

  /* ---- Support widget ---- */
  const supportToggle = document.querySelector('.support-toggle');
  const supportIcons  = document.querySelector('.support-icons');
  if (supportToggle && supportIcons) {
    supportToggle.addEventListener('click', () => {
      supportIcons.classList.toggle('hidden');
      supportToggle.classList.toggle('open');
      supportToggle.textContent = supportIcons.classList.contains('hidden') ? '💬' : '✕';
    });
  }

  /* ---- FAQ ---- */
  document.querySelectorAll('.faq-q').forEach(btn => {
    btn.addEventListener('click', () => {
      const item = btn.closest('.faq-item');
      const answer = item.querySelector('.faq-a');
      const isOpen = item.classList.contains('open');
      document.querySelectorAll('.faq-item.open').forEach(i => {
        i.classList.remove('open');
        i.querySelector('.faq-a').style.maxHeight = '0';
      });
      if (!isOpen) {
        item.classList.add('open');
        answer.style.maxHeight = answer.scrollHeight + 'px';
      }
    });
  });

  /* ---- Modals ---- */
  document.querySelectorAll('[data-modal]').forEach(trigger => {
    trigger.addEventListener('click', () => {
      const id = trigger.dataset.modal;
      document.getElementById(id)?.classList.add('open');
    });
  });
  document.querySelectorAll('.modal-overlay').forEach(overlay => {
    overlay.addEventListener('click', (e) => {
      if (e.target === overlay) overlay.classList.remove('open');
    });
    overlay.querySelector('.modal-close')?.addEventListener('click', () => {
      overlay.classList.remove('open');
    });
  });

  /* ---- Problem bar animation ---- */
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.querySelectorAll('.pv-bar').forEach(bar => {
          bar.style.width = bar.dataset.w;
        });
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.3 });
  document.querySelector('.problem-visual') && observer.observe(document.querySelector('.problem-visual'));

  /* ---- Generic form submit ---- */
  async function submitForm(formEl, action) {
    const errorEl  = formEl.querySelector('.form-error');
    const successEl = formEl.querySelector('.form-success');
    const btn = formEl.querySelector('[type=submit]');

    if (errorEl)   errorEl.style.display = 'none';
    if (successEl) successEl.style.display = 'none';

    const data = { action };
    formEl.querySelectorAll('[name]').forEach(input => {
      data[input.name] = input.value.trim();
    });

    const required = formEl.querySelectorAll('[required]');
    for (const field of required) {
      if (!field.value.trim()) {
        if (errorEl) { errorEl.textContent = 'Заполните все обязательные поля'; errorEl.style.display = 'block'; }
        field.focus();
        return;
      }
    }

    if (btn) { btn.disabled = true; btn.textContent = 'Отправка...'; }

    try {
      const resp = await fetch('/api/submit.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data)
      });
      const result = await resp.json();
      if (result.success) {
        formEl.querySelectorAll('input, textarea, select').forEach(f => f.value = '');
        if (successEl) { successEl.textContent = result.message; successEl.style.display = 'block'; }
        // Also close modal if inside one
        formEl.closest('.modal-overlay')?.classList.remove('open');
        if (!successEl) alert(result.message);
      } else {
        if (errorEl) { errorEl.textContent = result.error || 'Ошибка отправки'; errorEl.style.display = 'block'; }
      }
    } catch(e) {
      if (errorEl) { errorEl.textContent = 'Ошибка соединения. Попробуйте позже.'; errorEl.style.display = 'block'; }
    } finally {
      if (btn) { btn.disabled = false; btn.textContent = btn.dataset.label || 'Отправить'; }
    }
  }

  /* ---- Demo form ---- */
  document.querySelectorAll('.demo-form').forEach(form => {
    form.addEventListener('submit', e => {
      e.preventDefault();
      submitForm(form, 'demo_request');
    });
  });

  /* ---- Callback form ---- */
  document.querySelectorAll('.callback-form').forEach(form => {
    form.addEventListener('submit', e => {
      e.preventDefault();
      submitForm(form, 'callback_request');
    });
  });

  /* ---- Scroll reveal ---- */
  const revealObs = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0)';
        revealObs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

  document.querySelectorAll('.reveal').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(24px)';
    el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    revealObs.observe(el);
  });

});

/* ---- Quiz logic (used on pricing page) ---- */
const Quiz = (() => {
  let currentStep = 0;
  const data = {};

  function init() {
    const steps = document.querySelectorAll('.quiz-step');
    if (!steps.length) return;

    updateProgress();

    document.querySelectorAll('.quiz-next').forEach(btn => {
      btn.addEventListener('click', () => {
        const selected = document.querySelector(`.quiz-step[data-step="${currentStep}"] .quiz-option.selected`);
        const inputs   = document.querySelectorAll(`.quiz-step[data-step="${currentStep}"] [name]`);

        let hasValue = selected;
        inputs.forEach(inp => { if (inp.value.trim()) hasValue = true; });

        if (!hasValue && !btn.dataset.optional) {
          const step = document.querySelector(`.quiz-step[data-step="${currentStep}"]`);
          step.style.animation = 'shake 0.4s ease';
          setTimeout(() => step.style.animation = '', 400);
          return;
        }
        if (currentStep < steps.length - 1) {
          goTo(currentStep + 1);
        }
      });
    });

    document.querySelectorAll('.quiz-prev').forEach(btn => {
      btn.addEventListener('click', () => {
        if (currentStep > 0) goTo(currentStep - 1);
      });
    });

    document.querySelectorAll('.quiz-option').forEach(opt => {
      opt.addEventListener('click', () => {
        opt.closest('.quiz-options').querySelectorAll('.quiz-option').forEach(o => o.classList.remove('selected'));
        opt.classList.add('selected');
        data[opt.dataset.key] = opt.dataset.value;
      });
    });
  }

  function goTo(step) {
    document.querySelector(`.quiz-step.active`)?.classList.remove('active');
    currentStep = step;
    document.querySelector(`.quiz-step[data-step="${step}"]`)?.classList.add('active');
    updateProgress();
  }

  function updateProgress() {
    const bars = document.querySelectorAll('.quiz-progress-bar');
    bars.forEach((bar, i) => {
      bar.classList.remove('active', 'done');
      if (i < currentStep) bar.classList.add('done');
      else if (i === currentStep) bar.classList.add('active');
    });
  }

  return { init, getData: () => data };
})();

document.addEventListener('DOMContentLoaded', () => {
  Quiz.init();

  /* Pricing form with quiz data */
  const pricingForm = document.querySelector('.pricing-form');
  if (pricingForm) {
    pricingForm.addEventListener('submit', async (e) => {
      e.preventDefault();
      const quizData = Quiz.getData();
      const errorEl  = pricingForm.querySelector('.form-error');
      const successEl = pricingForm.querySelector('.form-success');
      const btn = pricingForm.querySelector('[type=submit]');

      if (errorEl)   errorEl.style.display = 'none';
      if (successEl) successEl.style.display = 'none';

      const formData = {};
      pricingForm.querySelectorAll('[name]').forEach(f => { formData[f.name] = f.value.trim(); });

      const payload = { action: 'pricing_request', ...formData, ...quizData };

      if (!payload.name || !payload.phone || !payload.city) {
        if (errorEl) { errorEl.textContent = 'Заполните обязательные поля'; errorEl.style.display = 'block'; }
        return;
      }

      if (btn) { btn.disabled = true; btn.textContent = 'Отправка...'; }
      try {
        const resp = await fetch('/api/submit.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(payload)
        });
        const result = await resp.json();
        if (result.success) {
          pricingForm.style.display = 'none';
          if (successEl) { successEl.textContent = result.message; successEl.style.display = 'block'; }
        } else {
          if (errorEl) { errorEl.textContent = result.error; errorEl.style.display = 'block'; }
        }
      } catch(e) {
        if (errorEl) { errorEl.textContent = 'Ошибка. Попробуйте позже.'; errorEl.style.display = 'block'; }
      } finally {
        if (btn) { btn.disabled = false; btn.textContent = 'Получить расчёт'; }
      }
    });
  }
});

/* shake animation */
const shakeStyle = document.createElement('style');
shakeStyle.textContent = `
@keyframes shake {
  0%,100%{transform:translateX(0)}
  20%,60%{transform:translateX(-6px)}
  40%,80%{transform:translateX(6px)}
}`;
document.head.appendChild(shakeStyle);
