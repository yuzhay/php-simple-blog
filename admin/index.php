<?php

require_once("../models/db.php");
require_once("../models/articles.php");

$link = db_connect();


$action = isset($_GET['action']) ? $_GET['action'] : "";

switch($action){
	case "add":
		action_add();
		break;
	case "edit":
		action_edit();
		break;
	case "delete":
		action_delete();
		break;
	default:
		action_list();
}

function action_add(){
	global $link;
	if(!empty($_POST)){
		articles_new($link, $_POST['title'], $_POST['date'], $_POST['content']);
		header("Location: index.php");
	}

	$article['title'] = "";
	$article['content'] = "";
	$article['date'] = "";
	require("../views/article_admin.php");
}

function action_edit(){
	global $link;
	if(!isset($_GET['id'])){
		header("Location: index.php");
	}
	$id = (int)$_GET['id'];
	if(!empty($_POST) && $id > 0){
		articles_edit($link, $id, $_POST['title'], $_POST['date'], $_POST['content']);
		header("Location:index.php");
	}

	$article = articles_get($link, $id);
	require("../views/article_admin.php");
}

function action_delete(){
	global $link;
	$id = (int)$_GET['id'];
	articles_delete($link, $id);
	header("Location: index.php");
}

function action_list(){
	global $link;
	$articles = articles_all($link);
	require("../views/articles_admin.php");
}

