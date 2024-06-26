import { listProduct } from './data.js';


  
function showTopSellingProducts(listProduct) {
    // Sort the products array by 'sell' in descending order
    let sortedProducts = listProduct.sort((a, b) => b.sell - a.sell);
    
    // Get the top sell products
    let topProducts = sortedProducts.slice(0, 12);
    
    // Get the container to display the products
    let container = document.getElementById('topSellProduct');
    let string = "";
    // Generate HTML for each product and append to the container
    for(let product of topProducts){
        string += `
            <div class="product">
                <div class="product-img">
                    <img src="upload/img/product/${product.image}" alt="${product.name}">
                </div>
                <div class="product-content">
                    <h3>${product.name}</h3>
                    <p>${product.price}₫</p>
                    <button>Thêm vào giỏ</button>
                </div>
            </div>
        `;
    };
    container.innerHTML = string;
}

function showProductsByCategory(listProduct, category) {
    // Filter the products array by the given category
    let filteredProducts = listProduct.filter(product => product.category === category);

    // Get the container to display the products
    let container = document.getElementById('productCategory');
    let string = "";
    
    // Generate HTML for each product and append to the container
    for(let product of filteredProducts){
        string += `
            <div class="product">
                <div class="product-img">
                    <img src="upload/img/product/${product.image}" alt="${product.name}">
                </div>
                <div class="product-content">
                    <h3>${product.name}</h3>
                    <p>${product.price}₫</p>
                    <button>Thêm vào giỏ</button>
                </div>
            </div>
        `;
    };
    container.innerHTML = string;
}

export { showTopSellingProducts,showProductsByCategory };