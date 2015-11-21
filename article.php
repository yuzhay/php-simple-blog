<?php

require_once("models/db.php");
require_once("models/articles.php");

$link = db_connect();

$article = articles_get($link, $_GET['id']);

require("views/article.php");