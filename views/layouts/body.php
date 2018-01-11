<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?= $categoryItem['id'];?>">
                                            <?= $categoryItem['name'];?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="callback">
                    <div class="form-group">
                        <p class="callback-p">Закажи обратный звонок и получишь скидку! </p>
                        <form action="../../components/mail.php" method="post" class="form-group">
                            <input type="tel" name='tel' required class="form-control" maxlength="11" value='8' pattern="8\d{10}"/><br>
                            <input type="text" name='name' required class="form-control" placeholder="Ваше имя"/><br>
                            <input type="submit" name="send" class="btn btn-default" value="Отправить">
                        </form>
                    </div>
                </div>
            </div>