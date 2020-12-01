let carts = document.querySelectorAll('.add-cart');

let products = [

  {
    name: 'Daily Pure low fat Milk',
    tag: 'milk',
    price: 3.35,
    weight:'8.6Ibs',
    inCart: 0
  },
  {
    name: 'Kraft American Cheese',
    tag: 'cheese',
    price: 5.39,
    weight: '1.0lb',
    inCart: 0
  },
  {
    name: 'Breyers Original Chocolate Ice Cream',
    tag: 'doritos',
    price: 4.49,
    weight: '3.0lbs',
    inCart: 0
  },
  {
    name: 'Yoplait Original Yogurt Strawberry',
    tag: 'yogurt',
    price: 2.14,
    weight: '2.0 lb',
    inCart: 0
  },
  {
    name: 'Land OLakes Salted Butter',
    tag: 'pringles',
    price: 5.99,
    weight: '1.0lb',
    inCart: 0
  }
]

  for (let i=0; i < carts.length; i++) {
    carts[i].addEventListener('click',() => {
      cartNumbers(products[i]);
      totalCost(products[i])
    })
  }

function onLoadCartNumbers() {
  let productNumbers = localStorage.getItem('cartNumbers');

    if(productNumbers) {
      document.querySelector('.cart span').textContent = productNumbers;
    }
}

function cartNumbers(product) {
  let productNumbers = localStorage.getItem('cartNumbers');
  productNumbers = parseInt(productNumbers);

    if(productNumbers) {
      localStorage.setItem('cartNumbers', productNumbers + 1);
      document.querySelector('.cart span').textContent = productNumbers + 1;
    } else {
      localStorage.setItem('cartNumbers', 1);
      document.querySelector('.cart span').textContent = 1;
    }

    setItems(product);
}

function setItems(product) {
  let cartItems = localStorage.getItem('productsInCart');
  cartItems = JSON.parse(cartItems);

  if(cartItems != null) {

    if(cartItems[product.tag] == undefined) {
      cartItems = {
        ...cartItems,
        [product.tag]: product
      }
    }
    cartItems[product.tag].inCart += 1;
  } else {
    product.inCart = 1;
    cartItems = {
    [product.tag]: product
  }

  }

  localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

function totalCost(product) {

  let cartCost = localStorage.getItem('totalCost');

  if(cartCost != null) {
    cartCost = parseInt(cartCost);
    localStorage.setItem("totalCost", cartCost + product.price);
  } else {
  localStorage.setItem("totalCost", product.price);
  }
}

function displayCart() {

  let cartItems = localStorage.getItem("productsInCart");
  cartItems = JSON.parse(cartItems);
  let productContainer = document.querySelector(".products");
  if(cartItems && productContainer) {

    productContainer.innerHTML = '';
    Object.values(cartItems).map(item => {
      productContainer.innerHTML += `
        <div class = "product">
          <ion-icon name="close-circle"></ion-icon>
          <img src = "./images/imagesfe/${item.tag}.jpg">
          <span>${item.name}</span>
       </div>
       <div class= "price"> $${item.price}</div>
      `
    });
  }
}

onLoadCartNumbers();
displayCart();
