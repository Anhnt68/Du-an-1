const dh = document.getElementById('dh');
const momo = document.getElementById('momo');
dh.style.display = 'none';
momo.style.display = 'none';
function handleRadioClick() {
  if (document.getElementById('check2').checked) {
    dh.style.display = 'block';
    momo.style.display = 'none';
  } else {
    dh.style.display = 'none';
    momo.style.display = 'block';
  }
}

const radioButtons = document.querySelectorAll('input[name="check"]');
radioButtons.forEach(radio => {
  radio.addEventListener('click', handleRadioClick);
});