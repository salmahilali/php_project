<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Math Quiz Flash — Neo Edition</title>

    <!-- Police futuriste -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600&display=swap" rel="stylesheet">

    <style>
        /* -----------  FOND ANIMÉ  ----------- */
        @keyframes gradientShift {
            0% {
                background-position: 0 50%
            }

            50% {
                background-position: 100% 50%
            }

            100% {
                background-position: 0 50%
            }
        }

        body {
            margin: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Orbitron', sans-serif;
            color: #e3f2fd;
            background: linear-gradient(-45deg, #0d47a1, #673ab7, #00bcd4, #03a9f4);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }

        /* -----------  CARTE GLASS  ----------- */
        .card {
            width: 360px;
            max-width: 90vw;
            background: rgba(255, 255, 255, .12);
            border-radius: 20px;
            padding: 32px 28px 40px;
            backdrop-filter: blur(16px);
            box-shadow: 0 25px 35px rgba(0, 0, 0, .25);
            position: relative;
            overflow: hidden;
        }

        .card::before {
            /* lueur décorative */
            content: "";
            position: absolute;
            inset: -2px;
            background: linear-gradient(135deg, transparent 45%, rgba(255, 255, 255, .5), transparent 55%);
            filter: blur(30px);
            pointer-events: none;
        }

        /* -----------  TITRE & QUESTION ----------- */
        h1 {
            font-size: 1.5rem;
            font-weight: 600;
            text-align: center;
            margin-bottom: 22px;
            background: linear-gradient(90deg, #ffd54f, #ffca28, #ff9100);
            -webkit-background-clip: text;
            color: transparent;
        }

        #question {
            font-size: 2.6rem;
            font-weight: 600;
            text-align: center;
            margin-bottom: 18px;
            color: #ffeb3b;
            text-shadow: 0 0 8px #fff59d;
        }

        /* -----------  CHAMPS & BOUTONS ----------- */
        input,
        button {
            width: 100%;
            font-size: 1.15rem;
            border: none;
            border-radius: 14px;
            padding: 14px;
            outline: none;
            font-family: inherit;
        }

        input {
            text-align: center;
            margin-bottom: 20px;
            color: #212121;
        }

        button {
            cursor: pointer;
            background: linear-gradient(135deg, #ff6f00, #ff9100, #ffc107);
            color: #212121;
            font-weight: 600;
            transition: .2s transform;
            margin-top: 6px;
        }

        button:hover:not(:disabled) {
            transform: translateY(-3px)
        }

        button:disabled {
            opacity: .4;
            cursor: not-allowed;
            transform: none
        }

        /* -----------  BARRE DE TEMPS ----------- */
        .progress {
            height: 12px;
            width: 100%;
            background: rgba(255, 255, 255, .25);
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        #bar {
            height: 100%;
            width: 100%;
            background: linear-gradient(90deg, #00e676, #00c853);
            transition: width 1s linear;
        }

        /* -----------  INFOS ----------- */
        #stats {
            font-size: 1rem;
            text-align: center;
            margin-top: 18px
        }

        .highlight {
            color: #ffeb3b;
            text-shadow: 0 0 5px #fff59d
        }

        #result {
            margin-top: 20px;
            font-size: 1.2rem;
            font-weight: 600;
            text-align: center;
            display: none;
            background: linear-gradient(90deg, #00e5ff, #7c4dff);
            -webkit-background-clip: text;
            color: transparent;
        }

        /* Combo splash */
        #combo {
            position: absolute;
            top: -20px;
            right: -20px;
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .15);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 600;
            opacity: 0;
            pointer-events: none;
            transition: .3s opacity, .3s transform;
        }

        #combo.active {
            opacity: 1;
            transform: scale(1.25)
        }
    </style>
</head>

<body>

    <div class="card">
        <div id="combo">×<span id="mult">1</span></div>

        <h1>Math Quiz Flash ⚡</h1>

        <div class="progress">
            <div id="bar"></div>
        </div>

        <div id="question">Clique sur « Start »</div>

        <input type="number" id="answer" placeholder="Ta réponse…" disabled autocomplete="off">
        <button id="validate" disabled>Check ✔️</button>
        <button id="start">▶️ Start</button>

        <div id="stats">
            ⏱️ <span id="time">60</span>s | ⭐ Score <span id="score">0</span> | 🏆 Record <span id="best">0</span>
        </div>

        <div id="result"></div>
    </div>

    <script>
        /* --------------- OUTILS --------------- */
        const $ = id => document.getElementById(id);

        /* --------------- REFERENCES DOM --------------- */
        const q = $('question'), a = $('answer'), val = $('validate'), start = $('start');
        const scoreEl = $('score'), timeEl = $('time'), bar = $('bar');
        const result = $('result'), bestEl = $('best');
        const comboBox = $('combo'), multEl = $('mult');

        /* --------------- VARIABLES JEU --------------- */
        let num1, num2, op, correct;            // question courante
        let score, timeLeft, timer;            // progression
        let level = 0;                         // 0:+/-, 1:×, 2:÷
        let combo = 1, comboTimeout;           // multiplicateur combo
        const MAX_TIME = 60;                 // durée totale
        const LVL_UP = [5, 15, 30];          // paliers de niveau

        /* --------------- FONCTIONS --------------- */
        const rand = max => Math.floor(Math.random() * max) + 1;

        function nextQuestion() {
            // choisit l’opération selon le niveau
            const opsByLevel = [['+', '-'], ['×'], ['÷']];
            const possibleOps = opsByLevel[Math.min(level, opsByLevel.length - 1)];
            op = possibleOps[Math.floor(Math.random() * possibleOps.length)];

            switch (op) {
                case '+': num1 = rand(20); num2 = rand(20); correct = num1 + num2; break;
                case '-': num2 = rand(15); num1 = rand(20) + num2; correct = num1 - num2; break;
                case '×': num1 = rand(12); num2 = rand(12); correct = num1 * num2; break;
                case '÷': num2 = rand(10); correct = rand(10); num1 = num2 * correct; break;
            }

            q.textContent = `${num1} ${op} ${num2} = ?`;
            a.value = ''; a.focus();

            // reset combo timer (3 s pour répondre)
            clearTimeout(comboTimeout);
            comboTimeout = setTimeout(() => { combo = 1; updateCombo(); }, 3000);
        }

        function updateCombo() {
            multEl.textContent = combo;
            comboBox.classList.toggle('active', combo > 1);
        }

        function startGame() {
            score = 0; timeLeft = MAX_TIME; level = 0; combo = 1;
            scoreEl.textContent = score; timeEl.textContent = timeLeft;
            bar.style.width = '100%'; result.style.display = 'none';
            start.disabled = true; a.disabled = false; val.disabled = false;
            updateCombo();
            nextQuestion();

            timer = setInterval(() => {
                timeLeft--;
                timeEl.textContent = timeLeft;
                bar.style.width = `${(timeLeft / MAX_TIME) * 100}%`;
                if (timeLeft === 0) endGame();
            }, 1000);
        }

        function checkAnswer() {
            if (a.value.trim() === '') return;
            if (+a.value === correct) {
                combo = Math.min(combo + 1, 5);        // max ×5
                score += combo;
                scoreEl.textContent = score;
                if (score >= LVL_UP[2]) level = 2;
                else if (score >= LVL_UP[1]) level = 1;
                else if (score >= LVL_UP[0]) level = 1; // passe au × dès 5 pts
            } else {
                combo = 1;
            }
            updateCombo();
            nextQuestion();
        }

        function endGame() {
            clearInterval(timer);
            a.disabled = true; val.disabled = true; start.disabled = false;
            q.textContent = 'Terminé !';
            const best = +localStorage.getItem('mathBest') || 0;
            if (score > best) {
                localStorage.setItem('mathBest', score);
                bestEl.textContent = score;
                result.innerHTML = `🎉 <span class="highlight">Nouveau record : ${score}</span>`;
            } else {
                result.textContent = `Score : ${score}`;
            }
            result.style.display = 'block';
        }

        /* --------------- EVENEMENTS --------------- */
        val.addEventListener('click', checkAnswer);
        a.addEventListener('keydown', e => { if (e.key === 'Enter') checkAnswer(); });
        start.addEventListener('click', startGame);

        /* --------------- INITIALISATION --------------- */
        bestEl.textContent = localStorage.getItem('mathBest') || 0;
    </script>
</body>

</html>