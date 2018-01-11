<?php


class SiteController
{


    public function actionIndex()
    {
        $categories = Category::getCategoriesList();

        $latestProducts = Product::getLatestProducts(6);

        $sliderProducts = Product::getRecommendedProducts();

        require_once(ROOT . '/views/site/index.php');
        return true;
    }


    public function actionAbout()
{
    $categories = Category::getCategoriesList();
    require_once(ROOT . '/views/site/about.php');
    return true;
}
    public function actionGuarantee()
    {
        $categories = Category::getCategoriesList();
        require_once(ROOT . '/views/site/guarantee.php');
        return true;
    }
    public function actionDelivery()
    {
        $categories = Category::getCategoriesList();
        require_once(ROOT . '/views/site/delivery.php');
        return true;
    }

    public function actionBuy(){
        $categories = Category::getCategoriesList();
        require_once(ROOT . '/views/site/buy.php');
        return true;
    }
    public function actionWholesale(){
        $categories = Category::getCategoriesList();
        require_once(ROOT . '/views/site/Wholesale.php');
        return true;
    }
    public function actionQuestions(){
        $categories = Category::getCategoriesList();
        require_once(ROOT . '/views/site/questions.php');
        return true;
    }
}
