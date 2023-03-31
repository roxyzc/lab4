<?php

require_once("./include/header.php");
require_once("./required/function.php");

$mod = strpos(@$_REQUEST["mod"], "/") ? str_split(@$_REQUEST["mod"], strpos(@$_REQUEST["mod"], "/"))[0] : @$_REQUEST['mod'];

switch ($mod) {
    case "tambah":
        $page = 'tambah';
        break;
    case "rumah":
    case "":
        $page = 'rumah';
        break;
    case "ubah":
        $page =  'ubah';
        break;
    case "hapus":
        $page = "hapus";
        break;
    case "tentang":
        $page = "tentang";
        break;
    case "kontak":
        $page = "kontak";
        break;
    default:
        $page = 'error';
        break;
}

require $page . '.php';

require_once("./include/footer.php");
