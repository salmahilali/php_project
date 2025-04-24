function plantWord() {
    const input = document.getElementById('word-input');
    const word = input.value.trim();
    if (word === '') return;

    // Créer une "fleur" avec un mot
    const flower = document.createElement('div');
    flower.className = 'flower';
    flower.textContent = word;

    // Ajouter les pétales à la fleur
    for (let i = 0; i < 4; i++) {
        const petal = document.createElement('div');
        petal.className = 'petal';
        flower.appendChild(petal);
    }

    // Ajouter la fleur au jardin
    document.getElementById('garden').appendChild(flower);

    // Réinitialiser l'input
    input.value = '';
}