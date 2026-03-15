<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$data = [
  "keys" => [
    [
      "kty" => "oct",
      "kid" => "oOaPAaVCjL24z6wggMZrIA",
      "k"   => "VW1yyBLfRS-tm-1mKSv8Yw"
    ],
    [
      "kty" => "oct",
      "kid" => "oOaPAaVCjL24z6wggMZrEA",
      "k"   => "vn-dGgC70EeDNaSkg3kVfQ"
    ]
  ],
  "type" => "temporary"
];

echo json_encode($data);
?>
