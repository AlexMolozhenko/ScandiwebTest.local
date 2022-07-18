<?php


include_once '../config/configRoute.php';


class Route
{

    /**
     * gets an array with uri components
     * @return array
     */
    static public function getUri(){
        $uri = $_SERVER['REQUEST_URI'];
        $uriComponents = explode('/',$uri);
        array_shift($uriComponents);
        return $uriComponents;
    }

    /**
     * controller initialization function and actions by uri
     */
    static public function init(){
        $uriComponents = self::getUri();
        if(count($uriComponents)>3){
            self::notFound();
        }

        $controllerName = DEFAULT_CONTROLLER_NAME;
        $action = DEFAULT_ACTION_NAME;

        if(!empty($uriComponents[0])){
            $controllerName = mb_strtolower(urldecode($uriComponents[0]));
        }

        if(!empty($uriComponents[1])){
            $action = mb_strtolower(urldecode($uriComponents[1]));
        }

        $controllerClass = '\Controllers\\'.mb_ucfirst($controllerName).'Controller';
        if(!class_exists($controllerClass)){
            self::notFound();
        }
        $controller = new $controllerClass();

        if(!method_exists($controller, $action)){
        self::notFound();
        }

        try{
            $controller->$action();
        }catch (Exception $e){
            exit($e->getMessage());
        }

    }

    static public function getErrors()
    {
        session_start();
        $errors = [];
        if(isset($_SESSION['errors'])){
            $errors = $_SESSION['errors'];
            unset($_SESSION['errors']);
        }
        return $errors;
    }

    static public function notFound()
    {
        http_response_code(404);
        exit();
    }

}