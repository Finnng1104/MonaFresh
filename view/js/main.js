import { showTopSellingProducts,showProductsByCategory } from './products.js';
import { listProduct } from './data.js';
import {loginByGoogle, handleCredentialResponse} from './googleLogin.js';


window.onload = function() {
    showTopSellingProducts(listProduct);
    showProductsByCategory(listProduct, 'fruit');
    loginByGoogle();
}