<?php
//set html page language
header("Content-Type: text/plain;charset=utf-8");

$staff=array(
	array("name"=>"hongqi","number"=>"101","sex"=>"man","job"=>"manager"),
	array("name"=>"guojing","number"=>"102","sex"=>"man","job"=>"development"),
	array("name"=>"huangrong","number"=>"130","sex"=>"woman","job"=>"product_manager")
	);
if($_SERVER['REQUEST_METHOD']=="GET"){
	search();
}else if($_SERVER['REQUEST_METHOD'=="POST"]){
	create();
}

//search clerk by clerk number
function search(){
	//check is or isn't have the argument of clerk number
	//check isset is or not setted
	//variable $_GET and $_POST used cllect the form data
	if(!isset($_GET["number"])||empty($_GET["number"])){
		echo "argument error";
		return ;
	}
	global $staff;
	$number = $_GET["number"];
	$result = "not found the clerk!";
	foreach ($staff as $value) {
		if($value["number"]==$number){
			$result = "found the clerk:clear_number:".$value["number"].", clerk_name:".$value["name"].", clerk_sex:".$value["sex"].", clerk_job".$value["job"];
			break;
		}
	}
	echo $result;
}
//create the new clerk
function create(){
	if(!isset($_POST['name'])||empty($_POST["name"])||!isset($_POST['number'])||empty($_POST["number"])||isset($_POST["sex"])||empty($_POST["sex"])||isset($_POST["job"])||empty($_POST["job"])){
		echo "argument error,infomation less than require";
		return ;
	}
	echo "clerk:".$_POST["name"]."infomation save successful!";
}
?>