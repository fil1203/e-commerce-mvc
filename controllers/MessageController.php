<?php

class MessageController extends AdminBase {


    public function actionContact()
    {

        $userEmail = false;
        $userText = false;
        $result = false;

        if (isset($_POST['submit'])) {
            $options['name'] = strip_tags($_POST['userName']);
            $options['email'] = strip_tags($_POST['userEmail']);
            $options['messages'] = strip_tags($_POST['userText']);

            $errors = false;

            if (!User::checkEmail($options['email'])) {
                $errors[] = 'Неправильный email';
            }

            if ($errors == false) {
                $adminEmail = 'filimonov12@gmail.com';
                $message = "Текст: {$options['messages']}. От {$options['email']}";
                $subject = 'Тема письма';
                $result = mail($adminEmail, $subject, $message);
                $result = true;
                $id = Message::createMessage($options);
            }
        }

        require_once(ROOT . '/views/message/contact.php');
        return true;
    }

    public function actionMessages(){

            self::checkAdmin();

            $messageList = Message::getMessageList();

            require_once(ROOT . '/views/message/index.php');
            return true;

    }

    public function actionDelete($id)
    {
        self::checkAdmin();

        if (isset($_POST['submit'])) {
            Message::deleteMessageById($id);

            header("Location: /admin/message/");
        }

        require_once(ROOT . '/views/message/delete.php');
        return true;
    }

}