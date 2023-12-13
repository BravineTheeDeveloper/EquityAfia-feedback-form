const buttons = document.querySelectorAll('.button');

buttons.forEach(button => {
  button.addEventListener('click', () => {
    const rating = button.dataset.buttonId;
    document.getElementById('rating').value = rating;
  });
});