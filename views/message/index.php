<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li class="active">Управление сообщениями</li>
                </ol>
            </div>

            <br/>

            <h4>Список сообщений</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID сообщения</th>

                    <th>Автор</th>
                    <th>E-mail</th>
                    <th>Сообщение</th>
                    <th></th>
                </tr>
                <?php foreach ($messageList as $message): ?>
                    <tr>
                        <td><?php echo $message['id']; ?></td>
                        <td><?php echo $message['name']; ?></td>
                        <td><?php echo $message['email']; ?></td>
                        <td><?php echo $message['messages']; ?></td>
                        <td><a href="/admin/message/delete/<?php echo $message['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

