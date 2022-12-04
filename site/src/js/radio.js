const box = document.getElementById('momo');

function handleRadioClick() {
  if (document.getElementById('check2').checked) {
    box.style.display = 'block';
  } else {
    box.style.display = 'none';
  }
}

const radioButtons = document.querySelectorAll('input[name="check"]');
radioButtons.forEach(radio => {
  radio.addEventListener('click', handleRadioClick);
});