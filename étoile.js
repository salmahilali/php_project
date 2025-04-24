const gameArea = document.getElementById('game-area');
const scoreDisplay = document.getElementById('score');
let score = 0;

function createStar() {
    const star = document.createElement('div');
    star.classList.add('star');
    star.textContent = '⭐';

    // Position aléatoire sur l'axe X
    star.style.left = Math.random() * 370 + 'px';

    // Durée de la chute (aléatoire pour varier la difficulté)
    const duration = 3 + Math.random() * 2;
    star.style.animationDuration = duration + 's';

    gameArea.appendChild(star);

    // Retirer l'étoile si elle atteint le bas
    setTimeout(() => {
        if (gameArea.contains(star)) {
            gameArea.removeChild(star);
        }
    }, duration * 1000);

    // Clique sur l’étoile
    star.addEventListener('click', () => {
        score++;
        scoreDisplay.textContent = score;
        gameArea.removeChild(star);
    });
}

// Créer une nouvelle étoile toutes les 800ms
setInterval(createStar, 800);