<?php
const DATA_FILE=__DIR__.'/songs.json';
function h($v){return htmlspecialchars((string)$v,ENT_QUOTES,'UTF-8');}
function get_songs(){if(!file_exists(DATA_FILE))return []; $x=json_decode(file_get_contents(DATA_FILE),true);return is_array($x)?$x:[];}
function save_songs($x){file_put_contents(DATA_FILE,json_encode(array_values($x),JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES),LOCK_EX);}
function logged(){return !empty($_SESSION['dj_admin']);}
function need_login(){if(!logged()){header('Location: login.php');exit;}}
