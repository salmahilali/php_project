<?php
/* =========================================================
   DATA : titres → textes  (vous pouvez en ajouter à volonté)
   =========================================================*/
$poems = [
    "Bateau sur l'eau" => <<<TXT
Bateau sur l'eau,
La rivière, la rivière,
Bateau sur l'eau,
La rivière au bord de l'eau.
Le bateau a chaviré,
Tous les enfants sont tombés
Dans l'eau.
PLOUF !
TXT,
    "Coccinelle, demoiselle" => <<<TXT
Coccinelle, demoiselle
Bête à Bon Dieu

Coccinelle, demoiselle
Vole jusqu'aux cieux

Petit point blanc
Elle attend

Petit point rouge
Elle bouge

Petit point noir
Coccinelle au revoir
TXT,
    "Dans sa maison un grand cerf" => <<<TXT
Dans sa maison un grand cerf
Regardait par la fenêtre
Un lapin venir à lui
Et frapper ainsi :

— Cerf, cerf, ouvre-moi !
Ou le chasseur me tuera !
— Lapin, lapin, entre et viens
Me serrer la main.
TXT,
    "Dans la forêt lointaine" => <<<TXT
Dans la forêt lointaine
On entend le coucou
Du haut de son grand chêne
Il répond au hibou

Coucou coucou
Coucou hibou coucou
Coucou coucou
Coucou hibou coucou
TXT,
    "Mon petit lapin a bien du chagrin" => <<<TXT
Mon petit lapin
A bien du chagrin,
Il ne saute plus
Ne court plus dans le jardin.

Saute saute saute,
Mon petit lapin,
Et dépêche-toi
De choisir quelqu’un.
TXT,
    "Le coq" => <<<TXT
Tic, tac, toc,
Quel est ce coup sec ?
Ric, rac, roc,
C'est un petit bec.
Cric, crac, croc,
La coquille casse.
Fric, frac, froc,
C'est l'ergot qui passe.
Clic, clac, cloc,
C'est coquet tic toc.
Flic, flac, floc,
C'est le petit coq.
TXT,
];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Le monde des poèmes</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Source+Sans+Pro:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- ===========  STYLE  =========== -->
    <style>
        :root {
            --c-primary: rgb(118, 137, 192);
            --c-primary-d: rgba(81, 121, 182, 0.89);
            --c-card: #ffffff;
            --c-shadow: rgba(0, 0, 0, .08);
            --radius: 10px;
            --ts: .25s cubic-bezier(.4, .2, .2, 1);
            --ff-title: 'Playfair Display', serif;
            --ff-body: 'Source Sans Pro', sans-serif;
        }

        /* ------ Reset & base ------ */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0
        }

        body {
            font-family: var(--ff-body);
            font-size: 17px;
            line-height: 1.55;
            color: #28323c;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            /* --- Image d'arrière-plan --- */
            background: url('enfants.jpg') center/cover fixed no-repeat;
            position: relative;
        }

        /* Voile blanc translucide pour améliorer la lisibilité */
        body::before {
            content: "";
            position: fixed;
            inset: 0;
            background: rgba(255, 255, 255, .75);
            backdrop-filter: saturate(120%) blur(2px);
            z-index: -1;
            /* placé derrière tout le contenu */
        }

        /* ------ En-tête ------ */
        header {
            padding: 10px 24px;
            text-align: center;
            background: linear-gradient(135deg, var(--c-primary) 0%, var(--c-primary-d) 100%);
            color: #fff;
            box-shadow: 0 3px 8px var(--c-shadow);
        }

        header h1 {
            font-family: var(--ff-title);
            font-size: 2.6rem;
            font-weight: 600;
            letter-spacing: .5px;
            margin-bottom: 12px;
        }

        header p {
            opacity: .85;
            display: inline-flex;
            align-items: center;
            /* centre verticalement texte + image */
            gap: 0.6rem;
            /* espace entre “amusez vous” et l’emoji */
        }



        /* ------ Grille de cartes ------ */
        main {
            flex: 1;
            display: grid;
            gap: 32px;
            grid-template-columns: repeat(3, minmax(260px, 1fr));
            padding: 48px clamp(12px, 4vw, 48px) 64px;
            width: 100%;
            max-width: 1440px;
            margin-inline: auto;
        }

        /* ------ Carte ------ */
        .card {
            background: var(--c-card);
            border-radius: var(--radius);
            box-shadow: 0 8px 20px var(--c-shadow);
            display: flex;
            flex-direction: column;
            overflow: hidden;
            transition: transform var(--ts), box-shadow var(--ts);
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 16px 26px var(--c-shadow);
        }

        .card__header {
            background: var(--c-primary);
            color: #fff;
            padding: 50px 20px;
            font-family: var(--ff-title);
            font-size: 1.2rem;
        }

        .card button {
            flex: 1;
            padding: 26px 24px;
            border: none;
            background: transparent;
            cursor: pointer;
            text-align: left;
            width: 100%;
            font-weight: 600;
            color: var(--c-primary-d);
            transition: color var(--ts);
        }

        .card button:hover {
            color: var(--c-primary)
        }

        .po {
            font-size: 15px;
            margin-left: 40px;
        }

        /* ------ Modale ------ */
        #viewer {
            position: fixed;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0, 0, 0, .45);
            backdrop-filter: blur(4px);
            opacity: 0;
            visibility: hidden;
            transition: opacity var(--ts);
        }

        #viewer.open {
            opacity: 1;
            visibility: visible
        }

        .modal {
            width: min(92vw, 640px);
            max-height: 90vh;
            overflow: auto;
            background: var(--c-card);
            border-radius: var(--radius);
            box-shadow: 0 10px 30px rgba(0, 0, 0, .25);
            padding: 48px 56px;
            position: relative;
            animation: scaleIn .4s cubic-bezier(.4, .2, .2, 1);
        }

        @keyframes scaleIn {
            0% {
                transform: scale(.8);
                opacity: 0
            }

            100% {
                transform: scale(1);
                opacity: 1
            }
        }

        .modal h2 {
            font-family: var(--ff-title);
            font-size: 1.75rem;
            margin-bottom: 24px;
            color: var(--c-primary-d);
        }

        .modal pre {
            white-space: pre-wrap;
            font-family: inherit;
            font-size: 1.02rem;
        }

        #close {
            position: absolute;
            top: 18px;
            right: 18px;
            background: var(--c-primary);
            border: none;
            color: #fff;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background var(--ts), transform .15s;
        }

        #close:hover {
            background: var(--c-primary-d)
        }

        #close:active {
            transform: scale(.9)
        }

        @media (max-width:500px) {
            header h1 {
                font-size: 2rem
            }

            .modal {
                padding: 40px 32px
            }
        }
    </style>
</head>

<body>
    <!-- ----------  HERO ---------- -->
    <header>
        <h1>Bienvenue dans le monde&nbsp;des&nbsp;poèmes</h1>
        <p><i>Amusez vous</i></p>
    </header>

    <!-- ----------  GRID ---------- -->
    <main>
        <?php foreach ($poems as $title => $text): ?>
            <article class="card">
                <h2 class="card__header"><?= htmlspecialchars($title) ?></h2>
                <button class="po" data-title="<?= htmlspecialchars($title) ?>"
                    data-poem="<?= htmlspecialchars(trim($text)) ?>">
                    Lire le poème
                </button>
            </article>
        <?php endforeach; ?>
    </main>

    <!-- ----------  MODAL ---------- -->
    <div id="viewer" role="dialog" aria-modal="true" aria-labelledby="poemTitle">
        <div class="modal">
            <button id="close" aria-label="Fermer">✕</button>
            <h2 id="poemTitle"></h2>
            <pre id="poemText"></pre>
        </div>
    </div>

    <!-- ===========  SCRIPT  =========== -->
    <script>
        /* Sélecteurs */
        const viewer = document.getElementById('viewer');
        const titleEl = document.getElementById('poemTitle');
        const textEl = document.getElementById('poemText');
        const closeBtn = document.getElementById('close');

        /* Ouvrir la modale */
        document.querySelectorAll('.card button').forEach(btn => {
            btn.addEventListener('click', () => {
                titleEl.textContent = btn.dataset.title;
                textEl.textContent = btn.dataset.poem;
                viewer.classList.add('open');
                document.body.style.overflow = 'hidden';
                closeBtn.focus();
            });
        });

        /* Fermer la modale */
        function closeViewer() {
            viewer.classList.remove('open');
            document.body.style.overflow = 'auto';
        }
        closeBtn.addEventListener('click', closeViewer);
        viewer.addEventListener('click', e => {
            if (e.target === viewer) closeViewer();
        });
        window.addEventListener('keydown', e => {
            if (e.key === 'Escape' && viewer.classList.contains('open')) closeViewer();
        });
    </script>
</body>

</html>