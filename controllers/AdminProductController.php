<?php


class AdminProductController extends AdminBase
{


    public function actionIndex()
    {
        self::checkAdmin();

        $productsList = Product::getProductsList();

        require_once(ROOT . '/views/admin_product/index.php');
        return true;
    }




    public function actionCreate()
    {
        self::checkAdmin();

        $categoriesList = Category::getCategoriesListAdmin();

        if (isset($_POST['submit'])) {
            $options['name'] = strip_tags($_POST['name']);
            $options['code'] = strip_tags($_POST['code']);
            $options['price'] = $_POST['price'];
            $options['category_id'] = $_POST['category_id'];
            $options['brand'] = strip_tags($_POST['brand']);
            $options['availability'] = $_POST['availability'];
            $options['description'] = strip_tags($_POST['description']);
            $options['is_new'] = $_POST['is_new'];
            $options['is_recommended'] = $_POST['is_recommended'];
            $options['status'] = $_POST['status'];

            $errors = false;

            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поля';
            }
            if($_FILES["image"]["type"] != "jpg" ){
                $errors[] = 'Файл не является картинкой';
            }

            if ($errors == false) {
                $id = Product::createProduct($options);

                if ($id) {

                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");

                    }
                };

                header("Location: /admin/product");
            }

        }

        require_once(ROOT . '/views/admin_product/create.php');
        return true;
    }

    public function actionUpdate($id)
    {
        self::checkAdmin();

        $categoriesList = Category::getCategoriesListAdmin();

        $product = Product::getProductById($id);

        if (isset($_POST['submit'])) {
            $options['name'] = strip_tags($_POST['name']);
            $options['code'] = $_POST['code'];
            $options['price'] = $_POST['price'];
            $options['category_id'] = $_POST['category_id'];
            $options['brand'] = strip_tags($_POST['brand']);
            $options['availability'] = $_POST['availability'];
            $options['description'] = strip_tags($_POST['description']);
            $options['is_new'] = $_POST['is_new'];
            $options['is_recommended'] = $_POST['is_recommended'];
            $options['status'] = $_POST['status'];

            if (Product::updateProductById($id, $options)) {


                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {

                   move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
                }
            }

            header("Location: /admin/product");
        }

        require_once(ROOT . '/views/admin_product/update.php');
        return true;
    }

    public function actionDelete($id)
    {
        self::checkAdmin();

        if (isset($_POST['submit'])) {
            Product::deleteProductById($id);

            header("Location: /admin/product");
        }

        require_once(ROOT . '/views/admin_product/delete.php');
        return true;
    }



    public function actionUpload(){
        self::checkAdmin();


        if(!empty($_FILES)) {
            $uploaddir = 'upload/tmp/';
            $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
               echo  "Файл корректен и был успешно загружен.\n";
                $file = fopen($uploadfile,'r');
                echo "<table>";
                while (!feof($file)){
                    $mass = fgetcsv($file,1024,';');
                    $j = count($mass);
                    if($j>1){
                        $id = Product::setProduct($mass);
                    }
                }
                echo'</table>';
                fclose($file);

            }else{
                echo 'ХЕРА';
            }
        }
        require_once(ROOT . '/views/admin_product/upload.php');
        return true;

    }
}
