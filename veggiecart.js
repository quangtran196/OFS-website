let carts = document.querySelectorAll('.add-cart');

let products = [

  {
    name: 'Fresh Organic Celery',
    tag: 'celery2',
    price: 1.90,
    weight:0.5,
    inCart: 0
  },
  {
    name: 'Fresh Organic Baby Bok Choy',
    tag: 'bokchoy2',
    price: 2.70,
    weight: 1.0,
    inCart: 0
  },
  {
    name: 'Fresh Organic Broccoli',
    tag: 'broccoli2',
    price: 4.40,
    weight: 1.0,
    inCart: 0
  },
  {
    name: 'Fresh Iceberg Lettuce',
    tag: 'iceberg2',
    price: 2.50,
    weight: 1.0,
    inCart: 0
  },
  {
    name: 'Fresh Organic Red Radish',
    tag: 'radish2',
    price: 5.90,
    weight: 1.0,
    inCart: 0
  }
]

  for (let i=0; i < carts.length; i++) {
    carts[i].addEventListener('click',() => {
      cartNumbers(products[i]);
      totalCost(products[i]);
      totalWeight(products[i])
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

function totalWeight(product) {

  let cartWeight = localStorage.getItem('totalWeight');

  if(cartWeight != null) {
    cartWeight = parseInt(cartWeight);
    localStorage.setItem("totalWeight", cartWeight + product.weight);
  } else {
  localStorage.setItem("totalWeight", product.weight);
  }
}

function displayCart() {

  let cartItems = localStorage.getItem("productsInCart");
  cartItems = JSON.parse(cartItems);
  let productContainer = document.querySelector(".products");
  let cartCost = localStorage.getItem('totalCost');
  let cartWeight = localStorage.getItem('totalWeight');

  if(cartItems && productContainer) {

    productContainer.innerHTML = '';
    Object.values(cartItems).map(item => {
      productContainer.innerHTML += `
        <div class = "product">
          <div class ="product">
            <ion-icon name="close-circle"></ion-icon>
            <img src = "./images/imagesfe/${item.tag}.jpg">
            <span>${item.name}</span>
          </div>

          <div class="price">$${item.price}0</div>

          <div class="weight">
             <span>${item.weight}</span>
          </div>

          <div class="quantity">
             <ion-icon class="decrease"
             name="arrow-dropleft-circle"></ion-icon>
             <span>${item.inCart}</span>
             <ion-icon class="increase"
             name="arrow-dropright-circle"></ion-icon>
         </div>

         <div class="total">
           $${item.inCart * item.price}0
         </div>

        </div>

      `;
    });

    productContainer.innerHTML += `
      <div class="basketTotalContainer">
        <h4 class="backetTotalTitle">
        Cart Total ---
        </h4>
        <h4 class="backetTotal">
             $${cartCost}0
        </h4>
      </div>


    `;
    productContainer.innerHTML += `
      <div class="basketTotalContainer">
        <h4 class="backetTotalTitle">
        Total Weight -
        </h4>
        <h4 class="backetTotal">
             ${cartWeight}lbs

        </h4>
      </div>


    `;
  }
}

onLoadCartNumbers();
displayCart();
