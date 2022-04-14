<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Max-Age: 3600");
header("Access-Control-Allow-Headers: *");


$data = ["Name"=>"mounir", "age" =>23];
$JSON_data = json_encode($data);
print_r($JSON_data);
// if(isset($data->username)){

//     print_r(json_encode(["password"=>"test123", "email"=>"test@test.com"]));
// }else{
//     print_r(json_encode(["message"=>"errrrreur404"]));
// }
  
