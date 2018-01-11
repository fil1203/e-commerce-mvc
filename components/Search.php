<?php

class Search {


    public static function getSearchResult(){
        // Соединение с БД
        $db = Db::getConnection();

        //
        if (isset($_POST['bsearch'])){
            $words = $_POST['words'];
        }


        $words = htmlspecialchars($words);
        if ($words === "" ){
           return false;
        }
        $query_search = "";

        $arraywords = explode(" ", $words);
        foreach ($arraywords as $key => $value){
            if (isset($arraywords[$key -1])){
                $query_search .= ' OR ';
            }
            $query_search .=  '`name` LIKE "%'.$value.'%" OR `description` LIKE "%'.$value.'%"';
        }



        $result = $db->query("SELECT * FROM product WHERE $query_search ");
        $i = 0;
        while($row = $result->fetch()) {
            $results[$i] = $row;
            $i++;
        }

        if(!empty($results)){
            return $results;
        }




    }


}