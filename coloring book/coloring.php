<?php
/**
 * 🎨 Livre de Coloriage - Interface développée et moderne
 */
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monde Magique du Coloriage ✨</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --c-accent: #3498db;
            --c-dark: #2d3436;
            --c-bg: #ecf0f3;
            --shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            --rad: 20px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Quicksand', sans-serif;
            background: linear-gradient(rgba(240, 240, 240, 0.8), rgba(200, 200, 255, 0.8)), url('assets/enfants.jpg') center/cover no-repeat fixed;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            animation: fadeIn 1.5s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        h1 {
            font-size: 2.8rem;
            font-weight: 700;
            color: var(--c-accent);
            margin-bottom: 20px;
            background: rgba(255, 255, 255, 0.7);
            padding: 20px 30px;
            border-radius: var(--rad);
            box-shadow: var(--shadow);
            text-align: center;
        }

        #container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            max-width: 1300px;
            width: 100%;
            justify-content: center;
        }

        #sidebar {
            flex: 1 1 260px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: var(--rad);
            box-shadow: var(--shadow);
            padding: 20px;
            backdrop-filter: blur(10px);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
            justify-content: center;
        }

        .thumb {
            width: 90px;
            height: 70px;
            object-fit: cover;
            border: 3px solid transparent;
            border-radius: var(--rad);
            cursor: pointer;
            transition: transform 0.3s;
        }

        .thumb:hover {
            transform: scale(1.1);
        }

        .thumb.active {
            border-color: var(--c-accent);
        }

        hr {
            border: none;
            border-top: 1px solid #ccc;
            margin: 20px 0;
            width: 100%;
        }

        label {
            font-size: 1rem;
            font-weight: 600;
            margin-top: 10px;
            margin-bottom: 6px;
            color: #555;
            text-align: center;
        }

        input[type="range"],
        input[type="color"] {
            width: 100%;
            margin-top: 5px;
        }

        .color-palette {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 8px;
            justify-content: center;
        }

        .color-btn {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            border: 2px solid #fff;
            box-shadow: var(--shadow);
            cursor: pointer;
            transition: transform 0.2s;
        }

        .color-btn:hover {
            transform: scale(1.2);
        }

        .tool-row {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
            justify-content: center;
        }

        button.tool {
            flex: 1 1 110px;
            padding: 10px;
            background: var(--c-accent);
            color: white;
            font-weight: 600;
            border: none;
            border-radius: var(--rad);
            box-shadow: var(--shadow);
            cursor: pointer;
            font-size: 1rem;
            transition: background 0.3s, transform 0.2s;
        }

        button.tool:hover {
            background: #2980b9;
            transform: scale(1.05);
        }

        button.tool.active {
            background: #1abc9c;
        }

        #workspace-wrapper {
            flex: 1 1 800px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .canvas-container {
            background: white;
            border-radius: var(--rad);
            box-shadow: var(--shadow);
            overflow: hidden;
            padding: 10px;
        }

        canvas {
            display: block;
            width: 900px;
            height: 650px;
            touch-action: none;
            user-select: none;
            border-radius: var(--rad);
            box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>