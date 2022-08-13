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
//======
        function pr($val)
        {
//            $bt = debug_backtrace();
//            $file = file($bt[0]['file']);
//            $src = $file[$bt[0]['line'] - 1];
//            $pat = '#(.*)' . __FUNCTION__ . ' *?\( *?(.*) *?\)(.*)#i';
//            $var = preg_replace($pat, '$2', $src);
//            echo '<script>console.log("' . trim($var) . '=' .
//                addslashes(json_encode($val, JSON_UNESCAPED_UNICODE)) . '")</script>' . "\n";
    echo '<script>console.log("' .$val.'")</script>' . "\n";
        }
        pr($uri);
//====

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
//            $controllerName = mb_strtolower(urldecode($uriComponents[0]));
            $controllerName = urldecode($uriComponents[0]);
        }
//===
        pr($controllerName);
//===
        if(!empty($uriComponents[1])){
//            $action = mb_strtolower(urldecode($uriComponents[1]));
            $action = urldecode($uriComponents[1]);
        }
//===
        pr($action);
//===
//        $controllerClass = '\Controllers\\'.mb_ucfirst($controllerName).'Controller';
        $controllerClass = DIRECTORY_SEPARATOR.'Controllers'.DIRECTORY_SEPARATOR. str_replace(DIRECTORY_SEPARATOR, '\\', $controllerName).'controller';
//===
        pr($controllerClass);
//===
//===
        pr(class_exists($controllerClass));
//===
        if(!class_exists($controllerClass)){
//            self::notFound();
            exit('CONTROLLER exists');
        }
        $controller = new $controllerClass();

        if(!method_exists($controller, $action)){
//        self::notFound();
           exit('action exists');
        }


        try{
            $controller->$action();
        }catch (Exception $e){
            self:self::addErrors([$e->getMessage()]);
            exit($e->getMessage());
        }

    }

    /**
     * create url by controller and action
     * @param string $controller
     * @param string $action
     * @return string
     */
    static public function url(string $controller = DEFAULT_CONTROLLER_NAME, string $action = DEFAULT_ACTION_NAME)
    {
        return "/$controller/$action";
    }

    /**
     * redirect to url
     * @param string $url
     */
    static public function redirect(string $url)
    {
        header("location: $url");
        exit();
    }

    static public function addErrors(array $errors)
    {
        session_start();
        $_SESSION['errors'] = $errors;
    }

    /**
     * get errors from session
     * @return array
     */
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

    /**
     * returns a 404 page
     */
    static public function notFound()
    {
        http_response_code(404);
        exit();
    }



}