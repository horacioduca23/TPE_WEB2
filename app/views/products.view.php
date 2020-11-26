<?php

class ProductsView {             
    
    function showProducts($products, $categories){
        
        $smarty = new Smarty();

        $smarty->assign('products', $products);
       
        $smarty->assign('categories', $categories);

        $smarty->display('templates/products.tpl');

    }

    function showError($msg) {
       
        $smarty = new Smarty();
        
        $smarty->assign('msg', $msg);

        $smarty->display('templates/showError.tpl');

    }

    function showProductsDetails($details) {
        
        $smarty = new Smarty();
        
        $smarty->assign('details', $details);

        $smarty->display('templates/showProductsDetails.tpl');
        
    }

    function showProduct($product) {
        
        $smarty = new Smarty();
        
        $smarty->assign('product', $product);

        $smarty->display('templates/showProductEdit.tpl');
            
    }

    function showPubProducts($products) {
        
        $smarty = new Smarty();

        $smarty->assign('products', $products);

        $smarty->display('templates/showPubProducts.tpl');

    } 

}