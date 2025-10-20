<?php

namespace Sc\Webproject;

use Exception;
use Sc\Webproject\App;
use Sc\Webproject\Database;

class Search extends Database {
    public function __construct()    {
        parent::__construct();
    }
    public function getResualts( $keyword) {
        $query = "SELECT
                id,
                Title,
                Cover,
                Description
                FROM 'Book' WHERE titke LIKE ? ";
        $search_keyword = "%$keyword%";
        $statement = $this -> connection -> prepare($query);
        $statement -> bind_param("s", $search_keyword);
        $statement -> execute();
        $result = $statement -> get_result();
        $search_result = array();
        while( $row = $result -> fetch_assoc()) {
            array_push($search_result, $row);
        }
        return $search_result;
    }
}
?>