const emotions = {
    joie: {
        title: "🌞 Joie",
        text: "La joie, c’est quand tu ressens du bonheur et de l’énergie positive. Tu as envie de sourire et de rire !"
    },
    tristesse: {
        title: "🌧️ Tristesse",
        text: "La tristesse, c’est quand tu es un peu moins bien. C’est une émotion normale et elle permet de se sentir mieux après."
    },
    colere: {
        title: "🔥 Colère",
        text: "La colère peut arriver quand quelque chose te dérange. Il faut apprendre à la comprendre pour mieux la gérer."
    },
    surprise: {
        title: "🎉 Surprise",
        text: "La surprise, c’est quand quelque chose arrive sans qu’on s’y attende. Cela peut être drôle, effrayant ou étonnant !"
    }
};

function showEmotion(key) {
    const desc = document.getElementById("description");
    const emotion = emotions[key];
    desc.innerHTML = `<h2>${emotion.title}</h2><p>${emotion.text}</p>`;
    desc.style.display = 'block';
    desc.classList.remove('fade');
    void desc.offsetWidth; // reset animation
    desc.classList.add('fade');
}