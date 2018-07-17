<?php
function  add($a,$b){
	return $a+$b;
}
function sub($a,$b){
return $a-$b;
}
function show(){
	return "欢迎使用王雪莉的接口";
}
$server=new SoapServer(
null,
array('uri'=>'http://10.128.19.51/')
);
$server->addFunction("show");
$server->addFunction("add");
$server->addFunction("sub");
$server->handle();