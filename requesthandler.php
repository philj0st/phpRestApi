<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
//uncomment as soon as it returns real json_encode(obj) and not just a string.
//header('Content-Type: application/json');
//altering 'rest/api/whatever/5' to 'Array ( [0] => whatever [1] => 5 )'
$fullUriArray = explode('/', $_SERVER['REQUEST_URI']);
//depending on API path #TODO: I'm sure there's a better way to trim the REQUEST_URI
//$queryParams = array_splice($fullUriArray, 3);
//in case the API is at document root.
$queryParams = $fullUriArray;
switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    echo "reading " . implode('->', $queryParams);
    break;
  case 'POST':
    echo "create " . implode('->', $queryParams);
  break;
  case 'DELETE':
    echo "delete " . implode('->', $queryParams);
    break;
  default:
    echo "unable to resolve query";
    break;
}
 ?>
