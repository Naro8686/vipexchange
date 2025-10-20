<!doctype html>
<html lang="ru" class="scroll-smooth">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>VipExchange — приватный обменник USDT ⇄ RUB</title>
    <meta name="description"
          content="VipExchange — лучший приватный обменник USDT ⇄ RUB. Быстрые переводы, честные курсы, конфиденциальность."/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --bg: #0b1020;
            --card: #111731;
            --muted: #96a1b3;
            --primary: #5eead4; /* teal-300 */
            --accent: #60a5fa; /* blue-400 */
        }

        body {
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, Helvetica Neue, Arial, "Apple Color Emoji", "Segoe UI Emoji";
        }

        .glass {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.06), rgba(255, 255, 255, 0.02));
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .shine {
            position: relative;
            overflow: hidden;
        }

        .shine::after {
            content: "";
            position: absolute;
            inset: -200% -50%;
            background: linear-gradient(120deg, transparent 40%, rgba(255, 255, 255, .15), transparent 60%);
            transform: translateX(-100%);
        }

        .shine:hover::after {
            animation: shine 1s ease;
        }

        @keyframes shine {
            to {
                transform: translateX(100%);
            }
        }

        .spin-slow {
            animation: spin 3s linear infinite;
        }
    </style>
</head>
<body class="bg-[var(--bg)] text-white">
<!-- Header / Hero -->
<header class="relative isolate" style="overflow-x: clip;">
    <div class="absolute inset-0 -z-10 opacity-25" aria-hidden="true">
        <div class="absolute -top-24 -left-16 h-72 w-72 rounded-full blur-3xl"
             style="background: radial-gradient(ellipse at center, var(--accent), transparent 60%);"></div>
        <div class="absolute -bottom-24 -right-16 h-72 w-72 rounded-full blur-3xl"
             style="background: radial-gradient(ellipse at center, var(--primary), transparent 60%);"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-16">
        <nav class="flex items-center justify-between">
            <a href="#top" class="flex items-center gap-2 font-semibold tracking-tight">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                     class="w-6 h-6 text-teal-300">
                    <path
                        d="M12 2l3.09 6.26L22 9.27l-5 4.91L18.18 22 12 18.77 5.82 22 7 14.18l-5-4.91 6.91-1.01L12 2z"/>
                </svg>
                <span>VipExchange</span>
            </a>
            <a href="#calculator"
               class="shine inline-flex items-center rounded-xl bg-white/10 px-4 py-2 text-sm font-medium hover:bg-white/20 transition">Калькулятор</a>
        </nav>

        <div class="mt-12 grid lg:grid-cols-2 gap-10 items-center">
            <div>
                <h1 class="text-3xl sm:text-5xl font-extrabold leading-tight">
                    VipExchange — лучший приватный обменник <span class="text-teal-300">USDT</span> ⇄ <span
                        class="text-blue-400">RUB</span>
                </h1>
                <p class="mt-4 text-lg text-[var(--muted)] max-w-2xl">
                    Моментальные переводы, выгодные курсы, надёжность и полная конфиденциальность. Обменивайте USDT на
                    рубли и рубли на USDT — быстро и безопасно.
                </p>
                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="https://t.me/exchangevip1" target="_blank" rel="noreferrer"
                       class="shine inline-flex items-center gap-2 rounded-2xl bg-[var(--accent)]/20 px-5 py-3 font-semibold hover:bg-[var(--accent)]/30">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                            <path
                                d="M9.04 15.27l-.37 5.26c.53 0 .76-.23 1.03-.5l2.47-2.36 5.12 3.76c.94.52 1.61.25 1.87-.86l3.39-15.86h.01c.3-1.39-.5-1.94-1.41-1.6L1.7 9.62c-1.34.52-1.32 1.27-.23 1.6l5.82 1.81 13.52-8.5c.64-.41 1.22-.18.74.23"/>
                        </svg>
                        Связаться в Telegram
                    </a>
                    <a href="#rates"
                       class="shine inline-flex items-center gap-2 rounded-2xl bg-[var(--primary)]/10 px-5 py-3 font-semibold hover:bg-[var(--primary)]/20">Смотреть
                        курс</a>
                </div>
            </div>
            <div class="glass rounded-3xl p-6 sm:p-8">
                <h3 class="text-xl font-semibold mb-4">Быстрая заявка</h3>
                <form id="quickForm" class="grid gap-4">
                    <label class="grid gap-2">
                        <span class="text-sm text-[var(--muted)]">Telegram-аккаунт</span>
                        <input id="q_tg" name="telegram" required placeholder="@username"
                               class="w-full rounded-xl bg-[#0f1530] px-4 py-3 outline-none ring-1 ring-white/10 focus:ring-[var(--accent)]"/>
                    </label>
                    <label class="grid gap-2">
                        <span class="text-sm text-[var(--muted)]">Сумма</span>
                        <input id="q_amount" name="amount" type="number" min="0" step="0.01" placeholder="1000"
                               class="w-full rounded-xl bg-[#0f1530] px-4 py-3 outline-none ring-1 ring-white/10 focus:ring-[var(--accent)]"/>
                    </label>
                    <label class="grid gap-2">
                        <span class="text-sm text-[var(--muted)]">Направление</span>
                        <select id="q_direction" name="direction"
                                class="w-full rounded-xl bg-[#0f1530] px-4 py-3 outline-none ring-1 ring-white/10 focus:ring-[var(--accent)]">
                            <option value="USDT_TO_RUB">USDT → RUB</option>
                            <option value="RUB_TO_USDT">RUB → USDT</option>
                        </select>
                    </label>
                    <button type="submit"
                            class="shine rounded-2xl bg-white/10 px-5 py-3 font-semibold hover:bg-white/20">Оставить
                        заявку
                    </button>
                    <p id="q_msg" class="text-sm text-[var(--muted)]"></p>
                </form>
            </div>
        </div>
    </div>
</header>

<!-- Rates -->
<section id="rates" class="py-12 sm:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl sm:text-3xl font-bold">Актуальные курсы</h2>
            <button id="refreshBtn"
                    class="inline-flex items-center gap-2 rounded-xl px-4 py-2 bg-white/5 hover:bg-white/10 transition"
                    title="Обновить курсы">
                <svg id="refreshIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="1.5" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M16.023 9.348h4.992V4.356M2.985 14.652v4.992h4.992"/>
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M20.313 15.313A8.25 8.25 0 116.344 3.938M21.015 4.356l-4.992 4.992"/>
                </svg>
                <span class="text-sm">Обновить</span>
            </button>
        </div>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="glass rounded-2xl p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-[var(--muted)]">Покупка USDT</p>
                        <p class="text-2xl font-semibold"><span id="rate_buy">—</span> <span
                                class="text-[var(--muted)] text-base">RUB за 1 USDT</span></p>
                    </div>
                    <span class="text-xs px-2 py-1 rounded-lg bg-[var(--primary)]/15 text-[var(--primary)]">Вы платите RUB</span>
                </div>
            </div>
            <div class="glass rounded-2xl p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-[var(--muted)]">Продажа USDT</p>
                        <p class="text-2xl font-semibold"><span id="rate_sell">—</span> <span
                                class="text-[var(--muted)] text-base">RUB за 1 USDT</span></p>
                    </div>
                    <span class="text-xs px-2 py-1 rounded-lg bg-[var(--accent)]/15 text-[var(--accent)]">Вы получаете RUB</span>
                </div>
            </div>
        </div>

        <p class="mt-4 text-sm text-[var(--muted)]">Курсы фиксируются при подтверждении заявки. Комиссии и лимиты
            уточняйте у оператора.</p>
    </div>
</section>

<!-- Calculator -->
<section id="calculator" class="py-12 sm:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-8 items-start">
        <div class="glass rounded-3xl p-6 sm:p-8">
            <h3 class="text-xl font-semibold mb-6">Калькулятор обмена</h3>
            <form id="calcForm" class="grid gap-4">
                <label class="grid gap-2">
                    <span class="text-sm text-[var(--muted)]">Сумма</span>
                    <input id="amount" type="number" step="0.01" min="0" placeholder="1000"
                           class="w-full rounded-xl bg-[#0f1530] px-4 py-3 outline-none ring-1 ring-white/10 focus:ring-[var(--accent)]"/>
                </label>
                <label class="grid gap-2">
                    <span class="text-sm text-[var(--muted)]">Направление</span>
                    <select id="direction"
                            class="w-full rounded-xl bg-[#0f1530] px-4 py-3 outline-none ring-1 ring-white/10 focus:ring-[var(--accent)]">
                        <option value="USDT_TO_RUB">USDT → RUB (продажа USDT)</option>
                        <option value="RUB_TO_USDT">RUB → USDT (покупка USDT)</option>
                    </select>
                </label>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="rounded-2xl bg-white/5 p-4">
                        <p class="text-sm text-[var(--muted)]">Итог</p>
                        <p id="result" class="text-2xl font-semibold">—</p>
                    </div>
                    <div class="rounded-2xl bg-white/5 p-4">
                        <p class="text-sm text-[var(--muted)]">Курс</p>
                        <p id="usedRate" class="text-2xl font-semibold">—</p>
                    </div>
                </div>
                <label class="grid gap-2">
                    <span class="text-sm text-[var(--muted)]">Ваш Telegram</span>
                    <input id="tg" required placeholder="@username"
                           class="w-full rounded-xl bg-[#0f1530] px-4 py-3 outline-none ring-1 ring-white/10 focus:ring-[var(--accent)]"/>
                </label>
                <button type="submit" class="shine rounded-2xl bg-white/10 px-5 py-3 font-semibold hover:bg-white/20">
                    Оставить заявку
                </button>
                <p id="calcMsg" class="text-sm text-[var(--muted)]"></p>
            </form>
        </div>

        <div class="glass rounded-3xl p-6 sm:p-8">
            <h3 class="text-xl font-semibold mb-4">Почему VipExchange?</h3>
            <ul class="space-y-3 text-[var(--muted)]">
                <li class="flex items-start gap-3"><span class="mt-1 h-2 w-2 rounded-full bg-[var(--primary)]"></span>
                    Приватность и конфиденциальность на каждом этапе.
                </li>
                <li class="flex items-start gap-3"><span class="mt-1 h-2 w-2 rounded-full bg-[var(--primary)]"></span>
                    Быстрая обработка заявок и прозрачные условия.
                </li>
                <li class="flex items-start gap-3"><span class="mt-1 h-2 w-2 rounded-full bg-[var(--primary)]"></span>
                    Индивидуальные лимиты и персональный подход.
                </li>
            </ul>
            <a href="https://t.me/exchangevip1" target="_blank" rel="noreferrer"
               class="mt-6 inline-flex items-center gap-2 rounded-2xl bg-[var(--accent)]/20 px-5 py-3 font-semibold hover:bg-[var(--accent)]/30">
                Перейти в Telegram
            </a>
        </div>
    </div>
</section>

<footer class="border-t border-white/10 py-8 text-center text-sm text-[var(--muted)]">
    © 2025 VipExchange. Все права защищены.
</footer>

<script>
    // === Настраиваемые курсы ===
    const RATES = {
        buy: 82.8,  // Пользователь покупает USDT за RUB (RUB -> USDT)
        sell: 93.6, // Пользователь продаёт USDT и получает RUB (USDT -> RUB)
    };

    const rateBuyEl = document.getElementById('rate_buy');
    const rateSellEl = document.getElementById('rate_sell');
    const refreshBtn = document.getElementById('refreshBtn');
    const refreshIcon = document.getElementById('refreshIcon');

    function renderRates() {
        rateBuyEl.textContent = RATES.buy.toFixed(2);
        rateSellEl.textContent = RATES.sell.toFixed(2);
    }

    function fakeRefresh() {
        // Имитируем лёгкое изменение курсов (для демо). Удалите в проде и подключите реальный источник.
        const jitter = () => (Math.random() - 0.5) * 0.2; // ±0.10
        RATES.buy = Math.max(1, RATES.buy + jitter());
        RATES.sell = Math.max(1, RATES.sell + jitter());
        refreshIcon.classList.add('spin-slow');
        setTimeout(() => refreshIcon.classList.remove('spin-slow'), 600);
        renderRates();
        updateCalculation();
    }

    refreshBtn.addEventListener('click', fakeRefresh);

    // === Калькулятор ===
    const amountEl = document.getElementById('amount');
    const directionEl = document.getElementById('direction');
    const resultEl = document.getElementById('result');
    const usedRateEl = document.getElementById('usedRate');

    function updateCalculation() {
        const amount = parseFloat(amountEl.value || '0');
        const dir = directionEl.value; // USDT_TO_RUB or RUB_TO_USDT

        if (!amount || amount <= 0) {
            resultEl.textContent = '—';
            usedRateEl.textContent = '—';
            return;
        }

        let rate, outcomeText;
        if (dir === 'USDT_TO_RUB') {
            // Продаём USDT, получаем RUB → используем курс продажи USDT
            rate = RATES.sell;
            const rub = amount * rate;
            outcomeText = `${rub.toFixed(2)} RUB`;
        } else {
            // Покупаем USDT за RUB → используем курс покупки USDT
            rate = RATES.buy;
            const usdt = amount / rate; // amount здесь интерпретируем как RUB
            outcomeText = `${usdt.toFixed(4)} USDT`;
        }

        resultEl.textContent = outcomeText;
        usedRateEl.textContent = `${rate.toFixed(2)} RUB / USDT`;
    }

    amountEl.addEventListener('input', updateCalculation);
    directionEl.addEventListener('change', updateCalculation);

    // === Отправка формы калькулятора ===
    const calcForm = document.getElementById('calcForm');
    const calcMsg = document.getElementById('calcMsg');
    const tgEl = document.getElementById('tg');

    // calcForm.addEventListener('submit', (e) => {
    //     e.preventDefault();
    //     const amount = amountEl.value.trim();
    //     const dir = directionEl.value === 'USDT_TO_RUB' ? 'USDT → RUB' : 'RUB → USDT';
    //     const rate = usedRateEl.textContent;
    //     const result = resultEl.textContent;
    //     const tg = tgEl.value.trim();
    //     if (!tg) {
    //         calcMsg.textContent = 'Укажите ваш Telegram.';
    //         return;
    //     }
    //     const text = `Заявка с сайта\nTG: ${tg}\nНаправление: ${dir}\nСумма: ${amount}\nКурс: ${rate}\nИтог: ${result}`;
    //     navigator.clipboard?.writeText(text).catch(() => {
    //     });
    //     window.open('https://t.me/VipExchangeBot', '_blank');
    //     calcMsg.textContent = 'Заявка сформирована. Текст скопирован в буфер обмена — отправьте его оператору в Telegram.';
    // });
    calcForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        const telegram = document.getElementById('tg').value.trim();
        const amount = document.getElementById('amount').value.trim();
        const direction = document.getElementById('direction').value;

        const submitBtn = calcForm.querySelector('button[type="submit"]');
        const calcMsg = document.getElementById('calcMsg');
        calcMsg.textContent = '';
        submitBtn.disabled = true;
        submitBtn.textContent = 'Отправка...';

        try {
            const res = await fetch('/order', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                },
                body: JSON.stringify({ telegram, amount: parseFloat(amount), direction }),
            });

            const data = await res.json();

            if (res.ok) {
                calcMsg.textContent = 'Заявка сформирована.!';
                calcForm.reset();
                resultEl.textContent = '—';
                usedRateEl.textContent = '—';
            } else {
                calcMsg.textContent = 'Ошибка: ' + (data.message || 'проверьте данные');
            }
        } catch (err) {
            calcMsg.textContent = 'Ошибка отправки заявки. Попробуйте позже.';
            console.error(err);
        }

        submitBtn.disabled = false;
        submitBtn.textContent = 'Оставить заявку';
    });


    // Быстрая заявка в хедере
    const quickForm = document.getElementById('quickForm');
    const qMsg = document.getElementById('q_msg');
    // quickForm.addEventListener('submit', (e) => {
    //     e.preventDefault();
    //     const tg = document.getElementById('q_tg').value.trim();
    //     const amount = document.getElementById('q_amount').value.trim();
    //     const dir = document.getElementById('q_direction').value === 'USDT_TO_RUB' ? 'USDT → RUB' : 'RUB → USDT';
    //     const text = `Заявка (быстрая)\nTG: ${tg}\nНаправление: ${dir}\nСумма: ${amount || '—'}`;
    //     navigator.clipboard?.writeText(text).catch(() => {
    //     });
    //     window.open('https://t.me/VipExchangeBot', '_blank');
    //     qMsg.textContent = 'Заявка сформирована. Текст скопирован — отправьте его оператору в Telegram.';
    // });
    quickForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        const tg = document.getElementById('q_tg').value.trim();
        const amount = document.getElementById('q_amount').value.trim();
        const direction = document.getElementById('q_direction').value;

        const submitBtn = quickForm.querySelector('button[type="submit"]');
        const qMsg = document.getElementById('q_msg');
        qMsg.textContent = '';
        submitBtn.disabled = true;
        submitBtn.textContent = 'Отправка...';

        try {
            const res = await fetch('/order', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                },
                body: JSON.stringify({ telegram: tg, amount: parseFloat(amount), direction }),
            });

            const data = await res.json();

            if (res.ok) {
                qMsg.textContent = 'Заявка сформирована.!';
                quickForm.reset();
            } else {
                qMsg.textContent = 'Ошибка: ' + (data.message || 'проверьте данные');
            }
        } catch (err) {
            qMsg.textContent = 'Ошибка отправки заявки. Попробуйте позже.';
            console.error(err);
        }

        submitBtn.disabled = false;
        submitBtn.textContent = 'Оставить заявку';
    });


    // Инициализация
    renderRates();
    updateCalculation();
</script>
</body>
</html>
