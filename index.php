<?php
require("./a.php");
require("./b.php");
require("./c.php");

// 实例化命名空间下的类
/*$new_a = new web\one\Apple();
var_dump($new_a);

$new_b = new web\two\Apple();
var_dump($new_b);

echo $new_a->getinfo();
echo "<br/>";
echo $new_b->getinfo();*/

// use 引入
use web\one\Apple;
// use 引入 重命名
use web\two\Apple as BApple;

$new_apple = new Apple();
echo $new_apple->getinfo();
echo "<br>";

$new_apple = new BApple();
echo $new_apple->getinfo();
echo "<br>";

// 实例化全局类
$new_apple = new \Apple();
echo $new_apple->getinfo();