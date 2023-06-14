<?php 

require 'function.php';
require 'router.php';




$db = new Database();

$posts = $db->query("SELECT * FROM `posts`")->fetchAll(PDO::FETCH_ASSOC);


dd($posts);