<?php    
class IndexController extends Controller {
     
    //This is the controller class for index page which inherits from the Controller
    public function __construct(Model $model) {
        parent::__construct($model);
         
    }
     
    //default action as a function, you can add function to perform different action 
    //and pass the arguments through function 
    public function index()
    {
        $data["title"] = "Simple PHP MVC framework";
        $this->view->render("index/index", $data);
    }
}