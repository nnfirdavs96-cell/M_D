<?php
$templates = [
  [
    'num'   => 1,
    'title' => 'Autima — Магазин автозапчастей',
    'desc'  => 'Полноценный интернет-магазин: каталог по категориям, слайдер, товары с вкладками (тормоза, колёса, турбо), бренды и баннеры.',
    'badge' => ['label' => 'Популярный', 'class' => 'badge-popular'],
    'tags'  => ['Автозапчасти', 'Каталог', 'E-commerce'],
  ],
  [
    'num'   => 2,
    'title' => 'Автозапчасти — Современный',
    'desc'  => 'Стильный тёмный дизайн с акцентами, фильтрацией по марке/модели и корзиной.',
    'badge' => ['label' => 'Новый', 'class' => 'badge-new'],
    'tags'  => ['Тёмная тема', 'Фильтры', 'Корзина'],
  ],
  [
    'num'   => 3,
    'title' => 'Автозапчасти — Минимализм',
    'desc'  => 'Лаконичный и быстрый сайт с акцентом на удобство навигации и скорость загрузки.',
    'badge' => ['label' => 'Pro', 'class' => 'badge-pro'],
    'tags'  => ['Минимализм', 'Быстрый', 'SEO'],
  ],
  [
    'num'   => 4,
    'title' => 'Автозапчасти — Магазин',
    'desc'  => 'Полноценный интернет-магазин: каталог, сравнение, отзывы, оплата онлайн.',
    'badge' => ['label' => 'Популярный', 'class' => 'badge-popular'],
    'tags'  => ['Магазин', 'Сравнение', 'Отзывы'],
  ],
  [
    'num'   => 5,
    'title' => 'Автозапчасти — Лендинг',
    'desc'  => 'Одностраничный продающий сайт: преимущества, акции, форма заявки и карта.',
    'badge' => ['label' => 'Новый', 'class' => 'badge-new'],
    'tags'  => ['Лендинг', 'Акции', 'Заявки'],
  ],
];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Шаблоны сайтов автозапчастей — Витрина</title>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --bg: #0f0f13;
      --surface: #1a1a24;
      --border: #2a2a3a;
      --accent: #6c63ff;
      --accent2: #ff6584;
      --accent3: #43e97b;
      --text: #e8e8f0;
      --muted: #8888aa;
      --radius: 16px;
    }

    body {
      font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
      background: var(--bg);
      color: var(--text);
      min-height: 100vh;
    }

    /* ── Hero ── */
    .hero {
      text-align: center;
      padding: 80px 24px 60px;
      background: radial-gradient(ellipse 80% 60% at 50% 0%, rgba(108,99,255,.18) 0%, transparent 70%);
    }
    .hero-badge {
      display: inline-block;
      padding: 6px 16px;
      border-radius: 999px;
      background: rgba(108,99,255,.15);
      border: 1px solid rgba(108,99,255,.35);
      color: #a89eff;
      font-size: .8rem;
      letter-spacing: .08em;
      text-transform: uppercase;
      margin-bottom: 24px;
    }
    .hero h1 {
      font-size: clamp(2rem, 5vw, 3.5rem);
      font-weight: 800;
      line-height: 1.15;
      background: linear-gradient(135deg, #fff 30%, #a89eff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      margin-bottom: 16px;
    }
    .hero p {
      max-width: 540px;
      margin: 0 auto 40px;
      color: var(--muted);
      font-size: 1.05rem;
      line-height: 1.7;
    }
    .hero-stats {
      display: flex;
      justify-content: center;
      gap: 48px;
      flex-wrap: wrap;
    }
    .stat { text-align: center; }
    .stat-num { font-size: 1.8rem; font-weight: 800; color: #fff; }
    .stat-num span { color: var(--accent); }
    .stat-label { font-size: .82rem; color: var(--muted); margin-top: 2px; }

    /* ── Filter bar ── */
    .filter-bar {
      display: flex;
      justify-content: center;
      gap: 10px;
      flex-wrap: wrap;
      padding: 0 24px 48px;
    }
    .filter-btn {
      padding: 8px 20px;
      border-radius: 999px;
      border: 1px solid var(--border);
      background: var(--surface);
      color: var(--muted);
      font-size: .875rem;
      cursor: pointer;
      transition: all .2s;
    }
    .filter-btn:hover, .filter-btn.active {
      border-color: var(--accent);
      color: #fff;
      background: rgba(108,99,255,.15);
    }

    /* ── Grid ── */
    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
      gap: 28px;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 24px 80px;
    }

    /* ── Card ── */
    .card {
      border-radius: var(--radius);
      border: 1px solid var(--border);
      background: var(--surface);
      overflow: hidden;
      transition: transform .25s, border-color .25s, box-shadow .25s;
      display: flex;
      flex-direction: column;
    }
    .card:hover {
      transform: translateY(-6px);
      border-color: rgba(108,99,255,.5);
      box-shadow: 0 20px 60px rgba(108,99,255,.15);
    }

    .card-preview {
      position: relative;
      height: 220px;
      overflow: hidden;
      background: #13131e;
    }
    .card-preview iframe {
      width: 200%;
      height: 200%;
      border: none;
      transform: scale(.5);
      transform-origin: top left;
      pointer-events: none;
    }
    .card-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to bottom, transparent 40%, rgba(26,26,36,.95) 100%);
      display: flex;
      align-items: flex-end;
      padding: 16px;
      opacity: 0;
      transition: opacity .25s;
    }
    .card:hover .card-overlay { opacity: 1; }
    .preview-btn {
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 10px 20px;
      border-radius: 999px;
      background: var(--accent);
      color: #fff;
      font-size: .875rem;
      font-weight: 600;
      text-decoration: none;
      transition: background .2s;
    }
    .preview-btn:hover { background: #5a52e0; }

    .card-body { padding: 20px; flex: 1; display: flex; flex-direction: column; gap: 12px; }
    .card-meta { display: flex; align-items: center; justify-content: space-between; }
    .card-num {
      font-size: .75rem; font-weight: 700;
      color: var(--accent); letter-spacing: .1em; text-transform: uppercase;
    }
    .card-badge {
      padding: 3px 10px; border-radius: 999px;
      font-size: .72rem; font-weight: 600; letter-spacing: .05em;
    }
    .badge-new      { background: rgba(67,233,123,.15);  color: #43e97b; }
    .badge-popular  { background: rgba(255,101,132,.15); color: #ff6584; }
    .badge-pro      { background: rgba(108,99,255,.15);  color: #a89eff; }

    .card h3 { font-size: 1.15rem; font-weight: 700; color: #fff; }
    .card p  { font-size: .875rem; color: var(--muted); line-height: 1.6; flex: 1; }

    .card-tags { display: flex; gap: 8px; flex-wrap: wrap; }
    .tag {
      padding: 3px 10px; border-radius: 6px;
      background: rgba(255,255,255,.05); border: 1px solid var(--border);
      font-size: .75rem; color: var(--muted);
    }

    .card-footer { display: flex; gap: 10px; padding: 0 20px 20px; }
    .btn-primary {
      flex: 1; display: flex; align-items: center; justify-content: center;
      gap: 6px; padding: 11px; border-radius: 10px;
      background: var(--accent); color: #fff; font-size: .875rem;
      font-weight: 600; text-decoration: none; border: none;
      cursor: pointer; transition: background .2s;
    }
    .btn-primary:hover { background: #5a52e0; }

    footer {
      text-align: center; padding: 32px;
      border-top: 1px solid var(--border); color: var(--muted); font-size: .85rem;
    }

    @media (max-width: 480px) {
      .hero h1 { font-size: 2rem; }
      .grid { grid-template-columns: 1fr; }
      .hero-stats { gap: 24px; }
    }
  </style>
</head>
<body>

  <section class="hero">
    <div class="hero-badge">&#10022; Витрина шаблонов</div>
    <h1>Готовые сайты<br>для автозапчастей</h1>
    <p>Выберите подходящий шаблон — адаптируем под ваш каталог, бренд и задачи. Быстрый запуск, профессиональный результат.</p>
    <div class="hero-stats">
      <div class="stat">
        <div class="stat-num"><?= count($templates) ?><span>+</span></div>
        <div class="stat-label">Шаблонов</div>
      </div>
      <div class="stat">
        <div class="stat-num">100<span>%</span></div>
        <div class="stat-label">Адаптивный дизайн</div>
      </div>
      <div class="stat">
        <div class="stat-num">7<span>д</span></div>
        <div class="stat-label">Срок запуска</div>
      </div>
    </div>
  </section>

  <div class="filter-bar">
    <button class="filter-btn active">Все шаблоны</button>
    <button class="filter-btn">Каталог</button>
    <button class="filter-btn">Лендинг</button>
    <button class="filter-btn">Магазин</button>
  </div>

  <div class="grid">
    <?php foreach ($templates as $t): ?>
    <div class="card">
      <div class="card-preview">
        <iframe src="site<?= $t['num'] ?>/index.html" loading="lazy" title="<?= htmlspecialchars($t['title']) ?>"></iframe>
        <div class="card-overlay">
          <a href="site<?= $t['num'] ?>/index.html" target="_blank" class="preview-btn">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/></svg>
            Открыть превью
          </a>
        </div>
      </div>
      <div class="card-body">
        <div class="card-meta">
          <span class="card-num">Сайт &numero;<?= $t['num'] ?></span>
          <span class="card-badge <?= $t['badge']['class'] ?>"><?= $t['badge']['label'] ?></span>
        </div>
        <h3><?= htmlspecialchars($t['title']) ?></h3>
        <p><?= htmlspecialchars($t['desc']) ?></p>
        <div class="card-tags">
          <?php foreach ($t['tags'] as $tag): ?>
          <span class="tag"><?= htmlspecialchars($tag) ?></span>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="card-footer">
        <a href="site<?= $t['num'] ?>/index.html" target="_blank" class="btn-primary">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
          Посмотреть
        </a>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

  <footer>
    <p>Все шаблоны адаптируются под ваш каталог и бренд &nbsp;&middot;&nbsp; Свяжитесь с нами, чтобы начать</p>
  </footer>

  <script>
    document.querySelectorAll('.filter-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
      });
    });
  </script>
</body>
</html>
