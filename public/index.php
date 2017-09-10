<?php
chdir(getcwd().'/../');
// composer autoload, install any dependencies you need
require_once('vendor/autoload.php');

$app = new \IceAge\Application();
$app->bootstrap(array(
    '\\App\\Bootstrap\\Env::load',
    '\\App\\Bootstrap\\Eloquent::boot',
    '\\App\\Bootstrap\\Services::register',
    '\\App\\Bootstrap\\Routes::register'
));

try {
    $result = $app->run();
}
catch(Exception $e){
    $result = $app->run_handler('\\App\\Controller\\Error::error', array('error' => $e));
}

$app->response($result);