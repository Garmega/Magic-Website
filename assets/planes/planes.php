<?php

$theData = '<?xml version="1.0"?>
<note>
    <to>php.net</to>
    <from>lymber</from>
    <heading>php http request</heading>
    <body>i love php!</body>
</note>';

$list = scandir('D:\Projects\Magic Website\assets\planes');

print_r($list, 1);

$httpRequest_OBJ = new httpRequest($url, HTTP_METH_POST, $list);
//add the content type
$httpRequest_OBJ->setContentType = 'Content-Type: text/xml';
//add the raw post data
$httpRequest_OBJ->setRawPostData ($theData);
//send the http request
$result = $httpRequest_OBJ->send();
?>