
const amountProduct = 10; //nilai untuk mengatur jumlah banyak nya product
const containerProduct = document.querySelector('.wrapper-content-items');
const itemProduct = document.querySelector('.items-product');

const arrayNameProduct = ["two-tone shirt", "long-sleeved shirt", "cute women's sweaters", "Girls Pikachu Shirt", "skirt jumpsuit", "cute Hoodie Dino", "Kartini's kebaya", "kebaya encim", "cute Teddy bear Hoodie", "women's crop tops", "white long-sleeved dress"];

for (let i = 0; i <= amountProduct; i++) {
 const cloneItemProduct = itemProduct.cloneNode(true);
 
 const imgProduct = cloneItemProduct.querySelector('.image');
 const nameProduct = cloneItemProduct.querySelector('.name-product');
 
 imgProduct.src = `../assets/product/sell/product${i}.jpeg`;
 nameProduct.textContent = arrayNameProduct[i] || 'Null';
 
 containerProduct.appendChild(cloneItemProduct);
}


let amountCategory = 14;
const arrayNameCategory = ["Cottagecore", "Summer Fits", "Elegant", "Classic", "Y2K", "90s Gems", "Beuty", "Tops", "Dresses", "Camisoles", "Skirts", "Bags", "Outers", "Accessories"];

const wrapperCategory = document.querySelector('.wrapper-category-list');
const categoryList = document.querySelector('.items-list');

for (let x = 1; x < amountCategory; x++) {
 const cloneCategoryList = categoryList.cloneNode(true);
 const nameCategory = cloneCategoryList.querySelector('.title-category');
 
 wrapperCategory.appendChild(cloneCategoryList);
 nameCategory.textContent = arrayNameCategory[x];
}
