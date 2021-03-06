<?php
// index.php
// load and initialize any global libraries
require_once 'model.php';
require_once 'controllers.php';
// route the request internally
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if(strpos($uri, '/index.php/list') !== false) {
  list_action();
} elseif (strpos($uri, '/index.php/show') !== false && isset($_GET['id'])) {
  show_action($_GET['id']);
} else {
  header('Status: 404 Not Found');
  echo '<html><body><h1>Page Not Found</h1></body></html>';
}
?>