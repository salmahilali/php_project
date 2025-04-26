function playGame(userChoice) {
    // Choix de l'ordinateur
    const choices = ['rock', 'paper', 'scissors'];
    const computerChoice = choices[Math.floor(Math.random() * 3)];

    // Afficher le choix de l'utilisateur
    document.getElementById('user-choice').innerText = `Vous avez choisi: ${emoji(userChoice)}`;

    // Afficher le choix de l'ordinateur
    document.getElementById('computer-choice').innerText = `L'ordinateur a choisi: ${emoji(computerChoice)}`;

    // Vérifier qui a gagné
    const result = determineWinner(userChoice, computerChoice);
    document.getElementById('result').innerText = result;
}

function emoji(choice) {
    if (choice === 'rock') return '🪨';
    if (choice === 'paper') return '📄';
    if (choice === 'scissors') return '✂️';
}

function determineWinner(userChoice, computerChoice) {
    if (userChoice === computerChoice) {
        return "C'est une égalité!";
    }

    if (
        (userChoice === 'rock' && computerChoice === 'scissors') ||
        (userChoice === 'paper' && computerChoice === 'rock') ||
        (userChoice === 'scissors' && computerChoice === 'paper')
    ) {
        return "Vous avez gagné ! 🎉";
    } else {
        return "L'ordinateur a gagné ! 😞";
    }
}

function resetGame() {
    document.getElementById('result').innerText = '';
    document.getElementById('computer-choice').innerText = '';
    document.getElementById('user-choice').innerText = '';
}