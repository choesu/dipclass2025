<?php
require('vendor/autoload.php');

use Sc\Webproject\App;
use Sc\Webproject\Search;

// create an app object based on App class
$app = new App();

// user type
if( empty($_SESSION["type"] ) ) {
    $type = null;
}
else {
    $type = $_SESSION["type"];
}

if( isset($_GET["query"]) ) {
   $keyword = $_GET["query"];
   // initialise search class
   $search = new Search();
   // call getResults method and pass user keyword
   $results = $search -> getResualts($keyword);
   foreach( $results as $item ) {
    print_r($item);
    echo "<br>";
   }
}
else {
    echo "You are not searching";
}
?>