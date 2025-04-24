const emojis = ['🐶', '🐱', '🍎', '🍌', '🚗', '🌈', '🎵', '⭐'];
let cards = [];
let firstCard = null;
let lockBoard = false;

const board = document.getElementById('game-board');
const statusText = document.getElementById('status');

function startGame() {
    cards = shuffle([...emojis, ...emojis]); // 8 paires
    board.innerHTML = '';
    firstCard = null;
    lockBoard = false;
    statusText.textContent = "Trouve toutes les paires d'emoji !";

    cards.forEach((emoji, index) => {
        const card = document.createElement('div');
        card.classList.add('card');
        card.dataset.emoji = emoji;
        card.dataset.index = index;
        card.addEventListener('click', handleClick);
        board.appendChild(card);
    });
}

function handleClick(e) {
    if (lockBoard) return;
    const card = e.target;
    if (card.classList.contains('revealed')) return;

    reveal(card);

    if (!firstCard) {
        firstCard = card;
    } else {
        if (firstCard.dataset.emoji === card.dataset.emoji) {
            firstCard = null;
            if (document.querySelectorAll('.revealed').length === cards.length) {
                statusText.textContent = "🎉 Bravo ! Toutes les paires trouvées !";
            }
        } else {
            lockBoard = true;
            setTimeout(() => {
                hide(firstCard);
                hide(card);
                firstCard = null;
                lockBoard = false;
            }, 1000);
        }
    }
}

function reveal(card) {
    card.textContent = card.dataset.emoji;
    card.classList.add('revealed');
}

function hide(card) {
    card.textContent = '';
    card.classList.remove('revealed');
}

function shuffle(array) {
    return array.sort(() => 0.5 - Math.random());
}

startGame();