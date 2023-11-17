<?php

$data = json_decode(file_get_contents('php://input'), true);
error_log("raw receive " . json_encode($data));
require dirname(__DIR__) . '/src/bootstrap.php';

$dir = dirname(__DIR__);
require_once $dir . '/src/Xhgui/Config.php';
Xhgui_Config::load($dir . '/config/config.default.php');
if (file_exists($dir . '/config/config.php')) {
    Xhgui_Config::load($dir . '/config/config.php');
}
unset($dir);

try {
            $config = Xhgui_Config::all();
            $config += array('db.options' => array());
            $saver = Xhgui_Saver::factory($config);
            $saver->save($data);
            echo json_encode( $data);
} catch (Exception $e) {
    error_log('xhgui - ' . $e->getMessage());
}
