let puzzlePieces = [];
let emptyIndex = 8;

window.onload = function() {
    const puzzleBoard = document.getElementById("puzzle-board");

    // Créer un tableau avec les chiffres 1 à 8, et une case vide représentée par 0
    let numbers = [1, 2, 3, 4, 5, 6, 7, 8, 0];
    shuffle(numbers); // Mélanger les numéros

    // Générer les pièces du puzzle
    for (let i = 0; i < numbers.length; i++) {
        let piece = document.createElement("div");
        piece.classList.add("puzzle-piece");
        piece.dataset.value = numbers[i];

        if (numbers[i] === 0) {
            piece.classList.add("empty");
        } else {
            piece.textContent = numbers[i];
            piece.addEventListener("click", () => movePiece(i));
        }
        puzzleBoard.appendChild(piece);
        puzzlePieces.push(piece);
    }
};

// Mélanger le tableau des numéros (fonction de shuffle)
function shuffle(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
}

// Déplacer la pièce
function movePiece(index) {
    // Vérifier si la pièce cliquée est adjacente à l'espace vide
    const adjacentIndexes = [
        emptyIndex - 3, // au-dessus
        emptyIndex + 3, // en dessous
        emptyIndex - 1, // à gauche
        emptyIndex + 1 // à droite
    ];

    if (adjacentIndexes.includes(index)) {
        swapPieces(index);
    }
}

// Échanger les positions des pièces
function swapPieces(index) {
    const emptyPiece = puzzlePieces[emptyIndex];
    const clickedPiece = puzzlePieces[index];

    emptyPiece.textContent = clickedPiece.textContent;
    clickedPiece.textContent = "";

    // Mettre à jour la case vide
    emptyPiece.classList.remove("empty");
    clickedPiece.classList.add("empty");

    // Mettre à jour l'index de la case vide
    emptyIndex = index;

    checkVictory();
}

// Vérifier si le puzzle est résolu
function checkVictory() {
    const currentOrder = puzzlePieces.map(piece => piece.textContent);
    const correctOrder = ['1', '2', '3', '4', '5', '6', '7', '8'];

    if (currentOrder.join('') === correctOrder.join('')) {
        alert('🎉 Félicitations ! Vous avez résolu le puzzle !');
    }
}

// Recommencer le jeu
function startGame() {
    window.location.reload();
}