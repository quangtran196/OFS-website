let carts = document.querySelectorAll('.add-cart');

let products = [

  {
    name: 'Fresh Navel Orange',
    tag: 'norange',
    price: 4.88,
    weight: 3.0,
    inCart: 0
  },
  {
    name: 'Fresh Gala Apples',
    tag: 'apple',
    price: 2.67,
    weight: 3.0,
    inCart: 0
  },
  {
    name: 'Produce Unbranded Hot House Strawberries',
    tag: 'sberry',
    price: 2.28,
    weight: 1.0,
    inCart: 0
  },
  {
    name: 'Organic Red seedless Grapes',
    tag: 'redg',
    price: 4.99,
    weight: 1.5,
    inCart: 0
  },
  {
    name: 'Fresh Organic Kiwis',
    tag: 'ki',
    price: 3.98,
    weight: 2.0,
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
