<?php include ROOT . '/views/layouts/header.php'; ?>
<?php include ROOT . '/views/layouts/body.php'; ?>
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Последние товары</h2>
                    
                    <?php foreach ($latestProducts as $product): ?>
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
                    <?php endforeach;?>                   

                </div><!--features_items-->


            </div>


<?php include ROOT . '/views/layouts/footer.php'; ?>