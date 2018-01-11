<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li class="active">Управление товарами</li>
                </ol>
            </div>

                <div class="signup-form1 ">

                    <form enctype="multipart/form-data" action="#" method="POST" class="fotm-group center">

                        Выберите файл в формате CSV:<br/><br/> <input name="userfile" type="file" class="btn" />
                        <input type="submit" class="btn btn-primary" value="Отправить файл" />
                    </form>
                </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

