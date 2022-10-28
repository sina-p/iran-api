<?php

include_once "../../../loader.php";

use \App\Services\CityService ;
use \App\Utilities\Response ;

$request_method = $_SERVER["REQUEST_METHOD"] ;


$request_body = json_decode(file_get_contents("php://input"),true) ;



switch ($request_method){
    case "GET" :
        $city_sevice = new CityService ;
        $province_id = $_GET["province_id"] ?? null;
        $request_data = [
            "province_id" => $province_id
        ] ;
        $response = $city_sevice->getCities($request_data) ;
        Response::respondAndDie($response,Response::HTTP_OK) ;

    case "POST" :
        Response::respondAndDie(["POST Request"],Response::HTTP_OK) ;

    case "PUT" :
        Response::respondAndDie(["PUT Request"],Response::HTTP_OK) ;

    case "DELETE" :
        Response::respondAndDie(["DELETE Request"],Response::HTTP_OK) ;

    default:
        Response::respondAndDie(["Invalid request method"],Response::HTTP_METHOD_NOT_ALLOWED) ;
}
