<?php

require_once('libs/smarty/Smarty.class.php');

class CategoriesView {             

    function showCategories($categories)    {
        
        $smarty = new Smarty();

        $smarty->assign('categories', $categories);

        $smarty->display('templates/categories.tpl');

    } 

    function showPubCategories($categories)    {
        
        $smarty = new Smarty();

        $smarty->assign('categories', $categories);

        $smarty->display('templates/showPubCategories.tpl');

    } 

    function showError($msg) {
       
        $smarty = new Smarty();
        
        $smarty->assign('msg', $msg);

        $smarty->display('templates/showError.tpl');

    }
    
    function showCategory($category) {
        
        $smarty = new Smarty();
        
        $smarty->assign('category', $category);

        $smarty->display('templates/showCategoryEdit.tpl');
        
    }

    function showProductsByCategory($products) {
        
        $smarty = new Smarty();
        
        $smarty->assign('products', $products);

        $smarty->display('templates/showProductsByCategory.tpl');

    }


}