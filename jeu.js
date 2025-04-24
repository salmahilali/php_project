let board = Array(9).fill(null);
let currentPlayer = 'X';

const cells = document.querySelectorAll('.cell');
const statusText = document.getElementById('status');

cells.forEach(cell => {
    cell.addEventListener('click', handleClick);
});

function handleClick(e) {
    const index = e.target.dataset.index;
    if (board[index] || checkWinner()) return;

    makeMove(index, currentPlayer);

    const winner = checkWinner();
    if (winner || !board.includes(null)) return;

    if (typeof mode !== 'undefined' && mode === 'AI' && currentPlayer === 'O') {
        setTimeout(aiMove, 500);
    }
}

function makeMove(index, player) {
    board[index] = player;
    const cell = document.querySelector(`.cell[data-index='${index}']`);
    cell.textContent = player;
    cell.style.color = player === 'X' ? '#008b8b' : '#dc143c';

    const winner = checkWinner();
    if (winner) {
        statusText.textContent = `🎉 Joueur ${winner} a gagné !`;
    } else if (!board.includes(null)) {
        statusText.textContent = "🤝 Match nul !";
    } else {
        currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
        statusText.textContent = `C'est au tour de ${currentPlayer} !`;
    }
}

function aiMove() {
    const empty = board.map((val, i) => val === null ? i : null).filter(v => v !== null);
    const randomIndex = empty[Math.floor(Math.random() * empty.length)];
    makeMove(randomIndex, 'O');
}

function checkWinner() {
    const wins = [
        [0, 1, 2],
        [3, 4, 5],
        [6, 7, 8],
        [0, 3, 6],
        [1, 4, 7],
        [2, 5, 8],
        [0, 4, 8],
        [2, 4, 6]
    ];
    for (let [a, b, c] of wins) {
        if (board[a] && board[a] === board[b] && board[a] === board[c]) return board[a];
    }
    return null;
}

function restartGame() {
    board = Array(9).fill(null);
    currentPlayer = 'X';
    cells.forEach(cell => cell.textContent = '');
    statusText.textContent = 'Joueur X commence !';
}