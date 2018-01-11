<?php

class Pages {
    public static function getPagesList()
    {

        $db = Db::getConnection();

        $pagesList = array();

        $result = $db->query('SELECT title_url, title FROM pages ');

        $i = 0;
        while ($row = $result->fetch()) {
            $pagesList[$i]['title'] = $row['title'];
            $pagesList[$i]['title_url'] = $row['title_url'];
            $i++;
        }
        return $pagesList;
    }
}