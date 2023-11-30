<?php

namespace Controller;

use Traits\ResponseFormatter;


include "Traits/ResponseFormatter.php";
include "control/Controller.php";

class ProductController extends Controller{
    use ResponseFormatter;

    public function __construct()
    {
        $this -> controllerName = "Get All Product";
        $this -> controllerMethod = "GET";
    }

    public function getAllProduct(){
        $dummyData = [
            "Air Mineral",
            "Kebab",
            "Spaghetti",
            "Jus Jambu"
        ];

        $response = [
            "controller_attribute" => $this -> getControllerAttribute(),
            "product" => $dummyData
        ];

        return $this -> responseFormatter(200, "Success", $response);
    }
}