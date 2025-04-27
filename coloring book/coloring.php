<?php
/**
 * 🎨 Monde Magique du Coloriage — Version Finale
 * - Undo (Annuler)
 * - Choix couleur (Picker)
 * - Pot de peinture avec tolérance
 * - Fond transparent joli
 */
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>livre de coloriage</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --c-accent: rgb(14, 21, 110);
            --c-dark: #2d3436;
            --c-bg: #f5f7fa;
            --shadow: 0 4px 14px rgba(0, 0, 0, 0.12);
            --rad: 16px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Quicksand', sans-serif;
            background-image: url('assets/bg1.png'), linear-gradient(to top, rgba(173, 182, 191, 0.55), rgba(169, 165, 182, 0.7));
            background-size: cover;
            background-attachment: fixed;
            background-position: center center;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        h1 {
            font-size: 2.4rem;
            font-weight: 700;
            color: var(--c-accent);
            margin-bottom: 20px;
            text-align: center;
            background: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 10px;
        }

        #container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            max-width: 1200px;
            width: 100%;
        }

        #sidebar {
            flex: 1 1 260px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: var(--rad);
            box-shadow: var(--shadow);
            padding: 18px;
        }

        #gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 16px;
            justify-content: center;
        }

        .thumb {
            width: 85px;
            height: 65px;
            object-fit: cover;
            border: 3px solid transparent;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .thumb:hover {
            transform: scale(1.05);
        }

        .thumb.active {
            border-color: var(--c-accent);
        }

        hr {
            border: none;
            border-top: 1px solid #e0e0e0;
            margin: 14px 0;
        }

        label {
            font-size: 0.9rem;
            font-weight: 600;
            margin: 10px 0 4px;
            display: block;
        }

        input[type="range"] {
            width: 100%;
        }

        .color-palette {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 6px;
            margin-left: 5px;
        }

        .color-btn {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            border: 2px solid #fff;
            box-shadow: var(--shadow);
            cursor: pointer;
        }

        .tool-row {
            display: flex;
            gap: 10px;
            margin-top: 10px;
            flex-wrap: wrap;
            justify-content: center;
        }

        button.tool {
            flex: 1 1 110px;
            padding: 8px 10px;
            background: var(--c-accent);
            color: #fff;
            font-weight: 600;
            border: none;
            border-radius: 10px;
            box-shadow: var(--shadow);
            cursor: pointer;
            font-size: 0.9rem;
            transition: background 0.25s;
        }

        button.tool:hover {
            background: #e5505a;
        }

        button.tool.active {
            background: rgb(80, 163, 210);
        }

        #workspace-wrapper {
            flex: 1 1 760px;
            display: flex;
            justify-content: center;
        }

        .canvas-container {
            position: relative;
            background: #fff;
            border-radius: var(--rad);
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        canvas {
            display: block;
            width: 900px;
            height: 600px;
            touch-action: none;
            user-select: none;
        }
    </style>
</head>

<body>

    <h1>Bienvenue dans le Monde Magique du Coloriage ✨</h1>

    <div id="container">
        <aside id="sidebar">
            <div id="gallery"></div>
            <hr>
            <label>Palette de Couleurs</label>
            <div id="palette" class="color-palette"></div>
            <input type="color" id="picker" style="margin-top:6px;">
            <label>Taille du Pinceau : <span id="sizeL">8</span> px</label>
            <input type="range" id="sizeR" min="4" max="60" value="8">
            <div class="tool-row">
                <button class="tool" id="brush">✏️ Pinceau</button>
                <button class="tool" id="fill">🪣 Pot</button>
                <button class="tool" id="eraser">❌ Gomme</button>
            </div>
            <div class="tool-row">
                <button class="tool" id="undo">↶ Annuler</button>
                <button class="tool" id="clear">🧹 Effacer</button>
                <button class="tool" id="save">⬇️ Sauvegarder</button>
            </div>
        </aside>

        <main id="workspace-wrapper">
            <div class="canvas-container">
                <canvas id="draw" width="900" height="650"></canvas>
            </div>
        </main>
    </div>

    <script>
        /*** Config ***/
        const PICS = [
            { file: 'assets/kid.jpg' },
            { file: 'assets/dauphin (2).png' },
            { file: 'assets/fairy.png' },
            { file: 'assets/animaux.png' }
        ];
        const PALETTE = ["#e74c3c", "#f1c40f", "#2ecc71", "#3498db", "#9b59b6", "#e67e22", "#34495e", "#ffffff", "#000000"];
        /*** DOM ***/
        const draw = document.getElementById('draw');
        const ctx = draw.getContext('2d');
        const gallery = document.getElementById('gallery'), palette = document.getElementById('palette');
        const sizeR = document.getElementById('sizeR'), sizeL = document.getElementById('sizeL');
        const picker = document.getElementById('picker');
        const undo = document.getElementById('undo'), clear = document.getElementById('clear'), save = document.getElementById('save');
        /*** State ***/
        let color = PALETTE[0], size = 8, tool = 'brush', press = false, last = null;
        let steps = [], idx = -1;
        /*** Helpers ***/
        function coord(e) { const r = draw.getBoundingClientRect(); const s = draw.width / r.width; return { x: (e.clientX - r.left) * s, y: (e.clientY - r.top) * s }; }
        function stroke(a, b) { ctx.strokeStyle = (tool === 'brush') ? color : '#fff'; ctx.lineWidth = size; ctx.lineCap = 'round'; ctx.lineJoin = 'round'; ctx.beginPath(); ctx.moveTo(a.x, a.y); ctx.lineTo(b.x, b.y); ctx.stroke(); }
        function floodFill(x, y, targetColor, replacementColor) {
            const imgData = ctx.getImageData(0, 0, draw.width, draw.height);
            const data = imgData.data;
            const w = draw.width;
            const stack = [[x, y]];
            const tolerance = 30;

            function colorMatch(i) {
                return Math.abs(data[i] - targetColor[0]) <= tolerance &&
                    Math.abs(data[i + 1] - targetColor[1]) <= tolerance &&
                    Math.abs(data[i + 2] - targetColor[2]) <= tolerance;
            }

            function colorPixel(i) {
                data[i] = replacementColor[0];
                data[i + 1] = replacementColor[1];
                data[i + 2] = replacementColor[2];
                data[i + 3] = 255;
            }

            while (stack.length) {
                const [currX, currY] = stack.pop();
                if (currX < 0 || currY < 0 || currX >= w || currY >= draw.height) continue;
                const idx = (currY * w + currX) * 4;
                if (colorMatch(idx)) {
                    colorPixel(idx);
                    stack.push([currX + 1, currY], [currX - 1, currY], [currX, currY + 1], [currX, currY - 1]);
                }
            }

            ctx.putImageData(imgData, 0, 0);
        }
        function hexToRgb(hex) { hex = hex.replace(/^#/, ''); return [parseInt(hex.substring(0, 2), 16), parseInt(hex.substring(2, 4), 16), parseInt(hex.substring(4, 6), 16)]; }
        function saveStep() { steps.splice(idx + 1); steps.push(ctx.getImageData(0, 0, draw.width, draw.height)); idx = steps.length - 1; }
        /*** UI build ***/
        PICS.forEach((p, i) => {
            const t = document.createElement('img');
            t.src = p.file;
            t.className = 'thumb' + (i === 0 ? ' active' : '');
            t.onclick = () => {
                const img = new Image();
                img.src = p.file;
                img.onload = () => {
                    ctx.clearRect(0, 0, draw.width, draw.height);
                    ctx.drawImage(img, 0, 0, draw.width, draw.height);
                    saveStep();
                }
                gallery.querySelectorAll('.thumb').forEach(t => t.classList.remove('active'));
                t.classList.add('active');
            };
            gallery.appendChild(t);
        });
        PALETTE.forEach(c => {
            const b = document.createElement('button');
            b.className = 'color-btn';
            b.style.background = c;
            b.onclick = () => { color = c; tool = 'brush'; toggleTools(); };
            palette.appendChild(b);
        });
        picker.oninput = (e) => { color = e.target.value; tool = 'brush'; toggleTools(); };
        sizeR.oninput = (e) => { size = parseInt(e.target.value); sizeL.textContent = size; };
        function toggleTools() {
            brush.classList.toggle('active', tool === 'brush');
            eraser.classList.toggle('active', tool === 'eraser');
            fill.classList.toggle('active', tool === 'fill');
        }
        /*** Events ***/
        brush.onclick = () => { tool = 'brush'; toggleTools(); };
        fill.onclick = () => { tool = 'fill'; toggleTools(); };
        eraser.onclick = () => { tool = 'eraser'; toggleTools(); };
        undo.onclick = () => { if (idx > 0) { idx--; ctx.putImageData(steps[idx], 0, 0); } };
        clear.onclick = () => { if (confirm('Effacer tout ?')) { ctx.clearRect(0, 0, draw.width, draw.height); saveStep(); } };
        save.onclick = () => {
            const a = document.createElement('a');
            a.download = 'coloriage_magique.png';
            a.href = draw.toDataURL();
            a.click();
        };
        draw.addEventListener('pointerdown', e => {
            const p = coord(e);
            if (tool === 'fill') {
                const img = ctx.getImageData(p.x, p.y, 1, 1);
                floodFill(Math.floor(p.x), Math.floor(p.y), [img.data[0], img.data[1], img.data[2]], hexToRgb(color));
                saveStep();
            } else {
                press = true; last = p; stroke(last, last);
                saveStep();
            }
        });
        draw.addEventListener('pointermove', e => {
            if (!press) return;
            const p = coord(e);
            stroke(last, p);
            last = p;
        });
        draw.addEventListener('pointerup', () => { press = false; });
        draw.addEventListener('pointerleave', () => { press = false; });
        /*** Boot ***/
        toggleTools();
    </script>
</body>

</html>