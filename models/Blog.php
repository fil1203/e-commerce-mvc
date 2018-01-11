<?php

class Blog
{


    public static function getBlogItemById($id)
    {
        $id = intval($id);

        if ($id) {
                        
            $db = Db::getConnection();
            
            $result = $db->query('SELECT * FROM news WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            
            $blogItem = $result->fetch();

            return $blogItem;
        }
    }


    public static function getBlogList() {
 
        $db = Db::getConnection();
        
        $blogList = array();
        
        $result = $db->query('SELECT id, title, date, short_content '
                . 'FROM news '
                . 'ORDER BY date DESC ');

        $i = 0;
        while($row = $result->fetch()) {
            $blogList[$i]['id'] = $row['id'];
            $blogList[$i]['title'] = $row['title'];
            $blogList[$i]['date'] = $row['date'];
            $blogList[$i]['short_content'] = $row['short_content'];
            $i++;
        }

        return $blogList;
    }


}
