<?php include ROOT . '/views/layouts/header.php'; ?>
<?php include ROOT . '/views/layouts/body.php'; ?>
    <div class="col-sm-9 padding-right">
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">поиск</h2>
<?php if($_POST['words'] == '') :?>
<h3 class="alert-warning ">- Введите текст поиска!</h3>
<?php elseif (empty($searchList)  ):?>
    <h3 class="alert-warning ">- Ничего не найдено!</h3>

<?php else:?>

        <?php foreach ($searchList as $product): ?>
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class=" text-center">
                            <div class="product-img">
                                <img src="../../upload/images/products/<?php echo $product['image']; ?>" alt="" />
                            </div>

                            <div class="productinfo">
                                <h2><?php echo $product['price']; ?> <span>грн.</span></h2>
                                <p>
                                    <a href="/product/<?php echo $product['id']; ?>">
                                        <?php echo $product['name']; ?>
                                    </a>
                                </p>
                                <a href="#" class="btn btn-default add-to-cart" data-id="<?php echo $product['id']; ?>"><i class="fa fa-shopping-cart"></i>В корзину</a>
                            </div>
                        </div>

                        <?php if ($product['is_new']): ?>
                            <img src="/template/images/home/new.png" class="new" alt="" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
<?php endif;?>
    </div><!--features_items-->


<?php include ROOT . '/views/layouts/footer.php'; ?>