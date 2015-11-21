<?php

require_once("models/db.php");
require_once("models/articles.php");

$link = db_connect();

$articles = articles_all($link);

require("views/articles.php");