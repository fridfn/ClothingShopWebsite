const messagePage = document.querySelector('#info-page-title');
const historyOrder = document.querySelector('#history-order-shipping');
const containerProfile = document.querySelector('.container-page-profile');
const footer = document.querySelector('footer');

const containerPopup = document.querySelector('.container-my-popup');
const myPopup = document.querySelector('.my-popup');
const textPopup = myPopup.querySelector('#text-popup');

myPopup.style.display = "none";
function handleAction(action) {
 const setMessage = action === 'packing' ? "Belum ada pesanan di sini" : "Belum ada pengiriman barang di sini";
 const elementNone = [footer, containerProfile];
 action !== 'default' ? handleNotif({ text: setMessage }) : console.log('menampilkan notif');
 
 setTimeout(() => {
  elementNone.forEach(element => element.style.display = 'none');
  historyOrder.style.display = 'flex';
  switch(action) {
   case 'packing':
    messagePage.innerHTML = setMessage;
   break;
   case 'shipping':
    messagePage.innerHTML = setMessage;
   break;
   default:
   elementNone.forEach(element => element.style.display = 'flex');
   historyOrder.style.display = 'none';
  }
 }, 300);
}

function handleNotif(params) {
 let { text } = params;
 
 setTimeout(() => {
  myPopup.style.display = "flex";
  textPopup.textContent = text;
  setTimeout(() => { myPopup.style.display = "none" }, 2500);
 }, 400);
}

const amountProduct = 10; //nilai untuk mengatur jumlah banyak nya product

const productRecomended = document.querySelector('.product-recomended');
const containerRecomended = document.querySelector('.wrapper-recomended-product');

const arrayNameProduct = ["two-tone shirt", "long-sleeved shirt", "cute women's sweaters", "Girls Pikachu Shirt", "skirt jumpsuit", "cute Hoodie Dino", "Kartini's kebaya", "kebaya encim", "cute Teddy bear Hoodie", "women's crop tops", "white long-sleeved dress"];

for (let i = 0; i <= amountProduct; i++) {
 const cloneRecomendedProduct = productRecomended.cloneNode(true);
 
 //variabel untuk mengambil image product dari setiap box
 const imgRecomendedProduct = cloneRecomendedProduct.querySelector('.image');
 
 //variabel untuk mengambil nama product dari setiap box
 const nameRecomendedProduct = cloneRecomendedProduct.querySelector('.title-product');
 
 
 imgRecomendedProduct.src = `../assets/product/sell/product${i}.jpeg`;
 nameRecomendedProduct.textContent = arrayNameProduct[i] || 'Null';
 
 containerRecomended.appendChild(cloneRecomendedProduct);
}