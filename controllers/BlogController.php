<?php


class BlogController
{


    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();
        $blogList = array();
        $blogList = Blog::getBlogList();



        require_once(ROOT . '/views/blog/index.php');

        return true;
    }

    public function actionView($id)
    {
        if ($id) {
            $categories = array();
            $categories = Category::getCategoriesList();
            $newsItem = Blog::getBlogItemById($id);

            require_once(ROOT . '/views/blog/view.php');
        }

        return true;
    }

}
