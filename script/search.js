const input = document.querySelector('#search-input');
const optionPage = document.querySelector('.container-option-search');
const moreOption = document.getElementById('more-options');

const containerPopup = document.querySelector('.container-my-popup');
const myPopup = document.querySelector('.my-popup');

const isLogin = localStorage.getItem('isLogin');
alert('search is here')
if (!isLogin) {
 myPopup.style.display = "flex";
 localStorage.setItem('isLogin', true);
 setTimeout(() => { myPopup.style.display = "none" }, 3000);
}

const textPopup = myPopup.querySelector('#text-popup');

input.addEventListener('touchstart', ()=> {
 optionPage.classList.add('actives');
 moreOption.name = 'arrow-back';
});

function moreOptions() {
 const isArrowBack = moreOption.name === 'arrow-back';
 moreOption.name = isArrowBack ? 'ellipsis-vertical' : 'arrow-back';
 optionPage.classList.toggle('actives');
}

let amountCategory = 14;
const arrayNameCategory = ["Cottagecore", "Summer Fits", "Elegant", "Classic", "Y2K", "90s Gems", "Beuty", "Tops", "Dresses", "Camisoles", "Skirts", "Bags", "Outers", "Accessories"];

const wrapperCategoryOptions = document.querySelector('.wrapper-box-options');
const categoryList = document.querySelector('.box-options');

for (let x = 1; x < amountCategory; x++) {
 const cloneCategoryList = categoryList.cloneNode(true);
 const nameCategory = cloneCategoryList.querySelector('.option-text');
 
 wrapperCategoryOptions.appendChild(cloneCategoryList);
 nameCategory.textContent = arrayNameCategory[x];
}