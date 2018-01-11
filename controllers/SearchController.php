<?php

class SearchController {

    public static function actionSearch(){

        $categories = array();
        $categories = Category::getCategoriesList();
        $searchList = Search::getSearchResult();

       require_once(ROOT . '/views/search/index.php');

        return true;

    }


}