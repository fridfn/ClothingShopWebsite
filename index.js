const loadingPage = document.querySelector('.loading-page');
const mainPage = document.querySelector('.main-page');
const homePage = document.querySelector('.main-page');
const optionPage = document.querySelector('.container-option-search');
const loginPage = document.querySelector('.container-page-login');
const categoryPage = document.querySelector('.container-page-category');
const notificationPage = document.querySelector('.container-page-notifications');


const moreOption = document.getElementById('more-options');
const footer = document.querySelector('footer');

function moreOptions() {
 const isArrowBack = moreOption.name === 'arrow-back';
 moreOption.name = isArrowBack ? 'ellipsis-vertical' : 'arrow-back';
 optionPage.classList.toggle('active');
}

function handleSwitchPage(page) {
 const allPages = [homePage, categoryPage, notificationPage, loginPage];
 allPages.forEach((page) => {
  page.classList.remove('actives');
 });
 
 switch(page) {
  case 'home':
   homePage.classList.toggle('actives');
   mainPage.appendChild(footer);
  break;
  case 'category':
   categoryPage.classList.toggle('actives');
  break;
  case 'notification':
   notificationPage.classList.toggle('actives');
  break;
  case 'signup':
   loginPage.classList.toggle('actives');
   loginPage.appendChild(footer);
  break;
  default:
   mainPage.appendChild(footer);
   homePage.classList.toggle('actives');
 }
}

const amount = 10;
const containerProduct = document.querySelector('.wrapper-content-items');
const itemProduct = document.querySelector('.items-product');

const arrayNameProduct = ["two-tone shirt", "long-sleeved shirt", "cute women's sweaters", "Girls Pikachu Shirt", "skirt jumpsuit", "cute Hoodie Dino", "Kartini's kebaya", "kebaya encim", "cute Teddy bear Hoodie", "women's crop tops", "white long-sleeved dress"];


for (let i = 0; i <= amount; i++) {
 const cloneItemProduct = itemProduct.cloneNode(true);
 const imgProduct = cloneItemProduct.querySelector('.image');
 const nameProduct = cloneItemProduct.querySelector('.name-product');
 
 imgProduct.src = `assets/product/sell/product${i}.jpeg`;
 nameProduct.textContent = arrayNameProduct[i];
 containerProduct.appendChild(cloneItemProduct);
}

setTimeout(() => {
  mainPage.classList.add('actives');
  loadingPage.classList.add('actives');
}, 3500);