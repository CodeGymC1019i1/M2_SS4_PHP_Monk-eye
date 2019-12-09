<?php
class Application {
    private static $instance;

    private function __construct()
    {
    }

    /**
     * @return mixed
     */
    public static function getInstance()
    {
        if(self::$instance == null){
            self::$instance = new Application();
            echo "Hi";
        }
        return self::$instance;
    }

}

$app1 = Application::getInstance();
$app2 = Application::getInstance();
$app3 = Application::getInstance();
//$app4 = new Application();



?>