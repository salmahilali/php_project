const emojis = ['🐶','🐱','🐰','🦊','🐼','🐮','🐸','🐵'];
let cards = [...emojis, ...emojis]                // 16 cartes
  .sort(()=>Math.random()-0.5)
  .map(e => createCard(e));

let first = null, lock = false, matches = 0;

function createCard(emoji){
  const card = document.createElement('div');
  card.className = 'card';
  card.innerHTML = `
      <div class="inner">
        <div class="face front">?</div>
        <div class="face back">${emoji}</div>
      </div>`;
  card.addEventListener('click', () => flip(card, emoji));
  document.getElementById('game').appendChild(card);
  return card;
}

function flip(card, emoji){
  if(lock || card.classList.contains('flip')) return;
  card.classList.add('flip');

  if(!first){
    first = {card, emoji};
  }else{
    if(first.emoji === emoji){
      matches += 1;
      if(matches === emojis.length)
        document.getElementById('result').textContent = '🎉 Bravo ! Toutes les paires trouvées.';
      first = null;
    }else{
      lock = true;
      setTimeout(()=>{
        card.classList.remove('flip');
        first.card.classList.remove('flip');
        first = null;
        lock = false;
      },900);
    }
  }
}
