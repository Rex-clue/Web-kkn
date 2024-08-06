const cards = document.querySelectorAll('.card1');

cards.forEach(card => {
  card.addEventListener('click', () => {
    // Tindakan lain yang diinginkan saat kartu diklik
    console.log('Kartu diklik!');
  });
});