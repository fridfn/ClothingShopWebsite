const submitBTN = document.querySelector('#btn-login');
const containerPopup = document.querySelector('.container-my-popup');
const myPopup = document.querySelector('.my-popup');
const textPopup = myPopup.querySelector('#text-popup');
myPopup.style.display = 'flex';

submitBTN.addEventListener('click', (e) => {
  //e.preventDefault();
  myPopup.style.display = "flex";
  
  setTimeout(() => { myPopup.style.display = "none" }, 2000);
});

setTimeout(() => { myPopup.style.display = "none"}, 2500);