<?php
// simple cors example
header('Access-Control-Allow-Origin: http://192.168.1.161:8080');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Content-Language');
// no caching header('Access-Control-Max-Age: 1728000');
header("Content-Type: text/plain");

echo "hello world";
