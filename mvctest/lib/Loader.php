<?php    
class Loader {
    public function __construct() {
 
    }
     
    public function loadClass()
    {
        function __autoload($classname) {
            $controller_cls = BASE_PATH . DS . "controllers" . DS . $classname . ".php";
            $model_cls = BASE_PATH . DS . "models" . DS . $classname . ".php";
            //$view_cls = "views/" . $classname . ".php";
            $lib = BASE_PATH . DS . "lib" . DS . $classname . ".php";
            if (file_exists($controller_cls)) {
                require_once($controller_cls);
                 
            } else if (file_exists($model_cls)) {
                require_once($model_cls);
                 
            } else if (file_exists($lib)) {
                require_once($lib);
                 
            } else {
                throw new Exception("Error loading files");
            }
        }
         
    }
}