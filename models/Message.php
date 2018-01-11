<?php

class Message {


    public static function getMessageList()
    {
        $db = Db::getConnection();

        $result = $db->query('SELECT * FROM messages ');

        $i = 0;

        $messageList = array();
        while ($row = $result->fetch()) {
            $messageList[$i]['id'] = $row['id'];
            $messageList[$i]['name'] = $row['name'];
            $messageList[$i]['email'] = $row['email'];
            $messageList[$i]['messages'] = $row['messages'];
            $i++;
        }
        return $messageList;

    }

    public static function deleteMessageById($id)
    {
        $db = Db::getConnection();

        $sql = 'DELETE FROM messages WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }


    public static function createMessage($options)
    {
        $db = Db::getConnection();

        $sql = 'INSERT INTO messages '
            . '(name, email ,messages)'
            . 'VALUES '
            . '(:name, :email, :messages )';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':email', $options['email'], PDO::PARAM_STR);
        $result->bindParam(':messages', $options['messages'], PDO::PARAM_STR);
           $result->execute();

    }

}