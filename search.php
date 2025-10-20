<?php
require('vendor/autoload.php');

use Sc\Webproject\App;
use Sc\Webproject\Search;

// create an app object based on App class
$app = new App();

if( isset($_GET["query"])) {
    $keyword = $_GET["query"];
    // initialise search class
    $serch = new Search();
    // call getResults method and pass user keyword
    $results = $search -> getResults($keyword);
    foreach( $results as $item) {
        print_r($item);
        echo "<br>";
    }
}
else {
    echo "You are not searching";
}
?>